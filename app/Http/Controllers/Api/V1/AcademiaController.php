<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Academia;
use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(private Academia $academia){

    }
    public function index(Academia $academia)
    {
        //
        return response()->json($this->academia->all());
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $academia=$this->academia->create($request->all());
    
        return response()->json($academia, 201);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $academia=$this->academia->find($id);
        
            $academia->update($request->all());

            return response()->json($academia, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $academia=$this->academia->find($id);
            
                $academia->delete();
    
                return response()->json([], 204);
    }
}
