<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>产品列表</title>
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
            <li><a href="javascript:;">产品列表</a></li>
        </ul>
    </div>
    <div class="pull-right">
        <a class="btn btn-primary insetBtn" href="index.php?a=Product&f=add" type="button"><i class="fa fa-pencil"></i>&nbsp;&nbsp;新增</a>
    </div>
</div>

<div class="rightinfo">
    <div class="search">
        <form action="index.php?a=Product&do=search" method="post">
            <select id="role" name="search_where[product_one_id][eq]" class="form-control selectSubmit">
                <option value="0">--请选择--</option>
                <?php if(is_array($parent_list)){foreach($parent_list as $key=>$v){?>
                <option value="<?php echo $v['product_sort_id'];?>"
                <?php if($search_where['product_one_id']['eq']==$v['product_sort_id']){ ?>selected="selected"<?php } ?>
                ><?php echo $v['product_sort_name'];?>
                </option>
                <?php } } ?>
            </select>
            &nbsp;
            <input type="text" name="search_where[product_name][like]" size="12" value="<?php echo $search_where['uname']['like'];?>"
                   class="form-control searchInput"/>
            <input type="submit" class="btn btn-primary searchBtn" value="查 询"/>
            <a target="_ajax" href="index.php?a=Product&f=clear_thumb" confirm="确认删除？删除后不可恢复！"
               class="btn btn-primary flaot_right searchBtn inline_block left10">清空缓存图片</a>
            <a href="index.php?a=Product&f=thumb" class="btn btn-primary flaot_right searchBtn inline_block">生成产品缩略图</a>

        </form>
    </div>


    <form action="" method="post" id="form_data_list">
        <table cellspacing="1" class="tablelist">
            <thead>
            <tr class="mylist_title">
                <th width="60"><input type="checkbox" class="checkbox" id="InverSelect"/></th>
                <th width="108">产品图片</th>
                <th width="288">产品名称</th>
                <th width="208">所属分类</th>
                <th>排序</th>
                <th>推荐</th>
                <th width="432">发布时间</th>
                <th width="168">操 作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($list)){foreach($list as $key=>$vo){?>
                <tr>
                    <td><input name="id[]" type="checkbox" value="<?php echo $vo['product_id'];?>" class="checkbox"/>
                    </td>
                    <td>
                        <a href="../<?php echo $vo['product_spic'];?>" target="_blank"><img class="proImg"
                                                                             onerror="this.src='<?php echo $root_url;?><?php echo $defaultImg;?>';"
                                                                             src="../<?php echo $vo['product_spic'];?>"/></a>
                    </td>
                    <td class="editTd"
                        data="<?php echo $vo['product_id'];?>,product_name,index.php?a=Product&f=update&name=product_id,<?php echo $id;?>,<?php echo $tableName;?>">
                        <?php echo $vo['product_name'];?>
                    </td>

                    <td><?php echo $vo['parent'];?></td>
                    <td class="editTd"
                        data="<?php echo $vo['product_id'];?>,product_order,index.php?a=Product&f=update&name=product_id,<?php echo $id;?>,<?php echo $tableName;?>">
                        <?php echo $vo['product_order'];?>
                    </td>
                    <td>
                        <?php if($vo['product_commend']==1){ ?>是
                            <?php }else{ ?>
                                否
                        <?php } ?>
                    </td>
                    <td><?php echo $vo['product_date'];?></td>
                    <td>
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
          <option value="index.php?a=Product&f=status&status=1">启用</option>
          <option value="index.php?a=Product&f=status&status=0">锁定</option>
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