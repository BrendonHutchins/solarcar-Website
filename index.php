<?php
/**
 * index.php
 *
 * Main index page for the Flinders University Solar Car dashboard display.
 * Data has been provided by the the University FAST team via car instrumentation.
 *
 * @category   D3 Dashboard
 * @package    Flinders University
 * @author     Brendon
 * @copyright  2016 Brendon Hutchins
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    2.0
 * @Date       16/10/2016	
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Solar Car Dashboard</title>
	<meta charset= "utf-8">
	<!-- Viewport is the client screen, and here we are setting the width to the device and applying no zoom or scale -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Scripts -->
	<!-- The required scripts for D3 Dashboard -->
	<script src="packages/d3/d3.min.js"> </script>
	<!-- Importing the data import JS Script -->
	<script src="./scripts/importData.js"> </script>
	<!-- Script files required for D3 Dashboard -->
	<script src="http://iop.io/js/vendor/d3.v3.min.js"></script>
    <script src="http://iop.io/js/vendor/polymer/PointerEvents/pointerevents.js"></script>
    <script src="http://iop.io/js/vendor/polymer/PointerGestures/pointergestures.js"></script>
    <script src="http://iop.io/js/iopctrl.js"></script>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="packages/js/bootstrap.min.js"></script>
	
	<!-- Styles -->
	<!-- Bootstrap CSS file -->
	<link href="packages/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Play:700,400' type='text/css'>
	<!-- Import main stylesheet for index.php -->
	<style>
	@import "./css/index.css";
	</style>
</head>
<body>
<h1>Flinders University Solar Car Dashboard</h1>

<!-- Navigation bar -->
<div class="container">
    <div class="navbar navbar-default">
        <div class="navbar-header">
             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>   
             </button>
             <span class="navbar-brand">Flinders Solar</span>       
        </div>    

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                 <li> <a href=""> Link1</a></li>
                 <li> <a href=""> Link2</a></li> 
                 <li> <a href=""> Link3</a></li> 
                 <li> <a href=""> Link4</a></li>       
            </ul>    
        </div>
    </div>

    <!-- Container div used for Bootstrap elements "bootstrap.css" -->

    	<div class="row">
    		<div class="col-sm-6 col-md-3 col-lg-3">
    			<div class="panel panel-default">
    				<div class="panel-body">
    					<p>Vehicle Velocity (m/s)</p>
    				</div>
    			</div>
    		</div>

     		<div class="col-sm-6 col-md-3 col-lg-3">
    			<div class="panel panel-default">
    				<div class="panel-body">
    					<p>Vehicle Revs (rpm)</p>
    				</div>
    			</div>
    		</div>

    		<div class="col-sm-6 col-md-3 col-lg-3">
    			<div class="panel panel-default">
    				<div class="panel-body">
    					<p>Vehicle Motor Temp (C)</p>
    				</div>
    			</div>
    		</div>

    		<div class="col-sm-6 col-md-3 col-lg-3">
    			<div class="panel panel-default">
    				<div class="panel-body">
    					<p>Total Car Temp (C)</p>
    				</div>
    			</div>
    		</div>
    	</div>

        <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="panel panel-primary">
            <div class="panel-heading">
            <h4>Solar Speed</h4>
                <div>
                <span id="speedometer"></span>
                </div>
            <script src= "./scripts/gauge.js"> </script>
          </div>
        </div>
</div>
</body>
</html>

