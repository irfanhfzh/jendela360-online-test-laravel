<?php

namespace App\Models;

use App\Models\Status;
use App\Models\DataMobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ManualOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'no_hp',
        'address',
        'data_mobil_id',
    ];

    public function dataMobil(){
        return $this->belongsTo(DataMobil::class);
    }

    public function status(){
        return $this->belongsTo(Status::class);
    }

    public function scopeInfo($query){
        return $query->with('dataMobil', 'status');
    }
}
