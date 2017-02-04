<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<body>
	<!-- 头部  -->
	<header>
		<nav>
		<a  class="index_a" href="<?php echo siteurl($siteid);?>" style="float: left;">	
			<div class="logo">
			</div>
		</a>
		<div class="sec_box">
			<a href="<?php echo siteurl($siteid);?>">
				<dl>
					<dt>首页</dt>
					<dd>HOME</dd>
				</dl>
			</a>
		</div>	
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b2693892c35a89956d5574d578ef8350&action=category&catid=0&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
		 <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
		<div class="sec_box">
			<a href="<?php echo $v['url'];?>"  class="sec_nav">
				<dl>
					<dt><?php echo $v['catname'];?></dt>
					<dd>
						<?php echo $v['catdir'];?>
						<!--<?php var_dump($v)?>-->
					</dd>
				</dl>
			</a>
			<div class="show_nav">
						<div class="nav_left">
							<a href="<?php echo $CATEGORYS['13']['url'];?>">公司简介</a>
							<a href="<?php echo $CATEGORYS['14']['url'];?>">招贤纳士</a>
						</div>
						<div class="nav_right"></div>
			</div>
		</div>	
		<?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
		<div class="head_right">
			<a href="#">中文版</a>
			<a href="#">Eenlish</a>
		</div>
		</nav>
		
	</header>