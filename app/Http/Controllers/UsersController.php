<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
	//用户注册页面请求
	public function create()
	{
		return view('users.user_create');
	}
}
