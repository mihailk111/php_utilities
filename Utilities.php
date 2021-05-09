<?php

namespace MK11;

/**
 *  Creates file if it does not exist
 */

function touchFile(string $filePath): void
{
    if (!file_exists($filePath))
    {
        fclose(fopen($filePath, 'a'));
    }
}

/**
 ** Standart url reges
 * 
 */
// $urlRegex = "/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";





/**
 *  Dump and Die
 *
 */
function dd($data)
{
  var_dump($data);
  die;
}


/*
class Queue
{
    private $data = [];
    public function __construct() { }
    public function put($value) { array_push($this->data, $value); }
    public function get() { return array_shift($this->data); }
    public function forEach(callable $callback) { if (count($this->data) === 0) return; while($data = $this->get()) { $callback($data); } }

}
*/


 
/**
 *  Standart http headers
 */

// $http_request = <<< HEADERS
//     GET /home HTTP/1.1
//     Host: twitter.com
//     User-Agent: Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:88.0) Gecko/20100101 Firefox/88.0
//     Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8
//     Accept-Language: en-US,en;q=0.5
//     Cookie: data=somethiashdg; PHPSESSID=j237vb123612v36v12735123v727344444444444294;
//     Accept-Encoding: gzip, deflate, brk
//     Connection: keep-alive\r\n\r\n
// HEADERS;


