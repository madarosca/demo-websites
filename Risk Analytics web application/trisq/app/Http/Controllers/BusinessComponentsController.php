<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\BusinessComponentsFormRequest;
use App\BusinessComponent;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class BusinessComponentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $business_components = BusinessComponent::orderBy('id', 'desc')->paginate(25);

        return view('dictionaries.view_business_components', array(
            'business_components' => $business_components
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dictionaries.add_business_components');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business_component = new BusinessComponent;
        $business_component->name = $request->get('name');
        $business_component->category = $request->get('category');
        $business_component->description = $request->get('description');
        $business_component->order_seq = $request->get('order_seq');
        
        $business_component->save();
      
        return redirect('/business_components/view')->with('status', 'The business component "'.$business_component->name.'" has been created!');
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
        $business_component = BusinessComponent::find($id);
        return view('dictionaries.edit_business_components', array(
            'business_component' => $business_component
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BusinessComponentsFormRequest $request, $id)
    {
        $business_component = BusinessComponent::find($id);
        $business_component->name = $request->get('name');
        $business_component->category = $request->get('category');
        $business_component->description = $request->get('description');
        $business_component->order_seq = $request->get('order_seq');
        
        $business_component->save();

        return redirect('/business_components/view')->with('status', 'The business component "'.$business_component->name.'" has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business_component = BusinessComponent::find($id);
        $business_component->delete();
        return redirect()->back()->with('status', 'The business component "'.$business_component->name.'" has been deleted!');
    }
}
