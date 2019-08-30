<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Nullable;

class FormController extends Controller
{
    //お問い合わせ入力画面
    public function index()
    {
        return view('MRT_form.index');
    }

    //お問い合わせ入力結果画面
    public function result(Request $request)
    {
        //バリデーション
        $request->validate([
                'customer' => 'required'
                , 'radio' => 'required'
                , 'postcode' => ['required', 'regex:/^([0-9]{3}-[0-9]{4})$/']
                , 'prefectures' => 'required'
                , 'city' => 'required'
                , 'block_number' => 'required'
                , 'tel' => ['required', 'regex:/^([0-9]{3}-[0-9]{4}-[0-9]{4})$/']
                , 'fax' => ['nullable','regex:/^([0-9]{3}-[0-9]{4}-[0-9]{4})$/']

            ]
            , [
                'customer.required' => 'この質問は必須です'
                , 'postcode.required' => 'この質問は必須です'
                , 'radio' => 'この質問は必須です'
                , 'postcode.regex' => '000-0000の形式で入力してください'
                , 'prefectures.required' => 'この質問は必須です'
                , 'city.required' => 'この質問は必須です'
                , 'block_number.required' => 'この質問は必須です'
                , 'tel.required' => 'この質問は必須です'
                , 'tel.regex' => '000-0000-0000の形式で入力してください'
                , 'fax.regex' => '000-0000-0000の形式で入力してください'
            ]);
        //入力した値を取得
        $entered = new Customer();
        $entered -> customer = $request -> input('customer');
        $entered -> radio    = $request -> input('radio');
        $entered -> postcode = $request -> input('postcode');
        $entered -> prefectures = $request -> input('prefectures');
        $entered -> city = $request -> input('city');
        $entered -> block_number = $request -> input('block_number');
        $entered -> building_name_or_apartment_number = $request -> input('building_name_or_apartment_number');
        $entered -> tel = $request -> input('tel');
        $entered -> fax = $request -> input('fax');

        //入力した値をDBに保存
        $entered -> save();

        //全てのデータを取得
        $all_get_data = Customer::all();

        return view('MRT_form.result', compact('all_get_data'));
    }
}
