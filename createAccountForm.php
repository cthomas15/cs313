<?php
    require("connectToDatabase.php");
    $db = loadDatabase();

    // Load list of all groups in databases
    $groups = $db->query('select * from user_group');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Create Account</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    

    <!-- Custom styles for this template -->
    <link href="createAccountForm.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <h2 id="top-heading" class="form-signin-heading">Please Enter in the following information</h2>

    <div class="container">

      <!-- From with all elements to create new user --> 
      <form class="form-signin" name="form" method='POST' action="createAccount.php">
        <input type="text" name="firstName" class="form-control" placeholder="First Name" required autofocus>
        <br />

        <input type="text" name="lastName" class="form-control" placeholder="Last Name" required autofocus> 
        <br />

        <input type="text" name="username" class="form-control" placeholder="User ID" required autofocus>
        <br />
        
        <input type="password" name="password" class="form-control" placeholder="Password" required>

        <br/>

        <h5>Select a Group</h5> 
        <select name="group_name_dropdown">
          <?php
            // Print an option in drop-down for each group in databases
            foreach($groups as $row) 
            {
              echo "<option value=\"$row[group_name]\">$row[group_name]</option>";
            }
          ?>
        </select>

        <br/> 
        <br/> 
        <h5>Or</h5>
        <br/> 
        <h5>Create a New Group</h5>
        
        <input type="text" name="group_name_textbox" class="form-control" placeholder="Group Name" autofocus>

        <br/> 
        <br/> 
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <br />
        <br />
      </form>

    </div> <!-- /container -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
