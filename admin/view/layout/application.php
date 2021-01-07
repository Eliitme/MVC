<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Website</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/all.js"></script>

  </head>

  <body onload="loading()" style="margin:0;">
    <div id="loader"></div>
    <div class="container">
      <?= @$content ?>
      <div class="clearfix"></div>
    </div>

    <script>
      var myVar;

      function loading() {
        myVar = setTimeout(showPage, 1000);
        $('.container').addClass('d-none');
      }

      function showPage() {
        $('#loader').addClass('d-none');
        $('.container').removeClass('d-none');
      }
    </script>
  </body>

  </html>