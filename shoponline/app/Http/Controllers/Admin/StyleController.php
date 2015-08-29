<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\StyleRequest;
use Illuminate\Http\Request;
use App\Style;
use Lang;
use View;
use Route;
use DB;
use Datatables;
use Redirect;
use Validator;
use Input;

class StyleController extends AdminController
{

    public function index()
    {
        return view('admin.style.index');
    }

    public function getcreate()
    {
        return view('admin.style.create_edit');
    }


    public function postCreate(StyleRequest $request) {

        $input = $request->only('style_name');
        
        $data = Style::create($input);
        $data->save();

        return Redirect::to('admin/style');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $style
     * @return Response
     */
    public function getEdit($id) {

        $data = Style::find($id);
        return view('admin.style.create_edit', compact('data'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param $style
     * @return Response
     */
    public function postEdit(Request $request, $id) {

        $data = Style::find($id);
        $data -> style_name = $request ->style_name;
        $data -> save();
        return Redirect::to('admin/style');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $style
     * @return Response
     */
    public function postDelete($id)
    {
        $data= Style::find($id);
        $data->delete();
        return Redirect::to('admin/style');
    }

    public function data()
    {
        $style = Style::select(array('style.id','style.style_name','style.created_at','style.updated_at'));

        return Datatables::of($style) 
            ->add_column('actions', '
                <a href="{{{ URL::to(\'admin/style/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/style/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this style?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
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
                Style::where('id', '=', $value) -> update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }


}

