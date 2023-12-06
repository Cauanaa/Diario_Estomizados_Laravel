<?php

namespace App\Http\Controllers;
use App\Models\Clinica;
use PDF;

use Illuminate\Http\Request;

class ClinicaController extends Controller
{
    public function index()
    {
        $clinicas = Clinica::all();

        return view('clinica.list')->with(['clinicas'=> $clinicas]);
    }

    /**
     * Carrega o formulário
     */
    public function create()
    {
        return view('clinica.form');
    }

    /**
     * Salva os dados do formulário
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'contato'=>'required',
            'email'=>'required',
            'endereco'=>'required',
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'contato.required'=>"O :attribute é obrigatorio!",
            'email.required'=>"O :attribute é obrigatorio!",
            'endereco.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['nome'=> $request->nome,
            'contato'=> $request->contato,
            'email'=> $request->email,
            'endereco'=>$request->endereco,
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário

        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/clinica/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Clinica::create($dados); //ou  $request->all()

        return redirect('clinica')->with('success', "Cadastrado com sucesso!");
    }

    /**
     * Carrega apenas 1 registro da tabela
     */
    public function show(Clinica $clinica)
    {
        //
    }

    /**
     * Carrega o formulário para edição
     */
    public function edit($id)
    {
        $clinica = Clinica::find($id); //select * from matricula where id = $id

        return view('clinica.form')->with([
            'clinica'=> $clinica
        ]);
    }

    /**
     * Atualiza os dados do formulário
     */
    public function update(Request $request, Clinica $clinica)
    {
        $request->validate([
            'nome'=>'required',
            'contato'=>'required',
            'email'=>'required',
            'endereco'=>'required',
        ],[
            'nome.required'=>"O :attribute é obrigatorio!",
            'contato.required'=>"O :attribute é obrigatorio!",
            'email.required'=>"O :attribute é obrigatorio!",
            'endereco.required'=>"O :attribute é obrigatorio!",
        ]);

        $dados = ['nome'=> $request->nome,
            'contato'=> $request->contato,
            'email'=> $request->email,
            'endereco'=>$request->endereco,
            'imagem'=>$request->imagem
        ];

        $imagem = $request->file('imagem');
        //verifica se existe imagem no formulário
        if($imagem){
            $nome_arquivo =
            date('YmdHis').'.'.$imagem->getClientOriginalExtension();

            $diretorio = "imagem/produto/";
            //salva imagem em uma pasta do sistema
            $imagem->storeAs($diretorio,$nome_arquivo,'public');

            $dados['imagem'] = $diretorio.$nome_arquivo;
        }

        Clinica::updateOrCreate(
            ['id'=>$request->id],
            $dados);

        return redirect('clinica')->with('success', "Atualizado com sucesso!");

    }

    /**
     * Remove o registro do banco de dados
     */
    public function destroy($id)
    {
        $clinica = Clinica::findOrFail($id);

        $clinica->delete();

        return redirect('clinica')->with('success', "Removido com sucesso!");
    }
    /**
     * pesquisa e filtra o registro do banco de dados
     */
    public function search(Request $request)
    {
        if(!empty($request->valor)){
            $clinicas = Clinica::where(
                $request->tipo,
                 'like' ,
                "%". $request->valor."%"
                )->get();
        } else {
            $clinicas = Clinica::all();
        }

        return view('clinica.list')->with(['clinicas'=> $clinicas]);
    }

    public function report(){
            //select * from matricula order by nome
            $clinicas = Clinica::orderBy('nome')->get();

            $data = [
                'title'=>"Relatorio Listagem de Clínicas",
                'clinicas'=> $clinicas
            ];

            $pdf = PDF::loadView('clinica.report',$data);
            //$pdf->setPaper('a4', 'landscape');
           // dd($pdf);

            return $pdf->download("listagem_clinicas.pdf");
    }

}
