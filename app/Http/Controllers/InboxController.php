<?php

namespace App\Http\Controllers;

use App\Http\Resources\InboxResource;
use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InboxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return InboxResource::collection(Inbox::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $filename = null;
        // if (request()->has('file')) {
        //     $attachment = request()->file('attachment');
        //     $filename = uniqid() . '.' . $attachment->getClientOriginalExtension();
        //     Storage::disk('attachments')->put($filename, file_get_contents($attachment));
        // }
        $inbox = new Inbox();

        if (request()->input('title')) $inbox->title = request()->title;
        if (request()->input('department')) $inbox->department_id = request()->department;
        if (request()->input('assign')) $inbox->assign_id = request()->assign;
        if (request()->input('cc')) $inbox->cc_id = request()->cc;
        if (request()->input('description')) $inbox->description = request()->description;
        // if ($filename!=null) $inbox->attachment = $filename;

        $inbox->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Inbox $inbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inbox $inbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Inbox $inbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $inbox = Inbox::findOrFail($id);
        $inbox->delete();
        return response('success', 200);
    }
}
