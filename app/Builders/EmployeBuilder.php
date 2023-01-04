<?php

namespace App\Builders;

class EmployeBuilder {

    private $dailyReport;
    private $dealWithClient;
    private $attend;
    private $leave;

    public function __construct(String $empType)
    {
    }

    public function dailyReport(String $dailyReport):self {
        $this->dailyReport = $dailyReport;
        return $this;
    }

    public function dealWithClient(String $dealWithClient):self {
        $this->dealWithClient = $dealWithClient;
        return $this;
    }

    public function attend(String $attend):self {
        $this->attend = $attend;
        return $this;
    }

    public function leave(String $leave):self {
        $this->leave = $leave;
        return $this;
    }
}
