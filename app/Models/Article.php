<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $primaryKey = 'id_artikel';

    protected $table = 'artikel';

    const CREATED_AT = 'tanggal_dibuat';

    const UPDATED_AT = 'tanggal_diperbarui';
}
