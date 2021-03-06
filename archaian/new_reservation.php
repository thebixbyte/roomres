<?php 

$id = "new_reservation.php";
@session_start();


	if(@$_SESSION['l031n45'] == ''){
		
		include "redirect.php";
		$go = new redirect("proc_adds.php?act=logout");
		exit;
		
	}
	if(@$_SESSION['154dm1n']){
        
		include "redirect.php";
		$go = new redirect("cpanel.php");
		exit;

	}
    
	
?>

<!DOCTYPE html>
<html lang="en" manifest="cache.appcache">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="University OF Eastern Africa Baraton Room Reservation, UEAB, RoomRes, The Cnnection, Iarasoft">
		<meta name="keywords" content="UEAB Room Reservation, Room Reservation, Students Rooms, UEAB, Baraton">
		<meta name="author" content="The Connection, Iarasoft">
                <link rel="icon" href="favicon.ico">
        
		<title>UEAB | Room Reservation - Room Selection</title>
 
		<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		
		<!-- PLUGINS CSS -->
		<link href="assets/plugins/weather-icon/css/weather-icons.min.css" rel="stylesheet">
		<link href="assets/plugins/prettify/prettify.min.css" rel="stylesheet">
		<link href="assets/plugins/magnific-popup/magnific-popup.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.theme.min.css" rel="stylesheet">
		<link href="assets/plugins/owl-carousel/owl.transitions.min.css" rel="stylesheet">
		<link href="assets/plugins/chosen/chosen.min.css" rel="stylesheet">
		<link href="assets/plugins/icheck/skins/all.css" rel="stylesheet">
		<link href="assets/plugins/datepicker/datepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
		<link href="assets/plugins/validator/bootstrapValidator.min.css" rel="stylesheet">
		<link href="assets/plugins/summernote/summernote.min.css" rel="stylesheet">
		<link href="assets/plugins/markdown/bootstrap-markdown.min.css" rel="stylesheet">
		<link href="assets/plugins/datatable/css/bootstrap.datatable.min.css" rel="stylesheet">
		<link href="assets/plugins/morris-chart/morris.min.css" rel="stylesheet">
		<link href="assets/plugins/c3-chart/c3.min.css" rel="stylesheet">
		<link href="assets/plugins/slider/slider.min.css" rel="stylesheet">
		
		<!-- MAIN CSS (REQUIRED ALL PAGE)-->
		<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<link href="assets/css/style.css" rel="stylesheet">
		<link href="assets/css/style-responsive.css" rel="stylesheet">
                <link href="assets/css/custom.css" rel="stylesheet">
 
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
 
	<body class="tooltips">
		
			
		
		<!--
		===========================================================
		BEGIN PAGE
		===========================================================
		-->
		<div class="wrapper">
			
			<!-- BEGIN TOP NAV -->
			<div class="top-navbar">
				<div class="top-navbar-inner">
					
					<!-- Begin Logo brand -->
					<div class="logo-brand">
						<a href="index.html"><img src="assets/img/sentir-logo-primary.png" alt="UEAB|Room Reservation"></a>
					</div><!-- /.logo-brand -->
					<!-- End Logo brand -->
					
					<div class="top-nav-content no-right-sidebar">
						
						<!-- Begin button sidebar left toggle -->
						<div class="btn-collapse-sidebar-left">
							<i class="fa fa-align-justify "></i>
						</div><!-- /.btn-collapse-sidebar-left -->
						<!-- End button sidebar left toggle -->
						
											
						
						<!-- Begin user session nav -->
						<ul class="nav-user navbar-right full">
							<li class="dropdown">
							  <a href="#notYet" class="dropdown-toggle" data-toggle="dropdown">
								<img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar">
                                                              
                                                                Hi, <strong style="text-transform: uppercase;"><?php  echo @htmlentities($_SESSION['l031n45']); ?></strong>
							  </a>
							  <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                                                              <li ><a href="#notYet" style="text-decoration: line-through" >Change picture</a></li>
                                                              <li ><a href="#notYet" style="text-decoration: line-through">Change email</a></li>
                                                              <li ><a href="#notYet" style="text-decoration: line-through">Change password</a></li>
								<li class="divider"></li>
                                                                
                                                                <li><a href="proc_adds.php?act=logout">Log out</a></li>
							  </ul>
							</li>
						</ul>
						<!-- End user session nav -->
						
						<!-- Begin Collapse menu nav -->
						<div class=" collapse navbar-collapse" id="main-fixed-nav">
							<!-- Begin nav search form -->
							<form class="navbar-form navbar-left" role="search">
								<div class="form-group">
									<input type="text" id="search" class="form-control" placeholder="search for person">
								</div>
							</form>
							<!-- End nav search form -->
                                                        
							
								
                                                                        
                                                </div><!-- /.navbar-collapse -->
						<!-- End Collapse menu nav -->
					</div><!-- /.top-nav-content -->
				</div><!-- /.top-navbar-inner -->
			</div><!-- /.top-navbar -->
			<!-- END TOP NAV -->
			
			
			
			<!-- BEGIN SIDEBAR LEFT -->
			<div class="sidebar-left sidebar-nicescroller">
				<ul class="sidebar-menu ">
					<li><a href="panel.php"><i class="fa fa-dashboard icon-sidebar "></i>Dashboard</a></li>
                                        <li><a href="#"><i class="fa fa-home icon-sidebar active selected background-gray"></i>RESERVE</a></li>
                                        <li><a href="history.php"><i class="fa fa-clock-o icon-sidebar"></i>HISTORY</a></li>
                                        <li><a href="#"><i class="fa fa-comment icon-sidebar"></i>REQUEST</a></li>
					<li class="active selected">
						<a href="#fakelink">
							<i class="fa fa-desktop icon-sidebar"></i>
							<i class="fa fa-angle-right chevron-icon-sidebar"></i>
							SETTINGS
							
							</a>
						<ul class="submenu visible">
							<li><a href="#link1">Picture</a></li>
							<li><a href="#link2">Email</a></li>
							<li><a href="#link3">Password</a></li>
						</ul>
					</li>
					
				</ul>
			</div><!-- /.sidebar-left -->
			<!-- END SIDEBAR LEFT -->
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
			
				<div class="container-fluid">
				
				<!-- Begin page heading -->
                                <h1 class="page-heading ">ROOM SELECTION <small>| <?php echo @htmlentities(strtoupper($_SESSION['l031n45'])); ?> </small></h1>
				<!-- End page heading -->
<?php
/* 
	Author: bixbyte
	For: The University Of Eastern Africa Baraton
*/
	//Get the User's vital information and store them in session variables
        
	$connect = true;
	include("main.php");
	
	$connection->query("SELECT * FROM reservants WHERE s_idnum='$_SESSION[l031n45]' ",true);
	
	$arraydets = $_SESSION['query'];
	
	while($res = mysqli_fetch_array($arraydets)){
		$_SESSION['u56_id'] 		= $res['id'];
		$_SESSION['u56_name'] 		= $res['name'];
		$_SESSION['u56_s_idnum'] 	= $res['s_idnum'];
		$_SESSION['u56_email'] 		= $res['email'];
		$_SESSION['u56_rnum'] 		= $res['rnum'];
		$_SESSION['u56_res']		= $res['res'];
		$_SESSION['u56_tel'] 		= $res['tel'];
		$_SESSION['u56_passwd'] 	= $res['passwd'];
		$_SESSION['u56_gender'] 	= $res['gender'];
	} 
	
	
	//Display  all residences.
	
	$connection->query("SELECT * FROM residence WHERE gender='$_SESSION[u56_gender]' OR gender='a' ORDER BY id DESC ",true);
	$residencesss = $_SESSION['query'];
?>				
					<!-- BEGIN ALERT -->
					<div class="alert alert-info alert-bold-border fade in alert-dismissable" >
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                          <p><a class=" glyphicon-info-sign "></a> <strong class="alert-info">Room selection instructions</strong></p>
                                           <ol class="">
                                               <li>Select A residence </li>
                                               <li>Select A room </li>
                                            </ol>
                                          
					</div>
					<!-- END  ALERT -->
				
					
					<!-- BEGIN SERVER STATUS WIDGET -->
							<div class="panel darker panel-square panel-no-border">
							  <div class="panel-heading lg text-center">
								
								<h3 class="panel-title"><strong>Pick A Residence</strong></h3>
							  </div>
								<div id="panel-chart-widget-1" class="collapse in">
									
									<div class="the-box no-border">
										<div class="row">
											<div class="col-sm-4">
												<div class="row">

                                                    <?php

	                                                    $connection->query("SELECT * FROM 4v41l WHERE id=0 LIMIT 1",true);
			                                                    @$qry = @$_SESSION['query'];
			
			                                                    while($stat = mysqli_fetch_array($qry)){
				                                                    @$status = $stat['stat'];
			                                                    }
	                                                    $connection->num_rows("SELECT * FROM activity WHERE s_id='$_SESSION[l031n45]'",true);
	                                                    $times = $_SESSION['num_rows'];
		
		                                                    if(@$_SESSION['u56_res'] == 0 || @$_SESSION['u56_rnum'] == 0){
			
			                                                    if(@$status == 1 || @$times < 1){
				
                                                                    
                                                                    while(@$resresults = @mysqli_fetch_array($residencesss)){
                                                                        
                                                                        //Get the residence's maximum capacity
                                                                        $connection->query("SELECT SUM(max_capacity),SUM(curr_capacity) FROM rooms WHERE residence='$resresults[id]'",true);
                                                                        $result = $_SESSION['query'];
                                                                        $res_ = mysqli_fetch_assoc($result);
                                                                        
                                                                        ($res_['SUM(curr_capacity)'])  < ($res_['SUM(max_capacity)']) ? $i = 1 :$i = 2; ;
                                                                        ($i == 1)? $room_data = @htmlentities($resresults['id']) : $room_data = 0;
                                                                        
                                                                        echo '<a onclick="javascript:show_rooms( ' .$room_data.')" style="cursor:pointer;">
													    <div class="col-xs-6 text-center">
														    <h4 class="small-heading">'.@htmlentities($resresults['name']).'</h4>
														    <span class="chart chart-widget-pie widget-easy-pie-'.$i.'" data-percent="'.
                                                                        ( ( ($res_['SUM(curr_capacity)'] == '') ? 1 : $res_['SUM(curr_capacity)'] ) / ( ($res_['SUM(max_capacity)'] == '') ? 1 : $res_['SUM(max_capacity)'] ) * 100 ) 
                                                                        
                                                                        .'">
															    <span class="percent"></span>
														    </span>
													    </div><!-- /.col-xs-6 -->
                                                       
                                                  </a>'; 
                                                                        
                                                                        
                                                                        
                                                                    }
			
			                                                    }else{
                                                                    
                                                                    echo ('<div class="alert alert-danger alert-bold-border fade in alert-dismissable" style="text-align:justified;">
                                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color:red; ">&times;</button>
			                                                                  <strong>Sorry!</strong><br>The Trimester is Closed For reservation!<br> <a href="#" class="alert-link">Consult the Resident Dean for assistance</a>.
			                                                                </div>');
			                                                    }
		
		                                                    }else{
                                                                
                                                                echo ('<div class="alert alert-information alert-bold-border fade in alert-dismissable" style="text-align:justified;">
			                                                           <button type="button" class="close" data-dismiss="alert" aria-hidden="true" style="color:red;">&times;</button>
                                                        <strong>OOPS!</strong><br><h4><code style="color:navy; text-transform:uppercase;"> You have already reserved a room! </code></h4>
                                                        <br> <a href="#" class="alert-link">Consult the residence administrator for assistance.</a>.
			                                                                </div>');
                                                    
		                                                    }
		
	
                                                        ?>


                                                   
												</div><!-- /.row -->
												
											</div><!-- /.col-sm-4 -->


											<div class="col-sm-8 " id="rooms">

                                                <!-- BEGIN ALERT -->
					                            <div class="alert alert-success bg-success alert-bold-border text-center fade in alert-dismissable" id="loader">
					                              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                                    <p><strong>
                                                    <?php
                                                    
                                                    if(@$_SESSION['u56_res'] == 0 || @$_SESSION['u56_rnum'] == 0){
                                                        
			                                            if(@$status == 1 || @$times < 1){
                                                            echo "<code> AWAITING RESIDENCE SELECTION</code>";
                                                        }else {
                                                            echo "NOTHING TO SEE HERE";
                                                        }
                                                        
                                                    }
                                                    
                                                    ?>
                                                    </strong></p>
                                                    <div class="spinner"> 
														<div class="rect1"></div>
														<div class="rect2"></div>
														<div class="rect3"></div>
														<div class="rect4"></div>
														<div class="rect5"></div>
													</div>
                                                    
                                                    <p><strong>Room Selection Guide</strong></p>
                                                    <p class="center-block">
                                                        <button class="btn-lg btn-danger active btn-perspective">&nbsp;&nbsp;&nbsp;&nbsp; Full &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button >
                                                        
                                                        <button class="btn-lg btn-info active btn-perspective">Occupied</button>
                                                        
                                                        <button class="btn-lg btn-success active btn-perspective">&nbsp;&nbsp;&nbsp;Empty&nbsp;&nbsp;</button>

                                                    </p>
					                            </div>
					                            <!-- END  ALERT -->

												
                                                
											</div><!-- /.col-sm-8 -->



										</div><!-- /.row -->
									</div><!-- /.the-box .no-border -->
								</div><!-- /#panel-chart-widget-1 -->
							</div><!-- /.the-box .no-border -->
							<!-- END SERVER STATUS WIDGET -->

										
					
				
				</div><!-- /.container-fluid -->
				
				
				
				<!-- BEGIN FOOTER -->
				<footer id="footer">
					
				</footer>
				<!-- END FOOTER -->
				
				
			</div><!-- /.page-content -->
		</div><!-- /.wrapper -->
		<!-- END PAGE CONTENT -->
		
		
	
		
		
		
		<!--
		===========================================================
		END PAGE
		===========================================================
		-->
		
		<!--
		===========================================================
		Placed at the end of the document so the pages load faster
		===========================================================
		-->
		<!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/plugins/retina/retina.min.js"></script>
		<script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
		<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
		<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
                <script>

                    function show_rooms(residence) {

                    	$("#rooms").html('<div class="spinner"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div>\
  <div class="rect4"></div><div class="rect5"></div></div>');
                    	$("#loader").fadeOut('fast');

                       // $(function () {

	                        $.post("_load_rooms.php", { resid: residence },

	                           function (data, status) {

	                               if(data != undefined || data != ' ' ){
	                              	 $("#rooms").html(data);

	                              	 $
	                              	}else{
	                              		alert(data)
	                              		//$("#rooms").html('<div class="alert alert-danger alert-bold-border fade in alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Error!</strong><br> NOTHING TO DISPLAY!!!<br> <a href="#" class="alert-link"></a>.</div>');
	                              	}

	                           });

                       // });

                    };


                    function book_room(room, resi){

                    	$("#rooms").html('<div class="spinner"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div>\
  <div class="rect4"></div><div class="rect5"></div></div>');
                    	if(room != 0){

                    		if(resi != 0 ){

                    				/*
										
										If the reidence and room are free for reservation.

                    				*/


                    				/*
                    					Ask if the user is certain that they want that room.
                    				*/


                    				$("#rooms").html('<div class="alert alert-info alert-bold-border fade in alert-dismissable">\
									  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
									  <br>\
									  <strong>OK! </strong><br><br> You have Selected <code> Room '+ room +'</code>  are you sure that you want to continue? <br><br> <a href="javascript:do_book('+ room +' , '+ resi +')" class="alert-link">YES</a> &nbsp; &nbsp; &nbsp; <a href="javascript:no_book()" class="alert-link">NO</a>.\
									</div>');

                    				            			


                    		}else{

                    			$("#rooms").html('<div class="alert alert-danger alert-bold-border fade in alert-dismissable">\
					  			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
					              <br><br>\
					  			  <strong>Error!</strong><br> THAT RESIDENCE SEEMS TO BE FULLY BOOKED!<br> <br><br><a href="#" class="alert-link">Please try another one!</a>.\
					              <br><br><br>\
					  			</div>');

                    		}

                    	}else{

                    		$("#rooms").html('<div class="alert alert-danger alert-bold-border fade in alert-dismissable">\
				  			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
				              <br><br>\
				  			  <strong>Error!</strong><br> THAT ROOM SEEMS TO BE FULLY BOOKED!<br> <br><br><a href="#" class="alert-link">Please try another room!</a>.\
				              <br><br><br>\
				  			</div>');
                    	}

                    }

                    
                    function do_book(room, resi){

                    					$("#rooms").html('<div class="spinner"><div class="rect1"></div><div class="rect2"></div><div class="rect3"></div>\
 										 <div class="rect4"></div><div class="rect5"></div></div>');
	                    				$.post("proc_adds.php",{ act: "book_room", r_num: room, residence: resi },
	                    					function(data, stats){

	                    							$("#rooms").html(data);

	                    					}
	                    				);

	                    			}

	                    			function no_book(){

	                    				$("#rooms").html('<div class="alert alert-warning alert-bold-border fade in alert-dismissable">\
							  			  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>\
							              <br><br>\
							  			  <strong>Notice!</strong><br> Room Reservation cancelled!<br> <br><br><a href="#" class="alert-link">Please pick a residence to start again</a>.\
							              <br><br><br>\
							  			</div>');

	                    			}
     
                         
                </script>
 
		<!-- PLUGINS -->
		<script src="assets/plugins/skycons/skycons.js"></script>
		<script src="assets/plugins/prettify/prettify.js"></script>
		<script src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
		<script src="assets/plugins/chosen/chosen.jquery.min.js"></script>
		<script src="assets/plugins/icheck/icheck.min.js"></script>
		<script src="assets/plugins/datepicker/bootstrap-datepicker.js"></script>
		<script src="assets/plugins/timepicker/bootstrap-timepicker.js"></script>
		<script src="assets/plugins/mask/jquery.mask.min.js"></script>
		<script src="assets/plugins/validator/bootstrapValidator.min.js"></script>
		<script src="assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="assets/plugins/datatable/js/bootstrap.datatable.js"></script>
		<script src="assets/plugins/summernote/summernote.min.js"></script>
		<script src="assets/plugins/markdown/markdown.js"></script>
		<script src="assets/plugins/markdown/to-markdown.js"></script>
		<script src="assets/plugins/markdown/bootstrap-markdown.js"></script>
		<script src="assets/plugins/slider/bootstrap-slider.js"></script>
		
		<!-- EASY PIE CHART JS -->
		<script src="assets/plugins/easypie-chart/easypiechart.min.js"></script>
		<script src="assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>
		
		<!-- KNOB JS -->
		<!--[if IE]>
		<script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
		<![endif]-->
		<script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
		<script src="assets/plugins/jquery-knob/knob.js"></script>

		<!-- FLOT CHART JS -->
		<script src="assets/plugins/flot-chart/jquery.flot.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.tooltip.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
		<script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>

		<!-- MORRIS JS -->
		<script src="assets/plugins/morris-chart/raphael.min.js"></script>
		<script src="assets/plugins/morris-chart/morris.min.js"></script>
		
		<!-- C3 JS -->
		<script src="assets/plugins/c3-chart/d3.v3.min.js" charset="utf-8"></script>
		<script src="assets/plugins/c3-chart/c3.min.js"></script>
		
		<!-- MAIN APPS JS -->
		<script src="assets/js/apps.js"></script>
		
	</body>
</html>