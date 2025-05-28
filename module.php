<?php

class ThermostatPlan extends IPSModule
{
    public function Create()
    {
        parent::Create();
        $this->RegisterPropertyString('Plan', '');
    }

    public function ApplyChanges()
    {
        parent::ApplyChanges();
    }

    public function SetTemperaturePlan(string $json)
    {
        IPS_LogMessage("ThermostatPlan", "Neuer Plan empfangen: " . $json);
        $this->SetBuffer('Plan', $json);
    }

    public function GetTemperaturePlan()
    {
        return $this->GetBuffer('Plan');
    }
}