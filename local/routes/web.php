<?php
use Bitrix\Main\Routing\RoutingConfigurator;
use Infuse\Rest\Controller\User;
return function (RoutingConfigurator $routes) {
	// маршруты
	$routes->get('/rest/{id}/{token}/get.username.vowels', [User::class, 'getUserNameVowels']);
};

