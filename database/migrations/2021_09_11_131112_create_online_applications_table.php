<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOnlineApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_applications', function (Blueprint $table) {
            $table->id();
            $table->string('g1_name_of_lead_applicant')->nullable();
            $table->string('g2_phone')->nullable();
            $table->string('g2_email')->nullable();
            $table->string('g2_address')->nullable();
            $table->string('g3_representing')->nullable();
            $table->string('g4_clusterassociation')->nullable();
            $table->string('g4_phone')->nullable();
            $table->string('g4_email')->nullable();
            $table->string('g4_address')->nullable();
            $table->string('g5_projectmanager')->nullable();
            $table->string('g6_certificate')->nullable();
            $table->string('g6_license')->nullable();
            $table->string('g6_vattax')->nullable();
            $table->string('g1_formFileMultiple')->nullable();
            $table->string('g7_proposed')->nullable();
            $table->string('g8_MSME')->nullable();
            $table->string('g9_relevantinfo')->nullable();
            $table->string('g10_projectinfo')->nullable();
            $table->string('g11_map')->nullable();
            $table->string('g11_Dagno')->nullable();
            $table->string('g12_projecttype')->nullable();
            $table->string('g13_projectdescr')->nullable();
            $table->string('g14_quantitative')->nullable();
            $table->string('g14_condition')->nullable();
            $table->string('g14_utlities')->nullable();
            $table->string('g14_facilites')->nullable();
            $table->string('g15_projimple')->nullable();
            $table->string('g16_readiness')->nullable();
            $table->string('g17_implemen')->nullable();
            $table->string('g18_businessmodel')->nullable();

            $table->string('f1_performance')->nullable();
            $table->string('f1_2018')->nullable();
            $table->string('f1_2019')->nullable();
            $table->string('f1_2020')->nullable();
            $table->string('f2_projectcost')->nullable();
            $table->string('f3_ammount')->nullable();
            $table->string('f3_amountnote')->nullable();
            $table->string('f3_bankloan')->nullable();
            $table->string('f3_BankNote')->nullable();
            $table->string('f3_owncontribution')->nullable();
            $table->string('f3_ownnote')->nullable();
            //$table->string('f3_BankNote')->nullable();
            $table->string('f3_total')->nullable();
            $table->string('f3_totalnote')->nullable();

            $table->string('p1_cluster_of_business')->nullable();
            $table->string('p2_intended')->nullable();
            $table->string('p3_how_many')->nullable();
            $table->string('p4_solution')->nullable();
            $table->string('p5_manufacturing')->nullable();
            $table->string('p6_created')->nullable();
            $table->string('p7_participation')->nullable();

            $table->text('e1_sensitive')->nullable();
            $table->text('e2_benefits')->nullable();
            $table->text('e3_socalimpact')->nullable();
            $table->text('e4_assets')->nullable();
            $table->text('e5_livelihoods')->nullable();
            $table->text('e6_heritage')->nullable();
            $table->text('e7_implemen')->nullable();
            $table->text('e8_green')->nullable();
            $table->text('e8_orange')->nullable();
            $table->text('e8_darkorg')->nullable();
            $table->string('e8_red')->nullable();

            $table->string('a_name')->nullable();
            $table->string('a_position')->nullable();
            $table->string('a_sigbature')->nullable();
            $table->string('a_dateplace')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('online_applications');
    }
}
