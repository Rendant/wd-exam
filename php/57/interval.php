<?php
require_once 'date.php';

class Interval {
    public function __construct(Date $date1, Date $date2) {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function toDays() {
        $date1 = date_create($this->date1);
        $date2 = date_create($this->date2);
        return date_diff($date1, $date2)->format('%a дней');
    }

    public function toMonths() {
        $date1 = date_create($this->date1);
        $date2 = date_create($this->date2);
        return date_diff($date1, $date2)->format('%m месяцев');
    }

    public function toYears() {
        $date1 = date_create($this->date1);
        $date2 = date_create($this->date2);
        return date_diff($date1, $date2)->format('%y лет');
    }

    public function __toString() {
        $this->dateArray = ['years' => $this->toYears(),
            'months' => $this->toMonths(),
            'days' => $this->toDays()
        ];
        return (string)var_dump($this->dateArray);
    }
}
?>