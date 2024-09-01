<?php
 
 namespace App\Http\Controllers;

 use Illuminate\Http\Request;
 use Hash;
 use Session;
 use App\Models\User;
 use Illuminate\Support\Facades\Auth;
 use App\Models\Info;
 
 class AuthController extends Controller
 {
     public function showLogin()
     {
         return view('login');
     }
 
     public function login(Request $request)
     {
         $request->validate([
             'email' => 'required',
             'password' => 'required',
         ]);
 
         $credentials = $request->only('email', 'password');
         if (Auth::attempt($credentials)) {
             return redirect()->intended('page')
                         ->with('message', 'Signed in!');
         }
 
         return redirect('/login')->with('message', 'Login details are not valid!');
     }
 
     public function signup()
     {
         return view('registration');
     }
 
     public function signupsave(Request $request)
     {  
         $request->validate([
             'name' => 'required',
             'email' => 'required|email|unique:users',
             'password' => 'required|min:6',
         ]);
 
         $data = $request->all();
         $this->create($data);
 
         return redirect("page");
     }
 
     public function create(array $data)
     {
         return User::create([
             'name' => $data['name'],
             'email' => $data['email'],
             'password' => Hash::make($data['password'])
         ]);
     }    
 
     public function index()
     {
         if(Auth::check()){
             return view('page.index');
         }
         return redirect('/login');
     }
 
     public function signOut() {
         Session::flush();
         Auth::logout();
 
         return redirect('login');
     }
 
     public function list()
     {
         $info = Info::all();
         return view('page.listpage', compact('info'));
     }
 
     public function showCreateForm()
     {
         $info = new Info;
         return view('page.form', compact('info'));
     }
 
     public function add(Request $request)
     {
         $info = new Info;
         $this->save($info, $request);
 
         return redirect('/page')->with('success', 'ข้อมูลถูกบันทึกเรียบร้อยแล้ว');
     }
 
     public function edit($id)
     {
         $info = Info::findOrFail($id);
         return view('page.form', compact('info'));
     }
 
     public function update(Request $request, $id)
     {
         $info = Info::findOrFail($id);
         $this->save($info, $request);
 
         return redirect('/page')->with('success', 'ข้อมูลถูกอัปเดตเรียบร้อยแล้ว');
     }
 
     private function save($data, $request)
     {
         $data->methode_name = $request->methode_name;
         $data->reason_description = $request->reason_description;
         $data->office_name = $request->office_name;
         $data->date = $request->date;
         $data->attachdorder = $request->attachdorder;
         $data->attachdorder_date = $request->attachdorder_date;
         $data->devilvery_time = $request->devilvery_time;
         $data->save();
     }
 }
 