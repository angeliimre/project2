<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        @csrf
        <input type="text" name="text" value="{{old('text')}}"/>
        @error("text") {{$message}} @enderror
        <button>Küldés</button>
    </form>
</body>
</html>