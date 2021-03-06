// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

import io.kaitai.struct.ByteBufferKaitaiStream;
import io.kaitai.struct.KaitaiStruct;
import io.kaitai.struct.KaitaiStream;
import java.io.IOException;
import java.util.Map;
import java.util.HashMap;
import java.util.ArrayList;
import java.nio.charset.Charset;


/**
 * @see <a href="https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT">Source</a>
 */
public class Zip extends KaitaiStruct {
    public static Zip fromFile(String fileName) throws IOException {
        return new Zip(new ByteBufferKaitaiStream(fileName));
    }

    public enum Compression {
        NONE(0),
        SHRUNK(1),
        REDUCED_1(2),
        REDUCED_2(3),
        REDUCED_3(4),
        REDUCED_4(5),
        IMPLODED(6),
        DEFLATED(8),
        ENHANCED_DEFLATED(9),
        PKWARE_DCL_IMPLODED(10),
        BZIP2(12),
        LZMA(14),
        IBM_TERSE(18),
        IBM_LZ77_Z(19),
        PPMD(98);

        private final long id;
        Compression(long id) { this.id = id; }
        public long id() { return id; }
        private static final Map<Long, Compression> byId = new HashMap<Long, Compression>(15);
        static {
            for (Compression e : Compression.values())
                byId.put(e.id(), e);
        }
        public static Compression byId(long id) { return byId.get(id); }
    }

    public enum ExtraCodes {
        ZIP64(1),
        AV_INFO(7),
        OS2(9),
        NTFS(10),
        OPENVMS(12),
        PKWARE_UNIX(13),
        FILE_STREAM_AND_FORK_DESCRIPTORS(14),
        PATCH_DESCRIPTOR(15),
        PKCS7(20),
        X509_CERT_ID_AND_SIGNATURE_FOR_FILE(21),
        X509_CERT_ID_FOR_CENTRAL_DIR(22),
        STRONG_ENCRYPTION_HEADER(23),
        RECORD_MANAGEMENT_CONTROLS(24),
        PKCS7_ENC_RECIP_CERT_LIST(25),
        IBM_S390_UNCOMP(101),
        IBM_S390_COMP(102),
        POSZIP_4690(18064),
        EXTENDED_TIMESTAMP(21589),
        INFOZIP_UNIX(30805),
        INFOZIP_UNIX_VAR_SIZE(30837);

        private final long id;
        ExtraCodes(long id) { this.id = id; }
        public long id() { return id; }
        private static final Map<Long, ExtraCodes> byId = new HashMap<Long, ExtraCodes>(20);
        static {
            for (ExtraCodes e : ExtraCodes.values())
                byId.put(e.id(), e);
        }
        public static ExtraCodes byId(long id) { return byId.get(id); }
    }

    public Zip(KaitaiStream _io) {
        this(_io, null, null);
    }

    public Zip(KaitaiStream _io, KaitaiStruct _parent) {
        this(_io, _parent, null);
    }

    public Zip(KaitaiStream _io, KaitaiStruct _parent, Zip _root) {
        super(_io);
        this._parent = _parent;
        this._root = _root == null ? this : _root;
        _read();
    }
    private void _read() {
        this.sections = new ArrayList<PkSection>();
        {
            int i = 0;
            while (!this._io.isEof()) {
                this.sections.add(new PkSection(this._io, this, _root));
                i++;
            }
        }
    }
    public static class LocalFile extends KaitaiStruct {
        public static LocalFile fromFile(String fileName) throws IOException {
            return new LocalFile(new ByteBufferKaitaiStream(fileName));
        }

        public LocalFile(KaitaiStream _io) {
            this(_io, null, null);
        }

        public LocalFile(KaitaiStream _io, Zip.PkSection _parent) {
            this(_io, _parent, null);
        }

        public LocalFile(KaitaiStream _io, Zip.PkSection _parent, Zip _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.header = new LocalFileHeader(this._io, this, _root);
            this.body = this._io.readBytes(header().compressedSize());
        }
        private LocalFileHeader header;
        private byte[] body;
        private Zip _root;
        private Zip.PkSection _parent;
        public LocalFileHeader header() { return header; }
        public byte[] body() { return body; }
        public Zip _root() { return _root; }
        public Zip.PkSection _parent() { return _parent; }
    }
    public static class ExtraField extends KaitaiStruct {
        public static ExtraField fromFile(String fileName) throws IOException {
            return new ExtraField(new ByteBufferKaitaiStream(fileName));
        }

        public ExtraField(KaitaiStream _io) {
            this(_io, null, null);
        }

        public ExtraField(KaitaiStream _io, Zip.Extras _parent) {
            this(_io, _parent, null);
        }

        public ExtraField(KaitaiStream _io, Zip.Extras _parent, Zip _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.code = Zip.ExtraCodes.byId(this._io.readU2le());
            this.size = this._io.readU2le();
            switch (code()) {
            case NTFS: {
                this._raw_body = this._io.readBytes(size());
                KaitaiStream _io__raw_body = new ByteBufferKaitaiStream(_raw_body);
                this.body = new Ntfs(_io__raw_body, this, _root);
                break;
            }
            case EXTENDED_TIMESTAMP: {
                this._raw_body = this._io.readBytes(size());
                KaitaiStream _io__raw_body = new ByteBufferKaitaiStream(_raw_body);
                this.body = new ExtendedTimestamp(_io__raw_body, this, _root);
                break;
            }
            case INFOZIP_UNIX_VAR_SIZE: {
                this._raw_body = this._io.readBytes(size());
                KaitaiStream _io__raw_body = new ByteBufferKaitaiStream(_raw_body);
                this.body = new InfozipUnixVarSize(_io__raw_body, this, _root);
                break;
            }
            default: {
                this.body = this._io.readBytes(size());
                break;
            }
            }
        }

        /**
         * @see <a href="https://github.com/LuaDist/zip/blob/master/proginfo/extrafld.txt#L191">Source</a>
         */
        public static class Ntfs extends KaitaiStruct {
            public static Ntfs fromFile(String fileName) throws IOException {
                return new Ntfs(new ByteBufferKaitaiStream(fileName));
            }

            public Ntfs(KaitaiStream _io) {
                this(_io, null, null);
            }

            public Ntfs(KaitaiStream _io, Zip.ExtraField _parent) {
                this(_io, _parent, null);
            }

            public Ntfs(KaitaiStream _io, Zip.ExtraField _parent, Zip _root) {
                super(_io);
                this._parent = _parent;
                this._root = _root;
                _read();
            }
            private void _read() {
                this.reserved = this._io.readU4le();
                this.attributes = new ArrayList<Attribute>();
                {
                    int i = 0;
                    while (!this._io.isEof()) {
                        this.attributes.add(new Attribute(this._io, this, _root));
                        i++;
                    }
                }
            }
            public static class Attribute extends KaitaiStruct {
                public static Attribute fromFile(String fileName) throws IOException {
                    return new Attribute(new ByteBufferKaitaiStream(fileName));
                }

                public Attribute(KaitaiStream _io) {
                    this(_io, null, null);
                }

                public Attribute(KaitaiStream _io, Zip.ExtraField.Ntfs _parent) {
                    this(_io, _parent, null);
                }

                public Attribute(KaitaiStream _io, Zip.ExtraField.Ntfs _parent, Zip _root) {
                    super(_io);
                    this._parent = _parent;
                    this._root = _root;
                    _read();
                }
                private void _read() {
                    this.tag = this._io.readU2le();
                    this.size = this._io.readU2le();
                    switch (tag()) {
                    case 1: {
                        this._raw_body = this._io.readBytes(size());
                        KaitaiStream _io__raw_body = new ByteBufferKaitaiStream(_raw_body);
                        this.body = new Attribute1(_io__raw_body, this, _root);
                        break;
                    }
                    default: {
                        this.body = this._io.readBytes(size());
                        break;
                    }
                    }
                }
                private int tag;
                private int size;
                private Object body;
                private Zip _root;
                private Zip.ExtraField.Ntfs _parent;
                private byte[] _raw_body;
                public int tag() { return tag; }
                public int size() { return size; }
                public Object body() { return body; }
                public Zip _root() { return _root; }
                public Zip.ExtraField.Ntfs _parent() { return _parent; }
                public byte[] _raw_body() { return _raw_body; }
            }
            public static class Attribute1 extends KaitaiStruct {
                public static Attribute1 fromFile(String fileName) throws IOException {
                    return new Attribute1(new ByteBufferKaitaiStream(fileName));
                }

                public Attribute1(KaitaiStream _io) {
                    this(_io, null, null);
                }

                public Attribute1(KaitaiStream _io, Zip.ExtraField.Ntfs.Attribute _parent) {
                    this(_io, _parent, null);
                }

                public Attribute1(KaitaiStream _io, Zip.ExtraField.Ntfs.Attribute _parent, Zip _root) {
                    super(_io);
                    this._parent = _parent;
                    this._root = _root;
                    _read();
                }
                private void _read() {
                    this.lastModTime = this._io.readU8le();
                    this.lastAccessTime = this._io.readU8le();
                    this.creationTime = this._io.readU8le();
                }
                private long lastModTime;
                private long lastAccessTime;
                private long creationTime;
                private Zip _root;
                private Zip.ExtraField.Ntfs.Attribute _parent;
                public long lastModTime() { return lastModTime; }
                public long lastAccessTime() { return lastAccessTime; }
                public long creationTime() { return creationTime; }
                public Zip _root() { return _root; }
                public Zip.ExtraField.Ntfs.Attribute _parent() { return _parent; }
            }
            private long reserved;
            private ArrayList<Attribute> attributes;
            private Zip _root;
            private Zip.ExtraField _parent;
            public long reserved() { return reserved; }
            public ArrayList<Attribute> attributes() { return attributes; }
            public Zip _root() { return _root; }
            public Zip.ExtraField _parent() { return _parent; }
        }

        /**
         * @see <a href="https://github.com/LuaDist/zip/blob/master/proginfo/extrafld.txt#L817">Source</a>
         */
        public static class ExtendedTimestamp extends KaitaiStruct {
            public static ExtendedTimestamp fromFile(String fileName) throws IOException {
                return new ExtendedTimestamp(new ByteBufferKaitaiStream(fileName));
            }

            public ExtendedTimestamp(KaitaiStream _io) {
                this(_io, null, null);
            }

            public ExtendedTimestamp(KaitaiStream _io, Zip.ExtraField _parent) {
                this(_io, _parent, null);
            }

            public ExtendedTimestamp(KaitaiStream _io, Zip.ExtraField _parent, Zip _root) {
                super(_io);
                this._parent = _parent;
                this._root = _root;
                _read();
            }
            private void _read() {
                this.flags = this._io.readU1();
                this.modTime = this._io.readU4le();
                if (!(_io().isEof())) {
                    this.accessTime = this._io.readU4le();
                }
                if (!(_io().isEof())) {
                    this.createTime = this._io.readU4le();
                }
            }
            private int flags;
            private long modTime;
            private Long accessTime;
            private Long createTime;
            private Zip _root;
            private Zip.ExtraField _parent;
            public int flags() { return flags; }
            public long modTime() { return modTime; }
            public Long accessTime() { return accessTime; }
            public Long createTime() { return createTime; }
            public Zip _root() { return _root; }
            public Zip.ExtraField _parent() { return _parent; }
        }

        /**
         * @see <a href="https://github.com/LuaDist/zip/blob/master/proginfo/extrafld.txt#L1339">Source</a>
         */
        public static class InfozipUnixVarSize extends KaitaiStruct {
            public static InfozipUnixVarSize fromFile(String fileName) throws IOException {
                return new InfozipUnixVarSize(new ByteBufferKaitaiStream(fileName));
            }

            public InfozipUnixVarSize(KaitaiStream _io) {
                this(_io, null, null);
            }

            public InfozipUnixVarSize(KaitaiStream _io, Zip.ExtraField _parent) {
                this(_io, _parent, null);
            }

            public InfozipUnixVarSize(KaitaiStream _io, Zip.ExtraField _parent, Zip _root) {
                super(_io);
                this._parent = _parent;
                this._root = _root;
                _read();
            }
            private void _read() {
                this.version = this._io.readU1();
                this.uidSize = this._io.readU1();
                this.uid = this._io.readBytes(uidSize());
                this.gidSize = this._io.readU1();
                this.gid = this._io.readBytes(gidSize());
            }
            private int version;
            private int uidSize;
            private byte[] uid;
            private int gidSize;
            private byte[] gid;
            private Zip _root;
            private Zip.ExtraField _parent;

            /**
             * Version of this extra field, currently 1
             */
            public int version() { return version; }

            /**
             * Size of UID field
             */
            public int uidSize() { return uidSize; }

            /**
             * UID (User ID) for a file
             */
            public byte[] uid() { return uid; }

            /**
             * Size of GID field
             */
            public int gidSize() { return gidSize; }

            /**
             * GID (Group ID) for a file
             */
            public byte[] gid() { return gid; }
            public Zip _root() { return _root; }
            public Zip.ExtraField _parent() { return _parent; }
        }
        private ExtraCodes code;
        private int size;
        private Object body;
        private Zip _root;
        private Zip.Extras _parent;
        private byte[] _raw_body;
        public ExtraCodes code() { return code; }
        public int size() { return size; }
        public Object body() { return body; }
        public Zip _root() { return _root; }
        public Zip.Extras _parent() { return _parent; }
        public byte[] _raw_body() { return _raw_body; }
    }

    /**
     * @see <a href="https://pkware.cachefly.net/webdocs/casestudies/APPNOTE.TXT">- 4.3.12</a>
     */
    public static class CentralDirEntry extends KaitaiStruct {
        public static CentralDirEntry fromFile(String fileName) throws IOException {
            return new CentralDirEntry(new ByteBufferKaitaiStream(fileName));
        }

        public CentralDirEntry(KaitaiStream _io) {
            this(_io, null, null);
        }

        public CentralDirEntry(KaitaiStream _io, Zip.PkSection _parent) {
            this(_io, _parent, null);
        }

        public CentralDirEntry(KaitaiStream _io, Zip.PkSection _parent, Zip _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.versionMadeBy = this._io.readU2le();
            this.versionNeededToExtract = this._io.readU2le();
            this.flags = this._io.readU2le();
            this.compressionMethod = Zip.Compression.byId(this._io.readU2le());
            this.lastModFileTime = this._io.readU2le();
            this.lastModFileDate = this._io.readU2le();
            this.crc32 = this._io.readU4le();
            this.compressedSize = this._io.readU4le();
            this.uncompressedSize = this._io.readU4le();
            this.fileNameLen = this._io.readU2le();
            this.extraLen = this._io.readU2le();
            this.commentLen = this._io.readU2le();
            this.diskNumberStart = this._io.readU2le();
            this.intFileAttr = this._io.readU2le();
            this.extFileAttr = this._io.readU4le();
            this.localHeaderOffset = this._io.readS4le();
            this.fileName = new String(this._io.readBytes(fileNameLen()), Charset.forName("UTF-8"));
            this._raw_extra = this._io.readBytes(extraLen());
            KaitaiStream _io__raw_extra = new ByteBufferKaitaiStream(_raw_extra);
            this.extra = new Extras(_io__raw_extra, this, _root);
            this.comment = new String(this._io.readBytes(commentLen()), Charset.forName("UTF-8"));
        }
        private PkSection localHeader;
        public PkSection localHeader() {
            if (this.localHeader != null)
                return this.localHeader;
            long _pos = this._io.pos();
            this._io.seek(localHeaderOffset());
            this.localHeader = new PkSection(this._io, this, _root);
            this._io.seek(_pos);
            return this.localHeader;
        }
        private int versionMadeBy;
        private int versionNeededToExtract;
        private int flags;
        private Compression compressionMethod;
        private int lastModFileTime;
        private int lastModFileDate;
        private long crc32;
        private long compressedSize;
        private long uncompressedSize;
        private int fileNameLen;
        private int extraLen;
        private int commentLen;
        private int diskNumberStart;
        private int intFileAttr;
        private long extFileAttr;
        private int localHeaderOffset;
        private String fileName;
        private Extras extra;
        private String comment;
        private Zip _root;
        private Zip.PkSection _parent;
        private byte[] _raw_extra;
        public int versionMadeBy() { return versionMadeBy; }
        public int versionNeededToExtract() { return versionNeededToExtract; }
        public int flags() { return flags; }
        public Compression compressionMethod() { return compressionMethod; }
        public int lastModFileTime() { return lastModFileTime; }
        public int lastModFileDate() { return lastModFileDate; }
        public long crc32() { return crc32; }
        public long compressedSize() { return compressedSize; }
        public long uncompressedSize() { return uncompressedSize; }
        public int fileNameLen() { return fileNameLen; }
        public int extraLen() { return extraLen; }
        public int commentLen() { return commentLen; }
        public int diskNumberStart() { return diskNumberStart; }
        public int intFileAttr() { return intFileAttr; }
        public long extFileAttr() { return extFileAttr; }
        public int localHeaderOffset() { return localHeaderOffset; }
        public String fileName() { return fileName; }
        public Extras extra() { return extra; }
        public String comment() { return comment; }
        public Zip _root() { return _root; }
        public Zip.PkSection _parent() { return _parent; }
        public byte[] _raw_extra() { return _raw_extra; }
    }
    public static class PkSection extends KaitaiStruct {
        public static PkSection fromFile(String fileName) throws IOException {
            return new PkSection(new ByteBufferKaitaiStream(fileName));
        }

        public PkSection(KaitaiStream _io) {
            this(_io, null, null);
        }

        public PkSection(KaitaiStream _io, KaitaiStruct _parent) {
            this(_io, _parent, null);
        }

        public PkSection(KaitaiStream _io, KaitaiStruct _parent, Zip _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.magic = this._io.ensureFixedContents(new byte[] { 80, 75 });
            this.sectionType = this._io.readU2le();
            switch (sectionType()) {
            case 513: {
                this.body = new CentralDirEntry(this._io, this, _root);
                break;
            }
            case 1027: {
                this.body = new LocalFile(this._io, this, _root);
                break;
            }
            case 1541: {
                this.body = new EndOfCentralDir(this._io, this, _root);
                break;
            }
            }
        }
        private byte[] magic;
        private int sectionType;
        private KaitaiStruct body;
        private Zip _root;
        private KaitaiStruct _parent;
        public byte[] magic() { return magic; }
        public int sectionType() { return sectionType; }
        public KaitaiStruct body() { return body; }
        public Zip _root() { return _root; }
        public KaitaiStruct _parent() { return _parent; }
    }
    public static class Extras extends KaitaiStruct {
        public static Extras fromFile(String fileName) throws IOException {
            return new Extras(new ByteBufferKaitaiStream(fileName));
        }

        public Extras(KaitaiStream _io) {
            this(_io, null, null);
        }

        public Extras(KaitaiStream _io, KaitaiStruct _parent) {
            this(_io, _parent, null);
        }

        public Extras(KaitaiStream _io, KaitaiStruct _parent, Zip _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.entries = new ArrayList<ExtraField>();
            {
                int i = 0;
                while (!this._io.isEof()) {
                    this.entries.add(new ExtraField(this._io, this, _root));
                    i++;
                }
            }
        }
        private ArrayList<ExtraField> entries;
        private Zip _root;
        private KaitaiStruct _parent;
        public ArrayList<ExtraField> entries() { return entries; }
        public Zip _root() { return _root; }
        public KaitaiStruct _parent() { return _parent; }
    }
    public static class LocalFileHeader extends KaitaiStruct {
        public static LocalFileHeader fromFile(String fileName) throws IOException {
            return new LocalFileHeader(new ByteBufferKaitaiStream(fileName));
        }

        public LocalFileHeader(KaitaiStream _io) {
            this(_io, null, null);
        }

        public LocalFileHeader(KaitaiStream _io, Zip.LocalFile _parent) {
            this(_io, _parent, null);
        }

        public LocalFileHeader(KaitaiStream _io, Zip.LocalFile _parent, Zip _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.version = this._io.readU2le();
            this.flags = this._io.readU2le();
            this.compressionMethod = Zip.Compression.byId(this._io.readU2le());
            this.fileModTime = this._io.readU2le();
            this.fileModDate = this._io.readU2le();
            this.crc32 = this._io.readU4le();
            this.compressedSize = this._io.readU4le();
            this.uncompressedSize = this._io.readU4le();
            this.fileNameLen = this._io.readU2le();
            this.extraLen = this._io.readU2le();
            this.fileName = new String(this._io.readBytes(fileNameLen()), Charset.forName("UTF-8"));
            this._raw_extra = this._io.readBytes(extraLen());
            KaitaiStream _io__raw_extra = new ByteBufferKaitaiStream(_raw_extra);
            this.extra = new Extras(_io__raw_extra, this, _root);
        }
        private int version;
        private int flags;
        private Compression compressionMethod;
        private int fileModTime;
        private int fileModDate;
        private long crc32;
        private long compressedSize;
        private long uncompressedSize;
        private int fileNameLen;
        private int extraLen;
        private String fileName;
        private Extras extra;
        private Zip _root;
        private Zip.LocalFile _parent;
        private byte[] _raw_extra;
        public int version() { return version; }
        public int flags() { return flags; }
        public Compression compressionMethod() { return compressionMethod; }
        public int fileModTime() { return fileModTime; }
        public int fileModDate() { return fileModDate; }
        public long crc32() { return crc32; }
        public long compressedSize() { return compressedSize; }
        public long uncompressedSize() { return uncompressedSize; }
        public int fileNameLen() { return fileNameLen; }
        public int extraLen() { return extraLen; }
        public String fileName() { return fileName; }
        public Extras extra() { return extra; }
        public Zip _root() { return _root; }
        public Zip.LocalFile _parent() { return _parent; }
        public byte[] _raw_extra() { return _raw_extra; }
    }
    public static class EndOfCentralDir extends KaitaiStruct {
        public static EndOfCentralDir fromFile(String fileName) throws IOException {
            return new EndOfCentralDir(new ByteBufferKaitaiStream(fileName));
        }

        public EndOfCentralDir(KaitaiStream _io) {
            this(_io, null, null);
        }

        public EndOfCentralDir(KaitaiStream _io, Zip.PkSection _parent) {
            this(_io, _parent, null);
        }

        public EndOfCentralDir(KaitaiStream _io, Zip.PkSection _parent, Zip _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.diskOfEndOfCentralDir = this._io.readU2le();
            this.diskOfCentralDir = this._io.readU2le();
            this.qtyCentralDirEntriesOnDisk = this._io.readU2le();
            this.qtyCentralDirEntriesTotal = this._io.readU2le();
            this.centralDirSize = this._io.readU4le();
            this.centralDirOffset = this._io.readU4le();
            this.commentLen = this._io.readU2le();
            this.comment = new String(this._io.readBytes(commentLen()), Charset.forName("UTF-8"));
        }
        private int diskOfEndOfCentralDir;
        private int diskOfCentralDir;
        private int qtyCentralDirEntriesOnDisk;
        private int qtyCentralDirEntriesTotal;
        private long centralDirSize;
        private long centralDirOffset;
        private int commentLen;
        private String comment;
        private Zip _root;
        private Zip.PkSection _parent;
        public int diskOfEndOfCentralDir() { return diskOfEndOfCentralDir; }
        public int diskOfCentralDir() { return diskOfCentralDir; }
        public int qtyCentralDirEntriesOnDisk() { return qtyCentralDirEntriesOnDisk; }
        public int qtyCentralDirEntriesTotal() { return qtyCentralDirEntriesTotal; }
        public long centralDirSize() { return centralDirSize; }
        public long centralDirOffset() { return centralDirOffset; }
        public int commentLen() { return commentLen; }
        public String comment() { return comment; }
        public Zip _root() { return _root; }
        public Zip.PkSection _parent() { return _parent; }
    }
    private ArrayList<PkSection> sections;
    private Zip _root;
    private KaitaiStruct _parent;
    public ArrayList<PkSection> sections() { return sections; }
    public Zip _root() { return _root; }
    public KaitaiStruct _parent() { return _parent; }
}
