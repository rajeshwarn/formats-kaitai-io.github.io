<?php
// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

class Zip extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_sections = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_sections[] = new \Zip\PkSection($this->_io, $this, $this->_root);
            $i++;
        }
    }
    protected $_m_sections;
    public function sections() { return $this->_m_sections; }
}

namespace \Zip;

class LocalFile extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\PkSection $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_header = new \Zip\LocalFileHeader($this->_io, $this, $this->_root);
        $this->_m_body = $this->_io->readBytes($this->header()->compressedSize());
    }
    protected $_m_header;
    protected $_m_body;
    public function header() { return $this->_m_header; }
    public function body() { return $this->_m_body; }
}

namespace \Zip;

class ExtraField extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\Extras $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_code = $this->_io->readU2le();
        $this->_m_size = $this->_io->readU2le();
        switch ($this->code()) {
            case \Zip\ExtraCodes::NTFS:
                $this->_m__raw_body = $this->_io->readBytes($this->size());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_body);
                $this->_m_body = new \Zip\ExtraField\Ntfs($io, $this, $this->_root);
                break;
            case \Zip\ExtraCodes::EXTENDED_TIMESTAMP:
                $this->_m__raw_body = $this->_io->readBytes($this->size());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_body);
                $this->_m_body = new \Zip\ExtraField\ExtendedTimestamp($io, $this, $this->_root);
                break;
            case \Zip\ExtraCodes::INFOZIP_UNIX_VAR_SIZE:
                $this->_m__raw_body = $this->_io->readBytes($this->size());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_body);
                $this->_m_body = new \Zip\ExtraField\InfozipUnixVarSize($io, $this, $this->_root);
                break;
            default:
                $this->_m_body = $this->_io->readBytes($this->size());
                break;
        }
    }
    protected $_m_code;
    protected $_m_size;
    protected $_m_body;
    protected $_m__raw_body;
    public function code() { return $this->_m_code; }
    public function size() { return $this->_m_size; }
    public function body() { return $this->_m_body; }
    public function _raw_body() { return $this->_m__raw_body; }
}

namespace \Zip\ExtraField;

class Ntfs extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\ExtraField $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_reserved = $this->_io->readU4le();
        $this->_m_attributes = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_attributes[] = new \Zip\ExtraField\Ntfs\Attribute($this->_io, $this, $this->_root);
            $i++;
        }
    }
    protected $_m_reserved;
    protected $_m_attributes;
    public function reserved() { return $this->_m_reserved; }
    public function attributes() { return $this->_m_attributes; }
}

namespace \Zip\ExtraField\Ntfs;

class Attribute extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\ExtraField\Ntfs $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_tag = $this->_io->readU2le();
        $this->_m_size = $this->_io->readU2le();
        switch ($this->tag()) {
            case 1:
                $this->_m__raw_body = $this->_io->readBytes($this->size());
                $io = new \Kaitai\Struct\Stream($this->_m__raw_body);
                $this->_m_body = new \Zip\ExtraField\Ntfs\Attribute1($io, $this, $this->_root);
                break;
            default:
                $this->_m_body = $this->_io->readBytes($this->size());
                break;
        }
    }
    protected $_m_tag;
    protected $_m_size;
    protected $_m_body;
    protected $_m__raw_body;
    public function tag() { return $this->_m_tag; }
    public function size() { return $this->_m_size; }
    public function body() { return $this->_m_body; }
    public function _raw_body() { return $this->_m__raw_body; }
}

namespace \Zip\ExtraField\Ntfs;

class Attribute1 extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\ExtraField\Ntfs\Attribute $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_lastModTime = $this->_io->readU8le();
        $this->_m_lastAccessTime = $this->_io->readU8le();
        $this->_m_creationTime = $this->_io->readU8le();
    }
    protected $_m_lastModTime;
    protected $_m_lastAccessTime;
    protected $_m_creationTime;
    public function lastModTime() { return $this->_m_lastModTime; }
    public function lastAccessTime() { return $this->_m_lastAccessTime; }
    public function creationTime() { return $this->_m_creationTime; }
}

namespace \Zip\ExtraField;

class ExtendedTimestamp extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\ExtraField $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_flags = $this->_io->readU1();
        $this->_m_modTime = $this->_io->readU4le();
        if (!($this->_io()->isEof())) {
            $this->_m_accessTime = $this->_io->readU4le();
        }
        if (!($this->_io()->isEof())) {
            $this->_m_createTime = $this->_io->readU4le();
        }
    }
    protected $_m_flags;
    protected $_m_modTime;
    protected $_m_accessTime;
    protected $_m_createTime;
    public function flags() { return $this->_m_flags; }
    public function modTime() { return $this->_m_modTime; }
    public function accessTime() { return $this->_m_accessTime; }
    public function createTime() { return $this->_m_createTime; }
}

namespace \Zip\ExtraField;

class InfozipUnixVarSize extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\ExtraField $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_version = $this->_io->readU1();
        $this->_m_uidSize = $this->_io->readU1();
        $this->_m_uid = $this->_io->readBytes($this->uidSize());
        $this->_m_gidSize = $this->_io->readU1();
        $this->_m_gid = $this->_io->readBytes($this->gidSize());
    }
    protected $_m_version;
    protected $_m_uidSize;
    protected $_m_uid;
    protected $_m_gidSize;
    protected $_m_gid;

    /**
     * Version of this extra field, currently 1
     */
    public function version() { return $this->_m_version; }

    /**
     * Size of UID field
     */
    public function uidSize() { return $this->_m_uidSize; }

    /**
     * UID (User ID) for a file
     */
    public function uid() { return $this->_m_uid; }

    /**
     * Size of GID field
     */
    public function gidSize() { return $this->_m_gidSize; }

    /**
     * GID (Group ID) for a file
     */
    public function gid() { return $this->_m_gid; }
}

namespace \Zip;

class CentralDirEntry extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\PkSection $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_versionMadeBy = $this->_io->readU2le();
        $this->_m_versionNeededToExtract = $this->_io->readU2le();
        $this->_m_flags = $this->_io->readU2le();
        $this->_m_compressionMethod = $this->_io->readU2le();
        $this->_m_lastModFileTime = $this->_io->readU2le();
        $this->_m_lastModFileDate = $this->_io->readU2le();
        $this->_m_crc32 = $this->_io->readU4le();
        $this->_m_compressedSize = $this->_io->readU4le();
        $this->_m_uncompressedSize = $this->_io->readU4le();
        $this->_m_fileNameLen = $this->_io->readU2le();
        $this->_m_extraLen = $this->_io->readU2le();
        $this->_m_commentLen = $this->_io->readU2le();
        $this->_m_diskNumberStart = $this->_io->readU2le();
        $this->_m_intFileAttr = $this->_io->readU2le();
        $this->_m_extFileAttr = $this->_io->readU4le();
        $this->_m_localHeaderOffset = $this->_io->readS4le();
        $this->_m_fileName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes($this->fileNameLen()), "UTF-8");
        $this->_m__raw_extra = $this->_io->readBytes($this->extraLen());
        $io = new \Kaitai\Struct\Stream($this->_m__raw_extra);
        $this->_m_extra = new \Zip\Extras($io, $this, $this->_root);
        $this->_m_comment = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes($this->commentLen()), "UTF-8");
    }
    protected $_m_localHeader;
    public function localHeader() {
        if ($this->_m_localHeader !== null)
            return $this->_m_localHeader;
        $_pos = $this->_io->pos();
        $this->_io->seek($this->localHeaderOffset());
        $this->_m_localHeader = new \Zip\PkSection($this->_io, $this, $this->_root);
        $this->_io->seek($_pos);
        return $this->_m_localHeader;
    }
    protected $_m_versionMadeBy;
    protected $_m_versionNeededToExtract;
    protected $_m_flags;
    protected $_m_compressionMethod;
    protected $_m_lastModFileTime;
    protected $_m_lastModFileDate;
    protected $_m_crc32;
    protected $_m_compressedSize;
    protected $_m_uncompressedSize;
    protected $_m_fileNameLen;
    protected $_m_extraLen;
    protected $_m_commentLen;
    protected $_m_diskNumberStart;
    protected $_m_intFileAttr;
    protected $_m_extFileAttr;
    protected $_m_localHeaderOffset;
    protected $_m_fileName;
    protected $_m_extra;
    protected $_m_comment;
    protected $_m__raw_extra;
    public function versionMadeBy() { return $this->_m_versionMadeBy; }
    public function versionNeededToExtract() { return $this->_m_versionNeededToExtract; }
    public function flags() { return $this->_m_flags; }
    public function compressionMethod() { return $this->_m_compressionMethod; }
    public function lastModFileTime() { return $this->_m_lastModFileTime; }
    public function lastModFileDate() { return $this->_m_lastModFileDate; }
    public function crc32() { return $this->_m_crc32; }
    public function compressedSize() { return $this->_m_compressedSize; }
    public function uncompressedSize() { return $this->_m_uncompressedSize; }
    public function fileNameLen() { return $this->_m_fileNameLen; }
    public function extraLen() { return $this->_m_extraLen; }
    public function commentLen() { return $this->_m_commentLen; }
    public function diskNumberStart() { return $this->_m_diskNumberStart; }
    public function intFileAttr() { return $this->_m_intFileAttr; }
    public function extFileAttr() { return $this->_m_extFileAttr; }
    public function localHeaderOffset() { return $this->_m_localHeaderOffset; }
    public function fileName() { return $this->_m_fileName; }
    public function extra() { return $this->_m_extra; }
    public function comment() { return $this->_m_comment; }
    public function _raw_extra() { return $this->_m__raw_extra; }
}

namespace \Zip;

class PkSection extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_magic = $this->_io->ensureFixedContents("\x50\x4B");
        $this->_m_sectionType = $this->_io->readU2le();
        switch ($this->sectionType()) {
            case 513:
                $this->_m_body = new \Zip\CentralDirEntry($this->_io, $this, $this->_root);
                break;
            case 1027:
                $this->_m_body = new \Zip\LocalFile($this->_io, $this, $this->_root);
                break;
            case 1541:
                $this->_m_body = new \Zip\EndOfCentralDir($this->_io, $this, $this->_root);
                break;
        }
    }
    protected $_m_magic;
    protected $_m_sectionType;
    protected $_m_body;
    public function magic() { return $this->_m_magic; }
    public function sectionType() { return $this->_m_sectionType; }
    public function body() { return $this->_m_body; }
}

namespace \Zip;

class Extras extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Kaitai\Struct\Struct $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_entries = [];
        $i = 0;
        while (!$this->_io->isEof()) {
            $this->_m_entries[] = new \Zip\ExtraField($this->_io, $this, $this->_root);
            $i++;
        }
    }
    protected $_m_entries;
    public function entries() { return $this->_m_entries; }
}

namespace \Zip;

class LocalFileHeader extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\LocalFile $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_version = $this->_io->readU2le();
        $this->_m_flags = $this->_io->readU2le();
        $this->_m_compressionMethod = $this->_io->readU2le();
        $this->_m_fileModTime = $this->_io->readU2le();
        $this->_m_fileModDate = $this->_io->readU2le();
        $this->_m_crc32 = $this->_io->readU4le();
        $this->_m_compressedSize = $this->_io->readU4le();
        $this->_m_uncompressedSize = $this->_io->readU4le();
        $this->_m_fileNameLen = $this->_io->readU2le();
        $this->_m_extraLen = $this->_io->readU2le();
        $this->_m_fileName = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes($this->fileNameLen()), "UTF-8");
        $this->_m__raw_extra = $this->_io->readBytes($this->extraLen());
        $io = new \Kaitai\Struct\Stream($this->_m__raw_extra);
        $this->_m_extra = new \Zip\Extras($io, $this, $this->_root);
    }
    protected $_m_version;
    protected $_m_flags;
    protected $_m_compressionMethod;
    protected $_m_fileModTime;
    protected $_m_fileModDate;
    protected $_m_crc32;
    protected $_m_compressedSize;
    protected $_m_uncompressedSize;
    protected $_m_fileNameLen;
    protected $_m_extraLen;
    protected $_m_fileName;
    protected $_m_extra;
    protected $_m__raw_extra;
    public function version() { return $this->_m_version; }
    public function flags() { return $this->_m_flags; }
    public function compressionMethod() { return $this->_m_compressionMethod; }
    public function fileModTime() { return $this->_m_fileModTime; }
    public function fileModDate() { return $this->_m_fileModDate; }
    public function crc32() { return $this->_m_crc32; }
    public function compressedSize() { return $this->_m_compressedSize; }
    public function uncompressedSize() { return $this->_m_uncompressedSize; }
    public function fileNameLen() { return $this->_m_fileNameLen; }
    public function extraLen() { return $this->_m_extraLen; }
    public function fileName() { return $this->_m_fileName; }
    public function extra() { return $this->_m_extra; }
    public function _raw_extra() { return $this->_m__raw_extra; }
}

namespace \Zip;

class EndOfCentralDir extends \Kaitai\Struct\Struct {
    public function __construct(\Kaitai\Struct\Stream $_io, \Zip\PkSection $_parent = null, \Zip $_root = null) {
        parent::__construct($_io, $_parent, $_root);
        $this->_read();
    }

    private function _read() {
        $this->_m_diskOfEndOfCentralDir = $this->_io->readU2le();
        $this->_m_diskOfCentralDir = $this->_io->readU2le();
        $this->_m_qtyCentralDirEntriesOnDisk = $this->_io->readU2le();
        $this->_m_qtyCentralDirEntriesTotal = $this->_io->readU2le();
        $this->_m_centralDirSize = $this->_io->readU4le();
        $this->_m_centralDirOffset = $this->_io->readU4le();
        $this->_m_commentLen = $this->_io->readU2le();
        $this->_m_comment = \Kaitai\Struct\Stream::bytesToStr($this->_io->readBytes($this->commentLen()), "UTF-8");
    }
    protected $_m_diskOfEndOfCentralDir;
    protected $_m_diskOfCentralDir;
    protected $_m_qtyCentralDirEntriesOnDisk;
    protected $_m_qtyCentralDirEntriesTotal;
    protected $_m_centralDirSize;
    protected $_m_centralDirOffset;
    protected $_m_commentLen;
    protected $_m_comment;
    public function diskOfEndOfCentralDir() { return $this->_m_diskOfEndOfCentralDir; }
    public function diskOfCentralDir() { return $this->_m_diskOfCentralDir; }
    public function qtyCentralDirEntriesOnDisk() { return $this->_m_qtyCentralDirEntriesOnDisk; }
    public function qtyCentralDirEntriesTotal() { return $this->_m_qtyCentralDirEntriesTotal; }
    public function centralDirSize() { return $this->_m_centralDirSize; }
    public function centralDirOffset() { return $this->_m_centralDirOffset; }
    public function commentLen() { return $this->_m_commentLen; }
    public function comment() { return $this->_m_comment; }
}

namespace \Zip;

class Compression {
    const NONE = 0;
    const SHRUNK = 1;
    const REDUCED_1 = 2;
    const REDUCED_2 = 3;
    const REDUCED_3 = 4;
    const REDUCED_4 = 5;
    const IMPLODED = 6;
    const DEFLATED = 8;
    const ENHANCED_DEFLATED = 9;
    const PKWARE_DCL_IMPLODED = 10;
    const BZIP2 = 12;
    const LZMA = 14;
    const IBM_TERSE = 18;
    const IBM_LZ77_Z = 19;
    const PPMD = 98;
}

namespace \Zip;

class ExtraCodes {
    const ZIP64 = 1;
    const AV_INFO = 7;
    const OS2 = 9;
    const NTFS = 10;
    const OPENVMS = 12;
    const PKWARE_UNIX = 13;
    const FILE_STREAM_AND_FORK_DESCRIPTORS = 14;
    const PATCH_DESCRIPTOR = 15;
    const PKCS7 = 20;
    const X509_CERT_ID_AND_SIGNATURE_FOR_FILE = 21;
    const X509_CERT_ID_FOR_CENTRAL_DIR = 22;
    const STRONG_ENCRYPTION_HEADER = 23;
    const RECORD_MANAGEMENT_CONTROLS = 24;
    const PKCS7_ENC_RECIP_CERT_LIST = 25;
    const IBM_S390_UNCOMP = 101;
    const IBM_S390_COMP = 102;
    const POSZIP_4690 = 18064;
    const EXTENDED_TIMESTAMP = 21589;
    const INFOZIP_UNIX = 30805;
    const INFOZIP_UNIX_VAR_SIZE = 30837;
}
