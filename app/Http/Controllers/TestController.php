<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hoge;
use DB;

class TestController extends Controller
{
	public function index(Hoge $hoge)
    {
        // 「そういう気分じゃないんだ...」だそう。
        // つまりインスタンスが新しく生成されていまっている。
        $hoge->sayHello();
	$users = DB::select('select * from flights');
	
	/*$result = DB::table('flights')
            ->where('title', '=', 'John')
            ->orWhere(function ($query) {
                $query->where('posts_id', '>', 1)
                      ->where('status', '<>', 'open');
            })
            ->get();
*/
	//DB::table('posts')->remember(120)->get();
       
 
	//return view('about', ['users' => $users , 'column' => $column_diff]); 
	//return view('about', ['users' => $users]); 
	return view('about', ['users' => $users]); 
        //$user = $this->users->find($id);

        //return view('user.profile', ['user' => $user]);
    }
	public function detail(){



	}
}
