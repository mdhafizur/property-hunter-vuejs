<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    public function attachments()
    {
        return $this->hasMany(Attachment::class, 'item_id', 'id')->where('item_type', '=', 'news');
    }
}
