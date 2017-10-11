<?php
/**
 * Created by PhpStorm.
 * User: zy
 * Date: 2017/10/10
 * Time: 19:15
 */

namespace Home\Controller;


use Think\Controller;

class CronController extends Controller
{
    //定时执行将坐标转换为地点
    public function crons()
    {
        $PositionModel=D('Position');
        $PositionArray=$PositionModel->field('id,lat,lng')->select();
        foreach($PositionArray as $Position){
            $this->location($Position['id'],$Position['lng'],$Position['lat']);
        }
    }
    function location($id,$lng,$lat){
        $GeocodingModel=D('Geocoding');
        $result=$GeocodingModel->where("id='%s'",$id)->select();
        if(empty($result)){
            $GeocodingController=A('Geocoding');
            $result=$GeocodingController->getAddressComponent($lng,$lat);
            $location=$result['result']['location'];
            $lat=$location['lat'];
            $lng=$location['lng'];
            $addressComponent=$result['result']['addressComponent'];
            $country=$addressComponent['country'];
            $province=$addressComponent['province'];
            $city=$addressComponent['city'];
            $district=$addressComponent['district'];
            $street=$addressComponent['street'];
            $data=array('id'=>$id,'lat'=>$lat,'lng'=>$lng,'country'=>$country,'province'=>$province,'city'=>$city,'district'=>$district,'street'=>$street);
            $GeocodingModel->data($data)->add();
        }
    }
}