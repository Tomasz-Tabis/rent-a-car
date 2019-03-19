<?php

namespace App\Http\Controllers;

use App\Car;
use App\Customer;
use App\Invoice;
use App\InvoiceRule;
use App\User;
use App\Worker;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function search(Request $request){

        $request->validate([
            'beginDate' => 'required|date',
            'endDate' => 'required|date'
        ]);

        $cars = Car::all();
        $users = Customer::all();
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

        return view('admin/rent/add-rent')->with('cars', $avible)->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/rent/add-rent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reservation                = new Invoice();
        $reservation->invoice_date  = now();
        $reservation->customer_id   = $request->user_id;
        $reservation->worker_id     = Worker::min('id');
        $reservation->save();

        $reservationRule                = new InvoiceRule();
        $reservationRule->invoice_id    = $reservation->id;
        $reservationRule->car_id   = $request->car_id;
        $reservationRule->begin_date    = $request->start_date;
        $reservationRule->end_date      = $request->end_date;
        $reservationRule->save();

        return view('admin/rent/add-rent');
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
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
