<?php

namespace App\Helpers;

class CSV
{
    public $path;
    public function __construct(string $path = null)
    {
        $this->path = $path;
    }

    public function parse()
    {
        $rows = [];
        $handle = fopen($this->path, "r");
        while (($row = fgetcsv($handle)) !== false) {
            $rows[] = $row;
        }
        fclose($handle);
        // Remove the first one that contains headers
        $headers = array_shift($rows);
        // Combine the headers with each following row
        $array = [];
        foreach ($rows as $row) {
            $array[] = array_combine($headers, $row);
        }

        return $array;

    }
}
