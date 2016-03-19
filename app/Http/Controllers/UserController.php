<?php
/**
 * Created by PhpStorm.
 * User: hltravel
 * Date: 16/3/19
 * Time: 下午3:23
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    /**
     * 显示所给定的用户个人数据。
     *
     * @param  int  $id
     * @return Response
     */
    public function showProfile($id)
    {
        return '323';


        return view('user.profile', ['user' => User::findOrFail($id)]);
    }

    public function getIndex()
    {
        $results = DB::select('select * from users where id = ?', [1]);

        print_r($results);
        die;

        return 'index';
    }

    public function postProfile()
    {
        //
    }

    public function getLogin()
    {
        return 'login';
    }
}