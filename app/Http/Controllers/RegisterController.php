<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;
use App\Http\Requests\UserRequest;

class RegisterController extends Controller
{ 
    function reg() {
        $register = Register::get();
        dd($register);
    }
    public function index() {
        // $registerData = Register::all();  
        return view('index');
    }
    public function store(UserRequest $request)
    {
        Register::create($request->validated());
        return redirect('/homepage')->with('success', 'User registered successfully!');
    }
    public function homepage() {
        $registerData = Register::all();  
        return view('homepage',['registerData' => $registerData]);
    }
    public function delete($id) {
        $data = Register::find($id);
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Record deleted successfully');
        }
        return redirect()->back()->with('error', 'Record not found');
    }
    public function yourControllerMethod(UserRequest $request)
    {
    
    }
}
