<?php

namespace App\Models;

use App\Traits\AuditedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory, AuditedBy, SoftDeletes;
    protected $table = 'blogs';
    protected $guarded = ['id'];

    public function blogCategori(){
        return $this->belongsTo(BlogCategory::class, 'blogcategories_id');
    }
}
