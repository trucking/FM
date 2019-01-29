<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    //protected $tablePrefix = '';
    public function index()
    {
        $val['test1'] = 'Hello World!';
        $val['test2'] = 'mayun is jack.';
        $val['test3'] = 'I\'m is liyanwei';
        //$val = C();
        //$val = D('nihao')->select();
        //var_dump($val) ;
        $this->assign($val);
        $this->display();
    }

    public function hello()
    {
        echo "this is hello function!";
        $val = D('Nihao');
        var_dump( $val->test());//->test();
    }
}