<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Posts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $data = [
            'title'     => 'Dashboard',
        ];

        return view('admin.index', $data);
    }

    public function posts(){
        $data = [
            'title'     => 'Posts',
            'posts'     => Posts::all(),
        ];

        return view('admin.posts.index', $data);
    }

    public function createPosts() {
        return view('admin.posts.create');
    }

    public function prosesCreatePosts(Request $request) {
        Posts::create([
            'title'         => $request->title,
            'content'       => $request->content,
            'date'          =>  new Carbon($request->date),
            'username'    => session('username'),
        ]);

        return redirect()->to('admin/posts');
    }

    public function updatePosts($id) {
        $data = [
            'posts'     => Posts::where('idpost', $id)->first()
        ];

        return view('admin.posts.update', $data);
    }

    public function prosesUpdatePosts(Request $request) {
        $post = Posts::where('idpost', $request->id)->first();

        $post->update([
            'title'         => $request->title,
            'content'       => $request->content,
            'date'          =>  new Carbon($request->date),
            'username'    => session('username'),
        ]);

        return redirect()->to('admin/posts');
    }

    public function deletePosts($id){
        $post = Posts::where('idpost', $id)->first();
        $post->delete();

        return redirect()->to('admin/posts');
    }

    public function accounts(){
        $data = [
            'title'     => 'Accounts',
            'accounts'     => Account::all(),
        ];

        return view('admin.accounts.index', $data);
    }

    public function createAccounts() {
        return view('admin.accounts.create');
    }

    public function prosesCreateAccounts(Request $request) {
        Account::create([
            'username'          => $request->username,
            'name'              => $request->name,
            'role'              => $request->role,
            'password'          =>  Hash::make($request->password),
        ]);

        return redirect()->to('admin/accounts');
    }

    // public function updateAccounts($id) {
    //     $data = [
    //         'posts'     => Account::where('username', $id)->first()
    //     ];

    //     return view('admin.posts.update', $data);
    // }

    // public function prosesUpdatePosts(Request $request) {
    //     $post = Posts::where('idpost', $request->id)->first();

    //     $post->update([
    //         'title'         => $request->title,
    //         'content'       => $request->content,
    //         'date'          =>  new Carbon($request->date),
    //         'username'    => session('username'),
    //     ]);

    //     return redirect()->to('admin/posts');
    // }

    // public function deletePosts($id){
    //     $post = Posts::where('idpost', $id)->first();
    //     $post->delete();

    //     return redirect()->to('admin/posts');
    // }
}

