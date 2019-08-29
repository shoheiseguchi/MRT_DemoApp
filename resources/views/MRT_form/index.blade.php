<!doctype html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    {{--favicon--}}
    <link rel="shortcut icon" sizes="16x16" href="favicon_qp2.png">
    {{--css--}}
    <link rel="stylesheet" href="css/form.css">
    <title>お問い合わせ・お申込み</title>
</head>
<body>
{{--header--}}
<header>
    <img src="header_img.jpg" id="header_img">
    <img src="MRT_logo.png" id="header_img2">
</header>
{{--main contents--}}
<form method="get" action="{{ url('MRT_form.result') }}"  style="text-align:center; height: 500px; width: auto">
    <div class="content">
        <div>
            <h3 id="inquiry">お問い合わせ・お申込み</h3><br>
            <p>診療報酬ファクタリングに関するお問い合わせ・お申し込みはこちらから</p>
            <p class="color" style="font-size: 15px; margin-right: 87%">*必須</p>
        </div>
        {{--個人情報の取り扱いについて--}}
        <div>
            <h6>「個人情報の取扱いについて（<a href="https://anew-m.com/privacy">https://anew-m.com/privacy</a>）」をお読みいただき、同意の上、下記の登録手続きを行ってください。<span class="color">*</span></h6>
        </div><br>
        {{--「個人情報の取扱いについて」に同意する--}}
        <div>
            <label>
                <input type="radio">
                「個人情報の取扱いについて」に同意する
            </label><br><br><br>
            {{--医療法人様名または病医院様名--}}
            <div @if($errors->has('customer')) class="item" @endif>
                <h5 class="title">医療法人様名または病医院様名<span class="color">*</span></h5>
                <div class="text">
                    <input type="text" class="input_box"  placeholder="回答を入力" name="customer" value="{{ old('customer') }}">
                    @if($errors->has('customer'))<span class="text-danger">{{ $errors->first('customer') }}</span> @endif
                    <span class="focus_line"></span>
                </div>
            </div>
            {{--郵便番号--}}
            <div @if($errors->has('postcode')) class="item" @endif>
                <h5 class="title">郵便番号<span class="color">*</span></h5>
                <p class="example">例）000-0000</p>
                <div class="text">
                    <input type="text" class="input_box"  placeholder="回答を入力" name="postcode" value="{{ old('postcode') }}">
                    <span class="focus_line"></span>
                    @if($errors->has('postcode')) <span class="text-danger">{{$errors->first('postcode')}}</span> @endif
                </div>
            </div>
            {{--住所（都道府県）--}}
            <div @if($errors->has('prefectures')) class="item" @endif>
                <h5 class="title">住所（都道府県）<span class="color">*</span></h5>
                <div class="selected">
                    <select class="cp_sl06" name="prefectures">
                        <option value="">選択</option>
                        <option value="北海道">北海道</option>
                        <option value="青森県">青森県</option>
                        <option value="岩手県">岩手県</option>
                        <option value="宮城県">宮城県</option>
                        <option value="秋田県">秋田県</option>
                        <option value="山形県">山形県</option>
                        <option value="福島県">福島県</option>
                        <option value="茨城県">茨城県</option>
                        <option value="栃木県">栃木県</option>
                        <option value="群馬県">群馬県</option>
                        <option value="埼玉県">埼玉県</option>
                        <option value="千葉県">千葉県</option>
                        <option value="東京都">東京都</option>
                        <option value="神奈川県">神奈川県</option>
                        <option value="新潟県">新潟県</option>
                        <option value="富山県">富山県</option>
                        <option value="石川県">石川県</option>
                        <option value="福井県">福井県</option>
                        <option value="山梨県">山梨県</option>
                        <option value="長野県">長野県</option>
                        <option value="岐阜県">岐阜県</option>
                        <option value="静岡県">静岡県</option>
                        <option value="愛知県">愛知県</option>
                        <option value="三重県">三重県</option>
                        <option value="滋賀県">滋賀県</option>
                        <option value="京都府">京都府</option>
                        <option value="大阪府">大阪府</option>
                        <option value="兵庫県">兵庫県</option>
                        <option value="奈良県">奈良県</option>
                        <option value="和歌山県">和歌山県</option>
                        <option value="鳥取県">鳥取県</option>
                        <option value="島根県">島根県</option>
                        <option value="岡山県">岡山県</option>
                        <option value="広島県">広島県</option>
                        <option value="山口県">山口県</option>
                        <option value="徳島県">徳島県</option>
                        <option value="香川県">香川県</option>
                        <option value="愛媛県">愛媛県</option>
                        <option value="高知県">高知県</option>
                        <option value="福岡県">福岡県</option>
                        <option value="佐賀県">佐賀県</option>
                        <option value="長崎県">長崎県</option>
                        <option value="熊本県">熊本県</option>
                        <option value="大分県">大分県</option>
                        <option value="宮崎県">宮崎県</option>
                        <option value="鹿児島県">鹿児島県</option>
                        <option value="沖縄県">沖縄県</option>
                    </select>
                    <span class="cp_sl06_highlight"></span>
                    <span class="cp_sl06_selectbar"></span>
                </div>
                @if($errors->has('prefectures')) <span class="text-danger">{{$errors->first('prefectures')}}</span> @endif
            </div>
            {{--住所（市区町村）--}}
            <div @if($errors->has('city')) class="item" @endif>
                <h5 class="title">住所（市区町村）<span class="color">*</span></h5>
                <div class="text">
                    <input type="text" class="input_box"  placeholder="回答を入力" name="city" value="{{ old('city') }}">
                    <span class="focus_line"></span>
                    @if($errors->has('city')) <span class="text-danger">{{$errors->first('city')}}</span> @endif
                </div>
            </div>
            {{--住所（丁目番地）--}}
            <div @if($errors->has('block_number')) class="item" @endif>
                <h5 class="title">住所（丁目番地）<span class="color">*</span></h5>
                <div class="text">
                    <input type="text" class="input_box"  placeholder="回答を入力" name="block_number" value="{{ old('block_number') }}">
                    <span class="focus_line"></span>
                    @if($errors->has('block_number')) <span class="text-danger">{{$errors->first('block_number')}}</span> @endif
                </div>
            </div>
            {{--住所（建物名・部屋番号）--}}
            <div>
                <h5 class="title">住所（建物名・部屋番号）<span class="color"></span></h5>
                <div class="text">
                    <input type="text" class="input_box"  placeholder="回答を入力" name="building_name or apartment_number" value="{{ old('building_name or apartment_number') }}">
                    <span class="focus_line"></span>
                </div>
            </div>
            {{--電話番号--}}
            <div @if($errors->has('tel')) class="item" @endif>
                <h5 class="title">電話番号<span class="color">*</span></h5>
                <div class="text">
                    <input type="text" class="input_box"  placeholder="回答を入力" name="tel" value="{{ old('tel') }}">
                    <span class="focus_line"></span>
                    @if($errors->has('tel')) <span class="text-danger">{{$errors->first('tel')}}</span> @endif
                </div>
            </div>
            {{--FAX--}}
            <div @if($errors->has('fax')) class="item" @endif>
                <h5 class="title">FAX<span class="color"></span></h5>
                <p class="example">例）000-0000-0000</p>
                <div class="text">
                    <input type="text" class="input_box"  placeholder="回答を入力" name="fax" value="{{ old('fax') }}">
                    @if($errors->has('fax'))<span class="text-danger">{{ $errors->first('fax') }}</span> @endif
                    <span class="focus_line"></span>
                </div>
            </div>
            {{--送信ボタン--}}
            <div class="">
                <div>
                    <button type="submit" class="btn btn-primary" value="送信">送信</button>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>