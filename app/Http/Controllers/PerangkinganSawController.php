<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerangkinganSawStore;
use App\PerangkinganSaw;
use Illuminate\Http\Request;

class PerangkinganSawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkingansaw = PerangkinganSaw::all();
        return view('perangkingansaw.index', compact('perangkingansaw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perangkingansaw.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerangkinganSawStore $request)
    {
        $data = $request->except('_token');
        PerangkinganSaw::create($data);

        return redirect(route('perangkingansaw.index'))->with('success', 'success create data');
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
        $data = PerangkinganSaw::find($id);
        return view('perangkingansaw.edit', compact('data'));
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
        $data = $request->except(['_token', '_method']);
        PerangkinganSaw::where('id', $id)->update($data);

        return redirect()->back()->with('success', 'success update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PerangkinganSaw::find($id);
        $data->delete();

        return redirect(route('perangkingansaw.index'))->with('success', 'success delete data');
    }
}
