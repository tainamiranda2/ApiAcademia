<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class USerController extends Controller
{
    public function __construct(private User $user){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
      //$users = User::all();
    
     // return response()->json("Authorized", 200);
    }

    public function store(Request $request)
    {
        $user=$this->user->create($request->all());
    
        return response()->json($user, 201);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user=$this->user->find($id);
        
            $user->update($request->all());

            return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user=$this->user->find($id);
            
                $user->delete();
    
                return response()->json([], 204);
    }
}
