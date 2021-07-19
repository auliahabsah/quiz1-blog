<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table ="tb_album";

    protected $primaryKey = 'album_id';

    protected $fillable =['album_nama', 'album_text', 'album_photo_id'];
}
