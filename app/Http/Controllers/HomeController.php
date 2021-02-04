<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UsuariosModel;

class HomeController extends Controller
{
    public function index()
    {
        if(session('is_logged') !== null) 
        {
            return view('welcome');
        } 
        else 
        {
            return view('Home.home');
        }

    }


    public function login()
    {
        if(session('is_logged') !== null) return redirect('/');

        return view('Home.login', ["error"=>request('error')]);
    }
    public function loginAuth(){
        if(session('is_logged') !== null) return redirect('/');

        $username = request('username');
        $password = md5(request("password"));

        $user = UsuariosModel::where(
            ['user' => $username,
            'password' => $password ]
        )->first();

        if($user !== null) {
            session(['is_logged' => true]);
            session(['username' => $user->user]);
            return redirect('/');
        } else {
            return redirect('/login?error=1');
        } 
    }

    public function signup(){
        if(session('is_logged') !== null) return redirect('/');
        return view('Home.signup', ['error'=>request('error')]);
    }

    public function signupAuth(){
        if(session('is_logged') !== null) return redirect('/');
        
        $username = request('username');
        $password = md5(request('password'));

        $user = UsuariosModel::where(['user' => $username])->first();

        if( $user === null){
            $newUser = new UsuariosModel();
            $newUser->user = $username;
            $newUser->password = $password;
            $newUser->save();

            session(['is_logged'=>true]);
            session(['username'=>$username]);

            return redirect('/');
        } else {
            return redirect('/signup?error=1');
        }
    }

    public function logout(){
        session()->flush();
        return redirect('/');
    }
}
