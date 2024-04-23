<?php

session_start();

if (!isset($_COOKIE['user_log'])) {
    header("Location: index.php");
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glearn</title>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

    <style>
        body {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            background: #dedede;
        }

        .container {
        	border-radius: 80px;
        	top: 50px;
            max-width: 900px;
            padding: 15px;
            background-color: white;
            margin-left: auto;
            margin-right: auto;
        }

        .slider .slick-slide {
            border: solid 0px #000;
        }

        .slider .slick-slide img {
            width: 100%;
            margin-top: 80px;
        }

        
        .slick-prev, .slick-next {
            width: 50px;
            height: 50px;
            z-index: 1;
        }
        .slick-prev {
            left: 5px;
        }
        .slick-next {
            right: 5px;
        }
        .slick-prev:before, 
        .slick-next:before {
            font-size: 40px;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        
      
        .slick-dots {
            bottom: 15px;
        }
   
        .slick-dots li button:before {
            font-size: 10px;
            color: #fff;
            text-shadow: 0 0 10px rgba(0,0,0,0.5);
            opacity: 1;
        }
        .slick-dots li.slick-active button:before {
            color: #dedede;
        }

       
        .slider:not(:hover) .slick-arrow,
        .slider:not(:hover) .slick-dots {
            opacity: 0;
        }
        
        .slick-arrow,
        .slick-dots {
            transition: opacity 0.5s ease-out;
        }

       .maulid img {
        width: 500px;
        margin-left:150px;
        margin-right:150px;
        margin-top: 50px;

          }

          .sabtu img {
            position: absolute;
        width: 500px;
        margin-left:700px;
        margin-right:150px;
        margin-top: -285px;

          }

          .tkj img {
            width: 300px;
            position: absolute;
            margin-top: 50px;
          }
          .otkp img {
            width: 300px;
            position: absolute;
            margin-left: 350px;
            margin-top: 50px;
          }
          .pm img {
            width: 300px;
            position: absolute;
            margin-left: 730px;
            margin-top: 50px;
          }
          .akp img {
            width: 300px;
            position: absolute;
            margin-left: 1030px;
            margin-top: 50px;
          }

    </style>
</head>
<body>
	<?php include 'navigation.php' ?>
    <div class="container">
        <div class="slider">
            <div>
                <a href="#">
                    <img src="smk.jpg" alt="Image 1">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="0.jpg" alt="Image 2">
                </a>
            </div>
            <div>
                <a href="#">
                    <img src="1.jpg" alt="Image 3">
                </a>            
            </div>
            <div>
                <a href="#">
                    <img src="2.jpg" alt="Image 4">
                </a>
            </div>
        </div>
    </div>
        
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.slider').slick({
                autoplay: true,
                autoplaySpeed: 2500,
                dots: true
            });
        });
    </script>



<br>
<h1 align="center">Kegiatan Terbaru SMK Golden</h1>
<a href="event.php">
    <div class="maulid">
    <img src="event/maulid.jpg" id="maulid" title="maulid">
</div>
<div class="sabtu">
     <img src="event/sabtuceria.jpg" id="sabtu" title="sabtuceria">
 </div>
</a>

<h1 align="center" style="margin-top:20px">Program Keahlian</h1>
<div class="jurusan">
<div class="tkj">
    <a href="tkj.php">
    <img src="jurusan/tkj.png" title="TKJ">
    </a>
</div>

<div class="otkp">
    <a href="otkp.php">
    <img src="jurusan/otkp.png" title="OTKP">
    </a>
</div>

<div class="pm">
    <a href="bdp.php">
    <img src="jurusan/pm.png" title="OTKP">
    </a>
</div>

<div class="akp">
    <a href="akp.php">
    <img src="jurusan/akp.png" title="OTKP">
    </a>
</div>
</div>
</body>
<?php include 'footer.php' ?>
</html>