<?php namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use App\User;
use DB;
use App\Http\Requests\Admin\CreateUserRequest;
use App\Http\Requests\Admin\EditUserRequest;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Input;
use File;
use Datatables;



class UserController extends AdminController {

    /*
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index(){
        return view('admin.users.index');
    }

    /*public function users_list(){
        $users = User::paginate(5);
        $users->setPath('users_list');
        return view('admin.pages.users_list', ['users' => $users]);
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function getCreate() {
        return view('admin.users.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function postCreate(CreateUserRequest $request) {

        $input = $request->only('name','email', 'password','admin','active');
        $input['password'] = bcrypt($request->password);
        $user = User::create($input);

        
        $user->remember_token = $request->_token;
        $user->save();

        return Redirect::to('admin/users');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $user
     * @return Response
     */
    public function getEdit($id) {

        $user = User::find($id);
        return view('admin.users.create_edit', compact('user'));
    }

    /*
     * Update the specified resource in storage.
     *
     * @param $user
     * @return Response
     */
    public function postEdit(EditUserRequest $request, $id) {

        $user = User::find($id);
        $user -> name = $request ->name;
        $user-> email = $request ->email;
        $user -> password = bcrypt($request->password);


        $user->remember_token = $request->_token;
        
        $user -> save();
        return Redirect::to('admin/users');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return Response
     */

    

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return Response
     */
    public function postDelete($id)
    {
        $user= User::find($id);
        $user->delete();
        return Redirect::to('admin/users');
    }

    /**
     * Show a list of all the languages posts formatted for Datatables.
     *
     * @return Datatables JSON
     */
    public function data()
    {
        $users = User::select(array('users.id','users.name','users.email','users.active','users.created_at'));

        return Datatables::of($users) 
            ->edit_column('active', '@if ($active=="1") <span class="glyphicon glyphicon-ok"></span> @else <span class=\'glyphicon glyphicon-remove\'></span> @endif')
            ->add_column('actions', '@if ($id!="1")
                <a href="{{{ URL::to(\'admin/users/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil">Edit</span></a>
                    <a href="{{{ URL::to(\'admin/users/\' . $id . \'/delete\' ) }}}" onclick="return confirm(\'Do you want to delete this user?\')" class="btn btn-sm btn-danger" ><span class="glyphicon glyphicon-trash">Delete</span></a>
                @endif')
            ->remove_column('id')
            ->make();
    }

}
