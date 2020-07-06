<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Excell extends MY_Controller
{

    public function importExcel()
    {
        $this->load->library('excel');
        $fileName = $_FILES['file']['name'];

        $config['upload_path'] = './upload/backup/';
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'xls|xlsx|csv';
        $config['max_size'] = 10000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file')) {
            echo $this->upload->display_errors();
            exit();
        }
        $inputFileName = './upload/backup/' . $fileName;

        try {
            $inputFileType = PHPExcel_IOFactory::identify($inputFileName);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($inputFileName);
        } catch (Exception $e) {
            die('Error ketika memuat berkas "' . pathinfo($inputFileName, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }

        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();

        for ($row = 2; $row <= $highestRow; $row++) {
            $rowData = $sheet->rangeToArray(
                'A' . $row . ':' . $highestColumn . $row,
                NULL,
                TRUE,
                FALSE
            );
            $data = array(
                "no_pelanggan" => $rowData[0][0],
                "nama_lengkap" => $rowData[0][1],
                "idgolongan" => $rowData[0][2]
            );
            $this->db->insert('tb_pelanggan', $data);
        }
        redirect('pelanggan');
    }
}
