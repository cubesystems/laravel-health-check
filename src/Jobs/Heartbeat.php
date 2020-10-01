<?php

namespace CubeSystems\HealthCheck\Jobs;

use CubeSystems\HealthCheck\Model\Heartbeat as HeartbeatModel;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class Heartbeat implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * @var int $tries
     */
    public $tries = 1;

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $heartbeat = HeartbeatModel::firstOrNew([
            'type' => HeartbeatModel::TYPE_QUEUE
        ]);
        $heartbeat->touch();
        $heartbeat->save();
    }
}
