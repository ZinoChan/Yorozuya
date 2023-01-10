<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jobs;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        Jobs::create([
            "company" => "Scoot",
            "position" => "Senior Software Engineer",
            "contract" => "Full Time",
            "location" => "United Kingdom",
            "website" => "https://example.com/scoot",
            "description" => "Scoot is looking for a Senior Software Engineer passionate about building approachable, innovative and user-first experiences to join our small but growing Engineering team. You will be responsible for building and maintaining front end functionality across all of Scoot’s applications, fostering a growing team of software engineers, and helping drive and maintain best software patterns and practices in our codebase.",
        ]);

        Jobs::create([
            "company" => "Blogr",
            "position" => "Haskell and PureScript Dev",
            "contract" => "Part Time",
            "location" => "United States",
            "website" => "https://example.com/blogr",
            "description" => "Blogr is looking for a part-time developer to join our six-strong team of full-stack engineers. Our core development values are strong, static typing and correctness, rigorous automation (in both testing and infrastructure) and everyone having a say.",
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
