<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'artikel';

    const CREATED_AT = 'tanggal_dibuat';

    const UPDATED_AT = 'tanggal_diperbarui';
}
