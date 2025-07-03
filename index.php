<?php
session_start();
//print_r($_SESSION);

$directory = ".";
$files = scandir($directory);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minesweeper Home Page</title>
    <link rel="stylesheet" href="base.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            color: #333;
        }
        h1 {
            margin-top: 50px;
        }
        p.instructions {
            color: white;
            font-size: 1.2em;
            margin-bottom: 30px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .how-to-play {
            margin-top: 40px;
            font-size: 1.1em;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Welcome to Minesweeper!</h1>
    <p class="instructions">Test your skills and try to clear the board without hitting a mine! Login or create a new account in order to join the competition!</p>
    
    <ul>
        <?php if (isset($_SESSION['user_id'])) : ?>
            <!-- Links visible when the user is logged in -->
            <?php
            foreach ($important_files as $file => $label) {
                if (file_exists($file)) {
                    echo "<li><a href=\"$file\">$label</a></li>";
                }
            }
            ?>
            <li><a href="logout.php">Logout</a></li>
        <?php else : ?>
            <!-- Links visible when the user is not logged in -->
            <li><a href="login.php">Login</a> or <a href="signup.html">Signup</a></li>
        <?php endif; ?>
    </ul>

    <div style="text-align: center; margin-top: 20px;">
        <img src="images/CSUF.png" alt="Fresno Logo" style="width: 200px; height: auto;">
    </div>

</body>
</html>
