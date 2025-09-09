<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class devrun extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'devrun';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Runs artisan serve and npm dev simultaneously.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting laravel development server...');
        $runServe = popen("php artisan serve", "r");

        if ($runServe) {
            $this->info('[Laravel development server started]');
            $this->info('Starting npm run dev...');
            $runNpm = popen("npm run dev", "r");

            if ($runNpm) {
                $this->info('[npm run dev started]');
            } else { $this->info('Failed starting npm run dev.'); }
        } else { $this->info('Failed starting laravel development server.'); }

        pclose($runServer);
        plcose($runNpm);
        //
    }
}