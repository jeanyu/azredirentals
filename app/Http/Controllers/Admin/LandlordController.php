<?php

namespace App\Http\Controllers\Admin;

use App\Landlord;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\LandlordRequest;
use Illuminate\Http\Request;


class LandlordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $landlords = Landlord::all();

        return view('admin.landlord.index', compact('landlords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.landlord.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LandlordRequest $request)
    {
        /** save data from Landlord form to database **/
        $model = new Landlord();

        $model->first_name = $request->get('first_name');
        $model->last_name = $request->get('last_name');
        $model->company = $request->get('company');
        $model->phone = $request->get('phone');
        $model->status = $request->get('status');
        $model->email = $request->get('email');
        $model->password = $request->get('password');

        $model->save();
        return redirect('landlord');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $landlord = Landlord::findOrFail($id);
        return view('admin.page.show', compact('landlord'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $landlord  = Landlord::findOrFail($id);
        return view('admin.landlord.edit',compact('landlord'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LandlordRequest $request, $id)
    {
        $landlord = Landlord::findOrFail($id);
        $landlord->first_name = $request->get('first_name');
        $landlord->last_name = $request->get('last_name');
        $landlord->company = $request->get('company');
        $landlord->phone = $request->get('phone');
        $landlord->status = $request->get('status');
        $landlord->email = $request->get('email');


        if($request->get('password') != ''){
            $landlord->password = $request->get('password');
        }


        $landlord->save();


        return redirect('landlord');
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
