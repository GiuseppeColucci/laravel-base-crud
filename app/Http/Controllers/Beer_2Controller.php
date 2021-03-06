<?php
//  QUESTO è IL CONTROLLO DELLA CRUD!!!!!!!!!!!!!!!!!!!!!!!!!!!!
namespace App\Http\Controllers;

use App\Beer;
use Illuminate\Http\Request;

class Beer_2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers=Beer::all();
        return view('home', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $beer=new Beer();
        $beer->title=$data['title'];
        $beer->info=$data['info'];
        $beer->price=$data['price'];
        $beer->cover=$data['cover'];
        $beer->save();

        $user = Beer::orderBy('id', 'desc')->first();
        return redirect()->route('beers.show', $user);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $Beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $Beer)
    {
        return view('show',compact('Beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $Beer
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $Beer)
    {
        return view('edit', compact('Beer'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $Beer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $Beer)
    {

        $Beer->delete();
        return redirect()->route('beers.index');
    }
}
