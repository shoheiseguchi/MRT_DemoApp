<html>
    <head>
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    </head>
    <body>
        <div class="container">
            <h1>NameMaker</h1>

            <div class="row">
                <form method="get">
                    @csrf
                    <div class="form-group">
                        <table>
                            <tr>
                                <th>名前</th><td><input type="text" name="name" value='{{$data -> name}}'>※必須</td>
                            </tr>
                            <tr>
                                <th>出身地</th><td><input type="text" name="name" value='{{$data -> from}}'>※必須</td>
                            </tr>
                            <tr>
                                <th>ニックネーム</th><td><input type="text" name="name" value='{{$data -> nickname}}'>※必須</td>
                            </tr>
                            <tr>
                                <th>性別</th><td><input type="text" name="name" value='{{$data -> sex}}'>※必須</td>
                            </tr>
                            <tr>
                                <th>生年月日</th><td><input type="text" name="name" value='{{$data -> birthday}}'>※必須</td>
                            </tr>
                            <tr>
                                <th>本アプリを利用した理由</th><td><input type="text" name="name" value='{{$data -> reason}}'>※必須</td>
                            </tr>
                        </table>
                    </div>
                    <br>
                    データを更新しました。
                </form>
            </div>
        </div>
    </body>
</html>