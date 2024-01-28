<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categoriesData = [
            'Electronics' => ['Laptops', 'Smartphones', 'Cameras'],
            'Clothing' => ['Men\'s Fashion', 'Women\'s Fashion', 'Kid\'s Fashion'],
            'Home Appliances' => ['Refrigerators', 'Washing Machines', 'Microwaves'],
        ];

        foreach ($categoriesData as $parentName => $childrenNames) {
            $parentCategory = new Category();
            $parentCategory->setName($parentName);
            $manager->persist($parentCategory);

            foreach ($childrenNames as $childName) {
                $childCategory = new Category();
                $childCategory->setName($childName);
                $childCategory->setCreatedAt(new \DateTimeImmutable());
                $childCategory->setUpdatedAt(new \DateTimeImmutable());
                $parentCategory->addChild($childCategory);

                $manager->persist($childCategory);
            }
        }

        $manager->flush();
    }
}
