@extends('layouts.head_common')

<body>
<h1>あだ名変換ツール</h1>
    <div class="login">
        <div class="col-md-4">
            <form method="get" action="{{url('/loginform')}}">
                @csrf

                <div class="form-id">
                    <label>User id: </label>
                    <input type="text" name="id">
                </div>
                <div class="form-id">
                    <label>User name: </label>
                    <input type="text" name="name">
                </div>
                <div class="form-passwprd">
                    <label>PassWord: </label>
                    <input type="text" name="from">
                </div>
                <div class="form-id">
                    <label>User id: </label>
                    <input type="text" name="password">
                </div>
                <button class="btn btn-primary">ログイン</button>
            </form>
        </div>
    </div>
</body>
</html>