<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            'name' => '8 Days, 7 Nights Safari – Lake Nakuru, Maasai Mara, Naivasha and Amboseli Park',
            'description' => 'Great experience, 8 days of wonder. Am happy to have spend my charismas on a Safari. All parks are filled with wildlife, big and small, and you are guaranteedto see all of the Big 5 plus more. That’s why I prefer multi-day safaris..',
            'price' => 1660.00,
            'image' => 'park2.png', // Use 'image' instead of 'image_path'
        ]);



    DB::table('tours')->insert([
        'name' => '4 Days, 3 Nights Safari – Lake Nakuru and Maasai Mara Safari',
        'description' => 'From lions and wildebeests to flamingos and hippos, our tour offers the ultimate variety of Kenya’s wildlife. A short drive out of Nairobi’s central business district is the Nairobi National Park. Wide open grass plains and backdrop of the city scrapers, scattered acacia bush play host to a wide variety of wildlife including the endangered black rhino, lions, leopards, cheetahs, hyenas, buffaloes. Visitors can enjoy the park’s picnic sites, three campsites and the walking trails for hikers.',
        'price' => 1574.00,
        'image' => 'park3.png',
        // Add more columns as needed
    ]);

    DB::table('tours')->insert([
        'name' => 'Nairobi national park',
        'description' => '“The World’s only Wildlife Capital” In 4 days you will experience vast savannah teeming with the Big Five, lakes filled with colorful birds, plus forests and parks populated by rhinos, leopards, giraffes and more.',
        'price' => 5160.00,
        'image' => 'nairobi0.png',
        // Add more columns as needed
    ]);

    DB::table('tours')->insert([
        'name' => 'Nairobi National Park Tours and Tickets',
        'description' => 'Located just south of the city, Nairobi National Park is Kenya’s first game reserve and the only protected area in the world that sits so close to a nation’s capital. Visitors to the vast wildlife park are likely to spot black rhinos, lions, giraffe, and zebra, as well as some 400 bird species.',
        'price' => 6574.36,
        'image' => 'tours.png',
    ]);

    DB::table('tours')->insert([
        'name' => 'Mara Naboisho Conservancy',
        'description' => '“The World’s only Wildlife Capital” Mara Naboisho is a ground-breaking example of tourism benefiting conservation and community.The Conservancy is comprised of land leased from 500 Maasai landowners and the conservancy fees provide the local community with a sustainable livelihood whilst ensuring the conservation of the wildlife in this this vital corridor of the Mara eco-system.',
        'price' => 5160.00,
        'image' => 'park3.png',
    ]);

    DB::table('tours')->insert([
        'name' => 'Masai Mara National Reserve',
        'description' => 'Masai Mara National Reserve is located in south west Kenya and is a vast scenic expanse of gently rolling African savannah plains measuring 1510 square kilometers in area and bordering the Serengeti National Park in Tanzania to the south.',
        'price' => 5574.36,
        'image' => 'park3.png',
    ]);


    DB::table('tours')->insert([
        'name' => 'Haller Park',
        'description' => 'Coastal nature park with various animals',
        'price' => 2160,
        'image' => 'greate.jpg',
    ]);

    DB::table('tours')->insert([
        'name' => 'Nguuni Nature Sanctuary',
        'description' => 'Open-air park with giraffes & ostriches  ',
        'price' => 1574.36,
        'image' => 'nguuni.jpg',
    ]);
}

}
