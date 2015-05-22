<?php
    namespace Acme\HelloBundle\DataFixtures\ORM;

    use Doctrine\Common\DataFixtures\FixtureInterface;
    use Doctrine\Common\Persistence\ObjectManager;
    use App\AppBundle\Entity\Author;

    class LoadUserData implements FixtureInterface
    {
        /**
         * {@inheritDoc}
         */
        public function load(ObjectManager $manager)
        {
            $author = new Author('Raul', 'Blasco');

            $manager->persist($author);
            $manager->flush();
        }
    }