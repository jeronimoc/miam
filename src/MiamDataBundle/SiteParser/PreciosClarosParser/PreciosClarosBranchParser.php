<?php

namespace MiamDataBundle\SiteParser\PreciosClarosParser;

class PreciosClarosBranchParser extends PreciosClarosParser
{
    const BRANCH_RELATIVE_PATH = "/prod/sucursales";
    const BRANCH_QUERY_LIMIT = 50;
    
    
    public function importBranches() {
        $url = PreciosClarosParser::BASE_URL . parent::BRANCH_RELATIVE_PATH;
        $page = 0;
        $results = true;

        do {
            $limit = BRANCH_QUERY_LIMIT;
            $tmpUrl = $url. "?". "limit=". $limit . "offset=" . $page;
            $curl = curl_init($tmpUrl);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 120);
            curl_setopt($curl, CURLOPT_TIMEOUT, 1120);
            curl_setopt($curl, CURLOPT_MAXREDIRS, 3);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('x-api-key:'.parent::API_KEY));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('origin:'.parent::HTTP_ORIGIN));
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Referer:'.parent::HTTP_REFERER));

            $result = curl_exec($curl);

            if ($result) {
                $results = json_decode($result);
                // TODO Instanciar y persistir sucursales
            } else {
                $results = false;
            }

            curl_close($curl);
            $page++;

        } while ($results);
    }
}