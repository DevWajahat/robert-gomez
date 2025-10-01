<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Web\Assignment\RejectRequest;
use App\Models\Assignment;
use App\Models\ClientForm;
use App\Models\GeneralForm;
use App\Models\Guideline;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function updateStatus(Request $request)
    {
        $assignment = Assignment::find($request->assignment);

        
        $assignment->update([
            'status' => $request->status,
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

        return view('screens.web.assignment.view', get_defined_vars());
    }

    public function isAccept_view($id)
    {
        $assignment = Assignment::find($id);


        return view('screens.web.assignment.reject', get_defined_vars());
    }

    public function isAccept(Request $request, $id)
    {
        $assignment = Assignment::find($id);

        $reason = $request->reason == null ? null : $request->reason;

        $assignment->update([
            'is_accept' => $request->accept,
            'reason_rejection' => $request->reason
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Your  Assignment rejection status updated successfully.',
            'route' => route('view', $id)
        ]);
    }

    public function change_phase_view($id)
    {
        $assignment = Assignment::find($id);

        return view('screens.web.assignment.changePhase', get_defined_vars());
    }

    public function docs_view($id)
    {
        $assignment = Assignment::find($id);

        return view('screens.web.assignment.docs', get_defined_vars());
    }
}
