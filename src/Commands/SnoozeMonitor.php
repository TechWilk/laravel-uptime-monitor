<?php

namespace Spatie\UptimeMonitor\Commands;

use Spatie\UptimeMonitor\Models\Monitor;

class SnoozeMonitor extends BaseCommand
{
    protected $signature = 'monitor:snooze {url}';

    protected $description = 'Snooze a monitor';

    public function handle()
    {
        $url = $this->argument('url');

        $monitor = Monitor::where('url', $url)->first();

        if (! $monitor) {
            $this->error("Monitor {$url} is not configured");

            return;
        }

        if ($this->confirm("Are you sure you pause alerts for {$monitor->url}?")) {
            $monitor->snooze();

            $this->warn("{$monitor->url} will not alert again until it has recovered");
        }
    }
}
