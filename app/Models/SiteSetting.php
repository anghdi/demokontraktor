<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'company_name', 'whatsapp', 'email', 'instagram', 'address', 'working_hours',
    ];
}
