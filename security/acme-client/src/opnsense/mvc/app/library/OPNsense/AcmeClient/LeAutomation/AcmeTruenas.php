<?php

/*
 * Copyright (C) 2023 Jan Winkler
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 * 1. Redistributions of source code must retain the above copyright notice,
 *    this list of conditions and the following disclaimer.
 *
 * 2. Redistributions in binary form must reproduce the above copyright
 *    notice, this list of conditions and the following disclaimer in the
 *    documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED ``AS IS'' AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY
 * AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY,
 * OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 */

namespace Reticen8\AcmeClient\LeAutomation;

use Reticen8\AcmeClient\LeAutomationInterface;

/**
 * Run acme.sh deploy hook truenas
 * @package Reticen8\AcmeClient
 */
class AcmeTruenas extends Base implements LeAutomationInterface
{
    public function prepare()
    {
        $this->acme_env['DEPLOY_TRUENAS_APIKEY'] = (string)$this->config->acme_truenas_apikey;
        $this->acme_env['DEPLOY_TRUENAS_HOSTNAME'] = (string)$this->config->acme_truenas_hostname;
        $this->acme_env['DEPLOY_TRUENAS_SCHEME'] = (string)$this->config->acme_truenas_scheme;
        $this->acme_args[] = '--deploy-hook truenas --insecure';
        return true;
    }
}
