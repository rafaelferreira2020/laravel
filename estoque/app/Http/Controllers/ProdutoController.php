<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function lista(){

        $produtos = DB::select('select * from produtos');

        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra(){

        $id = Request::route('id');
        $produto = DB::select('select * from produtos where id = ?', [$id]);

        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto[0]);
    }

    public function novo(){
        return view('produto.formularioProduto');
    }

    public function adiciona(){

        $nome       = Request::input('nome');
        $valor      = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao  = Request::input("descricao");

        DB::insert('insert into produtos(nome, valor, quantidade, descricao) values(?, ?, ?, ?)',
        array($nome, $valor, $quantidade, $descricao));

        return redirect()
            ->action('ProdutoController@lista')
            ->withInput(Request::only('nome'));
    }

    public function listaJson(){
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }
}