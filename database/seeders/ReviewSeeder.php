<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Review::create([
            'first_name' => 'Lāsma',
            'last_name' => 'Vilcāne',
            'photo' => asset('images/review-foto.svg'),
            'review' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut hendrerit lacus. Sed dapibus nisi blandit, tincidunt nibh eget, faucibus ante. Etiam interdum vulputate nibh eget congue.',
            'rating' => 5
        ]);

        
    }
}
