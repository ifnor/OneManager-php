<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name').' - '.$title);?></title>
	<link rel="shortcut icon" href="//ifdo.ml/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/css/mdui.css">
	<!-- <link rel="stylesheet" href="./view/youhua/css/style.css"> -->
	<link rel="stylesheet" href="//pan.ifto.xyz/view/youhua/css/mogai.css">
	<style>
		body{background-color:#f2f5fa;padding-bottom:60px;background-position:center bottom;background-repeat:no-repeat;background-attachment:fixed}.youhua-item{margin:20px -8px 0!important;padding:15px!important;border-radius:5px;background-color:#fff;-webkit-box-shadow:0 .5em 3em rgba(161,177,204,.4);box-shadow:0 .5em 3em rgba(161,177,204,.4);background-color:#fff}.mdui-img-fluid,.mdui-video-fluid{border-radius:5px;border:1px solid #eee}.mdui-list{padding:0}.mdui-list-item{margin:0!important;border-radius:5px;padding:0 10px 0 5px!important;border:1px solid #eee;margin-bottom:10px!important}.mdui-list-item:last-child{margin-bottom:0!important}.mdui-list-item:first-child{border:none}.mdui-toolbar{width:auto;margin-top:60px!important}.mdui-appbar .mdui-toolbar{height:56px;font-size:16px}.mdui-toolbar>*{padding:0 6px;margin:0 2px;opacity:.5}.mdui-toolbar>.mdui-typo-headline{padding:0 16px 0 0}.mdui-toolbar>i{padding:0}.mdui-toolbar>a:hover,a.mdui-typo-headline,a.active{opacity:1}.mdui-container{max-width:980px}.mdui-list>.th{background-color:initial}.mdui-list-item>a{width:100%;line-height:48px}.mdui-toolbar>a{padding:0 16px;line-height:30px;border-radius:30px;border:1px solid #eee}.mdui-toolbar>a:last-child{opacity:1;background-color:#1e89f2;color:#ffff}@media screen and (max-width:980px){.mdui-list-item .mdui-text-right{display:none}.mdui-container{width:100%!important;margin:0}.mdui-toolbar>*{display:none}.mdui-toolbar>a:last-child,.mdui-toolbar>.mdui-typo-headline,.mdui-toolbar>i:first-child{display:block}}
	</style>
	<style>
		body {
			background-image: url(https://ifdo.ml/bg.svg) !important;
			background-position: center bottom !important;
			background-size: cover !important;
			background-attachment: fixed !important;
			background-repeat: no-repeat !important;
		}
	</style>
	<script src="//cdnjs.loli.net/ajax/libs/mdui/0.4.1/js/mdui.min.js"></script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
		<header class="nav">
			<div class="navSize">
				<a href="/"><img class="avatar" src="//q.qlogo.cn/g?b=qq&nk=1787990728&s=100"/></a>
				<div class="navRight">
					<ul class="navul">
						<li class="navli"><a href="https://ifdo.ml" target="_blank">博客</a></li>
						<li class="navli"><a href="/login">登陆</a></li>
					</ul>
					<div class="icon"></div>
				</div>
			</div>
		</header>
	
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar youhua-item">
			<a href="/"><?php e(config('site_name'));?></a>
			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
		</div>
    	<?php view::section('content');?>
  	</div>
  	
  	<div id="blog">
  	<div id="comeIn">
  	<center><a href="//ifdo.ml" target="_blank" class="links" id="a1">🍭前往主站</a><a class="links">　・　</a><a class="links" href="//pan.ifto.xyz" target="_blank" id="a2">🍢前往导航页</a><a class="links" id="a4">　・　</a><a class="links" href="//ifdo.ml" target="_blank" id="a3">🍡前往博客</a></center>
  	</div>
  	</div>
<script src="//pan.ifto.xyz/view/youhua/js/urusai.js" async></script>

  	  	<script>
  	  	function delay(j) {   
    var start=new Date().getTime();   
    while(true) if(new Date().getTime()-start>j)  break;
}
  	    var links = document.getElementsByClassName("fileLinks");
        function downall(){
            for(i=0;i<links.length;i++){
				window.open(links[i].href,"download"+i)
            delay (2000);
            }
        }
  	</script>
  	<div id="blog">
  		<footer>备案号：<a href="http://www.miitbeian.gov.cn/" target="_blank">鲁ICP备20006034号</a></footer>
  	</div>
  	
</body>
</html>