<?php

/**
 * Created by PhpStorm.
 * User: Muhammed
 * Date: 12/2/2017
 * Time: 10:14 PM
 */
class FileHelper
{

    function __construct()
    {
        $this->FileHelper = new FileHelper();

    }

    /**
     * @param $filename
     * @param $delimetre
     * @return array
     */
    public function parseCSV($filename, $delimetre)
    {

        $csvfile = fopen($filename, 'r');
        $alldata = array();

        while ($data = fgetcsv($csvfile, 0, $delimetre)) {
            $alldata[] = $data;
        }
        return $alldata;
    }

}