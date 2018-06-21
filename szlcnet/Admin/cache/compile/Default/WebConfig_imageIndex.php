<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
            <li><a href="javascript:;">图像设置</a></li>
        </ul>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary insetBtn" href="index.php?a=WebConfig&f=imageAdd&tip=image" type="button"><i
                class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
    </div>
</div>
<div class="wrap">
    <div class='container-fluid top8'>
        <div class="clear"></div>
        <ul class='nav nav-tabs' id="nav_tabs">
    <li <?php if($configTab =='basic'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=index&tip=basic" >基本设置</a></li>
    <li <?php if($configTab =='image'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=imageSetting&tip=image" >图像</a></li>
    <li <?php if($configTab =='language'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=language&tip=language">语言</a></li>
   <!-- <li <?php if($configTab =='option'){ ?>class='active'<?php } ?>><a href="index.php?a=WebConfig&f=index&tip=option" >选项</a></li>-->
</ul>
        <br/>

        <div class='tab-content' id="tab-content">
            <form action="" method="post" id="form_data_list">
                <table class="tablelist">
                    <thead>
                    <tr>
                        <th width="60"><input type="checkbox" class="checkbox" id="InverSelect"/></th>
                        <th>编号</th>
                        <th>名称</th>
                        <th>宽度</th>
                        <th>高度</th>
                        <th>水印</th>
                        <th>操 作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($settingList)){foreach($settingList as $key=>$vo){?>
                        <tr class="datalist">
                            <td align="center"><input name="id[]" type="checkbox" value="<?php echo $vo['id'];?>" class="checkbox"/></td>
                            <td><?php echo $vo['id'];?></td>
                            <td><?php echo $vo['title'];?></td>
                            <td><?php echo $vo['w'];?></td>
                            <td><?php echo $vo['h'];?></td>
                            <td align="center">
                                <?php if($vo['watermark'] !=''){ ?>
                                    <a class="showImg" data-w="300" data-url="<?php echo $root_url;?>/<?php echo $vo['watermark'];?>"
                                       href="javascript:;"><img
                                            onerror="this.src='../web_up_file/noPic_spic/no_image-100x100.png';"
                                            src="<?php echo $root_url;?>/<?php echo $vo['watermark'];?>" width="20"/></a>
                                    <?php }else{ ?>
                                        无水印
                                <?php } ?>
                            </td>

                            <td align="center" class="action">
                                <?php if($select_option =='edit'){ ?><a href="<?php echo U(array('f'=>"edit",'id'=>"{$vo['url_id']}",'name'=>"{$id}",'tab'=>"{$tab}")); ?>"
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
            </form>
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
          <option value="index.php?a=WebConfig&f=status&status=1">启用</option>
          <option value="index.php?a=WebConfig&f=status&status=0">锁定</option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="pull-right">
    <div class="pagin"> <?php echo $page;?></div>
  </div>
</div>

        </div>

    </div>

</div>
</div>
</div>
<script language="javascript" type="text/javascript">
    var TAB = "<?php echo $configTab;?>";
    require(['./template/Default/js/common.js'], function (common) {
        require(['./template/Default/js/webConfig/webConfig.js']);
        require(['./template/Default/js/public/list.js']);
    });
</script>
</body>
</html>
