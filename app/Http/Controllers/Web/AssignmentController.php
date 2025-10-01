<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\ClientForm;
use App\Models\GeneralForm;
use App\Models\Guideline;
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

    public function view($id)
    {
        $assignment = Assignment::find($id);

        $clientForms = ClientForm::all();

        $generalForms = GeneralForm::all();

        $guideline = Guideline::latest()->first();

        return view('screens.web.assignment.view',get_defined_vars());
    }

    public function isAccept_view($id)
    {
        $assignment = Assignment::find($id);


        return view('screens.web.assignment.reject',get_defined_vars());
    }

    public function isAccept(Assignment $id)
    {

        

        return response()->json([
            'status' => 'true',
            'message' => 'Your  Assignment rejection status updated successfully.',
            'route' => route('view',$id)
        ]);
    }

}
