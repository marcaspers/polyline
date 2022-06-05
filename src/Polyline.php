<?php

namespace EndlessMiles\Polyline;

class Polyline
{
    protected int $precision = 5;

    public function decode(string $polyline): array
    {
        $points = array();
        $index = $i = 0;
        $previous = array(0, 0);
        while ($i < strlen($polyline)) {
            $shift = $result = 0x00;
            do {
                $bit = ord(substr($polyline, $i++)) - 63;
                $result |= ($bit & 0x1f) << $shift;
                $shift += 5;
            } while ($bit >= 0x20);

            $diff = ($result & 1) ? ~($result >> 1) : ($result >> 1);
            $number = $previous[$index % 2] + $diff;
            $previous[$index % 2] = $number;
            $index++;
            $points[] = $number / pow(10, $this->precision);
        }
        return $this->pair($points);
    }

    private function pair($list): array
    {
        return is_array($list) ? array_chunk($list, 2) : array();
    }
}
