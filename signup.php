<?php
    include_once 'header.php';
?>

    <p>
        This is the signup page.
    </p>

    
    <link rel="stylesheet" href="style.css"></link>
    <form class="container" action="includes/signup.inc.php" method="post">
    	<h2>Sign up</h2>
        <input class="A" type="text" name="name" placeholder="Name..." required><br>

        <input class="A" type="text" name="surname" placeholder="Surname..." required><br>
        <select name="class">
            <option name="class" value="" selected="selected">Class...</option>
            <option name="class" value="U">U</option>
            <option name="class" value="T">T</option>
        </select>
        <br>
        <br>
        <input class="A" type="email" name="email" placeholder="Email...">
        <br>
        <input class="B" type="password" name="pwd" placeholder="Password..." required><br>
        <input class="C" type="password" name="pwdrepeat" placeholder="Repeat password..." required><br>
        <button class="D" type="submit" name="submit">Sign up</button>
    </form>

<?php
    if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        else if ($_GET["error"] == "invalidname") {
            echo "<p>Choose a proper name!</p>";
        }
        else if ($_GET["error"] == "invalidsurname") {
            echo "<p>Choose a proper surname!</p>";
        }
        else if ($_GET["error"] == "invalidemail") {
            echo "<p>Choose a proper email!</p>";
        }
        else if ($_GET["error"] == "passwordsdontmatch") {
            echo "<p>Passwords don't match!</p>";
        }
        else if ($_GET["error"] == "stmtfailed") {
            echo "<p>Something went wrong, try again!</p>";
        }
        else if ($_GET["error"] == "emailtaken") {
            echo "<p>Username is already taken!</p>";
        }
        else if ($_GET["error"] == "emptyclassoremail"){
            echo "<p>Choose a class or an email!</p>";
        }
        else if ($_GET["error"] == "none") {
            echo "<p class='success'>You have signed up!</p>";
        }
    }
?>

<?php
    include_once 'footer.php';
?>