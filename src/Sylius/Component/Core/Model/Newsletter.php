<?php

declare(strict_types=1);

namespace Sylius\Component\Core\Model;

use Sylius\Component\Customer\Model\Newsletter as BaseNewsletter;
use Sylius\Component\Customer\Model\CustomerInterface as BaseCustomerInterface;

class Newsletter extends BaseNewsletter implements NewsletterInterface
{
    /** @var CustomerInterface|null */
    protected $customer;

    public function getCustomer(): ?BaseCustomerInterface
    {
        return $this->customer;
    }

    public function setCustomer(?BaseCustomerInterface $customer): void
    {
        $this->customer = $customer;
    }
}
