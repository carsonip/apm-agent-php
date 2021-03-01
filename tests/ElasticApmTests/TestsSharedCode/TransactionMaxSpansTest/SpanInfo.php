<?php

/*
 * Licensed to Elasticsearch B.V. under one or more contributor
 * license agreements. See the NOTICE file distributed with
 * this work for additional information regarding copyright
 * ownership. Elasticsearch B.V. licenses this file to you under
 * the Apache License, Version 2.0 (the "License"); you may
 * not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */

declare(strict_types=1);

namespace ElasticApmTests\TestsSharedCode\TransactionMaxSpansTest;

use Elastic\Apm\Impl\Log\LoggableInterface;
use Elastic\Apm\Impl\Log\LoggableTrait;
use Elastic\Apm\SpanInterface;

final class SpanInfo implements LoggableInterface
{
    use LoggableTrait;

    /** @var SpanInterface */
    public $span;

    /** @var string */
    public $name;

    /** @var int */
    public $childCount = 0;

    /** @var bool */
    public $needsExplicitEndCall;

    public function __construct(SpanInterface $span, string $name, bool $needsExplicitEndCall)
    {
        $this->span = $span;
        $this->name = $name;
        $this->needsExplicitEndCall = $needsExplicitEndCall;
    }
}
