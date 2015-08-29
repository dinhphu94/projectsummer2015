<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\MaterialRequest;
use Illuminate\Http\Request;
use App\Material;
use Lang;
use View;
use Route;
use DB;
use Datatables;
use Redirect;
use Validator;
use Input;

class MaterialController extends AdminController
{

    public function index()
    {
        return view('admin.material.index');
    }

    public function getcreate()
    {
        return view('admin.material.create_edit');
    }


    public function postCreate(MaterialRequest $request) {

        $input = $request->only('material_name');
        
        $data = Material::create($input);
        $data->save();

        return Redirect::to('admin/material');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $material
     * @return Response
     */
    public function getEdit($id) {

        $data = Material::find($id);
        return view('admin.material.create_edit', compact('data'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param $material
     * @return Response
     */
    public function postEdit(Request $request, $id) {

        $data = Material::find($id);
        $data -> material_name = $request ->material_name;
        $data -> save();
        return Redirect::to('admin/material');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $material
     * @return Response
     */
    public function postDelete($id)
    {
        $data= Material::find($id);
        $data->delete();
        return Redirect::to('admin/material');
    }

    public function data()
    {
        $material = Material::select(array('material.id','material.material_name','material.created_at','material.updated_at'));

        return Datatables::of($material) 
            ->add_column('actions', '
                <a href="{{{ URL::to(\'admin/material/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/material/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this material?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
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
                material::where('id', '=', $value) -> update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }


}

