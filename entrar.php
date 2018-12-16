<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    include("menu.php");
    ?>
    <center>Benvindo à Machado e Cunhas</center>
    <br>
    <center><mark>        Autenticação de utilizadores        </mark></center>
    <form action="login.php" method="POST">
        <center>Utilizador:<input type="text" name="user"></center>
        <center>Password: <input type="password" name="password"></center>
        <center><input type="submit" value="Submeter dados"> <input type="reset" value="Limpar"></center>
    </form>
</body>

</html>