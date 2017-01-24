StringBuffer
============

StringBuffer is a PHP class providing operations for string buffering

Basic usage
-----------

    $sb = new StringBuffer();
    $sb->addString("Hello World!\n");
    $sb->addFile("path/to/file");
    $length = $sb->getLength();
    $sb->printOut();

Installation
------------

Use the Composer to install the panel.

    cd path/to/your/project/
    composer require atk14/string-buffer dev-master

Licence
-------

Translate is free software distributed [under the terms of the MIT license](http://www.opensource.org/licenses/mit-license)
