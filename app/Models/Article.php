<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [];
    protected $guarded = ['created_at', 'updated_at'];

    public function attachments()
    {
        return $this->hasmany(Attachment::class, 'item_id', 'id');
    }
}
