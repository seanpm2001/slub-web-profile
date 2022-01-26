<?php

declare(strict_types=1);

/*
 * This file is part of the package slub/slub-web-profile
 *
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 */

namespace Slub\SlubWebProfile\Service;

use Slub\SlubWebProfile\Domain\Model\Dto\ApiConfiguration;
use Slub\SlubWebProfile\Http\Request;

class UserSearchQueryService
{
    /**
     * @var ApiConfiguration
     */
    protected $apiConfiguration;

    /**
     * @var Request
     */
    protected $request;

    /**
     * @param ApiConfiguration $apiConfiguration
     */
    public function injectApiConfiguration(ApiConfiguration $apiConfiguration): void
    {
        $this->apiConfiguration = $apiConfiguration;
    }

    /**
     * @param Request $request
     */
    public function injectRequest(Request $request): void
    {
        $this->request = $request;
    }

    /**
     * @return array|null
     * @throws \JsonException
     */
    public function getUserSearchQuery(): ?array
    {
        $uri = $this->apiConfiguration->getUserSearchQueryDetailUri();

        return $this->request->process($uri);
    }

    /**
     * @param int $user
     * @param array $data
     * @return array|null
     * @throws \JsonException
     */
    public function updateUserSearchQuery(int $user, array $data): ?array
    {
        if ($user === 0) {
            return null;
        }

        $uri = $this->apiConfiguration->getUserSearchQueryUpdateUri();

        return $this->request->process($uri, 'POST', $data);
    }
}