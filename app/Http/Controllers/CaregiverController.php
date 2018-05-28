<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Caregiver;

class CaregiverController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }

    public function show($id)
    {
        $caregiver = Caregiver::find($id);
        return view('caregivers.show', array('caregiver' => $caregiver));
    }

    public function edit($id)
    {
        //
    }

    public function update($id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
