<?php

namespace App\Models;

use App\Traits\AuditedBy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogCategory extends Model
{
    use HasFactory, AuditedBy, SoftDeletes;
    protected $table = 'blogcategories';
    protected $guarded = ['id'];

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}
