<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ClientForm\StoreRequest;
use App\Http\Requests\Admin\ClientForm\UpdateRequest;
use App\Models\ClientForm;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function index()
    {
        return view('screens.admin.settings.index');
    }

    public function guidelines()
    {
        return view('screens.admin.settings.guidelines');
    }
    public function generalForms()
    {
        return view('screens.admin.settings.general-forms');
    }
    public function clientForms()
    {

        $clientForms = ClientForm::all();

        return view('screens.admin.settings.client-forms',get_defined_vars());
    }
    public function storeClientForm(StoreRequest $request)
    {
        if ($request->has('file')) {
            $fileName = time() . '_' . $request->file->getClientOriginalExtension();

            $request->file->move(public_path('files/client-forms/'), $fileName);
        }


        $client = ClientForm::create([
            'label' => $request->label,
            'file' => $fileName
        ]);

        return response()->json([
            'status' => 'true',
            'message' => 'Client Form Stored Successfully.'
        ]);
    }

    public function editClientForms($id)
    {

        $clientForm = ClientForm::find($id);

        return response()->json([
            'status' => 'true',
            'message' => 'Client Forms detail fetched Successfully.',
            'clientForm' => $clientForm
        ]);
    }

    public function updateClientForms(UpdateRequest $request, $id)
    {
            // dd($id);
        $clientForm = ClientForm::find($id);

        if ($request->has('file')) {
            $fileName = time() . '_' . $request->file->getClientOriginalExtension();

            $request->file->move(public_path('files/client-forms/'), $fileName);
        }
        else{
            $fileName = $clientForm->file;
        }

        $clientForm->update([
            'label' => $request->label,
            'file' => $fileName
        ]);


        return response()->json([
            'status' => 'true',
            'message' => 'Client Forms detail updated Successfully.',
        ]);
    }

}
