<?php

session_start();

var_dump($_SESSION);
$_SESSION["name"] = "John";