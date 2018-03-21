<?

class apiM{

    public function __construct($parent){

        $this->db = $parent->db;

    }

    public function googleBooks($term=''){

        $client = new Google_Client();
        $client->setApplicationName("SSL API");
        $client->setDeveloperKey("AIzaSyDuS26NcG8lvoJasJ1g3agqQBE71-H4Lmg");

        $service = new Google_Service_Books($client);

        $optParams = array("filter"=>"free-ebooks");
        $result = $service->volumes->listVolumes($term,$optParams);

        return $result;

    }

}

?>