<?php

namespace App\Http\Controllers;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FileController extends Controller
{
    public function show($custom_name)
    {
        $file = File::where('custom_name', $custom_name)->firstOrFail();
        $path = storage_path('app/' . $file->path);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->download($path, $file->custom_name);
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file',
            'custom_name' => 'required|string|max:255',
        ]);

        $path = $request->file('file')->store('files');

        $file = new File;
        $file->filename = $request->file('file')->getClientOriginalName();
        $file->path = $path;
        $file->custom_name = $request->input('custom_name');
        $file->save();

        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}
