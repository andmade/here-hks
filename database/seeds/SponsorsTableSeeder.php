<?php

use Illuminate\Database\Seeder;
use App\Sponsor;

class SponsorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

    $sponsors = [
    	'Ash Center for Democratic Governance and Innovation',
    	'Belfer Center for Science and International Affairs',
    	'Carr Center for Human Rights Policy',
    	'Center for International Development',
    	'Center for Public Leadership',
    	'Institute of Politics',
    	'Malcolm Wiener Center for Social Policy',
    	'Mossavar-Rahmani Center for Business and Government',
    	'Shorenstein Center on Media, Politics and Public Policy',
    	'Taubman Center for State and Local Government',
    	'The Women and Public Policy Program',
    	"Academic Dean's Office",
    	'Alumni Relations and Resource Development',
    	'Communications ＆ Public Affairs',
    	"Dean's Office",
    	'Degree Programs and Student Affairs',
    	"Executive Dean's Office",
    	'Executive Education',
    	'Human Resources',
    	'Information Technology',
    	'Library and Knowledge Services',
    	'Office of Facilities Management',
    	'Research Administration Office',
    	'Security',
    	'SLATE'
    ];
        foreach ($sponsors as $sponsorName) {
        	$sponsor = new Sponsor();
        	$sponsor->name = $sponsorName;
        	$sponsor->save();
        }
    }
}
