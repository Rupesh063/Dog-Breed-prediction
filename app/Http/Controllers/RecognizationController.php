<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class RecognizationController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $validated = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Save the uploaded file to a directory
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Process the uploaded file here
        // ...

        // Redirect to a success page
        return redirect()->back()->with('success', 'Image uploaded successfully.');
    }
}
