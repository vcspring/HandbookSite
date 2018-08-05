<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UsersController extends Controller
{
	//新用户注册页面请求
	public function create()
	{
		return view('users.user_create');
	}

  //根据id显示用户信息
	public function show(User $user)
  {
  	//注意这里$user变量由eloquent从数据库中取得，即模型库
    return view('users.show', compact('user'));
  }

  //用户注册填写完资料，进行用户信息存储等的处理
  public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        session()->flash('success', '欢迎，您将在这里开启一段新的旅程~');

        return redirect()->route('users.show', [$user]);
    }
}
