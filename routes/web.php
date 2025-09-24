<?php


use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\Auth\WebAuthController;
use App\Http\Controllers\Web\AccountingController;
use App\Http\Controllers\Web\AssignmentController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\ProfileController;
use App\Http\Controllers\Web\ResourcesController;
use Illuminate\Support\Facades\Route;

// main pages routes



Route::middleware(['prevent-back-history', 'CheckAgent'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/Accounting', [AccountingController::class, 'index'])->name('accounting');

    Route::get('/Resources', [ResourcesController::class, 'index'])->name('resources');


    Route::prefix('user_profile')->controller(ProfileController::class)->name('profile.')->group(function () {

        Route::get('/', 'index')->name('index');
        Route::post('update', 'update')->name('update');
        Route::post('change-password','updatePsw')->name('update.psw');
        Route::post('update-profile','updatePfp')->name('update.pfp');
    });



    Route::post('assignment-status', [AssignmentController::class, 'updateStatus'])->name('assign.status');
    // end main pages routes

    // start Auth pages routes


    // end Auth pages routes

    // start inner pages routes

    Route::get('/View', function () {
        return view('screens.web.view');
    })->name('view');

    Route::get('/Reject', function () {
        return view('screens.web.reject');
    })->name('reject');

    Route::get('/ReOpen', function () {
        return view('screens.web.reOpen');
    })->name('reopen');

    Route::get('/ChangePhase', function () {
        return view('screens.web.changePhase');
    })->name('changephase');

    Route::get('/CompleteAssignment', function () {
        return view('screens.web.completeAssignment');
    })->name('completAssign');

    Route::get('/Docs', function () {
        return view('screens.web.docs');
    })->name('docs');

    Route::get('/EMSUpload', function () {
        return view('screens.web.emsUpload');
    })->name('emsUpload');

    Route::get('/RenameFiles', function () {
        return view('screens.web.renameFiles');
    })->name('renamefile');

    Route::get('/AppraisalReport', function () {
        return view('screens.web.appraisalReport');
    })->name('appraiseReport');

    Route::get('/TotalLossReport', function () {
        return view('screens.web.totalLossReport');
    })->name('lossReport');

    Route::get('/ACVworksheet', function () {
        return view('screens.web.ACVworksheet');
    })->name('acvWork');

    Route::get('/ConditionSummary', function () {
        return view('screens.web.conditionSummary');
    })->name('conditionsumm');

    Route::get('/VehicleSumary', function () {
        return view('screens.web.vehicalSummary');
    })->name('vehicalsumm');

    Route::get('/SalvageBids', function () {
        return view('screens.web.salvageBids');
    })->name('salvagebid');

    Route::get('/ClientProprtySummary', function () {
        return view('screens.web.clientPropertySummary');
    })->name('cpsummary');

    Route::get('/PropertyReport', function () {
        return view('screens.web.propertyReport');
    })->name('propertyreport');

    Route::get('/SuppPayRequest', function () {
        return view('screens.web.suppPayReqSummary');
    })->name('suppayreq');

    Route::get('/PropertySuppSummary', function () {
        return view('screens.web.propertySuppSummary');
    })->name('propsuppsummary');

    Route::get('/PhotosOnly', function () {
        return view('screens.web.photosOnly');
    })->name('photosOnly');

    Route::get('/TotalLoss', function () {
        return view('screens.web.clientTotalLoss');
    })->name('totLoss');

    Route::get('/ClientAppraisalReport', function () {
        return view('screens.web.clientAppraisalReport');
    })->name('clientappraisal');

    Route::get('/Message', function () {
        return view('screens.web.message');
    })->name('messagePg');

    Route::get('/ConditionReport', function () {
        return view('screens.web.conditionReport');
    })->name('conditionreport');


    Route::get('/cards/{id}', function ($id) {
        return view('screens.web.view', ['id' => $id]);
    });
    // end of inner Pages routes

});

Route::middleware('guest')->group(function () {

    Route::get('/login', [WebAuthController::class, 'login_view'])->name('login');
    Route::post('/login', [WebAuthController::class, 'login']);
    Route::get('/register', [WebAuthController::class, 'register_view'])->name('register');
    Route::post('/register', [WebAuthController::class, 'register']);



    Route::get('admin/login', [AdminAuthController::class, 'login_view'])->name('admin.login');
    Route::get('admin/register', [AdminAuthController::class, 'register_view'])->name('admin.register');
    Route::post('admin/register', [AdminAuthController::class, 'register']);
    Route::post('admin/login', [AdminAuthController::class, 'login']);
});


Route::get('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout')->middleware('auth');



Route::get('/forgetPassword', function () {
    return view('auth.web.forgetPassword');
})->name('forgetpassword');

Route::get('/resetPassword', function () {
    return view('auth.web.resetPassword');
})->name('resetpassword');

Route::get('/passwordupdate', function () {
    return view('auth.web.passwordUpdate');
})->name('passwordupdate');
