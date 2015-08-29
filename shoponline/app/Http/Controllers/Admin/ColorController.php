<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\ColorRequest;
use Illuminate\Http\Request;
use App\Color;
use Lang;
use View;
use Route;
use DB;
use Datatables;
use Redirect;
use Validator;
use Input;

class ColorController extends AdminController
{

    public function index()
    {
        return view('admin.color.index');
    }

    public function getcreate()
    {
        return view('admin.color.create_edit');
    }


    public function postCreate(ColorRequest $request) {

        $input = $request->only('color_name');
        
        $data = Color::create($input);
        $data->save();

        return Redirect::to('admin/color');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $color
     * @return Response
     */
    public function getEdit($id) {

        $data = Color::find($id);
        return view('admin.color.create_edit', compact('data'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param $color
     * @return Response
     */
    public function postEdit(Request $request, $id) {

        $data = Color::find($id);
        $data -> color_name = $request ->color_name;
        $data -> save();
        return Redirect::to('admin/color');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $color
     * @return Response
     */
    public function postDelete($id)
    {
        $data= Color::find($id);
        $data->delete();
        return Redirect::to('admin/color');
    }

    public function data()
    {
        $color = Color::select(array('color.id','color.color_name','color.created_at','color.updated_at'));

        return Datatables::of($color) 
            ->add_column('actions', '
                <a href="{{{ URL::to(\'admin/color/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/color/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this color?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
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
                color::where('id', '=', $value) -> update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }


}

