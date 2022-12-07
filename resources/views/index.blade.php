{{-- <!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello world!
  </h1>
</body>
</html> --}}

@extends('layout')
@section('content')

    <input type="button" value="write" onclick="location.href='/create'">
    @foreach($PostModels as $PostModel)
        <div>
            <a herf="#"><h3>{{ $PostModel->id }}</h3></a>
            <span>{{ $PostModel->content }}</span>
            <input type="button" onclick="location.href='{{route('edit', ['id' => $PostModel->id]) }}'" value="edit">
            <input type="button" onclick="location.href='{{route('delete', ['id' => $PostModel->id]) }}'" value="delete">
        </div>
    @endforeach
@endsection