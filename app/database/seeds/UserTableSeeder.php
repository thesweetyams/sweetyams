<?php
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->first_name = $_ENV['USER_FIRST'];
        $user->last_name  = $_ENV['USER_LAST'];
        $user->email      = $_ENV['USER_EMAIL'];
        $user->phone      = $_ENV['USER_PHONE'];
        $user->address    = $_ENV['USER_ADDRESS'];
        $user->password   = $_ENV['USER_PASS'];
        $user->role       = $_ENV['USER_ROLE'];
        $user->save(); 

    }

}
?>
