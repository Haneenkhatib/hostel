<?php
session_start();
include('includes/config.php');
include('includes/checklogin.php');
check_login();

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="theme-color" content="#3e454c">
	
	<title>DashBoard</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-social.css">
	<link rel="stylesheet" href="css/bootstrap-select.css">
	<link rel="stylesheet" href="css/fileinput.min.css">
	<link rel="stylesheet" href="css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="css/style.css">


</head>

<body>
<?php include("includes/header.php");?>


	<div class="ts-main-content">
		<?php include("includes/sidebar.php");?>
		<div class="content-wrapper">
			<div class="container-fluid">

				<div class="row">
					<div class="col-md-12 ">


					<span id="plustext" alt="Increase text size" src="images/makeTextBigger.jpg" onclick="resizeText(1)" ><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                    <span id="minustext" alt="Decrease text size" src="images/makeTextSmaller.jpg" onclick="resizeText(-1)"><i class="fa fa-search-minus" aria-hidden="true"></i></span>


				
						<h2 class="page-title">Dashboard   <i id ="myBtn" class="fa fa-paint-brush" aria-hidden="true"></i></h2>

			

						<div class="row">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-primary text-light">
												<div class="stat-panel text-center">



													<div class="stat-panel-number h1 ">My Profile</div>
													
												</div>
											</div>
											<a href="my-profile.php" class="block-anchor panel-footer">Full Detail <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
									<div class="col-md-3">
										<div class="panel panel-default">
											<div class="panel-body bk-success text-light">
												<div class="stat-panel text-center">

												<div class="stat-panel-number h1 ">My Room</div>
													
												</div>
											</div>
											<a href="room-details.php" class="block-anchor panel-footer text-center">See All &nbsp; <i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
						
								
								
							</div>
							
						<span id="plustext" alt="Increase text size" src="images/makeTextBigger.jpg" onclick="resizeText(1)" ><i class="fa fa-search-plus" aria-hidden="true"></i></span>
                     
					   <span id="minustext" alt="Decrease text size" src="images/makeTextSmaller.jpg" onclick="resizeText(-1)"><i class="fa fa-search-minus" aria-hidden="true"></i></span>

			
						</div>

							

						<div class="btn-group " style="
    margin-left: 20px;
    margin-top: 10px;
">
							<button type="button" class="btn btn-info  ger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							My services 
							</button>
							<div class="dropdown-menu">
							<div>	<a class="dropdown-item" href="https://hostelsite.azurewebsites.net/hostel/AzureMapDemo.html" target="_blank">Map Services   </a> </div>
								<a class="dropdown-item" href="https://calendar.google.com/calendar/embed?" target="_blank">Calender Services</a>
								
						</div>
						</div>
				</div>

			</div>
		</div>

	</div>


	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>
	
	<script>
		
	window.onload = function(){
    
		// Line chart from swirlData for dashReport
		var ctx = document.getElementById("dashReport").getContext("2d");
		window.myLine = new Chart(ctx).Line(swirlData, {
			responsive: true,
			scaleShowVerticalLines: false,
			scaleBeginAtZero : true,
			multiTooltipTemplate: "<%if (label){%><%=label%>: <%}%><%= value %>",
		}); 
		
		// Pie Chart from doughutData
		var doctx = document.getElementById("chart-area3").getContext("2d");
		window.myDoughnut = new Chart(doctx).Pie(doughnutData, {responsive : true});

		// Dougnut Chart from doughnutData
		var doctx = document.getElementById("chart-area4").getContext("2d");
		window.myDoughnut = new Chart(doctx).Doughnut(doughnutData, {responsive : true});

	}

	$("#myBtn").click(function() {
  //write funtion that generates random color and sticks it to the background per click;
  var r = Math.floor(Math.random() * 50);
  var g = Math.floor(Math.random() * 50);
  var b = Math.floor(Math.random() * 50);
  console.log(r, g, b);
  var color = "rgb" + "(" + r + "," + g + "," + b + ")";
  console.log(color);
  $('body').css('background-color', color);
});

function showDiv() {
   document.getElementById('welcomeDiv').style.display = "block";
}
	</script>

<script>
function resizeText(multiplier) {
  if (document.body.style.fontSize == "") {
    document.body.style.fontSize = "1.0em";
  }
  document.body.style.fontSize = parseFloat(document.body.style.fontSize) + (multiplier * 0.2) + "em";
}</script>

</body>

</html>


