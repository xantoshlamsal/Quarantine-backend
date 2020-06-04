<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('country','Api\CountryController');
Route::get('municipality',['uses'=>'Api\MunicipalityController@index']);
Route::get('/country/{id}/province', ['uses' => 'Api\CountryController@provinces']);
Route::get('/province/{id}/district', ['uses' => 'Api\ProvinceController@districts']);
Route::get('/district/{id}/palika', ['uses' => 'Api\DistrictController@palikas']);

