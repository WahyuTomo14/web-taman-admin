<?php

namespace App\Models;

use App\Traits\AuditedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Taman extends Model
{
    use HasFactory, AuditedBy, SoftDeletes;
    protected $table = 'tamans';
    protected $guarded = ['id'];

    public function kelurahan(){
        return $this->belongsTo(kelurahan::class, 'kelurahans_id');
    }

    public function getLuasFormattedAttribute()
    {
        return number_format($this->luas, 2, ',', '.');
    }

    public function getKecamatanNameAttribute()
    {
        return $this->kelurahan?->kecamatan?->name ?? 'Tidak Ada';
    }
}
