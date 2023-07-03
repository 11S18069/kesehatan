<?php
/* @var $this TransaksiObatController */
/* @var $data array */

$this->pageTitle = 'Laporan';
$this->widget('ext.highcharts.HighchartsWidget', array(
    'options' => array(
        'chart' => array(
            'type' => 'column',
        ),
        'title' => array(
            'text' => 'Laporan',
        ),
        'xAxis' => array(
            'categories' => array_column($data, 'nama'),
        ),
        'yAxis' => array(
            'title' => array(
                'text' => 'Jumlah',
            ),
        ),
        'series' => array(
            array(
                'name' => 'Jumlah',
                'data' => array_map('intval', array_column($data, 'jumlah')),
            ),
        ),
    ),
));