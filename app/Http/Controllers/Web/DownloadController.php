<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\ClientForm;
use App\Models\GeneralForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

class DownloadController extends Controller
{
  public function general_forms($id): Response
    {
        $generalForm = GeneralForm::findOrFail($id);
        // dd();

        // CHANGE THIS LINE: Use public_path() instead of storage_path()
        $filePath = public_path('files/general-forms/' . $generalForm->file);

            return response()->download($filePath, $generalForm->file);


        // abort(404, 'File not found!');
    }

      public function client_forms($id): Response
    {
        $clientForm = ClientForm::findOrFail($id);
        // dd();


        $filePath = public_path('files/client-forms/'.$clientForm->file);

            return response()->download($filePath, $clientForm->file);


        // abort(404, 'File not found!');
    }
}
