<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    
    protected $table = "tb_photo";

    protected $primaryKey = 'photo_id';

    protected $fillable = ['photo_tanggal', 'photo_judul', 'photo_text', 'photo_post_id'];
}
