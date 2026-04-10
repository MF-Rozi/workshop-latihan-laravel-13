<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Destination;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('12345678'),
        ]);
        User::factory()->create([
            'name' => "Rozi",
            'email' => "m.fakhrulrozi10@gmail.com",
            'password' => bcrypt('12345678')
        ]);



        Destination::create([
            'name' => "asia heritage",
            'description' => "Replica buildings from China, Japan & Korea in a heritage village with kids' slides & photo ops.",
            'location' => "Jl. Yos Sudarso No.12, Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28265",
            'working_days' => "Weekend",
            'working_hours' => "7 am - 10pm",
            'ticket_price' => 30000,
        ]);

        //         = Illuminate\Database\Eloquent\Collection {#8097
        //     all: [
        //       App\Models\Destination {#8098
        //         id: 1,
        //         name: "Asia Heritage",
        //         description: "Replica buildings from China, Japan & Korea in a heritage village with kids' slides & photo ops.",
        //         location: "Jl. Yos Sudarso No.12, Muara Fajar, Kec. Rumbai, Kota Pekanbaru, Riau 28265",
        //         working_days: "Weekend",
        //         working_hours: "7 am - 10pm",
        //         ticket_price: 30000,
        //         created_at: null,
        //         updated_at: null,
        //       },
        //       App\Models\Destination {#8099
        //         id: 2,
        //         name: "Istana Siak",
        //         description: "Siak Sri Indrapura Palace or Siak Palace is an istana of the Sultanate of Siak Sri Indrapura that is located in Siak Regency, Riau Province, on the island of Sumatra, Indonesia. The palace is now transformed into a museum.",
        //         location: "sri indrapura, Kp. Dalam, Kec. Siak, Kabupaten Siak, Riau 28773",
        //         working_days: "All Days",
        //         working_hours: "7 AM - 5 PM",
        //         ticket_price: 50000,
        //         created_at: null,
        //         updated_at: null,
        //       },
        //       App\Models\Destination {#8100
        //         id: 3,
        //         name: "Candi Muara Takus",
        //         description: "Muara Takus is a Buddhist temple complex, thought to belong to the Srivijaya empire. It is situated in Kampar Regency in Riau province, Sumatra, Indonesia. Its surviving temples and other archaeological remains are thought to date to the 11th and 12th century AD.",
        //         location: " 8JPR+CQ9, Muara Takus, XIII Koto Kampar, Kampar Regency, Riau 28453",
        //         working_days: "All Days",
        //         working_hours: "7 AM - 6 PM",
        //         ticket_price: 20000,
        //         created_at: null,
        //         updated_at: null,
        //       },
        //       App\Models\Destination {#8101
        //         id: 4,
        //         name: "Pantai Kuta",
        //         description: "Pantai Kuta adalah salah satu destinasi wisata terkenal di Bali, Indonesia. Terletak di sebelah barat daya Pulau Bali, pantai ini dikenal dengan pasir putihnya yang lembut, ombak yang cocok untuk berselancar, dan suasana yang ramai dengan berbagai restoran, bar, dan toko-toko suvenir di sekitarnya.",
        //         location: "Kuta, Bali",
        //         working_days: "Setiap hari",
        //         working_hours: "24 jam",
        //         ticket_price: 0,
        //         created_at: "2026-04-08 06:51:21",
        //         updated_at: "2026-04-08 06:51:21",
        //       },
        //     ],
        //   }
    }
}
