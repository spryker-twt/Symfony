<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\Symfony\Form\Extension\DoubleSubmitProtection\RequestTokenProvider;

interface TokenGeneratorInterface
{

    const DEFAULT_ALGORITHM = 'sha256';

    /**
     * @return mixed
     */
    public function generateToken();

    /**
     * @param mixed $expected
     * @param mixed $actual
     *
     * @return boolean
     */
    public function checkTokenEquals($expected, $actual);

}
