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
    if(!empty($_POST['username'])) {
        
        
        $dbh = new PDO('mysql:host=localhost;dbname=login','root','');
        
        $sql = "INSERT INTO formularz(username, password) VALUES (:username, :password)";

        $data = [
            'username' => $_POST['username'],
            'password' => $_POST['password'],
        ];

        $sth = $dbh->prepare($sql)->execute($data);   
    }