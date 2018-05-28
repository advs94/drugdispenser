<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersProfilesToUsersProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $user_id_aux = DB::table('users')->where('name', '=', 'Super-Admin')->get(['id']);
        $profile_id_aux = DB::table('profiles')->where('name', '=', 'Super-Admin')->get(['id']);

        $user_id = $user_id_aux[0]->id;
        $profile_id = $profile_id_aux[0]->id;


        DB::table('users_profiles')->insert([
            'user_id'=>$user_id,
            'profile_id'=>$profile_id,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s')
        ]);

        $user_id_aux = DB::table('users')->where('name', '=', 'Admin')->get(['id']);
        $profile_id_aux = DB::table('profiles')->where('name', '=', 'Admin')->get(['id']);

        $user_id = $user_id_aux[0]->id;
        $profile_id = $profile_id_aux[0]->id;

        DB::table('users_profiles')->insert([
            'user_id'=>$user_id,
            'profile_id'=>$profile_id,
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
        DB::table('users_profiles')->where('profile_id', '=', '1')->delete();
        DB::table('users_profiles')->where('profile_id', '=', '2')->delete();
    }
}
