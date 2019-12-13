<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $birthDay = new DateTime('NOW');

        $user = new User;
        $user->setEmail('toto@toto.fr');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('azerty');
        $user->setFirstname('');
        $user->setLastname('');
        $user->setBirthday($birthDay->format('d/m/Y'));
        $manager->flush();
    }
}
