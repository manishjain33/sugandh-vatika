<?php
require_once('/var/www/sugandh-vatika/php/sessions.php');
$session = new SESSIONS();
$session->check();
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8" />
    <title>Dashboard</title>
        <link href="/sugandh-vatika/css/normalize.css" rel="stylesheet">
<link rel="stylesheet" href="/sugandh-vatika/css/bootstrap.min.css">
<link href="/sugandh-vatika/css/admin_pages.css" rel="stylesheet">

   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="/sugandh-vatika/js/bootstrap.min.js"></script>
    <script src="/sugandh-vatika/js/sv.min.js"></script>
    <script>window.sv = { 'pageID': "admin.dashboard" };</script>


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

</head>
<body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    	<div class="container">
        	<div class="navbar-header">
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        
                    </button>
                <a class="navbar-brand" href="index.html">
                        <img src="http://placehold.it/237x52" class="img-responsive img-resize-small" />
                    </a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse nav-collapse-scrollable links">
            	
                    <ul class="nav navbar-nav navbar-right links">
                   
                        <li><a href="/sugandh-vatika/php/iface.php?fx=sign&op=out">Sign Out</a></li>
                    </ul>
                    
            </div>
    	</div>
    </nav>
    <div class="containt ">
        <div class="gallery" id="modulesContainer">
            
            <!--<div style="clear: both"></div>-->
        </div>
    </div>
</body>
</html>