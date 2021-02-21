<?php

namespace App\Http\Controllers;
use App\Models\Incidents;
use Illuminate\Http\Request;


class createIncidentController
{


    public function execute($request){

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