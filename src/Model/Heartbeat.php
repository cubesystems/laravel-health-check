<?php

namespace CubeSystems\HealthCheck\Model;

use Illuminate\Database\Eloquent\Model;

class Heartbeat extends Model
{
    const TYPE_SCHEDULER = 'scheduler';
    const TYPE_QUEUE = 'queue';

    protected $fillable = ['type'];
}
