<?php
    session_start();
    echo ("Hello  ". $_SESSION['username'] ."  your password is  " .$_SESSION['password']);