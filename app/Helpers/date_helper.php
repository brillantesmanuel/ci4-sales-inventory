<?php 

function humanizer($date = '', $format = 'F d, Y') {
    
    if ($date !== '') {
        return date($format, strtotime($date));
    }

    return false;
}