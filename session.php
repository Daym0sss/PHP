<?php
    session_start();
    if (empty($_SESSION['count']))
    {
        $_SESSION['count']=1;
    }
    else
    {
        $_SESSION['count']++;
    }
?>
<p>
    Здравствуйте пользователь, вы видели эту страницу <?php echo $_SESSION['count']; ?> раз
</p>
