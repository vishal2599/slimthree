<?php


namespace Vishal\Models;

class User
{
    public function fullName()
    {
        if ($this->last_name === null) {
            return $this->name;
        }
        return $this->name . " " . $this->last_name;
    }

    public function formattedBalance()
    {
        if ($this->balance == 0) {
            return "Zero Balance";
        }

        return '$' . number_format($this->balance, 2);
    }
}
