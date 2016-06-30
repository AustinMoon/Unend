<?php

class diff extends CI_Controller {

function __construct() {
parent::__construct();

//  Path to simple_html_dom
include APPPATH . 'third_party/finediff.php';
}

function index() {
    
    
    
    if (!isset($_POST['student'])){
    
    echo "
    <form target='/diff' method='post'>student text: <input type='text' name ='student' value='there is good reason'> <br/>
    tutor correction: <input type='text' name='tutor' value='There are good reasons'>
    <button type='submit' >submit </button>
    </form>";
    } else{
    $from_text=$_POST['student'];
    $to_text=$_POST['tutor'];
    $opcodes = FineDiff::getDiffOpcodes($from_text, $to_text /* default granularity is set to character */);
    
   echo FineDiff::renderDiffToHTMLFromOpcodes($from_text, $opcodes);
    
    }
    
    
}} ?>