<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
            'date' => '2022-07-24',
            'subject' => 'VAC bags Hult Prize presenting job-search portal ideas',
            'news_description' => 'A student team representing Vishwa Adarsha College (VAC) of Itahari has bagged the first prize of Hult Prize at Purbanchal Engineering Campus of Dharan. The business idea was about a job portal. The competitive entrepreneurial function was organized at the architectural hall at the TU constituent campus on Saturday afternoon. Among eight teams from the campuses of Dharan, Itahari, and Biratnagar, Team Green Grain IOE Dharan and Team Udaan of Mahendra Multiple Campus of Biratnagar stood second and third respectively. Both teams were focused on agricultural areas. Participants from all eight teams had presented their innovative start-up business ideas to the hall and the panel of the judges. The Hult Prize winner will have a chance to participate in the regional summit and second and third position-holders would also have opportunities for possible wild card entries informed Pravash Gautam, the man behind this global function at the campus. Hult Prize is an annual, year-long competition that crowdsources ideas from university-level students. It has a 1 million USD prize for the international winner. Umesh Bhandari, one of the four judges of the competition, said it was great to host such competitions on all campuses.I felt excited to see the gradual move of Nepals education sector from theoretical front to practical actions.',
            'news_image' => 'news.jpg',
            'news_category_id' => '1',

        ]);
    }
}