<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Artikel;
use App\Models\Comment;
use App\Models\ArtikelGallery;
use App\Http\Requests\CommentRequest;
use App\Models\Category;

class DashboardController extends Controller
{
    public function index()
    {
        $artikels = Artikel::with('categories','galleries')->orderBy('id','DESC')->limit(8)->get();
        $categories = Category::all();

        return view('pages.dashboard')->with([
            'artikels' => $artikels,
            'categories' => $categories,
        ]);
    }

    public function show(Request $request, $slug)
    {
        $artikels = Artikel::with('categories','comments')->where('slug', $slug)->firstOrFail();
        $items = ArtikelGallery::with('artikel')
            ->where('artikels_id', $artikels->id)
            ->get();
        
        
        $categories = Category::all();

        return view('pages.read')->with([
            'artikels' => $artikels,
            'items' => $items,
            'categories' => $categories,
        ]);
    }

    public function eye(Request $request, $category)
    {
        $category_id = Category::where('category',$category)->firstOrFail();
        $artikels = Artikel::with('categories','galleries')->where('category_id', $category_id->id)->orderBy('id','DESC')->get();
        
        $categories = Category::all();

        return view('pages.eye')->with([
            'category_id' => $category_id,
            'artikels' => $artikels,
            'categories' => $categories,
        ]);
    }

    public function all()
    {
        $artikels = Artikel::with('categories','galleries')->orderBy('id','DESC')->get();
        $categories = Category::all();

        return view('pages.all')->with([
            'artikels' => $artikels,
            'categories' => $categories,
        ]);
    }

    public function addcomment(CommentRequest $request)
    {
        $data = $request->all();

        Comment::create($data);
        return redirect()->back();
    }

}
