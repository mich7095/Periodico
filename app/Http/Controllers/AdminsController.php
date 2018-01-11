<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;


class AdminsController extends Controller
{
    public function show($username)
    {
      $admin = Admin::where('username', $username)->first();
        return view('admins.show',[
          'admin' => $admin,
        ]);
    }
}
