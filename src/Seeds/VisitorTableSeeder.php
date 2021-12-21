<?php

namespace Exit11\SocialLogin\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Exit11\SocialLogin\Models\Visitor;

class VisitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        Visitor::truncate();
        factory(Visitor::class, 1000)->create();

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
