<?php
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');

    $data = [['Name', 'Email', 'Phone'], ['John Smith', 'john@example.com', '555-555-1212'], ['Jane Doe', 'jane@example.com', '555-555-1213']];

    $fp = fopen('php://output', 'w');
    
    foreach ($data as $row)
    {
        fputcsv($fp, $row);
    }

    fclose($fp);
?>