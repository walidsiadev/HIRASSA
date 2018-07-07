<?php
defined('BASEPATH') or exit('No direct script access allowed');

/**
 * Class controleur principale pour les action de navigation sur l'application 
 */

class Export extends CI_Controller
{
    function Index(){
        $data = null;
        $this->template_lib->load_template('Admin/export_v','Bienvenue sur HIRASSA',$data);
    }
    
    function Excel(){
        $data = null;
        if ($this->input->post('save')) {
            switch ($this->input->post('table')) {
                case 'profs':
                    $this->profcsv();
                    break;
                case 'salles':
                    $this->Sallecsv();
                    break;
                default:
                    $this->Profs_model->addNewprofs();
                    $data['matieres'] = $this->Matieres_model->getAllmatieres();
                    break;
            }
        }
        $this->template_lib->load_template('Admin/export_v','Bienvenue sur HIRASSA',$data);
    }

    function profcsv()
    {
        $this->load->model('profs/Profs_model');
        $data['profs'] = $this->Profs_model->getAllprofs();
        require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator("");
        $objPHPExcel->getProperties()->setLastModifiedBy("");
        $objPHPExcel->getProperties()->setTitle("");
        $objPHPExcel->getProperties()->setSubject("");
        $objPHPExcel->getProperties()->setDescription("");

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->SetCellValue('A1','Matricule');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1','Le Nom');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1','Le Prenom');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1','L\'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1','La Matières');

        $row = 2;

        foreach ($data['profs']->result() as $key => $value) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A'.$row,$value->prof_matr);
            $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row,$value->prof_nom);
            $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row,$value->prof_prenom);
            $objPHPExcel->getActiveSheet()->SetCellValue('D'.$row,$value->prof_email);
            $objPHPExcel->getActiveSheet()->SetCellValue('E'.$row,$value->mt_nom);
            $row++;
        }
        $filename = "Prof-Export-on".date("Y-m-d-H-i-s").'.xlsx';
        $objPHPExcel->getActiveSheet()->setTitle('Profs-ovreview');

        header('ContentType:application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $writer->save('php://output');
        exit;
    }

    function Sallecsv()
    {
        $this->load->model('salles/Salles_model');
        $data['salle'] = $this->Salles_model->getAllsalles();
        require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel.php');
        require(APPPATH.'third_party/PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setCreator("");
        $objPHPExcel->getProperties()->setLastModifiedBy("");
        $objPHPExcel->getProperties()->setTitle("");
        $objPHPExcel->getProperties()->setSubject("");
        $objPHPExcel->getProperties()->setDescription("");

        $objPHPExcel->setActiveSheetIndex(0);

        $objPHPExcel->getActiveSheet()->SetCellValue('A1','Numération de la Salle');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1','Capacité');
        $objPHPExcel->getActiveSheet()->SetCellValue('C1','Ecole');

        $row = 2;

        foreach ($data['salle']->result() as $key => $value) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A'.$row,$value->sal_num);
            $objPHPExcel->getActiveSheet()->SetCellValue('B'.$row,$value->sal_cap);
            $objPHPExcel->getActiveSheet()->SetCellValue('C'.$row,$value->eco_nom);
            $row++;
        }
        $filename = "Salles-Export-on".date("Y-m-d-H-i-s").'.xlsx';
        $objPHPExcel->getActiveSheet()->setTitle('Salles-ovreview');

        header('ContentType:application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="'.$filename.'"');
        header('Cache-Control: max-age=0');

        $writer = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        $writer->save('php://output');
        exit;
    }
}
