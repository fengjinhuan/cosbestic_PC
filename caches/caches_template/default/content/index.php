<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<link rel="stylesheet" href="<?php echo CSS_PATH;?>index.css">
	<!-- banner开始 -->
	<div class="banner">
		<div class="img_con">
			<a href="#" class="img_list" style="z-index: 2"><img src="<?php echo IMG_PATH;?>images/banner.jpg" alt=""></a>
			<a href="#" class="img_list"><img src="<?php echo IMG_PATH;?>images/banner.jpg" alt=""></a>
			<a href="#" class="img_list"><img src="<?php echo IMG_PATH;?>images/banner.jpg" alt=""></a>
			<a href="#" class="img_list"><img src="<?php echo IMG_PATH;?>images/banner.jpg" alt=""></a>
		</div>
		<div class="banner_img">
			<div class="banner_left"></div>
			<div class="banner_right"></div>
			<!-- 文字定位 -->
			<div class="banner_span">
				<div class="banner_tit"></div>
				<div class="banner_con"></div>
				<div class="line"></div>
				<a href="<?php echo $CATEGORYS['9']['url'];?>" class="banner_more">
					了解更多
				</a>
			</div>
			<div class="banner_btn">
				<div class="btn btn_active"></div>
				<div class="btn"></div>
				<div class="btn"></div>
				<div class="btn"></div>
			</div>
		</div>
	</div>
	<!-- banner结束 -->
	<!-- 主营业务 -->
	<section class="s1">
		<h1>主营业务<span></span></h1>
		<div class="show">
			<dl class="d1">
				<dt>01</dt>
				<div class="show_border"></div>
				<h2>进口非特殊类化妆品备案</h2>
				<dd>Imports of non-special cosmetics for the record</dd>
				<a href="<?php echo $CATEGORYS['15']['url'];?>">查看详情 ></a>
			</dl>
			<dl class="d2">
				<dt>02</dt>
				<div class="show_border"></div>
				<h2>进口特殊类化妆品备案</h2>
				<dd>Imported special cosmetics for  the record</dd>
				<a href="<?php echo $CATEGORYS['15']['url'];?>">查看详情 ></a>
			</dl>
			<dl class="d3">
				<dt>03</dt>
				<div class="show_border"></div>
				<h2>国产特殊类化妆品备案</h2>
				<dd>Domestic special cosmetics for the record</dd>
				<a href="<?php echo $CATEGORYS['15']['url'];?>">查看详情 ></a>
			</dl>
			<dl class="d4">
				<dt>04</dt>
				<div class="show_border"></div>
				<h2>国产非特殊类化妆品备案</h2>
				<dd>Domestic non-special cosmetics for the record</dd>
				<a href="<?php echo $CATEGORYS['15']['url'];?>">查看详情 ></a>
			</dl>
		</div>
	</section>
	<!-- 成功案例 -->
	<div class="box">
		<section class="s2">
			<h1>主营业务<span></span></h1>
			<div class="s2_img">
				<a href="#" class="ss1"><img src="<?php echo IMG_PATH;?>images/s1.png" alt=""></a>
				<a href="#" class="ss2"><img src="<?php echo IMG_PATH;?>images/s2.png" alt=""></a>
				<a href="#" class="ss3"><img src="<?php echo IMG_PATH;?>images/s3.png" alt=""></a>
				<a href="#"  class="ss4"><img src="<?php echo IMG_PATH;?>images/s4.png" alt=""></a>
				<a href="#" class="ss5"><img src="<?php echo IMG_PATH;?>images/s5.png" alt=""></a>
				<a href="#" class="ss6"><img src="<?php echo IMG_PATH;?>images/s6.png" alt=""></a>
				<a href="#" class="ss7"><img src="<?php echo IMG_PATH;?>images/s7.jpg" alt=""></a>
				<a href="#" class="ss8"><img src="<?php echo IMG_PATH;?>images/s8.png" alt=""></a>
				<a href="#"  class="ss9"><img src="<?php echo IMG_PATH;?>images/s9.png" alt=""></a>
				<a href="#" class="ss10"><img src="<?php echo IMG_PATH;?>images/s10.png" alt=""></a>
				<a href="#" class="ss11"><img src="<?php echo IMG_PATH;?>images/s11.png" alt=""></a>
			</div>
			<a href="#" class="s2_more">查看更多 ></a>
		</section>
	</div>
<?php include template("content","footer"); ?>