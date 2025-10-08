<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\AdminModel;
use App\Models\BlogModel;
use App\Models\ContactModel;
use App\Models\PortfolioModel;
use App\Models\ServiceModel;

class AdminIndexController extends Controller
{

    public function AdminIndexPage()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.login');
    }

    public function login_page()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        return view('admin.auth.login');
    }

    public function check_login(Request $request)
    {
        // dd($request->all());
        // Validate input
        $request->validate([
            'email' => 'required',
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9]+$/'],
        ], [
            'password.regex' => 'Password must contain only letters and numbers.'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully!');
        }

        return redirect()->back()->with('error', 'Invalid login credentials!');
    }

    public function AdminLogin(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => ['required', 'string', 'regex:/^[a-zA-Z0-9@.]+$/'],
        ], [
            'password.regex' => 'Password can only contain letters, numbers, @, and .'
        ]);

        if (
            Auth::guard('admin')->attempt([
                'email' => $request->email,
                'password' => $request->password
            ])
        ) {
            return redirect()->route('admin.dashboard')->with('success', 'Logged in successfully!');
        }

        return redirect()->back()->with('error', 'Invalid login credentials!');
    }


    public function AdminLogout(Request $request)
    {

        Auth::guard('admin')->logout();

        return redirect()->route('admin.index')->with('success', 'Successfully logged out!');
    }

    public function AdminRegister()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.auth.register');
    }

    public function Admin_register_post(Request $request)
    {

        $request->validate([

            'email' => 'required|email',

            'password' => [
                'required',
                'string',
                'confirmed',
                'regex:/^[a-zA-Z0-9@.]+$/'
            ],
        ], [

            'password.regex' => 'Password can only contain letters, numbers, @, and .',
            'password.confirmed' => 'Password confirmation does not match.',

            'email.required' => 'Email is required.',
            'email.email' => 'Please enter a valid email address.',
        ]);
        // dd($request->all());

        try {
            AdminModel::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'in_hash' => base64_encode($request->password),
            ]);

            return redirect()->route('admin.index')->with('success-register', 'Successfully registered please Login!');

        } catch (\Exception $e) {
            return redirect()->route('admin.register')->with('error', 'Registration failed: ' . $e->getMessage());
        }
    }

    public function AdminDashboard()
    {
        $totalService = ServiceModel::count();
        $totalportfolio = PortfolioModel::count();
        $totalblog = BlogModel::count();
        $totalcontact = ContactModel::count();
        return view('admin.index', compact('totalService', 'totalportfolio', 'totalblog', 'totalcontact'));
    }

}
