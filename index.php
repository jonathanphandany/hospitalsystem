<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="style2.css" rel="stylesheet" type="text/css">
  <link href="image/icon.png" rel="shortcut icon">

  <title>Hospital Login</title>
</head>
  
<body id="myPage">

  <br>
  <div class="box">
    <h3>LOGIN FORM</h3>
    <form name="login">
    <img src="image/login.png" alt="User">
      <div>
        <input type="text" id="username" required placeholder="Username" />
      </div>
      <div>
         <input type="password" id="password" required placeholder="Password" />
      </div>
      <a href="#" onclick="forgot()">Forgot Password ?</a>
      <button type="button" onclick="Login()">
        LOGIN
      </button>

      <h5>Web Developer 2020 | B Class</h5>
      
    </form>
  </div>

  <script src="teamScript/keren.js"></script>
  <script src="library/sweetalert2.all.min.js"></script>
  <br>

</body> 

</html>