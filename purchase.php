<?php
session_start();
print_r($_SESSION);
$log = $_SESSION['loggedin'];
echo $log;
if(!($_SESSION['loggedin'] == 1)){
	header("Location: index.php");
}
?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Contact - Alpha by HTML5 UP</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/purchase.css" />
</head>

<body class="is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.html"></a><span class="image featured"><img src="images/logo.png" width="40%" /></span>
            <nav id="nav">
                <ul>
                    <li><a href="memberpage.php">Home</a></li>
                    <li>
                        <a href="#" class="icon fa-angle-down">Options</a>
                        <ul>
                            <li><a href="userinfo.php">View Profile</a></li> <!-- obviously needs to have a new link when we have it -->
                            <li><a href="memberabout.php">About Us</a></li>
                            <li><a href="membercontact.php">Contact</a></li>
                        </ul>
                    </li>
                    <li><a href="purchase.php">Purchase</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>



        <!-- Main -->
        <section id="main" class="container large">
            <header>
                <h2>Purchase</h2>
            </header>

            <div class="row">
                <div class="col-6 col-12-narrower changehover">

                    <section class="box special">
                        <span class="image featured"><img src="images/chair.jpg" alt="" /></span>
                        <h3>Standard Chair.</h3>
                        <p>The Standard chair. Nothing more nothing less.</p>
                        <p class="dataplswork" id="hun"></p>
                        <br/>
                        <form action="https://test.bitpay.com/checkout" method="post">
                            <input type="hidden" name="action" value="checkout" />
                            <input type="hidden" name="posData" value="" />
                            <input type="hidden" name="data" value="qzJcvD360bZEdUmbKOCpi1SxADn/Vr/CaKKv/IOhtdQxYtMb8lhvjRAr1qSJIws+iokMXH65Bo0QL1aWs407eu7mHN4iSXh8z23ZQzt+ADomsw/ZaBQSfApWvEqeaGnCOYKpOKDtmV8R0d2SmgqZA+FDYW/JpXcE7iOkERy3/GA0ylDGNLxl4aPZS/s3MbiVHzKEhvPw0eu4ObynHU4Fjg==" />
                            <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit"
                                style="width:210px;" alt="BitPay, the easy way to pay with bitcoins.">
                        </form>
                    </section>

                </div>
                <div class="col-6 col-12-narrower changehover">

                    <section class="box special">
                        <span class="image featured"><img src="images/chair.jpg" alt="" /></span>
                        <h3>Technological package</h3>
                        <p>Includes USB and conventional charging ports, AC/heating capabilities, Massaging
                            capabilities, phone integration, and bluetooth integration<br/></p>
                        <div class = "dataplswork"></div>

                        <form action="https://test.bitpay.com/checkout" method="post">
                            <input type="hidden" name="action" value="checkout" />
                            <input type="hidden" name="posData" value="" />
                            <input type="hidden" name="data" value="qzJcvD360bZEdUmbKOCpi1SxADn/Vr/CaKKv/IOhtdQxYtMb8lhvjRAr1qSJIws+jowdNQL9WNaZkFmd2YiqTAYCxvdRwyid3OM17zOnlIYB1iYca++oIgrqHkIv7W4WmolSSSvj6Vu6Un/mXCQ4ViM55KpSJhYXWZFCu3XDkiygpQ0VIfo9cRyKveYAvDe7efGNEXetHwNY0nBxw9hjyH1j5L0bpUpjhJreUV597EQ=" />
                            <input type="image" src="https://test.bitpay.com/cdn/en_US/bp-btn-pay-currencies.svg" name="submit"
                                style="width:210px;" alt="BitPay, the easy way to pay with bitcoins.">
                        </form>
                    </section>
                </div>
            </div>

        </section>
        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.dropotron.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
                var xmlhttp = new XMLHttpRequest();
                var url = "https://api.coindesk.com/v1/bpi/currentprice.json";
                xmlhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        var json = JSON.parse(this.responseText);
                        parseJson(json);
                    }
                };
                xmlhttp.open("GET", url, true);
                xmlhttp.send();
                function parseJson(json) {
                    var usdValue = json["bpi"]["USD"]["rate"];
                    console.log(typeof usdValue)
                    let places = document.querySelectorAll(".dataplswork");
                    console.log(places);
                    for (place of places) {
                        console.log(usdValue)
                        if(place.id == "hun"){place.innerHTML = "100 USD (" + (100/parseFloat(usdValue.replace(",",""))).toFixed(5) + " BTC)";}
                        else{
                            place.innerHTML = "1000 USD (" + (1000/parseFloat(usdValue.replace(",",""))).toFixed(5) + " BTC)";
                        }
                    }
                }
    
            </script>
</body>

</html>