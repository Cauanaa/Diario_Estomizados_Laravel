<?php

namespace App\Http\Controllers;
use App\Models\TrocaBolsa;
use PDF;

use Illuminate\Http\Request;

class TrocaBolsaController extends Controller
{
    public function index()
    {
        $trocas = TrocaBolsa::all();

        return view('troca.list')->with(['trocas'=> $trocas]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        return view('troca.form');
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'aplicada'=>'required',
            'removida'=>'required',
            'motivo'=>'required',
            'condicoes'=>'required',
            'notas'=>'required',
        ],[
            'aplicada.required'=>"O :attribute é obrigatorio!",
            'removida.required'=>"O :attribute é obrigatorio!",
            'motivo.required'=>"O :attribute é obrigatorio!",
            'condicoes.required'=>"O :attribute é obrigatorio!",
            'notas.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['aplicada'=> $request->aplicada,
            'removida'=> $request->removida,
            'motivo'=> $request->motivo,
            'condicoes'=>$request->condicoes,
            'notas'=>$request->notas,
        ];

        TrocaBolsa::create($dados); //ou  $request->all()

        return redirect('troca')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(TrocaBolsa $trocas)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $troca = TrocaBolsa::find($id); //select * from matricula where id = $id

        return view('troca.form')->with([
            'troca'=> $troca
        ]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, TrocaBolsa $troca)
    {
        $request->validate([
            'aplicada'=>'required',
            'removida'=>'required',
            'motivo'=>'required',
            'condicoes'=>'required',
            'notas'=>'required',
        ],[
            'aplicada.required'=>"O :attribute é obrigatorio!",
            'removida.required'=>"O :attribute é obrigatorio!",
            'motivo.required'=>"O :attribute é obrigatorio!",
            'condicoes.required'=>"O :attribute é obrigatorio!",
            'notas.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['aplicada'=> $request->aplicada,
            'removida'=> $request->removida,
            'motivo'=> $request->motivo,
            'condicoes'=>$request->condicoes,
            'notas'=>$request->notas,
        ];

        TrocaBolsa::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('troca')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $troca = TrocaBolsa::findOrFail($id);

        $troca->delete();

        return redirect('troca')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $troca = TrocaBolsa::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $trocas = TrocaBolsa::all();
        }

        return view('troca.list')->with(['trocas'=> $trocas]);
    }

    public function report(){
            //select * from matricula order by nome
            $trocas = TrocaBolsa::orderBy('aplicada')->get();

            $data = [
                'title'=>"Relatorio Listagem de Trocas de Bolsa",
                'trocas'=> $trocas
            ];

            $pdf = PDF::loadView('troca.report',$data);
            //$pdf->setPaper('a4', 'landscape');
           // dd($pdf);

            return $pdf->download("listagem_trocas.pdf");
    }

}
