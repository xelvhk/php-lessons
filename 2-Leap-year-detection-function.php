<?php
//=========== Task 2. Leap year detection function ==============
function isLeapYear($year) {
   return $year % 400 == 0 || ($year % 100 != 0 && $year % 4 == 0);
}
