<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
  <head>
  
	<link rel="stylesheet" type="text/css" href="styles/style.css">
  </head>
	
  <body>
  <header>
		<div class="header-left">
			<a>Mizusyori</a>
<?php echo date("Y/m/d"); ?> 
		</div>
		<div class="header-right">
			<a href="#">一般データ</a>
			<a href="#">1-3期水質</a>
			<a href="#" class="login">4-5期水質</a>
			
		</div>
  </header>
	<div class='test'>
			<table class='input-area'>
				<tr><td id=title01>温度</td><td id=title02>pH</td><tr>
				<tr><td><input  id='in1' type="number"></td><td><input id='in2' type="number"></td><tr>
				<tr><td id=title03>EC</td><td id=title04>DO</td><tr>
				<tr><td><input  id='in3'type="number"></td><td><input  id='in4' type="number"></td><tr>
				<tr><td id=title05>MLSS</td><td id=title06>SV30</td><tr>
				<tr><td><input  id='in5'type="number"></td><td><input  id='in6' type="number"></td><tr>
			</table>
	</div>

			<table class='input-area'>
				<tr><td id=title01>温度</td><td id=title02>pH</td><td id=title03>EC</td><tr>
				<tr><td><input id='in1' type="number"></td><td><input id='in2'type="number"></td><td><input id='in3' type="number"></td><tr>
				<tr><td id=title04>DO</td><td id=title05>MLSS</td><td id=title06>SV30</td><tr>
				<tr><td><input id='in4' type="number"></td><td><input id='in5'type="number"></td><td><input id='in6' type="number"></td><tr>
			</table>
	</div>
	
		<h2 class="hage">Ph入力について</h2>
		<p><span>pH</span>はポータブルと据え付けの値で分ける</p>
		
	 <div class="green">a</div>
   <div class="yellow">a</div>
   <div class="red">a</div>
		
	</body>
</html> 