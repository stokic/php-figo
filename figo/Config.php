<?php
/*
 * Copyright (c) 2013 figo GmbH
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace figo;


/**
 * Global configuration
 */
class Config {

    /** @var string figo Connect server hostname */
    public static $API_ENDPOINT = "api.figo.me";

    /** @var string figo Connect SSL/TLS certificate fingerprints */
    public static $VALID_FINGERPRINTS = array("38:AE:4A:32:6F:16:EA:15:81:33:8B:B0:D8:E4:A6:35:E7:27:F1:07",
                                              "DB:E2:E9:15:8F:C9:90:30:84:FE:36:CA:A6:11:38:D8:5A:20:5D:93");
    
    /** @var bool enable/disable the verbose debug mode */							  
    public static $DEBUG = TRUE;
}

?>
