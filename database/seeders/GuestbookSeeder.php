<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuestbookSeeder extends Seeder
{    public function run(): void
    {
        \App\Models\Guestbook::factory(10)->create();
    }
}
