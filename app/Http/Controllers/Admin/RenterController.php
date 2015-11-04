<?php

namespace App\Http\Controllers\Admin;

use App\Renter;
use App\Http\Requests;
use App\Http\Requests\RenterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $renters = Renter::all();
        return view('admin.renter.index', compact('renters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.renter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RenterRequest $request)
    {
        //

        /** save data from Renter form to database **/
        $model = new Renter();

        $model->first_name = $request->get('first_name');
        $model->last_name = $request->get('last_name');
        $model->services_in_city = $request->get('services_in_city');
        $model->preferred_bedroom = $request->get('preferred_bedroom');
        $model->current_address = $request->get('current_address');
        $model->city = $request->get('city');
        $model->state = $request->get('state');
        $model->zip_code = $request->get('zip_code');
        $model->phone = $request->get('phone');
        $model->status = $request->get('status');
        $model->email = $request->get('email');
        $model->password = $request->get('password');

        $model->save();
        return redirect('renter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $renter = Renter::findOrFail($id);
        return view('admin.page.show', compact('renter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $renter  = Renter::findOrFail($id);
        return view('admin.renter.edit',compact('renter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RenterRequest $request, $id)
    {

        $renter = Renter::findOrFail($id);
        $renter->first_name = $request->get('first_name');
        $renter->last_name = $request->get('last_name');
        $renter->services_in_city = $request->get('services_in_city');
        $renter->preferred_bedroom = $request->get('preferred_bedroom');
        $renter->current_address = $request->get('current_address');
        $renter->city = $request->get('city');
        $renter->state = $request->get('state');
        $renter->zip_code = $request->get('zip_code');
        $renter->phone = $request->get('phone');
        $renter->status = $request->get('status');
        $renter->email = $request->get('email');

        if($request->get('password') != ''){
            $renter->password = $request->get('password');
        }


        $renter->save();


        return redirect('renter');
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
