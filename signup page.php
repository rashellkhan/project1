<!DOCTYPE html>
<html>
<head>
<title> Signup Page </title>
</head>
<style>
form{
border: 3px solid #C0C0C0;
}
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #FF0000;
    box-sizing: border-box;
}



/*signup button*/
button {
    color: black;
    background-color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 2px solid #000000;
    border-radius: 100px;
    cursor: pointer;
    width: 20%;
}


.cancelbutton {
    padding: 14px 20px;
     
    border: 2px solid #000000;
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
<body bgcolor="#808080">

<center><h2>Signup</h2></center>
 <form class="form-horizontal" action="./login page.php" method="POST" target="_blank">
<form>
<center>  
  <div class="container"> 
    <label><b>First Name</b></label><br>
    <input type="text" placeholder="First Name" name="firstname" required ><br>
    
    <label><b>Last Name</b></label><br>
    <input type="text" placeholder="Last Name" name="lastname" required><br>
    
    <label><b>Email</b></label><br>
    <input type="text" placeholder="Email@email.com" name="email" required><br>

    <label><b>Phone Number</b></label><br>
    <input type="text" placeholder="000-000-0000" name="number" required><br>

    <label><b>Birthday</b></label><br>
    <input type="text" placeholder="mm/dd/yyyy" name="Birthday" required><br>

    <label><b>Gender</b></label>
    <input type="radio" name="gender" value="male"> Male 
    <input type="radio" name="gender" value="female">Female


    <div class="clearfix">
      <button type="submit" class="signupbutton">Sign Up</button>
      <button type="button" class="cancelbutton">Cancel</button>
    </div>
  </div>
</center>
</form>

</body>
</html>