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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();



Route::prefix('admin')->name('admin.')->middleware('auth')->group(function(){
    Route::get('/home', 'HomeController@index')->name('home');

});
Route::resource('/','FrontController',['middleware'=>'vistors']);

Route::prefix('scope')->name('scope.')->middleware('vistors')->group(function(){

    Route::get('/fiber','FrontController@fiber')->name('fiber');   
    Route::get('/powersupply','FrontController@power')->name('powersupply');
    Route::get('/substation','FrontController@substation')->name('substation');
    Route::get('/turnkeyprojects','FrontController@turnkey')->name('turnkey');
    Route::get('/subsationworks','FrontController@substationWorks')->name('substationworks');
    Route::get('/backupsystem','FrontController@backup')->name('backup');
    Route::get('/protectiondevice','FrontController@protectionDevice')->name('protectiondevice');
    Route::get('/ohlmaterial','FrontController@Ohlmaterial')->name('Ohlmaterial');
    Route::get('/earthingMaterials','FrontController@EarthingMaterials')->name('EarthingMaterials');
    Route::get('/cablesandAccessories','FrontController@CablesandAccessories')->name('CablesandAccessories');
    Route::get('/meteringandsprotectiondevices','FrontController@meteringProtection')->name('meteringProtection');
});

Route::prefix('company')->name('company.')->middleware('vistors')->group(function(){
    Route::get('/about','FrontController@about')->name('about');
    Route::get('/missionandvision','FrontController@mission')->name('mission');
    Route::get('/missionandvission', 'DownloadController@download')->name('download');

});


Route::get('/gallery','FrontController@gallery')->name('gallery');
Route::get('/contact', 'SendEmailController@index')->name('contact');
Route::post('/sendemail/send', 'SendEmailController@send');
// downlaod file 
