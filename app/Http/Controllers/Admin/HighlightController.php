<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\highlight;
use Illuminate\Http\Request;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.highlights.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.highlights.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\highlight  $highlight
     * @return \Illuminate\Http\Response
     */
    public function edit(highlight $highlight)
    {
        return view('admin.highlights.edit',compact('highlight'));
    }
}
