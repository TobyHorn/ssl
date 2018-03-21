<?

class shortenerM{

    public function __construct($parent){

        $this->parent = $parent;

    }

    //Shorten a long url
    public function shorten($link=''){

        //Verify input field isn't blank
        if ($link) {

            //Create new Google client
            $client = new Google_Client();

            //Authenticate my api name and key
            $client->setApplicationName("SSL API");
            $client->setDeveloperKey("AIzaSyDuS26NcG8lvoJasJ1g3agqQBE71-H4Lmg");

            //Create a new url shortener service
            $service = new Google_Service_Urlshortener($client);

            //Create a new Google_Service_Urlshortener_Url object
            $shortLink = new Google_Service_Urlshortener_Url();

            //Set the parameter of the longUrl to be the url the user input
            $shortLink->longUrl = $link;

            //Create the short url by the insert method
            $result = $service->url->insert($shortLink);

            //Redirect user back to the form with the shortened url passed through a query string
            header("Location:/shortenerC?shortened=".$result["id"]);
        } else {

            //Redirect back to form with invalid error
            header("Location:/shortenerC?msg=Invalid Input");

        }

    }


    //Lengthen a short url
    public function lengthen($link=''){

        //Verify input field isn't blank
        if ($link) {

            //Create new Google client
            $client = new Google_Client();

            //Authenticate my api name and key
            $client->setApplicationName("SSL API");
            $client->setDeveloperKey("AIzaSyDuS26NcG8lvoJasJ1g3agqQBE71-H4Lmg");

            //Create a new url shortener service
            $service = new Google_Service_Urlshortener($client);

            //Get the result from the get method
            $result = $service->url->get($link);

            //Redirect user back to the form with the lengthened url passed through a query string
            header("Location:/shortenerC?lengthened=".$result["longUrl"]);


        } else {

            //Redirect back to form with invalid error
            header("Location:/shortenerC?msg=Invalid Input");

        }

    }

}

?>