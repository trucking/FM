<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-17
 * Time: 下午10:12
 */
namespace Admin\Model;
use Think\Model;
class BusModel extends Model{
    public function busAdd($no,$master,$tel)
    {
        if($this->getBusByNo($no))
        {
            return false;
        }else
        {
            $data['no'] = $no;
            $data['master'] = $master;
            $data['tel'] = $tel;
            M('bus')->add($data);
        }
    }

    public function  busList()
    {
        return M('bus')->select();
    }

    public function getBusByNo($no)
    {
        return M('bus')->where('no = \''.$no.'\'')->find();
    }
    public function  getBusCount()
    {
        $result = M('bus')->select();
        $count = count($result);
        return $count;
    }
} 