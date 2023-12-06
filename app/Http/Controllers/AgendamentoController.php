<?php

namespace App\Http\Controllers;
use App\Models\Agendamento;
use App\Models\Clinica;
use Illuminate\Http\Request;

class AgendamentoController extends Controller
{
    public function index()
    {
        $agendamentos = Agendamento::all();

        return view('agendamento.list')->with(['agendamentos'=> $agendamentos]);
    }

    public function create()
    {
        $clinicas = Clinica::orderBy('nome')->get();

        return view('agendamento.form')->with([
            'clinicas'=> $clinicas
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'clinica_id'=>'required',
            'data_agendamento'=>'required',
            'horario'=>'required',
        ],[
            'clinica_id.required'=>"O :attribute é obrigatorio!",
            'data_agendamento.required'=>"O :attribute é obrigatorio!",
            'horario.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['clinica_id'=> $request->clinica_id,
            'data_agendamento'=> $request->data_agendamento,
            'horario'=> $request->horario
        ];

        Agendamento::create($dados); //ou  $request->all()

        return redirect('agendamento')->with('success', "Cadastrado com sucesso!");
    }

    public function show(Agendamento $agendamento)
    {
        //
    }

    public function edit($id)
    {
        $agendamento = Agendamento::find($id); //select * from agendamento where id = $id

        $clinicas = Clinica::orderBy('nome')->get();

        return view('agendamento.form')->with([
            'agendamento'=> $agendamento,
            'clinicas'=> $clinicas
        ]);
    }

    public function update(Request $request, Agendamento $agendamento)
    {
        $request->validate([
            'clinica_id'=>'required',
            'data_agendamento'=>'required',
            'horario'=>'required',
        ],[
            'clinica_id.required'=>"O :attribute é obrigatorio!",
            'data_agendamento.required'=>"O :attribute é obrigatorio!",
            'horario.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['clinica_id'=> $request->clinica_id,
            'data_agendamento'=> $request->data_agendamento,
            'horario'=> $request->horario
        ];

        Agendamento::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('agendamento')->with('success', "Atualizado com sucesso!");

    }
    public function destroy($id)
    {
        $agendamento = Agendamento::findOrFail($id);

        $agendamento->delete();

        return redirect('agendamento')->with('success', "Removido com sucesso!");
    }
    
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $agendamentos = Agendamento::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $agendamentos = Agendamento::all();
        }

        return view('agendamento.list')->with(['agendamentos'=> $agendamentos]);
    }
}
