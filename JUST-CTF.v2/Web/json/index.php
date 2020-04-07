<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php
    echo '<h2>here is <a href="admin.json" >admin</a> username and password</h2>'
?>
<br>
<form action="action_page.php" method="get">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required>

    <button type="submit">Login</button>
    
  </div>

  
</form>
</body>
</html>
