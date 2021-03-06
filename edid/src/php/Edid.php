<?php
// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

class Edid extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Edid $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_magic = $this->_io->ensureFixedContents("\x00\xFF\xFF\xFF\xFF\xFF\xFF\x00");
        $this->_m_mfgBytes = $this->_io->readU2le();
        $this->_m_productCode = $this->_io->readU2le();
        $this->_m_serial = $this->_io->readU4le();
        $this->_m_mfgWeek = $this->_io->readU1();
        $this->_m_mfgYearMod = $this->_io->readU1();
        $this->_m_edidVersionMajor = $this->_io->readU1();
        $this->_m_edidVersionMinor = $this->_io->readU1();
        $this->_m_inputFlags = $this->_io->readU1();
        $this->_m_screenSizeH = $this->_io->readU1();
        $this->_m_screenSizeV = $this->_io->readU1();
        $this->_m_gammaMod = $this->_io->readU1();
        $this->_m_featuresFlags = $this->_io->readU1();
        $this->_m_chromacity = new \Edid\ChromacityInfo($this->_io, $this, $this->_root);
        $this->_m_estTimings = new \Edid\EstTimingsInfo($this->_io, $this, $this->_root);
        $this->_m_stdTimings = [];
        $n = 8;
        for ($i = 0; $i < $n; $i++) {
            $this->_m_stdTimings[] = new \Edid\StdTiming($this->_io, $this, $this->_root);
        }
    }
    protected $_m_mfgYear;
    public function mfgYear() {
        if ($this->_m_mfgYear !== null)
            return $this->_m_mfgYear;
        $this->_m_mfgYear = ($this->mfgYearMod() + 1990);
        return $this->_m_mfgYear;
    }
    protected $_m_mfgIdCh1;
    public function mfgIdCh1() {
        if ($this->_m_mfgIdCh1 !== null)
            return $this->_m_mfgIdCh1;
        $this->_m_mfgIdCh1 = (($this->mfgBytes() & 31744) >> 10);
        return $this->_m_mfgIdCh1;
    }
    protected $_m_mfgIdCh3;
    public function mfgIdCh3() {
        if ($this->_m_mfgIdCh3 !== null)
            return $this->_m_mfgIdCh3;
        $this->_m_mfgIdCh3 = ($this->mfgBytes() & 31);
        return $this->_m_mfgIdCh3;
    }
    protected $_m_gamma;
    public function gamma() {
        if ($this->_m_gamma !== null)
            return $this->_m_gamma;
        if ($this->gammaMod() != 255) {
            $this->_m_gamma = (($this->gammaMod() + 100) / 100.0);
        }
        return $this->_m_gamma;
    }
    protected $_m_mfgIdCh2;
    public function mfgIdCh2() {
        if ($this->_m_mfgIdCh2 !== null)
            return $this->_m_mfgIdCh2;
        $this->_m_mfgIdCh2 = (($this->mfgBytes() & 992) >> 5);
        return $this->_m_mfgIdCh2;
    }
    protected $_m_magic;
    protected $_m_mfgBytes;
    protected $_m_productCode;
    protected $_m_serial;
    protected $_m_mfgWeek;
    protected $_m_mfgYearMod;
    protected $_m_edidVersionMajor;
    protected $_m_edidVersionMinor;
    protected $_m_inputFlags;
    protected $_m_screenSizeH;
    protected $_m_screenSizeV;
    protected $_m_gammaMod;
    protected $_m_featuresFlags;
    protected $_m_chromacity;
    protected $_m_estTimings;
    protected $_m_stdTimings;
    public function magic() { return $this->_m_magic; }
    public function mfgBytes() { return $this->_m_mfgBytes; }

    /**
     * Manufacturer product code
     */
    public function productCode() { return $this->_m_productCode; }

    /**
     * Serial number
     */
    public function serial() { return $this->_m_serial; }

    /**
     * Week of manufacture. Week numbering is not consistent between manufacturers.
     */
    public function mfgWeek() { return $this->_m_mfgWeek; }

    /**
     * Year of manufacture, less 1990. (1990–2245). If week=255, it is the model year instead.
     */
    public function mfgYearMod() { return $this->_m_mfgYearMod; }

    /**
     * EDID version, usually 1 (for 1.3)
     */
    public function edidVersionMajor() { return $this->_m_edidVersionMajor; }

    /**
     * EDID revision, usually 3 (for 1.3)
     */
    public function edidVersionMinor() { return $this->_m_edidVersionMinor; }
    public function inputFlags() { return $this->_m_inputFlags; }

    /**
     * Maximum horizontal image size, in centimetres (max 292 cm/115 in at 16:9 aspect ratio)
     */
    public function screenSizeH() { return $this->_m_screenSizeH; }

    /**
     * Maximum vertical image size, in centimetres. If either byte is 0, undefined (e.g. projector)
     */
    public function screenSizeV() { return $this->_m_screenSizeV; }

    /**
     * Display gamma, datavalue = (gamma*100)-100 (range 1.00–3.54)
     */
    public function gammaMod() { return $this->_m_gammaMod; }
    public function featuresFlags() { return $this->_m_featuresFlags; }

    /**
     * Phosphor or filter chromaticity structure, which provides info on colorimetry and white point
     */
    public function chromacity() { return $this->_m_chromacity; }

    /**
     * Block of bit flags that indicates support of so called
     * "established timings", which is a commonly used subset of VESA
     * DMT (Discrete Monitor Timings) modes.
     */
    public function estTimings() { return $this->_m_estTimings; }

    /**
     * Array of descriptions of so called "standard timings", which are
     * used to specify up to 8 additional timings not included in
     * "established timings".
     */
    public function stdTimings() { return $this->_m_stdTimings; }
}

/**
 * Chromaticity information: colorimetry and white point
 * coordinates. All coordinates are stored as fixed precision
 * 10-bit numbers, bits are shuffled for compactness.
 */

namespace \Edid;

class ChromacityInfo extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Edid $_parent = null, \Edid $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_redX10 = $this->_io->readBitsInt(2);
        $this->_m_redY10 = $this->_io->readBitsInt(2);
        $this->_m_greenX10 = $this->_io->readBitsInt(2);
        $this->_m_greenY10 = $this->_io->readBitsInt(2);
        $this->_m_blueX10 = $this->_io->readBitsInt(2);
        $this->_m_blueY10 = $this->_io->readBitsInt(2);
        $this->_m_whiteX10 = $this->_io->readBitsInt(2);
        $this->_m_whiteY10 = $this->_io->readBitsInt(2);
        $this->_io->alignToByte();
        $this->_m_redX92 = $this->_io->readU1();
        $this->_m_redY92 = $this->_io->readU1();
        $this->_m_greenX92 = $this->_io->readU1();
        $this->_m_greenY92 = $this->_io->readU1();
        $this->_m_blueX92 = $this->_io->readU1();
        $this->_m_blueY92 = $this->_io->readU1();
        $this->_m_whiteX92 = $this->_io->readU1();
        $this->_m_whiteY92 = $this->_io->readU1();
    }
    protected $_m_greenXInt;
    public function greenXInt() {
        if ($this->_m_greenXInt !== null)
            return $this->_m_greenXInt;
        $this->_m_greenXInt = (($this->greenX92() << 2) | $this->greenX10());
        return $this->_m_greenXInt;
    }
    protected $_m_redY;

    /**
     * Red Y coordinate
     */
    public function redY() {
        if ($this->_m_redY !== null)
            return $this->_m_redY;
        $this->_m_redY = ($this->redYInt() / 1024.0);
        return $this->_m_redY;
    }
    protected $_m_greenYInt;
    public function greenYInt() {
        if ($this->_m_greenYInt !== null)
            return $this->_m_greenYInt;
        $this->_m_greenYInt = (($this->greenY92() << 2) | $this->greenY10());
        return $this->_m_greenYInt;
    }
    protected $_m_whiteY;

    /**
     * White Y coordinate
     */
    public function whiteY() {
        if ($this->_m_whiteY !== null)
            return $this->_m_whiteY;
        $this->_m_whiteY = ($this->whiteYInt() / 1024.0);
        return $this->_m_whiteY;
    }
    protected $_m_redX;

    /**
     * Red X coordinate
     */
    public function redX() {
        if ($this->_m_redX !== null)
            return $this->_m_redX;
        $this->_m_redX = ($this->redXInt() / 1024.0);
        return $this->_m_redX;
    }
    protected $_m_whiteX;

    /**
     * White X coordinate
     */
    public function whiteX() {
        if ($this->_m_whiteX !== null)
            return $this->_m_whiteX;
        $this->_m_whiteX = ($this->whiteXInt() / 1024.0);
        return $this->_m_whiteX;
    }
    protected $_m_blueX;

    /**
     * Blue X coordinate
     */
    public function blueX() {
        if ($this->_m_blueX !== null)
            return $this->_m_blueX;
        $this->_m_blueX = ($this->blueXInt() / 1024.0);
        return $this->_m_blueX;
    }
    protected $_m_whiteXInt;
    public function whiteXInt() {
        if ($this->_m_whiteXInt !== null)
            return $this->_m_whiteXInt;
        $this->_m_whiteXInt = (($this->whiteX92() << 2) | $this->whiteX10());
        return $this->_m_whiteXInt;
    }
    protected $_m_whiteYInt;
    public function whiteYInt() {
        if ($this->_m_whiteYInt !== null)
            return $this->_m_whiteYInt;
        $this->_m_whiteYInt = (($this->whiteY92() << 2) | $this->whiteY10());
        return $this->_m_whiteYInt;
    }
    protected $_m_greenX;

    /**
     * Green X coordinate
     */
    public function greenX() {
        if ($this->_m_greenX !== null)
            return $this->_m_greenX;
        $this->_m_greenX = ($this->greenXInt() / 1024.0);
        return $this->_m_greenX;
    }
    protected $_m_redXInt;
    public function redXInt() {
        if ($this->_m_redXInt !== null)
            return $this->_m_redXInt;
        $this->_m_redXInt = (($this->redX92() << 2) | $this->redX10());
        return $this->_m_redXInt;
    }
    protected $_m_redYInt;
    public function redYInt() {
        if ($this->_m_redYInt !== null)
            return $this->_m_redYInt;
        $this->_m_redYInt = (($this->redY92() << 2) | $this->redY10());
        return $this->_m_redYInt;
    }
    protected $_m_blueXInt;
    public function blueXInt() {
        if ($this->_m_blueXInt !== null)
            return $this->_m_blueXInt;
        $this->_m_blueXInt = (($this->blueX92() << 2) | $this->blueX10());
        return $this->_m_blueXInt;
    }
    protected $_m_blueY;

    /**
     * Blue Y coordinate
     */
    public function blueY() {
        if ($this->_m_blueY !== null)
            return $this->_m_blueY;
        $this->_m_blueY = ($this->blueYInt() / 1024.0);
        return $this->_m_blueY;
    }
    protected $_m_greenY;

    /**
     * Green Y coordinate
     */
    public function greenY() {
        if ($this->_m_greenY !== null)
            return $this->_m_greenY;
        $this->_m_greenY = ($this->greenYInt() / 1024.0);
        return $this->_m_greenY;
    }
    protected $_m_blueYInt;
    public function blueYInt() {
        if ($this->_m_blueYInt !== null)
            return $this->_m_blueYInt;
        $this->_m_blueYInt = (($this->blueY92() << 2) | $this->blueY10());
        return $this->_m_blueYInt;
    }
    protected $_m_redX10;
    protected $_m_redY10;
    protected $_m_greenX10;
    protected $_m_greenY10;
    protected $_m_blueX10;
    protected $_m_blueY10;
    protected $_m_whiteX10;
    protected $_m_whiteY10;
    protected $_m_redX92;
    protected $_m_redY92;
    protected $_m_greenX92;
    protected $_m_greenY92;
    protected $_m_blueX92;
    protected $_m_blueY92;
    protected $_m_whiteX92;
    protected $_m_whiteY92;

    /**
     * Red X, bits 1..0
     */
    public function redX10() { return $this->_m_redX10; }

    /**
     * Red Y, bits 1..0
     */
    public function redY10() { return $this->_m_redY10; }

    /**
     * Green X, bits 1..0
     */
    public function greenX10() { return $this->_m_greenX10; }

    /**
     * Green Y, bits 1..0
     */
    public function greenY10() { return $this->_m_greenY10; }

    /**
     * Blue X, bits 1..0
     */
    public function blueX10() { return $this->_m_blueX10; }

    /**
     * Blue Y, bits 1..0
     */
    public function blueY10() { return $this->_m_blueY10; }

    /**
     * White X, bits 1..0
     */
    public function whiteX10() { return $this->_m_whiteX10; }

    /**
     * White Y, bits 1..0
     */
    public function whiteY10() { return $this->_m_whiteY10; }

    /**
     * Red X, bits 9..2
     */
    public function redX92() { return $this->_m_redX92; }

    /**
     * Red Y, bits 9..2
     */
    public function redY92() { return $this->_m_redY92; }

    /**
     * Green X, bits 9..2
     */
    public function greenX92() { return $this->_m_greenX92; }

    /**
     * Green Y, bits 9..2
     */
    public function greenY92() { return $this->_m_greenY92; }

    /**
     * Blue X, bits 9..2
     */
    public function blueX92() { return $this->_m_blueX92; }

    /**
     * Blue Y, bits 9..2
     */
    public function blueY92() { return $this->_m_blueY92; }

    /**
     * White X, bits 9..2
     */
    public function whiteX92() { return $this->_m_whiteX92; }

    /**
     * White Y, bits 9..2
     */
    public function whiteY92() { return $this->_m_whiteY92; }
}

namespace \Edid;

class EstTimingsInfo extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Edid $_parent = null, \Edid $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_can72040070 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can72040088 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can64048060 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can64048067 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can64048072 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can64048075 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can80060056 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can80060060 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can80060072 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can80060075 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can83262475 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can102476887I = $this->_io->readBitsInt(1) != 0;
        $this->_m_can102476860 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can102476870 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can102476875 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can1280102475 = $this->_io->readBitsInt(1) != 0;
        $this->_m_can115287075 = $this->_io->readBitsInt(1) != 0;
        $this->_m_reserved = $this->_io->readBitsInt(7);
    }
    protected $_m_can72040070;
    protected $_m_can72040088;
    protected $_m_can64048060;
    protected $_m_can64048067;
    protected $_m_can64048072;
    protected $_m_can64048075;
    protected $_m_can80060056;
    protected $_m_can80060060;
    protected $_m_can80060072;
    protected $_m_can80060075;
    protected $_m_can83262475;
    protected $_m_can102476887I;
    protected $_m_can102476860;
    protected $_m_can102476870;
    protected $_m_can102476875;
    protected $_m_can1280102475;
    protected $_m_can115287075;
    protected $_m_reserved;

    /**
     * Supports 720 x 400 @ 70Hz
     */
    public function can72040070() { return $this->_m_can72040070; }

    /**
     * Supports 720 x 400 @ 88Hz
     */
    public function can72040088() { return $this->_m_can72040088; }

    /**
     * Supports 640 x 480 @ 60Hz
     */
    public function can64048060() { return $this->_m_can64048060; }

    /**
     * Supports 640 x 480 @ 67Hz
     */
    public function can64048067() { return $this->_m_can64048067; }

    /**
     * Supports 640 x 480 @ 72Hz
     */
    public function can64048072() { return $this->_m_can64048072; }

    /**
     * Supports 640 x 480 @ 75Hz
     */
    public function can64048075() { return $this->_m_can64048075; }

    /**
     * Supports 800 x 600 @ 56Hz
     */
    public function can80060056() { return $this->_m_can80060056; }

    /**
     * Supports 800 x 600 @ 60Hz
     */
    public function can80060060() { return $this->_m_can80060060; }

    /**
     * Supports 800 x 600 @ 72Hz
     */
    public function can80060072() { return $this->_m_can80060072; }

    /**
     * Supports 800 x 600 @ 75Hz
     */
    public function can80060075() { return $this->_m_can80060075; }

    /**
     * Supports 832 x 624 @ 75Hz
     */
    public function can83262475() { return $this->_m_can83262475; }

    /**
     * Supports 1024 x 768 @ 87Hz(I)
     */
    public function can102476887I() { return $this->_m_can102476887I; }

    /**
     * Supports 1024 x 768 @ 60Hz
     */
    public function can102476860() { return $this->_m_can102476860; }

    /**
     * Supports 1024 x 768 @ 70Hz
     */
    public function can102476870() { return $this->_m_can102476870; }

    /**
     * Supports 1024 x 768 @ 75Hz
     */
    public function can102476875() { return $this->_m_can102476875; }

    /**
     * Supports 1280 x 1024 @ 75Hz
     */
    public function can1280102475() { return $this->_m_can1280102475; }

    /**
     * Supports 1152 x 870 @ 75Hz
     */
    public function can115287075() { return $this->_m_can115287075; }
    public function reserved() { return $this->_m_reserved; }
}

namespace \Edid;

class StdTiming extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Edid $_parent = null, \Edid $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_horizActivePixelsMod = $this->_io->readU1();
        $this->_m_aspectRatio = $this->_io->readBitsInt(2);
        $this->_m_refreshRateMod = $this->_io->readBitsInt(5);
    }
    protected $_m_horizActivePixels;

    /**
     * Range of horizontal active pixels.
     */
    public function horizActivePixels() {
        if ($this->_m_horizActivePixels !== null)
            return $this->_m_horizActivePixels;
        $this->_m_horizActivePixels = (($this->horizActivePixelsMod() + 31) * 8);
        return $this->_m_horizActivePixels;
    }
    protected $_m_refreshRate;

    /**
     * Vertical refresh rate, Hz.
     */
    public function refreshRate() {
        if ($this->_m_refreshRate !== null)
            return $this->_m_refreshRate;
        $this->_m_refreshRate = ($this->refreshRateMod() + 60);
        return $this->_m_refreshRate;
    }
    protected $_m_horizActivePixelsMod;
    protected $_m_aspectRatio;
    protected $_m_refreshRateMod;

    /**
     * Range of horizontal active pixels, written in modified form:
     * `(horiz_active_pixels / 8) - 31`. This yields an effective
     * range of 256..2288, with steps of 8 pixels.
     */
    public function horizActivePixelsMod() { return $this->_m_horizActivePixelsMod; }

    /**
     * Aspect ratio of the image. Can be used to calculate number
     * of vertical pixels.
     */
    public function aspectRatio() { return $this->_m_aspectRatio; }

    /**
     * Refresh rate in Hz, written in modified form: `refresh_rate
     * - 60`. This yields an effective range of 60..123 Hz.
     */
    public function refreshRateMod() { return $this->_m_refreshRateMod; }
}

namespace \Edid\StdTiming;

class AspectRatios {
    const RATIO_16_10 = 0;
    const RATIO_4_3 = 1;
    const RATIO_5_4 = 2;
    const RATIO_16_9 = 3;
}
