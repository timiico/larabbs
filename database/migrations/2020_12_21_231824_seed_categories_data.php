<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class SeedCategoriesData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $categories = [
            [
                'name'        => '创造',
                'description' => '创造一切，皆有可能',
            ],
            [
                'name'        => '教程',
                'description' => '授人以鱼不如授人以渔',
            ],
            [
                'name'        => '扩展包',
                'description' => '让开发更便捷',
            ],
            [
                'name'        => '问答',
                'description' => '更快速得到答案',
            ]
        ];
        DB::table('categories')->insert($categories);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
