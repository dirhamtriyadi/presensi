<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    protected $table = 'pengguna';
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $primaryKey = 'nip';

    protected $fillable = [
        'nip',
        'nama',
        'level',
        'sandi'
    ];
}
