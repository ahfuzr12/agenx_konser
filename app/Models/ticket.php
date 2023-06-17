<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;

    protected $table = 'ticket';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id_ticket', 'nama', 'nik', 'email', 'nohp', 'jenis', 'alamat', 'checkin'
    ];
}
