
<?php
    include_once 'header.php';
?>

    <p>
        This is the signup page.
    </p>

     <div class="background">
        <div class="ball"></div>
        <div class="ball"></div>
    </div>
    <link rel="stylesheet" href="style.css"></link>
    <form  class="container form" action="includes/signup.inc.php" method="post">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        
    	<h3>Sign up</h3>
        <input class="A" type="text" name="name" placeholder="Name..." required><br>

        <input class="A" type="text" name="surname" placeholder="Surname..." required><br>
        <br>
        <b>Class...</b>
        <select name="class">
            <option class="black" name="class" value="" selected="selected">Class...</option>
            <option class="black" name="class" value="U">U</option>
            <option class="black" name="class" value="T">T</option>
        </select>
        <br>
        <br>
        <input class="A" type="email" name="email" placeholder="Email...">
        <br>
        <input class="B" type="password" name="pwd" placeholder="Password..." required><br>
        <input class="C" type="password" name="pwdrepeat" placeholder="Repeat password..." required><br>
          <h1><?php if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalidname") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Choose a proper name!</p>";
        }
        else if ($_GET["error"] == "invalidsurname") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Choose a proper surname!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Passwords don't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "emailtaken") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Username is already taken!</p>";
        }
        else if ($_GET["error"] == "emptyclassoremail"){
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>Choose a class or an email!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p style='color: red;font-size:20px;justify-content: center;display: flex;'>You have signed up!</p>";
        }
    } ?></h1>
        <button class="D" type="submit" name="submit">Sign up</button>

    </form>

<?php
/*
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p style='color: red;justify-content: center;display: flex;'>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalidname") {
            echo "<p style='color: red;justify-content: center;display: flex;'>Choose a proper name!</p>";
        }
        else if ($_GET["error"] == "invalidsurname") {
            echo "<p style='color: red;justify-content: center;display: flex;'>Choose a proper surname!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p style='color: red;justify-content: center;display: flex;'>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p style='color: red;justify-content: center;display: flex;'>Passwords don't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p style='color: red;justify-content: center;display: flex;'>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "emailtaken") {
            echo "<p style='color: red;justify-content: center;display: flex;'>Username is already taken!</p>";
        }
        else if ($_GET["error"] == "emptyclassoremail"){
            echo "<p style='color: red;justify-content: center;display: flex;'>Choose a class or an email!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p style='color: red;justify-content: center;display: flex;'>You have signed up!</p>";
        }
    }*/
?>


<?php
    include_once 'footer.php';
?>

<style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
   
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}

@media (max-width: 900px) {
    .form  {
        width: 100%x;
    }

    }
.background .ball{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.ball:first-child{
    background: linear-gradient(
        red,
        red
    );
    left:-10px;
    top: -80px;
}
.ball:last-child{
    background: linear-gradient(
        to right,
        blue,
        blue
    );
    right: -10px;
    bottom: -80px;
}
h3 {
    font-family: Poppins, sans-serif;
    font-weight: 600;
    font-size: 40px;
    margin-top: -5%;
    justify-content: center;
    display: flex;  
}
.form{
    height: 800px;
    width: 375px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
.form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}


</style>