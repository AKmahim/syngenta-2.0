<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Programs;

class LocationDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id','district','date',
    ];
    public function program(){
        return $this->belongsTo(Programs::class,'program_id');
    }
}
