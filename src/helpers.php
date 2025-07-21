<?php
if (!function_exists('format_date')) {
    function format_date($date, $format = 'd-F-Y')
    {
        try {
            return \Carbon\Carbon::parse($date)->format($format);
        } catch (\Exception $e) {
            return null;
        }
    }
}
