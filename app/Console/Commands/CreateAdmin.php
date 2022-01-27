<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create an admin user';

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
        $u = new User;
        echo "Insira o nome do usuário: \n";
        $u -> name = trim(fgets(STDIN));
        echo "Insira a senha: \n";
        $u -> password = Hash::make(trim(fgets(STDIN)));
        echo "Insira o email: \n";
        $u->email = trim(fgets(STDIN));
        $u->is_admin = true;
        return $u->save();
    }
}