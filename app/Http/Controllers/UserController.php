<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        $count = User::count();
        $countKelas = Kursus::count();
        return view('admin.dashboard.dashboard',[
            'user' => $count,
            'kelas' => $countKelas
        ]);
    }
    public function index1(){
        $user = Auth::user();
        // dd($user);

        // dd($kursu, $modul_kursu);
        // if (!$user->hasActiveSubscription()) {
        //     Jika pengguna tidak memiliki langganan aktif, arahkan mereka ke halaman lain atau tampilkan pesan
        //     return redirect()->route('user.dashboard')->with('error', 'Anda harus memiliki langganan aktif untuk mengakses modul ini.');
        // }
        return view('admin.dashboard.userdashboard',[
            'checkSubscription' => $user
        ]);
    }
    public function viewLogin()
    {
        return view('admin.users.login');
    }
    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            } elseif ($user->role == 'user') {
                return redirect()->route('user.dashboard');
            } else {
                return redirect('/');
            }
        }
        // if(Auth::attempt($credentials)){
        //     $request->session()->regenerate();

        //     return redirect()->intended('/');
        // }
        return back()->with('loginError', 'Login Gagal');
        // dd("Berhasil Login");
    }
    public function viewRegister()
    {
        return view('admin.users.register');
    }
    public function register(Request $request)
    {
        // dd($request);
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string'

        ]);
        $validateData['password'] = Hash::make($request['password']);
        // dd($validateData);
        // $user = $this->create($request->all());
        User::create($validateData);
        // auth()->login($user);
        return redirect('/login');
    }

    //  protected function create(array $data)
    // {
    //     return User::create([
    //         'nama' => $data['nama'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/');
    }
}
