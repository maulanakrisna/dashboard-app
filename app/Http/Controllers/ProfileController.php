<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    //
    public function index(\App\Models\User $user){
      return view('profiles.edit', compact('user'));
      //
    }

    public function edit(User $user)
      {
        // $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
      }

      public function update(\App\Models\User $user){
        $data = request()->validate([
          'nip' => 'required',
          'grade' => 'required',
          'position' => 'required',
          'image' => 'required|image',
        ]);

        if (request('image')){
          $imagePath = (request('image')->store('profile','public'));

          $image = Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
          $image->save();

          $imageArray = ['image' => $imagePath];
        }

          auth()->user()->profile->update(array_merge(
            $data,
            $imageArray ?? []
          ));

        return redirect("/profile/{$user->id}");
      }
}
