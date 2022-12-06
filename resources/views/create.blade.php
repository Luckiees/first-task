@extends('layout')
@section('content')
    <form method="POST" action="{{ route('create.store') }}">
    @crsf
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="id" name="number" value="{$id}" readonly>{{-- id = 글번호(삭제 시 번호가 비지 않도록 업데이트 후 적용되게끔 구현할 것 염두해두기) --}}
        <input type="text" name="u_id" readonly>
        <input type="text" name="title">
        <input type="date" name="date" value=""> {{-- timestamp형식 <-> datetime형식 변환(초단위) $today=date("ymd"); 221225형식 --}}
            <textarea name="content" rows="4"></textarea>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @endif
        <input type="submit" value="만들기" onclick="if($this->confirm('글을 등록하시겠습니까?')==yes ? 
                    'true = location.href='{{ Route('list') }}';' : 'false = location.href='history.back();'')">
        <input type="reset" value="초기화">
        <input type="button" value="돌아가기" onclick="location.href='{{ route('index') }}'"> 
    </form>
@stop