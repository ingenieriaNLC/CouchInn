<?php
    session_start();
    unset($_SESSION['sesion_usuario']);
    session_destroy();
    header('Location: ./index.php');
