<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
</head>
<body>
<div class="container">
    <h1>NameMaker</h1>

    <div class="row">
        <div class="col-sm-12">
            <a href="/contact" class="btn-square-slant" style="margin:20px;">新規登録</a>
            <a href="/search" class="btn-square-slant" style="margin:20px;">検索画面に戻る</a>
            <a href='/alldelete?&name={{$request->name}}&from={{$request->from}}&sex={{$request->sex}}&birthday={{$request->birthday}}' class="btn-square-slant" style="margin:20px;">全件削除</a>
        </div>
    </div>
    <p class="alldelete">{{$message}}</p>
    <div class="row1">
        <form method="get">
            @csrf
            <div class="form-group">
                <table>
                    <tr>
                        <th>選択</th>
                        <th>No</th>
                        <th>名前</th>
                        <th>出身地</th>
                        <th>性別</th>
                        <th>生年月日</th>
                        <th>照会画面</th>
                        <th>更新画面</th>
                        <th>削除画面</th>
                    </tr>
                    @foreach ($search as $search)
                        <tr>
                            <td><input type="checkbox" class="form-control" name="flug"></td>
                            <td>{{$no++}}</td>
                            <td>{{$search -> name}}</td>
                            <td>{{$search -> from}}</td>
                            <td>{{$search -> sex}}</td>
                            <td>{{$search -> birthday}}</td>
                            <td><a href='/inquery?id={{$search->id}}' class="btn-square-pop">詳細</a></td>
                            <td><a href='/update?id={{$search->id}}' class="btn-square-pop">更新</a></td>
                            <td><a href='/delete?id={{$search->id}}' class="btn-square-pop">削除</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </form>
    </div>
</div>
</body>
</html>