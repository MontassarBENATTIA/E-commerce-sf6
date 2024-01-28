<?php

namespace App\DataFixtures;

use App\Entity\Editor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Faker\Factory;

class MyEditorsFixture extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($i = 0; $i < 100; $i++) {
            $editor = new Editor();
            $editor->setFirstname($faker->firstName);
            $editor->setEmail($faker->email);

            // Définir une valeur pour la propriété role (par exemple, 'ROLE_EDITOR')
            $editor->setRole('ROLE_EDITOR');

            // Générer un mot de passe aléatoire
            $password = $faker->password;
            $hashedPassword = $this->passwordHasher->hashPassword($editor, $password);
            $editor->setPassword($hashedPassword);

            $manager->persist($editor);
        }

        $manager->flush();
    }
}
