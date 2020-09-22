<?php

namespace Controllers;

class Index {
	public function helloWorldAction(\Base $fw, array $args = []): void {
		echo "Hello World! This is a ". $fw->VERB.' and my name is '.$args['name'].' and my age is '.$args['age'].' and my height is '.$args['height'];
		if($args['name'] === 'Joe') {
			$fw->reroute('@redirectedUrl', false);
		}
	}

	public function redirectedAction(\Base $fw, array $args = []): void {
		echo 'Hi you were redirected';
	}
}