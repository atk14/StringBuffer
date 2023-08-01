StringBuffer
============

[![Build Status](https://app.travis-ci.com/atk14/StringBuffer.svg?branch=master)](https://app.travis-ci.com/atk14/StringBuffer)

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

Temporary buffer
----------------

You can use StringBuffer to store and manipulate large chunks of data without consuming excessive memory.

    $buffer = new StringBufferTemporary();

    // read something big in chunks
    $buffer->add($megabyte);
    $buffer->add($megabyte);
    $buffer->add($megabyte);
    $buffer->add($megabyte);
    $buffer->add($megabyte);
    // and so on... :)

    $buffer->printOut();
    // or
    $buffer->writeToFile($target_filename);

Constant TEMP can be defined in order to specify the desired temporary directory for storing string buffer items.

    define("TEMP","/path/to/temp/");

Installation
------------

Use the Composer to install StringBuffer.

    cd path/to/your/project/
    composer require atk14/string-buffer

Licence
-------

StringBuffer is free software distributed [under the terms of the MIT license](http://www.opensource.org/licenses/mit-license)

[//]: # ( vim: set ts=2 et: )
