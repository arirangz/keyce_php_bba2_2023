<?php
session_start();
//Prevents session fixation attacks.
session_regenerate_id(true);
//We remove the data stored on the server
session_destroy();
//We remove data from $_SESSION array
unset($_SESSION);

//Redirect to login.php page
header("Location: login.php");