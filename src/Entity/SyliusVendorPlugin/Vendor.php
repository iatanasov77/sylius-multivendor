<?php namespace App\Entity\SyliusVendorPlugin;

use Doctrine\ORM\Mapping as ORM;
use Odiseo\SyliusVendorPlugin\Entity\Vendor as BaseVendor;

/**
 * @ORM\Entity
 * @ORM\Table(name="odiseo_vendor")
 */
class Vendor extends BaseVendor implements \Stringable
{
    public function __toString(): string
    {
        return (string) $this->getName();
    }
}