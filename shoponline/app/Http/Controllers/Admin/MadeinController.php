<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\Http\Requests\Admin\MadeinRequest;
use Illuminate\Http\Request;
use App\Madein;
use Lang;
use View;
use Route;
use DB;
use Datatables;
use Redirect;
use Validator;
use Input;

class MadeinController extends AdminController
{

    public function index()
    {
        return view('admin.madein.index');
    }

    public function getcreate()
    {
        return view('admin.madein.create_edit');
    }


    public function postCreate(MadeinRequest $request) {

        $input = $request->only('madein_name');
        
        $data = Madein::create($input);
        $data->save();

        return Redirect::to('admin/madein');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $madein
     * @return Response
     */
    public function getEdit($id) {

        $data = Madein::find($id);
        return view('admin.madein.create_edit', compact('data'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param $madein
     * @return Response
     */
    public function postEdit(Request $request, $id) {

        $data = Madein::find($id);
        $data -> madein_name = $request ->madein_name;
        $data -> save();
        return Redirect::to('admin/madein');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $madein
     * @return Response
     */
    public function postDelete($id)
    {
        $data= Madein::find($id);
        $data->delete();
        return Redirect::to('admin/madein');
    }

    public function data()
    {
        $madein = Madein::select(array('madein.id','madein.madein_name','madein.created_at','madein.updated_at'));

        return Datatables::of($madein) 
            ->add_column('actions', '
                <a href="{{{ URL::to(\'admin/madein/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/madein/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this value?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
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
                madein::where('id', '=', $value) -> update(array('position' => $order));
                $order++;
            }
        }
        return $list;
    }


}

