<?php

use MailPoet\Models\Segment;
use MailPoet\Models\Subscriber;

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);

/** Название списка подписчиков */
define('SUBSCRIBERS_LIST', 'TB');
define('SUBSCRIBERS_FILE', __DIR__ . '/../../../subscribed_users.xls');

/** Load WordPress Bootstrap */
require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/wp-load.php');
require_once(__DIR__ . '/../../plugins/mailpoet/mailpoet.php');
require_once(__DIR__ . '/lib/PHPExcel-1.8/PHPExcel.php');

$subscriberListId = null;

function getSubscriberListId() {
    $sl = Segment::createOrUpdate(['name' => SUBSCRIBERS_LIST]);
    $idArr = $sl->orm->select('id')->where(['name' => SUBSCRIBERS_LIST])->findArray();
    return $idArr[0]['id'];
}

/**
 * Начальная синхронизация.
 */
if (!empty($_GET['sync'])) {
    $subscriberListId = getSubscriberListId();

    header('Content-Type: text/html; charset=utf-8');

    if (file_exists(SUBSCRIBERS_FILE)) {
        $objPHPExcel = new PHPExcel();
        $objPHPExcel = PHPExcel_IOFactory::load(SUBSCRIBERS_FILE);
        $objWorksheet = $objPHPExcel->setActiveSheetIndex(0);

        // Берем все email из файла
        $emailList = [];
        $num_rows = $objWorksheet->getHighestRow();
        for ($row = 1; $row <= $num_rows; ++$row) {
            if ($email = $objWorksheet->getCellByColumnAndRow(1, $row)->getValue()) {
                $emailList[] = [strtolower($email)];
            }
        }

        // Подготавливаем данные для ввода в БД mailpoet
        $data['columns']['email']['index'] = 0;
        $data['columns']['email']['validation_rule'] = false;
        $data['subscribers'] = $emailList;
        //$data['timestamp'] = time() . '.809';
        $data['timestamp'] = microtime(true);
        $data['segments'] = [$subscriberListId];
        $data['updateSubscribers'] = true;

        try {
            //$data = '{"columns":{"email":{"index":0,"validation_rule":false}},"subscribers":[["twilighttowerdu@gmail.com"]],"timestamp":1503761659.242,"segments":["2"],"updateSubscribers":true}';
            $import = new \MailPoet\Subscribers\ImportExport\Import\Import(
            //json_decode($data, true)
                $data
            );
            $process = $import->process();
            echo 'SUCCESS: ' . print_r($process, true);
        } catch (\Exception $e) {
            echo 'ERROR: ' . print_r((array(
                    $e->getCode() => $e->getMessage()
                )), true);
        }
    }

    exit;
}

if (!empty($_POST['email'])) {
    $email = trim($_POST['email']);

    if (!file_exists(SUBSCRIBERS_FILE)) {
        $objPHPExcel = new PHPExcel();
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        $objWriter->save(SUBSCRIBERS_FILE);
    }

    $objPHPExcel = PHPExcel_IOFactory::load(SUBSCRIBERS_FILE);
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
    $objWriter->save(SUBSCRIBERS_FILE);

    // Размещение в БД mailpoet
    if (!$subscriberListId) {
        $subscriberListId = getSubscriberListId();
    }
    $data['email'] = $email;
    $data['first_name'] = '';
    $data['last_name'] = '';
    $data['status'] = 'subscribed';
    $data['segments'][] = $subscriberListId;
    $subscriber = Subscriber::createOrUpdate($data);
    $errors = $subscriber->getErrors();

    $ret = ['status' => 'success'];
    header('Content-Type: application/json');
    echo json_encode($ret);
    exit;
}
