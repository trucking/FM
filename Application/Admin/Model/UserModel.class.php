<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 19-1-11
 * Time: 下午2:24
 */

namespace Admin\Model;
use Think\Model;

class UserModel extends Model
{
    public function getUserCount()
    {
        $count = count($this->getUserList());
        return $count;
    }

    public function getUserList()
    {
        $result = M('user')->select();
        return $result;
    }
} 