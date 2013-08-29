<?php
/**
 * Shoudio.php
 *
 * @package Providers
 * @author Michael Pratt <pratt@hablarmierda.net>
 * @link   http://www.michael-pratt.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Embera\Providers;

/**
 * The shoudio.com Provider
 */
class Shoudio extends \Embera\Adapters\Service
{
    /** inline {@inheritdoc} */
    protected $apiUrl = 'http://shoudio.com/api/oembed?format=json';

    /** inline {@inheritdoc} */
    protected function validateUrl()
    {
        return (preg_match('~shoudio\.com/(?:user|channel|venue|collection)/(?:.+)~i', $this->url) ||
                preg_match('~shoud\.io/(?:[0-9]+)$~i', $this->url));
    }

    /** inline {@inheritdoc} */
    protected function normalizeUrl()
    {
        $this->url = str_ireplace('//www.', '//', rtrim($this->url, '/'));
    }
}

?>
