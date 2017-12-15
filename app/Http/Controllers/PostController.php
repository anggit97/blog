<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Post;
use App\category;
use App\Tag;

class PostController extends Controller
{

    public function getHome(){
        $post = Post::orderBy('id','desc')->paginate(15);
        return view('welcome',['posts' => $post]);
    }

    public function getPost(){
    	$post = Post::all()->sortByDesc('id');

    	return view('post',['posts' => $post]);
    }

    public function createPost(Request $request){
        $categories = category::all();
        $tags = Tag::all();
    	return view('create-post',['categories'=>$categories,'tags'=>$tags]);
    }

    public function createPostProcess(Request $request){
    	$this->validate($request,[
    		'title' => 'required|max:150',
    		'body' => 'required',
            'category' => 'required'
    	]);

    	$file = $request->file('image');
    	$filename = $request['title'].'.jpg';

    	$post = new Post();
    	$post->title = $request['title'];
    	$post->body = $request['body'];
        $post->category_id = $request['category'];
    	$post->post_image = $filename;
    	$post->user_id = Auth::user()->id;
        $post->slug_title = str_slug($request['title']);
    	$post->save();

    	if ($file) {
    		Storage::disk('local')->put($filename,File::get($file));
    	}

    	return redirect()->route('post')->with(['message'=>'Berhasil Simpan Post Baru']);
    }

    public function getPostImage($filename){
    	$file = Storage::disk('local')->get($filename);
    	return new Response($file,200);
    }

    public function editPost($id){
        $post = Post::find($id);
        $categories = category::all();
        return view('edit-post',['post'=>$post,'categories'=>$categories]);
    }

    public function editPostProcess(Request $request){
        $this->validate($request,[
            'title' => 'required|max:150',
            'body' => 'required',
            'category' => 'required'
        ]);

        $file = $request->file('image');
        $filename = $request['title'].'.jpg';

        $post = Post::find($request['id']);
        $post->title = $request['title'];
        $post->body = $request['body'];
        $post->post_image = $filename;
        $post->user_id = Auth::user()->id;
        $post->category_id = $request['category'];
        $post->slug_title = str_slug($request['title']);
        $post->update();

        if ($file) {
            Storage::disk('local')->put($filename,File::get($file));
        }

        return redirect()->route('edit.post',['id'=>$request['id']])->with(['message'=>'Berhasil Perbaharui Post!']);
    }

    public function deletePost($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post')->with(['message'=>'Berhasil Hapus Post ']);
    }

    public function detailPost($slug){
        $post = Post::where('slug_title',$slug)->first();
        return view('detil-post',['post'=>$post]);
    }

    public function getDashboardCategory(){
        $categories = category::all()->sortByDesc('id');

        return view('dashboard-category',['categories'=>$categories]);
    }

    public function createCategory(Request $request){
        $this->validate($request,[
            'category_name' => 'required|unique:categories',
            'desc' => 'required|min:20'
        ]);

        $file = $request->file('image');
        $filename = $request['category_name'].'.jpg';

        $category = new category();
        $category->category_name = $request['category_name'];
        $category->desc = $request['desc'];
        $category->img = $filename;
        $category->save();

        if ($file) {
            Storage::disk('local')->put($filename,File::get($file));
        }

        return redirect()->route('dashboard.category')->with(['message' => 'Berhasil buat category baru!']);
    }

    public function editCategory($id){
        $category = category::find($id);

        return view('edit-category',['category'=>$category]);
    }

    public function editCategoryProcess(Request $request){
        $this->validate($request,[
            'category_name' => 'required|max:150',
            'desc' => 'required|min:20'
        ]);

        $file = $request->file('image');
        $filename = $request['category_name'].'.jpg';

        $category = category::find($request['id']);
        $category->category_name = $request['category_name'];
        $category->desc = $request['desc'];
        $category->img = $filename;
        $category->update();

        if ($file) {
            Storage::disk('local')->put($filename,File::get($file));
        }

        return redirect()->route('edit.category',['id'=>$request['id']])->with(['message'=>'Berhasil Ubah Kategory']);
    }

    public function getTag(){
        $tags = Tag::all();
        return response()->json($tags,200);
    }
}
