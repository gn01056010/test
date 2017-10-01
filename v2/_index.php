<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">			
		<!-- Css Start   -->
		<link rel="stylesheet" type="text/css" href="./library/bootstrap/3.3.2/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="./library/owlcarousel/css/owl.theme.default.css" />
		<link rel="stylesheet" type="text/css" href="./library/bootstrap_submenu_1.2.11/css/bootstrap-submenu.css" />
		<!--<link rel="stylesheet" type="text/css" href="./css/submenu.css" />-->
		<style type="text/css">
		.Main_region{
			/*background-color: red;*/
		}
		
		[class*="col-"]{
		/*
			padding-top:15px;
			padding-bottom: 15px;
		*/
			background-color: #eee;
			background-color: rgba(86,61,124,.15);
			border: 1px solid #ddd;
			border: 1px solid rgba(86,61,124,.2);
		}	
		</style>
		<!-- Css End     -->
				
		<!-- library js Start -->
		<script type="text/javascript" src="./library/jquery/2.1.3/js/jquery-2.1.3.js"></script>	
		
		<script type="text/javascript" src="./library/bootstrap/3.3.2/js/bootstrap.js"></script>
		
		<script type="text/javascript" src="./library/owlcarousel/js/owl.carousel.js"></script>
		<script type="text/javascript" src="./library/owlcarousel/js/owl.autoplay.js"></script>
		<script type="text/javascript" src="./library/owlcarousel/js/owl.navigation.js"></script>	
		
		<script type="text/javascript" src="./library/bootstrap_submenu_1.2.11/js/bootstrap-submenu.js"></script>	
		<!-- library End   -->	
		
		<!-- js Start    -->
		<!--<script type="text/javascript" src="./js/submenu.js"></script>-->
		<script>
			(function($){
				$(document).ready(function(){
					$('.dropdown-submenu > a').submenupicker();				
				});
			})(jQuery);
		</script>		
		<!-- js End      -->		
	</head>
	<body>
		<div class="container Main_region">	
			<div class="row Header_region_01">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					Header_region_01
				</div>			
			</div>
			
			<div class="row Header_region_02">
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
					Header_region_02 Logo
				</div>	
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
					Header_region_02 Site Search
				</div>					
			</div>
			
			<div class="row Menu_region">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<nav class="navbar navbar-default navbar-static-top marginBottom-0" role="navigation">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						  <a class="navbar-brand" href="#" target="_blank"></a>
						</div>
						
						<div class="collapse navbar-collapse" id="navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Programmes<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Subject Areas</a></li>
										<li><a href="#">Programme Search</a></li>
										<li><a href="#">New Programmes</a></li>
										<li><a href="#">Deadline Soon</a></li>
										<li><a href="#">Short Courses</a></li>
										<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Award Bearing Courses</a>
											<ul class="dropdown-menu">
												<li><a href="#">Certificate</a></li>
												<li><a href="#">Module Certificate</a></li>
												<li><a href="#">Advanced Certificate</a></li>
												<li><a href="#">Professional Certificate</a></li>
												<li><a href="#">Professional Diploma</a></li>
												<li><a href="#">Bachelor Degree</a></li>
											</ul>
										</li>							
										<li><a href="#">CEF Programmes</a></li>
										<li><a href="#">CPD Programmes</a></li>
										<li><a href="#">Part-time Higher Diploma Programmes</a></li>							
										<li><a href="#">Programme Highlight</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Admission<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Application Procedure and Payment Methods</a></li>
										<li><a href="#">Financial Assistance</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Member Institutions<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Overview</a></li>
										<li><a href="#">Institute of Professional Education And Knowledge (PEAK) Link opens</a></li>
										<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hong Kong Institute of Vocational Education (IVE) Link</a>
											<ul class="dropdown-menu">
												<li><a href="#">Applied Science</a></li>
												<li><a href="#">Business Administration</a></li>
												<li><a href="#">Child Education and Community Services</a></li>
												<li><a href="#">Design</a></li>
												<li><a href="#">Engineering</a></li>
												<li><a href="#">Hotel, Service and Tourism Studies</a></li>
												<li><a href="#">Information Technology</a></li>
												<li><a href="#">Languages</a></li>
												<li><a href="#">Student Development</a></li>								
											</ul>
										</li>	
										<li><a href="#">Hong Kong Design Institute (HKDI)</a></li>
										<li><a href="#">Pro-Act by VTC</a></li>							
										<li><a href="#">Hospitality Industry Training and Development Centre (HITDC)</a></li>
										<li><a href="#">Chinese Cuisine Training Institute (CCTI)</a></li>
										<li><a href="#">Maritime Services Training Institute (MSTI)</a></li>							
										<li><a href="#">Integrated Vocational Development Centre (IVDC)</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Centres & Locations<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Overview</a></li>
										<li><a href="#">Institute of Professional Education And Knowledge (PEAK) Link opens</a></li>
										<li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Hong Kong Institute of Vocational Education (IVE) Link</a>
											<ul class="dropdown-menu">
												<li><a href="#">Chai Wan</a></li>
												<li><a href="#">Haking Wong</a></li>
												<li><a href="#">Kwai Chung</a></li>
												<li><a href="#">Kwun Tong</a></li>
												<li><a href="#">Lee Wai Lee</a></li>
												<li><a href="#">Morrison Hill</a></li>
												<li><a href="#">Sha Tin</a></li>
												<li><a href="#">Tsing Yi</a></li>
												<li><a href="#">Tuen Mun</a></li>								
											</ul>
										</li>	
										<li><a href="#">Hong Kong Design Institute (HKDI)</a></li>
										<li><a href="#">Pro-Act by VTC</a></li>							
										<li><a href="#">Hospitality Industry Training and Development Centre (HITDC)</a></li>
										<li><a href="#">Chinese Cuisine Training Institute (CCTI)</a></li>
										<li><a href="#">Maritime Services Training Institute (MSTI)</a></li>							
										<li><a href="#">Integrated Vocational Development Centre (IVDC)</a></li>
									</ul>
								</li>	
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Corporate Training<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">Overview</a></li>
										<li><a href="#">Further Enquiries</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">News & Events<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">News</a></li>
										<li><a href="#">Information Seminars and Events</a></li>
										<li><a href="#">Media Coverage</a></li>
									</ul>
								</li>
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
									<ul class="dropdown-menu">
										<li><a href="#">VTC Continuing & Professional Education</a></li>
										<li><a href="#">Contact Us</a></li>
									</ul>
								</li>					
							</ul>
						</div><!-- /.navbar-collapse -->
					</nav>	

<nav class="navbar navbar-default">
	<div class="navbar-header">
		<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

		<a class="navbar-brand"></a>
	</div>

	<div class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li class="dropdown">
				<a tabindex="0" data-toggle="dropdown">Programmes<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">		  
					<li><a href="#">Subject Areas</a></li>
					<li><a href="#">Programme Search</a></li>
					<li><a href="#">New Programmes</a></li>
					<li><a href="#">Deadline Soon</a></li>
					<li><a href="#">Short Courses</a></li>			
					<li class="dropdown-submenu">
						<a tabindex="0" data-toggle="dropdown">Award Bearing Courses</a>
						<ul class="dropdown-menu">
							<li><a href="#">Certificate</a></li>
							<li><a href="#">Module Certificate</a></li>
							<li><a href="#">Advanced Certificate</a></li>
							<li><a href="#">Professional Certificate</a></li>
							<li><a href="#">Professional Diploma</a></li>
							<li><a href="#">Bachelor Degree</a></li>
						</ul>
					</li>										
					<li><a href="#">CEF Programmes</a></li>
					<li><a href="#">CPD Programmes</a></li>
					<li><a href="#">Part-time Higher Diploma Programmes</a></li>							
					<li><a href="#">Programme Highlight</a></li>		  
					<li><a tabindex="0">Separated link</a></li>
				</ul>
			</li>
			
			<li class="dropdown">
				<a tabindex="0" data-toggle="dropdown">Programmes<span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">		  
					<li><a href="#">Subject Areas</a></li>
					<li><a href="#">Programme Search</a></li>
					<li><a href="#">New Programmes</a></li>
					<li><a href="#">Deadline Soon</a></li>
					<li><a href="#">Short Courses</a></li>			
					<li class="dropdown-submenu">
						<a tabindex="0" data-toggle="dropdown">Award Bearing Courses</a>
						<ul class="dropdown-menu">
							<li><a href="#">Certificate</a></li>
							<li><a href="#">Module Certificate</a></li>
							<li><a href="#">Advanced Certificate</a></li>
							<li><a href="#">Professional Certificate</a></li>
							<li><a href="#">Professional Diploma</a></li>
							<li><a href="#">Bachelor Degree</a></li>
						</ul>
					</li>										
					<li><a href="#">CEF Programmes</a></li>
					<li><a href="#">CPD Programmes</a></li>
					<li><a href="#">Part-time Higher Diploma Programmes</a></li>							
					<li><a href="#">Programme Highlight</a></li>		  
					<li><a tabindex="0">Separated link</a></li>
				</ul>
			</li>			
		</ul>
	</div>
</nav>
					
				</div>						
			</div>	
			
			<div class="row Banner_region">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					Banner img
					<div class="row">
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							Search
						</div>
					</div>						
				</div>			
			</div>
	</body>
</html>