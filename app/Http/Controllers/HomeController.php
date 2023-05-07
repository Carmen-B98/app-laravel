<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Benefit;
use App\Models\Product;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $sliders = Slider::all();
        //$benefits = Benefit::all();
        $benefits = DB::select('SELECT posts.id, posts.title, posts.image, posts.created_at FROM posts INNER JOIN categories ON posts.category_id = 3 GROUP BY posts.id ORDER BY created_at ASC ');
        $products = DB::select('SELECT posts.id, posts.title, posts.excerpt, posts.image, posts.created_at FROM posts INNER JOIN categories ON posts.category_id = 4 GROUP BY posts.id ORDER BY created_at ASC ');
        $bonuses  = DB::select('SELECT posts.id, posts.title, posts.excerpt, posts.created_at, posts.body FROM posts INNER JOIN categories ON posts.category_id = 5 GROUP BY posts.id ORDER BY created_at ASC');
        $sliders = DB::select('SELECT posts.id, posts.image, posts.created_at, posts.excerpt, posts.body FROM posts INNER JOIN categories ON posts.category_id = 6 GROUP BY posts.id ORDER BY created_at ASC');
        return view('pages.home')->with('sliders', $sliders)->with('benefits', $benefits)->with('products', $products)->with('bonuses', $bonuses);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
