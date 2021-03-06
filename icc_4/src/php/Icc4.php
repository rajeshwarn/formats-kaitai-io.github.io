<?php
// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

class Icc4 extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_header = new \Icc4\ProfileHeader($this->_io, $this, $this->_root);
        $this->_m_tagTable = new \Icc4\TagTable($this->_io, $this, $this->_root);
    }
    protected $_m_header;
    protected $_m_tagTable;
    public function header() { return $this->_m_header; }
    public function tagTable() { return $this->_m_tagTable; }
}

namespace \Icc4;

class U8Fixed8Number extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_number = $this->_io->readBytes(2);
    }
    protected $_m_number;
    public function number() { return $this->_m_number; }
}

namespace \Icc4;

class U16Fixed16Number extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_number = $this->_io->readBytes(4);
    }
    protected $_m_number;
    public function number() { return $this->_m_number; }
}

namespace \Icc4;

class StandardIlluminantEncoding extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_standardIlluminantEncoding = $this->_io->readU4be();
    }
    protected $_m_standardIlluminantEncoding;
    public function standardIlluminantEncoding() { return $this->_m_standardIlluminantEncoding; }
}

namespace \Icc4\StandardIlluminantEncoding;

class StandardIlluminantEncodings {
    const UNKNOWN = 0;
    const D50 = 1;
    const D65 = 2;
    const D93 = 3;
    const F2 = 4;
    const D55 = 5;
    const A = 6;
    const EQUI_POWER = 7;
    const F8 = 8;
}

namespace \Icc4;

class ProfileHeader extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4 $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_size = $this->_io->readU4be();
        $this->_m_preferredCmmType = $this->_io->readU4be();
        $this->_m_version = new \Icc4\ProfileHeader\VersionField($this->_io, $this, $this->_root);
        $this->_m_deviceClass = $this->_io->readU4be();
        $this->_m_colorSpace = $this->_io->readU4be();
        $this->_m_pcs = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes(4), "ASCII");
        $this->_m_creationDateTime = new \Icc4\DateTimeNumber($this->_io, $this, $this->_root);
        $this->_m_fileSignature = $this->_io->ensureFixedContents("\x61\x63\x73\x70");
        $this->_m_primaryPlatform = $this->_io->readU4be();
        $this->_m_profileFlags = new \Icc4\ProfileHeader\ProfileFlags($this->_io, $this, $this->_root);
        $this->_m_deviceManufacturer = new \Icc4\DeviceManufacturer($this->_io, $this, $this->_root);
        $this->_m_deviceModel = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes(4), "ASCII");
        $this->_m_deviceAttributes = new \Icc4\DeviceAttributes($this->_io, $this, $this->_root);
        $this->_m_renderingIntent = $this->_io->readU4be();
        $this->_m_nciexyzValuesOfIlluminantOfPcs = new \Icc4\XyzNumber($this->_io, $this, $this->_root);
        $this->_m_creator = new \Icc4\DeviceManufacturer($this->_io, $this, $this->_root);
        $this->_m_identifier = $this->_io->readBytes(16);
        $this->_m_reservedData = $this->_io->readBytes(28);
    }
    protected $_m_size;
    protected $_m_preferredCmmType;
    protected $_m_version;
    protected $_m_deviceClass;
    protected $_m_colorSpace;
    protected $_m_pcs;
    protected $_m_creationDateTime;
    protected $_m_fileSignature;
    protected $_m_primaryPlatform;
    protected $_m_profileFlags;
    protected $_m_deviceManufacturer;
    protected $_m_deviceModel;
    protected $_m_deviceAttributes;
    protected $_m_renderingIntent;
    protected $_m_nciexyzValuesOfIlluminantOfPcs;
    protected $_m_creator;
    protected $_m_identifier;
    protected $_m_reservedData;
    public function size() { return $this->_m_size; }
    public function preferredCmmType() { return $this->_m_preferredCmmType; }
    public function version() { return $this->_m_version; }
    public function deviceClass() { return $this->_m_deviceClass; }
    public function colorSpace() { return $this->_m_colorSpace; }
    public function pcs() { return $this->_m_pcs; }
    public function creationDateTime() { return $this->_m_creationDateTime; }
    public function fileSignature() { return $this->_m_fileSignature; }
    public function primaryPlatform() { return $this->_m_primaryPlatform; }
    public function profileFlags() { return $this->_m_profileFlags; }
    public function deviceManufacturer() { return $this->_m_deviceManufacturer; }
    public function deviceModel() { return $this->_m_deviceModel; }
    public function deviceAttributes() { return $this->_m_deviceAttributes; }
    public function renderingIntent() { return $this->_m_renderingIntent; }
    public function nciexyzValuesOfIlluminantOfPcs() { return $this->_m_nciexyzValuesOfIlluminantOfPcs; }
    public function creator() { return $this->_m_creator; }
    public function identifier() { return $this->_m_identifier; }
    public function reservedData() { return $this->_m_reservedData; }
}

namespace \Icc4\ProfileHeader;

class VersionField extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\ProfileHeader $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_major = $this->_io->ensureFixedContents("\x04");
        $this->_m_minor = $this->_io->readBitsInt(4);
        $this->_m_bugFixLevel = $this->_io->readBitsInt(4);
        $this->_io->alignToByte();
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00");
    }
    protected $_m_major;
    protected $_m_minor;
    protected $_m_bugFixLevel;
    protected $_m_reserved;
    public function major() { return $this->_m_major; }
    public function minor() { return $this->_m_minor; }
    public function bugFixLevel() { return $this->_m_bugFixLevel; }
    public function reserved() { return $this->_m_reserved; }
}

namespace \Icc4\ProfileHeader;

class ProfileFlags extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\ProfileHeader $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_embeddedProfile = $this->_io->readBitsInt(1) != 0;
        $this->_m_profileCanBeUsedIndependentlyOfEmbeddedColourData = $this->_io->readBitsInt(1) != 0;
        $this->_m_otherFlags = $this->_io->readBitsInt(30);
    }
    protected $_m_embeddedProfile;
    protected $_m_profileCanBeUsedIndependentlyOfEmbeddedColourData;
    protected $_m_otherFlags;
    public function embeddedProfile() { return $this->_m_embeddedProfile; }
    public function profileCanBeUsedIndependentlyOfEmbeddedColourData() { return $this->_m_profileCanBeUsedIndependentlyOfEmbeddedColourData; }
    public function otherFlags() { return $this->_m_otherFlags; }
}

namespace \Icc4\ProfileHeader;

class CmmSignatures {
    const THE_IMAGING_FACTORY_CMM = 858931796;
    const AGFA_CMM = 1094929747;
    const ADOBE_CMM = 1094992453;
    const COLOR_GEAR_CMM = 1128484179;
    const LOGOSYNC_CMM = 1147629395;
    const EFI_CMM = 1162234144;
    const EXACT_SCAN_CMM = 1163411779;
    const FUJI_FILM_CMM = 1179000864;
    const HARLEQUIN_RIP_CMM = 1212370253;
    const HEIDELBERG_CMM = 1212435744;
    const KODAK_CMM = 1262701907;
    const KONICA_MINOLTA_CMM = 1296256324;
    const DEVICE_LINK_CMM = 1380404563;
    const SAMPLE_ICC_CMM = 1397310275;
    const MUTOH_CMM = 1397311310;
    const TOSHIBA_CMM = 1413696845;
    const COLOR_GEAR_CMM_LITE = 1430471501;
    const COLOR_GEAR_CMM_C = 1430474067;
    const WINDOWS_COLOR_SYSTEM_CMM = 1464029984;
    const WARE_TO_GO_CMM = 1465141024;
    const APPLE_CMM = 1634758764;
    const ARGYLL_CMS_CMM = 1634887532;
    const LITTLE_CMS_CMM = 1818455411;
    const ZORAN_CMM = 2053320752;
}

namespace \Icc4\ProfileHeader;

class PrimaryPlatforms {
    const APPLE_COMPUTER_INC = 1095782476;
    const MICROSOFT_CORPORATION = 1297303124;
    const SILICON_GRAPHICS_INC = 1397180704;
    const SUN_MICROSYSTEMS = 1398099543;
}

namespace \Icc4\ProfileHeader;

class ProfileClasses {
    const ABSTRACT_PROFILE = 1633842036;
    const DEVICE_LINK_PROFILE = 1818848875;
    const DISPLAY_DEVICE_PROFILE = 1835955314;
    const NAMED_COLOR_PROFILE = 1852662636;
    const OUTPUT_DEVICE_PROFILE = 1886549106;
    const INPUT_DEVICE_PROFILE = 1935896178;
    const COLOR_SPACE_PROFILE = 1936744803;
}

namespace \Icc4\ProfileHeader;

class RenderingIntents {
    const PERCEPTUAL = 0;
    const MEDIA_RELATIVE_COLORIMETRIC = 1;
    const SATURATION = 2;
    const ICC_ABSOLUTE_COLORIMETRIC = 3;
}

namespace \Icc4\ProfileHeader;

class DataColourSpaces {
    const TWO_COLOUR = 843271250;
    const THREE_COLOUR = 860048466;
    const FOUR_COLOUR = 876825682;
    const FIVE_COLOUR = 893602898;
    const SIX_COLOUR = 910380114;
    const SEVEN_COLOUR = 927157330;
    const EIGHT_COLOUR = 943934546;
    const NINE_COLOUR = 960711762;
    const TEN_COLOUR = 1094929490;
    const ELEVEN_COLOUR = 1111706706;
    const TWELVE_COLOUR = 1128483922;
    const CMY = 1129142560;
    const CMYK = 1129142603;
    const THIRTEEN_COLOUR = 1145261138;
    const FOURTEEN_COLOUR = 1162038354;
    const FIFTEEN_COLOUR = 1178815570;
    const GRAY = 1196573017;
    const HLS = 1212961568;
    const HSV = 1213421088;
    const CIELAB_OR_PCSLAB = 1281450528;
    const CIELUV = 1282766368;
    const RGB = 1380401696;
    const NCIEXYZ_OR_PCSXYZ = 1482250784;
    const YCBCR = 1497588338;
    const CIEYXY = 1501067552;
}

namespace \Icc4;

class XyzNumber extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_x = $this->_io->readBytes(4);
        $this->_m_y = $this->_io->readBytes(4);
        $this->_m_z = $this->_io->readBytes(4);
    }
    protected $_m_x;
    protected $_m_y;
    protected $_m_z;
    public function x() { return $this->_m_x; }
    public function y() { return $this->_m_y; }
    public function z() { return $this->_m_z; }
}

namespace \Icc4;

class DateTimeNumber extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_year = $this->_io->readU2be();
        $this->_m_month = $this->_io->readU2be();
        $this->_m_day = $this->_io->readU2be();
        $this->_m_hour = $this->_io->readU2be();
        $this->_m_minute = $this->_io->readU2be();
        $this->_m_second = $this->_io->readU2be();
    }
    protected $_m_year;
    protected $_m_month;
    protected $_m_day;
    protected $_m_hour;
    protected $_m_minute;
    protected $_m_second;
    public function year() { return $this->_m_year; }
    public function month() { return $this->_m_month; }
    public function day() { return $this->_m_day; }
    public function hour() { return $this->_m_hour; }
    public function minute() { return $this->_m_minute; }
    public function second() { return $this->_m_second; }
}

namespace \Icc4;

class Response16Number extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_number = $this->_io->readU4be();
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00");
        $this->_m_measurementValue = new \Icc4\S15Fixed16Number($this->_io, $this, $this->_root);
    }
    protected $_m_number;
    protected $_m_reserved;
    protected $_m_measurementValue;
    public function number() { return $this->_m_number; }
    public function reserved() { return $this->_m_reserved; }
    public function measurementValue() { return $this->_m_measurementValue; }
}

namespace \Icc4;

class U1Fixed15Number extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_number = $this->_io->readBytes(2);
    }
    protected $_m_number;
    public function number() { return $this->_m_number; }
}

namespace \Icc4;

class TagTable extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4 $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagCount = $this->_io->readU4be();
        $this->_m_tags = [];
        $n = $this->tagCount();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_tags[] = new \Icc4\TagTable\TagDefinition($this->_io, $this, $this->_root);
        }
    }
    protected $_m_tagCount;
    protected $_m_tags;
    public function tagCount() { return $this->_m_tagCount; }
    public function tags() { return $this->_m_tags; }
}

namespace \Icc4\TagTable;

class TagDefinition extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagSignature = $this->_io->readU4be();
        $this->_m_offsetToDataElement = $this->_io->readU4be();
        $this->_m_sizeOfDataElement = $this->_io->readU4be();
    }
    protected $_m_tagDataElement;
    public function tagDataElement() {
        if ($this->_m_tagDataElement !== null)
            return $this->_m_tagDataElement;
        $_pos = $this->_io->pos();
        $this->_io->seek($this->offsetToDataElement());
        switch ($this->tagSignature()) {
            case \Icc4\TagTable\TagDefinition\TagSignatures::PROFILE_SEQUENCE_IDENTIFIER:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ProfileSequenceIdentifierTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::COLORIMETRIC_INTENT_IMAGE_STATE:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ColorimetricIntentImageStateTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::RED_TRC:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\RedTrcTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::PREVIEW_0:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\Preview0Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::GREEN_TRC:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\GreenTrcTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::B_TO_D_0:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BToD0Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::COLORANT_TABLE_OUT:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ColorantTableOutTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::B_TO_A_2:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BToA2Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::CALIBRATION_DATE_TIME:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\CalibrationDateTimeTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::CHROMATIC_ADAPTATION:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ChromaticAdaptationTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::COLORANT_TABLE:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ColorantTableTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::A_TO_B_2:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\AToB2Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::D_TO_B_1:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\DToB1Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::CHROMATICITY:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ChromaticityTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::BLUE_MATRIX_COLUMN:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BlueMatrixColumnTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::A_TO_B_0:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\AToB0Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::B_TO_D_2:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BToD2Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::B_TO_A_1:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BToA1Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::MEDIA_WHITE_POINT:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\MediaWhitePointTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::D_TO_B_0:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\DToB0Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::NAMED_COLOR_2:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\NamedColor2Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::D_TO_B_2:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\DToB2Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::RED_MATRIX_COLUMN:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\RedMatrixColumnTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::VIEWING_CONDITIONS:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ViewingConditionsTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::A_TO_B_1:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\AToB1Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::PREVIEW_1:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\Preview1Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::GRAY_TRC:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\GrayTrcTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::DEVICE_MFG_DESC:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\DeviceMfgDescTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::B_TO_D_1:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BToD1Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::COLORANT_ORDER:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ColorantOrderTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::COPYRIGHT:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\CopyrightTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::GAMUT:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\GamutTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::CHAR_TARGET:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\CharTargetTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::OUTPUT_RESPONSE:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\OutputResponseTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::TECHNOLOGY:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\TechnologyTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::VIEWING_COND_DESC:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ViewingCondDescTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::PROFILE_DESCRIPTION:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ProfileDescriptionTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::LUMINANCE:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\LuminanceTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::D_TO_B_3:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\DToB3Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::B_TO_D_3:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BToD3Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::B_TO_A_0:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BToA0Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::PREVIEW_2:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\Preview2Tag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::GREEN_MATRIX_COLUMN:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\GreenMatrixColumnTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::PROFILE_SEQUENCE:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\ProfileSequenceTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::SATURATION_RENDERING_INTENT_GAMUT:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\SaturationRenderingIntentGamutTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::PERCEPTUAL_RENDERING_INTENT_GAMUT:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\PerceptualRenderingIntentGamutTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::BLUE_TRC:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\BlueTrcTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::DEVICE_MODEL_DESC:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\DeviceModelDescTag($io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagSignatures::MEASUREMENT:
                $this->_m__raw_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_tagDataElement);
                $this->_m_tagDataElement = new \Icc4\TagTable\TagDefinition\MeasurementTag($io, $this, $this->_root);
                break;
            default:
                $this->_m_tagDataElement = $this->_io->readBytes($this->sizeOfDataElement());
                break;
        }
        $this->_io->seek($_pos);
        return $this->_m_tagDataElement;
    }
    protected $_m_tagSignature;
    protected $_m_offsetToDataElement;
    protected $_m_sizeOfDataElement;
    protected $_m__raw_tagDataElement;
    public function tagSignature() { return $this->_m_tagSignature; }
    public function offsetToDataElement() { return $this->_m_offsetToDataElement; }
    public function sizeOfDataElement() { return $this->_m_sizeOfDataElement; }
    public function _raw_tagDataElement() { return $this->_m__raw_tagDataElement; }
}

namespace \Icc4\TagTable\TagDefinition;

class BlueMatrixColumnTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::XYZ_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\XyzType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class DeviceMfgDescTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_LOCALIZED_UNICODE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class NamedColor2Type extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\NamedColor2Tag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_vendorSpecificFlag = $this->_io->readU4be();
        $this->_m_countOfNamedColours = $this->_io->readU4be();
        $this->_m_numberOfDeviceCoordinatesForEachNamedColour = $this->_io->readU4be();
        $this->_m_prefixForEachColourName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "ASCII");
        $this->_m_prefixForEachColourNamePadding = [];
        $n = (32 - strlen($this->prefixForEachColourName()));
        for ($i = 0; $i < $n; $i++) {
            $this->_m_prefixForEachColourNamePadding = $this->_io->ensureFixedContents("\x00");
        }
        $this->_m_suffixForEachColourName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "ASCII");
        $this->_m_suffixForEachColourNamePadding = [];
        $n = (32 - strlen($this->suffixForEachColourName()));
        for ($i = 0; $i < $n; $i++) {
            $this->_m_suffixForEachColourNamePadding = $this->_io->ensureFixedContents("\x00");
        }
        $this->_m_namedColourDefinitions = [];
        $n = $this->countOfNamedColours();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_namedColourDefinitions[] = new \Icc4\TagTable\TagDefinition\NamedColor2Type\NamedColourDefinition($this->_io, $this, $this->_root);
        }
    }
    protected $_m_reserved;
    protected $_m_vendorSpecificFlag;
    protected $_m_countOfNamedColours;
    protected $_m_numberOfDeviceCoordinatesForEachNamedColour;
    protected $_m_prefixForEachColourName;
    protected $_m_prefixForEachColourNamePadding;
    protected $_m_suffixForEachColourName;
    protected $_m_suffixForEachColourNamePadding;
    protected $_m_namedColourDefinitions;
    public function reserved() { return $this->_m_reserved; }
    public function vendorSpecificFlag() { return $this->_m_vendorSpecificFlag; }
    public function countOfNamedColours() { return $this->_m_countOfNamedColours; }
    public function numberOfDeviceCoordinatesForEachNamedColour() { return $this->_m_numberOfDeviceCoordinatesForEachNamedColour; }
    public function prefixForEachColourName() { return $this->_m_prefixForEachColourName; }
    public function prefixForEachColourNamePadding() { return $this->_m_prefixForEachColourNamePadding; }
    public function suffixForEachColourName() { return $this->_m_suffixForEachColourName; }
    public function suffixForEachColourNamePadding() { return $this->_m_suffixForEachColourNamePadding; }
    public function namedColourDefinitions() { return $this->_m_namedColourDefinitions; }
}

namespace \Icc4\TagTable\TagDefinition\NamedColor2Type;

class NamedColourDefinition extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\NamedColor2Type $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_rootName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "ASCII");
        $this->_m_rootNamePadding = [];
        $n = (32 - strlen($this->rootName()));
        for ($i = 0; $i < $n; $i++) {
            $this->_m_rootNamePadding = $this->_io->ensureFixedContents("\x00");
        }
        $this->_m_pcsCoordinates = $this->_io->readBytes(6);
        if ($this->_parent()->numberOfDeviceCoordinatesForEachNamedColour() > 0) {
            $this->_m_deviceCoordinates = [];
            $n = $this->_parent()->countOfNamedColours();
            for ($i = 0; $i < $n; $i++) {
                $this->_m_deviceCoordinates[] = $this->_io->readU2be();
            }
        }
    }
    protected $_m_rootName;
    protected $_m_rootNamePadding;
    protected $_m_pcsCoordinates;
    protected $_m_deviceCoordinates;
    public function rootName() { return $this->_m_rootName; }
    public function rootNamePadding() { return $this->_m_rootNamePadding; }
    public function pcsCoordinates() { return $this->_m_pcsCoordinates; }
    public function deviceCoordinates() { return $this->_m_deviceCoordinates; }
}

namespace \Icc4\TagTable\TagDefinition;

class ViewingConditionsTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::VIEWING_CONDITIONS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ViewingConditionsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class BlueTrcTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\CurveType($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::PARAMETRIC_CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ParametricCurveType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ResponseCurveSet16Type extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\OutputResponseTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfChannels = $this->_io->readU2be();
        $this->_m_countOfMeasurementTypes = $this->_io->readU2be();
        $this->_m_responseCurveStructureOffsets = [];
        $n = $this->countOfMeasurementTypes();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_responseCurveStructureOffsets[] = $this->_io->readU4be();
        }
        $this->_m_responseCurveStructures = $this->_io->readBytesFull();
    }
    protected $_m_reserved;
    protected $_m_numberOfChannels;
    protected $_m_countOfMeasurementTypes;
    protected $_m_responseCurveStructureOffsets;
    protected $_m_responseCurveStructures;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfChannels() { return $this->_m_numberOfChannels; }
    public function countOfMeasurementTypes() { return $this->_m_countOfMeasurementTypes; }
    public function responseCurveStructureOffsets() { return $this->_m_responseCurveStructureOffsets; }
    public function responseCurveStructures() { return $this->_m_responseCurveStructures; }
}

namespace \Icc4\TagTable\TagDefinition;

class CurveType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfEntries = $this->_io->readU4be();
        if ($this->numberOfEntries() > 1) {
            $this->_m_curveValues = [];
            $n = $this->numberOfEntries();
            for ($i = 0; $i < $n; $i++) {
                $this->_m_curveValues[] = $this->_io->readU4be();
            }
        }
        if ($this->numberOfEntries() == 1) {
            $this->_m_curveValue = $this->_io->readU1();
        }
    }
    protected $_m_reserved;
    protected $_m_numberOfEntries;
    protected $_m_curveValues;
    protected $_m_curveValue;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfEntries() { return $this->_m_numberOfEntries; }
    public function curveValues() { return $this->_m_curveValues; }
    public function curveValue() { return $this->_m_curveValue; }
}

namespace \Icc4\TagTable\TagDefinition;

class SaturationRenderingIntentGamutTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::SIGNATURE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\SignatureType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class XyzType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_values = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_values[] = new \Icc4\XyzNumber($this->_io, $this, $this->_root);
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_values;
    public function reserved() { return $this->_m_reserved; }
    public function values() { return $this->_m_values; }
}

namespace \Icc4\TagTable\TagDefinition;

class Lut8Type extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfInputChannels = $this->_io->readU1();
        $this->_m_numberOfOutputChannels = $this->_io->readU1();
        $this->_m_numberOfClutGridPoints = $this->_io->readU1();
        $this->_m_padding = $this->_io->ensureFixedContents("\x00");
        $this->_m_encodedEParameters = [];
        $n = 9;
        for ($i = 0; $i < $n; $i++) {
            $this->_m_encodedEParameters[] = $this->_io->readS4be();
        }
        $this->_m_numberOfInputTableEntries = $this->_io->readU4be();
        $this->_m_numberOfOutputTableEntries = $this->_io->readU4be();
        $this->_m_inputTables = $this->_io->readBytes((256 * $this->numberOfInputChannels()));
        $this->_m_clutValues = $this->_io->readBytes((($this->numberOfClutGridPoints() ^ $this->numberOfInputChannels()) * $this->numberOfOutputChannels()));
        $this->_m_outputTables = $this->_io->readBytes((256 * $this->numberOfOutputChannels()));
    }
    protected $_m_reserved;
    protected $_m_numberOfInputChannels;
    protected $_m_numberOfOutputChannels;
    protected $_m_numberOfClutGridPoints;
    protected $_m_padding;
    protected $_m_encodedEParameters;
    protected $_m_numberOfInputTableEntries;
    protected $_m_numberOfOutputTableEntries;
    protected $_m_inputTables;
    protected $_m_clutValues;
    protected $_m_outputTables;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfInputChannels() { return $this->_m_numberOfInputChannels; }
    public function numberOfOutputChannels() { return $this->_m_numberOfOutputChannels; }
    public function numberOfClutGridPoints() { return $this->_m_numberOfClutGridPoints; }
    public function padding() { return $this->_m_padding; }
    public function encodedEParameters() { return $this->_m_encodedEParameters; }
    public function numberOfInputTableEntries() { return $this->_m_numberOfInputTableEntries; }
    public function numberOfOutputTableEntries() { return $this->_m_numberOfOutputTableEntries; }
    public function inputTables() { return $this->_m_inputTables; }
    public function clutValues() { return $this->_m_clutValues; }
    public function outputTables() { return $this->_m_outputTables; }
}

namespace \Icc4\TagTable\TagDefinition;

class BToA2Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutBToAType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class LutAToBType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfInputChannels = $this->_io->readU1();
        $this->_m_numberOfOutputChannels = $this->_io->readU1();
        $this->_m_padding = $this->_io->ensureFixedContents("\x00\x00");
        $this->_m_offsetToFirstBCurve = $this->_io->readU4be();
        $this->_m_offsetToMatrix = $this->_io->readU4be();
        $this->_m_offsetToFirstMCurve = $this->_io->readU4be();
        $this->_m_offsetToClut = $this->_io->readU4be();
        $this->_m_offsetToFirstACurve = $this->_io->readU4be();
        $this->_m_data = $this->_io->readBytesFull();
    }
    protected $_m_reserved;
    protected $_m_numberOfInputChannels;
    protected $_m_numberOfOutputChannels;
    protected $_m_padding;
    protected $_m_offsetToFirstBCurve;
    protected $_m_offsetToMatrix;
    protected $_m_offsetToFirstMCurve;
    protected $_m_offsetToClut;
    protected $_m_offsetToFirstACurve;
    protected $_m_data;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfInputChannels() { return $this->_m_numberOfInputChannels; }
    public function numberOfOutputChannels() { return $this->_m_numberOfOutputChannels; }
    public function padding() { return $this->_m_padding; }
    public function offsetToFirstBCurve() { return $this->_m_offsetToFirstBCurve; }
    public function offsetToMatrix() { return $this->_m_offsetToMatrix; }
    public function offsetToFirstMCurve() { return $this->_m_offsetToFirstMCurve; }
    public function offsetToClut() { return $this->_m_offsetToClut; }
    public function offsetToFirstACurve() { return $this->_m_offsetToFirstACurve; }
    public function data() { return $this->_m_data; }
}

namespace \Icc4\TagTable\TagDefinition;

class BToA0Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutBToAType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class MediaWhitePointTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::XYZ_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\XyzType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class Lut16Type extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfInputChannels = $this->_io->readU1();
        $this->_m_numberOfOutputChannels = $this->_io->readU1();
        $this->_m_numberOfClutGridPoints = $this->_io->readU1();
        $this->_m_padding = $this->_io->ensureFixedContents("\x00");
        $this->_m_encodedEParameters = [];
        $n = 9;
        for ($i = 0; $i < $n; $i++) {
            $this->_m_encodedEParameters[] = $this->_io->readS4be();
        }
        $this->_m_numberOfInputTableEntries = $this->_io->readU4be();
        $this->_m_numberOfOutputTableEntries = $this->_io->readU4be();
        $this->_m_inputTables = $this->_io->readBytes(((2 * $this->numberOfInputChannels()) * $this->numberOfInputTableEntries()));
        $this->_m_clutValues = $this->_io->readBytes(((2 * ($this->numberOfClutGridPoints() ^ $this->numberOfInputChannels())) * $this->numberOfOutputChannels()));
        $this->_m_outputTables = $this->_io->readBytes(((2 * $this->numberOfOutputChannels()) * $this->numberOfOutputTableEntries()));
    }
    protected $_m_reserved;
    protected $_m_numberOfInputChannels;
    protected $_m_numberOfOutputChannels;
    protected $_m_numberOfClutGridPoints;
    protected $_m_padding;
    protected $_m_encodedEParameters;
    protected $_m_numberOfInputTableEntries;
    protected $_m_numberOfOutputTableEntries;
    protected $_m_inputTables;
    protected $_m_clutValues;
    protected $_m_outputTables;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfInputChannels() { return $this->_m_numberOfInputChannels; }
    public function numberOfOutputChannels() { return $this->_m_numberOfOutputChannels; }
    public function numberOfClutGridPoints() { return $this->_m_numberOfClutGridPoints; }
    public function padding() { return $this->_m_padding; }
    public function encodedEParameters() { return $this->_m_encodedEParameters; }
    public function numberOfInputTableEntries() { return $this->_m_numberOfInputTableEntries; }
    public function numberOfOutputTableEntries() { return $this->_m_numberOfOutputTableEntries; }
    public function inputTables() { return $this->_m_inputTables; }
    public function clutValues() { return $this->_m_clutValues; }
    public function outputTables() { return $this->_m_outputTables; }
}

namespace \Icc4\TagTable\TagDefinition;

class PerceptualRenderingIntentGamutTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::SIGNATURE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\SignatureType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class U16Fixed16ArrayType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_values = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_values[] = new \Icc4\U16Fixed16Number($this->_io, $this, $this->_root);
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_values;
    public function reserved() { return $this->_m_reserved; }
    public function values() { return $this->_m_values; }
}

namespace \Icc4\TagTable\TagDefinition;

class ColorantTableOutTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::COLORANT_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ColorantTableType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class MeasurementTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MEASUREMENT_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MeasurementType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ProfileSequenceTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::PROFILE_SEQUENCE_DESC_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ProfileSequenceDescType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class TechnologyTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::SIGNATURE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\SignatureType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class AToB0Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutAToBType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class DToB0Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class OutputResponseTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::RESPONSE_CURVE_SET_16_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ResponseCurveSet16Type($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class GreenMatrixColumnTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::XYZ_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\XyzType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ProfileDescriptionTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_LOCALIZED_UNICODE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class Preview1Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutBToAType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class RedTrcTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\CurveType($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::PARAMETRIC_CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ParametricCurveType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class BToD0Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class DToB1Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class BToA1Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutBToAType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ParametricCurveType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_functionType = $this->_io->readU2be();
        $this->_m_reserved2 = $this->_io->ensureFixedContents("\x00\x00");
        switch ($this->functionType()) {
            case \Icc4\TagTable\TagDefinition\ParametricCurveType\ParametricCurveTypeFunctions::Y_EQUALS_X_TO_POWER_OF_G:
                $this->_m_parameters = new \Icc4\TagTable\TagDefinition\ParametricCurveType\ParamsYEqualsXToPowerOfG($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\ParametricCurveType\ParametricCurveTypeFunctions::CIE_122_1996:
                $this->_m_parameters = new \Icc4\TagTable\TagDefinition\ParametricCurveType\ParamsCie1221996($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\ParametricCurveType\ParametricCurveTypeFunctions::IEC_61966_2_1:
                $this->_m_parameters = new \Icc4\TagTable\TagDefinition\ParametricCurveType\ParamsIec6196621($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\ParametricCurveType\ParametricCurveTypeFunctions::Y_EQUALS_OB_AX_PLUS_B_CB_TO_POWER_OF_G_PLUS_C:
                $this->_m_parameters = new \Icc4\TagTable\TagDefinition\ParametricCurveType\ParamsYEqualsObAxPlusBCbToPowerOfGPlusC($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\ParametricCurveType\ParametricCurveTypeFunctions::IEC_61966_3:
                $this->_m_parameters = new \Icc4\TagTable\TagDefinition\ParametricCurveType\ParamsIec619663($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_reserved;
    protected $_m_functionType;
    protected $_m_reserved2;
    protected $_m_parameters;
    public function reserved() { return $this->_m_reserved; }
    public function functionType() { return $this->_m_functionType; }
    public function reserved2() { return $this->_m_reserved2; }
    public function parameters() { return $this->_m_parameters; }
}

namespace \Icc4\TagTable\TagDefinition\ParametricCurveType;

class ParamsIec619663 extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ParametricCurveType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_g = $this->_io->readS4be();
        $this->_m_a = $this->_io->readS4be();
        $this->_m_b = $this->_io->readS4be();
        $this->_m_c = $this->_io->readS4be();
    }
    protected $_m_g;
    protected $_m_a;
    protected $_m_b;
    protected $_m_c;
    public function g() { return $this->_m_g; }
    public function a() { return $this->_m_a; }
    public function b() { return $this->_m_b; }
    public function c() { return $this->_m_c; }
}

namespace \Icc4\TagTable\TagDefinition\ParametricCurveType;

class ParamsIec6196621 extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ParametricCurveType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_g = $this->_io->readS4be();
        $this->_m_a = $this->_io->readS4be();
        $this->_m_b = $this->_io->readS4be();
        $this->_m_c = $this->_io->readS4be();
        $this->_m_d = $this->_io->readS4be();
    }
    protected $_m_g;
    protected $_m_a;
    protected $_m_b;
    protected $_m_c;
    protected $_m_d;
    public function g() { return $this->_m_g; }
    public function a() { return $this->_m_a; }
    public function b() { return $this->_m_b; }
    public function c() { return $this->_m_c; }
    public function d() { return $this->_m_d; }
}

namespace \Icc4\TagTable\TagDefinition\ParametricCurveType;

class ParamsYEqualsXToPowerOfG extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ParametricCurveType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_g = $this->_io->readS4be();
    }
    protected $_m_g;
    public function g() { return $this->_m_g; }
}

namespace \Icc4\TagTable\TagDefinition\ParametricCurveType;

class ParamsYEqualsObAxPlusBCbToPowerOfGPlusC extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ParametricCurveType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_g = $this->_io->readS4be();
        $this->_m_a = $this->_io->readS4be();
        $this->_m_b = $this->_io->readS4be();
        $this->_m_c = $this->_io->readS4be();
        $this->_m_d = $this->_io->readS4be();
        $this->_m_e = $this->_io->readS4be();
        $this->_m_f = $this->_io->readS4be();
    }
    protected $_m_g;
    protected $_m_a;
    protected $_m_b;
    protected $_m_c;
    protected $_m_d;
    protected $_m_e;
    protected $_m_f;
    public function g() { return $this->_m_g; }
    public function a() { return $this->_m_a; }
    public function b() { return $this->_m_b; }
    public function c() { return $this->_m_c; }
    public function d() { return $this->_m_d; }
    public function e() { return $this->_m_e; }
    public function f() { return $this->_m_f; }
}

namespace \Icc4\TagTable\TagDefinition\ParametricCurveType;

class ParamsCie1221996 extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ParametricCurveType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_g = $this->_io->readS4be();
        $this->_m_a = $this->_io->readS4be();
        $this->_m_b = $this->_io->readS4be();
    }
    protected $_m_g;
    protected $_m_a;
    protected $_m_b;
    public function g() { return $this->_m_g; }
    public function a() { return $this->_m_a; }
    public function b() { return $this->_m_b; }
}

namespace \Icc4\TagTable\TagDefinition\ParametricCurveType;

class ParametricCurveTypeFunctions {
    const Y_EQUALS_X_TO_POWER_OF_G = 0;
    const CIE_122_1996 = 1;
    const IEC_61966_3 = 2;
    const IEC_61966_2_1 = 3;
    const Y_EQUALS_OB_AX_PLUS_B_CB_TO_POWER_OF_G_PLUS_C = 4;
}

namespace \Icc4\TagTable\TagDefinition;

class ChromaticityTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::CHROMATICITY_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ChromaticityType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ChromaticAdaptationTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::S_15_FIXED_16_ARRAY_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\S15Fixed16ArrayType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class MeasurementType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\MeasurementTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_standardObserverEncoding = $this->_io->readU4be();
        $this->_m_nciexyzTristimulusValuesForMeasurementBacking = new \Icc4\XyzNumber($this->_io, $this, $this->_root);
        $this->_m_measurementGeometryEncoding = $this->_io->readU4be();
        $this->_m_measurementFlareEncoding = $this->_io->readU4be();
        $this->_m_standardIlluminantEncoding = new \Icc4\StandardIlluminantEncoding($this->_io, $this, $this->_root);
    }
    protected $_m_reserved;
    protected $_m_standardObserverEncoding;
    protected $_m_nciexyzTristimulusValuesForMeasurementBacking;
    protected $_m_measurementGeometryEncoding;
    protected $_m_measurementFlareEncoding;
    protected $_m_standardIlluminantEncoding;
    public function reserved() { return $this->_m_reserved; }
    public function standardObserverEncoding() { return $this->_m_standardObserverEncoding; }
    public function nciexyzTristimulusValuesForMeasurementBacking() { return $this->_m_nciexyzTristimulusValuesForMeasurementBacking; }
    public function measurementGeometryEncoding() { return $this->_m_measurementGeometryEncoding; }
    public function measurementFlareEncoding() { return $this->_m_measurementFlareEncoding; }
    public function standardIlluminantEncoding() { return $this->_m_standardIlluminantEncoding; }
}

namespace \Icc4\TagTable\TagDefinition\MeasurementType;

class StandardObserverEncodings {
    const UNKNOWN = 0;
    const CIE_1931_STANDARD_COLORIMETRIC_OBSERVER = 1;
    const CIE_1964_STANDARD_COLORIMETRIC_OBSERVER = 2;
}

namespace \Icc4\TagTable\TagDefinition\MeasurementType;

class MeasurementGeometryEncodings {
    const UNKNOWN = 0;
    const ZERO_DEGREES_TO_45_DEGREES_OR_45_DEGREES_TO_ZERO_DEGREES = 1;
    const ZERO_DEGREES_TO_D_DEGREES_OR_D_DEGREES_TO_ZERO_DEGREES = 2;
}

namespace \Icc4\TagTable\TagDefinition\MeasurementType;

class MeasurementFlareEncodings {
    const ZERO_PERCENT = 0;
    const ONE_HUNDRED_PERCENT = 65536;
}

namespace \Icc4\TagTable\TagDefinition;

class TextType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\CharTargetTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_value = \Kaitai\Struct\Stream::bytesToStr(\Kaitai\Struct\Stream::bytesTerminate($this->_io->readBytesFull(), 0, false), "ASCII");
    }
    protected $_m_reserved;
    protected $_m_value;
    public function reserved() { return $this->_m_reserved; }
    public function value() { return $this->_m_value; }
}

namespace \Icc4\TagTable\TagDefinition;

class ProfileSequenceIdentifierType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ProfileSequenceIdentifierTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfStructures = $this->_io->readU4be();
        $this->_m_positionsTable = [];
        $n = $this->numberOfStructures();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_positionsTable[] = new \Icc4\PositionNumber($this->_io, $this, $this->_root);
        }
        $this->_m_profileIdentifiers = [];
        $n = $this->numberOfStructures();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_profileIdentifiers[] = new \Icc4\TagTable\TagDefinition\ProfileSequenceIdentifierType\ProfileIdentifier($this->_io, $this, $this->_root);
        }
    }
    protected $_m_reserved;
    protected $_m_numberOfStructures;
    protected $_m_positionsTable;
    protected $_m_profileIdentifiers;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfStructures() { return $this->_m_numberOfStructures; }
    public function positionsTable() { return $this->_m_positionsTable; }
    public function profileIdentifiers() { return $this->_m_profileIdentifiers; }
}

namespace \Icc4\TagTable\TagDefinition\ProfileSequenceIdentifierType;

class ProfileIdentifier extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ProfileSequenceIdentifierType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_profileId = $this->_io->readBytes(16);
        $this->_m_profileDescription = new \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType($this->_io, $this, $this->_root);
    }
    protected $_m_profileId;
    protected $_m_profileDescription;
    public function profileId() { return $this->_m_profileId; }
    public function profileDescription() { return $this->_m_profileDescription; }
}

namespace \Icc4\TagTable\TagDefinition;

class ColorantTableType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_countOfColorants = $this->_io->readU4be();
        $this->_m_colorants = [];
        $n = $this->countOfColorants();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_colorants[] = new \Icc4\TagTable\TagDefinition\ColorantTableType\Colorant($this->_io, $this, $this->_root);
        }
    }
    protected $_m_reserved;
    protected $_m_countOfColorants;
    protected $_m_colorants;
    public function reserved() { return $this->_m_reserved; }
    public function countOfColorants() { return $this->_m_countOfColorants; }
    public function colorants() { return $this->_m_colorants; }
}

namespace \Icc4\TagTable\TagDefinition\ColorantTableType;

class Colorant extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ColorantTableType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_name = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytesTerm(0, false, true, true), "ASCII");
        $this->_m_padding = [];
        $n = (32 - strlen($this->name()));
        for ($i = 0; $i < $n; $i++) {
            $this->_m_padding = $this->_io->ensureFixedContents("\x00");
        }
        $this->_m_pcsValues = $this->_io->readBytes(6);
    }
    protected $_m_name;
    protected $_m_padding;
    protected $_m_pcsValues;
    public function name() { return $this->_m_name; }
    public function padding() { return $this->_m_padding; }
    public function pcsValues() { return $this->_m_pcsValues; }
}

namespace \Icc4\TagTable\TagDefinition;

class SignatureType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_signature = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes(4), "ASCII");
    }
    protected $_m_reserved;
    protected $_m_signature;
    public function reserved() { return $this->_m_reserved; }
    public function signature() { return $this->_m_signature; }
}

namespace \Icc4\TagTable\TagDefinition;

class CopyrightTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_LOCALIZED_UNICODE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class Preview0Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutAToBType($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutBToAType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class DateTimeType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\CalibrationDateTimeTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_dateAndTime = new \Icc4\DateTimeNumber($this->_io, $this, $this->_root);
    }
    protected $_m_reserved;
    protected $_m_dateAndTime;
    public function reserved() { return $this->_m_reserved; }
    public function dateAndTime() { return $this->_m_dateAndTime; }
}

namespace \Icc4\TagTable\TagDefinition;

class DToB3Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class Preview2Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutBToAType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class DeviceModelDescTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_LOCALIZED_UNICODE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class MultiProcessElementsType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfInputChannels = $this->_io->readU2be();
        $this->_m_numberOfOutputChannels = $this->_io->readU2be();
        $this->_m_numberOfProcessingElements = $this->_io->readU4be();
        $this->_m_processElementPositionsTable = [];
        $n = $this->numberOfProcessingElements();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_processElementPositionsTable[] = new \Icc4\PositionNumber($this->_io, $this, $this->_root);
        }
        $this->_m_data = $this->_io->readBytesFull();
    }
    protected $_m_reserved;
    protected $_m_numberOfInputChannels;
    protected $_m_numberOfOutputChannels;
    protected $_m_numberOfProcessingElements;
    protected $_m_processElementPositionsTable;
    protected $_m_data;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfInputChannels() { return $this->_m_numberOfInputChannels; }
    public function numberOfOutputChannels() { return $this->_m_numberOfOutputChannels; }
    public function numberOfProcessingElements() { return $this->_m_numberOfProcessingElements; }
    public function processElementPositionsTable() { return $this->_m_processElementPositionsTable; }
    public function data() { return $this->_m_data; }
}

namespace \Icc4\TagTable\TagDefinition;

class UInt16ArrayType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_values = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_values[] = $this->_io->readU2be();
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_values;
    public function reserved() { return $this->_m_reserved; }
    public function values() { return $this->_m_values; }
}

namespace \Icc4\TagTable\TagDefinition;

class ColorantOrderTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::COLORANT_ORDER_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ColorantOrderType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class DataType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_dataFlag = $this->_io->readU4be();
    }
    protected $_m_dataFlag;
    public function dataFlag() { return $this->_m_dataFlag; }
}

namespace \Icc4\TagTable\TagDefinition\DataType;

class DataTypes {
    const ASCII_DATA = 0;
    const BINARY_DATA = 1;
}

namespace \Icc4\TagTable\TagDefinition;

class ChromaticityType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ChromaticityTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfDeviceChannels = $this->_io->readU2be();
        $this->_m_colorantAndPhosphorEncoding = $this->_io->readU2be();
        $this->_m_ciexyCoordinatesPerChannel = [];
        $n = $this->numberOfDeviceChannels();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_ciexyCoordinatesPerChannel[] = new \Icc4\TagTable\TagDefinition\ChromaticityType\CiexyCoordinateValues($this->_io, $this, $this->_root);
        }
    }
    protected $_m_reserved;
    protected $_m_numberOfDeviceChannels;
    protected $_m_colorantAndPhosphorEncoding;
    protected $_m_ciexyCoordinatesPerChannel;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfDeviceChannels() { return $this->_m_numberOfDeviceChannels; }
    public function colorantAndPhosphorEncoding() { return $this->_m_colorantAndPhosphorEncoding; }
    public function ciexyCoordinatesPerChannel() { return $this->_m_ciexyCoordinatesPerChannel; }
}

namespace \Icc4\TagTable\TagDefinition\ChromaticityType;

class CiexyCoordinateValues extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ChromaticityType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_xCoordinate = $this->_io->readU2be();
        $this->_m_yCoordinate = $this->_io->readU2be();
    }
    protected $_m_xCoordinate;
    protected $_m_yCoordinate;
    public function xCoordinate() { return $this->_m_xCoordinate; }
    public function yCoordinate() { return $this->_m_yCoordinate; }
}

namespace \Icc4\TagTable\TagDefinition\ChromaticityType;

class ColorantAndPhosphorEncodings {
    const UNKNOWN = 0;
    const ITU_R_BT_709_2 = 1;
    const SMPTE_RP145 = 2;
    const EBU_TECH_3213_E = 3;
    const P22 = 4;
}

namespace \Icc4\TagTable\TagDefinition;

class LuminanceTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::XYZ_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\XyzType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class S15Fixed16ArrayType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ChromaticAdaptationTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_values = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_values[] = new \Icc4\S15Fixed16Number($this->_io, $this, $this->_root);
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_values;
    public function reserved() { return $this->_m_reserved; }
    public function values() { return $this->_m_values; }
}

namespace \Icc4\TagTable\TagDefinition;

class MultiLocalizedUnicodeType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfRecords = $this->_io->readU4be();
        $this->_m_recordSize = $this->_io->readU4be();
        $this->_m_records = [];
        $n = $this->numberOfRecords();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_records[] = new \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType\Record($this->_io, $this, $this->_root);
        }
    }
    protected $_m_reserved;
    protected $_m_numberOfRecords;
    protected $_m_recordSize;
    protected $_m_records;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfRecords() { return $this->_m_numberOfRecords; }
    public function recordSize() { return $this->_m_recordSize; }
    public function records() { return $this->_m_records; }
}

namespace \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType;

class Record extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_languageCode = $this->_io->readU2be();
        $this->_m_countryCode = $this->_io->readU2be();
        $this->_m_stringLength = $this->_io->readU4be();
        $this->_m_stringOffset = $this->_io->readU4be();
    }
    protected $_m_stringData;
    public function stringData() {
        if ($this->_m_stringData !== null)
            return $this->_m_stringData;
        $_pos = $this->_io->pos();
        $this->_io->seek($this->stringOffset());
        $this->_m_stringData = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes($this->stringLength()), "UTF-16BE");
        $this->_io->seek($_pos);
        return $this->_m_stringData;
    }
    protected $_m_languageCode;
    protected $_m_countryCode;
    protected $_m_stringLength;
    protected $_m_stringOffset;
    public function languageCode() { return $this->_m_languageCode; }
    public function countryCode() { return $this->_m_countryCode; }
    public function stringLength() { return $this->_m_stringLength; }
    public function stringOffset() { return $this->_m_stringOffset; }
}

namespace \Icc4\TagTable\TagDefinition;

class AToB2Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutAToBType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class AToB1Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutAToBType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ColorimetricIntentImageStateTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::SIGNATURE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\SignatureType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class CharTargetTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::TEXT_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\TextType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ColorantTableTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::COLORANT_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ColorantTableType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class CalibrationDateTimeTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::DATE_TIME_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\DateTimeType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class NamedColor2Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::NAMED_COLOR_2_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\NamedColor2Type($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ViewingCondDescTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_LOCALIZED_UNICODE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiLocalizedUnicodeType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class BToD3Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ProfileSequenceDescType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ProfileSequenceTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfDescriptionStructures = $this->_io->readU4be();
        $this->_m_profileDescriptions = [];
        $n = $this->numberOfDescriptionStructures();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_profileDescriptions[] = new \Icc4\TagTable\TagDefinition\ProfileSequenceDescType\ProfileDescription($this->_io, $this, $this->_root);
        }
    }
    protected $_m_reserved;
    protected $_m_numberOfDescriptionStructures;
    protected $_m_profileDescriptions;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfDescriptionStructures() { return $this->_m_numberOfDescriptionStructures; }
    public function profileDescriptions() { return $this->_m_profileDescriptions; }
}

namespace \Icc4\TagTable\TagDefinition\ProfileSequenceDescType;

class ProfileDescription extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ProfileSequenceDescType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_deviceManufacturer = new \Icc4\DeviceManufacturer($this->_io, $this, $this->_root);
        $this->_m_deviceModel = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes(4), "ASCII");
        $this->_m_deviceAttributes = new \Icc4\DeviceAttributes($this->_io, $this, $this->_root);
        $this->_m_deviceTechnology = new \Icc4\TagTable\TagDefinition\TechnologyTag($this->_io, $this, $this->_root);
        $this->_m_descriptionOfDeviceManufacturer = new \Icc4\TagTable\TagDefinition\DeviceMfgDescTag($this->_io, $this, $this->_root);
        $this->_m_descriptionOfDeviceModel = new \Icc4\TagTable\TagDefinition\DeviceModelDescTag($this->_io, $this, $this->_root);
    }
    protected $_m_deviceManufacturer;
    protected $_m_deviceModel;
    protected $_m_deviceAttributes;
    protected $_m_deviceTechnology;
    protected $_m_descriptionOfDeviceManufacturer;
    protected $_m_descriptionOfDeviceModel;
    public function deviceManufacturer() { return $this->_m_deviceManufacturer; }
    public function deviceModel() { return $this->_m_deviceModel; }
    public function deviceAttributes() { return $this->_m_deviceAttributes; }
    public function deviceTechnology() { return $this->_m_deviceTechnology; }
    public function descriptionOfDeviceManufacturer() { return $this->_m_descriptionOfDeviceManufacturer; }
    public function descriptionOfDeviceModel() { return $this->_m_descriptionOfDeviceModel; }
}

namespace \Icc4\TagTable\TagDefinition;

class ProfileSequenceIdentifierTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::PROFILE_SEQUENCE_IDENTIFIER_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ProfileSequenceIdentifierType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class BToD1Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ColorantOrderType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ColorantOrderTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_countOfColorants = $this->_io->readU4be();
        $this->_m_numbersOfColorantsInOrderOfPrinting = [];
        $n = $this->countOfColorants();
        for ($i = 0; $i < $n; $i++) {
            $this->_m_numbersOfColorantsInOrderOfPrinting[] = $this->_io->readU1();
        }
    }
    protected $_m_reserved;
    protected $_m_countOfColorants;
    protected $_m_numbersOfColorantsInOrderOfPrinting;
    public function reserved() { return $this->_m_reserved; }
    public function countOfColorants() { return $this->_m_countOfColorants; }
    public function numbersOfColorantsInOrderOfPrinting() { return $this->_m_numbersOfColorantsInOrderOfPrinting; }
}

namespace \Icc4\TagTable\TagDefinition;

class DToB2Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class GrayTrcTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\CurveType($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::PARAMETRIC_CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ParametricCurveType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class ViewingConditionsType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\ViewingConditionsTag $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_unNormalizedCiexyzValuesForIlluminant = new \Icc4\XyzNumber($this->_io, $this, $this->_root);
        $this->_m_unNormalizedCiexyzValuesForSurround = new \Icc4\XyzNumber($this->_io, $this, $this->_root);
        $this->_m_illuminantType = new \Icc4\StandardIlluminantEncoding($this->_io, $this, $this->_root);
    }
    protected $_m_reserved;
    protected $_m_unNormalizedCiexyzValuesForIlluminant;
    protected $_m_unNormalizedCiexyzValuesForSurround;
    protected $_m_illuminantType;
    public function reserved() { return $this->_m_reserved; }
    public function unNormalizedCiexyzValuesForIlluminant() { return $this->_m_unNormalizedCiexyzValuesForIlluminant; }
    public function unNormalizedCiexyzValuesForSurround() { return $this->_m_unNormalizedCiexyzValuesForSurround; }
    public function illuminantType() { return $this->_m_illuminantType; }
}

namespace \Icc4\TagTable\TagDefinition;

class LutBToAType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_numberOfInputChannels = $this->_io->readU1();
        $this->_m_numberOfOutputChannels = $this->_io->readU1();
        $this->_m_padding = $this->_io->ensureFixedContents("\x00\x00");
        $this->_m_offsetToFirstBCurve = $this->_io->readU4be();
        $this->_m_offsetToMatrix = $this->_io->readU4be();
        $this->_m_offsetToFirstMCurve = $this->_io->readU4be();
        $this->_m_offsetToClut = $this->_io->readU4be();
        $this->_m_offsetToFirstACurve = $this->_io->readU4be();
        $this->_m_data = $this->_io->readBytesFull();
    }
    protected $_m_reserved;
    protected $_m_numberOfInputChannels;
    protected $_m_numberOfOutputChannels;
    protected $_m_padding;
    protected $_m_offsetToFirstBCurve;
    protected $_m_offsetToMatrix;
    protected $_m_offsetToFirstMCurve;
    protected $_m_offsetToClut;
    protected $_m_offsetToFirstACurve;
    protected $_m_data;
    public function reserved() { return $this->_m_reserved; }
    public function numberOfInputChannels() { return $this->_m_numberOfInputChannels; }
    public function numberOfOutputChannels() { return $this->_m_numberOfOutputChannels; }
    public function padding() { return $this->_m_padding; }
    public function offsetToFirstBCurve() { return $this->_m_offsetToFirstBCurve; }
    public function offsetToMatrix() { return $this->_m_offsetToMatrix; }
    public function offsetToFirstMCurve() { return $this->_m_offsetToFirstMCurve; }
    public function offsetToClut() { return $this->_m_offsetToClut; }
    public function offsetToFirstACurve() { return $this->_m_offsetToFirstACurve; }
    public function data() { return $this->_m_data; }
}

namespace \Icc4\TagTable\TagDefinition;

class GreenTrcTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\CurveType($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::PARAMETRIC_CURVE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\ParametricCurveType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class UInt32ArrayType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_values = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_values[] = $this->_io->readU4be();
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_values;
    public function reserved() { return $this->_m_reserved; }
    public function values() { return $this->_m_values; }
}

namespace \Icc4\TagTable\TagDefinition;

class GamutTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut8Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\Lut16Type($this->_io, $this, $this->_root);
                break;
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\LutBToAType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class UInt8ArrayType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_values = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_values[] = $this->_io->readU1();
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_values;
    public function reserved() { return $this->_m_reserved; }
    public function values() { return $this->_m_values; }
}

namespace \Icc4\TagTable\TagDefinition;

class RedMatrixColumnTag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::XYZ_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\XyzType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class UInt64ArrayType extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->ensureFixedContents("\x00\x00\x00\x00");
        $this->_m_values = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_values[] = $this->_io->readU8be();
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_values;
    public function reserved() { return $this->_m_reserved; }
    public function values() { return $this->_m_values; }
}

namespace \Icc4\TagTable\TagDefinition;

class BToD2Tag extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tagType = $this->_io->readU4be();
        switch ($this->tagType()) {
            case \Icc4\TagTable\TagDefinition\TagTypeSignatures::MULTI_PROCESS_ELEMENTS_TYPE:
                $this->_m_tagData = new \Icc4\TagTable\TagDefinition\MultiProcessElementsType($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_tagType;
    protected $_m_tagData;
    public function tagType() { return $this->_m_tagType; }
    public function tagData() { return $this->_m_tagData; }
}

namespace \Icc4\TagTable\TagDefinition;

class TagSignatures {
    const A_TO_B_0 = 1093812784;
    const A_TO_B_1 = 1093812785;
    const A_TO_B_2 = 1093812786;
    const B_TO_A_0 = 1110589744;
    const B_TO_A_1 = 1110589745;
    const B_TO_A_2 = 1110589746;
    const B_TO_D_0 = 1110590512;
    const B_TO_D_1 = 1110590513;
    const B_TO_D_2 = 1110590514;
    const B_TO_D_3 = 1110590515;
    const D_TO_B_0 = 1144144432;
    const D_TO_B_1 = 1144144433;
    const D_TO_B_2 = 1144144434;
    const D_TO_B_3 = 1144144435;
    const BLUE_TRC = 1649693251;
    const BLUE_MATRIX_COLUMN = 1649957210;
    const CALIBRATION_DATE_TIME = 1667329140;
    const CHROMATIC_ADAPTATION = 1667785060;
    const CHROMATICITY = 1667789421;
    const COLORIMETRIC_INTENT_IMAGE_STATE = 1667852659;
    const COLORANT_TABLE_OUT = 1668050804;
    const COLORANT_ORDER = 1668051567;
    const COLORANT_TABLE = 1668051572;
    const COPYRIGHT = 1668313716;
    const PROFILE_DESCRIPTION = 1684370275;
    const DEVICE_MODEL_DESC = 1684890724;
    const DEVICE_MFG_DESC = 1684893284;
    const GREEN_TRC = 1733579331;
    const GREEN_MATRIX_COLUMN = 1733843290;
    const GAMUT = 1734438260;
    const GRAY_TRC = 1800688195;
    const LUMINANCE = 1819635049;
    const MEASUREMENT = 1835360627;
    const NAMED_COLOR_2 = 1852009522;
    const PREVIEW_0 = 1886545200;
    const PREVIEW_1 = 1886545201;
    const PREVIEW_2 = 1886545202;
    const PROFILE_SEQUENCE = 1886610801;
    const PROFILE_SEQUENCE_IDENTIFIER = 1886611812;
    const RED_TRC = 1918128707;
    const RED_MATRIX_COLUMN = 1918392666;
    const OUTPUT_RESPONSE = 1919251312;
    const PERCEPTUAL_RENDERING_INTENT_GAMUT = 1919510320;
    const SATURATION_RENDERING_INTENT_GAMUT = 1919510322;
    const CHAR_TARGET = 1952543335;
    const TECHNOLOGY = 1952801640;
    const VIEWING_CONDITIONS = 1986618743;
    const VIEWING_COND_DESC = 1987405156;
    const MEDIA_WHITE_POINT = 2004119668;
}

namespace \Icc4\TagTable\TagDefinition;

class TagTypeSignatures {
    const XYZ_TYPE = 1482250784;
    const COLORANT_TABLE_TYPE = 1668051572;
    const CURVE_TYPE = 1668641398;
    const DATA_TYPE = 1684108385;
    const DATE_TIME_TYPE = 1685350765;
    const MULTI_FUNCTION_A_TO_B_TABLE_TYPE = 1832993312;
    const MULTI_FUNCTION_B_TO_A_TABLE_TYPE = 1833058592;
    const MEASUREMENT_TYPE = 1835360627;
    const MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE = 1835430961;
    const MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE = 1835430962;
    const MULTI_LOCALIZED_UNICODE_TYPE = 1835824483;
    const MULTI_PROCESS_ELEMENTS_TYPE = 1836082548;
    const NAMED_COLOR_2_TYPE = 1852009522;
    const PARAMETRIC_CURVE_TYPE = 1885434465;
    const PROFILE_SEQUENCE_DESC_TYPE = 1886610801;
    const PROFILE_SEQUENCE_IDENTIFIER_TYPE = 1886611812;
    const RESPONSE_CURVE_SET_16_TYPE = 1919120178;
    const S_15_FIXED_16_ARRAY_TYPE = 1936077618;
    const SIGNATURE_TYPE = 1936287520;
    const TEXT_TYPE = 1952807028;
    const U_16_FIXED_16_ARRAY_TYPE = 1969632050;
    const U_INT_8_ARRAY_TYPE = 1969827896;
    const U_INT_16_ARRAY_TYPE = 1969828150;
    const U_INT_32_ARRAY_TYPE = 1969828658;
    const U_INT_64_ARRAY_TYPE = 1969829428;
    const VIEWING_CONDITIONS_TYPE = 1986618743;
}

namespace \Icc4\TagTable\TagDefinition;

class MultiProcessElementsTypes {
    const BACS_ELEMENT_TYPE = 1648444243;
    const CLUT_ELEMENT_TYPE = 1668052340;
    const ONE_DIMENSIONAL_CURVES_TYPE = 1668641382;
    const EACS_ELEMENT_TYPE = 1698775891;
    const MATRIX_ELEMENT_TYPE = 1835103334;
    const CURVE_SET_ELEMENT_TABLE_TYPE = 1835428980;
    const FORMULA_CURVE_SEGMENTS_TYPE = 1885434470;
    const SAMPLED_CURVE_SEGMENT_TYPE = 1935764838;
}

namespace \Icc4;

class DeviceAttributes extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reflectiveOrTransparency = $this->_io->readBitsInt(1);
        $this->_m_glossyOrMatte = $this->_io->readBitsInt(1);
        $this->_m_positiveOrNegativeMediaPolarity = $this->_io->readBitsInt(1);
        $this->_m_colourOrBlackAndWhiteMedia = $this->_io->readBitsInt(1);
        $this->_m_reserved = $this->_io->readBitsInt(28);
        $this->_m_vendorSpecific = $this->_io->readBitsInt(32);
    }
    protected $_m_reflectiveOrTransparency;
    protected $_m_glossyOrMatte;
    protected $_m_positiveOrNegativeMediaPolarity;
    protected $_m_colourOrBlackAndWhiteMedia;
    protected $_m_reserved;
    protected $_m_vendorSpecific;
    public function reflectiveOrTransparency() { return $this->_m_reflectiveOrTransparency; }
    public function glossyOrMatte() { return $this->_m_glossyOrMatte; }
    public function positiveOrNegativeMediaPolarity() { return $this->_m_positiveOrNegativeMediaPolarity; }
    public function colourOrBlackAndWhiteMedia() { return $this->_m_colourOrBlackAndWhiteMedia; }
    public function reserved() { return $this->_m_reserved; }
    public function vendorSpecific() { return $this->_m_vendorSpecific; }
}

namespace \Icc4\DeviceAttributes;

class DeviceAttributesReflectiveOrTransparency {
    const REFLECTIVE = 0;
    const TRANSPARENCY = 1;
}

namespace \Icc4\DeviceAttributes;

class DeviceAttributesGlossyOrMatte {
    const GLOSSY = 0;
    const MATTE = 1;
}

namespace \Icc4\DeviceAttributes;

class DeviceAttributesPositiveOrNegativeMediaPolarity {
    const POSITIVE_MEDIA_POLARITY = 0;
    const NEGATIVE_MEDIA_POLARITY = 1;
}

namespace \Icc4\DeviceAttributes;

class DeviceAttributesColourOrBlackAndWhiteMedia {
    const COLOUR_MEDIA = 0;
    const BLACK_AND_WHITE_MEDIA = 1;
}

namespace \Icc4;

class DeviceManufacturer extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_deviceManufacturer = $this->_io->readU4be();
    }
    protected $_m_deviceManufacturer;
    public function deviceManufacturer() { return $this->_m_deviceManufacturer; }
}

namespace \Icc4\DeviceManufacturer;

class DeviceManufacturers {
    const ERDT_SYSTEMS_GMBH_AND_CO_KG = 878981744;
    const AAMAZING_TECHNOLOGIES_INC = 1094798657;
    const ACER_PERIPHERALS = 1094927698;
    const ACOLYTE_COLOR_RESEARCH = 1094929492;
    const ACTIX_SYTEMS_INC = 1094931529;
    const ADARA_TECHNOLOGY_INC = 1094992210;
    const ADOBE_SYSTEMS_INCORPORATED = 1094992453;
    const ADI_SYSTEMS_INC = 1094994208;
    const AGFA_GRAPHICS_NV = 1095190081;
    const ALPS_ELECTRIC_USA_INC = 1095519556;
    const ALPS_ELECTRIC_USA_INC_2 = 1095520339;
    const ALWAN_COLOR_EXPERTISE = 1095522126;
    const AMIABLE_TECHNOLOGIES_INC = 1095586889;
    const AOC_INTERNATIONAL_USA_LTD = 1095713568;
    const APAGO = 1095778631;
    const APPLE_COMPUTER_INC = 1095782476;
    const AST = 1095980064;
    const ATANDT_COMPUTER_SYSTEMS = 1096033876;
    const BARBIERI_ELECTRONIC = 1111573836;
    const BARCO_NV = 1112687439;
    const BREAKPOINT_PTY_LIMITED = 1112689488;
    const BROTHER_INDUSTRIES_LTD = 1112690516;
    const BULL = 1112886348;
    const BUS_COMPUTER_SYSTEMS = 1112888096;
    const C_ITOH = 1127041364;
    const INTEL_CORPORATION = 1128353106;
    const CANON_INC_CANON_DEVELOPMENT_AMERICAS_INC = 1128353359;
    const CARROLL_TOUCH = 1128354386;
    const CASIO_COMPUTER_CO_LTD = 1128354633;
    const COLORBUS_PL = 1128420691;
    const CROSSFIELD = 1128614944;
    const CROSSFIELD_2 = 1128615032;
    const CGS_PUBLISHING_TECHNOLOGIES_INTERNATIONAL_GMBH = 1128747808;
    const ROCHESTER_ROBOTICS = 1128811808;
    const COLOUR_IMAGING_GROUP_LONDON = 1128875852;
    const CITIZEN = 1128879177;
    const CANDELA_LTD = 1129066544;
    const COLOR_IQ = 1129072977;
    const CHROMACO_INC = 1129136975;
    const CHROMIX = 1129146712;
    const COLORGRAPHIC_COMMUNICATIONS_CORPORATION = 1129270351;
    const COMPAQ_COMPUTER_CORPORATION = 1129270608;
    const COMPEQ_USA_FOCUS_TECHNOLOGY = 1129270640;
    const CONRAC_DISPLAY_PRODUCTS = 1129270866;
    const CORDATA_TECHNOLOGIES_INC = 1129271876;
    const COMPAQ_COMPUTER_CORPORATION_2 = 1129337120;
    const COLORPRO = 1129337423;
    const CORNERSTONE = 1129467424;
    const CTX_INTERNATIONAL_INC = 1129601056;
    const COLORVISION = 1129728339;
    const FUJITSU_LABORATORIES_LTD = 1129792288;
    const DARIUS_TECHNOLOGY_LTD = 1145131593;
    const DATAPRODUCTS = 1145132097;
    const DRY_CREEK_PHOTO = 1145262112;
    const DIGITAL_CONTENTS_RESOURCE_CENTER_CHUNG_ANG_UNIVERSITY = 1145262659;
    const DELL_COMPUTER_CORPORATION = 1145392204;
    const DAINIPPON_INK_AND_CHEMICALS = 1145652000;
    const DICONIX = 1145652047;
    const DIGITAL = 1145653065;
    const DIGITAL_LIGHT_AND_COLOR = 1145841219;
    const DOPPELGANGER_LLC = 1146113095;
    const DAINIPPON_SCREEN = 1146298400;
    const DOOSOL = 1146310476;
    const DUPONT = 1146441806;
    const EPSON = 1162892111;
    const ESKO_GRAPHICS = 1163086671;
    const ELECTRONICS_AND_TELECOMMUNICATIONS_RESEARCH_INSTITUTE = 1163153993;
    const EVEREX_SYSTEMS_INC = 1163281746;
    const EXACTCODE_GMBH = 1163411779;
    const EIZO_NANAO_CORPORATION = 1164540527;
    const FALCO_DATA_PRODUCTS_INC = 1178684483;
    const FUJI_PHOTO_FILM_COLTD = 1179000864;
    const FUJIFILM_ELECTRONIC_IMAGING_LTD = 1179010377;
    const FNORD_SOFTWARE = 1179537988;
    const FORA_INC = 1179603521;
    const FOREFRONT_TECHNOLOGY_CORPORATION = 1179603525;
    const FUJITSU = 1179658794;
    const WAYTECH_DEVELOPMENT_INC = 1179664672;
    const FUJITSU_2 = 1179994697;
    const FUJI_XEROX_CO_LTD = 1180180512;
    const GCC_TECHNOLOGIES_INC = 1195590432;
    const GLOBAL_GRAPHICS_SOFTWARE_LIMITED = 1195856716;
    const GRETAGMACBETH = 1196245536;
    const GMG_GMBH_AND_CO_KG = 1196246816;
    const GOLDSTAR_TECHNOLOGY_INC = 1196379204;
    const GIANTPRINT_PTY_LTD = 1196446292;
    const GRETAGMACBETH_2 = 1196707138;
    const WAYTECH_DEVELOPMENT_INC_2 = 1196835616;
    const SONY_CORPORATION = 1196896843;
    const HCI = 1212369184;
    const HEIDELBERGER_DRUCKMASCHINEN_AG = 1212435744;
    const HERMES = 1212502605;
    const HITACHI_AMERICA_LTD = 1212765249;
    const HEWLETT_PACKARD = 1213210656;
    const HITACHI_LTD = 1213481760;
    const HITI_DIGITAL_INC = 1214862441;
    const IBM_CORPORATION = 1229081888;
    const SCITEX_CORPORATION_LTD = 1229213268;
    const HEWLETT_PACKARD_2 = 1229275936;
    const IIYAMA_NORTH_AMERICA_INC = 1229543745;
    const IKEGAMI_ELECTRONICS_INC = 1229669703;
    const IMAGE_SYSTEMS_CORPORATION = 1229799751;
    const INGRAM_MICRO_INC = 1229801760;
    const INTEL_CORPORATION_2 = 1229870147;
    const INTL = 1229870156;
    const INTRA_ELECTRONICS_USA_INC = 1229870162;
    const IOCOMM_INTERNATIONAL_TECHNOLOGY_CORPORATION = 1229931343;
    const INFOPRINT_SOLUTIONS_COMPANY = 1230000928;
    const SCITEX_CORPORATION_LTD_3 = 1230129491;
    const ICHIKAWA_SOFT_LABORATORY = 1230195744;
    const ITNL = 1230261836;
    const IVM = 1230392608;
    const IWATSU_ELECTRIC_CO_LTD = 1230455124;
    const SCITEX_CORPORATION_LTD_2 = 1231318644;
    const INCA_DIGITAL_PRINTERS_LTD = 1231971169;
    const SCITEX_CORPORATION_LTD_4 = 1232234867;
    const JETSOFT_DEVELOPMENT = 1246971476;
    const JVC_INFORMATION_PRODUCTS_CO = 1247167264;
    const SCITEX_CORPORATION_LTD_6 = 1262572116;
    const KFC_COMPUTEK_COMPONENTS_CORPORATION = 1262895904;
    const KLH_COMPUTERS = 1263290400;
    const KONICA_MINOLTA_HOLDINGS_INC = 1263355972;
    const KONICA_CORPORATION = 1263420225;
    const KODAK = 1263486017;
    const KYOCERA = 1264144195;
    const SCITEX_CORPORATION_LTD_7 = 1264677492;
    const LEICA_CAMERA_AG = 1279476039;
    const LEEDS_COLOUR = 1279476548;
    const LEFT_DAKOTA = 1279541579;
    const LEADING_TECHNOLOGY_INC = 1279607108;
    const LEXMARK_INTERNATIONAL_INC = 1279613005;
    const LINK_COMPUTER_INC = 1279872587;
    const LINOTRONIC = 1279872591;
    const LITE_ON_INC = 1279874117;
    const MAG_COMPUTRONIC_USA_INC = 1296123715;
    const MAG_INNOVISION_INC = 1296123721;
    const MANNESMANN = 1296125518;
    const MICRON_TECHNOLOGY_INC = 1296646990;
    const MICROTEK = 1296646994;
    const MICROVITEC_INC = 1296646998;
    const MINOLTA = 1296649807;
    const MITSUBISHI_ELECTRONICS_AMERICA_INC = 1296651347;
    const MITSUBA_CORPORATION = 1296651379;
    const MINOLTA_2 = 1296976980;
    const MODGRAPH_INC = 1297040455;
    const MONITRONIX_INC = 1297043017;
    const MONACO_SYSTEMS_INC = 1297043027;
    const MORSE_TECHNOLOGY_INC = 1297044051;
    const MOTIVE_SYSTEMS = 1297044553;
    const MICROSOFT_CORPORATION = 1297303124;
    const MUTOH_INDUSTRIES_LTD = 1297437775;
    const MITSUBISHI_ELECTRIC_CORPORATION_KYOTO_WORKS = 1298756723;
    const NANAO_USA_CORPORATION = 1312902721;
    const NEC_CORPORATION = 1313162016;
    const NEXPRESS_SOLUTIONS_LLC = 1313167440;
    const NISSEI_SANGYO_AMERICA_LTD = 1313428307;
    const NIKON_CORPORATION = 1313558350;
    const OCE_TECHNOLOGIES_BV = 1329808672;
    const OCECOLOR = 1329808707;
    const OKI = 1330333984;
    const OKIDATA = 1330334020;
    const OKIDATA_2 = 1330334032;
    const OLIVETTI = 1330399574;
    const OLYMPUS_OPTICAL_CO_LTD = 1330403661;
    const ONYX_GRAPHICS = 1330534744;
    const OPTIQUEST = 1330664521;
    const PACKARD_BELL = 1346454347;
    const MATSUSHITA_ELECTRIC_INDUSTRIAL_CO_LTD = 1346457153;
    const PANTONE_INC = 1346457172;
    const PACKARD_BELL_2 = 1346522656;
    const PFU_LIMITED = 1346786592;
    const PHILIPS_CONSUMER_ELECTRONICS_CO = 1346914636;
    const HOYA_CORPORATION_PENTAX_IMAGING_SYSTEMS_DIVISION = 1347310680;
    const PHASE_ONE_A_S = 1347382885;
    const PREMIER_COMPUTER_INNOVATIONS = 1347568973;
    const PRINCETON_GRAPHIC_SYSTEMS = 1347569998;
    const PRINCETON_PUBLISHING_LABS = 1347570000;
    const QLUX = 1363957080;
    const QMS_INC = 1364022048;
    const QPCARD_AB = 1364214596;
    const QUADLASER = 1364541764;
    const QUME_CORPORATION = 1364544837;
    const RADIUS_INC = 1380009033;
    const INTEGRATED_COLOR_SOLUTIONS_INC_2 = 1380205688;
    const ROLAND_DG_CORPORATION = 1380206368;
    const REDMS_GROUP_INC = 1380271181;
    const RELISYS = 1380273225;
    const ROLF_GIERLING_MULTITOOLS = 1380404563;
    const RICOH_CORPORATION = 1380533071;
    const EDMUND_RONALD = 1380863044;
    const ROYAL = 1380931905;
    const RICOH_PRINTING_SYSTEMSLTD = 1380991776;
    const ROYAL_INFORMATION_ELECTRONICS_CO_LTD = 1381256224;
    const SAMPO_CORPORATION_OF_AMERICA = 1396788560;
    const SAMSUNG_INC = 1396788563;
    const JAIME_SANTANA_POMARES = 1396788820;
    const SCITEX_CORPORATION_LTD_9 = 1396918612;
    const DAINIPPON_SCREEN_3 = 1396920910;
    const SCITEX_CORPORATION_LTD_12 = 1396985888;
    const SAMSUNG_ELECTRONICS_COLTD = 1397048096;
    const SEIKO_INSTRUMENTS_USA_INC = 1397049675;
    const SEIKOSHA = 1397049707;
    const SCANGUYCOM = 1397183833;
    const SHARP_LABORATORIES = 1397244242;
    const INTERNATIONAL_COLOR_CONSORTIUM = 1397310275;
    const SONY_CORPORATION_2 = 1397706329;
    const SPECTRACAL = 1397769036;
    const STAR = 1398030674;
    const SAMPO_TECHNOLOGY_CORPORATION = 1398031136;
    const SCITEX_CORPORATION_LTD_10 = 1399023988;
    const SCITEX_CORPORATION_LTD_13 = 1399091232;
    const SONY_CORPORATION_3 = 1399811705;
    const TALON_TECHNOLOGY_CORPORATION = 1413565519;
    const TANDY = 1413566020;
    const TATUNG_CO_OF_AMERICA_INC = 1413567573;
    const TAXAN_AMERICA_INC = 1413568577;
    const TOKYO_DENSHI_SEKEI_KK = 1413763872;
    const TECO_INFORMATION_SYSTEMS_INC = 1413825359;
    const TEGRA = 1413826386;
    const TEKTRONIX_INC = 1413827412;
    const TEXAS_INSTRUMENTS = 1414078496;
    const TYPEMAKER_LTD = 1414351698;
    const TOSHIBA_CORP = 1414484802;
    const TOSHIBA_INC = 1414484808;
    const TOTOKU_ELECTRIC_CO_LTD = 1414485067;
    const TRIUMPH = 1414678869;
    const TOSHIBA_TEC_CORPORATION = 1414742612;
    const TTX_COMPUTER_PRODUCTS_INC = 1414813728;
    const TVM_PROFESSIONAL_MONITOR_CORPORATION = 1414941984;
    const TW_CASPER_CORPORATION = 1414996000;
    const ULEAD_SYSTEMS = 1431065432;
    const UNISYS = 1431193939;
    const UTZ_FEHLAU_AND_SOHN = 1431591494;
    const VARITYPER = 1447121481;
    const VIEWSONIC = 1447642455;
    const VISUAL_COMMUNICATION = 1447646028;
    const WANG = 1463897671;
    const WILBUR_IMAGING = 1464615506;
    const WARE_TO_GO = 1465141042;
    const WYSE_TECHNOLOGY = 1465471813;
    const XEROX_CORPORATION = 1480938072;
    const X_RITE = 1481787732;
    const LAVANYAS_TEST_COMPANY = 1513173555;
    const ZORAN_CORPORATION = 1515340110;
    const ZEBRA_TECHNOLOGIES_INC = 1516593778;
    const BASICCOLOR_GMBH = 1648968515;
    const BERGDESIGN_INCORPORATED = 1650815591;
    const INTEGRATED_COLOR_SOLUTIONS_INC = 1667594596;
    const MACDERMID_COLORSPAN_INC = 1668051824;
    const DAINIPPON_SCREEN_2 = 1685266464;
    const DUPONT_2 = 1685418094;
    const FUJIFILM_ELECTRONIC_IMAGING_LTD_2 = 1717986665;
    const FLUXDATA_CORPORATION = 1718383992;
    const SCITEX_CORPORATION_LTD_5 = 1769105779;
    const SCITEX_CORPORATION_LTD_8 = 1801548404;
    const ERDT_SYSTEMS_GMBH_AND_CO_KG_2 = 1868706916;
    const MEDIGRAPH_GMBH = 1868720483;
    const QUBYX_SARL = 1903518329;
    const SCITEX_CORPORATION_LTD_11 = 1935894900;
    const DAINIPPON_SCREEN_4 = 1935897198;
    const SCITEX_CORPORATION_LTD_14 = 1935962144;
    const SIWI_GRAFIKA_CORPORATION = 1936291689;
    const YXYMASTER_GMBH = 2037938541;
}

namespace \Icc4;

class S15Fixed16Number extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Icc4\TagTable\TagDefinition\S15Fixed16ArrayType $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_number = $this->_io->readBytes(4);
    }
    protected $_m_number;
    public function number() { return $this->_m_number; }
}

namespace \Icc4;

class PositionNumber extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Icc4 $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_offsetToDataElement = $this->_io->readU4be();
        $this->_m_sizeOfDataElement = $this->_io->readU4be();
    }
    protected $_m_offsetToDataElement;
    protected $_m_sizeOfDataElement;
    public function offsetToDataElement() { return $this->_m_offsetToDataElement; }
    public function sizeOfDataElement() { return $this->_m_sizeOfDataElement; }
}
