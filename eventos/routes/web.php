<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CtPrincipal;
use App\Http\Controllers\CtCriarEvento;
use App\Http\Controllers\CtUpdate;
use App\Http\Controllers\CtNewUser;
use App\Http\Controllers\CtSeeScreen;
use App\Http\Controllers\CtAddUser;
use App\Http\Controllers\CtVisualizaUsuarios;
use App\Http\Controllers\CtAreaAtuacao;
use App\Http\Controllers\CtNovaModalidade;
use App\Http\Controllers\CtNewPalestra;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'CtLogin@exibeIndex')->name('login');
Route::post('/', 'CtLogin@exibeIndex')->name('login');

Route::get('/novo_evento/principal', [CtPrincipal::class, 'carregaDadosPrincipal']);
Route::post('/novo_evento/principal', [CtPrincipal::class, 'carregaDadosPrincipal'])->name('novo_evento.principal');

Route::get('/novo_evento/criar', [CtCriarEvento::class, 'Criar'])->name('criar');
Route::post('/novo_evento/criar', [CtCriarEvento::class, 'Criar'])->name('criar');

Route::get('/novo_evento/newUser', [CtNewUser::class, 'NewUser'])->name('newUser');
Route::post('/novo_evento/newUser', [CtNewUser::class, 'NewUser'])->name('newUser');


Route::get('/novo_evento/{id}', [CtSeeScreen::class, 'CarregaDadosSee'])->name('seeScreen');
Route::post('/novo_evento/{id}', [CtSeeScreen::class, 'CarregaDadosSee'])->name('seeScreen');

Route::get('/novo_evento/update/{id}', [CtUpdate::class, 'Initialize'])->name('update');
Route::post('/novo_evento/update/{id}', [CtUpdate::class, 'Initialize'])->name('update');

Route::get('/novo_evento/addUser/{id}', [CtAddUser::class, 'Initialize'])->name('addUser');
Route::post('/novo_evento/addUser/{id}', [CtAddUser::class, 'Initialize'])->name('addUser');

Route::get('/novo_evento/addPalestras/{id}', [CtNewPalestra::class, 'CarregaDadosPalestra'])->name('addPalestras');
Route::post('/novo_evento/addPalestras/{id}', [CtNewPalestra::class, 'CarregaDadosPalestra'])->name('addPalestras');

Route::get('/novo_evento/usuariosVinculados/{id}', [CtVisualizaUsuarios::class, 'CarregaDadosVisualiza'])->name('usuariosVinculados');
Route::post('/novo_evento/usuariosVinculados/{id}', [CtVisualizaUsuarios::class, 'CarregaDadosVisualiza'])->name('usuariosVinculados');

Route::get('/novo_evento/AreaAtuacao/{id}', [CtAreaAtuacao::class, 'CarregaDadosArea'])->name('areaAtuacao');
Route::post('/novo_evento/AreaAtuacao/{id}', [CtAreaAtuacao::class, 'CarregaDadosArea'])->name('areaAtuacao');

Route::get('/novo_evento/NovaModalidade/{id}', [CtNovaModalidade::class, 'CarregaDadosModalidade'])->name('novaModalidade');
Route::post('/novo_evento/NovaModalidade/{id}', [CtNovaModalidade::class, 'CarregaDadosModalidade'])->name('novaModalidade');
