<?php

namespace App\Http\Controllers;

use App\Calclog;
use Illuminate\Http\Request;

class CalcController extends Controller
{
    /**
     * 電卓で入力された値の計算処理
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function calc(Request $request)
    {
        // 入力された値を取得
        $data = $request->input('data');

        // 演算子の前後の数値を取得
        $addbeforedata    = preg_replace('/[^0-9]/', '', strstr($data, '+', true));
        $subbeforedata    = preg_replace('/[^0-9]/', '', strstr($data, '-', true));
        $multibeforedata  = preg_replace('/[^0-9]/', '', strstr($data, '×', true));
        $divbeforedata    = preg_replace('/[^0-9]/', '', strstr($data, '÷', true));
        $addafterdata     = preg_replace('/[^0-9]/', '', strstr($data, '+'));
        $subafterdata     = preg_replace('/[^0-9]/', '', strstr($data, '-'));
        $multiafterdata   = preg_replace('/[^0-9]/', '', strstr($data, '×'));
        $divafterdata     = preg_replace('/[^0-9]/', '', strstr($data, '÷'));
        $perdata          = preg_replace('/[^0-9]/', '', strstr($data, '%', true));
        $result           = '';
        $insertdata       = NULL;

        // 入力された演算子に応じて処理
        if (strpos($data,'+') !== false) {

            $result = $addbeforedata + $addafterdata;

            // Collectionのキーと値を結合する
            $collection = collect(['first_figure', 'second_figure', 'operator', 'equal', 'result']);
            $insertdata = $collection->combine([$addbeforedata, $addafterdata, '+', '=', $result])->toArray();

        } else if (strpos($data,'-') !== false) {
            $result = $subbeforedata - $subafterdata;

            // Collectionのキーと値を結合する
            $collection = collect(['first_figure', 'second_figure', 'operator', 'equal', 'result']);
            $insertdata = $collection->combine([$subbeforedata, $subafterdata, '-', '=', $result])->toArray();

        } else if (strpos($data,'×') !== false) {
            $result = $multibeforedata * $multiafterdata;

            // Collectionのキーと値を結合する
            $collection = collect(['first_figure', 'second_figure', 'operator', 'equal', 'result']);
            $insertdata = $collection->combine([$multibeforedata, $multiafterdata, '*', '=', $result])->toArray();

        } else if (strpos($data,'÷') !== false) {
            $result = $divbeforedata / $divafterdata;

            // Collectionのキーと値を結合する
            $collection = collect(['first_figure', 'second_figure', 'operator', 'equal', 'result']);
            $insertdata = $collection->combine([$divbeforedata, $divafterdata, '/', '=', $result])->toArray();

        } else if (strpos($data,'%') !== false) {
            $result = $perdata / '100';
        }

        // 計算処理が存在する場合
        if ($insertdata !== NULL) {
            $savedata = new Calclog();
            $savedata->figuresave($insertdata);
        }

        return view('calc', compact('result'));
    }
}