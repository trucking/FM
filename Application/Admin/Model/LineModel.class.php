<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-18
 * Time: 下午8:20
 */

namespace Admin\Model;
use Think\Model;

class LineModel extends Model{
    public function addLine($name,$line)
    {
        $data['name'] = $name;
        $data['stations'] = $line;
        $result = M('line')->add($data);
        return $result;
    }

    public function showAllLine()
    {
        return M('line')->select();
    }

    public function showLineByName($name)
    {
        return M('line')->where('name=\''.$name.'\'')->select();
    }

    public function showLineById($id)
    {
        return M('line')->where('id=\''.$id.'\'')->select();
    }

    public function getLineCount()
    {
        $result = M('line')->select();
        $count = count($result);
        return $count;
    }
} 