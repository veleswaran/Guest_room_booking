<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\property;
use PhpParser\Builder\Property as BuilderProperty;

class PropertyController extends Controller
{
    public $Property;
    public function __construct()
    {
        $this->Property=new property();
    }
    public function index()
    {
        $property=$this->Property->all();
        return view("property.show",compact("property"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("property.addform");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user(); 
        $propertyData = $request->all(); 
        $propertyData['user_id'] = $user->id; 
        Property::create($propertyData); 
        return redirect('property'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo "the show function is tiggered";
        return $this->Property::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->Property::find($id);
        return view("property.updateform",compact("data"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return $this->Property::find($id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->Property->find($id)->delete();
        return redirect('/property');
    }
}
