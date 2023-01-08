<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title> User Login Page </title>
  <link rel="stylesheet" href="./style.css">

  <script>
function loginn()
{
    var uname = document.getElementById("amail").value;
    var pwd = document.getElementById("pwd1").value;
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(uname =='')
    {
        alert("please enter Valid Email id");
        return false;
    }
     else if(pwd=='')
    {
      alert("enter the password");
      return false;
    }
    else if(!filter.test(uname))
    {
        alert("Enter valid email id");
        return false;
    }
    else if(pwd.length < 6 || pwd.length > 6)
    {
        alert("Password min and max length is 6");
        return false;
    }
    else
    {
        alert('Thank you for login mr.ARUL PANDI P');
        
        return true;
    }
}


//Reset Inputfield code.
function clearFunc()
{
 document.getElementById("amail").value="1234567890@gmail.com";
 document.getElementById("pwd1").value="123456";
}
</script>

</head>
<body>
<div id="bg"></div>

<form action = "user_valid.php" onsubmit = "return loginn()" method = "POST">
  <div class="form-field">
    <input type="email" name="amail" placeholder="Enter your Email" required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="pwd1" placeholder="Enter your Password" required/>
  </div>

  
  <div class="form-field">
    <button class="btn" type="submit">Log in</button>
  </div>
  <div class="form-field">
    <button class="btn" type="reset" onclick="clearFunc()">Reset</button>
  </div>


</form>
  
</body>
</html>
