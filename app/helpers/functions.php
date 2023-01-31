<?php

function dd($data) {
    var_dump($data);
    die;
}

function redirect($path) {
    header("Location: " . BASE_URL . "/$path");
    exit;
}