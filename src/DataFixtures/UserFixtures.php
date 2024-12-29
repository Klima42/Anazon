<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('admin@admin.com');
        $user->setRoles(['ROLE_ADMIN']);
        // $user->setPassword('$2y$13$I1H/iNBYaMoNH7eFfjsXv.M.55hhwTRmkcU3tAYD/QPirvbFJ.v0W');
        $user->plainPassword = 'demo';
        $manager->persist($user);

        $manager->flush();
    }
}
