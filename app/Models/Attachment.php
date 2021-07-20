<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = ['created_at', 'updated_at'];

    public function news()
    {
        return $this->belongsTo(News::class, 'id', 'item_id');
    }

    public function developments()
    {
        return $this->belongsTo(Development::class, 'id', 'item_id');
    }

    public function properties()
    {
        return $this->belongsTo(Property::class, 'id', 'item_id');
    }
}
