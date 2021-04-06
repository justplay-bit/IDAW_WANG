<?php


namespace app\index\controller;


use app\index\model\User;
use think\Controller;

class Login extends Controller
{
    //登录页
    public function login()
    {
        return view('login');
    }
    //登录处理
    public function ajaxLogin()
    {
        $user = new User();
        $data = array('code' => 201, 'msg' => '异常信息');
        $name = $_POST['name'];;
        if ($_POST) {
            $result = $user->where('name', $name)->find();
            if ($result != null) {
                if (md5($_POST['password']) == $result['password']) {
                    $data['code'] = 200;
                    session('admin_id', $result['id']);
                    $data['msg'] = '登录成功';
                } else {
                    $data['msg'] = '账号或密码错误';
                }
            } else {
                $data['msg'] = '未注册账号';
            }
        } else {
            $data['msg'] = '错误提交方式';
        }
        echo json_encode($data);
    }
//注册处理
    public function loginregister(){
        $data = array('code' => 201, 'msg' => '异常信息');
        $admins = new  User();
        $_POST['password'] = md5($_POST['password']);
       if ( $_POST['age'] =='1-40'){
           $_POST['quantity']=3600;
       }else if ($_POST['age'] =='40-60'){
           $_POST['quantity']=2600;
       }else{
           $_POST['quantity']=1600;

       }
        $save = $admins->save($_POST);
        if ($save){
            $data['code'] = 200;
            $data['msg'] = '注册成功';
        }else{
            $data['msg'] = '注册成功';

        }
        echo json_encode($data);
    }
    public function logout()
    {

        session('admin_id', '');

        return view('login');
    }
   // 注册
    public function register(){
        return view('register');
    }

}