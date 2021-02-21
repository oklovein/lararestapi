<?php

namespace App\Http\Controllers;

use App\Models\Incidents;

use Illuminate\Http\Request;


use App\Http\Controllers\createIncidentController;

class ApiController extends Controller
{
    public function getAllIncidents(getAllIncidentController $action) {
      return $action->execute();
      /*
        $Incident = new Incidents();

        $Incident = $Incident::get()->all();
      
        return response(json_encode($Incident), 200);
        */

      }

        
     // 
      public function createIncident(Request $request,$env,createIncidentController $action) {
       return $action->execute($request);
      }

      
  

  
}
