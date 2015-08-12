<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();


        DB::statement("ALTER SEQUENCE clients_id_seq RESTART WITH 1;");
        DB::statement("ALTER SEQUENCE project_notes_id_seq RESTART WITH 1;");
        DB::statement("ALTER SEQUENCE projects_id_seq RESTART WITH 1;");
        DB::statement("ALTER SEQUENCE users_id_seq RESTART WITH 1;");
        DB::statement("TRUNCATE projects CASCADE;");
        DB::statement("TRUNCATE clients CASCADE;");
        DB::statement("TRUNCATE users CASCADE;");
        DB::statement("TRUNCATE project_notes CASCADE;");



        $this->call(ClientTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
        $this->call(ProjectNotesTableSeeder::class);


        Model::reguard();
    }
}
