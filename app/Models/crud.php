<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    use HasFactory;
    protected $table = "cruds";
    protected $dates = ['created_at'];
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType="string";
     protected $fillable=['nim','nama','umur','alamat','kota','kelas','jurusan','created_at','updated_at'];
}   
