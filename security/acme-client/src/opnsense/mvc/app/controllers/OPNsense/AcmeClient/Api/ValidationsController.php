<?php

/**
 *    Copyright (C) 2017-2019 Frank Wall
 *    Copyright (C) 2015 Deciso B.V.
 *
 *    All rights reserved.
 *
 *    Redistribution and use in source and binary forms, with or without
 *    modification, are permitted provided that the following conditions are met:
 *
 *    1. Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *
 *    2. Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 *    THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 *    INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 *    AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 *    AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 *    OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 *    SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 *    INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 *    CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *    ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *    POSSIBILITY OF SUCH DAMAGE.
 *
 */

namespace Reticen8\AcmeClient\Api;

use Reticen8\Base\ApiMutableModelControllerBase;
use Reticen8\Base\UIModelGrid;
use Reticen8\Core\Config;
use Reticen8\AcmeClient\AcmeClient;

/**
 * Class ValidationsController
 * @package Reticen8\AcmeClient
 */
class ValidationsController extends ApiMutableModelControllerBase
{
    protected static $internalModelName = 'acmeclient';
    protected static $internalModelClass = '\Reticen8\AcmeClient\AcmeClient';

    public function getAction($uuid = null)
    {
        $this->sessionClose();
        return $this->getBase('validation', 'validations.validation', $uuid);
    }

    public function addAction()
    {
        return $this->addBase('validation', 'validations.validation');
    }

    public function updateAction($uuid)
    {
        return $this->setBase('validation', 'validations.validation', $uuid);
    }

    public function delAction($uuid)
    {
        return $this->delBase('validations.validation', $uuid);
    }

    public function toggleAction($uuid, $enabled = null)
    {
        return $this->toggleBase('validations.validation', $uuid);
    }

    public function searchAction()
    {
        return $this->searchBase('validations.validation', array('enabled', 'name', 'method', 'description'), 'name');
    }
}
