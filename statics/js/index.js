var allbtn=$(".btn")
var nowbtn=$(".btn:first")
var allimg=$(".img_list")
var nowimg=$(".img_list:first")
var banner_time=setInterval(time,2000);
$(".banner").hover(function () {
	clearInterval(banner_time)
},function () {
	banner_time=setInterval(time,2000)
})
var bannernum=0;
var qq=2;
var bannerWidth=$(window).width()
function time() {
	bannernum++;
	if(bannernum==allimg.length){
		bannernum=0
	}
	nowbtn.removeClass("btn_active").siblings().addBack().eq(bannernum).addClass("btn_active")
	nowimg.animate({left:-bannerWidth},500,'linear').parent().
	children().eq(bannernum).css({left:bannerWidth,zIndex:qq++}).animate({left:0},500,'linear')
	nowbtn=allbtn.eq(bannernum)
	nowimg=allimg.eq(bannernum)
}
allbtn.click(function () {
	nowbtn.removeClass("btn_active");
	$(this).addClass("btn_active");
	nowbtn=$(this)
	var now=nowimg.index();
	var next=$(this).index();
	if(now>next){
		nowimg.animate({left:bannerWidth},500,'linear').parent().
		children().eq(next).css({left:-bannerWidth,zIndex:qq++}).animate({left:0},500,'linear')
	}else{
		nowimg.animate({left:-bannerWidth},500,'linear').parent().
		children().eq(next).css({left:bannerWidth,zIndex:qq++}).animate({left:0},500,'linear')
	}
	nowimg=allimg.eq(next)
	bannernum=next
})


$(".totop").click(function(){
	console.log($(this))
	$("body,html").animate({scrollTop:0})
})
$(window).scroll(function(){
	var x=$(this).height();
	var a=$(this).scrollTop();
	if(a>400){
	  $(".d1,.d2").transition({x:"0"},500)
		$(".d3,.d4").transition({x:"0"},500)
		// console.log($(".d1,.d2"))
		if (a>=x) {
			$(".fix").fadeIn();
			if(a>=1100){
				$(".ss1").transit({scale:0.8},2000)
				$(".ss9").transit({scale:0.8},2000)
				$(".ss7").transit({scale:0.8},2000)
				$(".ss11").delay(500).transit({scale:0.8},1500)
				$(".ss2").delay(500).transit({scale:0.8},1500)
				$(".ss8").delay(500).transit({scale:0.8},1500)
				$(".ss10").delay(500).transit({scale:0.8},1500)
				$(".ss3").delay(500).transit({scale:0.8},1500)
				$(".ss4").delay(200).transit({scale:0.8},1800)
				$(".ss5").delay(300).transit({scale:0.8},1700)
				$(".ss6").delay(300).transit({scale:0.8},1700)
			}
		}
	}else if(a<x){
		$(".fix").fadeOut();
	}

})