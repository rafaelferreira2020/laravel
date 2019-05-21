<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

use estoque\Produto;
use estoque\Categoria;
use estoque\Http\Requests\ProdutoRequest;

use Request;
use Validator;
use Auth;

class ProdutoController extends Controller {

    public function __construct(){
        $this->middleware('auth',
        ['only' => ['novo', 'adiciona', 'remove']]);
        // ['except' => ['lista', 'mostra']]);
    }

    public function lista(){

        // $produtos = DB::select('select * from produtos');
        $produtos = Produto::all();
        return view('produto.listagem')->with('produtos', $produtos);
    }

    public function mostra($id){

        $produto = Produto::find($id);

        if(empty($produto)) {
            return "Esse produto não existe";
        }
        return view('produto.detalhes')->with('p', $produto);
    }

    public function novo(){
        return view('produto.formularioProduto')->with('categorias', Categoria::all());
    }

    public function adiciona(ProdutoRequest $request){

        Produto::create($request->all());
        
        return redirect()
            ->action('ProdutoController@lista')
            ->withInput();
    }

    public function listaJson(){
        $produtos = Produto::all();
        return response()->json($produtos);
    }

    public function remove($id){

        $produto = Produto::find($id);
        $nome = $produto->nome;
        $produto->delete();
        return redirect()
            ->action('ProdutoController@lista')
            ->with('nome', $nome);
    }
}