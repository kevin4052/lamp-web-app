<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\User;
use App\Helper\Helper;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $user = User::where('id', $id)->first();
        return view("/photos/create", ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image',
        ]);

        $user = User::where('id', $id)->first();        
        $savedImage = $request->file('image')->storeOnCloudinary('lampWebApp');

        if ($user->photo_id) {
            $photo = Photo::where('id', $user->photo_id)->first();
            $photo->url = $savedImage->getPath();
            $photo->size = $savedImage->getSize();
            $photo->save();

        } else {
            $newPhoto = new Photo();
            $newPhoto->url = $savedImage->getPath();
            $newPhoto->size = $request->file('image')->getSize();
            $newPhoto->save();

            $user->photo_id = $newPhoto->id;
            $user->save();
        }

        return redirect("/profile/{$user->id}")->with('success', 'Profile image successfully saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
