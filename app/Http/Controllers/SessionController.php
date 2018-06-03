<?php

namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('user.index',['users' => $users,'page' => 'Users']);
    }

    public function home(){

        return view('welcome',['user' => auth()->user(),'page' => 'Homepage']);

    }

    public function create(){

        return view('user.login',['page' => 'Login']);

    }

    public function register(){

        return view('user.register',['page' => 'Create Account']);

    }

    public function store(Request $request){
        //validate request
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //attempt to login the user
        if(!auth()->attempt(['email' => $request->email,'password' => $request->password])){
            return back();
        }

        //redirect to the homepage
        return redirect('/home');
    }

    public function fresh(Request $request){

        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required'
        ]);

        $role = Role::where('role',$request->role)->first();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if(!$user){
            return ['status' => 'Registration Failed'];
        }

        $user->roles()->attach($role->id);


            return response(200);
    }

    public function destroy(){
        auth()->logout();
        return redirect('login');
    }

}
