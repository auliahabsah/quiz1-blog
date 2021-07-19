<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Post::all();
        return view('post.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.add');
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
                'post_tanggal' => 'bail|required|unique:tb_post',
                'post_judul' => 'required'
            ],
            [
                'post_tanggal.required' => 'Tanggal wajib diisi',
                'post_tanggal.unique' => 'Tanggal sudah ada',
                'post_judul.required' => 'Judul wajib diisi'
            ]
            );
    
    Post::create([
        'post_tanggal' => $request->post_tanggal,
        'post_judul' => $request->post_judul,
        'post_text' => $request->post_text,
        'post_category_id' => $request->post_category_id
    ]);

    return redirect('/post');
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
        $row = Post::findOrFail($id);
        return view('post.edit', compact('row'));
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
                'post_tanggal' => 'bail|required',
                'post_judul' => 'required'
            ],
            [
                'post_tanggal.required' => 'Tanggal wajib diisi',
                'post_judul.required' => 'Judul wajib diisi'
            ]
            );

            $row = Post::findOrFail($id);
            $row->update([
                'post_tanggal' => $request->post_tanggal,
                'post_judul' => $request->post_judul,
                'post_text' => $request->post_text,
                'post_category_id' => $request->post_category_id,

            ]);

            return redirect('/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Post::findOrFail($id);
        $row->delete();

        return redirect('/post');
    }
}
