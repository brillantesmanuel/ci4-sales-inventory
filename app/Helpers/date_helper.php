<?php 

function humanizer($date = '') {
    
    if ($date !== '') {
        return date('F d, Y', strtotime($date));
    }

    return false;
}