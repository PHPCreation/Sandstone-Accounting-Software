<?php
namespace Elcweb\Bundle\AccountingBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Elcweb\Bundle\AccountingBundle\Entity\AccountType;

class LoadAccountTypeData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $accountType = new AccountType();
        $accountType->setName('Credit');
        $accountType->setValue('+');

        $manager->persist($accountType);

        $accountType = new AccountType();
        $accountType->setName('Debit');
        $accountType->setValue('-');

        $manager->persist($accountType);
        $manager->flush();
    }
}