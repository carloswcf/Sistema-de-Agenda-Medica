<?php

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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/paciente/excluir/{id}', 'PacienteController@excluir')->name('paciente.excluir');
Route::get('/medico/excluir/{id}', 'MedicoController@excluir')->name('medico.excluir');
Route::get('/especialidade/excluir/{id}', 'EspecialidadeController@excluir')->name('especialidade.excluir');
Route::resource('paciente', 'PacienteController');
Route::resource('medico', 'MedicoController');
Route::get('especialidades', 'MedicoController@especialidades')->name('medico.especialidades');
Route::post('addespecialidade', 'MedicoController@addespecialidade')->name('medico.addespecialidade');
Route::resource('especialidade', 'EspecialidadeController');
Route::get('detalhe', 'AgendaController@detalhe')->name('agenda.detalhe');
Route::resource('agenda', 'AgendaController');


