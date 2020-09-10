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
    $CI =&get_instance();
    if ($CI->session->get('isUserLoggedIn')) {
        return true;
    } else {
        return false;
    }
}