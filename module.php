<?php
class ThermostatPlan extends IPSModule {
    public function Create() {
        parent::Create();
        $this->RegisterPropertyString("Plan", "{}");
    }

    public function ApplyChanges() {
        parent::ApplyChanges();
    }

    public function SetPlan(string $json) {
        IPS_LogMessage("ThermostatPlan", "Neuer Plan: " . $json);
    }
}
?>