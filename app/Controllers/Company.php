<?php

namespace Controllers;

class Company {

	public function beforeroute(\Base $fw) {
		if(empty($fw->get('SESSION.is_logged_in'))) {
			$fw->reroute('/logout', false);
		}
	}

	public function afterroute(\Base $fw) {
		
	}

    function get($fw) { $fw->clear('SESSION.is_logged_in'); echo 'This is a GET'; }
    function post() { echo 'This is a POST'; }
    function put() { echo 'This is a PUT'; }
    function delete() { echo 'This is a DELETE'; }
}