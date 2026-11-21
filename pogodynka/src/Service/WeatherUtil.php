<?php
declare(strict_types=1);

namespace App\Service;

use App\Entity\Location;
use App\Entity\Measurement;
use App\Repository\LocationRepository;

class WeatherUtil
{
    public function __construct(
        private LocationRepository $locationRepository
    ) {}

    /**
     * @return Measurement[]
     */
    public function getWeatherForLocation(Location $location): array
    {
        return $location->getMeasurements()->toArray();
    }

    /**
     * @return Measurement[]
     */
    public function getWeatherForCountryAndCity(string $countryCode, string $city): array
    {
        $location = $this->locationRepository
            ->findByCountryAndCity($countryCode, $city);

        if ($location === null) {
            return [];
        }

        return $this->getWeatherForLocation($location);
    }
}
