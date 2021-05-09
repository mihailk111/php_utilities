<?php

namespace Utilities;

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





/*
class Queue
{
    private $data = [];
    private $types = ['int', 'string', 'object'];

    public function __construct()
    {
         
    }
    public function put($value)
    {
        array_push($this->data, $value);
    }
    public function get()
    {
        return array_shift($this->data); 
    }

    public function forEach(callable $callback)
    {

        if (count($this->data) === 0) return;

        while($data = $this->get())
        {
            $callback($data);
        }
    }

}
*/

