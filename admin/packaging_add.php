<?php
require_once('/var/www/sugandh-vatika/php/sessions.php');
$session = new SESSIONS();
$session->check();
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <title>Sugandh Vatika</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="../css/innerpages.css" rel="stylesheet" media="screen">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="/sugandh-vatika/js/bootstrap.min.js"></script>
    <script src="/sugandh-vatika/js/jquery.validate.min.js"></script>
    <script src="/sugandh-vatika/js/cuteCrumbs.min.js"></script>
    <script src="/sugandh-vatika/js/sv.min.js"></script>
    <script>window.sv = { 'pageID': "packaging.add" };</script>
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
                    <ul class="nav navbar-nav">
                        <li><a href="/sugandh-vatika/admin/dashboard.php">Dashboard</a></li>                        
                    </ul>
                    <ul class="nav navbar-nav navbar-right links">
                        <li>
                            <button class="btn btn-danger btn-sm logout">Sign out</button></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="containt_other container">
            <div class="b_page">
                <h4>Add Packaging</h4>
                <div class="alert alert-success" id="successMessage-1"><strong>Voila!</strong> a new packaging was added. </div>
                <form class="form-horizontal" role="form" id="addPackagingForm">
					<div class="form-group">
                        <label for="name" class="col-lg-2 control-label margin-bottom">Name</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control margin-bottom" id="name" name="name" required>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="category" class="col-lg-2 control-label margin-bottom">Category</label>
                        <div class="col-lg-6">
                            <select class="form-control" id="category" name="category"></select>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="metric" class="col-lg-2 control-label margin-bottom">Metric System</label>
                        <div class="col-lg-6">
                            <select class="form-control" id="metric" name="metric">
                            	<option value="g">grams</option>
                                <option value="kg">kilograms</option>
                                <option value="ml">mililitres</option>
                                <option value="l">liters</option>
                            </select>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <label for="value" class="col-lg-2 control-label margin-bottom">Value</label>
                        <div class="col-lg-6">
                            <input type="text" class="form-control margin-bottom" id="value" name="value" required>
                        </div>
                    </div>
					
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-6">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Add</button>
                        </div>
                    </div>
                </form>
                <div class="div-parameter">
                    <ul class="list-group custom-list-group" id="crumbsContainer">
                        <li class="list-group-item defult-list-element" id="defaultText">No packaging available. Create a new packaging to get started.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
