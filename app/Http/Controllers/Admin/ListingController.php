<?php

namespace App\Http\Controllers\Admin;

use App\Listing;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ListingRequest;
use Illuminate\Http\Request;



class ListingController extends Controller
{
    /**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        //

        $listings = Listing::all();

        return view('admin.listing.index', compact('listings'));

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function approval()
    {
        //

        $listings = Listing::all();

        return view('admin.listing.approval', compact('listings'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //
        //return view('admin.page.createListing');
        return view('admin.listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListingRequest $request)
    {
        //
        /** save data from Landlord form to database **/
        $model = new Listing();

        $model->address = $request->get('address');
        $model->cross_street = $request->get('cross_street');
        $model->square_feet = $request->get('square_feet');
        $model->price = $request->get('price');
        $model->deposit_price = $request->get('deposit_price');
        $model->last_price = $request->get('last_price');

        $model->type_of_dwelling = $request->get('type_of_dwelling');
        $model->lease = $request->get('lease');
        $model->bedroom = $request->get('bedroom');
        $model->bathroom = $request->get('bathroom');
        $model->carport = $request->get('carport');
        $model->garage = $request->get('garage');


        $model->furnished = $request->get('furnished');
        $model->pets = $request->get('pets');
        $model->features = $request->get('features');
        $model->schools = $request->get('schools');

        $model->map = $request->get('map');

        $model->description = $request->get('description');
        $model->owner_name = $request->get('owner_name');
        $model->contact_number = $request->get('contact_number');

        $model->status = $request->get('status');

        $model->save();


        /* save photo and file details to database via Update */
        $listing = Listing::findOrFail($model->id);

        if( $request->file('photo') != NULL){
            $imageName = $model->id . '-listing-photo.' .
                $request->file('photo')->getClientOriginalExtension();

            $request->file('photo')->move(
                base_path() . '/public/images/catalog/', $imageName
            );

            $listing->photos =  base_path() . '/public/images/catalog/'. $imageName;
        }

        if( $request->file('file') != NULL) {
            $fileName = $model->id . '-listing-file.' .
                $request->file('file')->getClientOriginalExtension();

            $request->file('file')->move(
                base_path() . '/public/images/catalog/', $fileName
            );

            $listing->file =  base_path() . '/public/images/catalog/'. $fileName;
        }

        $listing->save();


        return redirect('listing');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view('admin.page.show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing  = Listing::findOrFail($id);
        return view('admin.listing.edit',compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ListingRequest $request, $id)
    {
        $listing = Listing::findOrFail($id);
        $listing->address = $request->get('address');
        $listing->cross_street = $request->get('cross_street');
        $listing->square_feet = $request->get('square_feet');
        $listing->price = $request->get('price');
        $listing->deposit_price = $request->get('deposit_price');
        $listing->last_price = $request->get('last_price');

        $listing->type_of_dwelling = $request->get('type_of_dwelling');
        $listing->lease = $request->get('lease');
        $listing->bedroom = $request->get('bedroom');
        $listing->bathroom = $request->get('bathroom');
        $listing->carport = $request->get('carport');
        $listing->garage = $request->get('garage');

        $listing->furnished = $request->get('furnished');
        $listing->pets = $request->get('pets');
        $listing->features = $request->get('features');
        $listing->schools = $request->get('schools');

        $listing->map = $request->get('map');
        $listing->description = $request->get('description');
        $listing->owner_name = $request->get('owner_name');
        $listing->contact_number = $request->get('contact_number');

        $listing->status = $request->get('status');

        $listing->save();

        /* save photo and file details to database via Update */

        $listing = Listing::findOrFail($id);

        if( $request->file('photo') != NULL){
            $imageName = $id . '-listing-photo 2.' .
                $request->file('photo')->getClientOriginalExtension();

            $request->file('photo')->move(
                base_path() . '/public/images/catalog/', $imageName
            );

            $listing->photos =  base_path() . '/public/images/catalog/'. $imageName;
        }

        if( $request->file('file') != NULL) {
            $fileName =  $id . '-listing-file 2.' .
                $request->file('file')->getClientOriginalExtension();

            $request->file('file')->move(
                base_path() . '/public/images/catalog/', $fileName
            );

            $listing->file =  base_path() . '/public/images/catalog/'. $fileName;
        }

        $listing->save();


        return redirect('listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listing = Listing::findOrFail($id);

        /* deletes the uploaded files
        unlink($listing->photos);
        unlink($listing->file);
        */

        $listing->delete();
        return redirect('listing');
    }
}
