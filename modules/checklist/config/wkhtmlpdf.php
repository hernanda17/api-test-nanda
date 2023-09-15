<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// Required for load the WKHTML Extension module
require_once(APPPATH. 'third_party/psrautoload.php');
require_once(APPPATH. 'third_party/wkhtmltopdf_loader.php');


$config['path_config'] = array(
  "default_save_path" => "/tmp/wkhtmlpdf",
  "binary_path" => "/usr/local/bin/wkhtmltopdf",
);

$config['pdf_config'] = array(
  'a4' => array(
    'no-outline',         // Make Chrome not complain
    'margin-top'    => 10,
    'margin-right'  => 0,
    'margin-bottom' => 10,
    'margin-left'   => 0,
    'page-size' => 'A4',
    // Default page options
    'disable-smart-shrinking'
  )
);

$wkhtmlto = new mikehaertl\wkhtmlto\Pdf();
$config['wkhtmlto'] = $wkhtmlto;