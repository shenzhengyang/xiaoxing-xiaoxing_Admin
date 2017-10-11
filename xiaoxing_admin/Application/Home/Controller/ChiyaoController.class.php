<?php
/**
 * Created by PhpStorm.
 * User: zy
 * Date: 2017/10/6
 * Time: 18:54
 */

namespace Home\Controller;


use Think\Controller;

class ChiyaoController extends Controller
{
    /**
     * 吃药列表数据
     */
    public function chiyao_json(){
        $chiyaoModel=tb_chiyao();
        $chiyao=$chiyaoModel->select();
        $this->ajaxReturn($chiyao);
    }

    /**
     * 吃药echart-force
     */
    public function chiyao_equipList_json(){
        $chiyaoModel=tb_chiyao();
        $chiyaoEquipList=$chiyaoModel->distinct(true)->field('equip_name as name')->select();
        $equipList=array();
        foreach ($chiyaoEquipList as $Equip) {
            foreach ($Equip as $value) {
                array_push($equipList,$value);
            }
        }
        $chiyaoMedisionList=$chiyaoModel->distinct(true)->field('medision_name as name')->select();
        $chiyaoNodes=array_merge($chiyaoEquipList,$chiyaoMedisionList);
        $chiyaoLink=$chiyaoModel->query("select equip_name as source,medision_name as target,abs(1) as weight,'效力' as name from tb_chiyao");
        //$chiyaoLink=$chiyaoModel->distinct(true)->field('equip_name as source,medision_name as target,1 as weight,\'效力\' as name')->select();
        $echart_array=array('data'=>$equipList,'nodes'=>$chiyaoNodes,'links'=>$chiyaoLink);
        $this->ajaxReturn($echart_array);
    }
    /**
     * 吃药echart-event_river
     */
    public function chiyao_event_river(){
        $chiyaoModel=tb_chiyao();
        $chiyaoEquipList=$chiyaoModel->distinct(true)->field('equip_name as name')->select();
        $equipList=array();
        $data_series=array();
        foreach ($chiyaoEquipList as $Equip) {
            $equipName=$Equip['name'];
            array_push($equipList,$equipName);
            $chiyao_detail=$chiyaoModel->where("equip_name='%s'",$equipName)->field('medision_name,time')->order('time desc')->select();
            $chiyao_data=array();
            foreach($chiyao_detail as $value){
                $chiyao_item=array('name'=>$value['medision_name'],'weight'=>123,'evolution'=>array(array('time'=>date("Y-m-d").' '.$value['time'],'value'=>14,'detail'=>array('text'=>$value['medision_name'].':'.$value['time']))));
                array_push($chiyao_data,$chiyao_item);
            }
            $data_item=array('name'=>$equipName,'type'=>'eventRiver','weight'=>123,'data'=>$chiyao_data);
            array_push($data_series,$data_item);
        }
        $data=array('legend'=>$equipList,'series'=>$data_series);
        $this->ajaxReturn($data);
    }
    /**
     * 吃药echart-wordCloud
     */
    function createRandomItemStyle()
    {
        $str='0123456789ABCDEF';
        $estr='#';
        $len=strlen($str);
        for($i=1;$i<=6;$i++)
        {
            $num=rand(0,$len-1);
            $estr=$estr.$str[$num];
        }
        $ItemStyle=array('normal'=>array('color'=>$estr));
        return $ItemStyle;
    }
    public function  chiyao_wordCloud(){
        $chiyaoModel=tb_chiyao();
        $data=array();
        $medisions=$chiyaoModel->field('medision_name,count(medision_name) as medision_count')->group('medision_name')->select();
        foreach($medisions as $value){
            $medision=$value['medision_name'];
            $medision_count=$value['medision_count'];
            $data_item=array('name'=>$medision,'value'=>$medision_count*1000,'itemStyle'=>$this->createRandomItemStyle());
            array_push($data,$data_item);
        }
        $this->ajaxReturn($data);
    }
}