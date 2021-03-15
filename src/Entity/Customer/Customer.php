<?php

declare(strict_types=1);

namespace App\Entity\Customer;

use Doctrine\ORM\Mapping as ORM;
use Sylius\Component\Core\Model\Customer as BaseCustomer;

/**
 * @ORM\Entity
 * @ORM\Table(name="sylius_customer")
 */
class Customer extends BaseCustomer
{
  /** @ORM\Column(type="string",nullable=true) */
  private $secondaryPhoneNumber;

  public function getSecondaryPhoneNumber(): ?string
  {
    return $this->secondaryPhoneNumber;
  }

  public function setSecondaryPhoneNumber(?string $secondaryPhoneNumber): void
  {
    $this->secondaryPhoneNumber = $secondaryPhoneNumber;
  }
}
