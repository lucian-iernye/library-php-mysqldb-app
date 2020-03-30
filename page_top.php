<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Library project PHP and MySQL</title>

  <script type="text/javascript">

var imgs1 = new Array("banner/banner1.jpg","banner/banner2.jpg","banner/banner3.jpg","banner/banner4.jpg","banner/banner5.jpg","banner/banner6.jpg","banner/banner7.jpg","banner/banner8.jpg","banner/banner9.jpg","banner/banner10.jpg","banner/banner11.jpg","banner/banner12.jpg","banner/banner13.jpg","banner/banner14.jpg","banner/banner15.jpg");
var lnks1 = new Array("index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php","index.php");
var alt1 = new Array("Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad","Editura UAV Arad");
var currentAd1 = 0;
var imgCt1 = 15;
function cycle1() {
  if (currentAd1 == imgCt1) {
    currentAd1 = 0;
  }
var banner1 = document.getElementById('adBanner1');
var link1 = document.getElementById('adLink1');
  banner1.src=imgs1[currentAd1]
  banner1.alt=alt1[currentAd1]
  document.getElementById('adLink1').href=lnks1[currentAd1]
  currentAd1++;
}
  window.setInterval("cycle1()",4000);
</script>

</head>

<body bgcolor="#C0DFFD">

<div id="top">Lucian Iernye - Library PHP Project
</div><p />



<a href="index.php" id="adLink1" target="_top">
<div align="center"><img style="padding:0px; border:solid #000066 1px" src="banner/banner3.jpg" id="adBanner1" border="0" width="990" height="200" align="middle"></div></a>


<p />

<table align="center" id="navigation" width="990px" border="0">
<tr>
