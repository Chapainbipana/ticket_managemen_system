<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;

class AttachmentController extends Controller
{
    public function store(Request $request)
{
    // dd($request);
    $request->validate([
        'ticket_id' => 'required|exists:tickets,id',
        'image' => 'required|string',
    ]);
    //  dd($request);
    // $filePath = $request->file('image')->store('attachments', 'public');

    Attachment::create([
        'ticket_id' => $request->ticket_id,
        'user_id' => auth()->id(),
        'file_path' => $request->image, 
    ]);

    return back()->with('success', 'Attachment uploaded successfully!');
}

}
