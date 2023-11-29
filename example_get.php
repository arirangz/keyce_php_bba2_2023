<?php


if (isset($_GET["firstname"])) {
    echo $_GET["firstname"];
} else {
    echo "There is no firstname in URL";
}