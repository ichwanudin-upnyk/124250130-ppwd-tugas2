<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinemas</title>

    <link rel="stylesheet" href="style.css">

    <style>
        body{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="title">
            <h1>Cinemas</h1>
            <p>Find your world with unpredictable!</p>
        </div>

        <form action="blank.php" method="POST">
            <div class="input-form">
                <label for="email">Email Adress</label>
                <input type="email" name="email"  placeholder="type your email">
            </div>
            <div class="input-form">
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="and then your password" required>
            </div>
            <div class="remember">
                <input type="checkbox" name="rememberMe">
                <label for="rememberMe">Remember My Email</label>
            </div>
            <button type="submit" name="submit"class="btn-submit">
                Submit
            </button>
        </form>
    </div>
    
</body>