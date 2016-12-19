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
						'name' => '5K',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'type' => '10k',
						'name' => '10K',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'type' => 'half_marathon',
						'name' => 'Half Marathon',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'type' => 'marathon',
						'name' => 'Marathon',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );

		// Assign weeks to 5K plan
		DB::table ( 'weeks' )->insert ( [
				[
						'plan_id' => '1',
						'order' => 1,
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'plan_id' => '1',
						'order' => 2,
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );

		// Add days to 5K plan - Week 1
		DB::table ( 'days' )->insert ( [
				[
						'week_id' => '1',
						'name' => 'Monday',
						'distance' => '2',
						'details' => 'Warm up: 10 minutes dynamic stretching.<br>Run 2 miles easy, taking walking breaks if needed.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Tuesday',
						'distance' => '0',
						'details' => 'Cross Training Day: Pick your favourite (swimming, biking, rowing, etc.). Do 30 minutes at moderate intensity.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Wednesday',
						'distance' => '0',
						'details' => 'Rest Day',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Thursday',
						'distance' => '2',
						'details' => 'Warm up: 10 minutes dynamic stretching. <br>Run 2 miles easy, taking walking breaks if needed.  ',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Friday',
						'distance' => '0',
						'details' => 'Strength Training Day: Do a total body workout that includes leg, arm, and core exercises.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Saturday',
						'distance' => '3',
						'details' => 'Warm up: 10 minutes dynamic stretching. <br>Run 3 miles. If needed, take 3 minutes walking between each mile.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '1',
						'name' => 'Sunday',
						'distance' => '2',
						'details' => 'Rest Day',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );

		// Assign weeks to 10K plan
		DB::table ( 'weeks' )->insert ( [
				[
						'plan_id' => '2',
						'order' => 1,
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'plan_id' => '2',
						'order' => 2,
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );

		// Add days to 10K plan - Week 1
		DB::table ( 'days' )->insert ( [
				[
						'week_id' => '3',
						'name' => 'Monday',
						'distance' => '2',
						'details' => 'Warm up: 10 minutes dynamic stretching.<br>Run 2 miles easy, taking walking breaks if needed.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '3',
						'name' => 'Tuesday',
						'distance' => '0',
						'details' => 'Cross Training Day: Pick your favourite (swimming, biking, rowing, etc.). Do 30 minutes at moderate intensity.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '3',
						'name' => 'Wednesday',
						'distance' => '0',
						'details' => 'Rest Day',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '3',
						'name' => 'Thursday',
						'distance' => '2',
						'details' => 'Warm up: 10 minutes dynamic stretching. <br>Run 2 miles easy, taking walking breaks if needed.  ',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '3',
						'name' => 'Friday',
						'distance' => '0',
						'details' => 'Strength Training Day: Do a total body workout that includes leg, arm, and core exercises.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '3',
						'name' => 'Saturday',
						'distance' => '3',
						'details' => 'Warm up: 10 minutes dynamic stretching. <br>Run 3 miles. If needed, take 3 minutes walking between each mile.',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				],
				[
						'week_id' => '3',
						'name' => 'Sunday',
						'distance' => '2',
						'details' => 'Rest Day',
						'created_at' => new DateTime (),
						'updated_at' => new DateTime ()
				]
		] );
	}
}
