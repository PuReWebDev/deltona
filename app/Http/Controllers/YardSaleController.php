<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\YardSale;
use Illuminate\Support\Facades\App;

class YardSaleController extends Controller
{
    /**
     * YardSaleController constructor.
     */
    public function __construct()
    {
        App::setLocale('en');
        // TODO: Fetch the value dynamically from the user's profile.
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(YardSale $yardSale)
    {
        return view('yardsales.index', ['yardSales' => app(YardSale::class)->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('yardsales.create');
    }

    /**
     * @param \App\Http\Requests\StoreYardSale $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Requests\StoreYardSale $request)
    {
        return redirect()->action('YardSaleController@show',
            ['id' => app(YardSale::class)->create($request->all())->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('yardsales.show', ['yardSale' => app(YardSale::class)->findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('yardsales.edit', ['yardSale' => app(YardSale::class)->findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return redirect()->action('YardSaleController@show',
            ['id' => app(YardSale::class)->where('id', $id)->update($request->all())->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
