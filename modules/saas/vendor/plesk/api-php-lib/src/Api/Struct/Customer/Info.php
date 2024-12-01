<?php
// Copyright 1999-2022. Plesk International GmbH.

namespace PleskX\Api\Struct\Customer;

use PleskX\Api\AbstractStruct;

class Info extends AbstractStruct
{
    public int $id;
    public string $guid;

    public function __construct(\SimpleXMLElement $apiResponse)
    {
        $this->initScalarProperties($apiResponse, [
            'id',
            'guid',
        ]);
    }
}