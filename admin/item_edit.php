<?php
require_once('/var/www/sugandh-vatika/php/sessions.php');
$session = new SESSIONS();
$session->check();
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Administrator - Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="../css/innerpages.css" rel="stylesheet" media="screen">
	<link href="../dropzone/css/basic.css" rel="stylesheet" />
	<link href="../dropzone/css/dropzone.css" rel="stylesheet" />

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="/sugandh-vatika/js/bootstrap.min.js"></script>
    <script src="/sugandh-vatika/js/jquery.validate.min.js"></script>
    <script src="/sugandh-vatika/dropzone/dropzone.min.js"></script>
    <script src="/sugandh-vatika/js/sv.min.js"></script>
    <script>window.sv = { 'pageID': "item.edit" };</script>
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
</head>
<body>
    <div id="wrap">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        
                    </button>
                    <a class="navbar-brand" href="/sugandh-vatika/admin/dashboard.php">Sugandh Vatika
                    </a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse nav-collapse-scrollable ">
                    <ul class="nav navbar-nav navbar-right links">
                        <li>
                            <button class="btn btn-danger btn-sm logout">Sign out</button>
						</li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="containt_other container">
            <div class="b_page">
                <div class="alert alert-success" id="successMessage-1"><strong>Voila!</strong> a new item was added. </div>
                <button type="button" class="btn btn-default btn-lg btn-block margin-bottom">Edit Item</button>
				<!--<div class="row">
                	<div class="col-lg-4">
                    	<select class="form-control"><option>All</option></select>
                    </div>
                    <div class="col-lg-4">
                    	<input type="text" class="form-control margin-bottom" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="col-lg-3">
                    	<div class="input-group" id="priceTooltip">
                        	<span class="input-group-addon">₹</span>
                            	<input type="text" class="form-control margin-bottom" placeholder="Price" id="price" name="price">
                        </div>
                    </div>
                    <div class="col-lg-1">
                    	<button type="button" class="btn btn-primary btn-sm pull-right"><i class="icon-ok"></i> </button>
                    </div>
                </div>-->
					
                <form class="form-horizontal" role="form" id="editItemForm" enctype="multipart/form-data" method="post">
                    <div class="row">
                    	<div class="col-lg-12 margin-bottom">
                        	
                        	<div style="min-height:inherit; padding:0px;">
                            <div class="dd-default"></div>
                        	<div class="img_upload dropzone-previews" id="img_upload">
                            	
							</div>
                            </div>
                        
                        </div>                       
                    </div>
                    <div class="row">
                    	<div class="col-lg-4"><input type="text" class="form-control margin-bottom" id="name" name="name" placeholder="Name"></div>
                        <div class="col-lg-4 col-sm-4">
                            <select class="form-control"><option>10% off</option></select>
                        </div>
                        <div class="col-lg-4 col-sm-4">
                            <div class="input-group" id="priceTooltip">
                                <span class="input-group-addon">₹</span>
                                    <input type="text" class="form-control margin-bottom" placeholder="Price" id="price" name="price">
                            </div>
                        </div>
                    </div>
                    <div class="row margin-bottom">
                    	<div class="col-lg-12 col-sm-12">
                        	<textarea class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-4 col-sm-4"><select class="form-control"><option>Category</option></select></div>
                        <div class="col-lg-4 col-sm-4"><select class="form-control" multiple><option>Packaging</option><option>Perfume</option><option>Agar</option><option>Agar</option><option>Agar</option><option>Agar</option><option>Agar</option><option>Agar</option><option>Agar</option><option>Agar</option><option>Agar</option><option>Agar</option></select></div>
						<div class="col-lg-1 col-sm-1">Quantity</div>
                    <div class="col-lg-3 col-sm-3"><input type="text" class="form-control margin-bottom" placeholder="∞" id="qty" name="qty"></div>
                    </div>

                </form>
                <!--<div class="div-parameter">
                    <ul class="list-group custom-list-group" id="itemsCrumbsContainer">
                        <li class="list-group-item defult-list-element" id="itemDefaultText">No item available. Create a new item to get started.</li>
                    </ul>
                </div>-->
                

            </div>
        </div>
    </div>
</body>
</html>
