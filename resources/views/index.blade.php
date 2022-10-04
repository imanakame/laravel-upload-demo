<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

@if($bookFile)
<img src="{{ $bookFile }}" width="25%">
@endif

<form method="POST" action="/upload" enctype="multipart/form-data">
    @csrf
    <input type="file" id="file" name="file" class="form-control">
    <button type="submit">アップロード</button>
</form>

</body>
</html>
