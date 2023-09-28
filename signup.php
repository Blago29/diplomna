<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Signup Form</title>
    <style>
    /* Reset some default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
}

.container {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h1 {
    margin-bottom: 20px;
}

.form-group {
    text-align: left;
    margin-bottom: 15px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="tel"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.required {
    color: red;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007BFF;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 18px;
    cursor: pointer;
    transition: background-color 0.3s;
}

button:hover {
    background-color: #0056b3;
}

.login-link {
    margin-top: 15px;
}
</style>
</head>
<body>
    <div class="container">
        <h1>Create an Account</h1>
        <form id="signup-form">
            <div class="form-group">
                <label for="name">Name <span class="required">*</span></label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="surname">Surname <span class="required">*</span></label>
                <input type="text" id="surname" name="surname" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone <span class="required">*</span></label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="username">Username <span class="required">*</span></label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password <span class="required">*</span></label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Sign Up</button>
        </form>
        <p class="login-link">Already have a profile? <a href="login.php">I have a profile</a></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
