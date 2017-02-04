<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>init.css">
<link rel="stylesheet" href="<?php echo CSS_PATH;?>zhaoxiannasi.css">

    <div class="sec_banner">
        <div class="sec_banner_border">
			成为化妆品进入中国的最理想咨询机构
			<span>招贤纳士</span>
		</div>
    </div>
    <div class="con">
		<!--二级导航-->
		<div class="con_tit">
			<div class="con_tit_left">
				<a href="<?php echo $CATEGORYS['13']['url'];?>">公司简介</a>|
                <a href="<?php echo $CATEGORYS['14']['url'];?>">招贤纳士</a>
			</div>
			<div class="con_tit_right">
				你的当前位置：
				<a href="<?php echo siteurl($siteid);?>">首页</a>
				<
				<a href="<?php echo $CATEGORYS['9']['url'];?>">关于我们</a>
                <
                <a href="<?php echo $CATEGORYS['14']['url'];?>">招贤纳士</a>    	
			</div>
		</div>	
        <ul class="con_box"  style="margin-top:45px; ">
            <li class="title_active">活动策划
                <div class="con_span">
                    <span class="jia jiaact">+</span>
                    <span class="jian">-</span>
                </div>
            </li>
            <div class="con_p active">
                <h5>岗位职责：</h5>
                 <p>  1.啊肯德基埃里克森按实际打卡机的 阿克苏机读卡奥斯卡的接口
                    <br>
                    2.奥斯卡大奥斯卡大看啊就是打开爱打架
                    <br>
                    3.按时打卡机艾迪康请问我我u饿哦奇缺IQ答啊圣诞快乐奇偶奇闻IEu
                    <br>
                    4.大苏打hi区位和卡少女看得开到刘去哦额奥杜亚啊大家卡几点啦
                 </p>    
                <h5>任职资格条件：</h5>
                    <p>
                1.爱打架爱神的箭空间啊啊大家啦
                <br>
                2.我饿哦我爱神的箭卡大事记结婚多久啊
                <br>
                3.阿丢千万打开了
                <br>
                4.起我IE去企鹅欧大量
                </p>
            </div>
        </ul>
        <ul class="con_box">
            <li>客户经理/高级客户经理
                <div class="con_span"><span>+</span></div>
            </li>
            <div class="con_p">
                <h5>岗位职责：</h5>
                 <p>  1.啊肯德基埃里克森按实际打卡机的 阿克苏机读卡奥斯卡的接口
                    <br>
                    2.奥斯卡大奥斯卡大看啊就是打开爱打架
                    <br>
                    3.按时打卡机艾迪康请问我我u饿哦奇缺IQ答啊圣诞快乐奇偶奇闻IEu
                    <br>
                    4.大苏打hi区位和卡少女看得开到刘去哦额奥杜亚啊大家卡几点啦
                 </p>    
                <h5>任职资格条件：</h5>
                    <p>
                1.爱打架爱神的箭空间啊啊大家啦
                <br>
                2.我饿哦我爱神的箭卡大事记结婚多久啊
                <br>
                3.阿丢千万打开了
                <br>
                4.起我IE去企鹅欧大量
                </p>
            </div>
        </ul>
        <ul class="con_box">
            <li>上午总监
                <div class="con_span"><span>+</span></div>
            </li>
            <div class="con_p">
                <h5>岗位职责：</h5>
                 <p>  1.啊肯德基埃里克森按实际打卡机的 阿克苏机读卡奥斯卡的接口
                    <br>
                    2.奥斯卡大奥斯卡大看啊就是打开爱打架
                    <br>
                    3.按时打卡机艾迪康请问我我u饿哦奇缺IQ答啊圣诞快乐奇偶奇闻IEu
                    <br>
                    4.大苏打hi区位和卡少女看得开到刘去哦额奥杜亚啊大家卡几点啦
                 </p>    
                <h5>任职资格条件：</h5>
                    <p>
                1.爱打架爱神的箭空间啊啊大家啦
                <br>
                2.我饿哦我爱神的箭卡大事记结婚多久啊
                <br>
                3.阿丢千万打开了
                <br>
                4.起我IE去企鹅欧大量
                </p>
            </div>
        </ul>
        
        
	</div>
<script src="<?php echo JS_PATH;?>jquery.min.js"></script>
<script>
    $(".con_box").click(function(){
        $(this).find(".con_p").toggleClass("active");
        $(this).find("li").toggleClass("title_active");
        $(this).find(".jia").toggleClass("jiaact");

    })
</script>
<?php include template("content","footer"); ?>