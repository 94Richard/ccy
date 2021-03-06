<?php if(!defined('APP_NAME')) exit();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>招聘</title>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Recruit.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Font.css"/>
<link rel="stylesheet" href="<?php echo $OSS_URL;?>css/Public.css"/>
<script src="<?php echo $OSS_URL;?>js/jquery-1.2.6.min.js"></script>
<script src="<?php echo $OSS_URL;?>js/layer/layer.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo $OSS_URL;?>js/jquery.html5uploader.js"></script>
</head>
<body>
<div id="temp">
  <div class="t">
    <div class="latent">
      <ul class="tab-ul" id="tab_ul">
        <li class="current">职位描述</li>
        <li>岗位申请</li>
      </ul>
      <div class="ret_mod temp_0">
        <h3><?php echo $vo['job'];?></h3>
        <ul class="terminal-ul clearfix">
          <li><span>职位月薪：</span><strong><?php echo $vo['salary'];?></strong></li>
          <li><span>工作地点：</span><strong><?php echo $vo['address'];?></strong></li>
          <li><span>发布日期：</span><strong><span id="span4freshdate"><?php dateFormat($vo['sart_time']); ?></span></strong> </li>
          <li><span>工作性质：</span><strong><?php echo $vo['nature'];?></strong></li>
          <li><span>工作经验：</span><strong><?php echo $vo['experience'];?></strong></li>
          <li><span>最低学历：</span><strong><?php echo $vo['education'];?></strong></li>
          <li><span>招聘人数：</span><strong><?php echo $vo['recruitment_num'];?>人 </strong></li>
          <li><span>所属部门：</span><strong><?php echo $vo['department'];?></strong></li>
          <li><span>截止日期：</span><strong><span id="span4freshdate"><?php dateFormat($vo['end_time']); ?></span></strong> </li>
        </ul>
        <h2 class="job_tit">岗位要求:</h2>
        <div class="job_con"><?php echo $vo['des'];?></div>
      </div>
      <div class="ret_mod temp_1">
        <form action="" method="post" id="Recruit_from">
          <table width="1000" border="0">
            <tr>
              <td>姓名：</td>
              <td><input name="user" class="latent_input" type="text">
                <i>*</i></td>
              <td>*</td>
            </tr>
            <tr></tr>
            <tr>
              <td>学历：</td>
              <td><select name="education">
                  <option value="">高中</option>
                  <option value="中专">中专</option>
                  <option selected value="大专">大专</option>
                  <option value="本科">本科</option>
                  <option value="硕士">硕士/研究生及等同学历</option>
                  <option value="博士">博士</option>
                  <option value="博士及以上">博士及以上</option>
                </select>
                <i>*</i></td>
            </tr>
            <tr></tr>
            <tr>
              <td>电话：</td>
              <td><input name="tel" class="latent_input" type="text">
                <i>*</i></td>
            </tr>
            <tr></tr>
            <tr>
              <td>邮箱：</td>
              <td><input name="email" class="latent_input" type="text">
                <i>*</i></td>
            </tr>
            <tr></tr>
            <tr>
              <td>上传简历：</td>
              <td><div id="upload"></div>
                <p style="padding-top:2px;">文件要求：doc,docx,xls,xlsx</p>
                <input type="hidden" name="resume_doc" class="latent_input" id="recruit_file" /></td>
            </tr>
            <tr></tr>
            <tr>
              <td>上传作品：</td>
              <td><div id="production_upload"></div>
                <p style="padding-top:2px;">文件要求：zip,rar.且不超过2M</p>
                <input type="hidden" name="production" class="latent_input" id="production_file" /></td>
            </tr>
            <tr></tr>
            <tr>
              <td>&nbsp;</td>
              <td><input type="hidden" value="<?php echo $vo['id'];?>" id="job" name="job" />
                <button class="latent_button" type="button"  id="latent_button">提 交</button></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>
<script>
    $(function() {
    $("#tab_ul li").click(function() {
        obj = $(this);
        obj.addClass("current").siblings().removeClass("current");
        $(".temp_" + obj.index()).show().siblings(".ret_mod").hide();
    });

    //h5上传
    $('#upload').html5uploader({
        fileTypeExts: 'application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
        auto: true,
        multi: false,
        buttonText: '请上传简历',
        dir: '<?php echo $recruit_spic;?>',
        removeTimeout: 9999999,
        file_size: 1024 * 1024,
        //1M的简历够了吧？
        url: '<?php echo $APP_URL;?>Recruit/ajax_upload',
        onUploadStart: function() {

		},onUploadError: function(res) {
            layer.msg(res.msg);
			
        },onUploadComplete: function(res) {
            if (res.type == 'error') {
                this.onUploadError(res);
                return;
            }
            layer.msg("简历已经成功上传！");
            $('#upload').find('.uploadfilebtn').off("click").attr("disabled", true).css("cursor", "not-allowed").end().siblings("#recruit_file").val(res.msg.save_url); //不允许再传了,移除click实践
        }
    });

    //h5上传(作品上传)
    $('#production_upload').html5uploader({
        fileTypeExts: 'application/zip,application/x-rar-compressed',
        //zip,rar
        auto: true,
        multi: false,
        buttonText: '上传作品&nbsp;(可选)',
        dir: '<?php echo $production_spic;?>',
        removeTimeout: 9999999,
        file_size: 1024 * 1024 * 2,
        url: '<?php echo $APP_URL;?>Recruit/production_upload',
        onUploadError: function(res) {
            layer.msg(res.msg);
        },onUploadComplete: function(res) {
            if (res.type == 'error') {
                this.onUploadError(res);
                return;
            }
            layer.msg("个人作品已经成功上传！");
            $('#production_upload').find('.uploadfilebtn').off("click").attr("disabled", true).css("cursor", "not-allowed").end().siblings("#production_file").val(res.msg.save_url); //不允许再传了,移除click实践
        }
    });

    //简历提交
    $("#latent_button").click(function() {
		t=true;
		 $obj=$("input.latent_input");
		 $obj['each'](function(index, element) {
            if($(element).val()==''){
				layer.msg("资料填写不完整！"); t=false;
			}
        });
		if(t){
			 $.ajax({
            url: '<?php echo $APP_URL;?>Recruit/submit_resume?' + $("#Recruit_from").serialize(),
            type: 'get',
            dataType: "json",
            cache: false,
            processData: false,
            contentType: false,
			beforeSend: function(){
				 $("#latent_button").css("background","#999").attr("disabled",true).text("正在提交....");
		 },
        }).done(function(res) {
            layer.msg(res.msg);
			$("#latent_button").css("background","#018ae1 ").removeAttr("disabled").text("提交");
			//$("input.latent_input").val('');
            $("#latent_button").text("提交");
        }).fail(function(res) {
            layer.msg('数据异常，请稍后再提交！');
        });
		}
       
    })

})
</script>
</body>
</html>
