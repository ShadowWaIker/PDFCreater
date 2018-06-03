<?php
//============================================================+
// File name   : CreatPDF.php
// Begin       : 2018-05-05
// Last Update : 2018-05-05
//
// Description : 生成《山西省高校毕业生求职补贴申请表》
//
// Author: 冯国清
//
//============================================================+

//传入参数
$code = '201508511083-001';
$xi = '计算机系';
$year = date("Y");
$xh = '201508511083';
$xm = '冯国清';
$xb = '男';
$mz = '乌孜别克族';
$syd = '生源地生源地生源地生源地生源地生源地'; //最多20字
$xl = '本科';
$zy = '信息科学与技术';
$yddh = '18834000000';
$sfzhm = '150302199603223514';
$qq = '9945992922';
$jtdz = '家庭地址家庭地址家庭地址家庭地址家庭地址家庭地址家庭地址家庭地址家庭地址家庭地址家庭地址'; //最多58字
$lxdh = '0340-3339098';
$dzyx = '9945992922@hotmail.com';
$khh = '开户行开户行开户行开户行开户行开户行'; //最多20字
$yhzh = '6217002710000684874';

// 引入TCPDF库
require_once('./TCPDF/tcpdf.php');

// 实例化PDF对象
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

// 设置文档信息
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('冯国清');
$pdf->SetTitle('山西省高校毕业生求职补贴申请表');
$pdf->SetSubject('山西省高校毕业生求职补贴申请表');
$pdf->SetKeywords('null, null');

// 是否显示页眉
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

// set auto page breaks 设置自动分页
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);


// ---------------------------------------------------------

// 添加一页
$pdf->AddPage();

//绘制表格背景
//$pdf->Image('bg.png');
$pdf->Image('./TCPDF/images/qzbt.jpg', 19, 30, 172, 240, '', '', '', false, 300, '', false, false, 0);

// 设置条形码样式
$style = array(
    'position' => 'R',
    'align' => 'C',
    'stretch' => false,
    'fitwidth' => true,
    'cellfitalign' => '',
    'border' => false,
    'hpadding' => 'auto',
    'vpadding' => 'auto',
    'fgcolor' => array(0,0,0),
    'bgcolor' => false, //array(255,255,255),
    'text' => true,
    'font' => 'helvetica',
    'fontsize' => 8,
    'stretchtext' => 4
);

// 绘制条形码
$pdf->write1DBarcode($code, 'C128', '', '10', '', 15, 0.4, $style, 'N');

// 设置字体为楷体
//$fontname = TCPDF_FONTS::addTTFfont('./fonts/KaiTi.ttf', 'TrueTypeUnicode', '', 96);
$pdf->SetFont('KaiTi', '', 13);

// 绘制信息
// MultiCell($w, $h, $txt, $border=0, $align='J', $fill=0, $ln=1, $x='', $y='', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0)
$pdf->MultiCell(31, 11, $xi, $border=0, $align='C', $fill=0, $ln=1, $x='45', $y='48', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(31, 11, $year, $border=0, $align='C', $fill=0, $ln=1, $x='95', $y='48', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(31, 11, $xh, $border=0, $align='C', $fill=0, $ln=1, $x='160', $y='48', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(31, 11, $xm, $border=0, $align='C', $fill=0, $ln=1, $x='57', $y='62', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(17, 11, $xb, $border=0, $align='C', $fill=0, $ln=1, $x='106', $y='62', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
if(strlen($mz) > 3*3){
    $pdf->MultiCell(17, 11, $mz, $border=0, $align='C', $fill=0, $ln=1, $x='143', $y='59', $reseth=true, $stretch=1, $ishtml=false, $autopadding=true, $maxh=0);
} else {
    $pdf->MultiCell(17, 11, $mz, $border=0, $align='C', $fill=0, $ln=1, $x='143', $y='62', $reseth=true, $stretch=1, $ishtml=false, $autopadding=true, $maxh=0);
}
if(strlen($syd) > 3*10){
    $pdf->MultiCell(52, 11, $syd, $border=0, $align='C', $fill=0, $ln=1, $x='55', $y='71', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
} else {
    $pdf->MultiCell(52, 11, $syd, $border=0, $align='C', $fill=0, $ln=1, $x='55', $y='74', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
}
$pdf->MultiCell(35, 11, $xl, $border=0, $align='C', $fill=0, $ln=1, $x='125', $y='74', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(46, 11, $zy, $border=0, $align='C', $fill=0, $ln=1, $x='58', $y='85', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(35, 11, $yddh, $border=0, $align='C', $fill=0, $ln=1, $x='125', $y='85', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(46, 11, $sfzhm, $border=0, $align='C', $fill=0, $ln=1, $x='58', $y='97', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(35, 11, $qq, $border=0, $align='C', $fill=0, $ln=1, $x='125', $y='97', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
if(strlen($jtdz) > 3*29){
    $pdf->MultiCell(138, 11, $jtdz, $border=0, $align='C', $fill=0, $ln=1, $x='55', $y='105', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
} else {
    $pdf->MultiCell(138, 11, $jtdz, $border=0, $align='C', $fill=0, $ln=1, $x='55', $y='108', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
}
$pdf->MultiCell(46, 11, $lxdh, $border=0, $align='C', $fill=0, $ln=1, $x='58', $y='119', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
$pdf->MultiCell(64, 11, $dzyx, $border=0, $align='C', $fill=0, $ln=1, $x='125', $y='119', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
if(strlen($khh) > 3*10){
    $pdf->MultiCell(52, 11, $khh, $border=0, $align='C', $fill=0, $ln=1, $x='55', $y='127', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
} else {
    $pdf->MultiCell(52, 11, $khh, $border=0, $align='C', $fill=0, $ln=1, $x='55', $y='130', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);
}
$pdf->MultiCell(64, 11, $yhzh, $border=0, $align='C', $fill=0, $ln=1, $x='125', $y='130', $reseth=true, $stretch=0, $ishtml=false, $autopadding=true, $maxh=0);


// move pointer to last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document 参数D为下载PDF，参数I为在线预览PDF
$pdf->Output($code.'.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
