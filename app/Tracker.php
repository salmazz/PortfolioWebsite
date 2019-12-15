<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    //
    
    public $attributes = [ 'hits' => 0 ];

    protected $fillable = [ 'ip', 'date' ];
    protected $table = 'trackers';

    /*
    public static function boot() {
        // Any time the instance is updated (but not created)
        static::saving( function ($tracker) {
            $tracker->date = date('H:i:s');
            $tracker->hits++;
        } );
    }
    */

    public static function hit() {
    
        static::firstOrCreate([
                  'ip'   => request()->ip(),
                  'date' => date('Y-m-d'),
              ])->save();
    }
}
