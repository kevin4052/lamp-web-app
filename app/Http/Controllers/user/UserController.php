<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'date'],
            'email' => 'unique:users,email,'.$request->query('id')
        ]);
        
        
        $user = User::where('id', $request->query('id'))->first();
        $user->firstname = $request->get('firstname');
        $user->lastname = $request->get('lastname');
        $user->dob = $request->get('dob');
        $user->email = $request->get('email');
        $user->save();        

        return redirect("/profile")->with('success', ' User Updated Successfully');
    }
}
