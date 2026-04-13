<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destination::create([
            'name' => "Asia Heritage",
            'description' => "Replica buildings from China, Japan & Korea in a heritage village with kids' slides & photo ops.",
            'location' => "Jl. Yos Sudarso No.12, Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28265",
            'working_days' => "Weekend",
            'working_hours' => "7 am - 10pm",
            'ticket_price' => 30000,
        ]);
        Destination::create([
            'name' => "Istana Siak",
            'description' => "Siak Sri Indrapura Palace or Siak Palace is an istana of the Sultanate of Siak Sri Indrapura that is located in Siak Regency, Riau Province, on the island of Sumatra, Indonesia. The palace is now transformed into a museum.",
            'location' => "sri indrapura, Kp. Dalam, Kec. Siak, Kabupaten Siak, Riau 28773",
            'working_days' => "Everyday",
            'working_hours' => "8 am - 5pm",
            'ticket_price' => 50000,
        ]);

        Destination::create([
            'name' => "Taman Wisata Alam Mayang",
            'description' => "Mayang Wildlife Park is a nature tourism park located in Pekanbaru, Riau. This park offers a variety of flora and fauna, making it an ideal destination for nature lovers and families.",
            'location' => "Jl. Mayang No. 1, Kampung Dalam, Kec. Sail, Kota Pekanbaru, Riau 28125",
            'working_days' => "Everyday",
            'working_hours' => "8 am - 5pm",
            'ticket_price' => 20000,
        ]);
        Destination::create([
            'name' => "Taman Rekreasi Alam Mayang",
            'description' => "Mayang Nature Recreation Park is a recreational area located in Pekanbaru, Riau. This park offers a variety of outdoor activities and natural attractions, making it an ideal destination for families and nature lovers.",
            'location' => "Jl. Mayang No. 1, Kampung Dalam, Kec. Sail, Kota Pekanbaru, Riau 28125",
            'working_days' => "Everyday",
            'working_hours' => "8 am - 5pm",
            'ticket_price' => 15000,
        ]);
        Destination::create([
            'name' => "Taman Wisata Alam Bukit Soeharto",
            'description' => "Bukit Soeharto Nature Tourism Park is a nature tourism area located in Pekanbaru, Riau. This park offers a variety of flora and fauna, making it an ideal destination for nature lovers and families.",
            'location' => "Jl. Soeharto No. 1, Kampung Dalam, Kec. Sail, Kota Pekanbaru, Riau 28125",
            'working_days' => "Everyday",
            'working_hours' => "8 am - 5pm",
            'ticket_price' => 25000,
        ]);
        for ($i = 0; $i <= 100; $i++) {
            Destination::create([
                'name' => fake("id_ID")->company(),
                'description' => fake("id_ID")->sentence(),
                'location' => fake('id_ID')->address(),
                'working_days' => "Everyday",
                'working_hours' => "8 am - 5pm",
                'ticket_price' => rand(10000, 50000),
            ]);
        }
    }
}
