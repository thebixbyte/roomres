<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Manage Administrators</title>

<style>
 button:hover {
	 color:#FFF !important;
	 border-radius:12px;
	 transition-duration:1s; 
	}
 button{
background: rgb(206,220,231) !important; /* Old browsers */
background: -moz-radial-gradient(center, ellipse cover,  rgba(206,220,231,1) 0%, rgba(89,106,114,1) 100%) !important; /* FF3.6+ */
background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,rgba(206,220,231,1)), color-stop(100%,rgba(89,106,114,1))) !important; /* Chrome,Safari4+ */
background: -webkit-radial-gradient(center, ellipse cover,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%) !important; /* Chrome10+,Safari5.1+ */
background: -o-radial-gradient(center, ellipse cover,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%) !important; /* Opera 12+ */
background: -ms-radial-gradient(center, ellipse cover,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%) !important; /* IE10+ */
background: radial-gradient(ellipse at center,  rgba(206,220,231,1) 0%,rgba(89,106,114,1) 100%) !important; /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cedce7', endColorstr='#596a72',GradientType=1 ) !important; /* IE6-9 fallback on horizontal gradient */

background: rgb(76,76,76) !important; /* Old browsers */
background: -moz-linear-gradient(top,  rgba(76,76,76,1) 0%, rgba(89,89,89,1) 12%, rgba(102,102,102,1) 25%, rgba(71,71,71,1) 39%, rgba(44,44,44,1) 50%, rgba(0,0,0,1) 51%, rgba(17,17,17,1) 60%, rgba(43,43,43,1) 76%, rgba(28,28,28,1) 91%, rgba(19,19,19,1) 100%) !important; /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(76,76,76,1)), color-stop(12%,rgba(89,89,89,1)), color-stop(25%,rgba(102,102,102,1)), color-stop(39%,rgba(71,71,71,1)), color-stop(50%,rgba(44,44,44,1)), color-stop(51%,rgba(0,0,0,1)), color-stop(60%,rgba(17,17,17,1)), color-stop(76%,rgba(43,43,43,1)), color-stop(91%,rgba(28,28,28,1)), color-stop(100%,rgba(19,19,19,1))) !important; /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%) !important; /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%) !important; /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%) !important; /* IE10+ */
background: linear-gradient(to bottom,  rgba(76,76,76,1) 0%,rgba(89,89,89,1) 12%,rgba(102,102,102,1) 25%,rgba(71,71,71,1) 39%,rgba(44,44,44,1) 50%,rgba(0,0,0,1) 51%,rgba(17,17,17,1) 60%,rgba(43,43,43,1) 76%,rgba(28,28,28,1) 91%,rgba(19,19,19,1) 100%) !important; /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4c4c4c', endColorstr='#131313',GradientType=0 ) !important; /* IE6-9 */
	 
	 
	  color:#FFF !important;
 }
 a {
	 color:#FFF !important;
	}
 a:hover{
	 color:#FFF !important;
 }

 #Tabs1 {
	 background-image:url(printable.fw.png) !important; 
}

ul{

}

body{
	background: none !important;
}

li{

background: -moz-linear-gradient(top,  rgba(0,0,0,0.65) 0%, rgba(0,0,0,0) 100%) !important; /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.65)), color-stop(100%,rgba(0,0,0,0))) !important; /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%) !important; /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%) !important; /* Opera 11.10+ */
background: -ms-linear-gradient(top,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%) !important; /* IE10+ */
background: linear-gradient(to bottom,  rgba(0,0,0,0.65) 0%,rgba(0,0,0,0) 100%) !important; /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#a6000000', endColorstr='#00000000',GradientType=0 ) !important; /* IE6-9 */


	}
 
	 
	
</style>
<link href="jQueryAssets/jquery.ui.core.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.theme.min.css" rel="stylesheet" type="text/css">
<link href="jQueryAssets/jquery.ui.tabs.min.css" rel="stylesheet" type="text/css">
<script src="jQueryAssets/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="jQueryAssets/jquery-ui-1.9.2.tabs.custom.min.js" type="text/javascript"></script>
<link rel="icon"  href="favicon.ico"  /></head>

<body >

<div style="width:70px; border:groove; height:20px; margin-top:0px; border-radius:4px; cursor:pointer; background:#CCC; margin-top:0px;" align="center" onClick="javascript:window.location='cpanel.php';" >

	<code><b> Home </b></code>

</div>
<div id="Tabs1">
  <ul>
    <li><a href="#tabs-1">DEACTIVATE USER</a></li>
    
  </ul>
  
  <div id="tabs-1">
	<br /><br />
<?php
	include "admin_tools.php";
?>
<form action="proc_adds.php" method="post">
<table width="30%" align="center">
<tr >
	<td>    
		<input type="text" placeholder="User ID Number"  id="txt" name="username" />
    </td>
    <td>
    	<input type="submit" id="button" value="De-activate" />
        <input type="hidden" name="act" value="detonate" />
    </td>
 </tr>
 </table> 
   
  </div>
  
  
</div>


<script type="text/javascript">
$(function() {
	$( "#Tabs1" ).tabs(); 
});
</script>
</body>
</html>