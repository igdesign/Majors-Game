<?php



/**
 * data from google spreadsheet
 *
 * original https://docs.google.com/spreadsheets/d/13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc/pubhtml
 * converted https://spreadsheets.google.com/feeds/list/13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc/od6/public/basic?hl=en_US&alt=json
 * documentation https://developers.google.com/gdata/docs/json
 * get identifiers https://spreadsheets.google.com/feeds/worksheets/[---KEY---]/private/full
 */
//   $dataSource = 'https://spreadsheets.google.com/feeds/list/13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc/od6/public/basic?hl=en_US&alt=json';





$type = $_GET['type'];

switch ($type) {

  case 'doc':

    document($_GET);
    break;

  case 'sheet':
    sheet($_GET);
    break;
}


function document($request)
{
  require_once('classes/Document.php');
  $document = new Document();
  $document->url = 'https://docs.google.com/document/d/'.$request['doc'].'/pub';
  $document->getDocument();
  $document->parseDocument();

}

function sheet($request)
{
  require_once('classes/Sheet.php');
  $document = new Sheet();
  $document->url = 'https://spreadsheets.google.com/feeds/list/'.$request['doc'].'/'.$request['key'].'/public/basic?hl=en_US&alt=json';

  $document->getDocument();
  $document->parseDocument();

  $title = $document->readTitle();
  $settings = $document->readSettings();
  $entries = $document->readEntries();

  $entries = array("groups" => $entries);

  $data = json_encode(array_merge($settings, $entries));

  echo($data);
}

