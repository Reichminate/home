<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function assets_url($string = NULL) {
    return base_url() . 'assets/' . $string;
}

function verbose($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}