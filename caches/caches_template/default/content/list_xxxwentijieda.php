<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>zhengcefagui.css">
    <div class="sec_banner">
        <div class="sec_banner_border">
			成为化妆品进入中国的最理想咨询机构
			<span>问题解答</span>
		</div>
    </div>
	<div class="con">
		<!--二级导航-->
		<div class="con_tit">
			<div class="con_tit_left">
				<a href="<?php echo $CATEGORYS['11']['url'];?>">问题解答</a>
			</div>
			<div class="con_tit_right">
				你的当前位置：
				<a href="<?php echo siteurl($siteid);?>">首页</a>
				<
				<a href="#">问题解答</a>	
			</div>
		</div>
		<ul class="con_box">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=976beefdb7075df6e5241a4983eb49cd&action=lists&catid=%24catid&num=6&page=%24page&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 6;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
             <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<li class="con_list">
                <div class="con_list_img"></div>
                <div class="con_right">
                    <span>2016-2-23</span>
                    <h4 style="height: 30px;overflow: hidden;"><?php echo $v['title'];?></h4>
                    <div class="con_line"></div>
                    <div class="p" style="display: block;height: 50px;overflow: hidden;">
                    <p>
                        <?php echo $v['content'];?>
                    </p>
                    </div>
                    <a href="<?php echo $v['url'];?>" style="float: left; ">查看详情</a>
                </div>
            </li>
            <?php $n++;}unset($n); ?>
			    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
            <div class="button">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">···</a>
                <a href="#">></a>
            </div>
		</ul>	
	</div>
<?php include template("content","footer"); ?>