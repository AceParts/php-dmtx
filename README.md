Installing
==========

Install libdmtx and ImageMagick and run the following commands:

    phpize
    ./configure

If configure gives

    checking for libdmtx... configure: error: Unable to find libdmtx installation

Try using the `PKG_CONFIG_PATH` flag to provide the folder location containing `libdmtx.pc`

    ./configure PKG_CONFIG_PATH=/usr/local/lib/pkgconfig


    make
    make install