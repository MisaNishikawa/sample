<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('tasks.update',['id'=>$task->id]) }}"method='POST'>
    @method('put')
    @csrf
        <input type="tel" name="tel" value="{{ old('tel',$task->tel) }}">
        @error('tel')
            {{ $message }}

        @enderror
        <button type="submit">追加</button>
    </form>
</body>
</html>