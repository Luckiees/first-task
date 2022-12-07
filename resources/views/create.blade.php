@extends('layout')
@section('content')
    <form method="POST" action="/list"> {{-- /create --}}
        @csrf
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <label for="title">제목</label>
        <hr> 
        <p><input type="text" name="title" id="title"></p>
        <p><label for="content">내용</label></p>
        <p><textarea name="content" cols="30" rows="5"></textarea></p>
        <input type="submit" value="글쓰기">
        <input type="reset" value="초기화">
    </form>
@endsection