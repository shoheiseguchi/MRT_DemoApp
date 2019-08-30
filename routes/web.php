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


Route::get('/', function () {
    return view('welcome');
});

// つよぽん
// 検索ページ
Route::get('/search'         , 'SearchController@search');
Route::post('/search'        , 'SearchController@search');
// 一覧ページ
Route::get('/list'           , 'ListController@list');
// 照会ページ
Route::get('/inquery'        , 'InqueryController@Inquery');
// 登録ページ
Route::get('/contact'        , 'ContactController@edit');
Route::get('/contact_result' , 'ContactresultController@create');
// 更新ページ
Route::get('/update'         , 'UpdateController@edit');
Route::get('/update_result'  , 'UpdateresultController@update');
// 削除ページ
Route::get('/delete'         , 'DeleteController@edit');
Route::get('/delete_result'  , 'DeleteresultController@delete');
// 電卓ページcalc
Route::get('/calc'           , 'CalcController@calc');
Route::post('/calc'          , 'CalcController@calc');
Route::get('/calclog'        , 'CalclogController@calclog');
// 課題1~5
Route::get('/kadai1'         , 'KadaisakamotoController@kadai1');
Route::get('/kadai2'         , 'KadaisakamotoController@kadai2');
Route::get('/kadai3'         , 'KadaisakamotoController@kadai3');
Route::get('/kadai4'         , 'KadaisakamotoController@kadai4');
Route::get('/kadai5'         , 'KadaisakamotoController@kadai5');


//Yuckyのリソースコントローラ
Route::resource('login', 'LoginController');
Route::get('/calcal','CalcalController@index');
//Yuckyの計算機第一弾
Route::resource('calculator', 'CalculatorController');
Route::get('calculator.add','CalculatorController@add');
Route::get('calculator.subtract','CalculatorController@subtract');
Route::get('calculator.multify','CalculatorController@multify');
Route::get('calculator.divide','CalculatorController@divide');
Route::get('calculator.searchAdd', 'CalculatorController@searchAdd');
Route::get('calculator.searchSub', 'CalculatorController@searchSub');
Route::get('calculator.searchMul', 'CalculatorController@searchMul');
Route::get('calculator.searchDiv', 'CalculatorController@searchDiv');
//課題5
Route::resource('answerman','AnswermanController');
Route::get('answerman.answer1','AnswermanController@answer1');
Route::get('answerman.answer2','AnswermanController@answer2');
Route::get('answerman.answer3','AnswermanController@answer3');
Route::get('answerman.answer4','AnswermanController@answer4');
Route::get('answerman.answer5','AnswermanController@answer5');
//MRTのDB用
Route::resource('mrt-db','MRTdbController');
Route::post('mrt-db.second.resultSearch','MRTdbSearchController@search');
Route::get('mrt-db.second.resultSearch','MRTdbSearchController@search');
//図書館作成
Route::resource('yukiLab','yukiLabController');
//sp_mrt関係
Route::resource('SpMrt','SpMrtCrudController', ['only' => ['index', 'create']]);
Route::post('SpMrt.table_list','SpMrtStoreController@store');
Route::get('SpMrt.table_list','SpMrtStoreController@store');
Route::get('SpMrt.DB_list','SpMrtStoreController@index');


// しょう
// 検索ページ
Route::get('/find', 'FindController@find');
// 登録者一覧ページ
Route::get('/findresult', 'FindController@findresult');
// 新規登録ページ
Route::get('/create', 'FindController@create');
// 新規登録結果ページ
Route::get('/store', 'FindController@store');
// 削除確認ページ
Route::get('/destroy', 'FindController@destroy');
// 削除結果ページ
Route::get('/destroyresult', 'FindController@destroyresult');
// 登録情報更新ページ
Route::get('/renew'         , 'FindController@renew');
// 登録情報更新結果ページ
Route::get('/renew_result'  , 'FindController@renew_result');
//詳細確認ページ
Route::get('/details'  , 'FindController@details');
// DENTAKUN のページ
Route::get('/dentakun', 'DentakunController@index');
Route::get('/dentakunresult', 'DentakunController@result');
// DENTAKUN Jrのページ
Route::get('/dentakunjr', 'JrController@index');
Route::get('/dentakunjrresult', 'JrController@result');
//計算履歴一覧ページ
Route::get('/history', 'HistoryController@index');
Route::get('/history_plus', 'HistoryController@plus');
Route::get('/history_minus', 'HistoryController@minus');
Route::get('/history_time', 'HistoryController@time');
Route::get('/history_divide', 'HistoryController@divide');
//課題のページ
Route::get('/index', 'AnswerController@index');
Route::get('/question1', 'AnswerController@question1');
Route::get('/question2', 'AnswerController@question2');
Route::get('/question3', 'AnswerController@question3');
Route::get('/question4', 'AnswerController@question4');
Route::get('/question5', 'AnswerController@question5');
//MRTLPのページ
Route::get('/mrtlp', 'LpController@index');
Route::get('/search_result', 'SearchController@search');

//Books:検索ページ
Route::get('/BookRoom.search','BookController@search');
//Books:一覧ページ
Route::get('/bookRoom','BookController@list');
//Books:新規登録ページ
Route::get('BookRoom.register','BookController@register');
//Books:新規登録確認ページ
Route::get('BookRoom.confirm','BookController@confirm');
Route::post('BookRoom.confirm','BookController@confirm');
//Books:詳細ページ
Route::get('BookRoom.detail'  , 'BookController@details');
//Books:編集ページ
Route::get('BookRoom.edit'  ,'BookController@edit');
Route::get('BookRoom.update','BookController@update');
//Books:削除ページ
Route::get('BookRoom.delete', 'BookController@delete');
//従業員リストのページ
Route::get('employee/list', [
    'uses' => 'EmployeeController@select',
    'as' => 'employee.list'
]);
//お問い合わせ・申し込み入力フォームのページ
Route::get('MRT_form', 'FormController@index');
//お問い合わせ・申し込み入力結果のページ
Route::get('MRT_form.result', 'FormController@result');
//TO DOアプリ（一覧）
Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');



// はばたん
//検索ページ
Route::get('/search_test_h', 'DoctorController@start');
//一覧ページ
Route::post('doctor', 'DoctorController@index');
Route::get('doctor','DoctorController@index');
//登録ページ
Route::get('new_index', 'DoctorController@new_index'); //登録
Route::post('new_confirm', 'DoctorController@new_confirm'); //確認
Route::patch('doctor', 'DoctorController@finish'); //完了
//更新ページ
Route::get('/edit_index{doctor_id}', 'DoctorController@edit_index');
Route::get('/edit_confirm', 'DoctorController@edit_confirm');






// その他
Route::get('/v_bind_test', function () { return view('v_bind_test')->with('test', '変数テスト');});
Route::get('/post_test', 'PostTestController@form');
Route::post('/post_test', 'PostTestController@form');
Route::get('/new', 'NewController@new');
Route::get('/newresult', 'NewController@newresult');




