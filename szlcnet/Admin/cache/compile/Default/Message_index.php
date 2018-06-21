<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>销售信息资源管理</title>
<!--
公共的 CSS. javascript 文件引入
-->
<link rel="stylesheet" href="./template/Default/js/lib/bootstrap-3.3.5/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/font-awesome.min.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/css/style.css" type="text/css" />
<link rel="stylesheet" href="./template/Default/js/lib/layer-v2.2/skin/layer.css" type="text/css" />
<script src="./template/Default/js/require.js"></script>



</head>

<body>
<div class="place"><span><i class="glyphicon glyphicon-th-list"></i>&nbsp;位置：</span>

  <div class="pull-left">
    <ul class="placeul">
      <li><a href="javascript:;">留言列表</a></li>
    </ul>
  </div>

</div>
<div class="rightinfo">
  <form action="" method="post" id="form_data_list">
    <table cellspacing="1" class="tablelist" >
      <thead>
        <tr class="mylist_title">
          <th width="28"><input type="checkbox" class="checkbox" onclick="InverSelect();" /></th>
          <th width="168">留言者</th>
          <th width="250">主题</th>
          <th width="150">email</th>
          <th width="180">留言内容</th>
          <th width="100">状态</th>
          <th width="128">操 作</th>
        </tr>
      </thead>
      <tbody>
        <?php if(is_array($list)){foreach($list as $key=>$vo){?>
          <tr class="datalist">
            <td align="center"><input name="id[]" type="checkbox" value="<?php echo $vo['message_id'];?>" class="checkbox" /></td>
            <td dataType="require" style="font-weight:bold;"> <?php echo $vo['name'];?></td>
            <td><?php echo $vo['subject'];?></td>
            <td><?php echo $vo['email'];?></td>
            <td> <?php chinesesubstr_admin($vo['content'],0,43); ?> </td>
            <td><?php if($vo['is_ready']){ ?>已读
                <?php }else{ ?>
                <span style="color:red;">未读</span><?php } ?></td>
            <td align="center" class="action"><?php if($select_option =='edit'){ ?><a href="<?php echo U(array('f'=>"edit",'id'=>"{$vo['url_id']}",'name'=>"{$id}",'tab'=>"{$tab}")); ?>"
                                           class="btn btn-default btn-xs">
    <span class="glyphicon glyphicon-edit"></span>编辑</a>
<?php } ?>

    <a  <?php if($option_del =='no'){ ?>style="display: none;" <?php } ?>  target="_ajax" href="<?php echo U(array('f'=>"delete",'id'=>"{$vo['url_id']}",'name'=>"{$id}",'tab'=>"{$tableName}")); ?>" class="btn btn-default btn-xs"
       confirm="确认删除？删除后可进入回收站查找！" title="删除"><span class="glyphicon glyphicon-remove"></span>删除</a>

</td>
          </tr>
        <?php } } ?>
      </tbody>

    </table>
    <div class="mylist_foot">
      <div class="panel-footer">
  <div class="pull-left">
    <div class="btn-group myoption">
      <button type="button" class="btn btn-default" id="allSelect"><span
                        class="glyphicon glyphicon-ok"></span> 全选 </button>
      <button type="button" class="btn btn-default" id="InverSelectBtn"><span
                        class="glyphicon glyphicon-ok"></span> 反选 </button>
      <button type="button" class="btn btn-default" id="allUnSelect"><span
                        class="glyphicon glyphicon-ok"></span> 全不选 </button>
      <select  class="form-control selectSubmit" id="selectSubmit">
        <option>请选择</option>
        <option title="您确认删除？删除后无法恢复！" value="<?php echo U(array('f'=>"delete",'name'=>"{$id}",'tab'=>"{$tableName}")); ?>">删除</option>
        <?php if(!$select_option){ ?>
          <option value="index.php?a=Message&f=status&status=1">启用</option>
          <option value="index.php?a=Message&f=status&status=0">锁定</option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="pull-right">
    <div class="pagin"> <?php echo $page;?></div>
  </div>
</div>

    </div>
  </form>

</div>
<script language="javascript" type="text/javascript">
  require(['./template/Default/js/common.js'], function (common) {
    require(['./template/Default/js/public/list.js']);
  });
</script>
</body>
</html>