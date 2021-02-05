<?php

namespace App\Http\Controllers;

use App\Models\SmmeShortlist;
use Illuminate\Http\Request;

class SmmeShortlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $shortlists = SmmeShortlist::latest()->paginate(5);
        return view('Smmes.index', compact('shortlists'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('smmes.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'first_name' => required,
            'last_name' => required,
            'startup_name' => required,
            'service_product' => required,
            'city',
            'province',
            'support_needed',
            'support_expand',
            'support_other',
            'twitter_handle',
            'email_address'
        ]);

        SmmeShortlist::create($request->all());

        return redirect()->route('smmes.index')->with('success', 'SMME Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SmmeShortlist  $smmeShortlist
     * @return \Illuminate\Http\Response
     */
    public function show(SmmeShortlist $shortlist)
    {
        //
        return view('smmes.show', compact('shortlist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SmmeShortlist  $smmeShortlist
     * @return \Illuminate\Http\Response
     */
    public function edit(SmmeShortlist $shortlist)
    {
        //
        return view('smmes.edit', compact('shortlist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SmmeShortlist  $smmeShortlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SmmeShortlist $shortlistCandidate)
    {
        //
        $request->validate([

        ]);

        $shortlistCandidate->update($request->all());

        return redirect()->route('smmes.index')->with('success', 'SMME Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SmmeShortlist  $smmeShortlist
     * @return \Illuminate\Http\Response
     */
    public function destroy(SmmeShortlist $shortlistCandidate)
    {
        //
        $shortlistCandidate->delete();

        return redirect()->route('smmes.index')->with('success', 'SMME deleted successfully.');
    }
}
