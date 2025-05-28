<?php

class ThermostatPlan extends IPSModule
{
    public function Create()
    {
        parent::Create();
        $this->RegisterPropertyString("Name", "Standard");
        $this->RegisterPropertyInteger("TemperatureDay", 21);
        $this->RegisterPropertyInteger("TemperatureNight", 17);
        $this->RegisterPropertyInteger("PlanID", 0);
    }

    public function ApplyChanges()
    {
        parent::ApplyChanges();
        // Hier kann die Logik zur Ansteuerung des Wochenplans implementiert werden
    }
}