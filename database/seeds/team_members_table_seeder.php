<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_members')->insert([
            'id' => '1',
            'name' => 'Adam Carter',
            'level' => 'Director',
            'para1' => 'Adam has been hairdressing a ridiculous amount of time',
            'para2' => 'He\'s probably worth avoiding as he\'s a bit of a dinosaur',
            'para3' => 'If you want a dated look that is the talk of the town then come see him',
            'fav_style' => 'Bowl cut',
            'fav_prod' => 'Asda price Gel',
            'price' => '10',
            'review_link' => 'adam link'
        ]);
        
        DB::table('team_members')->insert([
            'id' => '2',
            'name' => 'Jimmy Sharpe',
            'level' => 'Director',
            'para1' => 'Salon manager Jimmy joined Jakata in October 2007 as an apprentice and quickly worked his way up through the ranks to Style Director',
            'para2' => 'His passion for hairdressing is infectious. His experimental approach ensures he\'s always pushing the boundaries in cutting, colouring & styling hair.',
            'para3' => 'Jimmy was member of the Schwarzkopf L.E.A.P Team',
            'fav_style' => 'Short hair cuts',
            'fav_prod' => 'Schwarzkopf Session Label Powder Cloud',
            'price' => '139',
            'review_link' => 'jimmy link'
        ]);

        DB::table('team_members')->insert([
            'id' => '3',
            'name' => 'Laura Hall',
            'level' => 'Senior Stylist',
            'para1' => 'Laura has been a member of the team for 13 years. That makes her the longest serving team member (apart from Adam).',
            'para2' => 'Laura loves classic styling plus technical services like Opti-Smooth and Kebelo.',
            'para3' => 'Laura strongly believes using the right products is the key to maintaining a new hairstyle.',
            'fav_style' => 'Any kind of hair-up',
            'fav_prod' => 'Kevin Murphy Knight Rider',
            'price' => '112',
            'review_link' => 'laura link'
        ]);

        DB::table('team_members')->insert([
            'id' => '4',
            'name' => 'Matt Lane',
            'level' => 'Stylist',
            'para1' => 'Matt is a super-talented stylist that has built up a strong following over the years he\'s been with us.',
            'para2' => 'He loves getting stuck into creative fashion colouring, he\'s not afraid to push the boundaries.',
            'para3' => 'After a short spell at our sister salon PK he has made the move back to rejoin the Jakata team',
            'fav_style' => 'Creative colour and wavy, textured looks',
            'fav_prod' => 'Kevin Murphy Doo.Over',
            'price' => '103',
            'review_link' => 'matt link'
        ]);
    }
}
