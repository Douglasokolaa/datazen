<?php

function init_head($title)
{
    $data['title'] = $title;
    echo view('header', $data);
}

function init_footer()
{
    $data = [];
    echo view('footer');
}

function is_logged_in()
{
    if (session()->get('logged_in') == 1) {
        return true;
    } else {
        return false;
    }
}

function get_logged_in_user_id()
{
    return session()->get('userid');
}

/**
 *  @param arrray $module
 * @return strings
 */
function course_url($module)
{
    return base_url('/view-course/' . $module['course_id'] . '/' . $module['id']);
}
