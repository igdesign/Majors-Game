<?php

/**
 * class document
 *
 * retrieves the document from google
 */
class Document
{

  /**
   * @var string The URL to the file
   */
  public $url = null;

  /**
   * @var string The contents of the file
   */
  public $document = null;

  /**
   * Contstruct function
   * the function "__construct()" automatically starts whenever an object of this class is created
   * $document = new Document();
   */
  public function __construct()
  {

  }

  /**
   * getDocument
   *
   * use cURl to get document
   */
  public function getDocument()
  {
    //URL of targeted site
    $ch = curl_init();

    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, $this->url);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);


    // grab URL and pass it to the browser

    $this->document = curl_exec($ch);

    //echo $output;

    // close curl resource, and free up system resources
    curl_close($ch);
  }

  public function parseDocument()
  {
    require_once('simple_html_dom.php');

    $html = str_get_html($this->document);
    $contents = null;

    foreach ($html->find('div[id=contents]') as $node) {
      $contents = $node;
    }

    foreach ($html->find('style') as $node) {
      $node->outertext = '';
    }

    foreach ($html->find('script') as $node) {
      $node->outertext = '';
    }

    foreach ($html->find('html') as $node) {
      $node->outertext = '';
      $node->outertext = $contents . $node->outertext;
    }

    $string = $html;
    $string = str_replace('<!DOCTYPE html>', '', $string);
    $string = str_replace('<span></span>', '', $string);
    $string = str_replace('<span>')
    echo $string;

    exit;
  }
}