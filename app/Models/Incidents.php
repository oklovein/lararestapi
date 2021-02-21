<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidents extends Model
{
    use HasFactory;

    protected $table = 'incidents';

    protected $fillable = ['latitude', 'longitude','title','category','people','comments','incidentdate','createdate','modifydate'];

   /* $table->string('latitude');
    $table->string('longitude');
    $table->string('title');
    $table->string('category');
    $table->longtext('people');
    $table->text('comments');
    $table->date('incidentdate');
    $table->date('createdate');
    $table->date('modifydate');*/

}
