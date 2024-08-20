<?php

function activate_menu($menu) {
    $ciinstance = get_instance();
    $classname = $ciinstance->router->fetch_class();
    return $classname == $menu ? 'active' : '';
}

function isLoggedIn($userdata) {
	if (!$userdata) {
		redirect(base_url('auth'));
	}
}
