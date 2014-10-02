<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSCI E-15 - Tatiana Khair</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.10.1.js"></script>
    <script> 
      $(function () {
        $('#form').on('submit', function (event) {
          event.preventDefault();
          $.ajax({
            type: 'post',
            url: 'includes/generator.php',
            data: $('#form').serialize(),
            success: function (data) {
              $("#pwd").text(data);
           }
          });

        });

      });
    </script>
  </head>

  <body>
  <?php include("includes/header.php"); ?>

<div class="form">
  <p>This script will help you to generate decent password</p>
      <form id="form">
          <label>Length of password:</label> <input maxlength=2 type='text' name='length' id='length' value=''> <br />
          <br />
          <label>Available options:</label> <br />
              <div class="input-group">
          <span class="input-group-addon">
          <input type='checkbox' name='use_special' id='use_special' > <label for='use_special'>Use special symbols</label> <br />
          <input type='checkbox' name='use_numbers' id='use_numbers' > <label for='use_numbers'>Use numbers</label> <br />
           </span>
         </div>
         <br />
          <input type='submit' id='submit' class="btn btn-primary" value='Get the password!' >
      </form>
      <p>You newly generated password is: <span id="pwd"></span></p>


</div>

<?php include("includes/footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
