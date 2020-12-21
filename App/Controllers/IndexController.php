<?php

namespace App\Controllers;

//recursos do mineframework
use MF\Controller\Action;
use MF\Model\Container;

//os models
use App\Models\Produto;
use App\Models\Info;

class IndexController extends Action
{
	public function index()
	{
		// instacia o model Produto
		$produto = Container::getModel('Produto'); 
		// executa o metodo getProdutos do model produto
		$produtos = $produto->getProdutos();
		//o this->view->dados pode ser acessado na view
		$this->view->dados = $produtos;
		//mostra na tela a view index, usando como layout o layout1
		$this->render('index', 'layout1');

	}

	public function sobreNos()
	{
		$info = Container::getModel('Info'); 
		
		$informacoes = $info->getInfo();
		$this->view->dados = $informacoes;
		$this->render('sobreNos', 'layout2');
	}
}
