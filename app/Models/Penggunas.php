<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunas extends Model
{
    use HasFactory;

    protected $fillable =['id','nama_pengguna'];
    public $timestamps = true;

    public function telepon(){
        return $this->has0ne(Telepon::class);
    }
}
