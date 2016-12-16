<?php
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePlanDaysTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'plan_days', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->integer ( 'user_id' )->default(0);
			$table->integer ( 'day_1' )->default(0);
			$table->integer ( 'day_2' )->default(0);
			$table->integer ( 'day_3' )->default(0);
			$table->integer ( 'day_4' )->default(0);
			$table->integer ( 'day_5' )->default(0);
			$table->integer ( 'day_6' )->default(0);
			$table->integer ( 'day_7' )->default(0);
			$table->integer ( 'day_8' )->default(0);
			$table->integer ( 'day_9' )->default(0);
			$table->integer ( 'day_10' )->default(0);
			$table->integer ( 'day_11' )->default(0);
			$table->integer ( 'day_12' )->default(0);
			$table->integer ( 'day_13' )->default(0);
			$table->integer ( 'day_14' )->default(0);
			$table->integer ( 'day_15' )->default(0);
			$table->integer ( 'day_16' )->default(0);
			$table->integer ( 'day_17' )->default(0);
			$table->integer ( 'day_18' )->default(0);
			$table->integer ( 'day_19' )->default(0);
			$table->integer ( 'day_20' )->default(0);
			$table->integer ( 'day_21' )->default(0);
			$table->integer ( 'day_22' )->default(0);
			$table->integer ( 'day_23' )->default(0);
			$table->integer ( 'day_24' )->default(0);
			$table->integer ( 'day_25' )->default(0);
			$table->integer ( 'day_26' )->default(0);
			$table->integer ( 'day_27' )->default(0);
			$table->integer ( 'day_28' )->default(0);
			$table->integer ( 'day_29' )->default(0);
			$table->integer ( 'day_30' )->default(0);
			$table->integer ( 'day_31' )->default(0);
			$table->integer ( 'day_32' )->default(0);
			$table->integer ( 'day_33' )->default(0);
			$table->integer ( 'day_34' )->default(0);
			$table->integer ( 'day_35' )->default(0);
			$table->integer ( 'day_36' )->default(0);
			$table->integer ( 'day_37' )->default(0);
			$table->integer ( 'day_38' )->default(0);
			$table->integer ( 'day_39' )->default(0);
			$table->integer ( 'day_40' )->default(0);
			$table->integer ( 'day_41' )->default(0);
			$table->integer ( 'day_42' )->default(0);
			$table->integer ( 'day_43' )->default(0);
			$table->integer ( 'day_44' )->default(0);
			$table->integer ( 'day_45' )->default(0);
			$table->integer ( 'day_46' )->default(0);
			$table->integer ( 'day_47' )->default(0);
			$table->integer ( 'day_48' )->default(0);
			$table->integer ( 'day_49' )->default(0);
			$table->integer ( 'day_50' )->default(0);
			$table->integer ( 'day_51' )->default(0);
			$table->integer ( 'day_52' )->default(0);
			$table->integer ( 'day_53' )->default(0);
			$table->integer ( 'day_54' )->default(0);
			$table->integer ( 'day_55' )->default(0);
			$table->integer ( 'day_56' )->default(0);
			$table->integer ( 'day_57' )->default(0);
			$table->integer ( 'day_58' )->default(0);
			$table->integer ( 'day_59' )->default(0);
			$table->integer ( 'day_60' )->default(0);
			$table->integer ( 'day_61' )->default(0);
			$table->integer ( 'day_62' )->default(0);
			$table->integer ( 'day_63' )->default(0);
			$table->integer ( 'day_64' )->default(0);
			$table->integer ( 'day_65' )->default(0);
			$table->integer ( 'day_66' )->default(0);
			$table->integer ( 'day_67' )->default(0);
			$table->integer ( 'day_68' )->default(0);
			$table->integer ( 'day_69' )->default(0);
			$table->integer ( 'day_70' )->default(0);
			$table->integer ( 'day_71' )->default(0);
			$table->integer ( 'day_72' )->default(0);
			$table->integer ( 'day_73' )->default(0);
			$table->integer ( 'day_74' )->default(0);
			$table->integer ( 'day_75' )->default(0);
			$table->integer ( 'day_76' )->default(0);
			$table->integer ( 'day_77' )->default(0);
			$table->integer ( 'day_78' )->default(0);
			$table->integer ( 'day_79' )->default(0);
			$table->integer ( 'day_80' )->default(0);
			$table->integer ( 'day_81' )->default(0);
			$table->integer ( 'day_82' )->default(0);
			$table->integer ( 'day_83' )->default(0);
			$table->integer ( 'day_84' )->default(0);
			$table->integer ( 'day_85' )->default(0);
			$table->integer ( 'day_86' )->default(0);
			$table->integer ( 'day_87' )->default(0);
			$table->integer ( 'day_88' )->default(0);
			$table->integer ( 'day_89' )->default(0);
			$table->integer ( 'day_90' )->default(0);
			$table->integer ( 'day_91' )->default(0);
			$table->integer ( 'day_92' )->default(0);
			$table->integer ( 'day_93' )->default(0);
			$table->integer ( 'day_94' )->default(0);
			$table->integer ( 'day_95' )->default(0);
			$table->integer ( 'day_96' )->default(0);
			$table->integer ( 'day_97' )->default(0);
			$table->integer ( 'day_98' )->default(0);
			$table->integer ( 'day_99' )->default(0);
			$table->integer ( 'day_100' )->default(0);
			$table->timestamps ();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists ( 'plan_days');
	}
}
