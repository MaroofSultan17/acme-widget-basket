<?php

declare(strict_types=1);

namespace Acme\Service;

final readonly class OfferService
{
    public function __construct(private array $offers) {}

    public function listOffers(): array
    {
        $offers = $this->offers;

        return $offers;
    }
}
