<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\RiskTypesFormRequest;
use App\RiskType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class RiskTypesController extends Controller
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
        $risk_types = RiskType::orderBy('id', 'desc')->paginate(25);

        return view('dictionaries.view_risk_types', array(
            'risk_types' => $risk_types
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dictionaries.add_risk_types');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RiskTypesFormRequest $request)
    {
        $risk_type = new RiskType;
        $risk_type->code = $request->get('code');
        $risk_type->name = $request->get('name');
        $risk_type->category = $request->get('category');
        $risk_type->description = $request->get('description');
        $risk_type->calculation_type = $request->get('calculation_type');
        
        $risk_type->save();
      
        return redirect('/risk_types/view')->with('status', 'The risk type "'.$risk_type->name.'" has been created!');
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
        $risk_type = RiskType::find($id);
        return view('dictionaries.edit_risk_types', array(
            'risk_type' => $risk_type
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RiskTypesFormRequest $request, $id)
    {
        $risk_type = RiskType::find($id);
        $risk_type->code = $request->get('code');
        $risk_type->name = $request->get('name');
        $risk_type->category = $request->get('category');
        $risk_type->description = $request->get('description');
        $risk_type->calculation_type = $request->get('calculation_type');
        
        $risk_type->save();

        return redirect('/risk_types/view')->with('status', 'The risk type "'.$risk_type->name.'" has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $risk_type = RiskType::find($id);
        $risk_type->delete();
        return redirect()->back()->with('status', 'The risk type "'.$risk_type->name.'" has been deleted!');
    }
}
