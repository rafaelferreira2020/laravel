<?php namespace estoque;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model {
	
	protected $table = 'produtos';
	public $timestamps = false;

	protected $guarded = ['id'];
	protected $fillable = array('nome', 'descricao', 'quantidade', 'valor', 'tamanho');
}
