<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<style>
    .con_box{
    margin: 50px;
}
    .con_box p{
        text-align: center;line-height: 50px;
    }
</style>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>hangyezixun.css">

    <div class="sec_banner">
        <div class="sec_banner_border">
			成为化妆品进入中国的最理想咨询机构
			<span>行业资讯</span>
		</div>
    </div>
	<div class="con">
		<!--二级导航-->
		<div class="con_tit">
			<div class="con_tit_left">
				<a href="#">行业资讯</a>
			</div>
			<div class="con_tit_right">
				你的当前位置：
				<a href="<?php echo siteurl($siteid);?>">首页</a>
				<
				<a href="<?php echo $CATEGORYS['19']['url'];?>">行业资讯</a>	
			</div>
		</div>
        <ul class="con_box">
             <?php echo $title;?>
           <?php echo $content;?> 
           <hr>
               
            <div class="button">
                <a href="<?php echo $previous_page['url'];?>">1</a>
                <a href="<?php echo $next_page['url'];?>">2</a>
                <a href="<?php echo $next_page['url'];?>">3</a>
                <a href="<?php echo $next_page['url'];?>">4</a>
                <a href="<?php echo $next_page['url'];?>">5</a>
                <a href="<?php echo $next_page['url'];?>">6</a>
                <a href="<?php echo $next_page['url'];?>">···</a>
                <a href="<?php echo $next_page['url'];?>">></a>
            </div>
         </ul>
	</div>  
<?php include template("content","footer"); ?>   