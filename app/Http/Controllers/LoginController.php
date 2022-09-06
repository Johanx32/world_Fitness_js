<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password'])) == false ){
            return back()->withErrors([
                'message' => 'El usuario o la contraseña son incorrectos, porfavor vuelva a intentar',
            ]);
        } 

           else if (auth()->user()->role == 'gerente') {
                return redirect()->to('gerente');            
           }

            else if (auth()->user()->role == 'entrenador') {
                return redirect()->to('entrenador');
            }

            else if (auth()->user()->role == 'cliente') {
                return redirect()->to('cliente');
            } 
            
            else {
                return redirect()->to('/login');
            }    
    }
    public function destroy(){
        auth()->logout();

        return redirect()->to('/login');
    }





   /* public function show(){
        if(Auth::check()){
            return redirect('/gerente');
        }
        return view('auth.login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getCredentials();
        if(!Auth::validate($credentials)){
            return redirect()->to('/login')->withErrors('auth.failed');
        }
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);
        return $this->authenticated($request,$user);
    }
    public function authenticated($request, $user){
        return redirect('/');
    }*/
}
 