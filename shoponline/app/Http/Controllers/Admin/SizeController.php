<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\SizeRequest;
use Illuminate\Http\Request;
use App\Size;
use Lang;
use View;
use Route;
use DB;
use Datatables;
use Redirect;
use Validator;
use Input;

class SizeController extends AdminController
{

    public function index()
    {
        return view('admin.Size.index');
    }

    public function getcreate()
    {
        return view('admin.size.create_edit');
    }


    public function postCreate(SizeRequest $request) {

        $input = $request->only('size_value');
        
        $data = Size::create($input);
        $data->save();

        return Redirect::to('admin/size');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $Size
     * @return Response
     */
    public function getEdit($id) {

        $data = Size::find($id);
        return view('admin.size.create_edit', compact('data'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param $Size
     * @return Response
     */
    public function postEdit(Request $request, $id) {

        $data = Size::find($id);
        $data -> size_value = $request ->size_value;
        $data -> save();
        return Redirect::to('admin/size');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $Size
     * @return Response
     */
    public function postDelete($id)
    {
        $data= Size::find($id);
        $data->delete();
        return Redirect::to('admin/size');
    }

    public function data()
    {
        $size = Size::select(array('size.id','size.size_value','size.created_at','size.updated_at'));

        return Datatables::of($size) 
            ->add_column('actions', '
                <a href="{{{ URL::to(\'admin/size/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/size/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this size?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
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
                Size::where('id', '=', $value) -> update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }


}

