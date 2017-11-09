<!DOCTYPE html>
<html>
<head>
<title> Login Page </title>
</head>
<style>
form{
border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}



/*signup button*/
button {
    color: black;
    background-color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px solid #4CAF50;
    border-radius: 100px;
    cursor: pointer;
    width: 20%;
}


.cancelbutton {
    padding: 14px 20px;
     
    border: 2px solid #f44336;
}

.cancelbutton,.signupbutton {
    float: center;
    width: 50%<br>;
}


.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body bgcolor="#b9dcd2">

<center><h2>Login</h2></center>
 <form class="form-horizontal" action="./correct.php" method="POST" target="_blank">
<form>
<center>  
  <div class="container"> 
    <label><b>Email</b></label><br>
    <input type="text" placeholder="Email@email.com" name="email" required><br>

    <label><b>Password</b></label><br>
    <input type="text" placeholder="Password" name="password" required><br>



    <div class="clearfix">
      <button type="login" class="loginbutton">Login</button>
      <button type="button" class="cancelbutton">Cancel</button>
    </div>
  </div>
</center>
</form>

</body>
</html>