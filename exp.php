<?php
class MyExp extends \Exception {

}

echo '1';
try {
    throw new MyExp("mne tak xochentsa");
    echo '3';
} catch (\RuntimeException $e) {
    echo $e->getMessage();
} finally {
    echo '4';
}

echo '2';
