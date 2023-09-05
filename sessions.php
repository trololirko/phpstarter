<?php

session_start();

// $_SESSION['counter'] = 1 ; // Legt eine Session-Variable auf dem Server an

echo 'Start! ' . (++$_SESSION['counter']);