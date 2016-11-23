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

		// Assign weeks to 5K plan
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

		// Add days to 5K plan - Week 1
		DB::table ( 'days' )->insert ( [
				[
						'week_id' => '1',
						'name' => 'Monday',
						'order' => '1',
						'distance' => '5',
						'status' => '1',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Tuesday',
						'order' => '1',
						'distance' => '0',
						'status' => '1',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Wednesday',
						'order' => '1',
						'distance' => '3',
						'status' => '1',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Thursday',
						'order' => '1',
						'distance' => '2',
						'status' => '0',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Friday',
						'order' => '1',
						'distance' => '0',
						'status' => '0',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Saturday',
						'order' => '1',
						'distance' => '3',
						'status' => '0',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Sunday',
						'order' => '1',
						'distance' => '2',
						'status' => '0',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		]
		 );
	}
}
