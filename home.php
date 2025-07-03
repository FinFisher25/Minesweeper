<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="base.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: rgb(0, 46, 109);
        }

        .buttons {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            margin-top: auto;
        }

        .buttons a {
            display: inline-block;
            padding: 20px 40px;
            font-size: 1.5rem;
            text-align: center;
            background-color: rgb(219, 0, 50);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            width: 250px;
            box-sizing: border-box;
        }

        .buttons a:hover {
            background-color: rgb(255, 69, 69);
        }

        .footer {
            text-align: center;
            margin-top: auto;
            margin-bottom: 20px;
        }

        .footer img {
            max-width: 200px;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="buttons">
        <?php if (isset($_SESSION['user_id'])) : ?>
            <a href="game.html">Game</a>
            <a href="leaderboard.html">Leaderboard</a>
            <a href="logout.php">Logout</a>
            <a href="help.html">Help</a>
            <a href="contact.html">Contact</a>
        <?php else : ?>
            <a href="login.php">Login</a>
            <a href="signup.html">Signup</a>
        <?php endif; ?>
    </div>

    <div class="footer">
        <img src="images/water.png" alt="Fresno Logo">
    </div>

</body>
</html>
