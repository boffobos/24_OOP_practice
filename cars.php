<?php
    abstract class AbstractVehicle implements CarInterfaces{
        abstract public function startEngine();
        abstract public function stopEngine();
        abstract function specialAction();

        protected $engineState;
        protected $mass;
        protected $fuel;
        protected $fuelType;
        protected $bodyColor;
        protected $odometr;
        
        public function refilling(int $fuel){
            $this->fuel += $fuel;
        }
        public function openCar(){
            //some implementation
        }
        public function driving($someInputs){
            //some implementation
        }
        

        public function paint(string $color) {
            $this->color = $color;
            echo "You've just painted your vehicle";
        }

        public function massInitialisation(int $mass) {
            if($this->mass === 0) {$this->mass = $mass; 
            } else {
                echo 'mass has been already set';
            }
        }


        public $beepMelody;
        public function beep() {
            echo $this->beepMelody;
        }

        public function wipers() {
            //
        }
    }

    interface CarInterfaces {
        public function refilling(int $fuel);
        public function openCar();
        public function driving($someInputs);
    }

    class Sedan extends AbstractVehicle {
        private $currentSpeed = 0;
        protected $beepMelody = 'Beep-Beep';
        protected $wheelType = 'summer';
        public $wheelBrand = 'Pirelli';
        protected $engineType = 'internal combustion engine';
        protected $fuelType = 'Gas';
        protected $enginePower = 115;


        public function moveForward() {
            //
        }

        public function moveBackward() {

        }

        public function startEngine() {
            if(!$this->engineState) $this->engineState = 1;
            echo 'Engine started';
        }
        public function stopEngine() {
            if($this->engineState) $this->engineState = 0;
            echo 'Engine stoped';
            
        }
        
        public function specialAction() {
            $accelerate = 10;
            $this->currentSpeed += $accelerate;
        }
        public function wipers() {
            //
        }

        public function driving($someInputs){
            //some other implementation for vehicle type
        }
    }

    class FireTruck extends AbstractVehicle {
        protected $bodyColor = 'red';
        protected $beepMelody = 'ui ui ui ui';
        protected $tankVolume = 1000;
        protected $tankState = 1000;
        protected $enginePower = 250;

        public function refillTank(int $volume) {
           if($this->tankState + $volume <= $this->tankVolume) {
                $this->tankState += $volume;
           } elseif($this->tankState + $volume > $this->tankVolume) {
                $this->tankState = $this->tankVolume;
           }
        }

        public function moveForward() {
            //
        }

        public function moveBackward() {

        }

        public function startEngine() {
            //
        }
        public function stopEngine() {

        }
        public function specialAction() {
            //push water
            //extend stairs
        }
    }

    class ElectricCar extends AbstractVehicle {
        protected $batteriesVolume = 150;
        protected $batteriesState = 150;
        protected $color = 'white';

        public function openCar() {
            //some special opening
        }
        
        public function refilling(int $fuel) {
            //for electric car
        }

        public function startEngine(){
            //some implementation for electric car
        }
        public function stopEngine(){
            //some implementation for electric car
        }
        public function specialAction(){
            //charge from solar panels
        }

        public function firmwareUpdate() {
            
        }

        public function moveForward() {
            
        }

        public function moveBackward() {

        }
    }

   
?>