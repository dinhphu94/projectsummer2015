<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;

use App\Height;
use App\Http\Requests;
use App\Http\Requests\Admin\ProductRequest;
use App\Size;
use App\Color;
use App\Brand;
use App\Madein;
use App\Material;
use Illuminate\Http\Request;
use App\libraries\UploadImage;
use App\Product;
use App\Category;
use Lang;
use View;
use Route;
use Input;
use Datatables;
use Redirect;

class ProductController extends AdminController
{


    public function index()
    {
        return view('admin.product.index');
    }

    public function create()
    {
        $objProduct                 = new Product();
        

        $categories                     = Category::all()->toArray();
        $getViewAllCategoryForSelectTag = null;
        getAllCategoryForSelectTag($categories, $parent = 0, $text = "", $select = 0, $getViewAllCategoryForSelectTag);

         $getViewAllSizeForSelectTag   = Size::getViewAllSizeForSelectTag();

        $getViewAllMadeInForSelectTag   = Madein::getViewAllMadeInForSelectTag();

        $getViewAllMaterialForSelectTag = Material::getViewAllMaterialForSelectTag();

         $getViewAllBrandForSelectTag   = Brand::getViewAllBrandForSelectTag();

         $getViewAllColorForSelectTag   = Color::getViewAllColorForSelectTag();




        return view("admin.product.create")->with([
            'getViewAllCategoryForSelectTag' => $getViewAllCategoryForSelectTag,
            'getViewAllSizeForSelectTag'   => $getViewAllSizeForSelectTag,
            'getViewAllColorForSelectTag'   => $getViewAllColorForSelectTag,
            'getViewAllBrandForSelectTag'   => $getViewAllBrandForSelectTag,
            'getViewAllMadeInForSelectTag'   => $getViewAllMadeInForSelectTag,
            'getViewAllMaterialForSelectTag' => $getViewAllMaterialForSelectTag,
            
        ]);
    }


    public function store(ProductRequest $request)
    {
        //Get all Request
        $allRequest = $request->all();

        //Upload file to public/upload/product
        $fileName = UploadImage::uploadImageProduct('image');

        //Convert Money From String To Value
        $allRequest['price_import'] = convertStringToValueOfMoney($allRequest['price_import']);
        $allRequest['price']        = convertStringToValueOfMoney($allRequest['price']);
        
        //Assign name for image product
        $allRequest['image'] = $fileName;

        $objProduct = new Product();
        autoAssignDataToProperty($objProduct, $allRequest);
        $objProduct->save();

        return redirect()->action('Admin\ProductController@index');
            
    }

    
    public function edit($id)
    {
        $objProduct     = new Product();
        $getProductById = $objProduct->find($id);

        if ($getProductById == null) {
            return redirect()->action('Admin\ProductController@index')->withErrors(Lang::get('messages.no_id'));
        }
        
        $idSelectedOfCategory           = $getProductById['category_id'];
        $categories                     = Category::all()->toArray();
        $getViewAllCategoryForSelectTag = null;
        getAllCategoryForSelectTag($categories, $parent = 0, $text = "", $idSelectedOfCategory, $getViewAllCategoryForSelectTag);

        $idSelectedOfSize         = $getProductById['size_id'];
        $getViewAllSizeForSelectTag = Size::getViewAllSizeForSelectTag($idSelectedOfSize);

        $idSelectedOfColor       = $getProductById['color_id'];
        $getViewAllColorForSelectTag = Color::getViewAllColorForSelectTag($idSelectedOfColor);

        $idSelectedOfBrand         = $getProductById['brand_id'];
        $getViewAllBrandForSelectTag = Brand::getViewAllBrandForSelectTag($idSelectedOfBrand);

        $idSelectedOfMadein           = $getProductById['madein_id'];
        $getViewAllMadeInForSelectTag = Madein::getViewAllMadeInForSelectTag($idSelectedOfMadein);

        $idSelectedOfMaterial           = $getProductById['material_id'];
        $getViewAllMaterialForSelectTag = Material::getViewAllMaterialForSelectTag($idSelectedOfMaterial);



        return view('admin.product.edit')->with([
            'getProductById'                 => $getProductById,
            
            'getViewAllCategoryForSelectTag' => $getViewAllCategoryForSelectTag,
            'getViewAllSizeForSelectTag'    => $getViewAllSizeForSelectTag,
            'getViewAllColorForSelectTag'    => $getViewAllColorForSelectTag,
            'getViewAllBrandForSelectTag'    => $getViewAllBrandForSelectTag,
            'getViewAllMadeInForSelectTag'   => $getViewAllMadeInForSelectTag,
            'getViewAllMaterialForSelectTag' => $getViewAllMaterialForSelectTag,
           
        ]);
    }

    public function update(ProductRequest $request)
    {
        $allRequest     = $request->all();
        $idProduct      = $allRequest['id'];
        $objProduct     = new Product();
        $getProductByid = $objProduct->find($idProduct);

        if ($getProductByid == null) {
            return redirect()->action('Admin\ProductController@index')->withErrors(Lang::get('messages.no_id'));
        }
        //Convert Money From String To Value
        $allRequest['price_import'] = convertStringToValueOfMoney($allRequest['price_import']);
        $allRequest['price']        = convertStringToValueOfMoney($allRequest['price']);
       

        $nameInputUploadImageProduct = 'image';
        $NameFileImageNeedToDelete   = $getProductByid['image'];
        $newAllRequest               = UploadImage:: uploadNewImageAndDeleteOldImageProduct($nameInputUploadImageProduct, $allRequest, $NameFileImageNeedToDelete);
        autoAssignDataToProperty($getProductByid, $newAllRequest);
        $getProductByid->save();

        return redirect('admin/product');
    }

    public function delete($id)
    {
        $product= Product::find($id);
        $product->delete();
        return Redirect::to('admin/product');
    }

    #data

    public function data()
    {
        $product = Product::join('size','size.id','=','product.size_id')
                          ->join('color','color.id','=','product.color_id')
                          ->join('brand','brand.id','=','product.brand_id')
                          ->join('material','material.id','=','product.material_id')
                          
                
                          ->join('categories','categories.id','=','product.category_id')
                          ->select(array('product.id','product.image as image','product.name_product','product.price','size.size_value as size','color.color_name as color','brand.brand_name as brand','material.material_name as material',
                            'categories.category_name as category'))
                          ->orderBy('product.name_product', 'ASC');

        return Datatables::of($product) 
            ->edit_column('image', '<img src="{{{ URL::to(\'upload/product/\' . $image) }}}" alt="" height="80" width="80"/>')
            ->add_column('actions', '
                <a href="{{{ URL::to(\'admin/product/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm " ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/product/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this product?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
                ')
            ->remove_column('id')
            ->make();
    }

}

