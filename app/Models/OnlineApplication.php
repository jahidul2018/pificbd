<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OnlineApplication extends Model
{
    use HasFactory;
    protected $fillable = ['g1_name_of_lead_applicant', 'g2_phone', 'g2_email', 'g2_address', 'g3_representing', 'g4_clusterassociation', 'g4_phone', 'g4_email', 'g4_address', 'g5_projectmanager', 'g6_certificate', 'g7_proposed', 'g8_MSME', 'g9_relevantinfo', 'g10_projectinfo', 'g11_map', 'g11_Dagno', 'g12_projecttype', 'g13_projectdescr', 'g14_quantitative', 'g14_condition', 'g14_utlities', 'g14_facilites', 'g15_projimple', 'g16_readiness', 'g17_implemen', 'g18_businessmodel', 'f1_performance', 'f1_2018', 'f1_2019', 'f1_2020', 'f2_projectcost', 'f3_ammount', 'f3_amountnote', 'f3_bankloan', 'f3_BankNote', 'f3_owncontribution', 'f3_ownnote', 'f3_total', 'f3_totalnote', 'p1_cluster_of_business', 'p2_intended', 'p3_how_many', 'p4_solution', 'p5_manufacturing', 'p6_created', 'p7_participation', 'e1_sensitive', 'e2_benefits', 'e3_socalimpact', 'e4_assets', 'e5_livelihoods', 'e6_heritage', 'e8_green', 'a_name', 'a_position', 'a_dateplace' ];
}
