<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->truncate();


        DB::table('contacts')->insert([
            'fullName' => 'Barry Tone',
            'email' => 'barryTone84@gmail.com',
            'subject' => 'Pharetra aliquam',
            'message' => 'Pharetra aliquam. Primis placerat curabitur cubilia, ad eu rutrum integer nascetur dignissim fermentum
            torquent class aenean consectetuer accumsan massa. Eros conubia posuere. Nullam torquent mus metus natoque velit egestas
            justo. Urna vestibulum. Sodales urna lorem phasellus molestie consectetuer hendrerit hac.',
        ]);
        DB::table('contacts')->insert([
            'fullName' => 'Giles Posture',
            'email' => 'gilesPosture@gmail.com',
            'subject' => 'Luctus et habitant',
            'message' => 'Luctus et habitant torquent augue hac turpis eu aptent purus eget pulvinar volutpat vehicula sit nascetur
            felis accumsan gravida turpis lacus egestas semper auctor montes nulla mi nullam ante venenatis accumsan dui sed
            bibendum vulputate bibendum ultricies egestas non nisl.',
        ]);
        DB::table('contacts')->insert([
            'fullName' => 'Guy Mann',
            'email' => 'guymann@gmail.com',
            'subject' => 'Fusce lacus dapibus',
            'message' => 'Fusce lacus dapibus pretium mollis hac eleifend est magna. Pellentesque. Cursus pharetra maecenas.
            In nascetur augue, arcu natoque nam placerat dictumst odio facilisi congue tortor lorem facilisi ullamcorper iaculis
            lorem odio habitant nisi viverra lorem sapien nostra elementum lacinia et.',
        ]);
    }
}
