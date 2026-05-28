<?php
try{
    $result = 10 / 0;
} catch (DivisionByZeroError $e) {
    echo "Błąd: " . $e->getMessage(Błąd);
}
?>
<?php
try {
    if (Sage < 0) {
        throw
    }
}
