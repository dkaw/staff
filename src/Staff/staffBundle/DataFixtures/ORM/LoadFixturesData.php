<?php

namespace Staff\staffBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAware;
use Doctrine\ORM\EntityManager;
use Nelmio\Alice\Loader\Yaml;
use Nelmio\Alice\ORM\Doctrine;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Charge des fixtures de base pour utiliser l'application
 *
 * @package Leha\CommonBundle\DataFixtures\ORM
 */
class LoadAttributsData extends AbstractFixture implements FixtureInterface, OrderedFixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    private $loader;

    /**
     * Constructor
     */
    public function  __construct()
    {
        $this->loader = new Yaml('fr_FR', array($this));
    }
    /**
     * Sets the Container.
     *
     * @param ContainerInterface|null $container A ContainerInterface instance or null
     *
     * @api
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * Charge une liste de données
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        foreach ($this->getFixturesFiles() as $file) {
            $this->loadFixtures($manager, $file);
        }
    }

    /**
     * get fixture files
     *
     * @return array
     */
    public function getFixturesFiles()
    {
        $bundles = $this->container->get('kernel')->getBundles();

        return array(
            //referential data
            $bundles['StaffstaffBundle']->getPath() . '/Resources/fixtures/Personnes.yml',
            $bundles['StaffstaffBundle']->getPath() . '/Resources/fixtures/Pole.yml',
            $bundles['StaffstaffBundle']->getPath() . '/Resources/fixtures/Services.yml',
            $bundles['StaffstaffBundle']->getPath() . '/Resources/fixtures/Sites.yml'

        );
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 200;
    }

    /**
     * Charger les fixtures de CentralBundle selon le parametre.
     *
     * @param EntityManager     $em
     * @param string            $fixtureFile
     */
    protected function loadFixtures(EntityManager $em, $fixtureFile)
    {
        $objects = $this->loader->load($fixtureFile);

        $toPersist = array();
        foreach ($objects as $object) {
            $toPersist[get_class($object)][] = $object;
        }

        foreach ($toPersist as $objects) {
            $persister = new Doctrine($em);
            $persister->persist($objects);
        }
    }

    /**
     * Convertit une string en datetime
     *
     * @param string $datetime
     *
     * @return \DateTime
     */
    public function getDateTime($datetime)
    {
        return new \DateTime($datetime);
    }
}