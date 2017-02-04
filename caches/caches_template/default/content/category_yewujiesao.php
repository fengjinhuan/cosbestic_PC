<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>yewujiesao.css">
<body>
     <div class="sec_banner">
        <div class="sec_banner_border">
			成为化妆品进入中国的最理想咨询机构
			<span>业务介绍</span>
		</div>
    </div>
    <div class="con">
        <ul class="inner_box">
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4e1fbf854d74a158d05aab3e8b480ade&action=category&catid=10&num=4&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'10','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'4',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
            <li class="inner_list">
                <div class="inner_icon"></div>
                <h3><?php echo $v['catname'];?></h3>
                <a href="<?php echo $v['url'];?>">查看详情 ></a>
            </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>    
<?php include template("content","footer"); ?>




<!--<li class="inner_list">
                <div class="inner_icon"></div>
                <h3>化妆品备案流程</h3>
                <a href="">查看详情 ></a>
            </li>
            <li class="inner_list">
                <div class="li_top">
                    <div class="inner_icon"></div>
                    <h3>化妆品备案所需资料清单</h3>
                    <a href="">查看详情 ></a>
                </div>
                <div class="li_bot">
                    <div class="inner_icon"></div>
                    <h3>化妆品备案所需费用</h3>
                    <a href="">查看详情 ></a>
                </div>
            </li>-->