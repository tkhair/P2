<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CSCI E-15 - Tatiana Khair</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <h1>Tatiana Khair - CSCI E-15 P2</h1>
    <h2>Password Generator</h2>

<div class="form">
<p>This script will help you to generate decent password</p>
  <form>
      <label>Length of password:</label> <input maxlength=15 type='text' name='length' id='length' value=''> <br />
      <br />
      <label>Available options:</label> <br />
          <div class="input-group">
      <span class="input-group-addon">
      <input type='checkbox' name='option1' id='option1' > <label for='option1'>Option 1</label> <br />
      <input type='checkbox' name='option2' id='option2' > <label for='option2'>Option 2</label> <br />
       <input type='checkbox' name='option3' id='option3' > <label for='option3'>Option 3</label> <br />
       </span>
     </div>
     <br />
      <input type='submit' class="btn btn-primary" value='Get the password!' action=''>
  </form>

</div>  
<br />	
<div class="footer">
    <p>(c) Tatiana Khair 2014<br/>
    This page have been developed in-line with Assignment 2 requirements of CSCI E-15 class at Harvard Extension School</p>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
