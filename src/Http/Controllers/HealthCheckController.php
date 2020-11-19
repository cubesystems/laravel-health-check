<?php

namespace CubeSystems\HealthCheck\Http\Controllers;

use CubeSystems\HealthCheck\Model\Heartbeat;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class HealthCheckController extends BaseController
{
    /**
     * Check if the server is ready to receive traffic
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function readiness()
    {
        return response('ok', 200);
    }

    /**
     * Check if the backend service is running without problems
     *
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\Response
     */
    public function liveness()
    {
        return response('ok', 200);
    }
}
