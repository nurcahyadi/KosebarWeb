<?php

namespace App\Http\Controllers;

use App\item;
use Illuminate\Http\Request;
use Auth;
use Storage;

class ItemController extends Controller
{
  public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.tampilanadmin',['data'=>item::where('user_id',Auth::user()->id)->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $path = Storage::disk('public')->put('item',$request->photo);
      item::create([
      'user_id' => $request->user_id,
      'name' => $request->name,
      'stock' => $request->stock,
      'description' => $request->description,
      'photo' => $path,
      'location' => $request->location,
      'price' => $request->price
    ]);

    return redirect(route('item.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
      return view('item.show',['data'=>$item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        return view('item.edit',['data'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, item $item)
    {
      if ($request->photo) {
        $path = Storage::disk('public')->put('item',$request->photo);
      } else {
        $path = $item->photo;
      }

    $item->name = $request->name;
    $item->stock = $request->stock;
    $item->description = $request->description;
    $item->location = $request->location;
    $item->price = $request->price;
    $item->photo = $path;
    $item->save();

    return redirect(route('item.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
      Storage::disk('public')->delete($item->photo);
    $item->delete();
    // $request->session()->flash('status', 'Data '.$barang->name.'telah di tambahakan');
    return redirect(route('item.index'));
    }
}
