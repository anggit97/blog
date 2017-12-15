<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\User;

class UserController extends Controller
{
    public function getSignup(Request $request){
    	$this->validate($request,[
    		'username' => 'required|min:8|unique:users',
    		'name' => 'required|max:30',
    		'email' => 'required|email|unique:users',
    		'password' => 'required|min:8|max:255|confirmed',
    		'password_confirmation' => 'required|min:8|max:255'
    	]);

    	$user = new User();
    	$user->name = $request['name'];
    	$user->username = $request['username'];
    	$user->email = $request['email'];
    	$user->password = bcrypt($request['password']);
    	$user->img = "";

    	$user->save();

   		Auth::login($user);

    	return redirect()->route('dashboard');

    }

    public function getSignin(Request $request){
    	$this->validate($request,[
    		'username' => 'required',
    		'password' => 'required'
    	]);

    	if (Auth::attempt(['username' => $request['username'], 'password' => $request['password']])) {
    		return redirect()->route('dashboard');
    	}

    	return redirect()->back()->withErrors(['message'=>'Username dan Password Salah']);
    }

    public function getSignout(){
        Auth::logout();

        return redirect()->route('login');
    }

    public function getDashbaord(){
    	return view('dashboard');
    }

    public function getAccount($username){
        $user = User::where('username',$username)->first();
        return view('account',['user'=>$user]);
    }

    public function saveAccount(Request $request){
        $this->validate($request,[
            'name' => 'required|max:25'
        ]);

        $file = $request->file('image');
        $filename = $request['name'].'.jpg';

        $user = User::find($request['id']);
        $user->name = $request['name'];
        $user->img = $filename;
        $user->update();

        if ($file) {
            Storage::disk('local')->put($filename,File::get($file));
        }

        return redirect()->route('account',['username'=>$request['username']])->with(['message'=>'Berhasil Perbarui Akun']);
    }
    
    public function getApi(){
        $user = User::all();
        $response = [
            'user' => $user
            ];
        return response()->json($response,200);
    }
}
