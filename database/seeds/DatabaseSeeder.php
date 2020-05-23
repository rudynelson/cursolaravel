<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncatetables(['profesion','personas']);

        $this->call(ProfesionSeeder::class);
        $this->call(PersonasSeeder::class);
    }

    protected function truncatetables(array $tables)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0');
    	foreach ($tables as $table) {
    		DB::table($table)->truncate();
    	}
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
