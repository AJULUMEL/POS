<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;
    
    protected $table = 'm_level'; // Mendefinisikan nama tabel untuk level
    protected $primaryKey = 'level_id'; // Mendefinisikan primary key sesuai dengan foreign key di UserModel
    protected $fillable = ['nama_level', 'deskripsi']; // Kolom yang bisa diisi (sesuaikan dengan kebutuhan)
}
