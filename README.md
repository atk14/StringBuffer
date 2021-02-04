StringBuffer
============

StringBuffer is a PHP class providing operations for efficient string buffering

Basic usage
-----------

    $sb = new StringBuffer();
    $sb->addString("Hello World!\n");
    $sb->addFile("path/to/file");
    $length = $sb->getLength();
    $sb->printOut();

Converting StringBuffer into a string:

    $string = (string)$sb;
    // or
    $string = "$sb";
    // or
    $string = $sb->toString();

Installation
------------

Use the Composer to install StringBuffer.

    cd path/to/your/project/
    composer require atk14/string-buffer

Licence
-------

StringBuffer is free software distributed [under the terms of the MIT license](http://www.opensource.org/licenses/mit-license)
