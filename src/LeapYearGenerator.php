<?php
    class LeapYearGenerator
    {
        function isleapYear($input_year)
        {
            return $input_year % 4 == 0;
        }
    }
?>
