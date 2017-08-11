<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

require_once(__DIR__ . '/lib/PHPExcel-1.8/PHPExcel.php');

if (!empty($_POST['email'])) {
    #$objPHPExcel = new PHPExcel();
    #$objPHPExcel->setActiveSheetIndex(0);

    $email = trim($_POST['email']);

    $fName = 'foo.xls';

    if (!file_exists($fName)) {
        $objPHPExcel = new PHPExcel();
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save($fName);
    }

    $objPHPExcel = PHPExcel_IOFactory::load($fName);
    $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

    // You can get the number of rows like so:
    $num_rows = $objPHPExcel->getActiveSheet()->getHighestRow();

    for ($row = 0; $row < $num_rows; ++ $row) {
        $currEmail = $objWorksheet->getCellByColumnAndRow(1, $row);
        if ($currEmail->getValue() == $email) {
            $ret = ['status' => 'error', 'msg' => 'Такой адрес электронной почты уже существует.'];
            header('Content-Type: application/json');
            echo json_encode($ret);
            exit;
        }
    }

    // Following this, you can look into inserting a row by using the following statement:
    //$objWorksheet->insertNewRowBefore($num_rows + 1, 1);
    $objWorksheet->setCellValueByColumnAndRow(0, $num_rows, date(DATE_RFC822));
    $objWorksheet->setCellValueByColumnAndRow(1, $num_rows, $email);

    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
    $objWriter->save($fName);

    $ret = ['status' => 'success'];
    header('Content-Type: application/json');
    echo json_encode($ret);
    exit;
}
