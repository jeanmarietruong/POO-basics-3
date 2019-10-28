<?php
// Truck.php
require_once 'Vehicle.php';
class truck extends vehicle
{
    /**
     * @var int
     */
    private $capacityStorage;
    /**
     * @var int
     */
    private $lading = 0;
    public function __construct(string $color, int $nbSeats, int $capacityStorage, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->setCapacityStorage($capacityStorage);
        $this->setEnergy($energy);
    }
    public function getCapacityStorage(): int
    {
        return $this->capacityStorage;
    }
    public function setCapacityStorage(string $capacityStorage): truck
    {
        $this->capacityStorage = $capacityStorage;
        return $this;
    }
    public function getLading(): int
    {
        return $this->lading;
    }
    public function setLading(int $lading): truck
    {
        $this->lading = $lading;
        return $this;
    }
    public function isFull() : string
    {
        if ($this->lading >= $this->capacityStorage) {
            $result = "full";
        } else {
            $result = "in filling";
        }
        return $result;
    }
}