<?php

namespace MK11;

require_once __DIR__."/time.php";

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

