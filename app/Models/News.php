<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = ['created_at','updated_at'];

    public function attachments()
    {
        return $this->hasone(Attachment::class, 'item_id', 'id')->where('item_type', '=', 'news');
    }
}
