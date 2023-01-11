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
            "expertise" => "The ideal candidate is as passionate about solving challenges through technology. They are well-versed in building proof of concepts from scratch and taking these POCs to production and scale. The right fit will have the engineering experience to build and iterate quickly and is comfortable working with product and design to set the technical strategy and roadmap.",
            "expertiseTags" => "5+ years of industry experience in a software engineering role preferably building a SaaS product. You can demonstrate significant impact that your work has had on the product and/or the team. , Experience with scalable distributed systems both built from scratch as well as on AWS primitives. , Extremely data-driven., Ability to debug complex systems.",
            "role" => "We are looking for a Senior Software Engineer to join as one of our first hires. As we iterate on our MVP, you will have the opportunity to drive the vision and own the build behind our digital experience. You’ll have the support of an experienced technical advisor, a Head of Product, and an external team to work with.",
            "roleTags" =>  "This role is for someone who is excited about the early stage - you’ll be responsible for turning the platform vision into reality through smart, efficient building and testing. , Translate the product roadmap into engineering requirements and own the engineering roadmap , Work with limited resources to test and learn as efficiently as possible, while laying the framework to build a more scalable product over time. , Collaborate with product design and external engineering teammates as needed."
        ]);

        Jobs::create([
            "company" => "Blogr",
            "position" => "Haskell and PureScript Dev",
            "contract" => "Part Time",
            "location" => "United States",
            "website" => "https://example.com/blogr",
            "description" => "Blogr is looking for a part-time developer to join our six-strong team of full-stack engineers. Our core development values are strong, static typing and correctness, rigorous automation (in both testing and infrastructure) and everyone having a say.",
            "expertise" => "The ideal candidate is as passionate about solving challenges through technology. They are well-versed in building proof of concepts from scratch and taking these POCs to production and scale. The right fit will have the engineering experience to build and iterate quickly and is comfortable working with product and design to set the technical strategy and roadmap.",
            "expertiseTags" => "5+ years of industry experience in a software engineering role preferably building a SaaS product. You can demonstrate significant impact that your work has had on the product and/or the team. , Experience with scalable distributed systems both built from scratch as well as on AWS primitives. , Extremely data-driven., Ability to debug complex systems.",
            "role" => "We are looking for a Senior Software Engineer to join as one of our first hires. As we iterate on our MVP, you will have the opportunity to drive the vision and own the build behind our digital experience. You’ll have the support of an experienced technical advisor, a Head of Product, and an external team to work with.",
            "roleTags" =>  "This role is for someone who is excited about the early stage - you’ll be responsible for turning the platform vision into reality through smart, efficient building and testing. , Translate the product roadmap into engineering requirements and own the engineering roadmap , Work with limited resources to test and learn as efficiently as possible, while laying the framework to build a more scalable product over time. , Collaborate with product design and external engineering teammates as needed."
        ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
