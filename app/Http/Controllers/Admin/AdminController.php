<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminController extends Controller
{
    public function index(){
    	return view('admin.index');
    }

    public function signin(Request $request)
	{
		$method = $request->isMethod('post');
		// dd($method);
            switch ($method) {
                case true:
                // dd($method);
                        $this->validate($request, [
                            'email' => 'required|min:4',
                            'password' => 'required|min:4'
                        ]);
                        $authenticate_user = Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')]);
                        if ($authenticate_user) {
                            return redirect('admin/home')->with('success','Welcome Admin');
                        }else{
                            return back()->with('delete', 'Wrong Email or Password');
                        }
                break;
                case false:
                    if (Auth::check()) {
                        return redirect('/admin');
                    }
                    return $this->index();
                break;
                default:
                    if (Auth::check()) {
                        return redirect('/admin');
                    }
                    return $this->index();
                break;
            }
	}

	public function signup(Request $request)
    {
         $method = $request->isMethod('post');
            switch ($method) {
                case true:
                        $this->validate($request, [
                            'email' => 'required|unique:users',
                            'password' => 'required|min:4',
                            'confirm_password' => 'required|min:4'
                        ]);
                        $password = $request->input('password');
                        $confirm_password = $request->input('confirm_password');
                        if ($password === $confirm_password) {
                            $role = Role::where('name', 'Admin')->first();
                            $user = new User([
                              'email' => $request->input('email'),
                              'password' => Hash::make($password),
                              ]);
                            $user->role()->associate($role);
                            $user->save();
                            return redirect('admin/index')->with('success','Admin created successfully!');
                        }else{
                            return redirect('admin/create')->with('delete_message', 'Password does not match!');
                        }
                break;
                case false:
                    // return $this->index();
                break;
                default:
                    // return $this->index();
                break;
            }
    }

    public function home(){
    	return view('admin.home')->with('success', 'Welcome back admin');
    }

}
