Etags-PHP5-RegExp
=================

Eamcs etags with php5 support using regexp

Usage
=====

etags --regex=@php5.tags php-file

When using with find put '-' to the end of the comman line:

find . -type f -name "*.php" | etags --regex=@php5.tags -
