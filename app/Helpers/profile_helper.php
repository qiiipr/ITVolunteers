<?php

if (!function_exists('render_user_title')) {

    function render_user_title($username, $first_name, $last_name)
    {
        if ($first_name != '' || $last_name != '') {
            $user_title = $first_name . " " . $last_name;
        } else {
            $user_title = $username;
        }
        return $user_title;
    }
}

if (!function_exists('render_user_avatar')) {

    function render_user_avatar($user_avatar)
    {
        $avatar_path = ($user_avatar)
            ? base_url() . 'profile/image/' . $user_avatar
            : base_url() . 'assets/images/avatar/default-avatar.png';

        return $avatar_path;
    }
}

if (!function_exists('render_user_active')) {

    function render_user_active($user_active)
    {
        $active = ($user_active == 1)
            ? "<span class='badge bg-label-success ms-1'>Active</span>"
            : "<span class='badge bg-label-warning ms-1'>inactive </span>";

        return $active;
    }
    if (!function_exists('render_user_groups')) {

        function render_user_groups($user_groups)
        {
            $groups = "";
            foreach ($user_groups as $user_group)
                if ($user_group['name'] == 'admin') {
                    $groups .= "<span class='badge bg-label-primary ms-1'> Admin </span>";
                } elseif ($user_group['name'] == 'volunteer') {
                    $groups .= "<span class='badge bg-label-info ms-1'> volunteer </span>";
                } elseif ($user_group['name'] == 'user') {
                    $groups .= "<span class='badge bg-label-secondary ms-1'> user </span>";
                }
            return $groups;
        }
    }
}
