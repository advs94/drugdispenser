<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProfilesToProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('profiles')->insert([
            'name'=>'Super-Admin',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('profiles')->insert([
            'name'=>'Admin',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        DB::table('profiles')->insert([
            'name'=>'Caregiver',
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $SA = DB::table('profiles')->where('name', '=', 'Super-Admin')->value('id');
        $A = DB::table('profiles')->where('name', '=', 'Admin')->value('id');
        $C = DB::table('profiles')->where('name', '=', 'Caregiver')->value('id');
        DB::table('users_profiles')->where('profile_id', '=', $SA)->delete();
        DB::table('users_profiles')->where('profile_id', '=', $A)->delete();
        DB::table('users_profiles')->where('profile_id', '=', $C)->delete();
        DB::table('profiles')->where('name', '=', 'Super-Admin')->delete();
        DB::table('profiles')->where('name', '=', 'Admin')->delete();
        DB::table('profiles')->where('name', '=', 'Caregiver')->delete();
    }
}
