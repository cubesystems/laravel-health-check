# Health Check for Laravel

## Usage

Require the package using composer:

> composer require cubesystems/laravel-health-check

## Using the health checks
You can set your monitoring system to ping the liveness and readiness URLs or CLI to get alerted if there are any problems.\
In Kubernetes and OpenShift you can use the probes also for container health checks.

### Liveness Probes
`{APP_URL}/health-check/liveness` \
Liveness probe will respond with http 200 status code if the service functions without problems.

### Readiness Probe
`{APP_URL}/health-check/readiness` \
Readiness probe will respond with http 200 status code if the service is up and functions without problems.

### Scheduler Liveness Probe
`php artisan healthcheck:check scheduler`

### Queue Liveness Probe
`php artisan healthcheck:check queue`
