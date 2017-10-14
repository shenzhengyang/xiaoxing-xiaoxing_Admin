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