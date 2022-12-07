@extends('layout')
@section('content')

    <input type="button" value="write" onclick="location.href='/create'">
        <div>
            {{-- @foreach가 왜 안먹힐까..? --}}
            <h3><a herf="#">목록</a></h3>
            <span></span>
            {{-- <input type="button" onclick="location.href='{{route('edit', ['id' => $PostModel->id]) }}'" value="edit">
            <input type="button" onclick="location.href='{{route('delete', ['id' => $PostModel->id]) }}'" value="delete"> --}}
        </div>
@endsection

{{-- 
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
--}}