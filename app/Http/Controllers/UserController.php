<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if ($request->hasFile('image')){
            User::uploadAvatar($request->image);
            return redirect()->back()->with('message','Image Uploaded.');
        }
        return redirect()->back()->with('error','Image doesn\'t Uploaded.');
    }

    public function index()
    {
        return view('welcome');
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
