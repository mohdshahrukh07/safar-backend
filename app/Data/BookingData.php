<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class BookingData extends Data
{
    public function __construct(
        public ?string $uuid,
        public string $address,
        public string $startDate,
        public int $travelPackegeId,
        public int $adult,
        public ?int $teenagers,
        public ?int $children

    ) {}
}
