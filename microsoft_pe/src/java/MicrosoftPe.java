// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

import io.kaitai.struct.KaitaiStruct;
import io.kaitai.struct.KaitaiStream;
import java.io.IOException;
import java.util.Map;
import java.util.HashMap;
import java.util.ArrayList;
import java.nio.charset.Charset;


/**
 * @see <a href="http://www.microsoft.com/whdc/system/platform/firmware/PECOFF.mspx">Source</a>
 */
public class MicrosoftPe extends KaitaiStruct {
    public static MicrosoftPe fromFile(String fileName) throws IOException {
        return new MicrosoftPe(new KaitaiStream(fileName));
    }

    public enum PeFormat {
        ROM_IMAGE(263),
        PE32(267),
        PE32_PLUS(523);

        private final long id;
        PeFormat(long id) { this.id = id; }
        public long id() { return id; }
        private static final Map<Long, PeFormat> byId = new HashMap<Long, PeFormat>(3);
        static {
            for (PeFormat e : PeFormat.values())
                byId.put(e.id(), e);
        }
        public static PeFormat byId(long id) { return byId.get(id); }
    }

    public MicrosoftPe(KaitaiStream _io) {
        this(_io, null, null);
    }

    public MicrosoftPe(KaitaiStream _io, KaitaiStruct _parent) {
        this(_io, _parent, null);
    }

    public MicrosoftPe(KaitaiStream _io, KaitaiStruct _parent, MicrosoftPe _root) {
        super(_io);
        this._parent = _parent;
        this._root = _root == null ? this : _root;
        _read();
    }
    private void _read() {
        this.mz1 = new MzPlaceholder(this._io, this, _root);
        this.mz2 = this._io.readBytes((mz1().headerSize() - 64));
        this.peSignature = this._io.ensureFixedContents(new byte[] { 80, 69, 0, 0 });
        this.coffHdr = new CoffHeader(this._io, this, _root);
        this._raw_optionalHdr = this._io.readBytes(coffHdr().sizeOfOptionalHeader());
        KaitaiStream _io__raw_optionalHdr = new KaitaiStream(_raw_optionalHdr);
        this.optionalHdr = new OptionalHeader(_io__raw_optionalHdr, this, _root);
        sections = new ArrayList<Section>((int) (coffHdr().numberOfSections()));
        for (int i = 0; i < coffHdr().numberOfSections(); i++) {
            this.sections.add(new Section(this._io, this, _root));
        }
    }
    public static class OptionalHeaderWindows extends KaitaiStruct {
        public static OptionalHeaderWindows fromFile(String fileName) throws IOException {
            return new OptionalHeaderWindows(new KaitaiStream(fileName));
        }

        public enum SubsystemEnum {
            UNKNOWN(0),
            NATIVE(1),
            WINDOWS_GUI(2),
            WINDOWS_CUI(3),
            POSIX_CUI(7),
            WINDOWS_CE_GUI(9),
            EFI_APPLICATION(10),
            EFI_BOOT_SERVICE_DRIVER(11),
            EFI_RUNTIME_DRIVER(12),
            EFI_ROM(13),
            XBOX(14);

            private final long id;
            SubsystemEnum(long id) { this.id = id; }
            public long id() { return id; }
            private static final Map<Long, SubsystemEnum> byId = new HashMap<Long, SubsystemEnum>(11);
            static {
                for (SubsystemEnum e : SubsystemEnum.values())
                    byId.put(e.id(), e);
            }
            public static SubsystemEnum byId(long id) { return byId.get(id); }
        }

        public OptionalHeaderWindows(KaitaiStream _io) {
            this(_io, null, null);
        }

        public OptionalHeaderWindows(KaitaiStream _io, MicrosoftPe.OptionalHeader _parent) {
            this(_io, _parent, null);
        }

        public OptionalHeaderWindows(KaitaiStream _io, MicrosoftPe.OptionalHeader _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32) {
                this.imageBase32 = this._io.readU4le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32_PLUS) {
                this.imageBase64 = this._io.readU8le();
            }
            this.sectionAlignment = this._io.readU4le();
            this.fileAlignment = this._io.readU4le();
            this.majorOperatingSystemVersion = this._io.readU2le();
            this.minorOperatingSystemVersion = this._io.readU2le();
            this.majorImageVersion = this._io.readU2le();
            this.minorImageVersion = this._io.readU2le();
            this.majorSubsystemVersion = this._io.readU2le();
            this.minorSubsystemVersion = this._io.readU2le();
            this.win32VersionValue = this._io.readU4le();
            this.sizeOfImage = this._io.readU4le();
            this.sizeOfHeaders = this._io.readU4le();
            this.checkSum = this._io.readU4le();
            this.subsystem = SubsystemEnum.byId(this._io.readU2le());
            this.dllCharacteristics = this._io.readU2le();
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32) {
                this.sizeOfStackReserve32 = this._io.readU4le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32_PLUS) {
                this.sizeOfStackReserve64 = this._io.readU8le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32) {
                this.sizeOfStackCommit32 = this._io.readU4le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32_PLUS) {
                this.sizeOfStackCommit64 = this._io.readU8le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32) {
                this.sizeOfHeapReserve32 = this._io.readU4le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32_PLUS) {
                this.sizeOfHeapReserve64 = this._io.readU8le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32) {
                this.sizeOfHeapCommit32 = this._io.readU4le();
            }
            if (_parent().std().format() == MicrosoftPe.PeFormat.PE32_PLUS) {
                this.sizeOfHeapCommit64 = this._io.readU8le();
            }
            this.loaderFlags = this._io.readU4le();
            this.numberOfRvaAndSizes = this._io.readU4le();
        }
        private Long imageBase32;
        private Long imageBase64;
        private long sectionAlignment;
        private long fileAlignment;
        private int majorOperatingSystemVersion;
        private int minorOperatingSystemVersion;
        private int majorImageVersion;
        private int minorImageVersion;
        private int majorSubsystemVersion;
        private int minorSubsystemVersion;
        private long win32VersionValue;
        private long sizeOfImage;
        private long sizeOfHeaders;
        private long checkSum;
        private SubsystemEnum subsystem;
        private int dllCharacteristics;
        private Long sizeOfStackReserve32;
        private Long sizeOfStackReserve64;
        private Long sizeOfStackCommit32;
        private Long sizeOfStackCommit64;
        private Long sizeOfHeapReserve32;
        private Long sizeOfHeapReserve64;
        private Long sizeOfHeapCommit32;
        private Long sizeOfHeapCommit64;
        private long loaderFlags;
        private long numberOfRvaAndSizes;
        private MicrosoftPe _root;
        private MicrosoftPe.OptionalHeader _parent;
        public Long imageBase32() { return imageBase32; }
        public Long imageBase64() { return imageBase64; }
        public long sectionAlignment() { return sectionAlignment; }
        public long fileAlignment() { return fileAlignment; }
        public int majorOperatingSystemVersion() { return majorOperatingSystemVersion; }
        public int minorOperatingSystemVersion() { return minorOperatingSystemVersion; }
        public int majorImageVersion() { return majorImageVersion; }
        public int minorImageVersion() { return minorImageVersion; }
        public int majorSubsystemVersion() { return majorSubsystemVersion; }
        public int minorSubsystemVersion() { return minorSubsystemVersion; }
        public long win32VersionValue() { return win32VersionValue; }
        public long sizeOfImage() { return sizeOfImage; }
        public long sizeOfHeaders() { return sizeOfHeaders; }
        public long checkSum() { return checkSum; }
        public SubsystemEnum subsystem() { return subsystem; }
        public int dllCharacteristics() { return dllCharacteristics; }
        public Long sizeOfStackReserve32() { return sizeOfStackReserve32; }
        public Long sizeOfStackReserve64() { return sizeOfStackReserve64; }
        public Long sizeOfStackCommit32() { return sizeOfStackCommit32; }
        public Long sizeOfStackCommit64() { return sizeOfStackCommit64; }
        public Long sizeOfHeapReserve32() { return sizeOfHeapReserve32; }
        public Long sizeOfHeapReserve64() { return sizeOfHeapReserve64; }
        public Long sizeOfHeapCommit32() { return sizeOfHeapCommit32; }
        public Long sizeOfHeapCommit64() { return sizeOfHeapCommit64; }
        public long loaderFlags() { return loaderFlags; }
        public long numberOfRvaAndSizes() { return numberOfRvaAndSizes; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe.OptionalHeader _parent() { return _parent; }
    }
    public static class OptionalHeaderDataDirs extends KaitaiStruct {
        public static OptionalHeaderDataDirs fromFile(String fileName) throws IOException {
            return new OptionalHeaderDataDirs(new KaitaiStream(fileName));
        }

        public OptionalHeaderDataDirs(KaitaiStream _io) {
            this(_io, null, null);
        }

        public OptionalHeaderDataDirs(KaitaiStream _io, MicrosoftPe.OptionalHeader _parent) {
            this(_io, _parent, null);
        }

        public OptionalHeaderDataDirs(KaitaiStream _io, MicrosoftPe.OptionalHeader _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.exportTable = new DataDir(this._io, this, _root);
            this.importTable = new DataDir(this._io, this, _root);
            this.resourceTable = new DataDir(this._io, this, _root);
            this.exceptionTable = new DataDir(this._io, this, _root);
            this.certificateTable = new DataDir(this._io, this, _root);
            this.baseRelocationTable = new DataDir(this._io, this, _root);
            this.debug = new DataDir(this._io, this, _root);
            this.architecture = new DataDir(this._io, this, _root);
            this.globalPtr = new DataDir(this._io, this, _root);
            this.tlsTable = new DataDir(this._io, this, _root);
            this.loadConfigTable = new DataDir(this._io, this, _root);
            this.boundImport = new DataDir(this._io, this, _root);
            this.iat = new DataDir(this._io, this, _root);
            this.delayImportDescriptor = new DataDir(this._io, this, _root);
            this.clrRuntimeHeader = new DataDir(this._io, this, _root);
        }
        private DataDir exportTable;
        private DataDir importTable;
        private DataDir resourceTable;
        private DataDir exceptionTable;
        private DataDir certificateTable;
        private DataDir baseRelocationTable;
        private DataDir debug;
        private DataDir architecture;
        private DataDir globalPtr;
        private DataDir tlsTable;
        private DataDir loadConfigTable;
        private DataDir boundImport;
        private DataDir iat;
        private DataDir delayImportDescriptor;
        private DataDir clrRuntimeHeader;
        private MicrosoftPe _root;
        private MicrosoftPe.OptionalHeader _parent;
        public DataDir exportTable() { return exportTable; }
        public DataDir importTable() { return importTable; }
        public DataDir resourceTable() { return resourceTable; }
        public DataDir exceptionTable() { return exceptionTable; }
        public DataDir certificateTable() { return certificateTable; }
        public DataDir baseRelocationTable() { return baseRelocationTable; }
        public DataDir debug() { return debug; }
        public DataDir architecture() { return architecture; }
        public DataDir globalPtr() { return globalPtr; }
        public DataDir tlsTable() { return tlsTable; }
        public DataDir loadConfigTable() { return loadConfigTable; }
        public DataDir boundImport() { return boundImport; }
        public DataDir iat() { return iat; }
        public DataDir delayImportDescriptor() { return delayImportDescriptor; }
        public DataDir clrRuntimeHeader() { return clrRuntimeHeader; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe.OptionalHeader _parent() { return _parent; }
    }
    public static class DataDir extends KaitaiStruct {
        public static DataDir fromFile(String fileName) throws IOException {
            return new DataDir(new KaitaiStream(fileName));
        }

        public DataDir(KaitaiStream _io) {
            this(_io, null, null);
        }

        public DataDir(KaitaiStream _io, MicrosoftPe.OptionalHeaderDataDirs _parent) {
            this(_io, _parent, null);
        }

        public DataDir(KaitaiStream _io, MicrosoftPe.OptionalHeaderDataDirs _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.virtualAddress = this._io.readU4le();
            this.size = this._io.readU4le();
        }
        private long virtualAddress;
        private long size;
        private MicrosoftPe _root;
        private MicrosoftPe.OptionalHeaderDataDirs _parent;
        public long virtualAddress() { return virtualAddress; }
        public long size() { return size; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe.OptionalHeaderDataDirs _parent() { return _parent; }
    }
    public static class OptionalHeader extends KaitaiStruct {
        public static OptionalHeader fromFile(String fileName) throws IOException {
            return new OptionalHeader(new KaitaiStream(fileName));
        }

        public OptionalHeader(KaitaiStream _io) {
            this(_io, null, null);
        }

        public OptionalHeader(KaitaiStream _io, MicrosoftPe _parent) {
            this(_io, _parent, null);
        }

        public OptionalHeader(KaitaiStream _io, MicrosoftPe _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.std = new OptionalHeaderStd(this._io, this, _root);
            this.windows = new OptionalHeaderWindows(this._io, this, _root);
            this.dataDirs = new OptionalHeaderDataDirs(this._io, this, _root);
        }
        private OptionalHeaderStd std;
        private OptionalHeaderWindows windows;
        private OptionalHeaderDataDirs dataDirs;
        private MicrosoftPe _root;
        private MicrosoftPe _parent;
        public OptionalHeaderStd std() { return std; }
        public OptionalHeaderWindows windows() { return windows; }
        public OptionalHeaderDataDirs dataDirs() { return dataDirs; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe _parent() { return _parent; }
    }
    public static class Section extends KaitaiStruct {
        public static Section fromFile(String fileName) throws IOException {
            return new Section(new KaitaiStream(fileName));
        }

        public Section(KaitaiStream _io) {
            this(_io, null, null);
        }

        public Section(KaitaiStream _io, MicrosoftPe _parent) {
            this(_io, _parent, null);
        }

        public Section(KaitaiStream _io, MicrosoftPe _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.name = new String(KaitaiStream.bytesStripRight(this._io.readBytes(8), (byte) 0), Charset.forName("UTF-8"));
            this.virtualSize = this._io.readU4le();
            this.virtualAddress = this._io.readU4le();
            this.sizeOfRawData = this._io.readU4le();
            this.pointerToRawData = this._io.readU4le();
            this.pointerToRelocations = this._io.readU4le();
            this.pointerToLinenumbers = this._io.readU4le();
            this.numberOfRelocations = this._io.readU2le();
            this.numberOfLinenumbers = this._io.readU2le();
            this.characteristics = this._io.readU4le();
        }
        private byte[] body;
        public byte[] body() {
            if (this.body != null)
                return this.body;
            long _pos = this._io.pos();
            this._io.seek(pointerToRawData());
            this.body = this._io.readBytes(sizeOfRawData());
            this._io.seek(_pos);
            return this.body;
        }
        private String name;
        private long virtualSize;
        private long virtualAddress;
        private long sizeOfRawData;
        private long pointerToRawData;
        private long pointerToRelocations;
        private long pointerToLinenumbers;
        private int numberOfRelocations;
        private int numberOfLinenumbers;
        private long characteristics;
        private MicrosoftPe _root;
        private MicrosoftPe _parent;
        public String name() { return name; }
        public long virtualSize() { return virtualSize; }
        public long virtualAddress() { return virtualAddress; }
        public long sizeOfRawData() { return sizeOfRawData; }
        public long pointerToRawData() { return pointerToRawData; }
        public long pointerToRelocations() { return pointerToRelocations; }
        public long pointerToLinenumbers() { return pointerToLinenumbers; }
        public int numberOfRelocations() { return numberOfRelocations; }
        public int numberOfLinenumbers() { return numberOfLinenumbers; }
        public long characteristics() { return characteristics; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe _parent() { return _parent; }
    }
    public static class MzPlaceholder extends KaitaiStruct {
        public static MzPlaceholder fromFile(String fileName) throws IOException {
            return new MzPlaceholder(new KaitaiStream(fileName));
        }

        public MzPlaceholder(KaitaiStream _io) {
            this(_io, null, null);
        }

        public MzPlaceholder(KaitaiStream _io, MicrosoftPe _parent) {
            this(_io, _parent, null);
        }

        public MzPlaceholder(KaitaiStream _io, MicrosoftPe _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.magic = this._io.ensureFixedContents(new byte[] { 77, 90 });
            this.data1 = this._io.readBytes(58);
            this.headerSize = this._io.readU4le();
        }
        private byte[] magic;
        private byte[] data1;
        private long headerSize;
        private MicrosoftPe _root;
        private MicrosoftPe _parent;
        public byte[] magic() { return magic; }
        public byte[] data1() { return data1; }
        public long headerSize() { return headerSize; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe _parent() { return _parent; }
    }
    public static class OptionalHeaderStd extends KaitaiStruct {
        public static OptionalHeaderStd fromFile(String fileName) throws IOException {
            return new OptionalHeaderStd(new KaitaiStream(fileName));
        }

        public OptionalHeaderStd(KaitaiStream _io) {
            this(_io, null, null);
        }

        public OptionalHeaderStd(KaitaiStream _io, MicrosoftPe.OptionalHeader _parent) {
            this(_io, _parent, null);
        }

        public OptionalHeaderStd(KaitaiStream _io, MicrosoftPe.OptionalHeader _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.format = MicrosoftPe.PeFormat.byId(this._io.readU2le());
            this.majorLinkerVersion = this._io.readU1();
            this.minorLinkerVersion = this._io.readU1();
            this.sizeOfCode = this._io.readU4le();
            this.sizeOfInitializedData = this._io.readU4le();
            this.sizeOfUninitializedData = this._io.readU4le();
            this.addressOfEntryPoint = this._io.readU4le();
            this.baseOfCode = this._io.readU4le();
            if (format() == MicrosoftPe.PeFormat.PE32) {
                this.baseOfData = this._io.readU4le();
            }
        }
        private PeFormat format;
        private int majorLinkerVersion;
        private int minorLinkerVersion;
        private long sizeOfCode;
        private long sizeOfInitializedData;
        private long sizeOfUninitializedData;
        private long addressOfEntryPoint;
        private long baseOfCode;
        private Long baseOfData;
        private MicrosoftPe _root;
        private MicrosoftPe.OptionalHeader _parent;
        public PeFormat format() { return format; }
        public int majorLinkerVersion() { return majorLinkerVersion; }
        public int minorLinkerVersion() { return minorLinkerVersion; }
        public long sizeOfCode() { return sizeOfCode; }
        public long sizeOfInitializedData() { return sizeOfInitializedData; }
        public long sizeOfUninitializedData() { return sizeOfUninitializedData; }
        public long addressOfEntryPoint() { return addressOfEntryPoint; }
        public long baseOfCode() { return baseOfCode; }
        public Long baseOfData() { return baseOfData; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe.OptionalHeader _parent() { return _parent; }
    }

    /**
     * @see "3.3. COFF File Header (Object and Image)"
     */
    public static class CoffHeader extends KaitaiStruct {
        public static CoffHeader fromFile(String fileName) throws IOException {
            return new CoffHeader(new KaitaiStream(fileName));
        }

        public enum MachineType {
            UNKNOWN(0),
            I386(332),
            R4000(358),
            WCEMIPSV2(361),
            SH3(418),
            SH3DSP(419),
            SH4(422),
            SH5(424),
            ARM(448),
            THUMB(450),
            ARMNT(452),
            AM33(467),
            POWERPC(496),
            POWERPCFP(497),
            IA64(512),
            MIPS16(614),
            MIPSFPU(870),
            MIPSFPU16(1126),
            EBC(3772),
            RISCV32(20530),
            RISCV64(20580),
            RISCV128(20776),
            AMD64(34404),
            M32R(36929);

            private final long id;
            MachineType(long id) { this.id = id; }
            public long id() { return id; }
            private static final Map<Long, MachineType> byId = new HashMap<Long, MachineType>(24);
            static {
                for (MachineType e : MachineType.values())
                    byId.put(e.id(), e);
            }
            public static MachineType byId(long id) { return byId.get(id); }
        }

        public CoffHeader(KaitaiStream _io) {
            this(_io, null, null);
        }

        public CoffHeader(KaitaiStream _io, MicrosoftPe _parent) {
            this(_io, _parent, null);
        }

        public CoffHeader(KaitaiStream _io, MicrosoftPe _parent, MicrosoftPe _root) {
            super(_io);
            this._parent = _parent;
            this._root = _root;
            _read();
        }
        private void _read() {
            this.machine = MachineType.byId(this._io.readU2le());
            this.numberOfSections = this._io.readU2le();
            this.timeDateStamp = this._io.readU4le();
            this.pointerToSymbolTable = this._io.readU4le();
            this.numberOfSymbols = this._io.readU4le();
            this.sizeOfOptionalHeader = this._io.readU2le();
            this.characteristics = this._io.readU2le();
        }
        private MachineType machine;
        private int numberOfSections;
        private long timeDateStamp;
        private long pointerToSymbolTable;
        private long numberOfSymbols;
        private int sizeOfOptionalHeader;
        private int characteristics;
        private MicrosoftPe _root;
        private MicrosoftPe _parent;
        public MachineType machine() { return machine; }
        public int numberOfSections() { return numberOfSections; }
        public long timeDateStamp() { return timeDateStamp; }
        public long pointerToSymbolTable() { return pointerToSymbolTable; }
        public long numberOfSymbols() { return numberOfSymbols; }
        public int sizeOfOptionalHeader() { return sizeOfOptionalHeader; }
        public int characteristics() { return characteristics; }
        public MicrosoftPe _root() { return _root; }
        public MicrosoftPe _parent() { return _parent; }
    }
    private MzPlaceholder mz1;
    private byte[] mz2;
    private byte[] peSignature;
    private CoffHeader coffHdr;
    private OptionalHeader optionalHdr;
    private ArrayList<Section> sections;
    private MicrosoftPe _root;
    private KaitaiStruct _parent;
    private byte[] _raw_optionalHdr;
    public MzPlaceholder mz1() { return mz1; }
    public byte[] mz2() { return mz2; }
    public byte[] peSignature() { return peSignature; }
    public CoffHeader coffHdr() { return coffHdr; }
    public OptionalHeader optionalHdr() { return optionalHdr; }
    public ArrayList<Section> sections() { return sections; }
    public MicrosoftPe _root() { return _root; }
    public KaitaiStruct _parent() { return _parent; }
    public byte[] _raw_optionalHdr() { return _raw_optionalHdr; }
}
