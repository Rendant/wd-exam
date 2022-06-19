<?php
class Date {

    public function __construct($date = null) {
        $this->date = $date;
        if ($date == null) {
            $this->date = date('j-n-Y');
        }
    }

    public function getDay() {
        return date('j', strtotime($this->date));
    }

    public function getMonth($lang = null) {
        if ($lang == 'en') {
            $engMonthNames = [ 1 =>
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
                'July',
                'August',
                'September',
                'October',
                'November',
                'December'
            ];
            return $engMonthNames[date('n', strtotime($this->date))];
        }
        elseif ($lang == 'ru') {
            $ruMonthNames = [ 1 =>
                'Январь',
                'Февраль',
                'Март',
                'Апрель',
                'Май',
                'Июнь',
                'Июль',
                'Август',
                'Сентябрь',
                'Октябрь',
                'Ноябрь',
                'Декабрь'
            ];
            return $ruMonthNames[date('n', strtotime($this->date))];
        }
        else {
            return date('n', strtotime($this->date));
        }
    }

    public function getYear() {
        return date('Y', strtotime($this->date));
    }

    public function getWeekDay($lang = null) {
        if ($lang == 'en') {
            $engDayNames = [
                'Sunday',
                'Monday',
                'Tuesday',
                'Wednesday',
                'Thursday',
                'Friday',
                'Saturday'
            ];
            return $engDayNames[date('w', strtotime($this->date))];
        }
        elseif ($lang == 'ru') {
            $ruDayNames = [
                'Воскресенье',
                'Понедельник',
                'Вторник',
                'Среда',
                'Четверг',
                'Пятница',
                'Суббота',
            ];
            return $ruDayNames[date('w', strtotime($this->date))];
        }
        else {
            return date('w', strtotime($this->date));
        }
    }


    public function addDay($value) {
        $NewDate = date_create($this->date);
        date_modify($NewDate, "+$value days");
        return date_format($NewDate, 'j-n-Y');
    }

    public function subDay($value) {
        $NewDate = date_create($this->date);
        date_modify($NewDate, "-$value days");
        return date_format($NewDate, 'j-n-Y');
    }

    public function addMonth($value) {
        $NewDate = date_create($this->date);
        date_modify($NewDate, "+$value month");
        return date_format($NewDate, 'j-n-Y');
    }

    public function subMonth($value) {
        $NewDate = date_create($this->date);
        date_modify($NewDate, "-$value month");
        return date_format($NewDate, 'j-n-Y');
    }

    public function addYear($value) {
        $NewDate = date_create($this->date);
        date_modify($NewDate, "+$value year");
        return date_format($NewDate, 'j-n-Y');
    }

    public function subYear($value) {
        $NewDate = date_create($this->date);
        date_modify($NewDate, "-$value year");
        return date_format($NewDate, 'j-n-Y');
    }

    public function format($format) {
        return date($format, strtotime($this->date));
    }

    public function __toString() {
        return $this->date;
    }
}
?>
