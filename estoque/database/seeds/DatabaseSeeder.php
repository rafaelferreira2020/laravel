<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use estoque\User;
use estoque\Categoria;
use estoque\Produto;


class DatabaseSeeder extends Seeder {

	public function run(){

		Model::unguard();

		$this->call('UserTableSeeder');
		$this->call('CategoriaTableSeeder');
		$this->call('ProdutoTableSeeder');
	}
}

class UserTableSeeder extends Seeder {

	// public function run(){
	// 	User::create(['name' => 'Rafael2', 'email' => 'sf.rafael2020@gmail.com', 'password' => '$2y$10$WvfbvOXneSCp1jTJzSvNu.EosAobwCsJOznxKgw6fDMHzb3l43Y0u']);
	// 	User::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => '$2y$10$WvfbvOXneSCp1jTJzSvNu.EosAobwCsJOznxKgw6fDMHzb3l43Y0u']);
	// }
}

class CategoriaTableSeeder extends Seeder {

	public function run(){

		Categoria::create(['nome' => 'ELETRONICO']);
		Categoria::create(['nome' => 'ELETRODOMESTICO']);
		Categoria::create(['nome' => 'BRINQUEDO']);
		Categoria::create(['nome' => 'ESPORTES']);
	}
}


class ProdutoTableSeeder extends Seeder {
	// public function run(){
	// 	Protudo::create(['nome' => '', 'valor' => '', 'descricao' => '', 'quantidade' => '',
	// 	'tamanho' => '', 'categoria_id']);
	// }
}