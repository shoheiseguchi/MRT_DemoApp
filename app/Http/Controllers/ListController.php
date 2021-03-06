<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Nickname;

class ListController extends Controller
{
    // Listページ
    public function list(Request $request)
    {
        $name = $request->input('name');
        $from = $request->input('from');
        $sex = $request->input('sex');
        $birthday = $request->input('birthday');
        $no = 1;
        $message = '全件削除ボタンは検索条件に該当したデータを対象とし、削除を行います。';

        if($name == NULL and $from == NULL and $sex == NULL and $birthday == NULL) {
            $search = Nickname::all();
        } else {
            $search = Nickname::where('name', 'like', "%$name%")
                ->Where('from', 'like', "%$from%")
                ->Where('sex', 'like', "%$sex%")
                ->Where('birthday', 'like', "%$birthday%")
                ->get();

        }

        return view('list', compact('search', 'no', 'request', 'message'));
    }
}