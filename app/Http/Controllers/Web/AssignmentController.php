<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function updateStatus(Request $request)
    {

        
        $assignment= Assignment::find($request->assignment);

        $assignment->update([
            'status' => 'completed',
        ]);


        return response()->json([
            'status' => 'true',
            'message' => 'assignment completed successfully.'

        ]);
    }
}
