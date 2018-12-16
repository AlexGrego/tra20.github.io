<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    include("menu.php");
    echo '<meta charset="utf-8">';
    $us=$_POST["user"];
    $ps=$_POST["password"];
    if($us=="" || $ps=="")
    {
        echo '<p align="center"><img border="0" src="https://2.bp.blogspot.com/-OTkDwqw6E-I/UDlWFmvIJBI/AAAAAAAAYnE/j5tOFj9LBSQ/s1600/no-access-2.gif" width="240" height="180"></p>';
        echo '<center>Todos os campos são de preenchimento obrigatório</center>';
        echo '<br>';
        echo '<center><a href="entrar.php">Volte a tentar</a></center>';
    }
    else
    {
        if($us=="ana" && $ps=="123")
        {
            session_start();
            $_SESSION["user"]=$_POST["user"];
            header("Location:main1.php");
        }
        else
        {
            echo '<p align="center"><img border="0" src="https://seeklogo.com/images/P/proibido-passar-logo-7CB7184867-seeklogo.com.gif" width="240" height="180"></p>';
            echo '<center>Erro de autenticação</center>';
            echo '<center><a href="entrar.php">Tente novamente</a></center>';
        }
    }
    ?>
</body>

</html>