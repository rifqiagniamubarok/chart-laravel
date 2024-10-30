<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'Site';
    protected $primaryKey = 'siteId';
    public $incrementing = false;

    protected $fillable = [
        'siteId',
        'siteName',
        'area',
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class, 'siteId', 'siteId');
    }
}
