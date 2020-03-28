<?php

namespace App\Http\Controllers;

use App\ModelFamily;
use App\ModelUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserAction extends Controller
{
    //
    public function index(){
        if(!Session::get('login')){
            return redirect('/')->with('alert','You have to login!');
        }
        else{
            $data = ModelUser::where('id',Session::get('uid'))->first();
            return view('home_user',['data' => $data]);
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $email = $request->email;
        $password = $request->password;

        $data = ModelUser::where('email',$email)->first();
        if($data){ //apakah email tersebut ada atau tidak
            if(Hash::check($password,$data->password)){
                Session::put('uid',$data->id);
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('login',TRUE);

                return redirect('home_user');
            }
            else{
                return redirect('/')->with('alert','Wrong password !');
            }
        }
        else{
            return redirect('/')->with('alert','Wrong Username!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/')->with('alert','You have been logout.');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        try {
            $this->validate($request, [
                'user_name' => 'required|min:4',
                'family_name' => 'required',
                'email' => 'required|min:4|email|unique:users',
                'password' => 'required',
                'confirmation' => 'required|same:password',
            ]);

            $data = new ModelUser();
            $datafamily = new ModelFamily();

            $datafamily->family_name = $request->family_name;
            $datafamily->save();

            $id_family = $datafamily->id;

            $data->name = $request->user_name;
            $data->id_family = $id_family;
            $data->email = $request->email;
            $data->password = bcrypt($request->password);
            $data->save();
            return redirect('/')->with('alert-success', 'You have been registered successfully');
        }catch(\Exception $e){
            return redirect('/register')->with('alert',$e->getMessage());
        }
    }

    public function addSetCategoryPost(Request $request){
        try {
            $this->validate($request, [
                'name' => 'required|min:4'
            ]);

            return redirect('/setCategory')
                ->with('alert-success', 'Category has been added.')
                ->with('after-update', 'true');
        }catch(\Exception $e){
            return redirect('/setCategory')->with('alert',$e->getMessage());
        }
    }
}
