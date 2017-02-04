<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=daftar_data_customer". date('dmY_His').".xls" );
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Pragma: public");

$workbook = new Workbook();
$worksheet1 =& $workbook->add_worksheet(date('dmY_His'));

$header =& $workbook->add_format();
$header->set_color('blue'); // set warna huruf
$header->set_border_color('red'); // set warna border

$header->set_size(14); // Set ukuran font 

$header->set_align("center"); // set align rata tengah

$header->set_top(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_bottom(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_left(2); // set ketebalan border bagian atas cell 0 = border tidak tampil
$header->set_right(2); // set ketebalan border bagian atas cell 0 = border tidak tampil

$worksheet1->write_string(0,0,'No.',$header);  // Set Nama kolom
$worksheet1->set_column(0,0,5); // Set lebar kolom
$worksheet1->write_string(0,1,'Customer Code',$header);  // Set Nama kolom
$worksheet1->set_column(0,1,20); // Set lebar kolom 
$worksheet1->write_string(0,2,'Customer Name',$header);  // Set Nama kolom
$worksheet1->set_column(0,2,50); // Set lebar kolom
$worksheet1->write_string(0,3,'Customer Contact',$header);  // Set Nama kolom
$worksheet1->set_column(0,3,15); // Set lebar kolom
$worksheet1->write_string(0,4,'Customer Address',$header);  // Set Nama kolom
$worksheet1->set_column(0,4,15); // Set lebar kolom

$content =& $workbook->add_format();
$content->set_size(11);

$content->set_top(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_bottom(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_left(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_right(1); // set ketebalan border bagian atas cell 0 = border tidak tampil

$row = 1;
foreach ($customer as $key) {
    $worksheet1->write_string($row,0,  $key->cust_id ,$content);
    $worksheet1->write_string($row,1,  $key->cust_code ,$content);
    $worksheet1->write_string($row,2,  $key->cust_name ,$content);
    $worksheet1->write_string($row,3,  $key->cust_contact ,$content);
    $worksheet1->write_string($row,4,  $key->cust_address ,$content);
    $row++;
}

$workbook->close();

/* 
 * Created by Pudyasto Adi Wibowo
 * Email : mr.pudyasto@gmail.com
 */