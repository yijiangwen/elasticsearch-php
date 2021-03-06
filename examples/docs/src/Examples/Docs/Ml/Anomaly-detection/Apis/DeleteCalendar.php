<?php declare(strict_types = 1);

// Licensed to Elasticsearch B.V under one or more agreements.
// Elasticsearch B.V licenses this file to you under the Apache 2.0 License.
// See the LICENSE file in the project root for more information

namespace Elasticsearch\Examples\Docs\Ml\Anomaly-detection\Apis;

use Elasticsearch\Examples\Docs\Testers\SimpleExamplesTester;

/**
 *
 * Class: DeleteCalendar
 *
 * Date: 2019-08-06 06:59:54
 *
 * @source   ml/anomaly-detection/apis/delete-calendar.asciidoc
 * @category Elasticsearch\Examples\Docs
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache2
 * @link     http://elastic.co
 *
 */
class DeleteCalendar extends SimpleExamplesTester {

    /**
     * Tag:  63893e7e9479a9b60db71dcddcc79aaf
     * Line: 41
     * Date: 2019-08-06 06:59:54
     */
    public function testExampleL41_63893e7e9479a9b60db71dcddcc79aaf()
    {
        $client = $this->getClient();
        // tag::63893e7e9479a9b60db71dcddcc79aaf[]
        // TODO -- Implement Example
        // DELETE _ml/calendars/planned-outages
        // end::63893e7e9479a9b60db71dcddcc79aaf[]

        $curl = 'DELETE _ml/calendars/planned-outages';

        // TODO -- make assertion
    }

// %__METHOD__%


}
