<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Gerente;
use App\Models\Cliente;
use App\Models\Entrenador;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = new User();
        $g->name ="Pedro";
        $g->role = "gerente";
        $g->email ="Pedro@misena.edu.co";
        $g->password = Hash::make("12345");
        $g->save();
    }
}
