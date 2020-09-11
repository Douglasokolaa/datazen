<?php

function init_head($title) {
    $data['title'] = $title;
    echo view('header', $data);
}

function init_footer() {
    $data = [];
    echo view('footer');
}

function is_logged_in()
{
    if (session()->get('logged_in')) {
        return true;
    } else {
        return false;
    }
}