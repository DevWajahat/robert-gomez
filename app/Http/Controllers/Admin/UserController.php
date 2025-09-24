<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\StoreRequest;
use App\Http\Requests\Admin\User\UpdateRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('screens.admin.agents.index', get_defined_vars());
    }

    public function store(StoreRequest $request): JsonResponse
    {

        $agent = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' => $request->address,
            'role' => $request->role
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Agent added Successfully.'
        ]);
    }

    public function edit($id)
    {

        $user = User::find($id);


        // dd($user);

        return response()->json([
            'status' => 'true',
            'message' => 'data fetched successfully.',
            'user' => $user
        ]);
    }

    public function update(UpdateRequest $request, $id){

        return response()->json([
            'status' => 'true',
            'message' => 'User details updated successfully.'
        ]);
    }
}
