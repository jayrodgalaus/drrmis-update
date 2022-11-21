<?php

namespace App;

use App\Models\Municipality;
use App\Models\Province;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Clears extends Model
{
    protected $table = 'tbl_clears';
    protected $fillable = [
        "municipality_id",
        "user_id",
        "survey_date",
        "survey_latitude",
        "survey_longitude",
        "vFactor",
        "fFactor",
        "sRating",
        "sRed",
        "dRed",
        "rain",
        "lFactor",
        "alphaRating",
        "Fs",
        "image",
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function municipality(){
        return $this->belongsTo(Municipality::class);
    }

    public function province(){
        return $this->municipality->belongsTo(Province::class);
    }
}
