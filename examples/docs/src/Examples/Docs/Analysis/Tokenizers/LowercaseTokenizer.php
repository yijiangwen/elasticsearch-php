<?php declare(strict_types = 1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elasticsearch\Examples\Docs\Analysis\Tokenizers;

use Elasticsearch\Examples\Docs\Testers\SimpleExamplesTester;

/**
 *
 * Class: LowercaseTokenizer
 *
 * Date: 2019-08-06 06:59:53
 *
 * @source   analysis/tokenizers/lowercase-tokenizer.asciidoc
 * @category Elasticsearch\Examples\Docs
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 *
 */
class LowercaseTokenizer extends SimpleExamplesTester {

    /**
     * Tag:  a99bc141066ef673e35f306157750ec9
     * Line: 18
     * Date: 2019-08-06 06:59:53
     */
    public function testExampleL18_a99bc141066ef673e35f306157750ec9()
    {
        $client = $this->getClient();
        // tag::a99bc141066ef673e35f306157750ec9[]
        // TODO -- Implement Example
        // POST _analyze
        // {
        //   "tokenizer": "lowercase",
        //   "text": "The 2 QUICK Brown-Foxes jumped over the lazy dog\'s bone."
        // }
        // end::a99bc141066ef673e35f306157750ec9[]

        $curl = 'POST _analyze'
              . '{'
              . '  "tokenizer": "lowercase",'
              . '  "text": "The 2 QUICK Brown-Foxes jumped over the lazy dog\'s bone."'
              . '}';

        // TODO -- make assertion
    }

// %__METHOD__%


}
