let imgs1 = new Array(
  "banner/banner1.jpg",
  "banner/banner2.jpg",
  "banner/banner3.jpg",
  "banner/banner4.jpg",
  "banner/banner5.jpg",
  "banner/banner6.jpg",
  "banner/banner7.jpg",
  "banner/banner8.jpg",
  "banner/banner9.jpg",
  "banner/banner10.jpg",
  "banner/banner11.jpg",
  "banner/banner12.jpg",
  "banner/banner13.jpg",
  "banner/banner14.jpg",
  "banner/banner15.jpg"
);

let links1 = new Array(
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php",
  "index.php"
);

let alt1 = new Array(
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad",
  "Editura UAV Arad"
);

var currentAd1 = 0;
var imgCt1 = 15;

const cycle1 = () => {
  if (currentAd1 == imgCt1) {
    currentAd1 = 0;
  }
  let banner1 = document.getElementById("adBanner1");
  let links1 = document.getElementById("adLink1");
  banner1.src = imgs1[currentAd1];
  banner1.alt = alt1[currentAd1];
  document.getElementById("adLink1").href = links1[currentAd1];
  currentAd1++;
};

window.setInterval("cycle1()", 4000);
