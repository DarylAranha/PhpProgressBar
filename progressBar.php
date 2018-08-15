<?php
/**
 *
 * Project: Display progress bar
 * Input: Total_Count, (Optional values: message to display and the width of progress bar)
 *
*/

class ProgressBar{

    private $progress;
    private $endValue;
    private $message;
    private $progressBarWidth;

    function __construct($finalValue, $message = "Completed", $progressBarWidth = 50) {
        $this->progress = 0;
        $this->endValue = $finalValue;
        $this->message = $message;
        $this->progressBarWidth = $progressBarWidth;
    }

    function displayProgress($done) {
        $precision = round(($done * 100) / $this->endValue);
        $barStatus = round(($this->progressBarWidth * $precision) / 100);
        return printf("Start  %s%%[%s>%s]  %s\r", $precision, str_repeat("=", $barStatus), str_repeat(" ", $this->progressBarWidth-$barStatus), $this->message);
    }
}
