<?php

namespace Trombinoscope\StaffBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

/**
 * Created by PhpStorm.
 * User: kawtar
 * Date: 15/04/15
 * Time: 16:17
 */
class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('main');

        $menu->addChild('Entrée 1', array('route' => 'Trombinoscopestaff_homepage'))
            ->addChild('Entrée 1.1', array('route' => 'Trombinoscopestaff_personne'))
            ->addChild('Entrée 1.1.1', array('route' => 'Trombinoscopestaff_personne_service'));

        return $menu;
    }

    public function myBreadCrumb(FactoryInterface $factory, array $options)
    {
        $menu = $this->leftExtranetMenu($factory, $options);

        $matcher = $this->container->get('knp_menu.matcher');
        $voter = $this->container->get('knp_menu.voter.router');
        $matcher->addVoter($voter);

        $treeIterator = new RecursiveIteratorIterator(
            new KnpMenuIteratorRecursiveItemIterator(
                new ArrayIterator(array($menu))
            ),
            RecursiveIteratorIterator::SELF_FIRST
        );

        $iterator = new KnpMenuIteratorCurrentItemFilterIterator($treeIterator, $matcher);

        // Set Current as an empty Item in order to avoid exceptions on knp_menu_get
            $current = new KnpMenuMenuItem('', $factory);

        foreach ($iterator as $item) {
            $item->setCurrent(true);
            $current = $item;
            break;
        }

        return $current;
    }


}