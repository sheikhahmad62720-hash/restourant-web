<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Rest;
use App\Models\Signup;



class RestoController extends Controller
{
    public function home(){
    return view('home');

    }
  public function index(){
    return view('layout');
  }

   public function list()
    {
        $data= Rest::all();
        return view('list',['data'=>$data]);
    }
    public function add(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'address'=>'required',
        ]);
        Rest::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'address'=>$request->address,
        ]);
      return redirect()->back()->with('success', 'Data saved successfully!');
    }
    public function delete($id){
       $del = Rest::find($id);
       $del->delete();
       return redirect()->back()->with('success', 'Data deleted successfully!');
}

    public function edit($id){
        $dl = Rest::find($id);
        return view('edit',['dl'=>$dl]);
    }

    public function update(Request $request, $id)
{
    $data = Rest::find($id);

    $data->name = $request->name;
    $data->email = $request->email;
    $data->address = $request->address;

    $data->save();

    return redirect('list');
    }
  public function signup(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'address'=>'required',
            'contact'=>'required',
        ]);
        Signup::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'address'=>$request->address,
            'contact'=>$request->contact,

        ]);
      return redirect('/');
    
  }
public function loggedin(Request $request)
{
    $user = Signup::where('email', $request->email)->first();
  
    if (!$user) {
        return back()->with('error', 'User not found');
    }

    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Wrong password');
    }

    Session::put('Signup', $user->name);

    return redirect('/');
}
public function logout()
{
    Session::forget('Signup');
    return redirect('/login');
}
}