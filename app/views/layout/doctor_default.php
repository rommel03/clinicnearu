<!doctype>
<html>
<head>
<title><?php echo isset($title) ? $title : "Doctor ";?></title>
<link href="<?php echo URL::to("/")?>/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
<link href="<?php echo URL::to("/")?>/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet"/>
<link href="<?php echo URL::to("/")?>/css/bootstrap-table.css" type="text/css" rel="stylesheet"/>
<link href="<?php echo URL::to("/")?>/css/doctor/doctor_common.css" type="text/css" rel="stylesheet"/>
<script src="<?php echo URL::to("/")?>/js/jquery-2.1.1.min.js"></script>
<script src="<?php echo URL::to("/")?>/js/bootstrap.min.js"></script>
<script src="<?php echo URL::to("/")?>/js/bootstrap-table.js"></script>
<?php
	if(isset($css) && is_array($css))
	{
		foreach($css as $link)
		{
			echo "<link rel=\"stylesheet\" href=\"".$link."\" type=\"text/css\" />\n";
		}
	}
 
	if( isset($header_js) && is_array($header_js) )
	{
		foreach($header_js as $js)
		{
			echo "<script src=\"".$js."\"></script>\n";
		}
	}
?>
</head>
<body>
<div class="main-wrapper">
<nav id="admin_nav" class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#admin-nav-bar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo URL::to("/")?>/doctor">RRG Clinic</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="admin-nav-bar">
      <ul class="nav navbar-nav">
        <li class=""><a href="<?php echo URL::to("/")?>/doctor/patient">Patient</a></li>
        <li><a href="<?php echo URL::to("/")?>/doctor/schedule">Schedule</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reports <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Welcome Admin</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">My Public Profile</a></li>
            <li><a href="#">My Preferences</a></li>
            <li class="divider"></li>
            <li><a href="#">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="container-fluid">
		<?php echo isset($content) ? $content : ""; ?>
	</div>
</div>
<?php 
if(isset($footer_js) && is_array($footer_js))
{
	foreach($footer_js as $js)
	{
		echo "<script src=\"".$js."\"></script>\n";
	}
}
?>
</body>
</html>