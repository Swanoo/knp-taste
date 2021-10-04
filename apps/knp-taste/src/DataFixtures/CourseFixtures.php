<?php

namespace App\DataFixtures;

use App\Entity\Course;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class CourseFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {
            $course = new Course();

            $course->setName($faker->name());
            $course->setDescription($faker->text());
            $course->setVideo($faker->name());

            $manager->persist($course);
        }

        $manager->flush();
    }
}