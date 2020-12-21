<?php

namespace App;

class Connection
{
	public static function getDb()
	{
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=mvc;charset=utf8",
				"root",
				"" 
			);

			return $conn;
			//a barra invertida do PDO seguinifica que é um namespace raiz ou seja que é nativo do php
			//se não utlizar vai da erro pois tem que indicar o name espace da class, que no caso é o diretorio raiz
		} catch (\PDOException $e) {
			//.. tratar de alguma forma ..//
		}
	}
}
