<?php
require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;

// Initialize DOMPDF
$dompdf = new Dompdf();

// Load some simple HTML
$dompdf->loadHtml('<h1>Hello, world!</h1>');

// Set paper size to A4
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('test.pdf', ['Attachment' => false]);
