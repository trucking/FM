<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-28
 * Time: 下午4:04
 */

namespace Admin\Model;
use Think\Model;


class CompanyModel extends Model{
    public function showName()
    {
        return M('company')->select();
    }

    public function modifyName($name)
    {
        $data['name'] = $name;
        M('company')->save($data);
    }
} 