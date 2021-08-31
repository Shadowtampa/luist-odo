<?php

namespace Database\Seeders;

use App\Models\Board;

use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Board::create([
            'title'=> 'board 1',
            'user_id'=> 1,
        ]);
    }
}
