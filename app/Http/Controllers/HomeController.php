<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Show the application caregivers.
     *
     * @return \Illuminate\Http\Response
     */
    public function caregivers()
    {
        return view('admin/caregivers');
    }

    /**
     * Show the application patients.
     *
     * @return \Illuminate\Http\Response
     */
    public function patients()
    {
        return view('admin/patients');
    }

    /**
     * Show the application pills.
     *
     * @return \Illuminate\Http\Response
     */
    public function pills()
    {
        return view('admin/pills');
    }

    /**
     * Show the application profiles.
     *
     * @return \Illuminate\Http\Response
     */
    public function profiles()
    {
        return view('admin/profiles');
    }

    /**
     * Show the application users.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        return view('admin/users');
    }

    /**
     * Make available the change of the application user's password.
     *
     * @return \Illuminate\Http\Response
     */
    public function settings()
    {
        return view('admin/settings');
    }
}
