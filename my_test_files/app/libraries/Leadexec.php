<?php

namespace App\Libraries;

use GuzzleHttp\Client,SimpleXMLElement;

class Leadexec {

    /**
     * @brief   send_curl_request  to post the data to the Leadexec tool
     *
     * @param   array $post_array
     * @return  array status,message
     */
    public static function sendCurlRequest($post_array) {
        $client = new Client();
        $response = $client->post('https://leads.leadexec.net/processor/insert/general', array(
          'body' => $post_array
        ));
		
		$reponse_xml =  $response->getBody();
		$arrResponse = new SimpleXMLElement($reponse_xml);
		
        if ($arrResponse->isValidPost == 'true') {
            return array('status' => 'success', 'message' => '');
        } else {
			return array('status' => 'error', 'message' => (string)$arrResponse->ResponseDetails);
        }
    }
}
