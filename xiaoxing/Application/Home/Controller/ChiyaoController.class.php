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
    public function chiyao_json(){
        $chiyaoModel=tb_chiyao();
        $chiyao=$chiyaoModel->select();
        $this->ajaxReturn($chiyao);
    }
}