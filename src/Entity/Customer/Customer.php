<?php

declare(strict_types=1);

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Customer as BaseCustomer;

use Vankosoft\SyliusMultiVendor\Model\Interfaces\MultiVendorShopUserInterface;
use Vankosoft\SyliusMultiVendor\Model\Traits\MultiVendorShopUserEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_customer")
 */
#[ORM\Entity]
#[ORM\Table(name: 'sylius_customer')]
class Customer extends BaseCustomer implements MultiVendorShopUserInterface
{
    use MultiVendorShopUserEntity;
}
