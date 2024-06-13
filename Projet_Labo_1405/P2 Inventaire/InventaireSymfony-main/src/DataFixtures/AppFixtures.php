<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    // private \Faker\Generator $faker;

    // public function __construct()
    // {
    //     $this->faker = Factory::create('fr_FR');
    // }
    public function load(ObjectManager $manager): void
    {
        //USER

        $users = [];

        $UserData = [
            ['prenom' => 'Jean', 'nom' => 'Dupont', 'email' => 'jean.dupont@example.com'],
            ['prenom' => 'Marie', 'nom' => 'Martin', 'email' => 'marie.martin@example.com'],
            ['prenom' => 'Pierre', 'nom' => 'Lefevre', 'email' => 'pierre.lefevre@example.com'],
            ['prenom' => 'Sophie', 'nom' => 'Durand', 'email' => 'sophie.durand@example.com'],
            ['prenom' => 'Thomas', 'nom' => 'Leroy', 'email' => 'thomas.leroy@example.com'],
            ['prenom' => 'Laura', 'nom' => 'Moreau', 'email' => 'laura.moreau@example.com'],
            ['prenom' => 'Nicolas', 'nom' => 'Dubois', 'email' => 'nicolas.dubois@example.com'],
            ['prenom' => 'Manon', 'nom' => 'Girard', 'email' => 'manon.girard@example.com'],
            ['prenom' => 'Julien', 'nom' => 'Renault', 'email' => 'julien.renault@example.com'],
            ['prenom' => 'Emma', 'nom' => 'Garcia', 'email' => 'emma.garcia@example.com'],
        ];

        foreach ($UserData as $data) {
            $user = new User();
            $user
                ->setPrenom($data['prenom'])
                ->setNom($data['nom'])
                ->setRoles(['ROLE_CLIENT'])
                ->setEmail($data['email'])
                ->setPlainPassword('password');

            $users[] = $user;
            $manager->persist($user);
        }




        $manager->flush();
    }
}
