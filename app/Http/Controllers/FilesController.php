<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Files;

class FilesController extends Controller
{
    public function upload(Request $request){
        // Validate the inputs
        $request->validate([
            'name' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'image' => 'mimes:jpeg,bmp,png,pdf,xlx,csv|max:4048', // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $request->file->store('product', 'public');

            // Store the record, using the new file hashname which will be it's new filename identity.
            $files = new Files([
                "name" => $request->get('name'),
                "file_path" => $request->file->hashName()
            ]);
            $files->save(); // Finally, save the record.
        }
        return view('files.upload');
    }

    public function download(){
        $files = Files::all();
        return view('files.download', ['files' => $files]);
    }
}
