<?php
/*
The MIT License (MIT)

Copyright (c) 2017 rht0910

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/

namespace rht0910\basic;
use rht0910\basic\BasicException;
require_once("Core.php");
//require_once("BasicException.php");
$core = new Core();
$core->loadExtension("BasicException");
class Basic {
    private $core;
    private $be;
    public function __construct() {
	$core = new Core();
	$be = new BasicException();
    }

    public static function throwBasicException($message) {
	throw new BasicException($message);
    }

    public static function throwException($message) {
	throw new Exception($message);
    }
}
