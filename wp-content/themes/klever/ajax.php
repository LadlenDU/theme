<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

#define('ABSPATH', __DIR__ . '/../../../');

/** Load WordPress Bootstrap */
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php');

require_once (__DIR__ . '/../../plugins/mailpoet/mailpoet.php');

#use MailPoet\API\JSON\v1\Segments;
use MailPoet\Models\Segment;

$ret = Segment::createOrUpdate(['name' => 'TB']);
//print_r($ret);

//$tt = $ret->orm->select('*')->findArray();
$tt = $ret->orm->select('id')->where(['name' => 'TB2'])->findArray();
print_r($tt);

//echo "\n\n\nID: " . $ret->created_at . "\n\n";

exit;

require_once(__DIR__ . '/lib/PHPExcel-1.8/PHPExcel.php');

if (!empty($_POST['sync'])) {

}

if (!empty($_POST['email'])) {
    $email = trim($_POST['email']);

    $fName = __DIR__ . '/../../../subscribed_users.xls';

    if (!file_exists($fName)) {
        $objPHPExcel = new PHPExcel();
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save($fName);
    }

    $objPHPExcel = PHPExcel_IOFactory::load($fName);
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

    // You can get the number of rows like so:
    $num_rows = $objWorksheet->getHighestRow();

    for ($row = 1; $row <= $num_rows; ++$row) {
        $currEmail = $objWorksheet->getCellByColumnAndRow(1, $row);
        if ($currEmail->getValue() == $email) {
            $ret = ['status' => 'error', 'msg' => 'Такой адрес электронной почты уже существует.'];
            header('Content-Type: application/json');
            echo json_encode($ret);
            exit;
        }
    }

    $objWorksheet->setCellValueByColumnAndRow(0, $num_rows + 1, date(DATE_RFC822));
    $objWorksheet->setCellValueByColumnAndRow(1, $num_rows + 1, $email);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save($fName);

    $ret = ['status' => 'success'];
    header('Content-Type: application/json');
    echo json_encode($ret);
    exit;
}
