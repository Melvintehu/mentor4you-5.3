<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;


// Models

use File;
use App\Page;
use App\Classes\Slot;
use App\Section;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
        'pages' => Page::all(),
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

        return redirect('cms/page/' . $section->page_id . '/edit');
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
        $section = Section::find($id);
        $sectionSlots = $section->page->availableSlots();

        // de huidige page_position er aan toevoegen
        if($section->page_position != 0) {
            $slot = new Slot();
            $slot->position = $section->page_position;
            $slot->setPage($section->page);
            $sectionSlots->prepend($slot);
        }

        $data = [
            'section' => $section,
            'page_positions' => $sectionSlots->pluck('position', 'position'),
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
        $section = Section::find($id);
        $section->update($request->all());
        return redirect('cms/page/' . $section->page_id . '/edit');
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $section = Section::find($id);
        $page_id = $section->page_id;
        $section->delete();
        return redirect('cms/page/' . $page_id . '/edit');
    }
}
