<?php
       
        $id = "panel.php";
       @session_start();
	
	if(@$_SESSION['l031n45'] == ''){
		
		include "redirect.php";
		$go = new redirect("proc_adds.php?act=logout");
		die();
		
	}
	if(@$_SESSION['u56_a_idnum']  != ''){
        
		include "redirect.php";
		$go = new redirect("cpanel.php");
		die();
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
        
		<title>UEAB | Room Reservation - History</title>
 
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
                    <li><a href="panel.php"><i class="fa fa-dashboard icon-sidebar active selected "></i>Dashboard</a></li>
                    <li><a href="new_reservation.php"><i class="fa fa-home icon-sidebar"></i>RESERVE</a></li>
                    <li><a href="history.php"><i class="fa fa-clock-o icon-sidebar"></i>HISTORY</a></li>
                    <li><a href="#"><i class="fa fa-comment icon-sidebar"></i>REQUEST</a></li>
                    <li class="active selected">
                        <a href="#fakelink">
                            <i class="fa fa-desktop icon-sidebar"></i>
                            <i class="fa fa-angle-right chevron-icon-sidebar"></i>
                            SETTINGS

                        </a>
                        <ul class="submenu visible">
                            <li><a href="#picture" style="text-decoration: line-through"  >Picture</a></li>
                            <li><a href="#email" style="text-decoration: line-through" >Email</a></li>
                            <li><a href="new_password.php"  >Password</a></li>
                        </ul>
                    </li>

                </ul>
            </div><!-- /.sidebar-left -->
            <!-- END SIDEBAR LEFT -->
			
			
			
			
			<!-- BEGIN PAGE CONTENT -->
			<div class="page-content">
			
				<div class="container-fluid">
				
				<!-- Begin page heading -->
                                <h1 class="page-heading ">HISTORY <small>| <?php echo @htmlentities(strtoupper($_SESSION['l031n45'])); ?> </small></h1>
				<!-- End page heading -->
<?php
/* 
	Author: bixbyte
	For: The University Of Eastern Africa Baraton
*/




?>
			<!-- BEGIN ALERT -->
					<div class="alert alert-success alert-bold-border fade in alert-dismissable" >
					  <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                          <p><strong>Last Update: <?php  echo '<a class="danger-color">'. date("M d  [h:i a]").'</a>';  ?></script></strong></p>
                                          
                                          <table width="100%" class="table table-striped ">
                                              <thead>
                                                  <tr>
                                                    <td width="30%" class="text-muted">TRIMESTER</td>
                                                    <td width="30%" class="text-muted">RESIDENCE</td>
                                                    <td width="30%" class="text-muted">ROOM NUMBER</td>
                                                  </tr>
                                              </thead>

<?php

$id = "history.php";
$connect = true;
include "main.php";

//PACKING ALL THE AVAILABLE RESIDENCE NAMES IN AN ASSOCIATIVE ARRAY

$connection->query("SELECT * FROM residence", true);
$qr = $_SESSION['query'];

$residences = array();

while($ress = mysqli_fetch_array($qr)){
	$residences[$ress['id']] = $ress['name'];
	//print_r($residences);
	//echo  "<br /><br />";
}


//PACKING ALL THE REGISTERED TRIMESTERS IN AN ASSOCIATIVE ARRAY

$connection->query("SELECT * FROM trimester", true);
$tr = $_SESSION['query'];

$trimesters = array();

while($trimm = mysqli_fetch_array($tr)){
	$trimesters[$trimm['id']] = $trimm['name'];
	//print_r($trimesters);
	//echo  "<br /><br />";
}

//TRANSLATING AND DISPLAYING DATA IN ARRAYS INTO HUMAN COGNIBLE FORM

$connection->query("SELECT * FROM activity WHERE s_id='$_SESSION[l031n45]' ORDER BY id DESC", false);
$actvty = $_SESSION['query'];
$data = '';

while($miresd = mysqli_fetch_array($actvty)){


	$data .= '<tr>
	          <td> <a class="alert-link" href="#">'.@htmlentities($trimesters[$miresd['trim']]).'</a></td>
              <td> <a class="alert-link" href="#">'.@htmlentities($residences[$miresd['residence']]).'</a> </td>
              <td> <a class="alert-link" href="#">'.@htmlentities($miresd['rnum']).'</a></td>
          	  </tr>';

	//echo '<tr><td align="center"><code>'.@htmlentities($trimesters[$miresd['trim']]).'</code></td> <td align="center"><code>'.@htmlentities($miresd['rnum']).'</code></td><td align="center"><code>'.@htmlentities($residences[$miresd['residence']]).'</code></td></tr>';


}

echo $data;

?>


</table>
				 	</div> 
					<!-- END  ALERT -->

				
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