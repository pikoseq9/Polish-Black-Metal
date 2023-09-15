<html>
    <body>
        <form method="post" action="">
            <h1>Login</h1>
            <div>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </div>
            <section>
                <button type="submit">Login</button>
                <a href="register.php">Register</a>
            </section>
    </body>
</html>
<?php
    $mysqli = new mysqli('mysql:host=localhost','root','','dbname=login');
    $result = $mysqli->query("SELECT id FROM formularz WHERE username = '"username"' AND 'password' = '"password"' ");
    if($result->num_rows == 0) {
        
    } else {
        
    }
    $mysqli->close();


    $result = mysql_query("SELECT id FROM formularz WHERE 'username' = 'c7'");
    if(mysql_num_rows($result) == 0) {
         // row not found, do stuff...
    } else {
        // do other stuff...
    }
















