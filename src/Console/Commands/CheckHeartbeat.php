<?php

namespace CubeSystems\HealthCheck\Console\Commands;

use CubeSystems\HealthCheck\Model\Heartbeat as HeartbeatModel;
use Illuminate\Console\Command;

class CheckHeartbeat extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'healthcheck:check {type}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check heartbeat for given service type';

    /**
     * Check if the schedule service is running without problems
     *
     * @return mixed
     */
    public function handle()
    {
        $type = $this->argument('type');

        try {
            HeartbeatModel::where('type', $type)
                ->where('updated_at', '>', \Carbon\Carbon::now()->subMinutes(5)->toDateTimeString())
                ->firstOrFail();

            $this->info('Heartbeat for ' . $type . ' is running fine');
            return 0;
        } catch (\Exception $exception) {
            $this->error('Heartbeat for ' . $type . '  has delayed 5 minutes or more');
            return 1;
        }
    }
}
