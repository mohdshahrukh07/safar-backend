<?php

namespace App\Data;

use Spatie\LaravelData\Data;

class BookingData extends Data
{
    public function __construct(
        public string $id,
        public string $address,
        public string $startDate,
        public ?int $adult,
        public ?int $teenagers,
        public ?int $children

    ) {}
}
