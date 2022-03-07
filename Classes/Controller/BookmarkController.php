<?php

declare(strict_types=1);

/*
 * This file is part of the package slub/slub-web-profile
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Slub\SlubWebProfile\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class BookmarkController extends ActionController
{
    public function listAction(): void
    {
        /** @extensionScannerIgnoreLine */
        $content = $this->configurationManager->getContentObject()->data;
        $bookmark = [
            0 => [
                'uid' => 1,
                'title' => 'Title of Item from Bookmark',
                'startDateTime' => [
                    'format' => '2021-12-03T14:00:00+00:00',
                    'timestamp' => 1638536400
                ]
            ],
            1 => [
                'uid' => 2,
                'title' => 'Das ist ein ganz langer Beispieltitel für ein Merklisteneintrag',
                'startDateTime' => [
                    'format' => '2022-12-18T14:00:00+00:00',
                    'timestamp' => 1671372000
                ]
            ],
            2 => [
                'uid' => 3,
                'title' => 'Title Merklisteneintrag',
                'startDateTime' => [
                    'format' => '2022-12-15T00:00:00+00:00',
                    'timestamp' => 1671062400
                ]
            ],
            3 => [
                'uid' => 4,
                'title' => 'Merklisten-Eintrag',
                'startDateTime' => [
                    'format' => '2022-12-15T00:00:00+00:00',
                    'timestamp' => 1671062400
                ]
            ],
            4 => [
                'uid' => 5,
                'title' => 'Merkbegriff',
                'startDateTime' => [
                    'format' => '2022-12-15T00:00:00+00:00',
                    'timestamp' => 1671062400
                ]
            ],
        ];

        $this->view->assignMultiple([
            'bookmark' => $bookmark,
            'content' => $content
        ]);
    }
}