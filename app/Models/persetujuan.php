<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class persetujuan extends Model
{
    use HasFactory;
    protected $table = 'persetujuan';
    protected $guarded = [];

    public function pemesanan(): BelongsTo
    {
        return $this->belongsTo(pemesanan::class,'pemesanan_id','id');
    }
}
