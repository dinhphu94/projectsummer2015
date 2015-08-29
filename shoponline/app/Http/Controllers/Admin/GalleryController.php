<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\GalleryRequest;
use App\Http\Controllers\AdminController;

use App\Product;
use App\Gallery;
use Lang;
use View;
use Route;
use Illuminate\Support\Facades\URL;
use DB;
use File;


class GalleryController extends AdminController {


    public function __construct(){
        $title = 'Images Management';
        $this->middleware('auth');
        $class_name= substr(__CLASS__,21);
        $action_name=substr(strrchr(Route::currentRouteAction(),"@"),1);
        View::share(array(
            'title'=> $title,
            'class_name'=> $class_name,
            'action_name'=> $action_name,
        ));

    }
    public function index($key) {
        $product_id = $key;
        $product_name = Product::find($key)->product_name;
        $images = Gallery::where('product_id', $key)->get();

        $productView = "";
        foreach($images as $image){
            $productView .= '<tr><td>
                        '.$image['id'].'
                    </td>
                    <td>
                        <img src="'.URL::to('/').'/'.$image['image_path'].'" width="100px" height="100px" />
                    </td>
                    <td>
                        '.$image['image_name'].'
                    </td>
                    <td>
                        <a href="'.URL::to('/').'/admin/gallery/del/'.$image['id'].'"><i class="glyphicon glyphicon-remove"></i> Delete</a>
                    </td>

                </tr>';
        }
        return view('admin.gallery.index')->with(['product_id' => $product_id, 'product_name' => $product_name, 'productView' => $productView]);
    }

    public function store(GalleryRequest $request) {
        $product_id = $request->product_id;
        $images = new Gallery();
        if($request->hasFile('images'))
        {
            $listImage = array();
            $files = $request->file('images');
            foreach($files as $file){
                $name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $picture = time() . $name . '.' . $extension;
                $file->move('images/product', $picture);
                $src = 'images/product/' . $picture;
                $data = array(
                    'product_id' => $product_id,
                    'image_name' => $name,
                    'image_path' => $src
                );
                autoAssignDataToProperty($images,$data);
                $listImage[] = $data;
            }
            $images->insert($listImage);
        }
        return redirect(URL::previous())->withSuccess(Lang::get('messages.create_success'));
    }


    public function destroy($id){
        DB::transaction(function () use($id) {});
            $image_path = Gallery::find($id)->image_path;
            unlink($image_path);
            Gallery::find($id)->delete();
        DB::commit();

        return redirect(URL::previous())->withSuccess(Lang::get('messages.delete_success'));
    }

}