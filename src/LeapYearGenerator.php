<?php
    class LeapYearGenerator
    {
        function isleapYear($input_year)
        {
            $result = $input_year % 4 == 0;

            if ($result) {
                $result = $input_year % 100 != 0;
                if (!$result) {
                    $result = $input_year % 400 == 0;
                }
            }
            return $result;
        }
    }
?>
