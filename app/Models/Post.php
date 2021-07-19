<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = "tb_post";

    protected $primaryKey = 'post_id';

    protected $fillable = ['post_tanggal', 'post_judul', 'post_text', 'post_category_id'];
}
