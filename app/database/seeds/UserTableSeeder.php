<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        // $user->first_name = $_ENV['USER_FIRST'];
        // $user->last_name  = $_ENV['USER_LAST'];
        // $user->email      = $_ENV['USER_EMAIL'];
        // $user->phone      = $_ENV['USER_PHONE'];
        // $user->address    = $_ENV['USER_ADDRESS'];
        // $user->password   = $_ENV['USER_PASS'];
        // $user->role       = $_ENV['USER_ROLE'];
        $user->first_name = 'admin';
        $user->last_name  = 'adminlast';
        $user->email      = 'admin@admin.com';
        $user->phone      = '210-123-1234';
        $user->address    = 'somewhere San Antonio, TX';
        $user->password   = 'admin';
        $user->role       = 'admin';
        $user->save();

    }

}
?>
