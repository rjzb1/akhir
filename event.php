<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="event.css">
    <title>event</title>
</head>
<body>
    
<?php include 'navigation.php' ?>

<section class="section-card">
    <div class="card card-1">
        <img src="event/maulid.jpg" alt="event1" class="card__img">
        <div class="card__details">
            <ul>
                <li>Maulid Nabi</li>
                <li>6 Oktober 2023</li>
                <li>SMK Golden</li>
            </ul>
        </div>
        <a href="#popup1" class="btn">Read more</a>
    </div>
     <div class="card card-2">
      <img src="1.jpg" alt="event2" class="card__img">
        <div class="card__details">
            <ul>
                <li>Hari Guru</li>
                <li>27 November 2023</li>
                <li>SMK Golden</li>
            </ul>
        </div>
        <a href="#popup" class="btn">Read more</a>
    </div>
     <div class="card card-3">
    <img src="event/sabtuceria.jpg" alt="event3" class="card__img">
        <div class="card__details">
            <ul>
                <li>Sabtu Ceria</li>
                <li>21 Oktober 2023</li>
                <li>SMK Golden</li>
            </ul>
        </div>
        <a href="#popup2" class="btn">Read more</a>
    </div>
</section>

<div class="popup" id="popup1">
    <div class="popup__content">
        <div class="popup__img">
            <img src="event/maulid.jpg" alt="event1">
            <a href="#" class="popup__close">&times;</a>
        </div>
        <div class="popup__header">
            <h1>Maulid Nabi</h1>
            <h2>6 Oktober 2023</h2>
        </div>
        <div class="popup__text">
        </div>
        </div>
    </div>

<div class="popup" id="popup">
    <div class="popup__content">
        <div class="popup__img">
            <img src="1.jpg" alt="event2">
            <a href="#" class="popup__close">&times;</a>
        </div>
        <div class="popup__header">
            <h1>Hari Guru</h1>
            <h2>27 November 2023</h2>
        </div>
        <div class="popup__text">
            
        </div>
        </div>
    </div>

<div class="popup" id="popup2">
    <div class="popup__content">
        <div class="popup__img">
            <img src="event/sabtuceria.jpg" alt="event3">
            <a href="#" class="popup__close">&times;</a>
        </div>
        <div class="popup__header">
            <h1>Maulid Nabi</h1>
            <h2>27 Oktober 2023</h2>
        </div>
        <div class="popup__text">
          
        </div>
        </div>
    </div>
<?php include 'footer.php'?>

</body>
</html>