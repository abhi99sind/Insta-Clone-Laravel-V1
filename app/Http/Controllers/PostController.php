<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function index() //For Showing Posts
    {
        $users = auth()->user()->following()->pluck('profiles.user_id');
        $posts = Post::whereIn('user_id',$users)->latest()->paginate(3);

        return view('insta',compact('posts'));
    }

    public function create()
    {
        return view('forms.create');
    }
    public function stores()
    {
        $data = request()->validate([
            'caption' => 'required',
            'img' => 'required|image',
        ]);
        $imagePath = request('img')->store('uploads','public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();
        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'img' => $imagePath,
        ]);
        return redirect('/profiles/'.auth()->user()->id);
    }
    public function show(\App\Post $po)
    {
        return view('show',compact('po'));
    }
}
