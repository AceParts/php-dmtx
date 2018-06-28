<?php

/**
 * Stubs for IDE auto-completion
 * do not require or include in your project.
 *
 * @author Kevin Andrews <kevin@zvps.uk>
 */

//dmtx
class dmtx
{
    const TYPE_MATRIX = 1;
    const TYPE_MOSAIC = 2;
    
    const SCHEME_ASCII    = 0;
    const SCHEME_C40      = 1;
    const SCHEME_TEXT     = 2;
    const SCHEME_X12      = 3;
    const SCHEME_EDITFACT = 4;
    const SCHEME_BASE256  = 5;
    
    const SYMBOL_SQUARE_COUNT = 24;
    const SYMBOL_RECT_COUNT = 6;

    const SYMBOL_SHAPE_AUTO = -1;
    const SYMBOL_SQUARE_AUTO = -2;
    const SYMBOL_RECT_AUTO = -3;

    const SYMBOL_10_BY_10 = 0;
    const SYMBOL_12_BY_12 = 1;
    const SYMBOL_14_BY_14 = 2;
    const SYMBOL_16_BY_16 = 3;
    const SYMBOL_18_BY_18 = 4;
    const SYMBOL_20_BY_20 = 5;
    const SYMBOL_22_BY_22 = 6;
    const SYMBOL_24_BY_24 = 7;
    const SYMBOL_26_BY_26 = 8;
    const SYMBOL_32_BY_32 = 9;
    const SYMBOL_36_BY_36 = 10;
    const SYMBOL_40_BY_40 = 11;
    const SYMBOL_44_BY_44 = 12;
    const SYMBOL_48_BY_48 = 13;
    const SYMBOL_52_BY_52 = 14;
    const SYMBOL_64_BY_64 = 15;
    const SYMBOL_72_BY_72 = 16;
    const SYMBOL_80_BY_80 = 17;
    const SYMBOL_88_BY_88 = 18;
    const SYMBOL_96_BY_96 = 19;
    const SYMBOL_104_BY_104 = 20;
    const SYMBOL_120_BY_120 = 21;
    const SYMBOL_132_BY_132 = 22;
    const SYMBOL_144_BY_144 = 23;
    const SYMBOL_8_BY_18 = 24;
    const SYMBOL_8_BY_32 = 25;
    const SYMBOL_12_BY_260 = 26;
    const SYMBOL_12_BY_360 = 27;
    const SYMBOL_16_BY_360 = 28;
    const SYMBOL_16_BY_480 = 29;
}

//dmtxException
class dmtxException extends \Exception {}

//dmtxWrite
class dmtxWrite
{
    /**
     * Constructs the dmtxWrite object
     * @param string $message
     */
    public function __construct($message) {}
    
    /**
     * Sets the message on the object
     * @param string $string
     */
    public function setMessage($string) {}
    
    /**
     * Sets the encoding scheme on the object
     * @param type $dmtxSCHEME
     */
    public function setScheme($dmtxSCHEME) {}
    
    /**
     * Returns encoding scheme on the object
     * @return integer 
     */
    public function getScheme() {}
    
    /**
     * 
     * @param string $filename
     * @param integer|CONST $dmtxTYPE
     * @param integer|CONST $dmtxSYMBOL
     * @param integer $module
     * @param integer $margin
     * @throws dmtxException
     */
    public function save($filename, $dmtxTYPE=1, $dmtxSYMBOL=-2, $module=2, $margin=5) {}
}

//dmtxRead
class dmtxRead
{
    /**
     * Fetches the information from the image
     * @param integer $scan_gap
     * @param integer $corrections
     * @param integer|CONST $type
     * @return array
     * e.g. array(1) {
     *   [0] =>
     *   array(1) {
     *     [0] =>
     *     array(10) {
     *       'message' =>
     *       string(205) "barcode string message"
     *       'codewords' =>
     *       int(205)
     *       'rotation_angle' =>
     *       int(0)
     *       'matrix_width' =>
     *       int(44)
     *       'matrix_height' =>
     *       int(44)
     *       'data_regions_horizontal' =>
     *       int(2)
     *       'data_regions_vertical' =>
     *       int(2)
     *       'interleaved_blocks' =>
     *       int(1)
     *       'edges' =>
     *       array(4) {
     *         'left' =>
     *         string(4) "3x36"
     *         'bottom' =>
     *         string(4) "11x3"
     *         'top' =>
     *         string(4) "4x69"
     *         'right' =>
     *         string(4) "69x3"
     *       }
     *       'bounds' =>
     *       array(2) {
     *         'bound_min' =>
     *         string(3) "3x3"
     *         'bound_max' =>
     *         string(5) "69x69"
     *       }
     *     }
     *   }
     * }
     *
     */
    public function getInfo($scan_gap=1, $corrections=-1, $dmtxTYPE=1) {}
    
    /**
     * get scan region
     * 
     * @return array
     */
    public function getScanRegion() {}
    
    /**
     * Set scan region
     * @param integer $x_min
     * @param integer $x_max
     * @param integer $y_min
     * @param integer $y_max
     * @return bool
     */
    public function setScanRegion($x_min, $x_max, $y_min, $y_max) {}
    
    /**
     * Unset scan region
     * 
     * @return bool
     */
    public function unsetScanRegion() {}
    
    /**
     * Returns encoding scheme on the object
     * 
     * @return integer|CONST dmtx::SCHEME_*
     */
    public function getScheme() {}
    
    /**
     * Sets the encoding scheme on the object
     * 
     * @param integer|CONST dmtx::SCHEME_* $dmtxSCHEME
     * @return bool
     */
    public function setScheme($dmtxSCHEME) {}
    
    /**
     * set shrink
     * 
     * @param integer $shrink
     * @return bool
     */
    public function setShrink($shrink) {}
    
    /**
     * Symbol shape
     * 
     * @param integer $shape
     * @return bool
     */
    public function setSymbolShape($shape) {}
    
    /**
     * Limit which pages to scan
     * 
     * @param integer $start
     * @param integer $limit
     * @return bool
     */
    public function setLimit($start, $limit) {}
    
    /**
     * Set timeout for reading. Negative number unsets timeout
     * 
     * @param integer $timeout timeout in ms
     * @return bool
     */
    public function setTimeout($timeout) {}
    
    /**
     * @return integer
     */
    public function getShrink() {}
    
    /**
     * @return integer
     */
    public function getSymbolShape() {}
    
    /**
     * @return array
     */
    public function getLimit() {}
    
    /**
     * @return integer
     */
    public function getTimeout() {}
    
    /**
     * Loads a string into the object
     * 
     * @param string $fileContent
     * @return bool
     */
    public function loadString($fileContent) {}
    
    /**
     * Loads a file into the object
     * 
     * @param string $filename
     * @return bool
     */
    public function loadFile($filename) {}
    
    /**
     * 
     * Assumes scheme PhpDmtxSchemeBase256
     * @param string $filename
     * @throws \dmtxException
     */
    public function __construct($filename) {}
}
