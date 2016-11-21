<?php
use Illuminate\Database\Seeder;
class PlansTableSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {

		// Create plans
		DB::table ( 'plans' )->insert ( [
				[
						'type' => '5k',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'type' => '10k',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'type' => 'half_marathon',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'type' => 'marathon',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );

		// Assign weeks to 5K  plan
		DB::table ( 'weeks' )->insert ( [
				[
						'plan_id' => '1',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'plan_id' => '1',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );
	}
}
