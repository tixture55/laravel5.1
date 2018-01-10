<?php

namespace App\Http\Controllers;

use App\User;
//use App\Repositories\UserRepository;
use App\Http\Controllers\Controller;
//use DB;

class UserController extends Controller
{

    /**
     * 指定ユーザのプロフィール表示
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
	//return view('user.profile', ['user' => User::findOrFail($id)]);
	return view('user.user');
    }
}
