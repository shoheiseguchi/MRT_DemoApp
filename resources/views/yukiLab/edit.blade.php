<form action="/yukiLab/{{$yucky_books->id}}" method="post" class="form-horizontal" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group @if($errors->has('author_name')) has-error @endif">
        <label for="author_name" class="col-md-3 control-label">AUTHOR NAME</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="author_name" name="author_name" value="{{$yucky_books->author_name}}">
            @if($errors->has('author_name'))<span class="text-danger">{{ $errors->first('author_name') }}</span> @endif
        </div>
    </div>
    <div class="form-group @if($errors->has('book_title')) has-error @endif">
        <label for="book_title" class="col-md-3 control-label">BOOK TITLE</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="book_title" name="book_title" value="{{$yucky_books->book_title}}">
            @if($errors->has('book_title'))<span class="text-danger">{{ $errors->first('book_title') }}</span> @endif
        </div>
    </div>

    <div class="form-group @if($errors->has('release_date')) has-error @endif">
        <label for="release_date" class="col-md-3 control-label">RELEASE DATE</label>
        <div class="col-sm-9">
            <input type="date" class="form-control" id="release_date" name="release_date" min="1950-07-01" max="2019-07-31" value="{{$yucky_books->release_date}}">
            @if($errors->has('release_date'))<span class="text-danger">{{ $errors->first('release_date') }}</span> @endif
        </div>
    </div>

    <div class="form-group @if($errors->has('image_url')) has-error @endif">
        <label for="release_date" class="col-md-3 control-label">画像内容</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" id="image_url" name="image_url" >
            @if($errors->has('image_url'))<span class="text-danger">{{ $errors->first('image_url') }}</span> @endif
        </div>
    </div>



    <div class="form-group @if($errors->has('lending_situation')) has-error @endif">
        <label for="lending_situation" class="col-md-3 control-label">RELEASE DATE</label>
        <div class="col-sm-9">
            <input class="form-check-input" type="checkbox" name="lending_situation" value="1">貸出中
            <input class="form-check-input" type="checkbox" name="lending_situation" value="2">在庫あり
            <input class="form-check-input" type="checkbox" name="lending_situation" value="3">紛失中
            @if($errors->has('lending_situation'))<span class="text-danger">{{ $errors->first('lending_situation') }}</span> @endif
        </div>
    </div>

    <div class="col-md-offset-3 text-center"><button class="btn btn-primary">確認</button></div>
</form>



