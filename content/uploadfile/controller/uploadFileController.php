<?php
session_start();

ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);

include "../model/uploadModel.php";
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use \PhpOffice\PhpSpreadsheet\Shared\Date;


if(isset($_FILES["file"]))
{
    $fileName = $_FILES['file']['name'];
    $file_ext = pathinfo($fileName, PATHINFO_EXTENSION);

    $allowed_ext = ['xls','csv','xlsx'];

    if(in_array($file_ext, $allowed_ext))
    {

        $nombreArchivo = $_FILES['file']['tmp_name'];
        $documento = IOFactory::load($nombreArchivo);
        $totalHojas = $documento->getSheetCount();
        $hojaActual = $documento->getSheet(0);
        $numeroFilas = $hojaActual->getHighestDataRow();
        $letra = $hojaActual->getHighestColumn();
    

    
        for($indiceFila = 2; $indiceFila<=$numeroFilas; $indiceFila++){

            $excelTimestamp = $hojaActual->getCellByColumnAndRow(1,$indiceFila)->getValue();
            $aux = Date::excelToDateTimeObject($excelTimestamp);
            $valor1[$indiceFila-2] = $aux->format('Y-m-d');
            $valor2[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(2,$indiceFila);
            $valor3[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(3,$indiceFila);
            $valor4[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(4,$indiceFila);
            $valor5[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(5,$indiceFila);
            $valor6[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(6,$indiceFila); 
            $valor7[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(7,$indiceFila);
            $valor8[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(8,$indiceFila); 
            $valor9[$indiceFila-2] = $hojaActual->getCellByColumnAndRow(9,$indiceFila);
            $valor10[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(10,$indiceFila); 
            $valor11[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(11,$indiceFila);
            $valor12[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(12,$indiceFila);
            $valor13[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(13,$indiceFila);
            $valor14[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(14,$indiceFila);
            $valor15[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(15,$indiceFila);
            $valor16[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(16,$indiceFila);
            $valor17[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(17,$indiceFila);
            $valor18[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(18,$indiceFila);
            $valor19[$indiceFila-2]= $hojaActual->getCellByColumnAndRow(19,$indiceFila);
            $facebook[$indiceFila-2]=0;
            $instagram[$indiceFila-2]=0;
            $tiktok[$indiceFila-2]=0;
            $linkedin[$indiceFila-2]=0;
            $otros[$indiceFila-2]=0;
            $redes = explode("/",$valor9[$indiceFila-2]);
        }

        $uploadFile = uploadFileTemp($valor1,$valor2,$valor3,$valor4,$valor5,$valor6,$valor7,$valor8,$valor9,$valor10,$valor11,$valor12,$valor13,$valor14,$valor15,$valor16
        ,$valor17,$valor18,$valor19,$numeroFilas);
        echo $uploadFile;
    }
}


?>
