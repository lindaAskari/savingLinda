<?php

namespace App\Http\Controllers;

use App\Models\FormData;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('form');
    }


    public function index(){
        $forms = FormData::paginate(5);
        // dd($forms);

        return view('index', compact('forms'));
    }
    public function store(Request $request)
    {
    

    $validated = $request->validate([
        'sales_expert' => 'required|string',
        'city_zone' => 'required|integer',
        'visit_route' => 'required|string',
        'supervisor' => 'required|string',
        'purchase_manager_time' => 'required|string',
        'name_of_the_customer' => 'required|string',
        'activity' => 'required|string',
        'name_of_the_store' => 'required|string',
        'phone_number' => 'required|string',
        'address' => 'required|string',
        'explanation' => 'required|string',
        'selected_option' => 'required|string',
        'purchase_made' => 'boolean',
    ]);

    FormData::create($validated);

    return redirect()->route('form.index');

    }


    public function edit(FormData $FormData)
    {
        $FormData = FormData::all();
        return view('edit', compact('FormData','FormData'));
    }
    public function update(Request $request, FormData $FormData)
    {
        $request->validate([
            // 'id'=> 'required',
            'sales_expert' => 'required|string',
            'city_zone' => 'required|integer',
            'visit_route' => 'required|string',
            'supervisor' => 'required|string',
            'purchase_manager_time' => 'required|string',
            'name_of_the_customer' => 'required|string',
            'activity' => 'required|string',
            'name_of_the_store' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'explanation' => 'required|string',
            'selected_option' => 'required|string',
            'purchase_made' => 'boolean',
        ]);

   

        $FormData->update([
            // 'id'=> $request->id,
           'sales_expert' => $request->sales_expert,
            'city_zone' => $request->city_zone,
            'visit_route' => $request->visit_route,
            'supervisor' => $request->supervisor,
            'purchase_manager_time' => $request->purchase_manager_time,
            'name_of_the_customer' => $request->name_of_the_customer,
            'activity' => $request->activity,
            'name_of_the_store' => $request->name_of_the_store,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'explanation' => $request->explanation,
            'selected_option' => $request->selected_option,
            'purchase_made' => $request->purchase_made,


        ]);

        return redirect()->route('form.index');
    }

}
