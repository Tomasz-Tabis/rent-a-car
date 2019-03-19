<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::all();
        return view('home')->with('cars', $cars);
    }

    public function contact(){
        return view('contact');
    }

    public function search(Request $request){

        $request->validate([
            'beginDate' => 'required|date',
            'endDate' => 'required|date'
        ]);

        $cars = Car::all();
        $avible = [];
        foreach ($cars as $car){
            if ($car->invoiceRule != NULL){
                $c =  $car->invoiceRule
                    ->whereBetween('begin_date', [date($request->beginDate), date($request->endDate)])
                    ->whereBetween('end_date', [date($request->beginDate), date($request->endDate)]);
                if (count($c) == 0){
                    array_push($avible, $car);
                }
            }
        }
        
        return view('home')->with('cars', $avible);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
