<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function index() {
        $registerData = Register::all();  
        return view('index',['registerData' => $registerData]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_no' => 'required',
            'place' => 'required',
        ]);

        Register::create($validatedData);

        return redirect('/signup')->with('success', 'User registered successfully!');
    }
    public function delete($id) {
        $data = Register::find($id);
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Record deleted successfully');
        }
        return redirect()->back()->with('error', 'Record not found');
    }
    function reg() {
        $register = Register::get();
        dd($register);
    }
}
