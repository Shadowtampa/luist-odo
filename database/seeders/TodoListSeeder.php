<?php

namespace Database\Seeders;

use App\Models\Todo_list;
use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Todo_list::create([
            'title' => 'to do',
            'board_id' => 1,
        ]);
        Todo_list::create([
            'title' => 'doing',
            'board_id' => 1,
        ]);
        Todo_list::create([
            'title' => 'done',
            'board_id' => 1,
        ]);
    }
}
