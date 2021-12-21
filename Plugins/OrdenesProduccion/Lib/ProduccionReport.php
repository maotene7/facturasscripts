<?php
/**
 * Copyright (C) ATHOS TRADER SL <info@athosonline.com>
 */
namespace FacturaScripts\Plugins\OrdenesProduccion\Lib;

use Mpdf\Mpdf;
use FacturaScripts\Core\Base\ToolBox;

/**
 * Description of ProduccionReport
 *
 * @author Daniel Fernández Giménez <daniel.fernandez@athosonline.com>
 */
class ProduccionReport
{
    protected $mpdf;
    
    protected function __construct()
    {
        $this->mpdf = new Mpdf([
            'orientation' => 'L',
            'tempDir' => \FS_FOLDER . '/MyFiles/Cache',
            'setAutoTopMargin' => 'pad'
        ]);
        
        $this->mpdf->WriteHTML($this->setPdfCss());
    }
    
    private function setPdfCss()
    {
        return $css = ''
                . '<style>'
                    . 'table {width: 100%;}'
                    . 'table * {margin: 0; padding: 0;}'
                    . 'table thead td {color: #fff; font-weight: bold; background: #000;}'
                    . 'table tr td {border-bottom: 1px solid #000;}'
                    . '.greybg td {background: #f2f2f2;}'
                    . '#footer tr td {border-bottom: none;}'
                . '</style>';
    }
    
    protected function toolBox()
    {
        return new ToolBox();
    }
    
    protected function getFormatHours($hour)
    {
        $horas = 0;
        $minutos = $hour * 60;
        
        while ($minutos >= 60)
        {
            $horas++;
            $minutos = $minutos - 60;
        }
        
        $result = $horas.'.'.(int)$minutos;
        return $result;
    }
    
    protected function getWorkHours($df)
    {
        $orderHoras = 0;
        
        if ($df->y > 0) {
            // years
            $orderHoras = $orderHoras + ($df->y * 8760);
        } if ($df->m > 0) {
            // month
            $orderHoras = $orderHoras + ($df->y * 730.001);
        } if ($df->d > 0) {
            // days
            $orderHoras = $orderHoras + ($df->y * 24);
        } if ($df->h > 0) {
            // hours
            $orderHoras = $orderHoras + $df->h;
        } if ($df->i > 0) {
            // minutes
            $orderHoras = $orderHoras + ($df->i / 60);
        } if ($df->s > 0) {
            // seconds
            $orderHoras = $orderHoras + ($df->i / 3600);
        }

        return round($orderHoras, 2);
    }
}
