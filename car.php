<?php


// car.php


require_once 'vehicle.php';

class Car extends Vehicle
{

    const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
// Do not modify the rest of the file

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $energyLevel;

    private $hasParkBrake;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getHasParkBrake()
    {
        return $this->$HasParkBrake;
    }
    public function setHasParkBrake(bool $HasParkBrake): void
    {
        $this->HasParkBrake = $HasParkBrake;
    }
    function start(bool $HasParkBrake)
    {
        if ($HasParkBrake === true) {
            throw new Exception("You can't go!");
        }
        else
        {
            echo "You can go !";
        }
    }


}
