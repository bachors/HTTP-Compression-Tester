# HTTP-Compression-Tester
Create your own web tools for HTTP Compression Tester  lets you verify that web content is being compressed  using gzip / deflate / mod_gzip / mod_deflate using PHP.

<h2>Example:</h2>
<pre>&lt;?php

    // Include compression_tester.php
    require("compression_tester.php");
    
    // Call function compression_tester
    echo compression_tester("http://ibacor.com");

?&gt;</pre>
<h2>Return:</h2>
<pre>URL: http://ibacor.com

Compression working: Yes

Compression type: gzip

Uncompressed size: 20033 bytes

Compressed size: 5180 bytes

Compression: 74.1 %</pre>
or
<pre>URL: http://www.phpgang.com/

Compression working: No</pre>
<a href="http://ibacor.com/tools/gzip-test" target="_BLANK"><h2>DEMO</h2></a>

See also some list of websites that provide tools for compression tester
- <a target="_BLANK" href="http://www.gziptest.com/">gziptest.com</a>
- <a target="_BLANK" href="https://www.giftofspeed.com/gzip-test/">giftofspeed.com</a>
- <a target="_BLANK" href="http://www.gidnetwork.com/tools/gzip-test.php">gidnetwork.com</a>
- <a target="_BLANK" href="https://varvy.com/tools/gzip/">varvy.com</a>
- <a target="_BLANK" href="http://www.whatsmyip.org/http-compression-test/">whatsmyip.org</a>
- <a target="_BLANK" href="http://checkgzipcompression.com/">checkgzipcompression.com</a>
