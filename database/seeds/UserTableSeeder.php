<?php
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		 DB::table ( 'users' )->insert ( [
				[
						'name' => 'Nathan',
						'email' => 'test1@email.com',
						'password' => bcrypt ( 'yourPassword' ),
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'name' => 'David',
						'email' => 'test2@email.com',
						'password' => bcrypt ( 'yourPassword' ),
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
				,
				[
						'name' => 'Lisa',
						'email' => 'test3@email.com',
						'password' => bcrypt ( 'yourPassword' ),
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );
	}
}
