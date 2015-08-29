<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\BrandRequest;
use Illuminate\Http\Request;
use App\Brand;
use Lang;
use View;
use Route;
use DB;
use Datatables;
use Redirect;
use Validator;
use Input;

class BrandController extends AdminController
{

    public function index()
    {
        return view('admin.brand.index');
    }

    public function getcreate()
    {
        return view('admin.brand.create_edit');
    }


    public function postCreate(BrandRequest $request) {

        $input = $request->only('brand_name');
        
        $data = Brand::create($input);
        $data->save();

        return Redirect::to('admin/brand');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $brand
     * @return Response
     */
    public function getEdit($id) {

        $data = brand::find($id);
        return view('admin.brand.create_edit', compact('data'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param $brand
     * @return Response
     */
    public function postEdit(Request $request, $id) {

        $data = Brand::find($id);
        $data -> brand_name = $request ->brand_name;
        $data -> save();
        return Redirect::to('admin/brand');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $brand
     * @return Response
     */
    public function postDelete($id)
    {
        $data= Brand::find($id);
        $data->delete();
        return Redirect::to('admin/brand');
    }

    public function data()
    {
        $brand = Brand::select(array('brand.id','brand.brand_name','brand.created_at','brand.updated_at'));

        return Datatables::of($brand) 
            ->add_column('actions', '
                <a href="{{{ URL::to(\'admin/brand/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/brand/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this brand?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
                ')
            ->remove_column('id')
            ->make();
    }

    /**
     * Reorder items
     *
     * @param items list
     * @return items from @param
     */
    public function getReorder(ReorderRequest $request) {
        $list = $request->list;
        $items = explode(",", $list);
        $order = 1;
        foreach ($items as $value) {
            if ($value != '') {
                brand::where('id', '=', $value) -> update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }


}

