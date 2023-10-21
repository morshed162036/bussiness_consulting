<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Server\Ceo_message;
class CEOMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $message = [
            "id"=>'1','name'=>'Gafoor Shah','designation'=>'Entrepreneur, Philanthropist','title'=>'A leading player in the UAE market','pera_1'=>'CEO & Managing Director of Fast Group of Companies ranks among the top business personalities in UAE today. The Group, under his leadership, has expanded its wings of operations, into diverse business areas across the latitudes and longitudes of the globe, business services being its prime concern.

            Started off as an employee in the UAE in 1993, his grit and ambition turned him into a businessperson in 2005. With his shrewd vision, he has supported many small and major businesses to set up their roots in the UAE and around the world.
            
            A successful businessperson, he has established himself as a brand in the hearts of UAE citizens. He has supported major businesses like Bhima Jewelers, Cosmo Sports, Address Fashion, Apollo Builders, 4 Reels Cinemas, and Oxygen Health Care’s, through its formation, and developing businesses like Al-Hind Jewelry and Al Madina Supermarkets to set up in UAE.','pera_2'=>'Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Vestibulum luctus laoreet lacinia. Maecenas luctus arcu ut orci lacinia ultrices. Praesent semper porta interdum. Etiam cursus, tortor at interdum rutrum, metus nibh tincidunt purus, non tincidunt odio arcu quis erat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vulputate posuere tortor luctus vulputate. Cras laoreet pretium blandit. Vestibulum luctus laoreet lacinia.','image'=>'about-ceo.png.webp','sign'=>'signature.png'
        ];

        Ceo_message::insert($message);
    }
}
