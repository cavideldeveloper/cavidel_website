<?php

namespace Cavidel\Console\Commands;

use Illuminate\Console\Command;

class AutoDeploy extends Command
{
     /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Git auto deploy from remote branch.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // execute all changes
        exec('git add . ');
        exec('git commit -m "Remote commit" ');
        exec('git pull');
    }
}
