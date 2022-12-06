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
    <input type="button" value="write" onclick="location.href='{{ route('create') }}'">
    @foreach($postModels as $Post) {{-- 일단 여기가 문제인건 맞아, 여기랑 컨트롤러랑 db확인하기! --}}
        <div>
            <a herf="#"><h3>{{ $Post->id }}</h3></a>
            <span>{{ $Post->content }}</span>
            <input type="button" onclick="location.href='{{route('edit', ['id' => $Post->id]) }}'" value="edit">
            <input type="button" onclick="location.href='{{route('delete', ['id' => $Post->id]) }}'" value="delete">
        </div>
    @break
    @endforeach
@stop