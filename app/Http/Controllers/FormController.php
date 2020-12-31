<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\ServiceForm;

class FormController extends Controller
{
    public function create($guest_id, $id)
    {
        return view('form', ['guest_id' => $guest_id, 'employee_id' => $id]);
    }
    public function store($guest_id, $id)
    {
        $p = 50000*request('optradio') + 60000*request('hour');
        $dt = request('datetime');
        $h = request("hour");
        $h = (string)$h;
        $p = (string)$p;
        $employee = \App\UserModel::find($id)->first();


        $serviceform = new ServiceForm();
        $serviceform->datetime = $dt;
        if(request('optradio')==='1'){
            $serviceform->useChemical = 'Có';
        }
        else {
            $serviceform->useChemical = "Không";
        }
        $serviceform->hour = request('hour');
        $serviceform->guest_id = $guest_id;
        $serviceform->employee_id = $id;
        $serviceform->price = $p;
        $serviceform->save();

        return view('request');
    }
}
