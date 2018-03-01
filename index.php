<?php ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <?php
  $url = false;
  $page = false;
  if(isset($_REQUEST['page']))
  {
    $page = $_REQUEST['page'];
    if($page == 'website')
      $url = 'https://www.theknot.com/us/kara-and-brian-french';
    elseif($page == 'ceremony')
      $url = 'https://www.facebook.com/events/262793930925269';
    elseif($page == 'reception')
      $url = 'https://www.facebook.com/events/850747935127124';
    if($url)
    {
      //echo '<meta http-equiv="refresh" content="5; url='.$url.'" />';
    }
  }
  ?>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="main.css" type="text/css">
  <title>Kara and Brian's Wedding</title>
</head>

<body class="bg-gradient text-white text-center border border-dark">
  <?php if($url): ?>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">×</button>
            <h4 class="alert-heading">Redirecting...</h4>
            <p class="mb-0">Redirecting to: <a href="<?=$url?>">
              <?=$url?>
              </br>
              <img class="img-fluid d-block mx-auto" src="assets/qr_<?=$page?>.png">
            </a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="py-5 text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-4 p-4">
          <a href="index.php?page=website" class="text-dark">
            <img class="img-fluid d-block mx-auto" src="assets/qr_website.png">
            <h4>Website</h4>
          </a>
        </div>
        <div class="col-md-4 p-4">
          <a href="index.php?page=ceremony" class="text-dark">
            <img class="img-fluid d-block mx-auto" src="assets/qr_ceremony.png">
            <h4>Ceremony Event</h4>
          </a>
        </div>
        <div class="col-md-4 p-4">
          <a href="index.php?page=reception" class="text-dark">
            <img class="img-fluid d-block mx-auto" src="assets/qr_reception.png">
            <h4>Reception Event</h4>
          </a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
