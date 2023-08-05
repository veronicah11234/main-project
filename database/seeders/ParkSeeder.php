<?php

// database/seeders/ParkSeeder.php

use Illuminate\Database\Seeder;
use App\Models\Park;

class ParkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $parks = [
            [
                'name' => 'Nakuru National Park',
                'description' => 'Nakuru National Park is known for its abundance of flamingos and other water birds.',
                'image' => 'nakuru.png', // Replace 'nakuru.jpg' with the actual image file name in your public/images folder.
                'location' => 'Nakuru',
            ],
            [
                'name' => 'Mombasa National Park',
                'description' => 'Mombasa National Park offers a unique wildlife experience just outside the city.',
                'image' => 'mombasa.jpg', // Replace 'mombasa.jpg' with the actual image file name in your public/images folder.
                'location' => 'Mombasa',
            ],
            [
                'name' => 'Samburu National Park',
                'description' => 'a game reserve on the banks of the Ewaso Ngiro river in Kenya. 
                                    On the other side of the river is the Buffalo Springs National Reserve. 
                                    The park is 165 km² in size and is situated 350 kilometers from Nairobi',
                'image' => 'samburu1.jpg', // Replace 'mombasa.jpg' with the actual image file name in your public/images folder.
                'location' => 'Samburu county',
            ],
            [
                'name' => 'Nairobi National Park',
                'description' => 'a national park in Kenya that was established in 1946 about 7 km (4.3 mi) south of Nairobi. 
                                It is fenced on three sides, whereas the open southern boundary allows migrating wildlife to move between the park and the adjacent Kitengela plains.',
                'image' => 'nairobi04.png', // Replace 'nairobi.jpg' with the actual image file name in your public/images folder.
                'location' => 'Nairobi county',
            ],
            [
                'name' => 'Narok National Park',
                'description' => ' large national game reserve in Narok, Kenya, contiguous with the Serengeti National Park in Tanzania. It is named in honor of the Maasai people, the ancestral inhabitants of the area, who migrated to the area from the Nile Basin.',
                'image' => 'narok1.jpg', // Replace 'mombasa.jpg' with the actual image file name in your public/images folder.
                'location' => 'Narok county',
            ],
            [
                'name' => 'Aberdare National Park',
                'description' => 'The park is located about 100 km north of Nairobi and stretches over a wide variety of terrain at elevations from 2,000 metres (6,600 ft) to 4,000 metres (13,000 ft). Established in May 1950, the Aberdare National Park covers an area of 766 square kilometers and forms part of the Aberdare Mountain Range. The park contains a wide range of landscapes - from mountain peaks that rise to 4,000 metres (13,000 ft) above sea level, to their deep, v-shaped valleys intersected by streams, rivers, and waterfalls. Moorland, bamboo forests and rainforests are found at lower elevations.',
                'image' => 'aberdare.jpg', // Replace 'mombasa.jpg' with the actual image file name in your public/images folder.
                'location' => 'west-central Kenya, northeast of Naivasha and Gilgil and just south of the Equator',
            ],
            [
                'name' => 'Kajiado National Park',
                'description' => 'a national park in Kajiado South Constituency in Kajiado County, Kenya.[1] It is 39,206 ha (392.06 km2) in size at the core of an 8,000 km2 (3,100 sq mi) ecosystem that spreads across the Kenya-Tanzania border.[2] The local people are mainly Maasai, but people from other parts of the country have settled there attracted by the successful tourist-driven economy and intensive agriculture along the system of swamps that makes this low-rainfall area, average 350 mm (14 in), one of the best wildlife-viewing experiences in the world with 400 species of birds including water birds like pelicans, kingfishers, crakes, hamerkop and 47 raptor species.[',
                'image' => 'amboseli0.png', // Replace 'mombasa.jpg' with the actual image file name in your public/images folder.
                'location' => 'Kajiado county',
            ],
            [
                'name' => 'Malindi National Park',
                'description' => ' located in the Indian Ocean, off the coast of Kenya. It is claimed to be oldest marine park in Africa. The park lies at Malindi, about 118 km north of Mombasa and is protected and administered by the Kenya Wildlife Service. Along with Watamu Marine National Park, Malindi Marine Park is enclosed by the Malindi Marine National Reserve.',
                'image' => 'malindi0.jpg', // Replace 'mombasa.jpg' with the actual image file name in your public/images folder.
                'location' => 'indian Ocean',
            ],
           
          
            // Add more parks here as needed.
        ];

        foreach ($parks as $park) {
            Park::create($park);
        }
    }
}

