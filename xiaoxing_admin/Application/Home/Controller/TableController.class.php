<?php
/**
 * Created by PhpStorm.
 * User: zy
 * Date: 2017/10/12
 * Time: 14:52
 */

namespace Home\Controller;


use Think\Controller;
use Think\Exception;

class TableController extends Controller
{
    /**
     * position_table 修改数据
     * @param $id
     * @param $eid
     * @param $lat
     * @param $lng
     * @param $speed
     * @param $inrail
     * @param $battery
     * @param $time
     */
    public function positionUpdate($id,$eid,$lat,$lng,$speed,$inrail,$battery,$time){
        try{
            $PositionModel=D('Position');
            $data=array('eId'=>$eid,'lat'=>$lat,'lng'=>$lng,'speed'=>$speed,'inrail'=>$inrail,'battery'=>$battery,'time'=>$time);
            $result=$PositionModel->where("id='%s'",$id)->data($data)->save();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }
    /**
     * postion_table 删除数据
     * @param $id id的数组 例1，2，3
     */
    public function positionRemove($id){
        try{
            $ids="";
            foreach($id as $item){
                $ids=$ids.$item.',';
            }
            $ids=substr($ids,0,-1);
            $PositionModel=D('Position');
            $result=$PositionModel->delete($ids);
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }

    /**
     * postion_table 增加数据
     * @param $id
     * @param $eid
     * @param $lat
     * @param $lng
     * @param $speed
     * @param $inrail
     * @param $battery
     * @param $time
     */
    public function positionAdd($eid,$lat,$lng,$speed,$inrail,$battery,$time){
        try{
            $PositionModel=D('Position');
            $data=array('eId'=>$eid,'lat'=>$lat,'lng'=>$lng,'speed'=>$speed,'inRail'=>$inrail,'battery'=>$battery,'time'=>$time);
            $result=$PositionModel->data($data)->add();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){

            $this->ajaxReturn($e.to_guid_string());
        }
    }

    /**
     * rail_table 修改数据
     * @param $id
     * @param $eid
     * @param $lat
     * @param $lng
     * @param $radius
     */
    public function railUpdate($id,$eid,$lat,$lng,$radius){
        try{
            $RailModel=D('Rail');
            $data=array('eId'=>$eid,'lat'=>$lat,'lng'=>$lng,'radius'=>$radius);
            $result=$RailModel->where("id='%s'",$id)->data($data)->save();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }
    /**
     * rail_table 删除数据
     * @param $id id的数组 例1，2，3
     */
    public function railRemove($id){
        try{
            $ids="";
            foreach($id as $item){
                $ids=$ids.$item.',';
            }
            $ids=substr($ids,0,-1);
            $RailModel=D('Rail');
            $result=$RailModel->delete($ids);
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }

    /**
     * rail_table 添加数据
     * @param $eid
     * @param $lat
     * @param $lng
     * @param $radius
     */
    public function railAdd($eid,$lat,$lng,$radius){
        try{
            $RailModel=D('Rail');
            $data=array('eId'=>$eid,'lat'=>$lat,'lng'=>$lng,'radius'=>$radius);
            $result=$RailModel->data($data)->add();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn($e.to_guid_string());
        }
    }

    /**
     * equip_tnable 修改数据
     * @param $imei
     * @param $phone
     */
    public function equipUpdate($imei,$phone){
        try{
            $EquipModel=D('Equip');
            $data=array('phone'=>$phone);
            $result=$EquipModel->where("IMEI='%s'",$imei)->data($data)->save();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }
    /**
     * equip_table 删除数据
     * @param $id id的数组 例1，2，3
     */
    public function equipRemove($imei){
        try{
            //$ids="";
            /*foreach($id as $item){
                $ids=$ids.$item.',';
            }
            $ids=substr($ids,0,-1);
            */
            $EquipModel=D('Equip');
            $result=$EquipModel->where("IMEI='%s'",$imei)->delete();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }

    /**
     * equip_table 添加数据
     * @param $imei
     * @param $phone
     */
    public function equipAdd($imei,$phone){
        try{
            $EquipModel=D('Equip');
            $data=array('IMEI'=>$imei,'phone'=>$phone);
            $result=$EquipModel->data($data)->add();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn($e.to_guid_string());
        }
    }

    /**
     * equipment_table 修改数据
     * @param $id
     * @param $eid
     * @param $uid
     * @param $name
     */
    public function equipmentUpdate($id,$eid,$uid,$name){
        try{
            $EquipmentModel=D('Equipment');
            $data=array('eId'=>$eid,'eId'=>$eid,'uId'=>$uid,'name'=>$name);
            $result=$EquipmentModel->where("id='%s'",$id)->data($data)->save();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }
    /**
     * equipment_table 删除数据
     * @param $id id的数组 例1，2，3
     */
    public function equipmentRemove($id){
        try{
            $ids="";
            foreach($id as $item){
                $ids=$ids.$item.',';
            }
            $ids=substr($ids,0,-1);
            $EquipmentModel=D('Equipment');
            $result=$EquipmentModel->delete($ids);
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }

    /**
     * equipment_table 添加数据
     * @param $eid
     * @param $uid
     * @param $name
     */
    public function equipmentAdd($eid,$uid,$name){
        try{
            $EquipmentModel=D('Equipment');
            $data=array('eId'=>$eid,'uId'=>$uid,'name'=>$name);
            $result=$EquipmentModel->data($data)->add();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn($e.to_guid_string());
        }
    }
    /**
     * feedback_table 修改数据
     * @param $id
     * @param $uid
     * @param $desc
     * @param $hasRepaired
     */
    public function feedbackUpdate($id,$uid,$time,$desc,$hasRepaired){
        try{
            $FeedbackModel=D('Feedback');
            $data=array('uId'=>$uid,'time'=>$time,'desc'=>$desc,'hasRepaired'=>$hasRepaired);
            $result=$FeedbackModel->where("id='%s'",$id)->data($data)->save();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }
    /**
     * feedback_table 删除数据
     * @param $id id的数组 例1，2，3
     */
    public function feedbackRemove($id){
        try{
            $ids="";
            foreach($id as $item){
                $ids=$ids.$item.',';
            }
            $ids=substr($ids,0,-1);
            $FeedbackModel=D('Feedback');
            $result=$FeedbackModel->delete($ids);
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }

    /**
     * feedback_table 添加数据
     * @param $uid
     * @param $desc
     * @param $hasRepaired
     */
    public function feedbackAdd($uid,$time,$desc,$hasRepaired){
        try{
            $FeedbackModel=D('Feedback');
            $data=array('uId'=>$uid,'time'=>$time,'desc'=>$desc,'hasRepaired'=>$hasRepaired);
            $result=$FeedbackModel->data($data)->add();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn($e.to_guid_string());
        }
    }

    /**
     * user_table 修改数据
     * @param $id
     * @param $username
     * @param $password
     */
    public function userUpdate($id,$username,$password){
        try{
            $UserModel=D('User');
            $data=array('username'=>$username,'password'=>$password);
            $result=$UserModel->where("id='%s'",$id)->data($data)->save();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }
    /**
     * user_table 删除数据
     * @param $id id的数组 例1，2，3
     */
    public function userRemove($id){
        try{
            $ids="";
            foreach($id as $item){
                $ids=$ids.$item.',';
            }
            $ids=substr($ids,0,-1);
            $UserModel=D('User');
            $result=$UserModel->delete($ids);
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }

    /**
     * user_table 添加数据
     * @param $username
     * @param $password
     */
    public function userAdd($username,$password){
        try{
            $UserModel=D('User');
            $data=array('username'=>$username,'password'=>$password);
            $result=$UserModel->data($data)->add();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn($e.to_guid_string());
        }
    }

    /**
     * chiyao_table 修改数据
     * @param $id
     * @param $equip_id
     * @param $equip_name
     * @param $medision_name
     * @param $time
     */
    public function chiyaoUpdate($id,$equip_id,$equip_name,$medision_name,$time){
        try{
            $ChiyaoModel=tb_chiyao();
            $data=array('equip_id'=>$equip_id,'equip_name'=>$equip_name,'medision_name'=>$medision_name,'time'=>$time);
            $result=$ChiyaoModel->where("id='%s'",$id)->data($data)->save();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }
    /**
     * chiyao_table 删除数据
     * @param $id id的数组 例1，2，3
     */
    public function chiyaoRemove($id){
        try{
            $ids="";
            foreach($id as $item){
                $ids=$ids.$item.',';
            }
            $ids=substr($ids,0,-1);
            $ChiyaoModel=tb_chiyao();
            $result=$ChiyaoModel->delete($ids);
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn(false);
        }
    }

    /**
     * chiyao_table 添加数据
     * @param $equip_id
     * @param $equip_name
     * @param $medision_name
     * @param $time
     */
    public function chiyaoAdd($equip_id,$equip_name,$medision_name,$time){
        try{
            $ChiyaoModel=tb_chiyao();
            $data=array('equip_id'=>$equip_id,'equip_name'=>$equip_name,'medision_name'=>$medision_name,'time'=>$time);
            $result=$ChiyaoModel->data($data)->add();
            if($result){
                $this->ajaxReturn(true);
            }
            $this->ajaxReturn(false);
        }catch(Exception $e){
            $this->ajaxReturn($e.to_guid_string());
        }
    }
}