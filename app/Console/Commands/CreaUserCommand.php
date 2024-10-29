<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreaUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crear:userAdmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {


        $user = new User();
        $user->email = 'admin@gmail.com';
        $user->password = bcrypt('12345678');
        $user->save();

        $this->info('Usuario creado con éxito');

    }
}
