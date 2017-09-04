<?php 
namespace Nora\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Nora\EventBundle\Entity\Event;
// use AppBundle\Entity\User;

class LoadEvents implements FixtureInterface
{
	/**
	 * [load description]
	 */
    public function load(ObjectManager $manager)
    {
        $event1 = new Event();
        $event1->setName('Darth\'s Birthday Party!');
        $event1->setLocation('Deathstar');
        $event1->setTime(new \DateTime('tomorrow noon'));
        $event1->setDetails('Ha! Darth HATES surprises!!!');
        $manager->persist($event1);

        $event2 = new Event();
        $event2->setName('Rebellion Fundraiser Bake Sale!');
        $event2->setLocation('Endor');
        $event2->setTime(new \DateTime('Thursday noon'));
        $event2->setDetails('Ewok pies! Support the rebellion!');
        $manager->persist($event2);

        // the queries aren't done until now
        $manager->flush();
    }
}
