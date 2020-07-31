<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Artikel;
use App\Models\ArtikelGallery;
use App\Models\Category;
use App\Models\Comment;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $items = Artikel::with('categories')->orderBy('id','DESC')->take(8)->get();
        $total_artikel = Artikel::count();
        $total_comment = Comment::count();
        
        return view('pages.admin.dashboard')->with([
            'items' => $items,
            'total_artikel' => $total_artikel,
            'total_comment' => $total_comment,
        ]);
    }

    
}
