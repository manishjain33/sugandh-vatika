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

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="/sugandh-vatika/js/bootstrap.min.js"></script>
    <script src="/sugandh-vatika/js/jquery.validate.min.js"></script>
    <script src="/sugandh-vatika/js/cuteCrumbs.min.js"></script>
    <script src="/sugandh-vatika/js/sv.min.js"></script>
    <script>window.sv = { 'pageID': "item.add" };</script>
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
                <h4>Add Items</h4>
                <div class="alert alert-success" id="successMessage-1"><strong>Voila!</strong> a new item was added. </div>
                <div class="btn-group btn-group-justified margin-bottom">
                    <a class="btn btn-default" href="#">Add</a>
                    <a class="btn btn-default" href="#">Modify</a>
                    <a class="btn btn-default" href="#">Remove</a>
                  </div>
                

                <form class="form-horizontal" role="form" id="addCategoryForm">
                    <div class="row">
                            <div class="alert alert-danger" id="errorMessage-1"><strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
                            <div class="col-lg-2">
                                <img src="http://placehold.it/150x150" class="img-responsive" id="itemImageDisplay">
                                    <input type="file" id="itemImage" style="display:none;">
                            </div>
                            <div class="col-lg-10">
                                <div class="row">
                                    <div class="col-lg-8 no-padding">
                                        <input type="text" class="form-control margin-bottom" id="name" name="name" placeholder="Name">
                                    </div>
                                    <div class="col-6 col-sm-4 col-lg-4 no-padding-right">
                                        <div class="input-group" id="priceTooltip">
                                            <span class="input-group-addon">$</span>
                                            <input type="text" class="form-control margin-bottom" placeholder="Price" id="price" name="price">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 no-padding">
                                        <textarea placeholder="Description" rows="3" class="col-lg-12 form-control margin-bottom" name="description" id="description"></textarea>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-lg-4">
                                           <div class="input-group" id="">
                                            <span class="input-group-addon">%</span>
                                            <input type="text" class="form-control margin-bottom" placeholder="Discount" id="discount" name="discount">
                                        </div>
                                            
                                        </div>
                                        <div class="col-lg-3">
                                        	 Available packagings
                                            </div>
                                        <div class="col-lg-2">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-primary active">
                                                    <input type="radio" name="sharable" id="no" checked="checked">
                                                    No
                                                </label>
                                                <label class="btn btn-primary">
                                                    <input type="radio" name="sharable" id="yes">
                                                    Yes
                                                </label>
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row" style="display:none">
                                        <div class="form-group">
                                        <div class="col-lg-12">
                                            <fieldset>
                                            	<legend>Packagings</legend>
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" id="inlineCheckbox1" value="option1"> 10
                                                </label>
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" id="inlineCheckbox2" value="option2"> 20
                                                </label>
                                                <label class="checkbox-inline">
                                                  <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
                                                </label>

                                            </fieldset>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
                <div class="div-parameter">
                    <ul class="list-group custom-list-group" id="itemsCrumbsContainer">
                        <li class="list-group-item defult-list-element" id="itemDefaultText">No item available. Create a new item to get started.</li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</body>
</html>
