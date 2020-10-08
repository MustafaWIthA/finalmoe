<?php

namespace App\Http\Controllers;

use App\Document;
use App\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentsController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       // dd($request);

        $path = $request->file('document')->store('documents');
       // $path = $request->file('document')->store('/', 'documents');

        // $request->validate([
        //     'document' => 'required', //|mimes:csv,txt,xlx,xls,pdf|max:4048',
        //     'project_id'=>'required'
        //     ]);



        //    // $path = $request->file('document')->store('documents');
        //     $path = Storage::putFile('documents', $request->file('document'));
        //     $name ="me";
        //     $type ="c";
        //     $size = 23;
        //     $project_id=$request('project_id');

        $name = $path;
        $type = $request->file('document')->getClientOriginalName();
        $size = Storage::size($path);
        $project_id=$request['project_id'];

        $file= new Document([
            'name' => $name,
            'project_id' => $project_id,
            'type' => $type,
            'size' => $size,
            ]);
        $file->save();


        return redirect()->back()->with('success','the user has been update successfully!');;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documents  $Documents
     * @return \Illuminate\Http\Response
     */
    public function show(Documents $Document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documents  $Documents
     * @return \Illuminate\Http\Response
     */
    public function edit(Documents $Document)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documents  $Documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $Document)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documents  $Documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documents $Document)
    {
        
    }
}
