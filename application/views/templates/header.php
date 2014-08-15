<html>
<head>
	<meta charset="utf-8">
	<title><?php echo $title ?> - CodeIgniter 2 Tutorial</title>
	<link rel="stylesheet" href="<?=base_url("/public/css/bootstrap.min.css")?>">
	<link rel="stylesheet" href="<?=base_url("/public/css/carousel.css")?>">
	<!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
	<script src="<?=base_url("/public/js/jquery-1.11.1.min.js")?>"></script>
	<script src="<?=base_url("/public/js/bootstrap.js")?>"></script>
<!--	<link rel="stylesheet" href="<?=base_url("/public/css/bootstrap-responsive.min.css")?>"> -->
</head>
<body>
<div class="container">
<div class="navbar-wrapper">
      <div class="container">

        <div class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">HSNG(ANT)</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">財產<span class="caret"></span></a>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">財產列表</a></li>
                    <li class="divider"></li>
		    <li><a href="#">財產匯入/匯出</a></li>
                    <li class="divider"></li>
		    <li><a href="#">年度可報廢財產</a></li>
                    <li class="divider"></li>
		    <li><a href="#">手動調整財產</a></li>
                    <li class="divider"></li>
		    <li><a href="#">畢業專區</a></li>
		  </ul>
		</li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown">會員<span class="caret"></span></a>
		  <ul class="dropdown-menu" role="menu">
		    <li><a href="#">個人資料修改</a></li>
                    <li class="divider"></li>
		    <li><a href="#">個人使用財產清單</a></li>
		  </ul>
		</li> <!-- done dropdown list-->
		</ul>
		<ul class="nav navbar-nav navbar-right">
        	  <li><a href="#">註冊</a></li>
		</ul>
		<ul class="nav navbar-nav navbar-right">
        	  <li><a href="#">登入</a></li>
		</ul>
            </div>
          </div>
        </div>

      </div>
</div>
