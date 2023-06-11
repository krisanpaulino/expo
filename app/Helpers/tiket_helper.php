<?php
function generateKodeBooking($order_id)
{
    // dapatkan random char sebanyak 5 buah
    // https://stackoverflow.com/questions/5438760/generate-random-5-characters-string
    $rndchar = substr(str_shuffle(str_repeat("123456789ABCDEFGHJKLMNPQRSTUVWXYZ", 5)), 0, 5);
    return sprintf("%s%d", $rndchar, $order_id);
}
