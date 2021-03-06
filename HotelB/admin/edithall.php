<?php
session_start();
include './auth.php';

?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Booking System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/dashboard.css" rel="stylesheet">


	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

 
  <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/animation.css">

 </head>
	<script>

	</script>
  <body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid" style="background-color: #4aa3df;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color: #ffffff;">Admin Booking Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signout.php" style="color: #ffffff;">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
	
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-5 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="dashboard.php"><i class="icon-gauge"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            
			<li><a href="rmoo.php"><i class="icon-key"></i> halls</a></li>
            <li><a href="reception.php"><i class="icon-key"></i> Reception Hall</a></li>
            <li><a href="newadmin.php"><i class="icon-key"></i>Add New Admin</a></li>
            <li><a href="feedback.php"><i class="icon-key"></i> Customers Feedbacks</a></li>

          </ul>

        </div>
    

    	<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="formnew" >
		<?php 
		$hall_id = $_GET['hall_id'];
		include './auth.php';
		$result = mysqli_query($con,"SELECT * from hall where hall_id ='".$hall_id."' ");
		if(mysqli_num_rows($result) > 0)
		while($rows = mysqli_fetch_array($result)){
		print "					<form role=\"form\" id=\"formnew\" action=\"updatehall.php\" method=\"post\" enctype=\"multipart/form-data\">\n";
		print "						<input type=\"hidden\" class=\"form-control\" name=\"hall_id\" id=\"hall_id\" placeholder=\"hall ID\" value=\"".$hall_id."\" required>\n";
		print "					  <div class=\"form-group\">\n";
		print "						<label for=\"hall_name\">hall Name</label>\n";
		print "						<input type=\"text\" class=\"form-control\" name=\"hall_name\" id=\"hall_name\" placeholder=\"hall Name\" value=\"".$rows['hall_name']."\" required>\n";
		print "					  </div>\n";
		print "					   <div class=\"form-group\">\n";
		print "						<label for=\"occupancy\">Occupancy</label>\n";
		print "						<input type=\"text\" class=\"form-control\" name=\"occupancy\" id=\"occupancy\" placeholder=\"max number of occupant\" value=\"".$rows['occupancy']."\">\n";
		print "					  </div>\n";
		print "					  <div class=\"form-group\">\n";
		print "						<label for=\"size\">Size</label>\n";
		print "						<input type=\"text\" class=\"form-control\"  name=\"size\" id=\"size\" placeholder=\"Please write sqft or metre square: example: 250 sqft\" value=\"".$rows['size']."\">\n";
		print "					  </div>\n";
		print "					  <div class=\"form-group\">\n";
		print "						<label for=\"cond\">Condition</label>\n";
		print "						<input type=\"text\" class=\"form-control\" name=\"cond\" id=\"cond\" placeholder=\"example: city cond\" value=\"".$rows['cond']."\">\n";
		print "					  </div>\n";
		print "					  <div class=\"form-group\">\n";
		print "						<label for=\"rate\">Rate</label>\n";
		print "						<input type=\"text\" class=\"form-control\"  name=\"rate\" id=\"rate\" placeholder=\"Write without LKR\" value=\"".$rows['rate']."\" required>\n";
		print "					  </div>\n";
		print "					  <div class=\"form-group\">\n";
		print "						<label for=\"desc\">Descriptions</label>\n";
		print "						<input type=\"text\" class=\"form-control\" name=\"desc\" id=\"desc\" value=\"".$rows['description']."\" placeholder=\"\">\n";
		print "					  </div>\n";
		print "						<img src=\"../".$rows['imgpath']."\" style=\"height:200px; width:200px;\"/>";
		print "					  <div class=\"form-group\">\n";
		print "						<label for=\"img\">Upload hall Image</label>\n";
		print "						<input type=\"file\" id=\"img\" name=\"img\" >\n";
		print "						<!-- p class=\"help-block\">Example block-level help text here.</p-->\n";
		print "					  </div>\n";
		print "					  <button type=\"submit\" class=\"btn btn-default\">Update hall Detail</button>\n";
		print "					</form>";		
		
		
		}


		?>

		</div>
		
      </div>
    </div>
	


    <script src="js/ie10-viewport-bug-workaround.js">

  </script>
     ></body></html>