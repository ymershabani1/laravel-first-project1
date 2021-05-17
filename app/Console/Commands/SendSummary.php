<?php

namespace App\Console\Commands;

use App\Http\Controllers\GymMemberController;
use App\Mail\WeeklySummary;
use Illuminate\Console\Command;

class SendSummary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:summary';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send weekly email summary';

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
     * @return int
     */
    public function handle()
    {
        $gymMember = GymMemberController::class;
        Mail::to($gymMember)->send(new WeeklySummary());
    }
}
