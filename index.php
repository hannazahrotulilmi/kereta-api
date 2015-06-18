	<center><img
                src="img/lambang.jpg" width="389" style="
                padding-top: 0;
                padding-left: 0;
                width : 700px;
                height : 200px;"
	></center>
	
<?php 
session_start();

if(isset($_SESSION["username"])){
$session_username=$_SESSION["username"];	
}
?>
	
	<tr>
		<td height="47"><b><font face="Goudy Stout">
		<marquee>RESERVASI ONLINE TIKET KERETA API</marquee></font></b></td>
	</tr>
	
	<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
   
   <head>
		
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Sistem Informasi Kereta Api</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
       
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="jquery-ui.css">
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link href="css/full-slider.css" rel="stylesheet">
        <style>
            body {
                padding-top: 0px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
	
    <body>
	
	
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
	
    <nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php?halaman=home">Home</a>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="index.php?halaman=jadwal">Schedule <span class="sr-only">(current)</span></a></li>
			<li><a href="index.php?halaman=contact">Contact <span class="sr-only">(current)</span></a></li>
			<li><a href="index.php?halaman=about">About <span class="sr-only">(current)</span></a></li>
			<?php if(isset($session_username)){?><li><a href="index.php?halaman=reservasi">Reservasi</a></li><?php } ?>
		  </ul>
		<!-- Collect the nav links, forms, and other content for toggling -->
		  <form class="navbar-form navbar-left" role="search">
			<div class="form-group">
			  <input type="text" class="form-control" placeholder="Search">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		  </form>
		  <ul class="nav navbar-nav navbar-right">
			<?php if(!isset($session_username)){?><li><a href="index.php?halaman=daftar">Daftar</a></li><?php } ?>
			<?php if(isset($session_username)){?><li><a href="index.php?halaman=daftar">+<?php echo $session_username;?></a></li><?php } ?>
			<?php if(!isset($session_username)){?><li><a href="index.php?halaman=login">Login</a></li><?php } ?>
			<?php if(isset($session_username)){?><li><a href="index.php?halaman=logout">Logout</a></li><?php } ?>
		  </ul>
		 
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	
	 <p><title>Jam Digital</title>
<script type="text/javascript">
window.setTimeout("renderDate()",1);
days = new Array(
"Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu"
);
months = new Array(
"Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"
);

function renderDate(){
var mydate = new Date(); 
var year = mydate.getYear();
if (year < 2000) {
if (document.all)
year = "19" + year;
else
year += 1900;
}
var day = mydate.getDay();
var month = mydate.getMonth();
var daym = mydate.getDate();
if (daym < 10)
daym = "0" + daym;
var hours = mydate.getHours();
var minutes = mydate.getMinutes();
var seconds = mydate.getSeconds();
var dn = "AM";
if (hours >= 12) {
dn = "PM";
hours = hours - 12;
}
if (hours == 0)
hours = 12;
if (minutes <= 9)
minutes = "0" + minutes;
if (seconds <= 9)
seconds = "0" + seconds;
document.getElementById("jam").innerHTML = "<B>"+days[day]+" "+daym+" "+months[month]+" "+year+"</B> | "+hours+":"+minutes+":"+seconds+" "+dn;
setTimeout("renderDate()",1000)
}
</script>
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
</head>
<body onLoad="renderDate()">
<div id="jam" style="background:#FFFFFF; dashed #000;width:auto;" align="right">
</div>
<span class="style2"></span>
</p>
	
	<!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
       
      </div>
    </div>
	
	 
	<div class="container">
		<?php
		
		if(isset($_GET['halaman'])){
			if($_GET['halaman']=='home'){
				include ("home.php");
			}
			else if($_GET['halaman']=='daftar'){
				include ("daftar.php");
			}
			else if($_GET['halaman']=='pemrosesdaftar'){
				include ("pemroses-daftar.php");
			}
			else if($_GET['halaman']=='login'){
				include ("login.php");
			}
			else if($_GET['halaman']=='proseslogin'){
				include ("proses-login.php");
			}
			else if($_GET['halaman']=='logout'){
				include ("logout.php");
			}
			else if($_GET['halaman']=='reservasi'){
				include ("reservasi.php");
			}
			
			else if($_GET['halaman']=='jadwal'){
				include ("jadwal.php");
			}
			else if($_GET['halaman']=='about'){
				include ("about.php");
			}
			else if($_GET['halaman']=='contact'){
				include ("contact.php");
			}
			else{
				include ("home.php");
			}
		}else if($_POST['hana']){
				include ("pemroses-reservasi.php"); 
			}
		else{
			include("home.php");
		}
		
		
		?>
		<script src="js/jquery.js"></script>
		<script src="jquery-ui.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
		<script src="js/jquery.js"></script>
		<script src="jquery-ui.js"></script>
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/main.js"></script>
		<script>
		  $(function() {
			$( "#datepicker" ).datepicker({
				altField: "#datepickers",
				dateFormat: "DD, d MM, yy",
				altFormat: "yy-mm-d"
			});
			
			
		  });
		 </script>
		
	</body>
	<div class="container">
	
		
	<br><footer>
       <center><p> PT. Kereta Api &copy; 2015 Authorised by Web Team Information System</p>
		<p>Untuk Memenuhi Syarat Penilaian Matakuliah Sistem Basis Data 2</p></center>
      </footer></br>
	  
	</div> <!-- /container -->
</html>