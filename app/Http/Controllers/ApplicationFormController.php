<?php

namespace App\Http\Controllers;

use App\Models\ApplicationForm;
use App\Http\Requests\StoreApplicationFormRequest;
use App\Http\Requests\UpdateApplicationFormRequest;

class ApplicationFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $applicationForms = ApplicationForm::latest()->paginate(10);
        return view('app.admin.application-forms.index', compact('applicationForms'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ApplicationForm $applicationForm)
    {
        return view('app.admin.application-forms.show', compact('applicationForm'));
    }

    /**
     * Destroy the specified resource.
     */
    public function destroy(ApplicationForm $applicationForm)
    {
        $applicationForm->delete();
        return redirect()->back()->with('success', 'Application form deleted successfully.');
    }
}
