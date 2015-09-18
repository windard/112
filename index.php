<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>112</title>
 	<meta name="viewport" content="width=1366, initial-scale=1.0">	
	<script src="js/jquery-2.1.4.min.js"></script>
	<script>
	$(document).ready(function(){
		for (var i = 0; i < $('.menu li').length; i++) {
			$('.menu li:eq('+i+')').css({
				'left':parseInt($('.menu li').width())*(i-1) + 'px'
			})
		};

		setInterval(function(){
		 for (var i = 0; i < $('.menu li').length; i++) {
		    	var This = $('.menu li:eq('+i+')');
		    	var Left = parseInt(This.css('left'));

				if(Left >= ($('.menu li').length - 2)*parseInt(This.css('width'))){
					This.css({
						'left':'-' + parseInt(This.css('width')) + 'px'	
					})
				}else{
					This.animate({
						left:parseInt(Left + $('.menu li').width()) +　'px'
					})
				}
		    };  
		},3000)
	})
	</script>
	<style>
	*{
		margin: 0;
		padding: 0;
	}
	.container{
		width: 100%;
		background: linear-gradient(to bottom right,#EAEDED  0% ,#97BDE2 100%);
		/*background-color: rgba(151,189,226,.7);*/
		font-family: MicroSoft YaHei;
		font-size: 14px;
		line-height: 1.4em;
	}
	.nav{
		width: 100%;
		background:linear-gradient(to bottom right,  #01a6e3 0% ,#13db72 100%);
		/*opacity: .7;*/
		/*background-color: #000;*/
		/*color:white;*/
		color:#9d9d9d;
		overflow: hidden;
		line-height: 2.4em;
	}
	.main_nav li{
		margin: 0 1px;
		padding: 10px 15px;
		list-style: none;
		cursor: pointer;
		display: inline-block;
		font-size: 1.4em;
		/*background-color: #000;*/
	}
	.main_nav li:hover{
		color: white;
	}
	.main_nav li.active{
		color:white;
	}
	.logo{
		float: left;
		line-height: 1;
		margin-left: 30px;
		margin-right: 30px;
		padding-top: 5px;
		/*padding-top: 5px;*/
		/*height: 55px;*/
		/*height: 100%;*/
	}
	.main_nav{
		/*width: 60%;*/
		float: left;
	}
	.admin{
		float: right;
		/*width: 40%;*/
	}
	.admin button{
		font-family: MicroSoft YaHei;
		float: right;
		font-weight: bolder;
		font-size: 1.4em;
		border:none;
		outline: none;
		margin: 8px 20px;
		border-radius: 5px;
		cursor: pointer;
		padding: 8px 20px;
		opacity: .7;
		color:#fff;
		font-weight: bold;		
	}
	.admin button:first-child{
		margin-right: 40px;
	}
	.admin button:hover{
		opacity: 1;
	}
	.login{
		background-color: #8CBCF7;
	}
	.reginer{
		background-color: #F1524B;
	}
	.main{
		position: relative;
		width: 85%;
		margin: 0 auto 0;
	}	
	.double{
		position: absolute;
		background-color: white;
		/*width: 50px;*/
		font-weight: bold;
		text-align: center;
		font-size: 1.8em;
		line-height: 1.4em;
		padding: 12px 7px;
		overflow: hidden;
	}
	.left{
		position: absolute;
		top:0;
		color:white;
		background:linear-gradient(to bottom right, #2fe688 0%, #31b6f1 100%);
		left: -25px;
		position: absolute;
		background-color: white;
		/*width: 50px;*/
		font-weight: bold;
		text-align: center;
		font-size: 2.8em;
		line-height: 1.4em;
		padding: 120px 25px;
		/*overflow: hidden;		*/
	}
	.right{
		position: absolute;
		top:0;
		color:white;
		background:linear-gradient(to bottom right, #3ce3c3 0%, #0df478 100%);
		right:-25px;
		position: absolute;
		background-color: white;
		/*width: 50px;*/
		font-weight: bold;
		text-align: center;
		font-size: 2.8em;
		line-height: 1.4em;
		padding: 120px 25px;
		/*overflow: hidden;		*/
	}
	.menu{
		list-style: none;
		position: relative;
		width: 950px;
		height: 600px;
		overflow: hidden;
		margin: 25px auto 0;
	}
	.menu li{
		position: absolute;
		list-style: none;
	}
	.menu li img{
		width: 950px;
		height: 600px;
	}	
	.wall_title{
		/*padding: 5px 10px;*/
		/*width: 120px;*/
		overflow: hidden;
		/*width: 90%;*/
		border-bottom: 10px solid #fff;
	}
	.wall_title h2{
		text-align: center;
		margin: 0;
		background-color: #fff;
		padding: 10px 10px;
		width: 150px;
		float: left;
	}
	.wall_title p{
		float: left;
		/*display: buttom;*/

		font-size: 1.4em;
		/*color: #fff;*/
	}
	.pic_wall{
		padding-top: 50px;
		padding-left: 30px;
		padding-bottom: 50px;
		overflow: hidden;		
	}	
	.polaroid{
		margin: 20px;
		width:300px;
		text-align: center;
		padding:10px 10px 20px 10px;
		border:1px solid #BFBFBF;
		background-color:white;
		box-shadow:2px 2px 3px #aaaaaa;
	}
	.polaroid img{
		width: 280px;
		height: 230px;
	}
	.video video{
		/*width: */
		background-color: #000;
	}
	.rotate_left
	{
		float:left;
		-ms-transform:rotate(7deg); /* IE 9 */
		-moz-transform:rotate(7deg); /* Firefox */
		-webkit-transform:rotate(7deg); /* Safari and Chrome */
		-o-transform:rotate(7deg); /* Opera */
		transform:rotate(7deg);
	}
	.rotate_right
	{
		float:left;
		-ms-transform:rotate(-8deg); /* IE 9 */
		-moz-transform:rotate(-8deg); /* Firefox */
		-webkit-transform:rotate(-8deg); /* Safari and Chrome */
		-o-transform:rotate(-8deg); /* Opera */
		transform:rotate(-8deg);
	}	

	</style>
</head>
<body>
	<div class="container">
		<nav class="nav">
			<div class="logo">
				<img src="images/logo.png" alt="logo">
			</div>				
			<ul class="main_nav">
				<li class="active">首页</li>
				<li>宿舍历史</li>
				<li>宿舍活动</li>
				<li>关于我们</li>
			</ul>		
			<div class="admin">
				<button class="reginer">注册</button>
				<button class="login">登陆</button>
			</div>
		</nav>
		<div class="main">
			<!-- <div class="double"> -->
				<div class="left">
					<p>死<br>后<br>定<br>会<br>长<br>眠</p>
				</div>
				<div class="right">
					<p>生<br>前<br>何<br>必<br>多<br>睡</p>
				</div>
			<!-- </div> -->
				<ul class="menu">
					<li><img src="images/1.jpg" alt="#"></li>
					<li><img src="images/2.jpg" alt="#"></li>
					<li><img src="images/3.jpg" alt="#"></li>
					<li><img src="images/4.jpg" alt="#"></li>
				</ul>				
			<div class="pic_wall">
				<div class="wall_title">
					<h2>我们的活动</h2>
					<p>我们的家在这里</p>
				</div>
				<div class="polaroid rotate_right">
					<img src="images/1.jpg" alt="#">
				</div>
				<div class="polaroid rotate_left">
					<img src="images/1.jpg" alt="#">
				</div>	
				<div class="polaroid rotate_right">
					<img src="images/1.jpg" alt="#">
				</div>	
				<div class="polaroid rotate_left">
					<img src="images/1.jpg" alt="#">
				</div>	
				<div class="polaroid rotate_right">
					<img src="images/1.jpg" alt="#">
				</div>	
				<div class="polaroid rotate_left">
					<img src="images/1.jpg" alt="#">
				</div>	
			</div>	
			<div class="activity">
				<div class="activity_title">
					<h1>我们的活动</h1>
					<p>我们的活动充满欢声笑语</p>
				</div>
				<div class="video">
					<!-- <video src="images/movie.mp4"></video> -->
					<video width="450" height="300" controls="controls" >
					  <source src="images/meet.mp4" type="video/mp4" />
					  <!-- <source src="images/movie.wmv" type="video/wmv" /> -->
					</video>	
				</div>
				<div class="comment">
					<div class="each_comment">
						
					</div>
					<div class="each_comment"></div>
					<div class="each_comment"></div>
					<div class="each_comment"></div>
					<div class="each_comment"></div>
					<div class="each_comment"></div>
				</div>
			</div>								
		</div>
	</div>

</body>