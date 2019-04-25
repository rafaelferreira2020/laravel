<?php namespace estoque\Http\Requests;

use estoque\Http\Requests\Request;

class ProdutoRequest extends Request {

	public function authorize(){
	
		return true;
	}

	public function rules(){
	
		return [
			'nome' 		 => 'required|min:3',
			'valor' 	 => 'required|numeric|min:4',
			'quantidade' => 'required|numeric|min:2',
			'tamanho' 	 => 'required|max:100',
			'descricao'  => 'required|min:10|max:255'
		];
	}
	
	public function messages(){
		return [
			'required' => 'O :attribute é obrigatório!',
			'min'      => 'O campo :attribute deve ter pelo menos :min caracteres',
			'max'      => 'O campo :attribute deve ter pelo máximo :min caracteres',
			'numeric'  => 'O campo :attribute deve ser numérico'
		];
	}
}
