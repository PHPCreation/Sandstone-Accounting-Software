<?php
namespace Elcweb\Bundle\AccountingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Elcweb\Bundle\AccountingBundle\Entity\Account;

class LoadAccountData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        /* TODO
        $i = 0;
        $name = 'account'.$i;
        $$name = new Account();
        $$name->setName('Actif');
        $$name->setCode('');
        //$account0->setType(''); //Credit
        //Category
        $$name->setParent(null);
        $$name->setDescription('');
        $manager->persist($$name);

        $i = 1;
        $name = 'account'.$i;
        $$name = new Account();
        $$name->setName('Passif');
        $$name->setCode('');
        //$account0->setType(''); //Credit
        //Category
        $$name->setParent(null);
        $$name->setDescription('');
        $manager->persist($$name);

        $manager->flush();
        */
    }
}

/*
no type grand livre

c actif
c depense
c passif
c revenue
c avoir aux actionnnaires


*/