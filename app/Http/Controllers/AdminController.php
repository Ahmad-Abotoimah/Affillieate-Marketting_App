<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Result;
use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //

public function index()
{
    /*
     * send data to the dashboard with pagination
     * */
    $users   =  User::whereRole('user')->latest()->paginate(5);
    $admins  =  User::all()->where('role','admin');
    return view('admin/users', [
        'users'   => $users,
        'admins'   => $admins,
    ]);
}

/**
 * Show the form for creating a new resource.
 *
 * @return Application|Factory|View
 */
public function create()
{
    /*
     * return creation form
     * */
    return view('admin/create-admin');
}

/**
 * Store a newly created resource in storage.
 *
 * @param Request $request
 * @return Application|RedirectResponse|Response|\Illuminate\Routing\Redirector
 */
public function store(Request $request)
{
    /*
     * to store admin data
    */
    $password = Hash::make('password');
    $admin = new User;
    $admin->name = $request->name;
    $admin->user_name = $request->name;
    $admin->user_image = 'https://i.pinimg.com/originals/34/60/3c/34603ce8a80b1ce9a768cad7ebf63c56.jpg';
    $admin->email = $request->email;
    $admin->password = $password;
    $admin->role = $request->role;
    $admin->save();
    return redirect('dashboard');
}
/**
 *
 * /**
 * Display the specified resource.
 *
 * @param Admin $admin
 * @return Response
 */
public function show(Admin $admin)
{
    //
}

/**
 * Show the form for editing the specified resource.
 *
 * @param $id
 * @return Application|Factory|View
 */
public function edit($id)
{
    //
}


/**
 * Update the specified resource in storage.
 *
 * @param Request $request
 * @param Admin $id
 * @return RedirectResponse
 */
public function update(Request $request , $id): RedirectResponse
{
//
}

/**
 * Remove the specified resource from storage.
 *
 * @param admin $id
 * @return RedirectResponse
 */
public function destroy($id): RedirectResponse
{
   //
}
}
