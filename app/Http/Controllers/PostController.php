<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\postModel;

class PostController extends Controller
{
    //웹 최초 진입 시 처리
    public function index(){
        // Illuminate ORM에서 제공하는 함수. orderBy('컬럼', '정렬')->1p당 7개 게시물 출력;
        $postModels = Post::orderBy('created_at', 'desc')->paginate(7); 
        //index.blade.php에서 {!! $postModels->render() !!}와 함께 쓰인다.
        return view('index')->with('postModels', $Post); // postModels. = 폴더명
        // $postModels = Post::all();
        // return view('index',compact('postModels'));
       
    }
    //create 요청
    public function create(){
        return view('create');
         /* foreach ($postModels as $post) 원하는 값만 받아올 수 있으나 굳이 이 방법이 아니어도 될듯
        {
            echo "b_no : " . $post->b_no . "title: " . $post->title . 
                "name: " . $post->name . "u_id : " . $post->u_id;
        } */
    }
    //create한 내용 DB 저장
    public function store(Request $request){
        //유효성 검사를 위한 클래스(라라벨에 기본 내장되어 있음)
        $validator = Validator::make($data = Input::all(), Post::$rules);
        if($validator->fails())//실패 시
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
            //에러 리턴받아서 뒤로 가기 및 에러 확인하도록 유도
        }
        $Post = new Post;
        $Post->title = Input::get('title');
        $Post->title = Input::get('body');
        $Post->save();
        return redirect('/creat');
    }
    //id로 선택된post 내용 출력
    public function show($id){
        $Post = Post::findOrFail($id);
        return view('show', compact('postModels'));
    }
    //post 편집 요청
    public function edit($id){
        $Post = Post::find($id);
        return view('edit', compact('postModels'));
    }
    //post update 요청
    public function update($id){
        $Post = Post::findOrFail($id);
        $validator = Validator::make($data = Input::all(), Post::rules);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }
        $Post->update($data);
        return redirect()->route('index');
    }
    public function destroy($id){
        Post::destroy($id);
        return redirect()->route('index');
    }
    //삭제 요청
    public function delete(Request $request){
        $Post = Post::find($request->id);
        $Post->delete();
        return redirect()->route('index');
    }
}
