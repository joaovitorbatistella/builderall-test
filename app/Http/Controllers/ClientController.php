<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clientList = Client::all();
        return view('client.list', ['client' => $clientList]);
    }

    public function create()
    {
        return view('client.create');
    }

    public function store(Request $request)
    {
        $messages = array(
            'name.required' => 'É obrigatório um nome para o client',
        );
        //vetor com as especificações de validações
        $rules = array(
            'name' => 'required|string',
        );
        //cria o objeto com as rules de validação
        $validador = Validator::make($request->all(), $rules, $messages);
        //executa as validações
        if ($validador->fails()) {
            return redirect('/clientes/create')
            //->withErrors(['categoriesStoreValidadorMessage'=>'Os dados inseridos não sarisfazem os requisitos de validação para o cadastro de uma categoria'])
            ->withInput($request->all);
        }
        //se passou pelas validações, processa e salva no banco...
        try {
            $obj_Clients = Client::create($request->all());
        } catch (\Exception $e){
            return redirect()->to('/clients');//->withErrors(['categoriesStoreFailedMessage'=>'Não foi possível cadastrar esta categoria, erro: '. $e]);
        }
        return redirect('/')->withSuccess('Categoria criada com sucesso!!');
    }
}
