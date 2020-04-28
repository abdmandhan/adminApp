<?php

namespace App\Http\Controllers;

use App\Http\Requests\PerankinganAhpStore;
use App\PerankinganAhp;
use Illuminate\Http\Request;

class PerankinganAhpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perankinganahp = PerankinganAhp::all();
        return view('perankinganahp.index', compact('perankinganahp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perankinganahp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PerankinganAhpStore $request)
    {
        $data = $request->except('_token');
        PerankinganAhp::create($data);

        return redirect(route('perankinganahp.index'))->with('success', 'success create data');
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
        $data = PerankinganAhp::find($id);
        return view('perankinganahp.edit', compact('data'));
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
        $data = $request->except(['_method', '_token']);
        PerankinganAhp::find($id)->update($data);

        return redirect()->back()->with('success', 'success edit data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = PerankinganAhp::find($id);
        $data->delete();

        return redirect(route('perankinganahp.index'))->with('success', 'success delete data');
    }
}
