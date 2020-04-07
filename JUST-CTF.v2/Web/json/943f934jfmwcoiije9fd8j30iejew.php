<html>
<head>

<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<h2>here is <a href="admin.json" >admin</a> username and password</h2><br>
<form action="action_page.php" method="get">

  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" value="<?php if(isset($_GET['user']))echo $_GET['user']?>"placeholder="Enter Username" name="user" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" value="<?php if(isset($_GET['pass']))echo $_GET['pass']?>"placeholder="Enter Password" name="pass" required>
    <label for="uname"><b>flag</b></label>
    <input type="text" value="<?php if(isset($_GET['flag']))echo $_GET['flag']?>" placeholder="Enter the flag" name="flag" required>

  </div>

    <button type="submit">Login</button>
    
  </div>

  
</form>
</body>
</html>


