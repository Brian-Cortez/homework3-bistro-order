<?php
session_start();

function resetSession(){
    session_unset();

    session_destroy();
}
?>