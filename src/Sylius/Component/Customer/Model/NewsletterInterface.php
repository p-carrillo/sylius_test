<?php

declare(strict_types=1);

namespace Sylius\Component\Customer\Model;

use Sylius\Component\Resource\Model\ResourceInterface;

interface NewsletterInterface extends ResourceInterface
{
    public function getTitle(): ?string;

    public function setTitle(?string $title): void;
}
