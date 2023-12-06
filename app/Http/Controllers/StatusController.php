<?php

namespace App\Http\Controllers;
use App\Models\Status;
use PDF;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $statuss = Status::all();

        return view('status.list')->with(['statuss'=> $statuss]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        return view('status.form');
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $dados = [
            'nome_digestao'=> $request->nome_digestao,
            'nome_pele'=> $request->nome_pele,  
            'nome_exercicio'=> $request->nome_exercicio,
        ];

        Status::create($dados); //ou  $request->all()

        return redirect('status')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $status = Status::find($id); //select * from matricula where id = $id

        return view('status.form')->with([
            'status'=> $status
        ]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Status $status)
    {

        $dados = [
            'nome_digestao'=> $request->nome_digestao,
            'nome_pele'=> $request->nome_pele,  
            'nome_exercicio'=> $request->nome_exercicio,
        ];

        Status::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('status')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $status = Status::findOrFail($id);

        $status->delete();

        return redirect('status')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $statuss = Status::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $statuss = Status::all();
        }

        return view('status.list')->with(['statuss'=> $statuss]);
    }
}
