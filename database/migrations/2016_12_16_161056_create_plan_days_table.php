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
			$table->float ( 'day_1' )->default(0);
			$table->float ( 'day_2' )->default(0);
			$table->float ( 'day_3' )->default(0);
			$table->float ( 'day_4' )->default(0);
			$table->float ( 'day_5' )->default(0);
			$table->float ( 'day_6' )->default(0);
			$table->float ( 'day_7' )->default(0);
			$table->float ( 'day_8' )->default(0);
			$table->float ( 'day_9' )->default(0);
			$table->float ( 'day_10' )->default(0);
			$table->float ( 'day_11' )->default(0);
			$table->float ( 'day_12' )->default(0);
			$table->float ( 'day_13' )->default(0);
			$table->float ( 'day_14' )->default(0);
			$table->float ( 'day_15' )->default(0);
			$table->float ( 'day_16' )->default(0);
			$table->float ( 'day_17' )->default(0);
			$table->float ( 'day_18' )->default(0);
			$table->float ( 'day_19' )->default(0);
			$table->float ( 'day_20' )->default(0);
			$table->float ( 'day_21' )->default(0);
			$table->float ( 'day_22' )->default(0);
			$table->float ( 'day_23' )->default(0);
			$table->float ( 'day_24' )->default(0);
			$table->float ( 'day_25' )->default(0);
			$table->float ( 'day_26' )->default(0);
			$table->float ( 'day_27' )->default(0);
			$table->float ( 'day_28' )->default(0);
			$table->float ( 'day_29' )->default(0);
			$table->float ( 'day_30' )->default(0);
			$table->float ( 'day_31' )->default(0);
			$table->float ( 'day_32' )->default(0);
			$table->float ( 'day_33' )->default(0);
			$table->float ( 'day_34' )->default(0);
			$table->float ( 'day_35' )->default(0);
			$table->float ( 'day_36' )->default(0);
			$table->float ( 'day_37' )->default(0);
			$table->float ( 'day_38' )->default(0);
			$table->float ( 'day_39' )->default(0);
			$table->float ( 'day_40' )->default(0);
			$table->float ( 'day_41' )->default(0);
			$table->float ( 'day_42' )->default(0);
			$table->float ( 'day_43' )->default(0);
			$table->float ( 'day_44' )->default(0);
			$table->float ( 'day_45' )->default(0);
			$table->float ( 'day_46' )->default(0);
			$table->float ( 'day_47' )->default(0);
			$table->float ( 'day_48' )->default(0);
			$table->float ( 'day_49' )->default(0);
			$table->float ( 'day_50' )->default(0);
			$table->float ( 'day_51' )->default(0);
			$table->float ( 'day_52' )->default(0);
			$table->float ( 'day_53' )->default(0);
			$table->float ( 'day_54' )->default(0);
			$table->float ( 'day_55' )->default(0);
			$table->float ( 'day_56' )->default(0);
			$table->float ( 'day_57' )->default(0);
			$table->float ( 'day_58' )->default(0);
			$table->float ( 'day_59' )->default(0);
			$table->float ( 'day_60' )->default(0);
			$table->float ( 'day_61' )->default(0);
			$table->float ( 'day_62' )->default(0);
			$table->float ( 'day_63' )->default(0);
			$table->float ( 'day_64' )->default(0);
			$table->float ( 'day_65' )->default(0);
			$table->float ( 'day_66' )->default(0);
			$table->float ( 'day_67' )->default(0);
			$table->float ( 'day_68' )->default(0);
			$table->float ( 'day_69' )->default(0);
			$table->float ( 'day_70' )->default(0);
			$table->float ( 'day_71' )->default(0);
			$table->float ( 'day_72' )->default(0);
			$table->float ( 'day_73' )->default(0);
			$table->float ( 'day_74' )->default(0);
			$table->float ( 'day_75' )->default(0);
			$table->float ( 'day_76' )->default(0);
			$table->float ( 'day_77' )->default(0);
			$table->float ( 'day_78' )->default(0);
			$table->float ( 'day_79' )->default(0);
			$table->float ( 'day_80' )->default(0);
			$table->float ( 'day_81' )->default(0);
			$table->float ( 'day_82' )->default(0);
			$table->float ( 'day_83' )->default(0);
			$table->float ( 'day_84' )->default(0);
			$table->float ( 'day_85' )->default(0);
			$table->float ( 'day_86' )->default(0);
			$table->float ( 'day_87' )->default(0);
			$table->float ( 'day_88' )->default(0);
			$table->float ( 'day_89' )->default(0);
			$table->float ( 'day_90' )->default(0);
			$table->float ( 'day_91' )->default(0);
			$table->float ( 'day_92' )->default(0);
			$table->float ( 'day_93' )->default(0);
			$table->float ( 'day_94' )->default(0);
			$table->float ( 'day_95' )->default(0);
			$table->float ( 'day_96' )->default(0);
			$table->float ( 'day_97' )->default(0);
			$table->float ( 'day_98' )->default(0);
			$table->float ( 'day_99' )->default(0);
			$table->float ( 'day_100' )->default(0);
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
