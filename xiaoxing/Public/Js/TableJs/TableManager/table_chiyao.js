/**
 * Created by zy on 2017/10/12.
 * position 数据库表增删改
 */
//更新请求
function updatePost(url,datas){
    $.post(url,datas,function(data){
        if(data){
            $('#table').bootstrapTable('refresh');
        }
    });
}
/**
 * 修改的回调函数
 * @param item 数据库表的id
 * @param data 数据库表数据
 */
function updateToServerSide(item, data){
    var itemid = item;
    var update_data = {'id':itemid,'medision_name': data[0], 'time': data[1], 'equip_name': data[2], 'equip_id': data[3]}; //傳送至伺服器端的Data產生處，需手動修改對應表格
    updatePost( '../Table/chiyaoUpdate', update_data);
}
$(function () {
    //初始化变量
    var $table = $('#table');
    var $button_remove = $('#button_remove');
    var $button_save=$('#model_save');
    //删除请求
    function removePost(url,datas){
        $.post(url,datas,function(data){
            if(data){
                $table.bootstrapTable('remove', {
                    field: 'id',
                    values: datas.id
                });
            }
        });
    }
    //添加数据请求
    function addPost(url,datas){
        $.post(url,datas,function(data){
            if(data){
                $('#table').bootstrapTable('refresh');
            }
            $('#myModal').fadeOut();
        });
    }

    //删除函数
    function remove(){
        var ids = $.map($table.bootstrapTable('getSelections'), function (row) {
            return row.id;
        });
        if(ids==""){
            alert("未选择要删除的数据！");
        }else{
            removePost('../Table/chiyaoRemove',{"id":ids});
        }
    }
    //添加数据函数
    function add(){
        var data="{";
        var data_name=new Array('medision_name','time','equip_name','equip_id');
        $(".modal-body .form-control").each(function(i,field){
            data=data+"\""+data_name[i]+"\":\""+$(this).val()+"\",";
        });
        data=data.slice(0,-1);
        data=data+"}";
        var data_json=JSON.parse(data);
        addPost('../Table/chiyaoAdd',data_json);
    }
    //删除按钮点击事件
    $button_remove.click(function () {
        remove();
    });
    //添加完成按钮点击事件
    $button_save.click(function(){
        add();
    });
    $('#table').bootstrapTable(); // init via javascript

    $(window).resize(function () {
        $('#table').bootstrapTable('resetView');
    });
});