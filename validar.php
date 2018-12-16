<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    include("menu.php");
    session_start();
    if(isset($_SESSION["user"]))
    {
        echo "Ola ". $_SESSION["user"];
    }
    else
    {
        echo '<p align="center"><img border="0" src="https://seeklogo.com/images/P/proibido-passar-logo-7CB7184867-seeklogo.com.gif" width="240" height="180"></p>';
        echo '<center>Acesso reservado a utilizadores registados</center>';
        echo '<center><a href="entrar.php">Registe-se</a></center>';
        exit;
    }
    ?>
</body>

</html>