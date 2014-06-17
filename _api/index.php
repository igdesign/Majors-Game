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


  $documentKey = $_GET['doc'];

  $dataSheet = 'od7';
  $settingSheet = 'o7bwz0v';
  $termsSheet = 'or5i936';
  $introSheet = 'o8swf17';
  $dataURI = 'https://spreadsheets.google.com/feeds/list/'.$documentKey.'/public/basic?hl=en_US&alt=json';

  echo $dataURI;
  exit;

  $document = new Document();
  $document->url = $dataURI;

  $document->getDocument();
  $document->parseDocument();

  $title = $document->readTitle();
  $settings = $document->readSettings();
  $entries = $document->readEntries();

  $entries = array("groups" => $entries);

  $data = json_encode(array_merge($settings, $entries));

  echo($data);