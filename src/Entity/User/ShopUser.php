<?php

declare(strict_types=1);

namespace App\Entity\User;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\ShopUser as BaseShopUser;

use Vankosoft\SyliusMultiVendor\Model\Interfaces\MultiVendorShopUserInterface;
use Vankosoft\SyliusMultiVendor\Model\Traits\MultiVendorShopUserEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_shop_user")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_shop_user')]
class ShopUser extends BaseShopUser implements MultiVendorShopUserInterface
{
    use MultiVendorShopUserEntity;
}
