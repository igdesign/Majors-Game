<?php

require_once('classes/Document.php');

/**
 * data from google spreadsheet
 *
 * original https://docs.google.com/spreadsheets/d/13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc/pubhtml
 * converted https://spreadsheets.google.com/feeds/list/13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc/od6/public/basic?hl=en_US&alt=json
 * documentation https://developers.google.com/gdata/docs/json
 * get identifiers https://spreadsheets.google.com/feeds/worksheets/[---KEY---]/private/full
 */
//   $dataSource = 'https://spreadsheets.google.com/feeds/list/13E_Sdi3RwNvL6XoEec-8oAVu1K8o0PBDZ6mt5uvh2wc/od6/public/basic?hl=en_US&alt=json';

$document = new Document();
$document->url = 'https://spreadsheets.google.com/feeds/list/'.$_GET['doc'].'/'.$_GET['key'].'/public/basic?hl=en_US&alt=json';
$document->getdocument();
$document->parseDocument();

$title = $document->readTitle();
$settings = $document->readSettings();
$entries = $document->readEntries();

$entries = array("groups" => $entries);

$data = json_encode(array_merge($settings, $entries));

echo($data);