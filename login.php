<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            margin: 50px auto;
            text-align: center;
            width: 800px;
        }
        h1 {
            font-family: 'Passion One', sans-serif;
            font-size: 2rem;
            text-transform: uppercase;
        }
        label {
            width: 150px;
            display: inline-block;
            text-align: left;
            font-size: 1.5rem;
            font-family: 'Lato', sans-serif;
        }
        input {
            border: 2px solid #ccc;
            font-size: 1.5rem;
            font-weight: 100;
            font-family: 'Lato', sans-serif;
            padding: 10px;
        }
        form {
            margin: 25px auto;
            padding: 20px;
            border: 5px solid #ccc;
            width: 500px;
            background: #eee;
        }
        div.form-element {
            margin: 20px 0;
        }
        button {
            padding: 10px;
            font-size: 1.5rem;
            font-family: 'Lato', sans-serif;
            font-weight: 100;
            background: yellowgreen;
            color: white;
            border: none;
        }
        p.success,
        p.error {
            color: white;
            font-family: 'Lato', sans-serif;
            background: yellowgreen;
            display: inline-block;
            padding: 2px 10px;
        }
        p.error {
            background: orangered;
        }
    </style>
</head>
<body>
    <form method="post" action="session/loginProcess.php" name="signup-form">
        <div class="form-element">
            <label>Username</label>
            <input type="text" name="code" id="code" pattern="[a-zA-Z0-9]+" required />
        </div>
        <div class="form-element">
            <label>Password</label>
            <input type="password" name="password" id="password" required />
        </div>
        <button type="submit" name="btnLogin" value="btnLogin">Register</button>
    </form>
</body>
</html>
