<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\User;

class PostController extends Controller
{

 
    public function create(){
        return view('profile.store');
    }

    public function store(){

       $data = request()->validate([
            'file' => ['required', 'file', 'mimes:jpeg,png,jpg,gif,bmp,svg,avif']
        ]);

        $imgPath = request()->file('file')->store('uploads', 'public');

        $user = Auth::user();
        $user->posts()->create([
            'user_id' => $user->id,
            'img' => $imgPath
        ]);

        return redirect('/profile/view');
    }

    public function delete($id){

        $post = Post::find($id);
        $post->delete();  
        return redirect()->route('profile.view');

    }
}
