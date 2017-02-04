<?php
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=daftar_data_Customer_Company". date('dmY_His').".xls" );
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
$worksheet1->write_string(0,2,'Company Name',$header);  // Set Nama kolom
$worksheet1->set_column(0,2,15); // Set lebar kolom
$worksheet1->write_string(0,3,'Business Type',$header);  // Set Nama kolom
$worksheet1->set_column(0,3,15); // Set lebar kolom
$worksheet1->write_string(0,4,'Company Phone',$header);  // Set Nama kolom
$worksheet1->set_column(0,4,15); // Set lebar kolom
$worksheet1->write_string(0,5,'Company Email',$header);  // Set Nama kolom
$worksheet1->set_column(0,5,15); // Set lebar kolom
$worksheet1->write_string(0,6,'Company Address',$header);  // Set Nama kolom
$worksheet1->set_column(0,6,15); // Set lebar kolom
$worksheet1->write_string(0,7,'Start Date Contract',$header);  // Set Nama kolom
$worksheet1->set_column(0,7,15); // Set lebar kolom
$worksheet1->write_string(0,8,'End Date Contract',$header);  // Set Nama kolom
$worksheet1->set_column(0,8,15); // Set lebar kolom
$worksheet1->write_string(0,9,'Contact Person',$header);  // Set Nama kolom
$worksheet1->set_column(0,9,15); // Set lebar kolom
$worksheet1->write_string(0,10,'Contact Person Mobile Phone',$header);  // Set Nama kolom
$worksheet1->set_column(0,10,15); // Set lebar kolom
$worksheet1->write_string(0,11,'Contact Person Email',$header);  // Set Nama kolom
$worksheet1->set_column(0,11,15); // Set lebar kolom


$content =& $workbook->add_format();
$content->set_size(11);

$content->set_top(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_bottom(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_left(1); // set ketebalan border bagian atas cell 0 = border tidak tampil
$content->set_right(1); // set ketebalan border bagian atas cell 0 = border tidak tampil

$row = 1;
foreach ($company_excel as $key) {
    $worksheet1->write_string($row,0,  $row ,$content);
    $worksheet1->write_string($row,1,  $key->cust_code ,$content);
    $worksheet1->write_string($row,2,  $key->cust_company_name ,$content);
    $worksheet1->write_string($row,3,  $key->cust_type_name ,$content);
    $worksheet1->write_string($row,4,  $key->cust_company_phone ,$content);
    $worksheet1->write_string($row,5,  $key->cust_company_email ,$content);
    $worksheet1->write_string($row,6,  $key->cust_company_address ,$content);
    $worksheet1->write_string($row,7,  $key->cust_start_date_contract ,$content);
    $worksheet1->write_string($row,8,  $key->cust_end_date_contract ,$content);
    $worksheet1->write_string($row,9,  $key->cust_name ,$content);
    $worksheet1->write_string($row,10,  $key->cust_mobile_phone ,$content);
    $worksheet1->write_string($row,11,  $key->cust_email ,$content);
    $row++;
}

$workbook->close();

/* 
 * Created by Pudyasto Adi Wibowo
 * Email : mr.pudyasto@gmail.com
 */