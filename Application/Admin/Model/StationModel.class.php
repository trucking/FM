<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 18-9-18
 * Time: 下午8:01
 */

namespace Admin\Model;
use Think\Model;

class StationModel extends Model {
    public function addStation($name,$long,$lat)
    {
        $data['name'] = $name;
        $data['long'] = $long;
        $data['lat']  = $lat;
        M('station')->add($data);
    }

    public function stationAll()
    {
        return M('station')->select();
    }

    public function getStationCount()
    {
        $count = count($this->stationAll());
        return $count;
    }


} 