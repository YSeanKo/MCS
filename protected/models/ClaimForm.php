<?php
class ClaimForm extends CFormModel
{
    public $departDate;
    public $arrivalDate;
    public $departTime;
    public $arrivalTime;
    public $departLocation;
    public $arrivalLocation;
    public $dutyType;
    public $vehicle;
    public $departCity;
    public $departCityLat;
    public $departCityLng;
    public $destinationCity;
    public $destinationCityLat;
    public $destinationCityLng;
    public $distance;

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // name, email, subject and body are required
            array('distance, departDate, arrivalDate, departTime, arrivalTime, departLocation, arrivalLocation,dutyType, vehicle, departCity', 'required'),
        );
    }

    public function claim()
    {
        if ($this->validate()) {
            $form = new ClaimForm();
            $form->departDate = $this->departDate;
            $form->arrivalDate = $this->arrivalDate;
            $form->departTime = $this->departTime;
            $form->arrivalTime = $this->arrivalTime;
            $form->departLocation = $this->departLocation;
            $form->departCity = $this->departCity;
            $form->departCityLat = $this->departCityLat;
            $form->departCityLng = $this->departCityLng;
            $form->arrivalLocation = $this->arrivalLocation;
            $form->destinationCity = $this->destinationCity;
            $form->destinationCityLat = $this->destinationCityLat;
            $form->destinationCityLng = $this->destinationCityLng;
            $form->dutyType = $this->dutyType;
            $form->vehicle = $this->vehicle;
            $form->distance = $this->distance;
            $form->save();

            return true;
        } else {
            return false;
        }
    }
}
?>
