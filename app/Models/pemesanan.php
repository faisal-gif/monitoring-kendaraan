<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class pemesanan extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $guarded = [];

    public function kendaraan(): HasOne
    {
        return $this->hasOne(kendaraan::class,'id','kendaraan_id');
    }
    
    public function persetujuan(): HasMany
    {
        return $this->hasMany(persetujuan::class,'pemesanan_id','id');
    }
    
}
