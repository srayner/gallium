<?php

namespace Application\Service;

use Zend\Db\Adapter\Adapter;

interface DbAdapterAwareInterface
{
    public function setDbAdapter(Adapter $dbAdapter);
}