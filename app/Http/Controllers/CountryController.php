<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\country; 
class CountryController extends Controller
{
    //
    function country(){
        //  return country::all();
        // $data =country::all();
        $data =country::paginate(10);
        return view('country-page',['countries'=>$data]);
    } 
     //delete_country
    function delete_country($id){
        $data =country::where('country_id', $id);
        $data->delete();
        return redirect('country');
    }
   //edit_country
    function edit_country($id){ 
        $data =country::where('country_id', $id)->first();
        return view('edit-country',['data'=>$data]);

    } //update_country
    function update_country(Request $req){ 
        $data =country::where('country_id', $req->country_id)->first();
        $data->country_name=$req->country_name;
        $data->update();
        return redirect('country')->with('message', 'country has been updated');
    }



}
