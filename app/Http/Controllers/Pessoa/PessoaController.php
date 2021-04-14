<?php

namespace App\Http\Controllers\Pessoa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

#model
use App\Models\Pessoa;

class PessoaController extends Controller
{
    public function index(){
        return view('index');
    }

    public function login(Request $request){

        $login = $request->input('login');
        $senha = $request->input('senha');

        $data = Pessoa::where('pessoa_matricula', $login)
        ->where('pessoa_senha', $senha)
        ->first();

        if ($data){
            return view('dash');

        }else{
            return 'deslogado';
        }

    }

    public function store(Request $request){
        return 'ok';

    }
}
