<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//importar o arquivo do controlador
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ClinicaController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\RelacionamentoController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\TrocaBolsaController;
use App\Http\Controllers\DigestaoController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\StatusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    //chamar uma função do controlador
    Route::get('/usuario', [UsuarioController::class, 'index']);

    //carrega uma listagem do banco
    Route::get('/aluno',
        [AlunoController::class, 'index'])->name('aluno.index');

    //chama o formulário do aluno
    Route::get('/aluno/create',
        [AlunoController::class, 'create'])->name('aluno.create');

    //realiza a ação de salvar do formulário
    Route::post('/aluno',
        [AlunoController::class, 'store'])->name('aluno.store');

    //chama o formulário para edição
    Route::get('/aluno/edit/{id}',
        [AlunoController::class, 'edit'])->name('aluno.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/aluno/update/{id}',
        [AlunoController::class, 'update'])->name('aluno.update');

    //chama o método para excluir o registro
    Route::get('/aluno/destroy/{id}',
        [AlunoController::class, 'destroy'])->name('aluno.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/aluno/search',
        [AlunoController::class, 'search'])->name('aluno.search');

    //relatorio
    Route::get('/aluno/report/',
        [AlunoController::class, 'report'])->name('aluno.report');

    //grafico
    Route::get('/aluno/chart/',
        [AlunoController::class, 'chart'])->name('aluno.chart');



    //chamar uma página em HTML
    Route::get('/pagina', function () {
        return view('index');
    });

    //chama um HTML
    Route::get('/teste', function () {
        return "<h4>Olá Mundo Laravel!</h4>";
    });

    Route::get('/dicas', function () {
        return view('dicas/dicas');
    })->middleware(['auth', 'verified'])->name('dicas');

    Route::get('/artigo1', function () {
        return view('dicas/artigos/artigo1');
    })->middleware(['auth', 'verified'])->name('artigo1');

    Route::get('/artigo2', function () {
        return view('dicas/artigos/artigo2');
    })->middleware(['auth', 'verified'])->name('artigo2');

    Route::get('/artigo3', function () {
        return view('dicas/artigos/artigo3');
    })->middleware(['auth', 'verified'])->name('artigo3');

    Route::get('/artigo4', function () {
        return view('dicas/artigos/artigo4');
    })->middleware(['auth', 'verified'])->name('artigo4');

    Route::get('/artigo5', function () {
        return view('dicas/artigos/artigo5');
    })->middleware(['auth', 'verified'])->name('artigo5');
  
    Route::get('/relacionamento',
    [RelacionamentoController::class, 'index'])
    ->name('relacionamento');
    Route::post('/matricula/search',
    [MatriculaController::class, 'search'])->name('matricula.search');
    Route::resource('matricula', MatriculaController::class);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    //rotas agendamento

    //carrega uma listagem do banco
    Route::get('/agendamento',
        [AgendamentoController::class, 'index'])->name('agendamento.index');

    //chama o formulário do agendamento
    Route::get('/agendamento/create',
        [AgendamentoController::class, 'create'])->name('agendamento.create');

    //realiza a ação de salvar do formulário
    Route::post('/agendamento',
        [AgendamentoController::class, 'store'])->name('agendamento.store');

    //chama o formulário para edição
    Route::get('/agendamento/edit/{id}',
        [AgendamentoController::class, 'edit'])->name('agendamento.edit');

    //realiza a ação de atualizar os dados do formulário
    Route::put('/agendamento/update/{id}',
        [AgendamentoController::class, 'update'])->name('agendamento.update');

    //chama o método para excluir o registro
    Route::get('/agendamento/destroy/{id}',
        [AgendamentoController::class, 'destroy'])->name('agendamento.destroy');

    //chama o método para serch para pesquisar e filtrar o registro da listagem
    Route::post('/agendamento/search',
        [AgendamentoController::class, 'search'])->name('agendamento.search');

    //relatorio
    Route::get('/agendamento/chart/',
        [AgendamentoController::class, 'chart'])->name('agendamento.chart');


    //rotas clinicas

    //carrega uma listagem do banco
    Route::get('/clinica',
    [ClinicaController::class, 'index'])->name('clinica.index');

//chama o formulário do clinica
Route::get('/clinica/create',
    [ClinicaController::class, 'create'])->name('clinica.create');

//realiza a ação de salvar do formulário
Route::post('/clinica',
    [ClinicaController::class, 'store'])->name('clinica.store');

//chama o formulário para edição
Route::get('/clinica/edit/{id}',
    [ClinicaController::class, 'edit'])->name('clinica.edit');

//realiza a ação de atualizar os dados do formulário
Route::put('/clinica/update/{id}',
    [ClinicaController::class, 'update'])->name('clinica.update');

//chama o método para excluir o registro
Route::get('/clinica/destroy/{id}',
    [ClinicaController::class, 'destroy'])->name('clinica.destroy');

//chama o método para serch para pesquisar e filtrar o registro da listagem
Route::post('/clinica/search',
    [ClinicaController::class, 'search'])->name('clinica.search');

//relatorio
Route::get('/clinica/report/',
    [ClinicaController::class, 'report'])->name('clinica.report');

//rotas status

    
Route::get('/digestao',
    [DigestaoController::class, 'index'])->name('digestao.index');

Route::get('/digestao/create',
    [DigestaoController::class, 'create'])->name('digestao.create');

Route::post('/digestao',
    [DigestaoController::class, 'store'])->name('digestao.store');

Route::get('/digestao/edit/{id}',
    [DigestaoController::class, 'edit'])->name('digestao.edit');

Route::put('/digestao/update/{id}',
    [DigestaoController::class, 'update'])->name('digestao.update');

Route::get('/digestao/destroy/{id}',
    [DigestaoController::class, 'destroy'])->name('digestao.destroy');

Route::post('/digestao/search',
    [DigestaoController::class, 'search'])->name('digestao.search');

Route::get('/digestao/report/',
    [DigestaoController::class, 'report'])->name('digestao.report');


Route::get('/exercicio',
    [ExercicioController::class, 'index'])->name('exercicio.index');

Route::get('/exercicio/create',
    [ExercicioController::class, 'create'])->name('exercicio.create');

Route::post('/exercicio',
    [ExercicioController::class, 'store'])->name('exercicio.store');

Route::get('/exercicio/edit/{id}',
    [ExercicioController::class, 'edit'])->name('exercicio.edit');

Route::put('/exercicio/update/{id}',
    [ExercicioController::class, 'update'])->name('exercicio.update');

Route::get('/exercicio/destroy/{id}',
    [ExercicioController::class, 'destroy'])->name('exercicio.destroy');

Route::post('/exercicio/search',
    [ExercicioController::class, 'search'])->name('exercicio.search');

Route::get('/exercicio/report/',
    [ExercicioController::class, 'report'])->name('exercicio.report');

Route::get('/pele',
    [PeleController::class, 'index'])->name('pele.index');

Route::get('/pele/create',
    [PeleController::class, 'create'])->name('pele.create');

Route::post('/pele',
    [PeleController::class, 'store'])->name('pele.store');

Route::get('/pele/edit/{id}',
    [PeleController::class, 'edit'])->name('pele.edit');

Route::put('/pele/update/{id}',
    [PeleController::class, 'update'])->name('pele.update');

Route::get('/pele/destroy/{id}',
    [PeleController::class, 'destroy'])->name('pele.destroy');

Route::post('/pele/search',
    [PeleController::class, 'search'])->name('pele.search');

Route::get('/pele/report/',
    [PeleController::class, 'report'])->name('pele.report');

//rotas trocas

    Route::get('/troca',
    [TrocaBolsaController::class, 'index'])->name('troca.index');

Route::get('/troca/create',
    [TrocaBolsaController::class, 'create'])->name('troca.create');

Route::post('/troca',
    [TrocaBolsaController::class, 'store'])->name('troca.store');

Route::get('/troca/edit/{id}',
    [TrocaBolsaController::class, 'edit'])->name('troca.edit');

Route::put('/troca/update/{id}',
    [TrocaBolsaController::class, 'update'])->name('troca.update');

Route::get('/troca/destroy/{id}',
    [TrocaBolsaController::class, 'destroy'])->name('troca.destroy');

Route::post('/troca/search',
    [TrocaBolsaController::class, 'search'])->name('troca.search');

Route::get('/troca/report/',
    [TrocaBolsaController::class, 'report'])->name('troca.report');

    //rotas status
    Route::get('/status',
    [StatusController::class, 'index'])->name('status.index');

Route::get('/status/create',
    [StatusController::class, 'create'])->name('status.create');

Route::post('/status',
    [StatusController::class, 'store'])->name('status.store');

Route::get('/status/edit/{id}',
    [StatusController::class, 'edit'])->name('status.edit');

Route::put('/status/update/{id}',
    [StatusController::class, 'update'])->name('status.update');

Route::get('/status/destroy/{id}',
    [StatusController::class, 'destroy'])->name('status.destroy');

Route::post('/status/search',
    [StatusController::class, 'search'])->name('status.search');

Route::get('/status/report/',
    [StatusController::class, 'report'])->name('status.report');


});

require __DIR__.'/auth.php';
