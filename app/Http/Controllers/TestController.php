<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Category;

class TestController extends Controller
{
    public function index() {
        // One to One relationship

        // $user = User::first();
        // return $user->contact;

        // $contact = Contact::first();
        // return $contact->user;

        // One to Many

        // $user = User::with('contact', 'posts')->find(1);
        // return $user->toArray();

        // Many To Many
        $categories = Category::all();
        $post = Post::with('categories')->first();
    
       
        // $post->categories()->sync([1, 2]);
        //  $post->categories()->detach([1, 2]);
         // $post->categories()->attach([1, 2]);
        
      
        dd($post->toArray());
    }
}
