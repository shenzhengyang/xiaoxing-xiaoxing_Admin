<?php
/**
 * Created by PhpStorm.
 * User: zy
 * Date: 2017/10/9
 * Time: 8:40
 */

namespace Home\Controller;


use Think\Controller;

class EquipStatusController extends Controller
{
    /**
     * 设备状态雷达图
     */
    public function echart_equipStatus(){
        $dataArray=array();
        $data_legend=array();
        $EquipmentModel=D('Equipment');
        $PositionModel=D('Position');
        $RailModel=D('Rail');
        $equipList=$EquipmentModel->field('name,eid')->select();
        foreach($equipList as $equip){
            $equipName=$equip[name];//设备名
            $equipEid=$equip[eid];//设备id
            //电量、速度
            $speedAndBattery=$PositionModel->where("eid='%s'",$equipEid)->field('speed,battery,inrail')->order('id desc')->limit(1)->select();
            foreach($speedAndBattery as $value){
                $speed=$value[speed];
                $battery=$value[battery];
                $inrail=($value['inrail']+1)%2;
            }
            //半径
            $radiusArray=$RailModel->where("eid='%s'",$equipEid)->field('radius')->order('id desc')->limit(1)->select();
            foreach($radiusArray as $value){
                $radius=$value['radius']*1000;
            }
            $chiyaoModel=tb_chiyao();
            $chiyaoArray=$chiyaoModel->where("equip_id='%s'",$equipEid)->field('count(medision_name) as medisionNum')->select();
            foreach($chiyaoArray as $value){
                $medisionNum=$value['medisionnum'];
            }
            $data_series=array('value'=>array(
                $speed,$battery,$inrail,$radius,$medisionNum
            ),'name'=>$equipName);
            array_push($dataArray,$data_series);
            array_push($data_legend,$equipName);
        }
        $data=array('legend'=>$data_legend,'series'=>$dataArray);
        $this->ajaxReturn($data);
    }

    /**
     * 设备分布图
     */
    public function echart_mapV(){
        $RailModel=D('Rail');
        $data=array();
        //查询经纬度
        $latAndLngArray=$RailModel->field('lat,lng')->select();
        foreach($latAndLngArray as $value){
            $lat=-$value['lat'];
            $lng=$value['lng'];
            $coordinates=array($lng,$lat);
            $geometry=array('type'=>'Point','coordinates'=>$coordinates);
            $data_mapV=array('geometry'=>$geometry,'count'=>30);
            array_push($data,$data_mapV);
        }
        /*$test=array('text'=>'硬件分布图');
        array_push($data,$test);*/
        $data_json=array('lat'=>$lat,'lng'=>$lng,'data'=>$data);
        $this->ajaxReturn($data_json);
    }
    /**
     * 设备电量变换图
     */
    public function echart_battery(){
        $EquipmentModel=D('Equipment');
        $PositionModel=D('Position');
        $equipList=$EquipmentModel->field('name,eid')->select();

        $data_legend=array();
        $data_series=array();
        foreach($equipList as $equip) {
            $equipName = $equip[name];//设备名
            $equipEid = $equip[eid];//设备id
            $batteryArray = $PositionModel->where("eid='%s'", $equipEid)->field('battery,time')->order('id desc')->limit(10)->select();
            $data_xAxis=array();
            $data_battery=array();
            foreach($batteryArray as $value){
                array_push($data_xAxis,$value['time']);
                array_push($data_battery,$value['battery']);
            }
            array_push($data_legend,$equipName);
            $data_serie=array('name'=>$equipName,'type'=>'line','data'=>$data_battery);
            array_push($data_series,$data_serie);
        }
        $data=array('legend'=>$data_legend,'xAxis'=>$data_xAxis,'series'=>$data_series);
        $this->ajaxReturn($data);
    }
    /**
     * 设备电量动态数据
     */
    public function echart_battery_addData(){
        $EquipmentModel=D('Equipment');
        $PositionModel=D('Position');
        $equipList=$EquipmentModel->field('name,eid')->select();
        $data=array();
        for($i=0;$i<count($equipList);$i++) {
            $equip=$equipList[$i];
            $equipName = $equip[name];//设备名
            $equipEid = $equip[eid];//设备id
            $batteryArray = $PositionModel->where("eid='%s'", $equipEid)->field('battery')->order('id desc')->limit(1)->select();
            foreach ($batteryArray as $value){
                $battery=$value['battery'];
            }
            $time=date("Y-m-d H:i:s");
            $data_battery=array(0,$battery,false,false,$time);
            array_push($data,$data_battery);
        }
        $this->ajaxReturn($data);
    }
    /**
     * 定位频率分布折线图
     */
    public function echart_line(){
        $cityList=array('北京',"天津",'河北','山西','内蒙古','辽宁','吉林','黑龙江',
            '上海','江苏','浙江','安徽','福建','江西','山东','河南',
            '湖北','湖南','广东','广西','海南','重庆','四川','贵州',
            '云南','西藏','陕西','甘肃','青海','宁夏','新疆');
        $cityList2=array('北京市','天津市','河北省','山西省','内蒙古自治区','辽宁省','吉林省','黑龙江省',
            '上海市','江苏省','浙江省','安徽省','福建省','江西省','山东省','河南省',
            '湖北省','湖南省','广东省','广西壮族自治区','海南省','重庆市','四川省','贵州省',
            '云南省','西藏省','陕西省','甘肃省','青海省','宁夏回族自治区','新疆维吾尔自治区');
        $data_series=array();
        for($i=0;$i<count($cityList);$i++){
            array_push($data_series,0);
        }
        $GeocodingModel=D('Geocoding');
        $provinces=$GeocodingModel->field('province,count(province) as provinceNum')->group('province')->select();
        foreach($provinces as $value){
            $province=$value['province'];
            $data_series[array_search($province,$cityList2)]=$value['provincenum'];
        }
        $this->ajaxReturn(array('xAxis'=>$cityList,'series'=>$data_series));
    }
}