<?php

namespace App\Http\Controllers;

use App\Models\Incidents;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getAllIncidents() {
        // logic to get all students goes here

        $Incident = new Incidents();

        $Incident = $Incident::get()->all();
        // ->toJson(JSON_PRETTY_PRINT);
        return response(json_encode($Incident), 200);

      }

        
  
      public function createIncident(Request $request,$env) {
        
        // logic to create a student record goes here
        $incident = new Incidents();

    
        $incident->latitude = $request->data[0]['location']['latitude'];
        $incident->longitude = $request->data[0]['location']['longitude'];
        $incident->title = $request->data[0]['title'];

        $incident->category = $request->data[0]['category'];

        $incident->people = json_encode($request->data[0]['people']);
        $incident->comments = $request->data[0]['comments'];
        $incident->incidentdate = date('Y-m-d h:i:s', strtotime($request->data[0]['incidentDate']));
        $incident->createdate = date('Y-m-d h:i:s', strtotime($request->data[0]['createDate']));
        $incident->modifydate = date('Y-m-d h:i:s', strtotime($request->data[0]['modifyDate']));
        $incident->save();

        return response()->json([
            "message" => "incident created"
        ], 201);
        
        

     }

      
  

  
}
