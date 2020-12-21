<?php

namespace App;

use MF\Init\Bootstrap;

class Route extends Bootstrap
{
	protected function initRoutes()
	{
		// route: é a rota'url' que o usuario vai acessar
		// controller: é o controller que a rota vai chamar
		// action: é o metodo do controller que vai ser chamado
		// um controller pode ter mais de um metodo e cada rota pode acessar um metodo diferente dessse controller
		// Pode ser criado mais de um controller
		
		$routes['home'] = array(
			'route' => '/',
			'controller' => 'indexController',
			'action' => 'index'
		);

		$routes['sobre_nos'] = array(
			'route' => '/sobre_nos',
			'controller' => 'indexController',
			'action' => 'sobreNos'
		);

		$this->setRoutes($routes);
	}

}
