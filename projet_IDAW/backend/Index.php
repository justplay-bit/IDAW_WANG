<?php

namespace app\index\controller;

use app\index\model\Proportion;
use app\index\model\Record;
use app\index\model\User;
use think\Controller;
use think\Db;
use think\Request;

class Index extends Controller
{
    //首页
    public function index()
    {
        if (session('admin_id')) {
            $id = session('admin_id');

            $user = new  User();
            $data = $user->where('id', $id)->find();
            $this->assign('data', $data);
            return view();
        }
        return view('index/login/login');
    }

    //记录
    public function record()
    {
        if (session('admin_id')) {
            $id = session('admin_id');
            $sql = "select p.addtime ,p.shul  , a.rel ,a.name ,a.zuc ,a.protein ,a.lipid ,a.salt , a.sugar  from jinsid p LEFT JOIN proportion a ON p.foot_id = a.id WHERE p.user_id=  $id";
            $lis = Db::query($sql);
            $this->assign('lis', $lis);
            return view('record');
        }
        return view('index/login/login');

    }

    //个人主页
    public function wecome()
    {
        if (session('admin_id')) {
            $id = session('admin_id');

            $user = new  User();
            $data = $user->where('id', $id)->find();
            $this->assign('data', $data);
            return view();
        }
        return view('index/login/login');
    }

//添加进食
    public function addfoot()
    {
        $data = Db::query("SELECT proportion.id ,proportion.name FROM proportion");
        $this->assign('data', $data);

        return view();
    }

//保存进食
    public function savefoot()
    {
        $dat = array('code' => 201, 'msg' => '异常信息');
        $data = $_POST;
        $id = session('admin_id');
        $data['user_id'] = $id;
        $data['addtime'] = strtotime($data['addtime']);
        $record = new  Record();
        $res = $record->save($data);
        if ($res) {
            $dat['code'] = 200;

            $dat['msg'] = '添加成功';
        } else {
            $dat['msg'] = '添加失败';
        }
        echo json_encode($dat);
    }

    //添加食物
    public function addshiw()
    {
        if ($_POST) {
            $dat = array('code' => 201, 'msg' => '异常信息');
            $data = $_POST;
            $proportion = new  Proportion();
            $res = $proportion->save($data);
            if ($res) {
                $dat['code'] = 200;
                $dat['msg'] = '添加成功';
            } else {
                $dat['msg'] = '添加失败';
            }
            return json_encode($dat);
        }
        return view();
    }

    public function charts()
    {
        $id = session('admin_id');
        $data = Db::query("select p.addtime ,a.lipid ,a.salt ,a.protein ,a.sugar from jinsid p LEFT JOIN proportion a ON p.foot_id = a.id WHERE p.user_id=  $id");
        $this->assign('data', $data);

        return view();
    }

    public function getchar()
    {
        $id = session('admin_id');
        $data = Db::query("select p.addtime ,a.lipid ,a.salt ,a.protein ,a.sugar from jinsid p LEFT JOIN proportion a ON p.foot_id = a.id WHERE p.user_id=  $id  ORDER BY addtime ASC");
        foreach ($data as $k => $vale) {
            $vale['addtime'] = date("Y-m-d", $vale['addtime']);

            $data[$k] = $vale;


        }
        return $data;
    }
}
