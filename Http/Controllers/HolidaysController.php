<?php

namespace Modules\Holidays\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HolidaysController extends Controller
{
    public $holidays2020 = [
        1 => ["1 Jan", "Wed", "New Year's Day"],
        2 => ["9 Apr","Thu", "Maundy Thursday"],
        3 => ["10 Apr","Fri","Good Friday"],
        4 => ["1 May","Fri", "Labour Day"],
        5 => ["29 Jun", "Mon", "Feast of St Peter and St Paul"],
        6 => ["28 Jul", "Tue", "Independence Day"],
        7 => ["29 Jul",	"Wed","Independence Day Holiday"],
        8 => ["30 Aug",	"Sun",	"Santa Rosa de Lima"],
        9 => ["8 Oct",	"Thu",	"Battle of Angamos"],
        10 => ["1 Nov",	"Sun",	"All Saints' Day"],
        11 => ["8 Dec",	"Tue",	"Immaculate Conception"],
        12 => ["25 Dec",	"Fri",	"Christmas Day"]
    ];
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        foreach($this->holidays2020 as $hol) {
            //echo $hol[0];
            foreach($hol as $h) echo $h;
            echo "<br>";
        }
        //return view('holidays::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('holidays::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('holidays::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('holidays::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
