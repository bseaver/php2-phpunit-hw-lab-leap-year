<?php
    require_once 'src/LeapYearGenerator.php';

    class LeapYearGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_isLeapYear_false()
        {
            // Arrange
            $test_LeapYearGenerator = new LeapYearGenerator;
            $input = 1993;

            // Act
            $result = $test_LeapYearGenerator->isLeapYear($input);

            // Assert
            $this->assertEquals(false, $result);
        }

        function test_isLeapYear_div4()
        {
            // Arrange
            $test_LeapYearGenerator = new LeapYearGenerator;
            $input = 2004;

            // Act
            $result = $test_LeapYearGenerator->isLeapYear($input);

            // Assert
            $this->assertEquals(true, $result);
        }

    }
?>
