<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\User;
class ProfileController extends Controller
{
        public function index()
    {
        $users = User::findOrFail(Auth::id());

        return view('admin.profile', compact('users'));
    }


public function update(Request $request, $id)
{
    request()->validate([
        // 'name'       => 'required|string|min:2|max:100',
        // 'email'      => 'required|email|unique:users,email, ' . $id . ',id',
        'old_password' => 'nullable|string',
        'password' => 'nullable|required_with:old_password|string|confirmed|min:1'
    ]);

    $users = User::find($id);

    $users->username = $request->username;
    $users->email = $request->email;

    if ($request->filled('old_password')) {
        if (Hash::check($request->old_password, $users->password)) {
            $users->update([
                'password' => Hash::make($request->password)
            ]);
        } else {
            return back()
                ->withErrors(['old_password' => __('Please enter the correct password')])
                ->withInput();
        }
    }

    if (request()->hasFile('photo')) {
        if($users->photo && file_exists(storage_path('app/public/photos/' . $users->photo))){
            Storage::delete('app/public/photos/'.$users->photo);
        }

        $file = $request->file('photo');
        $fileName = $file->hashName() . '.' . $file->getClientOriginalExtension();
        $request->photo->move(storage_path('app/public/photos'), $fileName);
        $users->photo = $fileName;
    }


    $users->save();

    return back()->with('status', 'Profile updated!');
}

}

