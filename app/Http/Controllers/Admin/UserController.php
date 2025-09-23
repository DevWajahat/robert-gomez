<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Agent\StoreRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'agent')->get();

        return view('screens.admin.user.index', get_defined_vars());
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
            'role' => 'agent'
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Agent added Successfully.'
        ]);
    }
}
