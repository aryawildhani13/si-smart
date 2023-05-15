<?php
ob_start();
session_start();

define('ENVIRONMENT', '');

$is_production = fn () => ENVIRONMENT === 'PRODUCTION';

define('HARI', ["Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu"]);
define('WAKTU', ['14:30:00', '15:30:00', '16:30:00']);
define('BULAN', [
    'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
]);

define('XLSX_AUTHOR', 'Ita Lailatul Fauziah');
define('XLSX_COMPANY', 'Bimbel Smart Solution');
define('XLSX_DATA_BIAYA_TRANSPORT', 4000);

date_default_timezone_set('Asia/Jakarta');

if ($is_production()) {
    define('ROOT_PATH', 'si-smart.000webhostapp.com/');
} else {
    define('ROOT_PATH', dirname(__FILE__) . '/');
}
