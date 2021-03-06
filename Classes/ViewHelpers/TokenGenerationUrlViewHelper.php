<?php

namespace Pixelant\PxaSocialFeed\ViewHelpers;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

use Pixelant\PxaSocialFeed\Domain\Model\Token;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class TokenGenerationUrlViewHelper
 * @package Pixelant\PxaSocialFeed\ViewHelpers
 */
class TokenGenerationUrlViewHelper extends AbstractViewHelper
{

    /**
     * @var boolean
     */
    protected $escapeChildren = false;

    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * Initialize
     *
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument('token', Token::class, 'Token', true, null);
        $this->registerArgument('redirectUri', 'string', 'Redirect uri', true, '');
    }

    /**
     * @return array|mixed
     * @throws \Facebook\Exceptions\FacebookSDKException
     */
    public function render()
    {
        //TODO: find a better way
        session_start();

        /** @var Token $token */
        $token = $this->arguments['token'];

        return $token->getTokenGenerationUri($this->arguments['redirectUri']);
    }
}
