<?php

require(__DIR__.'/../vendor/autoload.php');

$fw = \Base::instance();
$fw->CACHE = true;
$fw->set('AUTOLOAD', '../app/');

$fw->route('GET /helloWorld/@name', 'Controllers\Index->helloWorldAction');
$fw->route('GET @redirectedUrl: /redirected-and-now-the-url-is-super-duper-long-and-you-forgot-to-change-the-other-urls', 'Controllers\Index->redirectedAction');
$fw->route('GET /@controller/@action', 'Controllers\@controller->@action');
$fw->route('GET /logout', function() { echo 'You are logged out'; });
$fw->map('/company/@company', 'Controllers\Company');

$fw->run();