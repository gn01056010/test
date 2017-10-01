<!DOCTYPE html>
<?php
	$g_path = '';
?>
<html>
	<head>
		<title>VTC 持續專業進修 Continuing &amp; Professional Education</title>
		<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">			
		<!-- library Css Start   -->
		<link rel="stylesheet" type="text/css" href="./library/bootstrap/3.3.2/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="./library/bootstrap_submenu_1.2.11/css/bootstrap-submenu.css" />		
		<!-- library Css End  -->
		
		<!-- Css Start        -->
		<link rel="stylesheet" type="text/css" href="./css/cus-bootstrap.css" />	
		<link rel="stylesheet" type="text/css" href="./css/cus-header_region_01.css" />	
		<link rel="stylesheet" type="text/css" href="./css/cus-site_search.css" />		
		<link rel="stylesheet" type="text/css" href="./css/cus-menu.css" />	
		<link rel="stylesheet" type="text/css" href="./css/cus-tree.css" />	
		<link rel="stylesheet" type="text/css" href="./css/cus-short_search.css" />	
		<link rel="stylesheet" type="text/css" href="./css/cus-search_condition.css" />
		<link rel="stylesheet" type="text/css" href="./css/cus-top_subjectarea.css" />
		<link rel="stylesheet" type="text/css" href="./css/cus-pagination.css" />
		<link rel="stylesheet" type="text/css" href="./css/cus-programme_search_result.css" />
		<link rel="stylesheet" type="text/css" href="./css/cus-icon.css" />
		<link rel="stylesheet" type="text/css" href="./css/cus-footer.css" />
		<link rel="stylesheet" type="text/css" href="./css/cus-index.css" />
		<style type="text/css">	
		[class*="col-"]{
		/*
			background-color: #eee;
			background-color: rgba(86,61,124,.15);
		
			border: 1px solid #ddd;
			border: 1px solid rgba(86,61,124,.2);
		*/
		}

		.pageselected{
			background-color: #ddd !important;
		}	
		</style>		
		<!-- Css End          -->

		<!-- library js Start -->
		<script type="text/javascript" src="./library/jquery/2.1.3/js/jquery-2.1.3.js"></script>		
		<script type="text/javascript" src="./library/bootstrap/3.3.2/js/bootstrap.js"></script>
		<script type="text/javascript" src="./library/bootstrap_submenu_1.2.11/js/bootstrap-submenu.js"></script>	
		<!-- library End   -->	
		
		<!-- js Start      -->
		<script type="text/javascript" src="./js/cus-menu.js"></script>	
		<script type="text/javascript">
			$(document).ready(function() {

			});			
		</script>					
		<!-- js End       -->		
	</head>
	<body>
		<div class="Top_padding"></div>
		<div class="container">	
			<div class="Main_region">
				<div class="row Header_region_01 hidden-xs">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php require_once($g_path .'header_region_01.php'); ?>				
					</div>			
				</div>
				
				<div class="row Header_region_02">
					<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<a href="#" title="Continuing Professional Education, VTC">
							<img src="img/cam_ioce_banner.png" class="img-responsive" alt="Continuing Professional Education">
						</a>
					</div>	
					<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 visible-md-block visible-lg-block">
						<?php require_once($g_path .'site_search.php'); ?>
					</div>					
				</div>
				
				<div class="row Menu_region">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<?php require_once($g_path .'menu.php'); ?>
					</div>						
				</div>	

				<div class="row Body_region">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<?php require_once($g_path .'tree.php'); ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">	
						<?php require_once($g_path . 'short_search.php'); ?>
					</div>
					<div class="Body_region_left col-xs-12 col-sm-12 col-md-8 col-lg-8">
						<div class="row Programme_title_region">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h1 class="NormalTitle">Refine the search result</h1>
								<a href="#" class="Back_programme_btn btn btn-primary btn-sm">
									<span>Quick Search</span>
								</a>
							</div>
						</div>
						<?php require($g_path .'search_condition.php'); ?>			
						<?php require_once($g_path .'top_subjectarea.php'); ?>
						<div class="row Programme_title_region">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h1 class="NormalTitle">Programme Search</h1>
								<a href="#" class="Back_programme_btn btn btn-primary btn-sm">
									<span class="visible-md-block visible-lg-block">&lt; Back to programme Search</span>
									<span class="visible-xs-block visible-sm-block">&lt;</span>
								</a>
							</div>
						</div>
						<?php require($g_path .'pagination.php'); ?>
						<?php require_once($g_path .'programme_search_result.php'); ?>
						<?php require($g_path .'pagination.php'); ?>						
					</div>
					
					<div class="Body_region_right col-xs-12 col-sm-12 col-md-4 col-lg-4">
						<?php require($g_path .'icon.php'); ?>
					</div>				
				</div>
								
				<div class="row Footer_region">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php require_once($g_path .'footer.php'); ?>
					</div>
				</div>			
			</div>
		</div>
		<div class="End_padding"></div>
	</body>
</html>