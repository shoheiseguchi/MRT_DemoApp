<!doctype html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style_h.css">
    <title>医師検索</title>
</head>
<body>
<h1>医師検索</h1>
<div class="row">
    <div class="col-sm-12">
        <a href="/doctor" class="btn btn-primary" style="margin:20px;">一覧画面</a>
        <a href="/new_index" class="btn btn-primary" style="margin:20px;">新規登録画面</a>
        <a href="/search_test_h" class="btn btn-primary" style="margin:20px;">検索画面</a>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <form action="{{'/doctor'}}" method="post">
                @csrf
                <div class="form-group @if($errors->has('doctor_name')) has-error @endif">
                <label>名前</label>
                <input type="text" size="30" name="doctor_name"  placeholder="アルファベットで入力してください">
                @if($errors->has('doctor_name'))<span class="text-danger">{{ $errors->first('doctor_name') }}</span> @endif
                <br>
                <br>
                <div class="form-group @if($errors->has('birthplace')) has-error @endif">
                <label>出身地</label>
                <input type="text" size="30" name="birthplace"  placeholder="アルファベットで入力してください">
                @if($errors->has('birthplace'))<span class="text-danger">{{ $errors->first('birthplace') }}</span> @endif
                <br>
                <br>
                <div class="form-group @if($errors->has('sex')) has-error @endif">
                <label>性別</label>
                <input type="text" name="sex"  placeholder="'male' or 'female'">
                @if($errors->has('sex'))<span class="text-danger">{{ $errors->first('sex') }}</span> @endif
                <br>
                <br>
                <div class="form-group @if($errors->has('date_of_birth')) has-error @endif">
                <label>生年月日</label>
                <input type="text" size="30" name="date_of_birth"  placeholder="YYYY-MM-DDで入力してください">
                @if($errors->has('date_of_birth'))<span class="text-danger">{{ $errors->first('date_of_birth') }}</span> @endif
                <br>
                <br>
                <input type="submit" value="検索" class="btn btn-info">
            </form>
        </div>
    </div>
</div>
</body>
</html>