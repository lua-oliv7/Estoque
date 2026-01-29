<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EntradaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SaidaController;
use Illuminate\Support\Facades\Route;

Route::post('produtos', [ProdutoController::class, 'store']);
Route::get('produtos', [ProdutoController::class, 'index']);
Route::put('produtos', [ProdutoController::class, 'update']);
Route::get('produtos/{id}', [ProdutoController::class. 'show']);
Route::delete('produtos/{id}', [ProdutoController::class, 'delete']);

Route::post('clientes', [ClienteController::class, 'store']);
Route::get('clientes', [ClienteController::class, 'index']);

Route::post('entradas', [EntradaController::class, 'store']);
Route::get('entradas', [EntradaController::class, 'index']);
Route::delete('entradas/{id}', [EntradaController::class, 'delete']);

Route::post('saidas', [SaidaController::class, 'store']);
Route::get('saidas', [SaidaController::class, 'index']);
Route::delete('saidas/{id}', [SaidaController::class, 'delete']);



/*
{
		"id": 1,
		"marca": "A",
		"descricao": "eorughfeo",
		"valor_unitario": "10.00",
		"quantidade_estoque": 100,
		"faixa_etaria_minima": "6",
		"created_at": "2026-01-29T13:09:14.000000Z",
		"updated_at": "2026-01-29T13:09:14.000000Z"
	},
	{
		"id": 2,
		"marca": "B",
		"descricao": "ibgiriwfjwep",
		"valor_unitario": "20.00",
		"quantidade_estoque": 80,
		"faixa_etaria_minima": "5",
		"created_at": "2026-01-29T13:10:24.000000Z",
		"updated_at": "2026-01-29T13:10:24.000000Z"
	},
	{
		"id": 3,
		"marca": "C",
		"descricao": "lwirhfsdjor",
		"valor_unitario": "30.00",
		"quantidade_estoque": 150,
		"faixa_etaria_minima": "7",
		"created_at": "2026-01-29T13:11:10.000000Z",
		"updated_at": "2026-01-29T13:11:10.000000Z"
	},
	{
		"id": 4,
		"marca": "D",
		"descricao": "irgfufnofgpgb",
		"valor_unitario": "40.00",
		"quantidade_estoque": 270,
		"faixa_etaria_minima": "4",
		"created_at": "2026-01-29T13:11:37.000000Z",
		"updated_at": "2026-01-29T13:11:37.000000Z"
	},
	{
		"id": 5,
		"marca": "E",
		"descricao": "irkqjwhrib",
		"valor_unitario": "50.00",
		"quantidade_estoque": 190,
		"faixa_etaria_minima": "3",
		"created_at": "2026-01-29T13:12:02.000000Z",
		"updated_at": "2026-01-29T13:12:02.000000Z"
	},
	{
		"id": 6,
		"marca": "F",
		"descricao": "jbofjvfnfkvf",
		"valor_unitario": "60.00",
		"quantidade_estoque": 320,
		"faixa_etaria_minima": "12",
		"created_at": "2026-01-29T13:12:34.000000Z",
		"updated_at": "2026-01-29T13:12:34.000000Z"
	}
*/

/*
{
		"id": 1,
		"nome": "A",
		"cpf": "39457439873",
		"idade": 5,
		"created_at": "2026-01-29T13:14:17.000000Z",
		"updated_at": "2026-01-29T13:14:17.000000Z"
	},
	{
		"id": 2,
		"nome": "B",
		"cpf": "39575983416",
		"idade": 9,
		"created_at": "2026-01-29T13:14:50.000000Z",
		"updated_at": "2026-01-29T13:14:50.000000Z"
	},
	{
		"id": 3,
		"nome": "C",
		"cpf": "395759808675",
		"idade": 10,
		"created_at": "2026-01-29T13:15:27.000000Z",
		"updated_at": "2026-01-29T13:15:27.000000Z"
	},
	{
		"id": 4,
		"nome": "D",
		"cpf": "3982608675",
		"idade": 16,
		"created_at": "2026-01-29T13:15:53.000000Z",
		"updated_at": "2026-01-29T13:15:53.000000Z"
	},
	{
		"id": 5,
		"nome": "E",
		"cpf": "3982408645",
		"idade": 4,
		"created_at": "2026-01-29T13:16:27.000000Z",
		"updated_at": "2026-01-29T13:16:27.000000Z"
	},
	{
		"id": 6,
		"nome": "F",
		"cpf": "39839457957",
		"idade": 6,
		"created_at": "2026-01-29T13:16:42.000000Z",
		"updated_at": "2026-01-29T13:16:42.000000Z"
	}
*/