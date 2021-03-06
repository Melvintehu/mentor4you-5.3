<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Page;
use App\Photo;
use App\Section;
use App\Http\Requests;

class PageSectionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'pages' => Page::paginate(20),
        ];

        return view('cms.pages.sections.overzicht', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'pages' => Page::pluck('name', 'id'),
        ];

        return view('cms.pages.sections.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $section = Section::create($request->all());

        return redirect('cms/section');

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

        $data =[
            'section' => Section::find($id),
            'pages' => Page::pluck('name', 'id'),
        ];

        return view('cms.pages.sections.update', compact('data'));
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
        Section::find($id)->update($request->all());

        return redirect('cms/section');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Section::find($id)->delete();

        return redirect('cms/section');
    }

    public function addPhoto($id, Request $request)
    {
        // check of er een foto bestaat voor deze nieuws_id
        $section = Section::find($id);

        $photos  = $section->photos;

        if(!$photos->isEmpty()){
            $photos->first()->delete();
        }

        $file =  $request->file('file');

        $name = time() . $file->getClientOriginalName();

        $file->move('section/photos', $name);

        // create a new photo

        $photo = Photo::create(['path' => "/section/photos/{$name}"]);

        $section->photos()->attach($photo->id, ['type' => 'original']);
        return 'done';
    }

}
