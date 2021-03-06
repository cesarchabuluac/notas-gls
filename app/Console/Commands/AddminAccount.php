<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class AddminAccount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'auth:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates an admin account';

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
        User::query()->firstOrCreate(['email' => 'admin@admin.com'], [
            'name' => 'Administrator',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
            'remember_token' =>  Str::random(10),
        ]);
        return 0;
    }
}
