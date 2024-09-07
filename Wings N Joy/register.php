<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="account.php">My Account</a></li>
            </ul>
        </nav>
    </header>
    <main>
		 
		 <h1>Wings N Joy</h1>
        <h1>Register</h1>
			
        <div class="form">
            <form action="register.php" method="POST">
                <input type="username" name="username" placeholder="Username" required><br>
                <input type="email" name="email" placeholder="Email" required><br>
                <input type="password" name="password" placeholder="Password" required><br>
				<input type="contact number" name="contact number" placeholder="contact number" required><br>
                <button class="btnn"> <type="submit"><a href="login.php">Register</button>

            </form>
        </div>
    </main>
    
</body>
</html>
