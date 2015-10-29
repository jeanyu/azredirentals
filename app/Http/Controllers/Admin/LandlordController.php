<?php

namespace App\Http\Controllers\Admin;

use App\Landlord;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateLandlordRequest;
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

        return view('admin.page.landlord', compact('landlords'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.createLandlord');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLandlordRequest $request)
    {
        /** save data from Landlord form to database **/
        $model = new Landlord();

        $model->first_name = $request->get('first_name');
        $model->last_name = $request->get('last_name');
        $model->company = $request->get('company');
        $model->phone = $request->get('phone');
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
        $member = Landlord::findOrFail($id);
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
