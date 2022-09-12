<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensikelas extends Model
{
    use HasFactory;

    protected $table = 'absensi_kelas';

    protected $guarded = [];
}
