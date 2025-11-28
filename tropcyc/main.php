<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Home</title>
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="../main.css" rel="stylesheet" type="text/css" media="all" />
<link href="../fonts.css" rel="stylesheet" type="text/css" media="all" />
<script src="https://d3js.org/d3.v4.min.js"></script>
</head>

<?php
$randomtoken = base64_encode( openssl_random_pseudo_bytes(32));
$_SESSION['csrfToken']=$randomtoken;
?>

<li>
Model forecasts track data is from the atcfunix files. If a model atfcfunix file cannot be found, the data is search for in the a-deck file.B-deck files from the <a href="https://www.nhc.noaa.gov/">National Hurricane Center</a> and <a href="https://www.metoc.navy.mil/jtwc/jtwc.html">Joint Typhoon Warning Center</a> are used as truth. For more information on a-deck and b-deck files please visit <a href="www.nrlmry.navy.mil/atcf_web/docs/database/new/abdeck.txt">here</a>.
</li>
<br>
<li>
The scores include only when the storm was at a development level listed in the b-deck file of tropical depression (TD), tropical storm (TS), typhoon (TY), super typhoon (ST), tropical cyclone (TC), and hurricane (HU). Event equalization is used to create a homogeneous sample. This means that only points common among all models being verified with be considered. Specifically in the MET .tcst the columns BMODEL, BASIN, CYCLONE, INIT, LEAD, and VALID are compared. 
</li>
<br>
<li>
The upper and lower parametric confidence intervals are calculcated through MET's tc_stat summary job. They are calculated for 95% confidence interval (alpha = 0.05). For more information on confidence interval calculations in MET, please see Appendix D of the <a href="https://dtcenter.org/met/users/docs/users_guide/MET_Users_Guide_v8.1.pdf">MET User's Guide</a>.
</li>
</body>
</html>
