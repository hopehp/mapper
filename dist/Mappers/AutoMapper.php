<?php
/**
 * Hope - PHP 5.6 framework
 *
 * @author      Shvorak Alexey <dr.emerido@gmail.com>
 * @copyright   2018 Shvorak Alexey
 * @version     0.1.0
 * @package     Hope.Mapper
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */

namespace Hope\Mapper\Mappers
{

    use Hope\Mapper\IClassMapper;

    /**
     * Class AutoMapper
     *
     * Automatically detect similar fields
     *
     * @package Hope\Mapper\Mappers
     */
    class AutoMapper implements IClassMapper
    {

        private $_sourceClass;
        private $_targetClass;

        /**
         * AutoMapper constructor.
         *
         * @param string $sourceClass Source class name
         * @param string $targetClass Target class name
         */
        public function __construct($sourceClass, $targetClass)
        {
            $this->_sourceClass = $sourceClass;
            $this->_targetClass = $targetClass;
        }

        /**
         * {@inheritdoc}
         */
        public function map($source, $target)
        {
            // TODO: Implement map() method.
        }

        /**
         * @param string $className
         */
        private function analyze($className)
        {

        }

    }

}