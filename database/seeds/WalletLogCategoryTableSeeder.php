<?php

use Illuminate\Database\Seeder;

class WalletLogCategoryTableSeeder extends Seeder
{

    public function run()
    {
        \App\Models\WalletLogCategory::insert([
            ['id' => 1, 'name' => '消费'],
            ['id' => 2, 'name' => '收入'],
            ['id' => 3, 'name' => '转账'],
        ]);
    }

}
