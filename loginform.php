
<html>
    <head>
    <link rel="stylesheet" href="style.css">

    </head>
    <body>

<div class ="contactUs" style="background-color:#00803d;height:100%;">
        <h1 class="text-center" style="padding-top:150px;color:white;">Login Form</h1>
        <form style="width:60%;margin-left:300px;background-color:#a5872a;" class="form" name="form" action="login.php"  onsubmit="return isvalid()"  method="POST">
            <label style="font-weight:bolder;color:white;"> Username</label>
            <input class="form-input" type="text" id="user" name="user"></br></br>
            <label style="font-weight:bolder;color:white;"> Password</label>
            <input class="form-input" type="password" id="pass" name="pass"></br></br>

            <input class="button-dark" style="font-weight:bolder;color:white;" type="submit" class="btn" value="submit">
</form>
</div>

 <script>
    function isvalid()
    {
    

        var user=document.form.user.value;
        var pass=document.form.pass.value;
        
        if(user.length==""&& pass.length=="")
        {alert("Username and password field is empty");
            document.form.user.focus();
        return false;
          }

    
            if(user.length=="")

            {alert("password is empty");
                document.form.user.focus();
                return false;
            }

            if(pass.length=="")

            {alert("password is empty");
                document.form.pass.focus();
    return false;
}
            return true;
        }
    

    </script> 




</body>
</html>