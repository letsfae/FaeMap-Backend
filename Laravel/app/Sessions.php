<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Phaza\LaravelPostgis\Eloquent\PostgisTrait;
use Phaza\LaravelPostgis\Geometries\Point;

class Sessions extends Model
{
	use PostgisTrait;

    protected $table = 'sessions';

    protected $postgisFields = [
        'location' => Point::class,
    ];

    public function users() 
    {
    	return $this->belongsTo('App\Users','user_id','id');
    } 
    protected $fillable = array('user_id', 'token', 'device_id', 'client_version', 'location', 'is_mobile');
}
