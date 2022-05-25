<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="assets/css/logo2.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aisyah Laundry </title>
    <link rel="stylesheet" href="assets/css/style1.css">
</head>
<body>

    <div class="header">
        <nav id="navbar">
            <img src="assets/css/logo2.png" class="logo">
            <ul id="menu"> 
                <li><a href="home.php">Home</a></li>
                <li><a href="data.php">Data Laundry</a></li>
                <li>Service</li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>
    <p class="text">
    Laundry dalam Bahasa Indonesia disebut dengan “binatu” atau “penatu”
    yang mempunyai makna usaha jasa yang bergerak dalam
    bidang pencucian pakaian atau lebih tepatnya mencuci
    dan menyetrika dengan hitungan kiloan berdasarkan berat material.
    </p>

    <p class="text">
    Laundry dalam Bahasa Indonesia disebut dengan “binatu” atau “penatu”
    yang mempunyai makna usaha jasa yang bergerak dalam
    bidang pencucian pakaian atau lebih tepatnya mencuci
    dan menyetrika dengan hitungan kiloan berdasarkan berat material.
    </p>

    <p class="text">
    Laundry dalam Bahasa Indonesia disebut dengan “binatu” atau “penatu”
    yang mempunyai makna usaha jasa yang bergerak dalam
    bidang pencucian pakaian atau lebih tepatnya mencuci
    dan menyetrika dengan hitungan kiloan berdasarkan berat material.
    </p>

    <script>
        var navbar = document.getElementById("navbar");
        var menu = document.getElementById("menu");

        window.onscroll = function(){
            if(window.pageYOffset >= menu.offsetTop){
                navbar.classList.add("sticky");
            }
            else{
                navbar.classList.remove("sticky");
            }
        }

    </script>
    
</body>
</html>