<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'question' => 'Hoe print je een document van je laptop in HZ?',
            'answer'   => 'Je moet je pasje opladen met geld en dan kun je naar de printer lopen en je pasje scannen en het document wat je wilt scannen printen. Je kunt je bestand via print.hz doorsturen.',
            'link'     => null
        ]);

        DB::table('faqs')->insert([
            'question' => 'Hoe scan je een document en verstuur je dit naar je laptop op HZ?',
            'answer'   => 'Je moet je pasje opladen met geld en dan kun je naar de printer lopen. Je pasje scannen en zo kun je dit naar je email versturen op je laptop.',
            'link'     => null
        ]);

        DB::table('faqs')->insert([
            'question' => 'Hoe koop ik iets in de HZ web shop?',
            'answer'   => 'Ga naar de website. Login, en voeg het product dat je wilt aan je winkelmandje toe. En betalen maar!',
            'link'     => null
        ]);

        DB::table('faqs')->insert([
            'question' => 'Waar kan ik de laatste instructies vinden over het ziek zijn en COVID?',
            'answer'   => 'Ga naar de hz website, klik op actualiteiten en dan zie je coronavirus en de laatse updates.',
            'link'     => null
        ]);

        DB::table('faqs')->insert([
            'question' => 'Hoe kan ik een project ruimte reserveren op HZ?',
            'answer'   => 'Login op je HZ Account en klik vervolgens bovenaan op services, dan op helpdesk & dienst automatisering. Of klik op deze link. Dan kom je op een nieuwe pagina en kan je op \"Maak een reservering\" klikken om een ruimte te reserveren.',
            'link'     => null
        ]);

        DB::table('faqs')->insert([
            'question' => 'Wat zijn de instructies over het parkeren op de HZ parkeerplaats?',
            'answer'   => 'Ga naar de hz website. Klik vervolgens op \"Over de HZ\", klik dan op locaties en de locatie van je school. Dan kom je op een nieuwe pagina en daar staat informatie over het parkeren.',
            'link'     => null
        ]);
    }
}
