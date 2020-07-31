<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\ArtikelGallery;
use App\Models\Category;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Http\Request;

use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Artikel::with('categories')->get();

        return view('pages.admin.artikel.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('pages.admin.artikel.create')->with([
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtikelRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        Artikel::create($data);
        return redirect()->route('admin-artikels.index');
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
        $item = Artikel::findOrFail($id);
        $categories = Category::all();

        return view('pages.admin.artikel.edit')->with([
            'item' => $item,
            'categories' => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArtikelRequest $request, $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = Artikel::findOrFail($id);
        $item->update($data);

        return redirect()->route('admin-artikels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Artikel::findOrFail($id);
        $item->delete();

        ArtikelGallery::where('artikels_id', $id)->delete();

       // ProductGallery::where('products_id', $id)->delete();

        return redirect()->route('admin-artikels.index');
    }

    public function gallery(Request $request, $id)
    {
        $artikels = Artikel::findorFail($id);
        $items = ArtikelGallery::with('artikel')
            ->where('artikels_id', $id)
            ->get();

        return view('pages.admin.artikel.gallery')->with([
            'artikels' => $artikels,
            'items' => $items
        ]);
    }
}
