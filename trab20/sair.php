<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    include("menu.php");
    session_start();
    if(!isset($_SESSION["user"]))
    {
        echo "<center>";
        echo "<p align='center'><img border='0' src='https://seeklogo.com/images/P/proibido-passar-logo-7CB7184867-seeklogo.com.gif' width='240' height='180'></p>";
        echo "Não tem sessão ativa<br>";
        echo "<a href='home.php'> HOME";
    }
    else
    {
        unset($_SESSION["user"]);
        echo "<center>";
        echo '<p align="center"><img  border="0" src="http://www.differencebetween.info/sites/default/files/images/6/bye.jpg" width="240" height="180"></p>';
        echo "A sua sessão foi terminada<br>";
        echo "<a href='home.php'> HOME";
    }
    ?>
</body>

</html>