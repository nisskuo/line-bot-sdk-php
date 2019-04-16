<?php

/**
 * Copyright 2019 LINE Corporation
 *
 * LINE Corporation licenses this file to you under the Apache License,
 * version 2.0 (the "License"); you may not use this file except in compliance
 * with the License. You may obtain a copy of the License at:
 *
 *   https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations
 * under the License.
 */

namespace LINE\LINEBot\Event\MessageEvent;

use LINE\LINEBot\Constant\MessageContentProviderType;

class ContentProvider
{
    /** @var array */
    private $contentProvider;

    /**
     * ContentProvider constructor.
     *
     * @param array $contentProvider
     */
    public function __construct($contentProvider)
    {
        $this->contentProvider = $contentProvider;
    }

    /**
     * Returns contentProvider type is 'external' or not.
     *
     * @return string
     */
    public function isLine()
    {
        return $this->contentProvider['type'] == MessageContentProviderType::LINE;
    }

    /**
     * Returns contentProvider type is 'external' or not.
     *
     * @return string
     */
    public function isExternal()
    {
        return $this->contentProvider['type'] == MessageContentProviderType::EXTERNAL;
    }

    /**
     * Returns contentProvider getOriginalContentUrl.
     *
     * @return string|null
     */
    public function getOriginalContentUrl()
    {
        if (array_key_exists('originalContentUrl', $this->contentProvider)) {
            return $this->contentProvider['originalContentUrl'];
        }
        return null;
    }

    /**
     * Returns contentProvider getPreviewImageUrl.
     *
     * @return string|null
     */
    public function getPreviewImageUrl()
    {
        if (array_key_exists('previewImageUrl', $this->contentProvider)) {
            return $this->contentProvider['previewImageUrl'];
        }
        return null;
    }
}
