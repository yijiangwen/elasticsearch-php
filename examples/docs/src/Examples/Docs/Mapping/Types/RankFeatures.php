<?php declare(strict_types = 1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elasticsearch\Examples\Docs\Mapping\Types;

use Elasticsearch\Examples\Docs\Testers\SimpleExamplesTester;

/**
 *
 * Class: RankFeatures
 *
 * Date: 2019-08-06 06:59:53
 *
 * @source   mapping/types/rank-features.asciidoc
 * @category Elasticsearch\Examples\Docs
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 *
 */
class RankFeatures extends SimpleExamplesTester {

    /**
     * Tag:  17867d05695ddeaee5d5aea2263ac589
     * Line: 16
     * Date: 2019-08-06 06:59:53
     */
    public function testExampleL16_17867d05695ddeaee5d5aea2263ac589()
    {
        $client = $this->getClient();
        // tag::17867d05695ddeaee5d5aea2263ac589[]
        // TODO -- Implement Example
        // PUT my_index
        // {
        //   "mappings": {
        //     "properties": {
        //       "topics": {
        //         "type": "rank_features" \<1>
        //       }
        //     }
        //   }
        // }
        // PUT my_index/_doc/1
        // {
        //   "topics": { \<2>
        //     "politics": 20,
        //     "economics": 50.8
        //   }
        // }
        // PUT my_index/_doc/2
        // {
        //   "topics": {
        //     "politics": 5.2,
        //     "sports": 80.1
        //   }
        // }
        // GET my_index/_search
        // {
        //   "query": {
        //     "rank_feature": {
        //       "field": "topics.politics"
        //     }
        //   }
        // }
        // end::17867d05695ddeaee5d5aea2263ac589[]

        $curl = 'PUT my_index'
              . '{'
              . '  "mappings": {'
              . '    "properties": {'
              . '      "topics": {'
              . '        "type": "rank_features" \<1>'
              . '      }'
              . '    }'
              . '  }'
              . '}'
              . 'PUT my_index/_doc/1'
              . '{'
              . '  "topics": { \<2>'
              . '    "politics": 20,'
              . '    "economics": 50.8'
              . '  }'
              . '}'
              . 'PUT my_index/_doc/2'
              . '{'
              . '  "topics": {'
              . '    "politics": 5.2,'
              . '    "sports": 80.1'
              . '  }'
              . '}'
              . 'GET my_index/_search'
              . '{'
              . '  "query": {'
              . '    "rank_feature": {'
              . '      "field": "topics.politics"'
              . '    }'
              . '  }'
              . '}';

        // TODO -- make assertion
    }

// %__METHOD__%


}
