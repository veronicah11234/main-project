<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Counties; // Make sure the namespace and model name are correct


class CountiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (Counties::$counties as $countyData) {
            Counties::create([
            [
                'counties_id' => 1,
                'country_id'=> 254,
                'counties_name' => 'Mombasa'
                
            ],

            [
                'counties_id' => 2,
                'country_id'=> 254,
                'counties_name' => 'Kwale'
                
            ],

            [
                'counties_id' => 3,
                'country_id'=>254,
                'counties_name' => 'Kilifi'
               
            ],
            [
                'counties_id' => 4,
                 'country_id'=>254,
                'counties_name' => 'Tana River'
               
            ],
            [
                'counties_id' => 5,
                  'country_id'=>254,
                'counties_name' => 'Lamu'
              
            ],
            [
                'counties_id' => 6,
                'country_id'=>254,
                'counties_name' => 'Taita-Tavete'
                
            ],
            [
                'counties_id' => 7,
                 'country_id'=>254,
                'counties_name' => 'Garissa'
               
            ],
            [
                'counties_id' => 8,
                 'country_id'=>254,
                'counties_name' => 'Wajir'
                
            ],
            [
                'counties_id' => 9,
                'country_id'=>254,
                'counties_name' => 'Mandera'
                
            ],
            [
                'counties_id' => 11,
                'country_id'=>254,
                'counties_name' => 'Isiolo'
                
            ],
            [
                'counties_id' => 12,
                 'country_id'=>254,
                'counties_name' => 'Meru'
               
            ],
            [
                'counties_id' => 13,
                 'country_id'=>254,
                'counties_name' => 'Tharaka-Nithi'
               
            ],
            [
                'counties_id' => 14,
                'country_id'=>254,
                'counties_name' => 'Embu'
                
            ],
            [
                'counties_id' => 15,
                  'country_id'=>254,
                'counties_name' => 'Kitui'
              
            ],
            [
                'counties_id' => 16,
                  'country_id'=>254,
                'counties_name' => 'Machakos'
              
            ],
            [
                'counties_id' => 17,
                'country_id'=>254,
                'counties_name' => 'Makueni'
                
            ],
            [
                'counties_id' => 18,
                'country_id'=>254,
                'counties_name' => 'Nyandarua'
                
            ],
            [
                'counties_id' => 19,
                'country_id'=>254,
                'counties_name' => 'Nyeri'
                
            ],
            [
                'counties_id' => 20,
                 'country_id'=>254,
                'counties_name' => 'Kerugoya'
               
            ],
            [
                'counties_id' => 21,
                'country_id'=>254,
                'counties_name' => 'Muranga'
                
            ],
            [
                'counties_id' => 22,
                'country_id'=>254,
                'counties_name' => 'Kiambu'
                
            ],
            [
                'counties_id' => 23,
                'country_id'=>254,
                'counties_name' => 'Turkana'
                
            ],
            [
                'counties_id' => 24,
                 'country_id'=>254,
                'counties_name' => 'West Pokot'
               
            ],
            [
                'counties_id' => 25,
                 'country_id'=>254,
                'counties_name' => 'Samburu'
               
            ],
            [
                'counties_id' => 26,
                'country_id'=>254,
                'counties_name' => 'Trans-Nzoia'
                
            ],
            [
                'counties_id' => 27,
                 'country_id'=>254,
                'counties_name' => 'Uasin Gishu'
               
            ],
            [
                'counties_id' => 28,
                'country_id'=>254,
                'counties_name' => 'Elgeiyo-Marakwet'
                
            ],
            [
                'counties_id' => 29,
                 'country_id'=>254,
                'counties_name' => 'Nandi'
               
            ],
            [
                'counties_id' => 30,
                'country_id'=>254 ,
                'counties_name' => 'Baringo '
                           ],
            [
                'counties_id' => 31,
                'country_id'=>254,
                'counties_name' => 'Laikipia'
                
            ],
            [
                'counties_id' => 32,
                'country_id'=>254,
                'counties_name' => 'Nakuru'
                
            ],
            [
                'counties_id' => 33,
                'country_id'=>254,
                'counties_name' => 'Narok'
                
            ],
            [
                'counties_id' => 34,
                'country_id'=>254,
                'counties_name' => 'Kajiado'
                
            ],
            [
                'counties_id' => 35,
                'country_id'=>254,
                'counties_name' => 'Kericho'
                
            ],
            [
                'counties_id' => 36,
                'country_id'=>254,
                'counties_name' => 'Bomet'
                
            ],
            [
                'counties_id' => 37,
                'country_id'=>254,
                'counties_name' => 'Kakamega'
                
            ],
            [
                'counties_id' => 38,
                'country_id'=>254,
                'counties_name' => 'Vihiga'
                
            ],
            [
                'counties_id' => 39,
                'country_id'=>254,
                'counties_name' => 'Bungoma'
                
            ],
            [
                'counties_id' => 40,
                'country_id'=>254,
                'counties_name' => 'Busia '
                
            ],
            [
                'counties_id' => 41,
                'country_id'=>254,
                'counties_name' => 'Siaya'
                
            ],
            [
                'counties_id' => 42,
                'country_id'=>254,
                'counties_name' => 'Kisumu'
                
            ],
            [
                'counties_id' => 43,
                'country_id'=>254,
                'counties_name' => 'Homa Bay'
                
            ],
            [
                'counties_id' => 44,
                'country_id'=>254,
                'counties_name' => 'Migori'
                
            ],
            [
                'counties_id' => 45,
                'country_id'=>254,
                'counties_name' => 'Kisii'
                
            ],
             [
                'counties_id' => 46,
                'country_id'=>254,
                'counties_name' => 'Nyamira'
                
            ],
             [
                'counties_id' => 47,
                'country_id'=>254,
                'counties_name' => 'Nairobi'
                
            ],            
        ]);
        counties::insert($counties);
    }
}

};

