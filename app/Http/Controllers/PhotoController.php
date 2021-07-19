<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Photo::all();
        return view('photo.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photo.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'photo_tanggal' => 'bail|required|unique:tb_photo',
                'photo_judul' => 'required'
            ],
            [
                'photo_tanggal.required' => 'Tanggal wajib diisi',
                'photo_tanggal.unique' => 'Tanggal sudah ada',
                'photo_judul.required' => 'Judul wajib diisi'
            ]
            );
    
    Photo::create([
        'photo_tanggal' => $request->photo_tanggal,
        'photo_judul' => $request->photo_judul,
        'photo_text' => $request->photo_text,
        'photo_post_id' => $request->photo_post_id
    ]);

    return redirect('/photo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Photo::findOrFail($id);
        return view('photo.edit', compact('row'));
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
        $request->validate(
            [
                'photo_tanggal' => 'bail|required',
                'photo_judul' => 'required'
            ],
            [
                'photo_tanggal.required' => 'Tanggal wajib diisi',
                'photo_judul.required' => 'Judul wajib diisi'
            ]);

            $row = Photo::findOrFail($id);
            $row->update([
                'photo_tanggal' => $request->photo_tanggal,
                'photo_judul' => $request->photo_judul,
                'photo_text' => $request->photo_text,
                'photo_post_id' => $request->photo_post_id,

            ]);

            return redirect('/photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photo::findOrFail($id);
        $row->delete();

        return redirect('/photo');
    }
}
