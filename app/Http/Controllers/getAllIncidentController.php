<?php

namespace App\Http\Controllers;
use App\Models\Incidents;
use Illuminate\Http\Request;


class getAllIncidentController
{


    public function execute(){

       
        $Incident = new Incidents();

        $Incident = $Incident::get()->all();
        // ->toJson(JSON_PRETTY_PRINT);
        return response(json_encode($Incident), 200);

        
    }

}