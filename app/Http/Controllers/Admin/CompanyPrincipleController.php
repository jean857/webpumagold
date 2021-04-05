<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompanyPrinciple;
use Illuminate\Http\Request;

class CompanyPrincipleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.company_principles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.company_principles.create');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CompanyPrinciple  $companyPrinciple
     * @return \Illuminate\Http\Response
     */
    public function edit(CompanyPrinciple $companyPrinciple)
    {
        return view('admin.company_principles.edit',compact('companyPrinciple'));
    }
}
