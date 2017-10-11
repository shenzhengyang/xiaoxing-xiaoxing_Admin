<?php
/**
 * Created by PhpStorm.
 * User: zy
 * Date: 2017/10/9
 * Time: 17:16
 */

namespace Home\Controller;


use Think\Controller;

class UserEchartController extends Controller
{
    public function user_tree(){
        $legend=array('孝行');
        $nodes=array();
        $node=array('name'=>'孝行');
        array_push($nodes,$node);
        $links=array();
        $UserModel=D('User');
        $EquipmentModel=D('Equipment');
        $PositionModel=D('Position');
        $RailModel=D('Rail');
        $userArray=$UserModel->field('id,username')->select();
        foreach($userArray as $user){
            $username=$user['username'];
            $uid=$user['id'];
            $link=array('source'=>'孝行','target'=>$username,'weight'=>1);
            array_push($legend,$username);
            $node=array('name'=>$username);
            array_push($nodes,$node);
            array_push($links,$link);
            //建立用户和设备的连接
            $equip_links=$EquipmentModel->where("uid='%s'",$uid)->field("'$username'as source,name as target,1 as weight")->select();
            $links=array_merge($links,$equip_links);
            foreach($equip_links as $equip_link){
                array_push($legend,$equip_link['target']);
                $node=array('name'=>$equip_link['target']);
                array_push($nodes,$node);
            }
            //查找每个用户的设备
            $equipList=$EquipmentModel->where("uid='%s'",$uid)->field('eid,name')->select();
            foreach($equipList as $equip){
                $eid=$equip['eid'];
                $ename=$equip['name'];
                $batterylinks=$PositionModel->where("eid='%s'",$eid)->field("'$ename' as source,battery as target,1 as weight")->order('id desc')->limit(1)->select();
                foreach($batterylinks as $batterylink){
                    $node=array('name'=>$batterylink['target']);
                    array_push($nodes,$node);
                }
                $links=array_merge($links,$batterylinks);
                //半径
                $radiusArray=$RailModel->where("eid='%s'",$eid)->field("'$ename' as source,radius*1000 as target,1 as weight")->order('id desc')->limit(1)->select();
                $links=array_merge($links,$radiusArray);
                foreach($radiusArray as $value){
                    $radius=$value['target'];
                    $node=array('name'=>$radius);
                    array_push($nodes,$node);
                }
                $chiyaoModel=tb_chiyao();
                $chiyaoArray=$chiyaoModel->where("equip_id='%s'",$eid)->field("'$ename' as source,count(medision_name) as target,1 as weight")->select();
                $links=array_merge($links,$chiyaoArray);
                foreach($chiyaoArray as $value){
                    $medisionNum=$value['target'];
                    $node=array('name'=>$medisionNum);
                    array_push($nodes,$node);
                }
            }
        }
        $data=array('legend'=>$legend,'nodes'=>$nodes,'links'=>$links);
        $this->ajaxReturn($data);
    }
}