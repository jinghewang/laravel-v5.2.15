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

        $this->test_array();
        die;
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

    public function test_array()
    {
        $a = ['a' => 1, 'b' => 2, 'c' => 3];
        $b = [
            ['id' => 1, 'name' => 'wjh'],
            ['id' => 2, 'name' => 'lht'],
            ['id' => 3, 'name' => 'wdd']
        ];
        //循环1
        while ($key = key($a)) {
            var_dump($key);
            next($a);
        }

        //循环2
        reset($a);
        while ($item = current($a)) {
            var_dump($item);
            next($a);
        }

        $fruits = array("apple", "banana", "orange", "pear");
        var_dump('---------------');
        while(list($id,$name) = each($b)){
            //echo "id:{$id} name:{$name}<br>";
        }

        while(list($k,$v) = each($fruits)){
            echo "$k:$v";
        }

        var_dump('---------------');
        $nlist = ['wjh','lht'];
        list($w,$l) = $nlist;
        echo $w,$l;


        list($v1,list($v2,$v3)) = [11,[22,33]];
        echo 'v1:',$v1,'v2: ',$v2,'v3: ',$v3;

//        $data = array_slice($a, 1, 2);
//        print_r($data);
//
//        $data = array_splice($a, 1, 2, ['b' => 22, 'c' => 33]);
//        print_r($data);
//
//        print_r($a);
    }
}