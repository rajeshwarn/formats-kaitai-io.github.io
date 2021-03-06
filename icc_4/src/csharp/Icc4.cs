// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

using System.Collections.Generic;

namespace Kaitai
{
    public partial class Icc4 : KaitaiStruct
    {
        public static Icc4 FromFile(string fileName)
        {
            return new Icc4(new KaitaiStream(fileName));
        }

        public Icc4(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
        {
            m_parent = p__parent;
            m_root = p__root ?? this;
            _read();
        }
        private void _read()
        {
            _header = new ProfileHeader(m_io, this, m_root);
            _tagTable = new TagTable(m_io, this, m_root);
        }
        public partial class U8Fixed8Number : KaitaiStruct
        {
            public static U8Fixed8Number FromFile(string fileName)
            {
                return new U8Fixed8Number(new KaitaiStream(fileName));
            }

            public U8Fixed8Number(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _number = m_io.ReadBytes(2);
            }
            private byte[] _number;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public byte[] Number { get { return _number; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class U16Fixed16Number : KaitaiStruct
        {
            public static U16Fixed16Number FromFile(string fileName)
            {
                return new U16Fixed16Number(new KaitaiStream(fileName));
            }

            public U16Fixed16Number(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _number = m_io.ReadBytes(4);
            }
            private byte[] _number;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public byte[] Number { get { return _number; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class StandardIlluminantEncoding : KaitaiStruct
        {
            public static StandardIlluminantEncoding FromFile(string fileName)
            {
                return new StandardIlluminantEncoding(new KaitaiStream(fileName));
            }


            public enum StandardIlluminantEncodings
            {
                Unknown = 0,
                D50 = 1,
                D65 = 2,
                D93 = 3,
                F2 = 4,
                D55 = 5,
                A = 6,
                EquiPower = 7,
                F8 = 8,
            }
            public StandardIlluminantEncoding(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _standardIlluminantEncoding = ((StandardIlluminantEncodings) m_io.ReadU4be());
            }
            private StandardIlluminantEncodings _standardIlluminantEncoding;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public StandardIlluminantEncodings StandardIlluminantEncoding { get { return _standardIlluminantEncoding; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class ProfileHeader : KaitaiStruct
        {
            public static ProfileHeader FromFile(string fileName)
            {
                return new ProfileHeader(new KaitaiStream(fileName));
            }


            public enum CmmSignatures
            {
                TheImagingFactoryCmm = 858931796,
                AgfaCmm = 1094929747,
                AdobeCmm = 1094992453,
                ColorGearCmm = 1128484179,
                LogosyncCmm = 1147629395,
                EfiCmm = 1162234144,
                ExactScanCmm = 1163411779,
                FujiFilmCmm = 1179000864,
                HarlequinRipCmm = 1212370253,
                HeidelbergCmm = 1212435744,
                KodakCmm = 1262701907,
                KonicaMinoltaCmm = 1296256324,
                DeviceLinkCmm = 1380404563,
                SampleIccCmm = 1397310275,
                MutohCmm = 1397311310,
                ToshibaCmm = 1413696845,
                ColorGearCmmLite = 1430471501,
                ColorGearCmmC = 1430474067,
                WindowsColorSystemCmm = 1464029984,
                WareToGoCmm = 1465141024,
                AppleCmm = 1634758764,
                ArgyllCmsCmm = 1634887532,
                LittleCmsCmm = 1818455411,
                ZoranCmm = 2053320752,
            }

            public enum PrimaryPlatforms
            {
                AppleComputerInc = 1095782476,
                MicrosoftCorporation = 1297303124,
                SiliconGraphicsInc = 1397180704,
                SunMicrosystems = 1398099543,
            }

            public enum ProfileClasses
            {
                AbstractProfile = 1633842036,
                DeviceLinkProfile = 1818848875,
                DisplayDeviceProfile = 1835955314,
                NamedColorProfile = 1852662636,
                OutputDeviceProfile = 1886549106,
                InputDeviceProfile = 1935896178,
                ColorSpaceProfile = 1936744803,
            }

            public enum RenderingIntents
            {
                Perceptual = 0,
                MediaRelativeColorimetric = 1,
                Saturation = 2,
                IccAbsoluteColorimetric = 3,
            }

            public enum DataColourSpaces
            {
                TwoColour = 843271250,
                ThreeColour = 860048466,
                FourColour = 876825682,
                FiveColour = 893602898,
                SixColour = 910380114,
                SevenColour = 927157330,
                EightColour = 943934546,
                NineColour = 960711762,
                TenColour = 1094929490,
                ElevenColour = 1111706706,
                TwelveColour = 1128483922,
                Cmy = 1129142560,
                Cmyk = 1129142603,
                ThirteenColour = 1145261138,
                FourteenColour = 1162038354,
                FifteenColour = 1178815570,
                Gray = 1196573017,
                Hls = 1212961568,
                Hsv = 1213421088,
                CielabOrPcslab = 1281450528,
                Cieluv = 1282766368,
                Rgb = 1380401696,
                NciexyzOrPcsxyz = 1482250784,
                Ycbcr = 1497588338,
                Cieyxy = 1501067552,
            }
            public ProfileHeader(KaitaiStream p__io, Icc4 p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _size = m_io.ReadU4be();
                _preferredCmmType = ((CmmSignatures) m_io.ReadU4be());
                _version = new VersionField(m_io, this, m_root);
                _deviceClass = ((ProfileClasses) m_io.ReadU4be());
                _colorSpace = ((DataColourSpaces) m_io.ReadU4be());
                _pcs = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytes(4));
                _creationDateTime = new DateTimeNumber(m_io, this, m_root);
                _fileSignature = m_io.EnsureFixedContents(new byte[] { 97, 99, 115, 112 });
                _primaryPlatform = ((PrimaryPlatforms) m_io.ReadU4be());
                _profileFlags = new ProfileFlags(m_io, this, m_root);
                _deviceManufacturer = new DeviceManufacturer(m_io, this, m_root);
                _deviceModel = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytes(4));
                _deviceAttributes = new DeviceAttributes(m_io, this, m_root);
                _renderingIntent = ((RenderingIntents) m_io.ReadU4be());
                _nciexyzValuesOfIlluminantOfPcs = new XyzNumber(m_io, this, m_root);
                _creator = new DeviceManufacturer(m_io, this, m_root);
                _identifier = m_io.ReadBytes(16);
                _reservedData = m_io.ReadBytes(28);
            }
            public partial class VersionField : KaitaiStruct
            {
                public static VersionField FromFile(string fileName)
                {
                    return new VersionField(new KaitaiStream(fileName));
                }

                public VersionField(KaitaiStream p__io, Icc4.ProfileHeader p__parent = null, Icc4 p__root = null) : base(p__io)
                {
                    m_parent = p__parent;
                    m_root = p__root;
                    _read();
                }
                private void _read()
                {
                    _major = m_io.EnsureFixedContents(new byte[] { 4 });
                    _minor = m_io.ReadBitsInt(4);
                    _bugFixLevel = m_io.ReadBitsInt(4);
                    m_io.AlignToByte();
                    _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0 });
                }
                private byte[] _major;
                private ulong _minor;
                private ulong _bugFixLevel;
                private byte[] _reserved;
                private Icc4 m_root;
                private Icc4.ProfileHeader m_parent;
                public byte[] Major { get { return _major; } }
                public ulong Minor { get { return _minor; } }
                public ulong BugFixLevel { get { return _bugFixLevel; } }
                public byte[] Reserved { get { return _reserved; } }
                public Icc4 M_Root { get { return m_root; } }
                public Icc4.ProfileHeader M_Parent { get { return m_parent; } }
            }
            public partial class ProfileFlags : KaitaiStruct
            {
                public static ProfileFlags FromFile(string fileName)
                {
                    return new ProfileFlags(new KaitaiStream(fileName));
                }

                public ProfileFlags(KaitaiStream p__io, Icc4.ProfileHeader p__parent = null, Icc4 p__root = null) : base(p__io)
                {
                    m_parent = p__parent;
                    m_root = p__root;
                    _read();
                }
                private void _read()
                {
                    _embeddedProfile = m_io.ReadBitsInt(1) != 0;
                    _profileCanBeUsedIndependentlyOfEmbeddedColourData = m_io.ReadBitsInt(1) != 0;
                    _otherFlags = m_io.ReadBitsInt(30);
                }
                private bool _embeddedProfile;
                private bool _profileCanBeUsedIndependentlyOfEmbeddedColourData;
                private ulong _otherFlags;
                private Icc4 m_root;
                private Icc4.ProfileHeader m_parent;
                public bool EmbeddedProfile { get { return _embeddedProfile; } }
                public bool ProfileCanBeUsedIndependentlyOfEmbeddedColourData { get { return _profileCanBeUsedIndependentlyOfEmbeddedColourData; } }
                public ulong OtherFlags { get { return _otherFlags; } }
                public Icc4 M_Root { get { return m_root; } }
                public Icc4.ProfileHeader M_Parent { get { return m_parent; } }
            }
            private uint _size;
            private CmmSignatures _preferredCmmType;
            private VersionField _version;
            private ProfileClasses _deviceClass;
            private DataColourSpaces _colorSpace;
            private string _pcs;
            private DateTimeNumber _creationDateTime;
            private byte[] _fileSignature;
            private PrimaryPlatforms _primaryPlatform;
            private ProfileFlags _profileFlags;
            private DeviceManufacturer _deviceManufacturer;
            private string _deviceModel;
            private DeviceAttributes _deviceAttributes;
            private RenderingIntents _renderingIntent;
            private XyzNumber _nciexyzValuesOfIlluminantOfPcs;
            private DeviceManufacturer _creator;
            private byte[] _identifier;
            private byte[] _reservedData;
            private Icc4 m_root;
            private Icc4 m_parent;
            public uint Size { get { return _size; } }
            public CmmSignatures PreferredCmmType { get { return _preferredCmmType; } }
            public VersionField Version { get { return _version; } }
            public ProfileClasses DeviceClass { get { return _deviceClass; } }
            public DataColourSpaces ColorSpace { get { return _colorSpace; } }
            public string Pcs { get { return _pcs; } }
            public DateTimeNumber CreationDateTime { get { return _creationDateTime; } }
            public byte[] FileSignature { get { return _fileSignature; } }
            public PrimaryPlatforms PrimaryPlatform { get { return _primaryPlatform; } }
            public ProfileFlags ProfileFlags { get { return _profileFlags; } }
            public DeviceManufacturer DeviceManufacturer { get { return _deviceManufacturer; } }
            public string DeviceModel { get { return _deviceModel; } }
            public DeviceAttributes DeviceAttributes { get { return _deviceAttributes; } }
            public RenderingIntents RenderingIntent { get { return _renderingIntent; } }
            public XyzNumber NciexyzValuesOfIlluminantOfPcs { get { return _nciexyzValuesOfIlluminantOfPcs; } }
            public DeviceManufacturer Creator { get { return _creator; } }
            public byte[] Identifier { get { return _identifier; } }
            public byte[] ReservedData { get { return _reservedData; } }
            public Icc4 M_Root { get { return m_root; } }
            public Icc4 M_Parent { get { return m_parent; } }
        }
        public partial class XyzNumber : KaitaiStruct
        {
            public static XyzNumber FromFile(string fileName)
            {
                return new XyzNumber(new KaitaiStream(fileName));
            }

            public XyzNumber(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _x = m_io.ReadBytes(4);
                _y = m_io.ReadBytes(4);
                _z = m_io.ReadBytes(4);
            }
            private byte[] _x;
            private byte[] _y;
            private byte[] _z;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public byte[] X { get { return _x; } }
            public byte[] Y { get { return _y; } }
            public byte[] Z { get { return _z; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class DateTimeNumber : KaitaiStruct
        {
            public static DateTimeNumber FromFile(string fileName)
            {
                return new DateTimeNumber(new KaitaiStream(fileName));
            }

            public DateTimeNumber(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _year = m_io.ReadU2be();
                _month = m_io.ReadU2be();
                _day = m_io.ReadU2be();
                _hour = m_io.ReadU2be();
                _minute = m_io.ReadU2be();
                _second = m_io.ReadU2be();
            }
            private ushort _year;
            private ushort _month;
            private ushort _day;
            private ushort _hour;
            private ushort _minute;
            private ushort _second;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public ushort Year { get { return _year; } }
            public ushort Month { get { return _month; } }
            public ushort Day { get { return _day; } }
            public ushort Hour { get { return _hour; } }
            public ushort Minute { get { return _minute; } }
            public ushort Second { get { return _second; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class Response16Number : KaitaiStruct
        {
            public static Response16Number FromFile(string fileName)
            {
                return new Response16Number(new KaitaiStream(fileName));
            }

            public Response16Number(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _number = m_io.ReadU4be();
                _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0 });
                _measurementValue = new S15Fixed16Number(m_io, this, m_root);
            }
            private uint _number;
            private byte[] _reserved;
            private S15Fixed16Number _measurementValue;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public uint Number { get { return _number; } }
            public byte[] Reserved { get { return _reserved; } }
            public S15Fixed16Number MeasurementValue { get { return _measurementValue; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class U1Fixed15Number : KaitaiStruct
        {
            public static U1Fixed15Number FromFile(string fileName)
            {
                return new U1Fixed15Number(new KaitaiStream(fileName));
            }

            public U1Fixed15Number(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _number = m_io.ReadBytes(2);
            }
            private byte[] _number;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public byte[] Number { get { return _number; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class TagTable : KaitaiStruct
        {
            public static TagTable FromFile(string fileName)
            {
                return new TagTable(new KaitaiStream(fileName));
            }

            public TagTable(KaitaiStream p__io, Icc4 p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _tagCount = m_io.ReadU4be();
                _tags = new List<TagDefinition>((int) (TagCount));
                for (var i = 0; i < TagCount; i++)
                {
                    _tags.Add(new TagDefinition(m_io, this, m_root));
                }
            }
            public partial class TagDefinition : KaitaiStruct
            {
                public static TagDefinition FromFile(string fileName)
                {
                    return new TagDefinition(new KaitaiStream(fileName));
                }


                public enum TagSignatures
                {
                    AToB0 = 1093812784,
                    AToB1 = 1093812785,
                    AToB2 = 1093812786,
                    BToA0 = 1110589744,
                    BToA1 = 1110589745,
                    BToA2 = 1110589746,
                    BToD0 = 1110590512,
                    BToD1 = 1110590513,
                    BToD2 = 1110590514,
                    BToD3 = 1110590515,
                    DToB0 = 1144144432,
                    DToB1 = 1144144433,
                    DToB2 = 1144144434,
                    DToB3 = 1144144435,
                    BlueTrc = 1649693251,
                    BlueMatrixColumn = 1649957210,
                    CalibrationDateTime = 1667329140,
                    ChromaticAdaptation = 1667785060,
                    Chromaticity = 1667789421,
                    ColorimetricIntentImageState = 1667852659,
                    ColorantTableOut = 1668050804,
                    ColorantOrder = 1668051567,
                    ColorantTable = 1668051572,
                    Copyright = 1668313716,
                    ProfileDescription = 1684370275,
                    DeviceModelDesc = 1684890724,
                    DeviceMfgDesc = 1684893284,
                    GreenTrc = 1733579331,
                    GreenMatrixColumn = 1733843290,
                    Gamut = 1734438260,
                    GrayTrc = 1800688195,
                    Luminance = 1819635049,
                    Measurement = 1835360627,
                    NamedColor2 = 1852009522,
                    Preview0 = 1886545200,
                    Preview1 = 1886545201,
                    Preview2 = 1886545202,
                    ProfileSequence = 1886610801,
                    ProfileSequenceIdentifier = 1886611812,
                    RedTrc = 1918128707,
                    RedMatrixColumn = 1918392666,
                    OutputResponse = 1919251312,
                    PerceptualRenderingIntentGamut = 1919510320,
                    SaturationRenderingIntentGamut = 1919510322,
                    CharTarget = 1952543335,
                    Technology = 1952801640,
                    ViewingConditions = 1986618743,
                    ViewingCondDesc = 1987405156,
                    MediaWhitePoint = 2004119668,
                }

                public enum TagTypeSignatures
                {
                    XyzType = 1482250784,
                    ColorantTableType = 1668051572,
                    CurveType = 1668641398,
                    DataType = 1684108385,
                    DateTimeType = 1685350765,
                    MultiFunctionAToBTableType = 1832993312,
                    MultiFunctionBToATableType = 1833058592,
                    MeasurementType = 1835360627,
                    MultiFunctionTableWithOneBytePrecisionType = 1835430961,
                    MultiFunctionTableWithTwoBytePrecisionType = 1835430962,
                    MultiLocalizedUnicodeType = 1835824483,
                    MultiProcessElementsType = 1836082548,
                    NamedColor2Type = 1852009522,
                    ParametricCurveType = 1885434465,
                    ProfileSequenceDescType = 1886610801,
                    ProfileSequenceIdentifierType = 1886611812,
                    ResponseCurveSet16Type = 1919120178,
                    S15Fixed16ArrayType = 1936077618,
                    SignatureType = 1936287520,
                    TextType = 1952807028,
                    U16Fixed16ArrayType = 1969632050,
                    UInt8ArrayType = 1969827896,
                    UInt16ArrayType = 1969828150,
                    UInt32ArrayType = 1969828658,
                    UInt64ArrayType = 1969829428,
                    ViewingConditionsType = 1986618743,
                }

                public enum MultiProcessElementsTypes
                {
                    BacsElementType = 1648444243,
                    ClutElementType = 1668052340,
                    OneDimensionalCurvesType = 1668641382,
                    EacsElementType = 1698775891,
                    MatrixElementType = 1835103334,
                    CurveSetElementTableType = 1835428980,
                    FormulaCurveSegmentsType = 1885434470,
                    SampledCurveSegmentType = 1935764838,
                }
                public TagDefinition(KaitaiStream p__io, Icc4.TagTable p__parent = null, Icc4 p__root = null) : base(p__io)
                {
                    m_parent = p__parent;
                    m_root = p__root;
                    f_tagDataElement = false;
                    _read();
                }
                private void _read()
                {
                    _tagSignature = ((TagSignatures) m_io.ReadU4be());
                    _offsetToDataElement = m_io.ReadU4be();
                    _sizeOfDataElement = m_io.ReadU4be();
                }
                public partial class BlueMatrixColumnTag : KaitaiStruct
                {
                    public static BlueMatrixColumnTag FromFile(string fileName)
                    {
                        return new BlueMatrixColumnTag(new KaitaiStream(fileName));
                    }

                    public BlueMatrixColumnTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.XyzType: {
                            _tagData = new XyzType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private XyzType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public XyzType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class DeviceMfgDescTag : KaitaiStruct
                {
                    public static DeviceMfgDescTag FromFile(string fileName)
                    {
                        return new DeviceMfgDescTag(new KaitaiStream(fileName));
                    }

                    public DeviceMfgDescTag(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiLocalizedUnicodeType: {
                            _tagData = new MultiLocalizedUnicodeType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiLocalizedUnicodeType _tagData;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiLocalizedUnicodeType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class NamedColor2Type : KaitaiStruct
                {
                    public static NamedColor2Type FromFile(string fileName)
                    {
                        return new NamedColor2Type(new KaitaiStream(fileName));
                    }

                    public NamedColor2Type(KaitaiStream p__io, Icc4.TagTable.TagDefinition.NamedColor2Tag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _vendorSpecificFlag = m_io.ReadU4be();
                        _countOfNamedColours = m_io.ReadU4be();
                        _numberOfDeviceCoordinatesForEachNamedColour = m_io.ReadU4be();
                        _prefixForEachColourName = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytesTerm(0, false, true, true));
                        _prefixForEachColourNamePadding = new List<byte[]>((int) ((32 - PrefixForEachColourName.Length)));
                        for (var i = 0; i < (32 - PrefixForEachColourName.Length); i++)
                        {
                            _prefixForEachColourNamePadding = m_io.EnsureFixedContents(new byte[] { 0 });
                        }
                        _suffixForEachColourName = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytesTerm(0, false, true, true));
                        _suffixForEachColourNamePadding = new List<byte[]>((int) ((32 - SuffixForEachColourName.Length)));
                        for (var i = 0; i < (32 - SuffixForEachColourName.Length); i++)
                        {
                            _suffixForEachColourNamePadding = m_io.EnsureFixedContents(new byte[] { 0 });
                        }
                        _namedColourDefinitions = new List<NamedColourDefinition>((int) (CountOfNamedColours));
                        for (var i = 0; i < CountOfNamedColours; i++)
                        {
                            _namedColourDefinitions.Add(new NamedColourDefinition(m_io, this, m_root));
                        }
                    }
                    public partial class NamedColourDefinition : KaitaiStruct
                    {
                        public static NamedColourDefinition FromFile(string fileName)
                        {
                            return new NamedColourDefinition(new KaitaiStream(fileName));
                        }

                        public NamedColourDefinition(KaitaiStream p__io, Icc4.TagTable.TagDefinition.NamedColor2Type p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _rootName = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytesTerm(0, false, true, true));
                            _rootNamePadding = new List<byte[]>((int) ((32 - RootName.Length)));
                            for (var i = 0; i < (32 - RootName.Length); i++)
                            {
                                _rootNamePadding = m_io.EnsureFixedContents(new byte[] { 0 });
                            }
                            _pcsCoordinates = m_io.ReadBytes(6);
                            if (M_Parent.NumberOfDeviceCoordinatesForEachNamedColour > 0) {
                                _deviceCoordinates = new List<ushort>((int) (M_Parent.CountOfNamedColours));
                                for (var i = 0; i < M_Parent.CountOfNamedColours; i++)
                                {
                                    _deviceCoordinates.Add(m_io.ReadU2be());
                                }
                            }
                        }
                        private string _rootName;
                        private List<byte[]> _rootNamePadding;
                        private byte[] _pcsCoordinates;
                        private List<ushort> _deviceCoordinates;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.NamedColor2Type m_parent;
                        public string RootName { get { return _rootName; } }
                        public List<byte[]> RootNamePadding { get { return _rootNamePadding; } }
                        public byte[] PcsCoordinates { get { return _pcsCoordinates; } }
                        public List<ushort> DeviceCoordinates { get { return _deviceCoordinates; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.NamedColor2Type M_Parent { get { return m_parent; } }
                    }
                    private byte[] _reserved;
                    private uint _vendorSpecificFlag;
                    private uint _countOfNamedColours;
                    private uint _numberOfDeviceCoordinatesForEachNamedColour;
                    private string _prefixForEachColourName;
                    private List<byte[]> _prefixForEachColourNamePadding;
                    private string _suffixForEachColourName;
                    private List<byte[]> _suffixForEachColourNamePadding;
                    private List<NamedColourDefinition> _namedColourDefinitions;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.NamedColor2Tag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public uint VendorSpecificFlag { get { return _vendorSpecificFlag; } }
                    public uint CountOfNamedColours { get { return _countOfNamedColours; } }
                    public uint NumberOfDeviceCoordinatesForEachNamedColour { get { return _numberOfDeviceCoordinatesForEachNamedColour; } }
                    public string PrefixForEachColourName { get { return _prefixForEachColourName; } }
                    public List<byte[]> PrefixForEachColourNamePadding { get { return _prefixForEachColourNamePadding; } }
                    public string SuffixForEachColourName { get { return _suffixForEachColourName; } }
                    public List<byte[]> SuffixForEachColourNamePadding { get { return _suffixForEachColourNamePadding; } }
                    public List<NamedColourDefinition> NamedColourDefinitions { get { return _namedColourDefinitions; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.NamedColor2Tag M_Parent { get { return m_parent; } }
                }
                public partial class ViewingConditionsTag : KaitaiStruct
                {
                    public static ViewingConditionsTag FromFile(string fileName)
                    {
                        return new ViewingConditionsTag(new KaitaiStream(fileName));
                    }

                    public ViewingConditionsTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ViewingConditionsType: {
                            _tagData = new ViewingConditionsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ViewingConditionsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ViewingConditionsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class BlueTrcTag : KaitaiStruct
                {
                    public static BlueTrcTag FromFile(string fileName)
                    {
                        return new BlueTrcTag(new KaitaiStream(fileName));
                    }

                    public BlueTrcTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.CurveType: {
                            _tagData = new CurveType(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ParametricCurveType: {
                            _tagData = new ParametricCurveType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ResponseCurveSet16Type : KaitaiStruct
                {
                    public static ResponseCurveSet16Type FromFile(string fileName)
                    {
                        return new ResponseCurveSet16Type(new KaitaiStream(fileName));
                    }

                    public ResponseCurveSet16Type(KaitaiStream p__io, Icc4.TagTable.TagDefinition.OutputResponseTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfChannels = m_io.ReadU2be();
                        _countOfMeasurementTypes = m_io.ReadU2be();
                        _responseCurveStructureOffsets = new List<uint>((int) (CountOfMeasurementTypes));
                        for (var i = 0; i < CountOfMeasurementTypes; i++)
                        {
                            _responseCurveStructureOffsets.Add(m_io.ReadU4be());
                        }
                        _responseCurveStructures = m_io.ReadBytesFull();
                    }
                    private byte[] _reserved;
                    private ushort _numberOfChannels;
                    private ushort _countOfMeasurementTypes;
                    private List<uint> _responseCurveStructureOffsets;
                    private byte[] _responseCurveStructures;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.OutputResponseTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public ushort NumberOfChannels { get { return _numberOfChannels; } }
                    public ushort CountOfMeasurementTypes { get { return _countOfMeasurementTypes; } }
                    public List<uint> ResponseCurveStructureOffsets { get { return _responseCurveStructureOffsets; } }
                    public byte[] ResponseCurveStructures { get { return _responseCurveStructures; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.OutputResponseTag M_Parent { get { return m_parent; } }
                }
                public partial class CurveType : KaitaiStruct
                {
                    public static CurveType FromFile(string fileName)
                    {
                        return new CurveType(new KaitaiStream(fileName));
                    }

                    public CurveType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfEntries = m_io.ReadU4be();
                        if (NumberOfEntries > 1) {
                            _curveValues = new List<uint>((int) (NumberOfEntries));
                            for (var i = 0; i < NumberOfEntries; i++)
                            {
                                _curveValues.Add(m_io.ReadU4be());
                            }
                        }
                        if (NumberOfEntries == 1) {
                            _curveValue = m_io.ReadU1();
                        }
                    }
                    private byte[] _reserved;
                    private uint _numberOfEntries;
                    private List<uint> _curveValues;
                    private byte? _curveValue;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public uint NumberOfEntries { get { return _numberOfEntries; } }
                    public List<uint> CurveValues { get { return _curveValues; } }
                    public byte? CurveValue { get { return _curveValue; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class SaturationRenderingIntentGamutTag : KaitaiStruct
                {
                    public static SaturationRenderingIntentGamutTag FromFile(string fileName)
                    {
                        return new SaturationRenderingIntentGamutTag(new KaitaiStream(fileName));
                    }

                    public SaturationRenderingIntentGamutTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.SignatureType: {
                            _tagData = new SignatureType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private SignatureType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public SignatureType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class XyzType : KaitaiStruct
                {
                    public static XyzType FromFile(string fileName)
                    {
                        return new XyzType(new KaitaiStream(fileName));
                    }

                    public XyzType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _values = new List<XyzNumber>();
                        {
                            var i = 0;
                            while (!m_io.IsEof) {
                                _values.Add(new XyzNumber(m_io, this, m_root));
                                i++;
                            }
                        }
                    }
                    private byte[] _reserved;
                    private List<XyzNumber> _values;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public List<XyzNumber> Values { get { return _values; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class Lut8Type : KaitaiStruct
                {
                    public static Lut8Type FromFile(string fileName)
                    {
                        return new Lut8Type(new KaitaiStream(fileName));
                    }

                    public Lut8Type(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfInputChannels = m_io.ReadU1();
                        _numberOfOutputChannels = m_io.ReadU1();
                        _numberOfClutGridPoints = m_io.ReadU1();
                        _padding = m_io.EnsureFixedContents(new byte[] { 0 });
                        _encodedEParameters = new List<int>((int) (9));
                        for (var i = 0; i < 9; i++)
                        {
                            _encodedEParameters.Add(m_io.ReadS4be());
                        }
                        _numberOfInputTableEntries = m_io.ReadU4be();
                        _numberOfOutputTableEntries = m_io.ReadU4be();
                        _inputTables = m_io.ReadBytes((256 * NumberOfInputChannels));
                        _clutValues = m_io.ReadBytes(((NumberOfClutGridPoints ^ NumberOfInputChannels) * NumberOfOutputChannels));
                        _outputTables = m_io.ReadBytes((256 * NumberOfOutputChannels));
                    }
                    private byte[] _reserved;
                    private byte _numberOfInputChannels;
                    private byte _numberOfOutputChannels;
                    private byte _numberOfClutGridPoints;
                    private byte[] _padding;
                    private List<int> _encodedEParameters;
                    private uint _numberOfInputTableEntries;
                    private uint _numberOfOutputTableEntries;
                    private byte[] _inputTables;
                    private byte[] _clutValues;
                    private byte[] _outputTables;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public byte NumberOfInputChannels { get { return _numberOfInputChannels; } }
                    public byte NumberOfOutputChannels { get { return _numberOfOutputChannels; } }
                    public byte NumberOfClutGridPoints { get { return _numberOfClutGridPoints; } }
                    public byte[] Padding { get { return _padding; } }
                    public List<int> EncodedEParameters { get { return _encodedEParameters; } }
                    public uint NumberOfInputTableEntries { get { return _numberOfInputTableEntries; } }
                    public uint NumberOfOutputTableEntries { get { return _numberOfOutputTableEntries; } }
                    public byte[] InputTables { get { return _inputTables; } }
                    public byte[] ClutValues { get { return _clutValues; } }
                    public byte[] OutputTables { get { return _outputTables; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class BToA2Tag : KaitaiStruct
                {
                    public static BToA2Tag FromFile(string fileName)
                    {
                        return new BToA2Tag(new KaitaiStream(fileName));
                    }

                    public BToA2Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionBToATableType: {
                            _tagData = new LutBToAType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class LutAToBType : KaitaiStruct
                {
                    public static LutAToBType FromFile(string fileName)
                    {
                        return new LutAToBType(new KaitaiStream(fileName));
                    }

                    public LutAToBType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfInputChannels = m_io.ReadU1();
                        _numberOfOutputChannels = m_io.ReadU1();
                        _padding = m_io.EnsureFixedContents(new byte[] { 0, 0 });
                        _offsetToFirstBCurve = m_io.ReadU4be();
                        _offsetToMatrix = m_io.ReadU4be();
                        _offsetToFirstMCurve = m_io.ReadU4be();
                        _offsetToClut = m_io.ReadU4be();
                        _offsetToFirstACurve = m_io.ReadU4be();
                        _data = m_io.ReadBytesFull();
                    }
                    private byte[] _reserved;
                    private byte _numberOfInputChannels;
                    private byte _numberOfOutputChannels;
                    private byte[] _padding;
                    private uint _offsetToFirstBCurve;
                    private uint _offsetToMatrix;
                    private uint _offsetToFirstMCurve;
                    private uint _offsetToClut;
                    private uint _offsetToFirstACurve;
                    private byte[] _data;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public byte NumberOfInputChannels { get { return _numberOfInputChannels; } }
                    public byte NumberOfOutputChannels { get { return _numberOfOutputChannels; } }
                    public byte[] Padding { get { return _padding; } }
                    public uint OffsetToFirstBCurve { get { return _offsetToFirstBCurve; } }
                    public uint OffsetToMatrix { get { return _offsetToMatrix; } }
                    public uint OffsetToFirstMCurve { get { return _offsetToFirstMCurve; } }
                    public uint OffsetToClut { get { return _offsetToClut; } }
                    public uint OffsetToFirstACurve { get { return _offsetToFirstACurve; } }
                    public byte[] Data { get { return _data; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class BToA0Tag : KaitaiStruct
                {
                    public static BToA0Tag FromFile(string fileName)
                    {
                        return new BToA0Tag(new KaitaiStream(fileName));
                    }

                    public BToA0Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionBToATableType: {
                            _tagData = new LutBToAType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class MediaWhitePointTag : KaitaiStruct
                {
                    public static MediaWhitePointTag FromFile(string fileName)
                    {
                        return new MediaWhitePointTag(new KaitaiStream(fileName));
                    }

                    public MediaWhitePointTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.XyzType: {
                            _tagData = new XyzType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private XyzType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public XyzType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class Lut16Type : KaitaiStruct
                {
                    public static Lut16Type FromFile(string fileName)
                    {
                        return new Lut16Type(new KaitaiStream(fileName));
                    }

                    public Lut16Type(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfInputChannels = m_io.ReadU1();
                        _numberOfOutputChannels = m_io.ReadU1();
                        _numberOfClutGridPoints = m_io.ReadU1();
                        _padding = m_io.EnsureFixedContents(new byte[] { 0 });
                        _encodedEParameters = new List<int>((int) (9));
                        for (var i = 0; i < 9; i++)
                        {
                            _encodedEParameters.Add(m_io.ReadS4be());
                        }
                        _numberOfInputTableEntries = m_io.ReadU4be();
                        _numberOfOutputTableEntries = m_io.ReadU4be();
                        _inputTables = m_io.ReadBytes(((2 * NumberOfInputChannels) * NumberOfInputTableEntries));
                        _clutValues = m_io.ReadBytes(((2 * (NumberOfClutGridPoints ^ NumberOfInputChannels)) * NumberOfOutputChannels));
                        _outputTables = m_io.ReadBytes(((2 * NumberOfOutputChannels) * NumberOfOutputTableEntries));
                    }
                    private byte[] _reserved;
                    private byte _numberOfInputChannels;
                    private byte _numberOfOutputChannels;
                    private byte _numberOfClutGridPoints;
                    private byte[] _padding;
                    private List<int> _encodedEParameters;
                    private uint _numberOfInputTableEntries;
                    private uint _numberOfOutputTableEntries;
                    private byte[] _inputTables;
                    private byte[] _clutValues;
                    private byte[] _outputTables;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public byte NumberOfInputChannels { get { return _numberOfInputChannels; } }
                    public byte NumberOfOutputChannels { get { return _numberOfOutputChannels; } }
                    public byte NumberOfClutGridPoints { get { return _numberOfClutGridPoints; } }
                    public byte[] Padding { get { return _padding; } }
                    public List<int> EncodedEParameters { get { return _encodedEParameters; } }
                    public uint NumberOfInputTableEntries { get { return _numberOfInputTableEntries; } }
                    public uint NumberOfOutputTableEntries { get { return _numberOfOutputTableEntries; } }
                    public byte[] InputTables { get { return _inputTables; } }
                    public byte[] ClutValues { get { return _clutValues; } }
                    public byte[] OutputTables { get { return _outputTables; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class PerceptualRenderingIntentGamutTag : KaitaiStruct
                {
                    public static PerceptualRenderingIntentGamutTag FromFile(string fileName)
                    {
                        return new PerceptualRenderingIntentGamutTag(new KaitaiStream(fileName));
                    }

                    public PerceptualRenderingIntentGamutTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.SignatureType: {
                            _tagData = new SignatureType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private SignatureType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public SignatureType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class U16Fixed16ArrayType : KaitaiStruct
                {
                    public static U16Fixed16ArrayType FromFile(string fileName)
                    {
                        return new U16Fixed16ArrayType(new KaitaiStream(fileName));
                    }

                    public U16Fixed16ArrayType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _values = new List<U16Fixed16Number>();
                        {
                            var i = 0;
                            while (!m_io.IsEof) {
                                _values.Add(new U16Fixed16Number(m_io, this, m_root));
                                i++;
                            }
                        }
                    }
                    private byte[] _reserved;
                    private List<U16Fixed16Number> _values;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public List<U16Fixed16Number> Values { get { return _values; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class ColorantTableOutTag : KaitaiStruct
                {
                    public static ColorantTableOutTag FromFile(string fileName)
                    {
                        return new ColorantTableOutTag(new KaitaiStream(fileName));
                    }

                    public ColorantTableOutTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ColorantTableType: {
                            _tagData = new ColorantTableType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ColorantTableType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ColorantTableType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class MeasurementTag : KaitaiStruct
                {
                    public static MeasurementTag FromFile(string fileName)
                    {
                        return new MeasurementTag(new KaitaiStream(fileName));
                    }

                    public MeasurementTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MeasurementType: {
                            _tagData = new MeasurementType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MeasurementType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MeasurementType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ProfileSequenceTag : KaitaiStruct
                {
                    public static ProfileSequenceTag FromFile(string fileName)
                    {
                        return new ProfileSequenceTag(new KaitaiStream(fileName));
                    }

                    public ProfileSequenceTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ProfileSequenceDescType: {
                            _tagData = new ProfileSequenceDescType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ProfileSequenceDescType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ProfileSequenceDescType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class TechnologyTag : KaitaiStruct
                {
                    public static TechnologyTag FromFile(string fileName)
                    {
                        return new TechnologyTag(new KaitaiStream(fileName));
                    }

                    public TechnologyTag(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.SignatureType: {
                            _tagData = new SignatureType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private SignatureType _tagData;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public SignatureType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class AToB0Tag : KaitaiStruct
                {
                    public static AToB0Tag FromFile(string fileName)
                    {
                        return new AToB0Tag(new KaitaiStream(fileName));
                    }

                    public AToB0Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionAToBTableType: {
                            _tagData = new LutAToBType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class DToB0Tag : KaitaiStruct
                {
                    public static DToB0Tag FromFile(string fileName)
                    {
                        return new DToB0Tag(new KaitaiStream(fileName));
                    }

                    public DToB0Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class OutputResponseTag : KaitaiStruct
                {
                    public static OutputResponseTag FromFile(string fileName)
                    {
                        return new OutputResponseTag(new KaitaiStream(fileName));
                    }

                    public OutputResponseTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ResponseCurveSet16Type: {
                            _tagData = new ResponseCurveSet16Type(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ResponseCurveSet16Type _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ResponseCurveSet16Type TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class GreenMatrixColumnTag : KaitaiStruct
                {
                    public static GreenMatrixColumnTag FromFile(string fileName)
                    {
                        return new GreenMatrixColumnTag(new KaitaiStream(fileName));
                    }

                    public GreenMatrixColumnTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.XyzType: {
                            _tagData = new XyzType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private XyzType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public XyzType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ProfileDescriptionTag : KaitaiStruct
                {
                    public static ProfileDescriptionTag FromFile(string fileName)
                    {
                        return new ProfileDescriptionTag(new KaitaiStream(fileName));
                    }

                    public ProfileDescriptionTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiLocalizedUnicodeType: {
                            _tagData = new MultiLocalizedUnicodeType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiLocalizedUnicodeType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiLocalizedUnicodeType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class Preview1Tag : KaitaiStruct
                {
                    public static Preview1Tag FromFile(string fileName)
                    {
                        return new Preview1Tag(new KaitaiStream(fileName));
                    }

                    public Preview1Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionBToATableType: {
                            _tagData = new LutBToAType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class RedTrcTag : KaitaiStruct
                {
                    public static RedTrcTag FromFile(string fileName)
                    {
                        return new RedTrcTag(new KaitaiStream(fileName));
                    }

                    public RedTrcTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.CurveType: {
                            _tagData = new CurveType(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ParametricCurveType: {
                            _tagData = new ParametricCurveType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class BToD0Tag : KaitaiStruct
                {
                    public static BToD0Tag FromFile(string fileName)
                    {
                        return new BToD0Tag(new KaitaiStream(fileName));
                    }

                    public BToD0Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class DToB1Tag : KaitaiStruct
                {
                    public static DToB1Tag FromFile(string fileName)
                    {
                        return new DToB1Tag(new KaitaiStream(fileName));
                    }

                    public DToB1Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class BToA1Tag : KaitaiStruct
                {
                    public static BToA1Tag FromFile(string fileName)
                    {
                        return new BToA1Tag(new KaitaiStream(fileName));
                    }

                    public BToA1Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionBToATableType: {
                            _tagData = new LutBToAType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ParametricCurveType : KaitaiStruct
                {
                    public static ParametricCurveType FromFile(string fileName)
                    {
                        return new ParametricCurveType(new KaitaiStream(fileName));
                    }


                    public enum ParametricCurveTypeFunctions
                    {
                        YEqualsXToPowerOfG = 0,
                        Cie1221996 = 1,
                        Iec619663 = 2,
                        Iec6196621 = 3,
                        YEqualsObAxPlusBCbToPowerOfGPlusC = 4,
                    }
                    public ParametricCurveType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _functionType = ((ParametricCurveTypeFunctions) m_io.ReadU2be());
                        _reserved2 = m_io.EnsureFixedContents(new byte[] { 0, 0 });
                        switch (FunctionType) {
                        case ParametricCurveTypeFunctions.YEqualsXToPowerOfG: {
                            _parameters = new ParamsYEqualsXToPowerOfG(m_io, this, m_root);
                            break;
                        }
                        case ParametricCurveTypeFunctions.Cie1221996: {
                            _parameters = new ParamsCie1221996(m_io, this, m_root);
                            break;
                        }
                        case ParametricCurveTypeFunctions.Iec6196621: {
                            _parameters = new ParamsIec6196621(m_io, this, m_root);
                            break;
                        }
                        case ParametricCurveTypeFunctions.YEqualsObAxPlusBCbToPowerOfGPlusC: {
                            _parameters = new ParamsYEqualsObAxPlusBCbToPowerOfGPlusC(m_io, this, m_root);
                            break;
                        }
                        case ParametricCurveTypeFunctions.Iec619663: {
                            _parameters = new ParamsIec619663(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    public partial class ParamsIec619663 : KaitaiStruct
                    {
                        public static ParamsIec619663 FromFile(string fileName)
                        {
                            return new ParamsIec619663(new KaitaiStream(fileName));
                        }

                        public ParamsIec619663(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ParametricCurveType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _g = m_io.ReadS4be();
                            _a = m_io.ReadS4be();
                            _b = m_io.ReadS4be();
                            _c = m_io.ReadS4be();
                        }
                        private int _g;
                        private int _a;
                        private int _b;
                        private int _c;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ParametricCurveType m_parent;
                        public int G { get { return _g; } }
                        public int A { get { return _a; } }
                        public int B { get { return _b; } }
                        public int C { get { return _c; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ParametricCurveType M_Parent { get { return m_parent; } }
                    }
                    public partial class ParamsIec6196621 : KaitaiStruct
                    {
                        public static ParamsIec6196621 FromFile(string fileName)
                        {
                            return new ParamsIec6196621(new KaitaiStream(fileName));
                        }

                        public ParamsIec6196621(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ParametricCurveType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _g = m_io.ReadS4be();
                            _a = m_io.ReadS4be();
                            _b = m_io.ReadS4be();
                            _c = m_io.ReadS4be();
                            _d = m_io.ReadS4be();
                        }
                        private int _g;
                        private int _a;
                        private int _b;
                        private int _c;
                        private int _d;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ParametricCurveType m_parent;
                        public int G { get { return _g; } }
                        public int A { get { return _a; } }
                        public int B { get { return _b; } }
                        public int C { get { return _c; } }
                        public int D { get { return _d; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ParametricCurveType M_Parent { get { return m_parent; } }
                    }
                    public partial class ParamsYEqualsXToPowerOfG : KaitaiStruct
                    {
                        public static ParamsYEqualsXToPowerOfG FromFile(string fileName)
                        {
                            return new ParamsYEqualsXToPowerOfG(new KaitaiStream(fileName));
                        }

                        public ParamsYEqualsXToPowerOfG(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ParametricCurveType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _g = m_io.ReadS4be();
                        }
                        private int _g;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ParametricCurveType m_parent;
                        public int G { get { return _g; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ParametricCurveType M_Parent { get { return m_parent; } }
                    }
                    public partial class ParamsYEqualsObAxPlusBCbToPowerOfGPlusC : KaitaiStruct
                    {
                        public static ParamsYEqualsObAxPlusBCbToPowerOfGPlusC FromFile(string fileName)
                        {
                            return new ParamsYEqualsObAxPlusBCbToPowerOfGPlusC(new KaitaiStream(fileName));
                        }

                        public ParamsYEqualsObAxPlusBCbToPowerOfGPlusC(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ParametricCurveType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _g = m_io.ReadS4be();
                            _a = m_io.ReadS4be();
                            _b = m_io.ReadS4be();
                            _c = m_io.ReadS4be();
                            _d = m_io.ReadS4be();
                            _e = m_io.ReadS4be();
                            _f = m_io.ReadS4be();
                        }
                        private int _g;
                        private int _a;
                        private int _b;
                        private int _c;
                        private int _d;
                        private int _e;
                        private int _f;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ParametricCurveType m_parent;
                        public int G { get { return _g; } }
                        public int A { get { return _a; } }
                        public int B { get { return _b; } }
                        public int C { get { return _c; } }
                        public int D { get { return _d; } }
                        public int E { get { return _e; } }
                        public int F { get { return _f; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ParametricCurveType M_Parent { get { return m_parent; } }
                    }
                    public partial class ParamsCie1221996 : KaitaiStruct
                    {
                        public static ParamsCie1221996 FromFile(string fileName)
                        {
                            return new ParamsCie1221996(new KaitaiStream(fileName));
                        }

                        public ParamsCie1221996(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ParametricCurveType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _g = m_io.ReadS4be();
                            _a = m_io.ReadS4be();
                            _b = m_io.ReadS4be();
                        }
                        private int _g;
                        private int _a;
                        private int _b;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ParametricCurveType m_parent;
                        public int G { get { return _g; } }
                        public int A { get { return _a; } }
                        public int B { get { return _b; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ParametricCurveType M_Parent { get { return m_parent; } }
                    }
                    private byte[] _reserved;
                    private ParametricCurveTypeFunctions _functionType;
                    private byte[] _reserved2;
                    private KaitaiStruct _parameters;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public ParametricCurveTypeFunctions FunctionType { get { return _functionType; } }
                    public byte[] Reserved2 { get { return _reserved2; } }
                    public KaitaiStruct Parameters { get { return _parameters; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class ChromaticityTag : KaitaiStruct
                {
                    public static ChromaticityTag FromFile(string fileName)
                    {
                        return new ChromaticityTag(new KaitaiStream(fileName));
                    }

                    public ChromaticityTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ChromaticityType: {
                            _tagData = new ChromaticityType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ChromaticityType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ChromaticityType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ChromaticAdaptationTag : KaitaiStruct
                {
                    public static ChromaticAdaptationTag FromFile(string fileName)
                    {
                        return new ChromaticAdaptationTag(new KaitaiStream(fileName));
                    }

                    public ChromaticAdaptationTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.S15Fixed16ArrayType: {
                            _tagData = new S15Fixed16ArrayType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private S15Fixed16ArrayType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public S15Fixed16ArrayType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class MeasurementType : KaitaiStruct
                {
                    public static MeasurementType FromFile(string fileName)
                    {
                        return new MeasurementType(new KaitaiStream(fileName));
                    }


                    public enum StandardObserverEncodings
                    {
                        Unknown = 0,
                        Cie1931StandardColorimetricObserver = 1,
                        Cie1964StandardColorimetricObserver = 2,
                    }

                    public enum MeasurementGeometryEncodings
                    {
                        Unknown = 0,
                        ZeroDegreesTo45DegreesOr45DegreesToZeroDegrees = 1,
                        ZeroDegreesToDDegreesOrDDegreesToZeroDegrees = 2,
                    }

                    public enum MeasurementFlareEncodings
                    {
                        ZeroPercent = 0,
                        OneHundredPercent = 65536,
                    }
                    public MeasurementType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.MeasurementTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _standardObserverEncoding = ((StandardObserverEncodings) m_io.ReadU4be());
                        _nciexyzTristimulusValuesForMeasurementBacking = new XyzNumber(m_io, this, m_root);
                        _measurementGeometryEncoding = ((MeasurementGeometryEncodings) m_io.ReadU4be());
                        _measurementFlareEncoding = ((MeasurementFlareEncodings) m_io.ReadU4be());
                        _standardIlluminantEncoding = new StandardIlluminantEncoding(m_io, this, m_root);
                    }
                    private byte[] _reserved;
                    private StandardObserverEncodings _standardObserverEncoding;
                    private XyzNumber _nciexyzTristimulusValuesForMeasurementBacking;
                    private MeasurementGeometryEncodings _measurementGeometryEncoding;
                    private MeasurementFlareEncodings _measurementFlareEncoding;
                    private StandardIlluminantEncoding _standardIlluminantEncoding;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.MeasurementTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public StandardObserverEncodings StandardObserverEncoding { get { return _standardObserverEncoding; } }
                    public XyzNumber NciexyzTristimulusValuesForMeasurementBacking { get { return _nciexyzTristimulusValuesForMeasurementBacking; } }
                    public MeasurementGeometryEncodings MeasurementGeometryEncoding { get { return _measurementGeometryEncoding; } }
                    public MeasurementFlareEncodings MeasurementFlareEncoding { get { return _measurementFlareEncoding; } }
                    public StandardIlluminantEncoding StandardIlluminantEncoding { get { return _standardIlluminantEncoding; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.MeasurementTag M_Parent { get { return m_parent; } }
                }
                public partial class TextType : KaitaiStruct
                {
                    public static TextType FromFile(string fileName)
                    {
                        return new TextType(new KaitaiStream(fileName));
                    }

                    public TextType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.CharTargetTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _value = System.Text.Encoding.GetEncoding("ASCII").GetString(KaitaiStream.BytesTerminate(m_io.ReadBytesFull(), 0, false));
                    }
                    private byte[] _reserved;
                    private string _value;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.CharTargetTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public string Value { get { return _value; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.CharTargetTag M_Parent { get { return m_parent; } }
                }
                public partial class ProfileSequenceIdentifierType : KaitaiStruct
                {
                    public static ProfileSequenceIdentifierType FromFile(string fileName)
                    {
                        return new ProfileSequenceIdentifierType(new KaitaiStream(fileName));
                    }

                    public ProfileSequenceIdentifierType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ProfileSequenceIdentifierTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfStructures = m_io.ReadU4be();
                        _positionsTable = new List<PositionNumber>((int) (NumberOfStructures));
                        for (var i = 0; i < NumberOfStructures; i++)
                        {
                            _positionsTable.Add(new PositionNumber(m_io, this, m_root));
                        }
                        _profileIdentifiers = new List<ProfileIdentifier>((int) (NumberOfStructures));
                        for (var i = 0; i < NumberOfStructures; i++)
                        {
                            _profileIdentifiers.Add(new ProfileIdentifier(m_io, this, m_root));
                        }
                    }
                    public partial class ProfileIdentifier : KaitaiStruct
                    {
                        public static ProfileIdentifier FromFile(string fileName)
                        {
                            return new ProfileIdentifier(new KaitaiStream(fileName));
                        }

                        public ProfileIdentifier(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ProfileSequenceIdentifierType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _profileId = m_io.ReadBytes(16);
                            _profileDescription = new MultiLocalizedUnicodeType(m_io, this, m_root);
                        }
                        private byte[] _profileId;
                        private MultiLocalizedUnicodeType _profileDescription;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ProfileSequenceIdentifierType m_parent;
                        public byte[] ProfileId { get { return _profileId; } }
                        public MultiLocalizedUnicodeType ProfileDescription { get { return _profileDescription; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ProfileSequenceIdentifierType M_Parent { get { return m_parent; } }
                    }
                    private byte[] _reserved;
                    private uint _numberOfStructures;
                    private List<PositionNumber> _positionsTable;
                    private List<ProfileIdentifier> _profileIdentifiers;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.ProfileSequenceIdentifierTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public uint NumberOfStructures { get { return _numberOfStructures; } }
                    public List<PositionNumber> PositionsTable { get { return _positionsTable; } }
                    public List<ProfileIdentifier> ProfileIdentifiers { get { return _profileIdentifiers; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.ProfileSequenceIdentifierTag M_Parent { get { return m_parent; } }
                }
                public partial class ColorantTableType : KaitaiStruct
                {
                    public static ColorantTableType FromFile(string fileName)
                    {
                        return new ColorantTableType(new KaitaiStream(fileName));
                    }

                    public ColorantTableType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _countOfColorants = m_io.ReadU4be();
                        _colorants = new List<Colorant>((int) (CountOfColorants));
                        for (var i = 0; i < CountOfColorants; i++)
                        {
                            _colorants.Add(new Colorant(m_io, this, m_root));
                        }
                    }
                    public partial class Colorant : KaitaiStruct
                    {
                        public static Colorant FromFile(string fileName)
                        {
                            return new Colorant(new KaitaiStream(fileName));
                        }

                        public Colorant(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ColorantTableType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _name = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytesTerm(0, false, true, true));
                            _padding = new List<byte[]>((int) ((32 - Name.Length)));
                            for (var i = 0; i < (32 - Name.Length); i++)
                            {
                                _padding = m_io.EnsureFixedContents(new byte[] { 0 });
                            }
                            _pcsValues = m_io.ReadBytes(6);
                        }
                        private string _name;
                        private List<byte[]> _padding;
                        private byte[] _pcsValues;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ColorantTableType m_parent;
                        public string Name { get { return _name; } }
                        public List<byte[]> Padding { get { return _padding; } }
                        public byte[] PcsValues { get { return _pcsValues; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ColorantTableType M_Parent { get { return m_parent; } }
                    }
                    private byte[] _reserved;
                    private uint _countOfColorants;
                    private List<Colorant> _colorants;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public uint CountOfColorants { get { return _countOfColorants; } }
                    public List<Colorant> Colorants { get { return _colorants; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class SignatureType : KaitaiStruct
                {
                    public static SignatureType FromFile(string fileName)
                    {
                        return new SignatureType(new KaitaiStream(fileName));
                    }

                    public SignatureType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _signature = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytes(4));
                    }
                    private byte[] _reserved;
                    private string _signature;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public string Signature { get { return _signature; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class CopyrightTag : KaitaiStruct
                {
                    public static CopyrightTag FromFile(string fileName)
                    {
                        return new CopyrightTag(new KaitaiStream(fileName));
                    }

                    public CopyrightTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiLocalizedUnicodeType: {
                            _tagData = new MultiLocalizedUnicodeType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiLocalizedUnicodeType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiLocalizedUnicodeType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class Preview0Tag : KaitaiStruct
                {
                    public static Preview0Tag FromFile(string fileName)
                    {
                        return new Preview0Tag(new KaitaiStream(fileName));
                    }

                    public Preview0Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionAToBTableType: {
                            _tagData = new LutAToBType(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionBToATableType: {
                            _tagData = new LutBToAType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class DateTimeType : KaitaiStruct
                {
                    public static DateTimeType FromFile(string fileName)
                    {
                        return new DateTimeType(new KaitaiStream(fileName));
                    }

                    public DateTimeType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.CalibrationDateTimeTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _dateAndTime = new DateTimeNumber(m_io, this, m_root);
                    }
                    private byte[] _reserved;
                    private DateTimeNumber _dateAndTime;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.CalibrationDateTimeTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public DateTimeNumber DateAndTime { get { return _dateAndTime; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.CalibrationDateTimeTag M_Parent { get { return m_parent; } }
                }
                public partial class DToB3Tag : KaitaiStruct
                {
                    public static DToB3Tag FromFile(string fileName)
                    {
                        return new DToB3Tag(new KaitaiStream(fileName));
                    }

                    public DToB3Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class Preview2Tag : KaitaiStruct
                {
                    public static Preview2Tag FromFile(string fileName)
                    {
                        return new Preview2Tag(new KaitaiStream(fileName));
                    }

                    public Preview2Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionBToATableType: {
                            _tagData = new LutBToAType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class DeviceModelDescTag : KaitaiStruct
                {
                    public static DeviceModelDescTag FromFile(string fileName)
                    {
                        return new DeviceModelDescTag(new KaitaiStream(fileName));
                    }

                    public DeviceModelDescTag(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiLocalizedUnicodeType: {
                            _tagData = new MultiLocalizedUnicodeType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiLocalizedUnicodeType _tagData;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiLocalizedUnicodeType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class MultiProcessElementsType : KaitaiStruct
                {
                    public static MultiProcessElementsType FromFile(string fileName)
                    {
                        return new MultiProcessElementsType(new KaitaiStream(fileName));
                    }

                    public MultiProcessElementsType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfInputChannels = m_io.ReadU2be();
                        _numberOfOutputChannels = m_io.ReadU2be();
                        _numberOfProcessingElements = m_io.ReadU4be();
                        _processElementPositionsTable = new List<PositionNumber>((int) (NumberOfProcessingElements));
                        for (var i = 0; i < NumberOfProcessingElements; i++)
                        {
                            _processElementPositionsTable.Add(new PositionNumber(m_io, this, m_root));
                        }
                        _data = m_io.ReadBytesFull();
                    }
                    private byte[] _reserved;
                    private ushort _numberOfInputChannels;
                    private ushort _numberOfOutputChannels;
                    private uint _numberOfProcessingElements;
                    private List<PositionNumber> _processElementPositionsTable;
                    private byte[] _data;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public ushort NumberOfInputChannels { get { return _numberOfInputChannels; } }
                    public ushort NumberOfOutputChannels { get { return _numberOfOutputChannels; } }
                    public uint NumberOfProcessingElements { get { return _numberOfProcessingElements; } }
                    public List<PositionNumber> ProcessElementPositionsTable { get { return _processElementPositionsTable; } }
                    public byte[] Data { get { return _data; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class UInt16ArrayType : KaitaiStruct
                {
                    public static UInt16ArrayType FromFile(string fileName)
                    {
                        return new UInt16ArrayType(new KaitaiStream(fileName));
                    }

                    public UInt16ArrayType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _values = new List<ushort>();
                        {
                            var i = 0;
                            while (!m_io.IsEof) {
                                _values.Add(m_io.ReadU2be());
                                i++;
                            }
                        }
                    }
                    private byte[] _reserved;
                    private List<ushort> _values;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public List<ushort> Values { get { return _values; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class ColorantOrderTag : KaitaiStruct
                {
                    public static ColorantOrderTag FromFile(string fileName)
                    {
                        return new ColorantOrderTag(new KaitaiStream(fileName));
                    }

                    public ColorantOrderTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ColorantOrderType: {
                            _tagData = new ColorantOrderType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ColorantOrderType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ColorantOrderType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class DataType : KaitaiStruct
                {
                    public static DataType FromFile(string fileName)
                    {
                        return new DataType(new KaitaiStream(fileName));
                    }


                    public enum DataTypes
                    {
                        AsciiData = 0,
                        BinaryData = 1,
                    }
                    public DataType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _dataFlag = ((DataTypes) m_io.ReadU4be());
                    }
                    private DataTypes _dataFlag;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public DataTypes DataFlag { get { return _dataFlag; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class ChromaticityType : KaitaiStruct
                {
                    public static ChromaticityType FromFile(string fileName)
                    {
                        return new ChromaticityType(new KaitaiStream(fileName));
                    }


                    public enum ColorantAndPhosphorEncodings
                    {
                        Unknown = 0,
                        ItuRBt7092 = 1,
                        SmpteRp145 = 2,
                        EbuTech3213E = 3,
                        P22 = 4,
                    }
                    public ChromaticityType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ChromaticityTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfDeviceChannels = m_io.ReadU2be();
                        _colorantAndPhosphorEncoding = ((ColorantAndPhosphorEncodings) m_io.ReadU2be());
                        _ciexyCoordinatesPerChannel = new List<CiexyCoordinateValues>((int) (NumberOfDeviceChannels));
                        for (var i = 0; i < NumberOfDeviceChannels; i++)
                        {
                            _ciexyCoordinatesPerChannel.Add(new CiexyCoordinateValues(m_io, this, m_root));
                        }
                    }
                    public partial class CiexyCoordinateValues : KaitaiStruct
                    {
                        public static CiexyCoordinateValues FromFile(string fileName)
                        {
                            return new CiexyCoordinateValues(new KaitaiStream(fileName));
                        }

                        public CiexyCoordinateValues(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ChromaticityType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _xCoordinate = m_io.ReadU2be();
                            _yCoordinate = m_io.ReadU2be();
                        }
                        private ushort _xCoordinate;
                        private ushort _yCoordinate;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ChromaticityType m_parent;
                        public ushort XCoordinate { get { return _xCoordinate; } }
                        public ushort YCoordinate { get { return _yCoordinate; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ChromaticityType M_Parent { get { return m_parent; } }
                    }
                    private byte[] _reserved;
                    private ushort _numberOfDeviceChannels;
                    private ColorantAndPhosphorEncodings _colorantAndPhosphorEncoding;
                    private List<CiexyCoordinateValues> _ciexyCoordinatesPerChannel;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.ChromaticityTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public ushort NumberOfDeviceChannels { get { return _numberOfDeviceChannels; } }
                    public ColorantAndPhosphorEncodings ColorantAndPhosphorEncoding { get { return _colorantAndPhosphorEncoding; } }
                    public List<CiexyCoordinateValues> CiexyCoordinatesPerChannel { get { return _ciexyCoordinatesPerChannel; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.ChromaticityTag M_Parent { get { return m_parent; } }
                }
                public partial class LuminanceTag : KaitaiStruct
                {
                    public static LuminanceTag FromFile(string fileName)
                    {
                        return new LuminanceTag(new KaitaiStream(fileName));
                    }

                    public LuminanceTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.XyzType: {
                            _tagData = new XyzType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private XyzType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public XyzType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class S15Fixed16ArrayType : KaitaiStruct
                {
                    public static S15Fixed16ArrayType FromFile(string fileName)
                    {
                        return new S15Fixed16ArrayType(new KaitaiStream(fileName));
                    }

                    public S15Fixed16ArrayType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ChromaticAdaptationTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _values = new List<S15Fixed16Number>();
                        {
                            var i = 0;
                            while (!m_io.IsEof) {
                                _values.Add(new S15Fixed16Number(m_io, this, m_root));
                                i++;
                            }
                        }
                    }
                    private byte[] _reserved;
                    private List<S15Fixed16Number> _values;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.ChromaticAdaptationTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public List<S15Fixed16Number> Values { get { return _values; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.ChromaticAdaptationTag M_Parent { get { return m_parent; } }
                }
                public partial class MultiLocalizedUnicodeType : KaitaiStruct
                {
                    public static MultiLocalizedUnicodeType FromFile(string fileName)
                    {
                        return new MultiLocalizedUnicodeType(new KaitaiStream(fileName));
                    }

                    public MultiLocalizedUnicodeType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfRecords = m_io.ReadU4be();
                        _recordSize = m_io.ReadU4be();
                        _records = new List<Record>((int) (NumberOfRecords));
                        for (var i = 0; i < NumberOfRecords; i++)
                        {
                            _records.Add(new Record(m_io, this, m_root));
                        }
                    }
                    public partial class Record : KaitaiStruct
                    {
                        public static Record FromFile(string fileName)
                        {
                            return new Record(new KaitaiStream(fileName));
                        }

                        public Record(KaitaiStream p__io, Icc4.TagTable.TagDefinition.MultiLocalizedUnicodeType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            f_stringData = false;
                            _read();
                        }
                        private void _read()
                        {
                            _languageCode = m_io.ReadU2be();
                            _countryCode = m_io.ReadU2be();
                            _stringLength = m_io.ReadU4be();
                            _stringOffset = m_io.ReadU4be();
                        }
                        private bool f_stringData;
                        private string _stringData;
                        public string StringData
                        {
                            get
                            {
                                if (f_stringData)
                                    return _stringData;
                                long _pos = m_io.Pos;
                                m_io.Seek(StringOffset);
                                _stringData = System.Text.Encoding.GetEncoding("UTF-16BE").GetString(m_io.ReadBytes(StringLength));
                                m_io.Seek(_pos);
                                f_stringData = true;
                                return _stringData;
                            }
                        }
                        private ushort _languageCode;
                        private ushort _countryCode;
                        private uint _stringLength;
                        private uint _stringOffset;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.MultiLocalizedUnicodeType m_parent;
                        public ushort LanguageCode { get { return _languageCode; } }
                        public ushort CountryCode { get { return _countryCode; } }
                        public uint StringLength { get { return _stringLength; } }
                        public uint StringOffset { get { return _stringOffset; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.MultiLocalizedUnicodeType M_Parent { get { return m_parent; } }
                    }
                    private byte[] _reserved;
                    private uint _numberOfRecords;
                    private uint _recordSize;
                    private List<Record> _records;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public uint NumberOfRecords { get { return _numberOfRecords; } }
                    public uint RecordSize { get { return _recordSize; } }
                    public List<Record> Records { get { return _records; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class AToB2Tag : KaitaiStruct
                {
                    public static AToB2Tag FromFile(string fileName)
                    {
                        return new AToB2Tag(new KaitaiStream(fileName));
                    }

                    public AToB2Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionAToBTableType: {
                            _tagData = new LutAToBType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class AToB1Tag : KaitaiStruct
                {
                    public static AToB1Tag FromFile(string fileName)
                    {
                        return new AToB1Tag(new KaitaiStream(fileName));
                    }

                    public AToB1Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionAToBTableType: {
                            _tagData = new LutAToBType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ColorimetricIntentImageStateTag : KaitaiStruct
                {
                    public static ColorimetricIntentImageStateTag FromFile(string fileName)
                    {
                        return new ColorimetricIntentImageStateTag(new KaitaiStream(fileName));
                    }

                    public ColorimetricIntentImageStateTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.SignatureType: {
                            _tagData = new SignatureType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private SignatureType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public SignatureType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class CharTargetTag : KaitaiStruct
                {
                    public static CharTargetTag FromFile(string fileName)
                    {
                        return new CharTargetTag(new KaitaiStream(fileName));
                    }

                    public CharTargetTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.TextType: {
                            _tagData = new TextType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private TextType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public TextType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ColorantTableTag : KaitaiStruct
                {
                    public static ColorantTableTag FromFile(string fileName)
                    {
                        return new ColorantTableTag(new KaitaiStream(fileName));
                    }

                    public ColorantTableTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ColorantTableType: {
                            _tagData = new ColorantTableType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ColorantTableType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ColorantTableType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class CalibrationDateTimeTag : KaitaiStruct
                {
                    public static CalibrationDateTimeTag FromFile(string fileName)
                    {
                        return new CalibrationDateTimeTag(new KaitaiStream(fileName));
                    }

                    public CalibrationDateTimeTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.DateTimeType: {
                            _tagData = new DateTimeType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private DateTimeType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public DateTimeType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class NamedColor2Tag : KaitaiStruct
                {
                    public static NamedColor2Tag FromFile(string fileName)
                    {
                        return new NamedColor2Tag(new KaitaiStream(fileName));
                    }

                    public NamedColor2Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.NamedColor2Type: {
                            _tagData = new NamedColor2Type(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private NamedColor2Type _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public NamedColor2Type TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ViewingCondDescTag : KaitaiStruct
                {
                    public static ViewingCondDescTag FromFile(string fileName)
                    {
                        return new ViewingCondDescTag(new KaitaiStream(fileName));
                    }

                    public ViewingCondDescTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiLocalizedUnicodeType: {
                            _tagData = new MultiLocalizedUnicodeType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiLocalizedUnicodeType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiLocalizedUnicodeType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class BToD3Tag : KaitaiStruct
                {
                    public static BToD3Tag FromFile(string fileName)
                    {
                        return new BToD3Tag(new KaitaiStream(fileName));
                    }

                    public BToD3Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ProfileSequenceDescType : KaitaiStruct
                {
                    public static ProfileSequenceDescType FromFile(string fileName)
                    {
                        return new ProfileSequenceDescType(new KaitaiStream(fileName));
                    }

                    public ProfileSequenceDescType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ProfileSequenceTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfDescriptionStructures = m_io.ReadU4be();
                        _profileDescriptions = new List<ProfileDescription>((int) (NumberOfDescriptionStructures));
                        for (var i = 0; i < NumberOfDescriptionStructures; i++)
                        {
                            _profileDescriptions.Add(new ProfileDescription(m_io, this, m_root));
                        }
                    }
                    public partial class ProfileDescription : KaitaiStruct
                    {
                        public static ProfileDescription FromFile(string fileName)
                        {
                            return new ProfileDescription(new KaitaiStream(fileName));
                        }

                        public ProfileDescription(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ProfileSequenceDescType p__parent = null, Icc4 p__root = null) : base(p__io)
                        {
                            m_parent = p__parent;
                            m_root = p__root;
                            _read();
                        }
                        private void _read()
                        {
                            _deviceManufacturer = new DeviceManufacturer(m_io, this, m_root);
                            _deviceModel = System.Text.Encoding.GetEncoding("ASCII").GetString(m_io.ReadBytes(4));
                            _deviceAttributes = new DeviceAttributes(m_io, this, m_root);
                            _deviceTechnology = new TechnologyTag(m_io, this, m_root);
                            _descriptionOfDeviceManufacturer = new DeviceMfgDescTag(m_io, this, m_root);
                            _descriptionOfDeviceModel = new DeviceModelDescTag(m_io, this, m_root);
                        }
                        private DeviceManufacturer _deviceManufacturer;
                        private string _deviceModel;
                        private DeviceAttributes _deviceAttributes;
                        private TechnologyTag _deviceTechnology;
                        private DeviceMfgDescTag _descriptionOfDeviceManufacturer;
                        private DeviceModelDescTag _descriptionOfDeviceModel;
                        private Icc4 m_root;
                        private Icc4.TagTable.TagDefinition.ProfileSequenceDescType m_parent;
                        public DeviceManufacturer DeviceManufacturer { get { return _deviceManufacturer; } }
                        public string DeviceModel { get { return _deviceModel; } }
                        public DeviceAttributes DeviceAttributes { get { return _deviceAttributes; } }
                        public TechnologyTag DeviceTechnology { get { return _deviceTechnology; } }
                        public DeviceMfgDescTag DescriptionOfDeviceManufacturer { get { return _descriptionOfDeviceManufacturer; } }
                        public DeviceModelDescTag DescriptionOfDeviceModel { get { return _descriptionOfDeviceModel; } }
                        public Icc4 M_Root { get { return m_root; } }
                        public Icc4.TagTable.TagDefinition.ProfileSequenceDescType M_Parent { get { return m_parent; } }
                    }
                    private byte[] _reserved;
                    private uint _numberOfDescriptionStructures;
                    private List<ProfileDescription> _profileDescriptions;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.ProfileSequenceTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public uint NumberOfDescriptionStructures { get { return _numberOfDescriptionStructures; } }
                    public List<ProfileDescription> ProfileDescriptions { get { return _profileDescriptions; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.ProfileSequenceTag M_Parent { get { return m_parent; } }
                }
                public partial class ProfileSequenceIdentifierTag : KaitaiStruct
                {
                    public static ProfileSequenceIdentifierTag FromFile(string fileName)
                    {
                        return new ProfileSequenceIdentifierTag(new KaitaiStream(fileName));
                    }

                    public ProfileSequenceIdentifierTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ProfileSequenceIdentifierType: {
                            _tagData = new ProfileSequenceIdentifierType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private ProfileSequenceIdentifierType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public ProfileSequenceIdentifierType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class BToD1Tag : KaitaiStruct
                {
                    public static BToD1Tag FromFile(string fileName)
                    {
                        return new BToD1Tag(new KaitaiStream(fileName));
                    }

                    public BToD1Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ColorantOrderType : KaitaiStruct
                {
                    public static ColorantOrderType FromFile(string fileName)
                    {
                        return new ColorantOrderType(new KaitaiStream(fileName));
                    }

                    public ColorantOrderType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ColorantOrderTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _countOfColorants = m_io.ReadU4be();
                        _numbersOfColorantsInOrderOfPrinting = new List<byte>((int) (CountOfColorants));
                        for (var i = 0; i < CountOfColorants; i++)
                        {
                            _numbersOfColorantsInOrderOfPrinting.Add(m_io.ReadU1());
                        }
                    }
                    private byte[] _reserved;
                    private uint _countOfColorants;
                    private List<byte> _numbersOfColorantsInOrderOfPrinting;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.ColorantOrderTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public uint CountOfColorants { get { return _countOfColorants; } }
                    public List<byte> NumbersOfColorantsInOrderOfPrinting { get { return _numbersOfColorantsInOrderOfPrinting; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.ColorantOrderTag M_Parent { get { return m_parent; } }
                }
                public partial class DToB2Tag : KaitaiStruct
                {
                    public static DToB2Tag FromFile(string fileName)
                    {
                        return new DToB2Tag(new KaitaiStream(fileName));
                    }

                    public DToB2Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class GrayTrcTag : KaitaiStruct
                {
                    public static GrayTrcTag FromFile(string fileName)
                    {
                        return new GrayTrcTag(new KaitaiStream(fileName));
                    }

                    public GrayTrcTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.CurveType: {
                            _tagData = new CurveType(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ParametricCurveType: {
                            _tagData = new ParametricCurveType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class ViewingConditionsType : KaitaiStruct
                {
                    public static ViewingConditionsType FromFile(string fileName)
                    {
                        return new ViewingConditionsType(new KaitaiStream(fileName));
                    }

                    public ViewingConditionsType(KaitaiStream p__io, Icc4.TagTable.TagDefinition.ViewingConditionsTag p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _unNormalizedCiexyzValuesForIlluminant = new XyzNumber(m_io, this, m_root);
                        _unNormalizedCiexyzValuesForSurround = new XyzNumber(m_io, this, m_root);
                        _illuminantType = new StandardIlluminantEncoding(m_io, this, m_root);
                    }
                    private byte[] _reserved;
                    private XyzNumber _unNormalizedCiexyzValuesForIlluminant;
                    private XyzNumber _unNormalizedCiexyzValuesForSurround;
                    private StandardIlluminantEncoding _illuminantType;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition.ViewingConditionsTag m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public XyzNumber UnNormalizedCiexyzValuesForIlluminant { get { return _unNormalizedCiexyzValuesForIlluminant; } }
                    public XyzNumber UnNormalizedCiexyzValuesForSurround { get { return _unNormalizedCiexyzValuesForSurround; } }
                    public StandardIlluminantEncoding IlluminantType { get { return _illuminantType; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition.ViewingConditionsTag M_Parent { get { return m_parent; } }
                }
                public partial class LutBToAType : KaitaiStruct
                {
                    public static LutBToAType FromFile(string fileName)
                    {
                        return new LutBToAType(new KaitaiStream(fileName));
                    }

                    public LutBToAType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _numberOfInputChannels = m_io.ReadU1();
                        _numberOfOutputChannels = m_io.ReadU1();
                        _padding = m_io.EnsureFixedContents(new byte[] { 0, 0 });
                        _offsetToFirstBCurve = m_io.ReadU4be();
                        _offsetToMatrix = m_io.ReadU4be();
                        _offsetToFirstMCurve = m_io.ReadU4be();
                        _offsetToClut = m_io.ReadU4be();
                        _offsetToFirstACurve = m_io.ReadU4be();
                        _data = m_io.ReadBytesFull();
                    }
                    private byte[] _reserved;
                    private byte _numberOfInputChannels;
                    private byte _numberOfOutputChannels;
                    private byte[] _padding;
                    private uint _offsetToFirstBCurve;
                    private uint _offsetToMatrix;
                    private uint _offsetToFirstMCurve;
                    private uint _offsetToClut;
                    private uint _offsetToFirstACurve;
                    private byte[] _data;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public byte NumberOfInputChannels { get { return _numberOfInputChannels; } }
                    public byte NumberOfOutputChannels { get { return _numberOfOutputChannels; } }
                    public byte[] Padding { get { return _padding; } }
                    public uint OffsetToFirstBCurve { get { return _offsetToFirstBCurve; } }
                    public uint OffsetToMatrix { get { return _offsetToMatrix; } }
                    public uint OffsetToFirstMCurve { get { return _offsetToFirstMCurve; } }
                    public uint OffsetToClut { get { return _offsetToClut; } }
                    public uint OffsetToFirstACurve { get { return _offsetToFirstACurve; } }
                    public byte[] Data { get { return _data; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class GreenTrcTag : KaitaiStruct
                {
                    public static GreenTrcTag FromFile(string fileName)
                    {
                        return new GreenTrcTag(new KaitaiStream(fileName));
                    }

                    public GreenTrcTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.CurveType: {
                            _tagData = new CurveType(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.ParametricCurveType: {
                            _tagData = new ParametricCurveType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class UInt32ArrayType : KaitaiStruct
                {
                    public static UInt32ArrayType FromFile(string fileName)
                    {
                        return new UInt32ArrayType(new KaitaiStream(fileName));
                    }

                    public UInt32ArrayType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _values = new List<uint>();
                        {
                            var i = 0;
                            while (!m_io.IsEof) {
                                _values.Add(m_io.ReadU4be());
                                i++;
                            }
                        }
                    }
                    private byte[] _reserved;
                    private List<uint> _values;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public List<uint> Values { get { return _values; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class GamutTag : KaitaiStruct
                {
                    public static GamutTag FromFile(string fileName)
                    {
                        return new GamutTag(new KaitaiStream(fileName));
                    }

                    public GamutTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithOneBytePrecisionType: {
                            _tagData = new Lut8Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionTableWithTwoBytePrecisionType: {
                            _tagData = new Lut16Type(m_io, this, m_root);
                            break;
                        }
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiFunctionBToATableType: {
                            _tagData = new LutBToAType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private KaitaiStruct _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public KaitaiStruct TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class UInt8ArrayType : KaitaiStruct
                {
                    public static UInt8ArrayType FromFile(string fileName)
                    {
                        return new UInt8ArrayType(new KaitaiStream(fileName));
                    }

                    public UInt8ArrayType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _values = new List<byte>();
                        {
                            var i = 0;
                            while (!m_io.IsEof) {
                                _values.Add(m_io.ReadU1());
                                i++;
                            }
                        }
                    }
                    private byte[] _reserved;
                    private List<byte> _values;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public List<byte> Values { get { return _values; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class RedMatrixColumnTag : KaitaiStruct
                {
                    public static RedMatrixColumnTag FromFile(string fileName)
                    {
                        return new RedMatrixColumnTag(new KaitaiStream(fileName));
                    }

                    public RedMatrixColumnTag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.XyzType: {
                            _tagData = new XyzType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private XyzType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public XyzType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                public partial class UInt64ArrayType : KaitaiStruct
                {
                    public static UInt64ArrayType FromFile(string fileName)
                    {
                        return new UInt64ArrayType(new KaitaiStream(fileName));
                    }

                    public UInt64ArrayType(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _reserved = m_io.EnsureFixedContents(new byte[] { 0, 0, 0, 0 });
                        _values = new List<ulong>();
                        {
                            var i = 0;
                            while (!m_io.IsEof) {
                                _values.Add(m_io.ReadU8be());
                                i++;
                            }
                        }
                    }
                    private byte[] _reserved;
                    private List<ulong> _values;
                    private Icc4 m_root;
                    private KaitaiStruct m_parent;
                    public byte[] Reserved { get { return _reserved; } }
                    public List<ulong> Values { get { return _values; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public KaitaiStruct M_Parent { get { return m_parent; } }
                }
                public partial class BToD2Tag : KaitaiStruct
                {
                    public static BToD2Tag FromFile(string fileName)
                    {
                        return new BToD2Tag(new KaitaiStream(fileName));
                    }

                    public BToD2Tag(KaitaiStream p__io, Icc4.TagTable.TagDefinition p__parent = null, Icc4 p__root = null) : base(p__io)
                    {
                        m_parent = p__parent;
                        m_root = p__root;
                        _read();
                    }
                    private void _read()
                    {
                        _tagType = ((Icc4.TagTable.TagDefinition.TagTypeSignatures) m_io.ReadU4be());
                        switch (TagType) {
                        case Icc4.TagTable.TagDefinition.TagTypeSignatures.MultiProcessElementsType: {
                            _tagData = new MultiProcessElementsType(m_io, this, m_root);
                            break;
                        }
                        }
                    }
                    private TagTypeSignatures _tagType;
                    private MultiProcessElementsType _tagData;
                    private Icc4 m_root;
                    private Icc4.TagTable.TagDefinition m_parent;
                    public TagTypeSignatures TagType { get { return _tagType; } }
                    public MultiProcessElementsType TagData { get { return _tagData; } }
                    public Icc4 M_Root { get { return m_root; } }
                    public Icc4.TagTable.TagDefinition M_Parent { get { return m_parent; } }
                }
                private bool f_tagDataElement;
                private object _tagDataElement;
                public object TagDataElement
                {
                    get
                    {
                        if (f_tagDataElement)
                            return _tagDataElement;
                        long _pos = m_io.Pos;
                        m_io.Seek(OffsetToDataElement);
                        switch (TagSignature) {
                        case TagSignatures.ProfileSequenceIdentifier: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ProfileSequenceIdentifierTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ColorimetricIntentImageState: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ColorimetricIntentImageStateTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.RedTrc: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new RedTrcTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Preview0: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new Preview0Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.GreenTrc: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new GreenTrcTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BToD0: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BToD0Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ColorantTableOut: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ColorantTableOutTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BToA2: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BToA2Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.CalibrationDateTime: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new CalibrationDateTimeTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ChromaticAdaptation: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ChromaticAdaptationTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ColorantTable: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ColorantTableTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.AToB2: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new AToB2Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.DToB1: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new DToB1Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Chromaticity: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ChromaticityTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BlueMatrixColumn: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BlueMatrixColumnTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.AToB0: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new AToB0Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BToD2: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BToD2Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BToA1: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BToA1Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.MediaWhitePoint: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new MediaWhitePointTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.DToB0: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new DToB0Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.NamedColor2: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new NamedColor2Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.DToB2: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new DToB2Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.RedMatrixColumn: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new RedMatrixColumnTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ViewingConditions: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ViewingConditionsTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.AToB1: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new AToB1Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Preview1: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new Preview1Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.GrayTrc: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new GrayTrcTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.DeviceMfgDesc: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new DeviceMfgDescTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BToD1: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BToD1Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ColorantOrder: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ColorantOrderTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Copyright: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new CopyrightTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Gamut: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new GamutTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.CharTarget: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new CharTargetTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.OutputResponse: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new OutputResponseTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Technology: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new TechnologyTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ViewingCondDesc: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ViewingCondDescTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ProfileDescription: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ProfileDescriptionTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Luminance: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new LuminanceTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.DToB3: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new DToB3Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BToD3: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BToD3Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BToA0: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BToA0Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Preview2: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new Preview2Tag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.GreenMatrixColumn: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new GreenMatrixColumnTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.ProfileSequence: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new ProfileSequenceTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.SaturationRenderingIntentGamut: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new SaturationRenderingIntentGamutTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.PerceptualRenderingIntentGamut: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new PerceptualRenderingIntentGamutTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.BlueTrc: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new BlueTrcTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.DeviceModelDesc: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new DeviceModelDescTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        case TagSignatures.Measurement: {
                            __raw_tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            var io___raw_tagDataElement = new KaitaiStream(__raw_tagDataElement);
                            _tagDataElement = new MeasurementTag(io___raw_tagDataElement, this, m_root);
                            break;
                        }
                        default: {
                            _tagDataElement = m_io.ReadBytes(SizeOfDataElement);
                            break;
                        }
                        }
                        m_io.Seek(_pos);
                        f_tagDataElement = true;
                        return _tagDataElement;
                    }
                }
                private TagSignatures _tagSignature;
                private uint _offsetToDataElement;
                private uint _sizeOfDataElement;
                private Icc4 m_root;
                private Icc4.TagTable m_parent;
                private byte[] __raw_tagDataElement;
                public TagSignatures TagSignature { get { return _tagSignature; } }
                public uint OffsetToDataElement { get { return _offsetToDataElement; } }
                public uint SizeOfDataElement { get { return _sizeOfDataElement; } }
                public Icc4 M_Root { get { return m_root; } }
                public Icc4.TagTable M_Parent { get { return m_parent; } }
                public byte[] M_RawTagDataElement { get { return __raw_tagDataElement; } }
            }
            private uint _tagCount;
            private List<TagDefinition> _tags;
            private Icc4 m_root;
            private Icc4 m_parent;
            public uint TagCount { get { return _tagCount; } }
            public List<TagDefinition> Tags { get { return _tags; } }
            public Icc4 M_Root { get { return m_root; } }
            public Icc4 M_Parent { get { return m_parent; } }
        }
        public partial class DeviceAttributes : KaitaiStruct
        {
            public static DeviceAttributes FromFile(string fileName)
            {
                return new DeviceAttributes(new KaitaiStream(fileName));
            }


            public enum DeviceAttributesReflectiveOrTransparency
            {
                Reflective = 0,
                Transparency = 1,
            }

            public enum DeviceAttributesGlossyOrMatte
            {
                Glossy = 0,
                Matte = 1,
            }

            public enum DeviceAttributesPositiveOrNegativeMediaPolarity
            {
                PositiveMediaPolarity = 0,
                NegativeMediaPolarity = 1,
            }

            public enum DeviceAttributesColourOrBlackAndWhiteMedia
            {
                ColourMedia = 0,
                BlackAndWhiteMedia = 1,
            }
            public DeviceAttributes(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _reflectiveOrTransparency = ((DeviceAttributesReflectiveOrTransparency) m_io.ReadBitsInt(1));
                _glossyOrMatte = ((DeviceAttributesGlossyOrMatte) m_io.ReadBitsInt(1));
                _positiveOrNegativeMediaPolarity = ((DeviceAttributesPositiveOrNegativeMediaPolarity) m_io.ReadBitsInt(1));
                _colourOrBlackAndWhiteMedia = ((DeviceAttributesColourOrBlackAndWhiteMedia) m_io.ReadBitsInt(1));
                _reserved = m_io.ReadBitsInt(28);
                _vendorSpecific = m_io.ReadBitsInt(32);
            }
            private DeviceAttributesReflectiveOrTransparency _reflectiveOrTransparency;
            private DeviceAttributesGlossyOrMatte _glossyOrMatte;
            private DeviceAttributesPositiveOrNegativeMediaPolarity _positiveOrNegativeMediaPolarity;
            private DeviceAttributesColourOrBlackAndWhiteMedia _colourOrBlackAndWhiteMedia;
            private ulong _reserved;
            private ulong _vendorSpecific;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public DeviceAttributesReflectiveOrTransparency ReflectiveOrTransparency { get { return _reflectiveOrTransparency; } }
            public DeviceAttributesGlossyOrMatte GlossyOrMatte { get { return _glossyOrMatte; } }
            public DeviceAttributesPositiveOrNegativeMediaPolarity PositiveOrNegativeMediaPolarity { get { return _positiveOrNegativeMediaPolarity; } }
            public DeviceAttributesColourOrBlackAndWhiteMedia ColourOrBlackAndWhiteMedia { get { return _colourOrBlackAndWhiteMedia; } }
            public ulong Reserved { get { return _reserved; } }
            public ulong VendorSpecific { get { return _vendorSpecific; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class DeviceManufacturer : KaitaiStruct
        {
            public static DeviceManufacturer FromFile(string fileName)
            {
                return new DeviceManufacturer(new KaitaiStream(fileName));
            }


            public enum DeviceManufacturers
            {
                ErdtSystemsGmbhAndCoKg = 878981744,
                AamazingTechnologiesInc = 1094798657,
                AcerPeripherals = 1094927698,
                AcolyteColorResearch = 1094929492,
                ActixSytemsInc = 1094931529,
                AdaraTechnologyInc = 1094992210,
                AdobeSystemsIncorporated = 1094992453,
                AdiSystemsInc = 1094994208,
                AgfaGraphicsNv = 1095190081,
                AlpsElectricUsaInc = 1095519556,
                AlpsElectricUsaInc2 = 1095520339,
                AlwanColorExpertise = 1095522126,
                AmiableTechnologiesInc = 1095586889,
                AocInternationalUsaLtd = 1095713568,
                Apago = 1095778631,
                AppleComputerInc = 1095782476,
                Ast = 1095980064,
                AtandtComputerSystems = 1096033876,
                BarbieriElectronic = 1111573836,
                BarcoNv = 1112687439,
                BreakpointPtyLimited = 1112689488,
                BrotherIndustriesLtd = 1112690516,
                Bull = 1112886348,
                BusComputerSystems = 1112888096,
                CItoh = 1127041364,
                IntelCorporation = 1128353106,
                CanonIncCanonDevelopmentAmericasInc = 1128353359,
                CarrollTouch = 1128354386,
                CasioComputerCoLtd = 1128354633,
                ColorbusPl = 1128420691,
                Crossfield = 1128614944,
                Crossfield2 = 1128615032,
                CgsPublishingTechnologiesInternationalGmbh = 1128747808,
                RochesterRobotics = 1128811808,
                ColourImagingGroupLondon = 1128875852,
                Citizen = 1128879177,
                CandelaLtd = 1129066544,
                ColorIq = 1129072977,
                ChromacoInc = 1129136975,
                Chromix = 1129146712,
                ColorgraphicCommunicationsCorporation = 1129270351,
                CompaqComputerCorporation = 1129270608,
                CompeqUsaFocusTechnology = 1129270640,
                ConracDisplayProducts = 1129270866,
                CordataTechnologiesInc = 1129271876,
                CompaqComputerCorporation2 = 1129337120,
                Colorpro = 1129337423,
                Cornerstone = 1129467424,
                CtxInternationalInc = 1129601056,
                Colorvision = 1129728339,
                FujitsuLaboratoriesLtd = 1129792288,
                DariusTechnologyLtd = 1145131593,
                Dataproducts = 1145132097,
                DryCreekPhoto = 1145262112,
                DigitalContentsResourceCenterChungAngUniversity = 1145262659,
                DellComputerCorporation = 1145392204,
                DainipponInkAndChemicals = 1145652000,
                Diconix = 1145652047,
                Digital = 1145653065,
                DigitalLightAndColor = 1145841219,
                DoppelgangerLlc = 1146113095,
                DainipponScreen = 1146298400,
                Doosol = 1146310476,
                Dupont = 1146441806,
                Epson = 1162892111,
                EskoGraphics = 1163086671,
                ElectronicsAndTelecommunicationsResearchInstitute = 1163153993,
                EverexSystemsInc = 1163281746,
                ExactcodeGmbh = 1163411779,
                EizoNanaoCorporation = 1164540527,
                FalcoDataProductsInc = 1178684483,
                FujiPhotoFilmColtd = 1179000864,
                FujifilmElectronicImagingLtd = 1179010377,
                FnordSoftware = 1179537988,
                ForaInc = 1179603521,
                ForefrontTechnologyCorporation = 1179603525,
                Fujitsu = 1179658794,
                WaytechDevelopmentInc = 1179664672,
                Fujitsu2 = 1179994697,
                FujiXeroxCoLtd = 1180180512,
                GccTechnologiesInc = 1195590432,
                GlobalGraphicsSoftwareLimited = 1195856716,
                Gretagmacbeth = 1196245536,
                GmgGmbhAndCoKg = 1196246816,
                GoldstarTechnologyInc = 1196379204,
                GiantprintPtyLtd = 1196446292,
                Gretagmacbeth2 = 1196707138,
                WaytechDevelopmentInc2 = 1196835616,
                SonyCorporation = 1196896843,
                Hci = 1212369184,
                HeidelbergerDruckmaschinenAg = 1212435744,
                Hermes = 1212502605,
                HitachiAmericaLtd = 1212765249,
                HewlettPackard = 1213210656,
                HitachiLtd = 1213481760,
                HitiDigitalInc = 1214862441,
                IbmCorporation = 1229081888,
                ScitexCorporationLtd = 1229213268,
                HewlettPackard2 = 1229275936,
                IiyamaNorthAmericaInc = 1229543745,
                IkegamiElectronicsInc = 1229669703,
                ImageSystemsCorporation = 1229799751,
                IngramMicroInc = 1229801760,
                IntelCorporation2 = 1229870147,
                Intl = 1229870156,
                IntraElectronicsUsaInc = 1229870162,
                IocommInternationalTechnologyCorporation = 1229931343,
                InfoprintSolutionsCompany = 1230000928,
                ScitexCorporationLtd3 = 1230129491,
                IchikawaSoftLaboratory = 1230195744,
                Itnl = 1230261836,
                Ivm = 1230392608,
                IwatsuElectricCoLtd = 1230455124,
                ScitexCorporationLtd2 = 1231318644,
                IncaDigitalPrintersLtd = 1231971169,
                ScitexCorporationLtd4 = 1232234867,
                JetsoftDevelopment = 1246971476,
                JvcInformationProductsCo = 1247167264,
                ScitexCorporationLtd6 = 1262572116,
                KfcComputekComponentsCorporation = 1262895904,
                KlhComputers = 1263290400,
                KonicaMinoltaHoldingsInc = 1263355972,
                KonicaCorporation = 1263420225,
                Kodak = 1263486017,
                Kyocera = 1264144195,
                ScitexCorporationLtd7 = 1264677492,
                LeicaCameraAg = 1279476039,
                LeedsColour = 1279476548,
                LeftDakota = 1279541579,
                LeadingTechnologyInc = 1279607108,
                LexmarkInternationalInc = 1279613005,
                LinkComputerInc = 1279872587,
                Linotronic = 1279872591,
                LiteOnInc = 1279874117,
                MagComputronicUsaInc = 1296123715,
                MagInnovisionInc = 1296123721,
                Mannesmann = 1296125518,
                MicronTechnologyInc = 1296646990,
                Microtek = 1296646994,
                MicrovitecInc = 1296646998,
                Minolta = 1296649807,
                MitsubishiElectronicsAmericaInc = 1296651347,
                MitsubaCorporation = 1296651379,
                Minolta2 = 1296976980,
                ModgraphInc = 1297040455,
                MonitronixInc = 1297043017,
                MonacoSystemsInc = 1297043027,
                MorseTechnologyInc = 1297044051,
                MotiveSystems = 1297044553,
                MicrosoftCorporation = 1297303124,
                MutohIndustriesLtd = 1297437775,
                MitsubishiElectricCorporationKyotoWorks = 1298756723,
                NanaoUsaCorporation = 1312902721,
                NecCorporation = 1313162016,
                NexpressSolutionsLlc = 1313167440,
                NisseiSangyoAmericaLtd = 1313428307,
                NikonCorporation = 1313558350,
                OceTechnologiesBv = 1329808672,
                Ocecolor = 1329808707,
                Oki = 1330333984,
                Okidata = 1330334020,
                Okidata2 = 1330334032,
                Olivetti = 1330399574,
                OlympusOpticalCoLtd = 1330403661,
                OnyxGraphics = 1330534744,
                Optiquest = 1330664521,
                PackardBell = 1346454347,
                MatsushitaElectricIndustrialCoLtd = 1346457153,
                PantoneInc = 1346457172,
                PackardBell2 = 1346522656,
                PfuLimited = 1346786592,
                PhilipsConsumerElectronicsCo = 1346914636,
                HoyaCorporationPentaxImagingSystemsDivision = 1347310680,
                PhaseOneAS = 1347382885,
                PremierComputerInnovations = 1347568973,
                PrincetonGraphicSystems = 1347569998,
                PrincetonPublishingLabs = 1347570000,
                Qlux = 1363957080,
                QmsInc = 1364022048,
                QpcardAb = 1364214596,
                Quadlaser = 1364541764,
                QumeCorporation = 1364544837,
                RadiusInc = 1380009033,
                IntegratedColorSolutionsInc2 = 1380205688,
                RolandDgCorporation = 1380206368,
                RedmsGroupInc = 1380271181,
                Relisys = 1380273225,
                RolfGierlingMultitools = 1380404563,
                RicohCorporation = 1380533071,
                EdmundRonald = 1380863044,
                Royal = 1380931905,
                RicohPrintingSystemsltd = 1380991776,
                RoyalInformationElectronicsCoLtd = 1381256224,
                SampoCorporationOfAmerica = 1396788560,
                SamsungInc = 1396788563,
                JaimeSantanaPomares = 1396788820,
                ScitexCorporationLtd9 = 1396918612,
                DainipponScreen3 = 1396920910,
                ScitexCorporationLtd12 = 1396985888,
                SamsungElectronicsColtd = 1397048096,
                SeikoInstrumentsUsaInc = 1397049675,
                Seikosha = 1397049707,
                Scanguycom = 1397183833,
                SharpLaboratories = 1397244242,
                InternationalColorConsortium = 1397310275,
                SonyCorporation2 = 1397706329,
                Spectracal = 1397769036,
                Star = 1398030674,
                SampoTechnologyCorporation = 1398031136,
                ScitexCorporationLtd10 = 1399023988,
                ScitexCorporationLtd13 = 1399091232,
                SonyCorporation3 = 1399811705,
                TalonTechnologyCorporation = 1413565519,
                Tandy = 1413566020,
                TatungCoOfAmericaInc = 1413567573,
                TaxanAmericaInc = 1413568577,
                TokyoDenshiSekeiKk = 1413763872,
                TecoInformationSystemsInc = 1413825359,
                Tegra = 1413826386,
                TektronixInc = 1413827412,
                TexasInstruments = 1414078496,
                TypemakerLtd = 1414351698,
                ToshibaCorp = 1414484802,
                ToshibaInc = 1414484808,
                TotokuElectricCoLtd = 1414485067,
                Triumph = 1414678869,
                ToshibaTecCorporation = 1414742612,
                TtxComputerProductsInc = 1414813728,
                TvmProfessionalMonitorCorporation = 1414941984,
                TwCasperCorporation = 1414996000,
                UleadSystems = 1431065432,
                Unisys = 1431193939,
                UtzFehlauAndSohn = 1431591494,
                Varityper = 1447121481,
                Viewsonic = 1447642455,
                VisualCommunication = 1447646028,
                Wang = 1463897671,
                WilburImaging = 1464615506,
                WareToGo = 1465141042,
                WyseTechnology = 1465471813,
                XeroxCorporation = 1480938072,
                XRite = 1481787732,
                LavanyasTestCompany = 1513173555,
                ZoranCorporation = 1515340110,
                ZebraTechnologiesInc = 1516593778,
                BasiccolorGmbh = 1648968515,
                BergdesignIncorporated = 1650815591,
                IntegratedColorSolutionsInc = 1667594596,
                MacdermidColorspanInc = 1668051824,
                DainipponScreen2 = 1685266464,
                Dupont2 = 1685418094,
                FujifilmElectronicImagingLtd2 = 1717986665,
                FluxdataCorporation = 1718383992,
                ScitexCorporationLtd5 = 1769105779,
                ScitexCorporationLtd8 = 1801548404,
                ErdtSystemsGmbhAndCoKg2 = 1868706916,
                MedigraphGmbh = 1868720483,
                QubyxSarl = 1903518329,
                ScitexCorporationLtd11 = 1935894900,
                DainipponScreen4 = 1935897198,
                ScitexCorporationLtd14 = 1935962144,
                SiwiGrafikaCorporation = 1936291689,
                YxymasterGmbh = 2037938541,
            }
            public DeviceManufacturer(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _deviceManufacturer = ((DeviceManufacturers) m_io.ReadU4be());
            }
            private DeviceManufacturers _deviceManufacturer;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public DeviceManufacturers DeviceManufacturer { get { return _deviceManufacturer; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        public partial class S15Fixed16Number : KaitaiStruct
        {
            public static S15Fixed16Number FromFile(string fileName)
            {
                return new S15Fixed16Number(new KaitaiStream(fileName));
            }

            public S15Fixed16Number(KaitaiStream p__io, Icc4.TagTable.TagDefinition.S15Fixed16ArrayType p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _number = m_io.ReadBytes(4);
            }
            private byte[] _number;
            private Icc4 m_root;
            private Icc4.TagTable.TagDefinition.S15Fixed16ArrayType m_parent;
            public byte[] Number { get { return _number; } }
            public Icc4 M_Root { get { return m_root; } }
            public Icc4.TagTable.TagDefinition.S15Fixed16ArrayType M_Parent { get { return m_parent; } }
        }
        public partial class PositionNumber : KaitaiStruct
        {
            public static PositionNumber FromFile(string fileName)
            {
                return new PositionNumber(new KaitaiStream(fileName));
            }

            public PositionNumber(KaitaiStream p__io, KaitaiStruct p__parent = null, Icc4 p__root = null) : base(p__io)
            {
                m_parent = p__parent;
                m_root = p__root;
                _read();
            }
            private void _read()
            {
                _offsetToDataElement = m_io.ReadU4be();
                _sizeOfDataElement = m_io.ReadU4be();
            }
            private uint _offsetToDataElement;
            private uint _sizeOfDataElement;
            private Icc4 m_root;
            private KaitaiStruct m_parent;
            public uint OffsetToDataElement { get { return _offsetToDataElement; } }
            public uint SizeOfDataElement { get { return _sizeOfDataElement; } }
            public Icc4 M_Root { get { return m_root; } }
            public KaitaiStruct M_Parent { get { return m_parent; } }
        }
        private ProfileHeader _header;
        private TagTable _tagTable;
        private Icc4 m_root;
        private KaitaiStruct m_parent;
        public ProfileHeader Header { get { return _header; } }
        public TagTable TagTable { get { return _tagTable; } }
        public Icc4 M_Root { get { return m_root; } }
        public KaitaiStruct M_Parent { get { return m_parent; } }
    }
}
