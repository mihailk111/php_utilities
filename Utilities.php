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

