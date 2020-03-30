let imgs = new Array(
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

let links = new Array(
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

let alts = new Array(
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

let currentAd = 0;
let imgCounter = 15;

const cycle = () => {
  if (currentAd == imgCounter) {
    currentAd = 0;
  }
  let banner = document.getElementById("banner");
  let links = document.getElementById("link");
  banner.src = imgs[currentAd];
  banner.alt = alts[currentAd];
  document.getElementById("link").href = links[currentAd];
  currentAd1++;
};

window.setInterval(cycle(), 4000);
