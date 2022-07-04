<?php

declare(strict_types=1);

namespace Sylius\Component\Core\Model;

use Sylius\Component\Customer\Model\NewsletterInterface as BaseNewsletterInterface;
use Sylius\Component\Customer\Model\CustomerAwareInterface;

interface NewsletterInterface extends BaseNewsletterInterface, CustomerAwareInterface
{
}
