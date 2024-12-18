<?php

namespace App\Models;

use App\Traits\AuditedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class kelurahan extends Model
{
    use HasFactory, AuditedBy, SoftDeletes;
    protected $table = 'kelurahans';
    protected $guarded = ['id'];

    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class, 'kecamatans_id');
    }
}
