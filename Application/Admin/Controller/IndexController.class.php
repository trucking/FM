<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    private $session = null;
    public function index(){
        if($_SESSION['uid'])
        {
            $data['busCount'] = D('bus')->getBusCount();
            $data['lineCount'] = D('line')->getLineCount();
            $data['stationCount'] = D('station')->getStationCount();
            $data['userCount'] = D('user')->getUserCount();
            $this->assign('data',$data);
            $this->display('index');
        }else
        {
            $this->login();
        }

    }

    public function login(){

        $this->display('login');
    }

    public function loginTo(){
        if($_POST['username'] == 'liyanwei' && $_POST['password'] == 'nihao')
        {
            $_SESSION['uid'] = $_POST['username'];
            echo true;
        }else
            echo false;
    }

    public function companyConf()
    {
        if($_SESSION['uid'])
        {
            $data = D('company')->showName();

            $this->assign('name',$data);
            $this->display('organizeManage');
        }else
        {
            $this->login();
        }

    }

    public function companyModify()
    {

        echo D('company')->modifyName($_POST['name']);
    }

    public function userManage()
    {
        $data['userNum'] = D('user')->getUsercount();
        $data['userList'] = D('user')->getUserList();
        $this->assign('result',$data);
        $this->display('userManage');
    }

    public function busManage(){
        $result = D('Bus')->busList();
        $this->assign('busList',$result);
        $this->display('busManage');
    }

    public function busAdd()
    {

        $this->display('busAdd');
    }

    public function busAddTo()
    {
        $result = D('Bus')->busAdd($_POST['busNO'],$_POST['busmaster'],$_POST['bustel']);
        var_dump($result);
    }

    public function busList()
    {
        $result = D('Bus')->busList();
        var_dump($result);
    }

    public function busModify()
    {
        $result = D('Bus')->getBusState();
        var_dump($result);
    }

    public function getBusNo()
    {
        $result = D('Bus')->getBusByNo('晋B57588');
        var_dump($result);
    }

    public function showMap()
    {
        $this->display('map');
    }

    public function stationAdd()
    {
        $this->display('stationAdd');
    }

    public function stationAddTo()
    {
        $name = $_POST['stationName'];

        $lnglat = explode(',',$_POST['stationCoordinate']);
        $long = $lnglat[0];
        $lat  = $lnglat[1];
        $result =  D('Station')->addStation($name,$long,$lat);
        var_dump($result);
    }

    public function lineAdd()
    {

        $data = D('station')->stationAll();
        //var_dump($data);
        $this->assign('result',$data);
        $this->display('lineAdd');
    }

    public function lineAddTo()
    {
        $name = $_POST['name'];
        $line = '';
        foreach($_POST['line'] as $v)
        {
            $line .= $v.',';
        }
        $line = rtrim($line,',');
        //echo $line;
        $result = D('line')->addLine($name,$line);
        if($result)
        {
            echo true;
        }
        else
        {
            echo false;
        }
    }
}