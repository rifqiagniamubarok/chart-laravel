<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'Task';
    protected $primaryKey = 'id';
    public $incrementing = false;
    protected $fillable = [
        'id',
        'taskName',
        'vendor',
        'siteId',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'siteId', 'siteId');
    }
}
