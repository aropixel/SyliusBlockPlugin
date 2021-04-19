<?php


namespace Aropixel\SyliusBlockPlugin\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $blockMenu = $menu
            ->addChild('menu-blocks')
            ->setLabel('Blocks')
        ;

        $blockMenu
            ->addChild('blocks', ['route' => 'aropixel_admin_block_index'])
            ->setLabelAttribute('icon', 'file alternate')
            ->setLabel('Blocks')
        ;


        $blockMenu
            ->addChild('categories', ['route' => 'aropixel_admin_block_category_index'])
            ->setLabelAttribute('icon', 'tags')
            ->setLabel('Categories')
        ;
    }
}
