// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

(function (root, factory) {
  if (typeof define === 'function' && define.amd) {
    define(['kaitai-struct/KaitaiStream'], factory);
  } else if (typeof module === 'object' && module.exports) {
    module.exports = factory(require('kaitai-struct/KaitaiStream'));
  } else {
    root.Icc4 = factory(root.KaitaiStream);
  }
}(this, function (KaitaiStream) {
var Icc4 = (function() {
  function Icc4(_io, _parent, _root) {
    this._io = _io;
    this._parent = _parent;
    this._root = _root || this;

    this._read();
  }
  Icc4.prototype._read = function() {
    this.header = new ProfileHeader(this._io, this, this._root);
    this.tagTable = new TagTable(this._io, this, this._root);
  }

  var U8Fixed8Number = Icc4.U8Fixed8Number = (function() {
    function U8Fixed8Number(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    U8Fixed8Number.prototype._read = function() {
      this.number = this._io.readBytes(2);
    }

    return U8Fixed8Number;
  })();

  var U16Fixed16Number = Icc4.U16Fixed16Number = (function() {
    function U16Fixed16Number(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    U16Fixed16Number.prototype._read = function() {
      this.number = this._io.readBytes(4);
    }

    return U16Fixed16Number;
  })();

  var StandardIlluminantEncoding = Icc4.StandardIlluminantEncoding = (function() {
    StandardIlluminantEncoding.StandardIlluminantEncodings = Object.freeze({
      UNKNOWN: 0,
      D50: 1,
      D65: 2,
      D93: 3,
      F2: 4,
      D55: 5,
      A: 6,
      EQUI_POWER: 7,
      F8: 8,

      0: "UNKNOWN",
      1: "D50",
      2: "D65",
      3: "D93",
      4: "F2",
      5: "D55",
      6: "A",
      7: "EQUI_POWER",
      8: "F8",
    });

    function StandardIlluminantEncoding(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    StandardIlluminantEncoding.prototype._read = function() {
      this.standardIlluminantEncoding = this._io.readU4be();
    }

    return StandardIlluminantEncoding;
  })();

  var ProfileHeader = Icc4.ProfileHeader = (function() {
    ProfileHeader.CmmSignatures = Object.freeze({
      THE_IMAGING_FACTORY_CMM: 858931796,
      AGFA_CMM: 1094929747,
      ADOBE_CMM: 1094992453,
      COLOR_GEAR_CMM: 1128484179,
      LOGOSYNC_CMM: 1147629395,
      EFI_CMM: 1162234144,
      EXACT_SCAN_CMM: 1163411779,
      FUJI_FILM_CMM: 1179000864,
      HARLEQUIN_RIP_CMM: 1212370253,
      HEIDELBERG_CMM: 1212435744,
      KODAK_CMM: 1262701907,
      KONICA_MINOLTA_CMM: 1296256324,
      DEVICE_LINK_CMM: 1380404563,
      SAMPLE_ICC_CMM: 1397310275,
      MUTOH_CMM: 1397311310,
      TOSHIBA_CMM: 1413696845,
      COLOR_GEAR_CMM_LITE: 1430471501,
      COLOR_GEAR_CMM_C: 1430474067,
      WINDOWS_COLOR_SYSTEM_CMM: 1464029984,
      WARE_TO_GO_CMM: 1465141024,
      APPLE_CMM: 1634758764,
      ARGYLL_CMS_CMM: 1634887532,
      LITTLE_CMS_CMM: 1818455411,
      ZORAN_CMM: 2053320752,

      858931796: "THE_IMAGING_FACTORY_CMM",
      1094929747: "AGFA_CMM",
      1094992453: "ADOBE_CMM",
      1128484179: "COLOR_GEAR_CMM",
      1147629395: "LOGOSYNC_CMM",
      1162234144: "EFI_CMM",
      1163411779: "EXACT_SCAN_CMM",
      1179000864: "FUJI_FILM_CMM",
      1212370253: "HARLEQUIN_RIP_CMM",
      1212435744: "HEIDELBERG_CMM",
      1262701907: "KODAK_CMM",
      1296256324: "KONICA_MINOLTA_CMM",
      1380404563: "DEVICE_LINK_CMM",
      1397310275: "SAMPLE_ICC_CMM",
      1397311310: "MUTOH_CMM",
      1413696845: "TOSHIBA_CMM",
      1430471501: "COLOR_GEAR_CMM_LITE",
      1430474067: "COLOR_GEAR_CMM_C",
      1464029984: "WINDOWS_COLOR_SYSTEM_CMM",
      1465141024: "WARE_TO_GO_CMM",
      1634758764: "APPLE_CMM",
      1634887532: "ARGYLL_CMS_CMM",
      1818455411: "LITTLE_CMS_CMM",
      2053320752: "ZORAN_CMM",
    });

    ProfileHeader.PrimaryPlatforms = Object.freeze({
      APPLE_COMPUTER_INC: 1095782476,
      MICROSOFT_CORPORATION: 1297303124,
      SILICON_GRAPHICS_INC: 1397180704,
      SUN_MICROSYSTEMS: 1398099543,

      1095782476: "APPLE_COMPUTER_INC",
      1297303124: "MICROSOFT_CORPORATION",
      1397180704: "SILICON_GRAPHICS_INC",
      1398099543: "SUN_MICROSYSTEMS",
    });

    ProfileHeader.ProfileClasses = Object.freeze({
      ABSTRACT_PROFILE: 1633842036,
      DEVICE_LINK_PROFILE: 1818848875,
      DISPLAY_DEVICE_PROFILE: 1835955314,
      NAMED_COLOR_PROFILE: 1852662636,
      OUTPUT_DEVICE_PROFILE: 1886549106,
      INPUT_DEVICE_PROFILE: 1935896178,
      COLOR_SPACE_PROFILE: 1936744803,

      1633842036: "ABSTRACT_PROFILE",
      1818848875: "DEVICE_LINK_PROFILE",
      1835955314: "DISPLAY_DEVICE_PROFILE",
      1852662636: "NAMED_COLOR_PROFILE",
      1886549106: "OUTPUT_DEVICE_PROFILE",
      1935896178: "INPUT_DEVICE_PROFILE",
      1936744803: "COLOR_SPACE_PROFILE",
    });

    ProfileHeader.RenderingIntents = Object.freeze({
      PERCEPTUAL: 0,
      MEDIA_RELATIVE_COLORIMETRIC: 1,
      SATURATION: 2,
      ICC_ABSOLUTE_COLORIMETRIC: 3,

      0: "PERCEPTUAL",
      1: "MEDIA_RELATIVE_COLORIMETRIC",
      2: "SATURATION",
      3: "ICC_ABSOLUTE_COLORIMETRIC",
    });

    ProfileHeader.DataColourSpaces = Object.freeze({
      TWO_COLOUR: 843271250,
      THREE_COLOUR: 860048466,
      FOUR_COLOUR: 876825682,
      FIVE_COLOUR: 893602898,
      SIX_COLOUR: 910380114,
      SEVEN_COLOUR: 927157330,
      EIGHT_COLOUR: 943934546,
      NINE_COLOUR: 960711762,
      TEN_COLOUR: 1094929490,
      ELEVEN_COLOUR: 1111706706,
      TWELVE_COLOUR: 1128483922,
      CMY: 1129142560,
      CMYK: 1129142603,
      THIRTEEN_COLOUR: 1145261138,
      FOURTEEN_COLOUR: 1162038354,
      FIFTEEN_COLOUR: 1178815570,
      GRAY: 1196573017,
      HLS: 1212961568,
      HSV: 1213421088,
      CIELAB_OR_PCSLAB: 1281450528,
      CIELUV: 1282766368,
      RGB: 1380401696,
      NCIEXYZ_OR_PCSXYZ: 1482250784,
      YCBCR: 1497588338,
      CIEYXY: 1501067552,

      843271250: "TWO_COLOUR",
      860048466: "THREE_COLOUR",
      876825682: "FOUR_COLOUR",
      893602898: "FIVE_COLOUR",
      910380114: "SIX_COLOUR",
      927157330: "SEVEN_COLOUR",
      943934546: "EIGHT_COLOUR",
      960711762: "NINE_COLOUR",
      1094929490: "TEN_COLOUR",
      1111706706: "ELEVEN_COLOUR",
      1128483922: "TWELVE_COLOUR",
      1129142560: "CMY",
      1129142603: "CMYK",
      1145261138: "THIRTEEN_COLOUR",
      1162038354: "FOURTEEN_COLOUR",
      1178815570: "FIFTEEN_COLOUR",
      1196573017: "GRAY",
      1212961568: "HLS",
      1213421088: "HSV",
      1281450528: "CIELAB_OR_PCSLAB",
      1282766368: "CIELUV",
      1380401696: "RGB",
      1482250784: "NCIEXYZ_OR_PCSXYZ",
      1497588338: "YCBCR",
      1501067552: "CIEYXY",
    });

    function ProfileHeader(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    ProfileHeader.prototype._read = function() {
      this.size = this._io.readU4be();
      this.preferredCmmType = this._io.readU4be();
      this.version = new VersionField(this._io, this, this._root);
      this.deviceClass = this._io.readU4be();
      this.colorSpace = this._io.readU4be();
      this.pcs = KaitaiStream.bytesToStr(this._io.readBytes(4), "ASCII");
      this.creationDateTime = new DateTimeNumber(this._io, this, this._root);
      this.fileSignature = this._io.ensureFixedContents([97, 99, 115, 112]);
      this.primaryPlatform = this._io.readU4be();
      this.profileFlags = new ProfileFlags(this._io, this, this._root);
      this.deviceManufacturer = new DeviceManufacturer(this._io, this, this._root);
      this.deviceModel = KaitaiStream.bytesToStr(this._io.readBytes(4), "ASCII");
      this.deviceAttributes = new DeviceAttributes(this._io, this, this._root);
      this.renderingIntent = this._io.readU4be();
      this.nciexyzValuesOfIlluminantOfPcs = new XyzNumber(this._io, this, this._root);
      this.creator = new DeviceManufacturer(this._io, this, this._root);
      this.identifier = this._io.readBytes(16);
      this.reservedData = this._io.readBytes(28);
    }

    var VersionField = ProfileHeader.VersionField = (function() {
      function VersionField(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      VersionField.prototype._read = function() {
        this.major = this._io.ensureFixedContents([4]);
        this.minor = this._io.readBitsInt(4);
        this.bugFixLevel = this._io.readBitsInt(4);
        this._io.alignToByte();
        this.reserved = this._io.ensureFixedContents([0, 0]);
      }

      return VersionField;
    })();

    var ProfileFlags = ProfileHeader.ProfileFlags = (function() {
      function ProfileFlags(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      ProfileFlags.prototype._read = function() {
        this.embeddedProfile = this._io.readBitsInt(1) != 0;
        this.profileCanBeUsedIndependentlyOfEmbeddedColourData = this._io.readBitsInt(1) != 0;
        this.otherFlags = this._io.readBitsInt(30);
      }

      return ProfileFlags;
    })();

    return ProfileHeader;
  })();

  var XyzNumber = Icc4.XyzNumber = (function() {
    function XyzNumber(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    XyzNumber.prototype._read = function() {
      this.x = this._io.readBytes(4);
      this.y = this._io.readBytes(4);
      this.z = this._io.readBytes(4);
    }

    return XyzNumber;
  })();

  var DateTimeNumber = Icc4.DateTimeNumber = (function() {
    function DateTimeNumber(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    DateTimeNumber.prototype._read = function() {
      this.year = this._io.readU2be();
      this.month = this._io.readU2be();
      this.day = this._io.readU2be();
      this.hour = this._io.readU2be();
      this.minute = this._io.readU2be();
      this.second = this._io.readU2be();
    }

    return DateTimeNumber;
  })();

  var Response16Number = Icc4.Response16Number = (function() {
    function Response16Number(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    Response16Number.prototype._read = function() {
      this.number = this._io.readU4be();
      this.reserved = this._io.ensureFixedContents([0, 0]);
      this.measurementValue = new S15Fixed16Number(this._io, this, this._root);
    }

    return Response16Number;
  })();

  var U1Fixed15Number = Icc4.U1Fixed15Number = (function() {
    function U1Fixed15Number(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    U1Fixed15Number.prototype._read = function() {
      this.number = this._io.readBytes(2);
    }

    return U1Fixed15Number;
  })();

  var TagTable = Icc4.TagTable = (function() {
    function TagTable(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    TagTable.prototype._read = function() {
      this.tagCount = this._io.readU4be();
      this.tags = new Array(this.tagCount);
      for (var i = 0; i < this.tagCount; i++) {
        this.tags[i] = new TagDefinition(this._io, this, this._root);
      }
    }

    var TagDefinition = TagTable.TagDefinition = (function() {
      TagDefinition.TagSignatures = Object.freeze({
        A_TO_B_0: 1093812784,
        A_TO_B_1: 1093812785,
        A_TO_B_2: 1093812786,
        B_TO_A_0: 1110589744,
        B_TO_A_1: 1110589745,
        B_TO_A_2: 1110589746,
        B_TO_D_0: 1110590512,
        B_TO_D_1: 1110590513,
        B_TO_D_2: 1110590514,
        B_TO_D_3: 1110590515,
        D_TO_B_0: 1144144432,
        D_TO_B_1: 1144144433,
        D_TO_B_2: 1144144434,
        D_TO_B_3: 1144144435,
        BLUE_TRC: 1649693251,
        BLUE_MATRIX_COLUMN: 1649957210,
        CALIBRATION_DATE_TIME: 1667329140,
        CHROMATIC_ADAPTATION: 1667785060,
        CHROMATICITY: 1667789421,
        COLORIMETRIC_INTENT_IMAGE_STATE: 1667852659,
        COLORANT_TABLE_OUT: 1668050804,
        COLORANT_ORDER: 1668051567,
        COLORANT_TABLE: 1668051572,
        COPYRIGHT: 1668313716,
        PROFILE_DESCRIPTION: 1684370275,
        DEVICE_MODEL_DESC: 1684890724,
        DEVICE_MFG_DESC: 1684893284,
        GREEN_TRC: 1733579331,
        GREEN_MATRIX_COLUMN: 1733843290,
        GAMUT: 1734438260,
        GRAY_TRC: 1800688195,
        LUMINANCE: 1819635049,
        MEASUREMENT: 1835360627,
        NAMED_COLOR_2: 1852009522,
        PREVIEW_0: 1886545200,
        PREVIEW_1: 1886545201,
        PREVIEW_2: 1886545202,
        PROFILE_SEQUENCE: 1886610801,
        PROFILE_SEQUENCE_IDENTIFIER: 1886611812,
        RED_TRC: 1918128707,
        RED_MATRIX_COLUMN: 1918392666,
        OUTPUT_RESPONSE: 1919251312,
        PERCEPTUAL_RENDERING_INTENT_GAMUT: 1919510320,
        SATURATION_RENDERING_INTENT_GAMUT: 1919510322,
        CHAR_TARGET: 1952543335,
        TECHNOLOGY: 1952801640,
        VIEWING_CONDITIONS: 1986618743,
        VIEWING_COND_DESC: 1987405156,
        MEDIA_WHITE_POINT: 2004119668,

        1093812784: "A_TO_B_0",
        1093812785: "A_TO_B_1",
        1093812786: "A_TO_B_2",
        1110589744: "B_TO_A_0",
        1110589745: "B_TO_A_1",
        1110589746: "B_TO_A_2",
        1110590512: "B_TO_D_0",
        1110590513: "B_TO_D_1",
        1110590514: "B_TO_D_2",
        1110590515: "B_TO_D_3",
        1144144432: "D_TO_B_0",
        1144144433: "D_TO_B_1",
        1144144434: "D_TO_B_2",
        1144144435: "D_TO_B_3",
        1649693251: "BLUE_TRC",
        1649957210: "BLUE_MATRIX_COLUMN",
        1667329140: "CALIBRATION_DATE_TIME",
        1667785060: "CHROMATIC_ADAPTATION",
        1667789421: "CHROMATICITY",
        1667852659: "COLORIMETRIC_INTENT_IMAGE_STATE",
        1668050804: "COLORANT_TABLE_OUT",
        1668051567: "COLORANT_ORDER",
        1668051572: "COLORANT_TABLE",
        1668313716: "COPYRIGHT",
        1684370275: "PROFILE_DESCRIPTION",
        1684890724: "DEVICE_MODEL_DESC",
        1684893284: "DEVICE_MFG_DESC",
        1733579331: "GREEN_TRC",
        1733843290: "GREEN_MATRIX_COLUMN",
        1734438260: "GAMUT",
        1800688195: "GRAY_TRC",
        1819635049: "LUMINANCE",
        1835360627: "MEASUREMENT",
        1852009522: "NAMED_COLOR_2",
        1886545200: "PREVIEW_0",
        1886545201: "PREVIEW_1",
        1886545202: "PREVIEW_2",
        1886610801: "PROFILE_SEQUENCE",
        1886611812: "PROFILE_SEQUENCE_IDENTIFIER",
        1918128707: "RED_TRC",
        1918392666: "RED_MATRIX_COLUMN",
        1919251312: "OUTPUT_RESPONSE",
        1919510320: "PERCEPTUAL_RENDERING_INTENT_GAMUT",
        1919510322: "SATURATION_RENDERING_INTENT_GAMUT",
        1952543335: "CHAR_TARGET",
        1952801640: "TECHNOLOGY",
        1986618743: "VIEWING_CONDITIONS",
        1987405156: "VIEWING_COND_DESC",
        2004119668: "MEDIA_WHITE_POINT",
      });

      TagDefinition.TagTypeSignatures = Object.freeze({
        XYZ_TYPE: 1482250784,
        COLORANT_TABLE_TYPE: 1668051572,
        CURVE_TYPE: 1668641398,
        DATA_TYPE: 1684108385,
        DATE_TIME_TYPE: 1685350765,
        MULTI_FUNCTION_A_TO_B_TABLE_TYPE: 1832993312,
        MULTI_FUNCTION_B_TO_A_TABLE_TYPE: 1833058592,
        MEASUREMENT_TYPE: 1835360627,
        MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE: 1835430961,
        MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE: 1835430962,
        MULTI_LOCALIZED_UNICODE_TYPE: 1835824483,
        MULTI_PROCESS_ELEMENTS_TYPE: 1836082548,
        NAMED_COLOR_2_TYPE: 1852009522,
        PARAMETRIC_CURVE_TYPE: 1885434465,
        PROFILE_SEQUENCE_DESC_TYPE: 1886610801,
        PROFILE_SEQUENCE_IDENTIFIER_TYPE: 1886611812,
        RESPONSE_CURVE_SET_16_TYPE: 1919120178,
        S_15_FIXED_16_ARRAY_TYPE: 1936077618,
        SIGNATURE_TYPE: 1936287520,
        TEXT_TYPE: 1952807028,
        U_16_FIXED_16_ARRAY_TYPE: 1969632050,
        U_INT_8_ARRAY_TYPE: 1969827896,
        U_INT_16_ARRAY_TYPE: 1969828150,
        U_INT_32_ARRAY_TYPE: 1969828658,
        U_INT_64_ARRAY_TYPE: 1969829428,
        VIEWING_CONDITIONS_TYPE: 1986618743,

        1482250784: "XYZ_TYPE",
        1668051572: "COLORANT_TABLE_TYPE",
        1668641398: "CURVE_TYPE",
        1684108385: "DATA_TYPE",
        1685350765: "DATE_TIME_TYPE",
        1832993312: "MULTI_FUNCTION_A_TO_B_TABLE_TYPE",
        1833058592: "MULTI_FUNCTION_B_TO_A_TABLE_TYPE",
        1835360627: "MEASUREMENT_TYPE",
        1835430961: "MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE",
        1835430962: "MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE",
        1835824483: "MULTI_LOCALIZED_UNICODE_TYPE",
        1836082548: "MULTI_PROCESS_ELEMENTS_TYPE",
        1852009522: "NAMED_COLOR_2_TYPE",
        1885434465: "PARAMETRIC_CURVE_TYPE",
        1886610801: "PROFILE_SEQUENCE_DESC_TYPE",
        1886611812: "PROFILE_SEQUENCE_IDENTIFIER_TYPE",
        1919120178: "RESPONSE_CURVE_SET_16_TYPE",
        1936077618: "S_15_FIXED_16_ARRAY_TYPE",
        1936287520: "SIGNATURE_TYPE",
        1952807028: "TEXT_TYPE",
        1969632050: "U_16_FIXED_16_ARRAY_TYPE",
        1969827896: "U_INT_8_ARRAY_TYPE",
        1969828150: "U_INT_16_ARRAY_TYPE",
        1969828658: "U_INT_32_ARRAY_TYPE",
        1969829428: "U_INT_64_ARRAY_TYPE",
        1986618743: "VIEWING_CONDITIONS_TYPE",
      });

      TagDefinition.MultiProcessElementsTypes = Object.freeze({
        BACS_ELEMENT_TYPE: 1648444243,
        CLUT_ELEMENT_TYPE: 1668052340,
        ONE_DIMENSIONAL_CURVES_TYPE: 1668641382,
        EACS_ELEMENT_TYPE: 1698775891,
        MATRIX_ELEMENT_TYPE: 1835103334,
        CURVE_SET_ELEMENT_TABLE_TYPE: 1835428980,
        FORMULA_CURVE_SEGMENTS_TYPE: 1885434470,
        SAMPLED_CURVE_SEGMENT_TYPE: 1935764838,

        1648444243: "BACS_ELEMENT_TYPE",
        1668052340: "CLUT_ELEMENT_TYPE",
        1668641382: "ONE_DIMENSIONAL_CURVES_TYPE",
        1698775891: "EACS_ELEMENT_TYPE",
        1835103334: "MATRIX_ELEMENT_TYPE",
        1835428980: "CURVE_SET_ELEMENT_TABLE_TYPE",
        1885434470: "FORMULA_CURVE_SEGMENTS_TYPE",
        1935764838: "SAMPLED_CURVE_SEGMENT_TYPE",
      });

      function TagDefinition(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      TagDefinition.prototype._read = function() {
        this.tagSignature = this._io.readU4be();
        this.offsetToDataElement = this._io.readU4be();
        this.sizeOfDataElement = this._io.readU4be();
      }

      var BlueMatrixColumnTag = TagDefinition.BlueMatrixColumnTag = (function() {
        function BlueMatrixColumnTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BlueMatrixColumnTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.XYZ_TYPE:
            this.tagData = new XyzType(this._io, this, this._root);
            break;
          }
        }

        return BlueMatrixColumnTag;
      })();

      var DeviceMfgDescTag = TagDefinition.DeviceMfgDescTag = (function() {
        function DeviceMfgDescTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DeviceMfgDescTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_LOCALIZED_UNICODE_TYPE:
            this.tagData = new MultiLocalizedUnicodeType(this._io, this, this._root);
            break;
          }
        }

        return DeviceMfgDescTag;
      })();

      var NamedColor2Type = TagDefinition.NamedColor2Type = (function() {
        function NamedColor2Type(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        NamedColor2Type.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.vendorSpecificFlag = this._io.readU4be();
          this.countOfNamedColours = this._io.readU4be();
          this.numberOfDeviceCoordinatesForEachNamedColour = this._io.readU4be();
          this.prefixForEachColourName = KaitaiStream.bytesToStr(this._io.readBytesTerm(0, false, true, true), "ASCII");
          this.prefixForEachColourNamePadding = new Array((32 - this.prefixForEachColourName.length));
          for (var i = 0; i < (32 - this.prefixForEachColourName.length); i++) {
            this.prefixForEachColourNamePadding = this._io.ensureFixedContents([0]);
          }
          this.suffixForEachColourName = KaitaiStream.bytesToStr(this._io.readBytesTerm(0, false, true, true), "ASCII");
          this.suffixForEachColourNamePadding = new Array((32 - this.suffixForEachColourName.length));
          for (var i = 0; i < (32 - this.suffixForEachColourName.length); i++) {
            this.suffixForEachColourNamePadding = this._io.ensureFixedContents([0]);
          }
          this.namedColourDefinitions = new Array(this.countOfNamedColours);
          for (var i = 0; i < this.countOfNamedColours; i++) {
            this.namedColourDefinitions[i] = new NamedColourDefinition(this._io, this, this._root);
          }
        }

        var NamedColourDefinition = NamedColor2Type.NamedColourDefinition = (function() {
          function NamedColourDefinition(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          NamedColourDefinition.prototype._read = function() {
            this.rootName = KaitaiStream.bytesToStr(this._io.readBytesTerm(0, false, true, true), "ASCII");
            this.rootNamePadding = new Array((32 - this.rootName.length));
            for (var i = 0; i < (32 - this.rootName.length); i++) {
              this.rootNamePadding = this._io.ensureFixedContents([0]);
            }
            this.pcsCoordinates = this._io.readBytes(6);
            if (this._parent.numberOfDeviceCoordinatesForEachNamedColour > 0) {
              this.deviceCoordinates = new Array(this._parent.countOfNamedColours);
              for (var i = 0; i < this._parent.countOfNamedColours; i++) {
                this.deviceCoordinates[i] = this._io.readU2be();
              }
            }
          }

          return NamedColourDefinition;
        })();

        return NamedColor2Type;
      })();

      var ViewingConditionsTag = TagDefinition.ViewingConditionsTag = (function() {
        function ViewingConditionsTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ViewingConditionsTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.VIEWING_CONDITIONS_TYPE:
            this.tagData = new ViewingConditionsType(this._io, this, this._root);
            break;
          }
        }

        return ViewingConditionsTag;
      })();

      var BlueTrcTag = TagDefinition.BlueTrcTag = (function() {
        function BlueTrcTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BlueTrcTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.CURVE_TYPE:
            this.tagData = new CurveType(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.PARAMETRIC_CURVE_TYPE:
            this.tagData = new ParametricCurveType(this._io, this, this._root);
            break;
          }
        }

        return BlueTrcTag;
      })();

      var ResponseCurveSet16Type = TagDefinition.ResponseCurveSet16Type = (function() {
        function ResponseCurveSet16Type(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ResponseCurveSet16Type.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfChannels = this._io.readU2be();
          this.countOfMeasurementTypes = this._io.readU2be();
          this.responseCurveStructureOffsets = new Array(this.countOfMeasurementTypes);
          for (var i = 0; i < this.countOfMeasurementTypes; i++) {
            this.responseCurveStructureOffsets[i] = this._io.readU4be();
          }
          this.responseCurveStructures = this._io.readBytesFull();
        }

        return ResponseCurveSet16Type;
      })();

      var CurveType = TagDefinition.CurveType = (function() {
        function CurveType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        CurveType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfEntries = this._io.readU4be();
          if (this.numberOfEntries > 1) {
            this.curveValues = new Array(this.numberOfEntries);
            for (var i = 0; i < this.numberOfEntries; i++) {
              this.curveValues[i] = this._io.readU4be();
            }
          }
          if (this.numberOfEntries == 1) {
            this.curveValue = this._io.readU1();
          }
        }

        return CurveType;
      })();

      var SaturationRenderingIntentGamutTag = TagDefinition.SaturationRenderingIntentGamutTag = (function() {
        function SaturationRenderingIntentGamutTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        SaturationRenderingIntentGamutTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.SIGNATURE_TYPE:
            this.tagData = new SignatureType(this._io, this, this._root);
            break;
          }
        }

        return SaturationRenderingIntentGamutTag;
      })();

      var XyzType = TagDefinition.XyzType = (function() {
        function XyzType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        XyzType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.values = [];
          var i = 0;
          while (!this._io.isEof()) {
            this.values.push(new XyzNumber(this._io, this, this._root));
            i++;
          }
        }

        return XyzType;
      })();

      var Lut8Type = TagDefinition.Lut8Type = (function() {
        function Lut8Type(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        Lut8Type.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfInputChannels = this._io.readU1();
          this.numberOfOutputChannels = this._io.readU1();
          this.numberOfClutGridPoints = this._io.readU1();
          this.padding = this._io.ensureFixedContents([0]);
          this.encodedEParameters = new Array(9);
          for (var i = 0; i < 9; i++) {
            this.encodedEParameters[i] = this._io.readS4be();
          }
          this.numberOfInputTableEntries = this._io.readU4be();
          this.numberOfOutputTableEntries = this._io.readU4be();
          this.inputTables = this._io.readBytes((256 * this.numberOfInputChannels));
          this.clutValues = this._io.readBytes(((this.numberOfClutGridPoints ^ this.numberOfInputChannels) * this.numberOfOutputChannels));
          this.outputTables = this._io.readBytes((256 * this.numberOfOutputChannels));
        }

        return Lut8Type;
      })();

      var BToA2Tag = TagDefinition.BToA2Tag = (function() {
        function BToA2Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BToA2Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
            this.tagData = new LutBToAType(this._io, this, this._root);
            break;
          }
        }

        return BToA2Tag;
      })();

      var LutAToBType = TagDefinition.LutAToBType = (function() {
        function LutAToBType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        LutAToBType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfInputChannels = this._io.readU1();
          this.numberOfOutputChannels = this._io.readU1();
          this.padding = this._io.ensureFixedContents([0, 0]);
          this.offsetToFirstBCurve = this._io.readU4be();
          this.offsetToMatrix = this._io.readU4be();
          this.offsetToFirstMCurve = this._io.readU4be();
          this.offsetToClut = this._io.readU4be();
          this.offsetToFirstACurve = this._io.readU4be();
          this.data = this._io.readBytesFull();
        }

        return LutAToBType;
      })();

      var BToA0Tag = TagDefinition.BToA0Tag = (function() {
        function BToA0Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BToA0Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
            this.tagData = new LutBToAType(this._io, this, this._root);
            break;
          }
        }

        return BToA0Tag;
      })();

      var MediaWhitePointTag = TagDefinition.MediaWhitePointTag = (function() {
        function MediaWhitePointTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        MediaWhitePointTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.XYZ_TYPE:
            this.tagData = new XyzType(this._io, this, this._root);
            break;
          }
        }

        return MediaWhitePointTag;
      })();

      var Lut16Type = TagDefinition.Lut16Type = (function() {
        function Lut16Type(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        Lut16Type.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfInputChannels = this._io.readU1();
          this.numberOfOutputChannels = this._io.readU1();
          this.numberOfClutGridPoints = this._io.readU1();
          this.padding = this._io.ensureFixedContents([0]);
          this.encodedEParameters = new Array(9);
          for (var i = 0; i < 9; i++) {
            this.encodedEParameters[i] = this._io.readS4be();
          }
          this.numberOfInputTableEntries = this._io.readU4be();
          this.numberOfOutputTableEntries = this._io.readU4be();
          this.inputTables = this._io.readBytes(((2 * this.numberOfInputChannels) * this.numberOfInputTableEntries));
          this.clutValues = this._io.readBytes(((2 * (this.numberOfClutGridPoints ^ this.numberOfInputChannels)) * this.numberOfOutputChannels));
          this.outputTables = this._io.readBytes(((2 * this.numberOfOutputChannels) * this.numberOfOutputTableEntries));
        }

        return Lut16Type;
      })();

      var PerceptualRenderingIntentGamutTag = TagDefinition.PerceptualRenderingIntentGamutTag = (function() {
        function PerceptualRenderingIntentGamutTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        PerceptualRenderingIntentGamutTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.SIGNATURE_TYPE:
            this.tagData = new SignatureType(this._io, this, this._root);
            break;
          }
        }

        return PerceptualRenderingIntentGamutTag;
      })();

      var U16Fixed16ArrayType = TagDefinition.U16Fixed16ArrayType = (function() {
        function U16Fixed16ArrayType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        U16Fixed16ArrayType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.values = [];
          var i = 0;
          while (!this._io.isEof()) {
            this.values.push(new U16Fixed16Number(this._io, this, this._root));
            i++;
          }
        }

        return U16Fixed16ArrayType;
      })();

      var ColorantTableOutTag = TagDefinition.ColorantTableOutTag = (function() {
        function ColorantTableOutTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ColorantTableOutTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.COLORANT_TABLE_TYPE:
            this.tagData = new ColorantTableType(this._io, this, this._root);
            break;
          }
        }

        return ColorantTableOutTag;
      })();

      var MeasurementTag = TagDefinition.MeasurementTag = (function() {
        function MeasurementTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        MeasurementTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MEASUREMENT_TYPE:
            this.tagData = new MeasurementType(this._io, this, this._root);
            break;
          }
        }

        return MeasurementTag;
      })();

      var ProfileSequenceTag = TagDefinition.ProfileSequenceTag = (function() {
        function ProfileSequenceTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ProfileSequenceTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.PROFILE_SEQUENCE_DESC_TYPE:
            this.tagData = new ProfileSequenceDescType(this._io, this, this._root);
            break;
          }
        }

        return ProfileSequenceTag;
      })();

      var TechnologyTag = TagDefinition.TechnologyTag = (function() {
        function TechnologyTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        TechnologyTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.SIGNATURE_TYPE:
            this.tagData = new SignatureType(this._io, this, this._root);
            break;
          }
        }

        return TechnologyTag;
      })();

      var AToB0Tag = TagDefinition.AToB0Tag = (function() {
        function AToB0Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        AToB0Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
            this.tagData = new LutAToBType(this._io, this, this._root);
            break;
          }
        }

        return AToB0Tag;
      })();

      var DToB0Tag = TagDefinition.DToB0Tag = (function() {
        function DToB0Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DToB0Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return DToB0Tag;
      })();

      var OutputResponseTag = TagDefinition.OutputResponseTag = (function() {
        function OutputResponseTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        OutputResponseTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.RESPONSE_CURVE_SET_16_TYPE:
            this.tagData = new ResponseCurveSet16Type(this._io, this, this._root);
            break;
          }
        }

        return OutputResponseTag;
      })();

      var GreenMatrixColumnTag = TagDefinition.GreenMatrixColumnTag = (function() {
        function GreenMatrixColumnTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        GreenMatrixColumnTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.XYZ_TYPE:
            this.tagData = new XyzType(this._io, this, this._root);
            break;
          }
        }

        return GreenMatrixColumnTag;
      })();

      var ProfileDescriptionTag = TagDefinition.ProfileDescriptionTag = (function() {
        function ProfileDescriptionTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ProfileDescriptionTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_LOCALIZED_UNICODE_TYPE:
            this.tagData = new MultiLocalizedUnicodeType(this._io, this, this._root);
            break;
          }
        }

        return ProfileDescriptionTag;
      })();

      var Preview1Tag = TagDefinition.Preview1Tag = (function() {
        function Preview1Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        Preview1Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
            this.tagData = new LutBToAType(this._io, this, this._root);
            break;
          }
        }

        return Preview1Tag;
      })();

      var RedTrcTag = TagDefinition.RedTrcTag = (function() {
        function RedTrcTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        RedTrcTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.CURVE_TYPE:
            this.tagData = new CurveType(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.PARAMETRIC_CURVE_TYPE:
            this.tagData = new ParametricCurveType(this._io, this, this._root);
            break;
          }
        }

        return RedTrcTag;
      })();

      var BToD0Tag = TagDefinition.BToD0Tag = (function() {
        function BToD0Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BToD0Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return BToD0Tag;
      })();

      var DToB1Tag = TagDefinition.DToB1Tag = (function() {
        function DToB1Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DToB1Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return DToB1Tag;
      })();

      var BToA1Tag = TagDefinition.BToA1Tag = (function() {
        function BToA1Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BToA1Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
            this.tagData = new LutBToAType(this._io, this, this._root);
            break;
          }
        }

        return BToA1Tag;
      })();

      var ParametricCurveType = TagDefinition.ParametricCurveType = (function() {
        ParametricCurveType.ParametricCurveTypeFunctions = Object.freeze({
          Y_EQUALS_X_TO_POWER_OF_G: 0,
          CIE_122_1996: 1,
          IEC_61966_3: 2,
          IEC_61966_2_1: 3,
          Y_EQUALS_OB_AX_PLUS_B_CB_TO_POWER_OF_G_PLUS_C: 4,

          0: "Y_EQUALS_X_TO_POWER_OF_G",
          1: "CIE_122_1996",
          2: "IEC_61966_3",
          3: "IEC_61966_2_1",
          4: "Y_EQUALS_OB_AX_PLUS_B_CB_TO_POWER_OF_G_PLUS_C",
        });

        function ParametricCurveType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ParametricCurveType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.functionType = this._io.readU2be();
          this.reserved2 = this._io.ensureFixedContents([0, 0]);
          switch (this.functionType) {
          case Icc4.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.Y_EQUALS_X_TO_POWER_OF_G:
            this.parameters = new ParamsYEqualsXToPowerOfG(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.CIE_122_1996:
            this.parameters = new ParamsCie1221996(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.IEC_61966_2_1:
            this.parameters = new ParamsIec6196621(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.Y_EQUALS_OB_AX_PLUS_B_CB_TO_POWER_OF_G_PLUS_C:
            this.parameters = new ParamsYEqualsObAxPlusBCbToPowerOfGPlusC(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.IEC_61966_3:
            this.parameters = new ParamsIec619663(this._io, this, this._root);
            break;
          }
        }

        var ParamsIec619663 = ParametricCurveType.ParamsIec619663 = (function() {
          function ParamsIec619663(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          ParamsIec619663.prototype._read = function() {
            this.g = this._io.readS4be();
            this.a = this._io.readS4be();
            this.b = this._io.readS4be();
            this.c = this._io.readS4be();
          }

          return ParamsIec619663;
        })();

        var ParamsIec6196621 = ParametricCurveType.ParamsIec6196621 = (function() {
          function ParamsIec6196621(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          ParamsIec6196621.prototype._read = function() {
            this.g = this._io.readS4be();
            this.a = this._io.readS4be();
            this.b = this._io.readS4be();
            this.c = this._io.readS4be();
            this.d = this._io.readS4be();
          }

          return ParamsIec6196621;
        })();

        var ParamsYEqualsXToPowerOfG = ParametricCurveType.ParamsYEqualsXToPowerOfG = (function() {
          function ParamsYEqualsXToPowerOfG(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          ParamsYEqualsXToPowerOfG.prototype._read = function() {
            this.g = this._io.readS4be();
          }

          return ParamsYEqualsXToPowerOfG;
        })();

        var ParamsYEqualsObAxPlusBCbToPowerOfGPlusC = ParametricCurveType.ParamsYEqualsObAxPlusBCbToPowerOfGPlusC = (function() {
          function ParamsYEqualsObAxPlusBCbToPowerOfGPlusC(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          ParamsYEqualsObAxPlusBCbToPowerOfGPlusC.prototype._read = function() {
            this.g = this._io.readS4be();
            this.a = this._io.readS4be();
            this.b = this._io.readS4be();
            this.c = this._io.readS4be();
            this.d = this._io.readS4be();
            this.e = this._io.readS4be();
            this.f = this._io.readS4be();
          }

          return ParamsYEqualsObAxPlusBCbToPowerOfGPlusC;
        })();

        var ParamsCie1221996 = ParametricCurveType.ParamsCie1221996 = (function() {
          function ParamsCie1221996(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          ParamsCie1221996.prototype._read = function() {
            this.g = this._io.readS4be();
            this.a = this._io.readS4be();
            this.b = this._io.readS4be();
          }

          return ParamsCie1221996;
        })();

        return ParametricCurveType;
      })();

      var ChromaticityTag = TagDefinition.ChromaticityTag = (function() {
        function ChromaticityTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ChromaticityTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.CHROMATICITY_TYPE:
            this.tagData = new ChromaticityType(this._io, this, this._root);
            break;
          }
        }

        return ChromaticityTag;
      })();

      var ChromaticAdaptationTag = TagDefinition.ChromaticAdaptationTag = (function() {
        function ChromaticAdaptationTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ChromaticAdaptationTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.S_15_FIXED_16_ARRAY_TYPE:
            this.tagData = new S15Fixed16ArrayType(this._io, this, this._root);
            break;
          }
        }

        return ChromaticAdaptationTag;
      })();

      var MeasurementType = TagDefinition.MeasurementType = (function() {
        MeasurementType.StandardObserverEncodings = Object.freeze({
          UNKNOWN: 0,
          CIE_1931_STANDARD_COLORIMETRIC_OBSERVER: 1,
          CIE_1964_STANDARD_COLORIMETRIC_OBSERVER: 2,

          0: "UNKNOWN",
          1: "CIE_1931_STANDARD_COLORIMETRIC_OBSERVER",
          2: "CIE_1964_STANDARD_COLORIMETRIC_OBSERVER",
        });

        MeasurementType.MeasurementGeometryEncodings = Object.freeze({
          UNKNOWN: 0,
          ZERO_DEGREES_TO_45_DEGREES_OR_45_DEGREES_TO_ZERO_DEGREES: 1,
          ZERO_DEGREES_TO_D_DEGREES_OR_D_DEGREES_TO_ZERO_DEGREES: 2,

          0: "UNKNOWN",
          1: "ZERO_DEGREES_TO_45_DEGREES_OR_45_DEGREES_TO_ZERO_DEGREES",
          2: "ZERO_DEGREES_TO_D_DEGREES_OR_D_DEGREES_TO_ZERO_DEGREES",
        });

        MeasurementType.MeasurementFlareEncodings = Object.freeze({
          ZERO_PERCENT: 0,
          ONE_HUNDRED_PERCENT: 65536,

          0: "ZERO_PERCENT",
          65536: "ONE_HUNDRED_PERCENT",
        });

        function MeasurementType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        MeasurementType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.standardObserverEncoding = this._io.readU4be();
          this.nciexyzTristimulusValuesForMeasurementBacking = new XyzNumber(this._io, this, this._root);
          this.measurementGeometryEncoding = this._io.readU4be();
          this.measurementFlareEncoding = this._io.readU4be();
          this.standardIlluminantEncoding = new StandardIlluminantEncoding(this._io, this, this._root);
        }

        return MeasurementType;
      })();

      var TextType = TagDefinition.TextType = (function() {
        function TextType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        TextType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.value = KaitaiStream.bytesToStr(KaitaiStream.bytesTerminate(this._io.readBytesFull(), 0, false), "ASCII");
        }

        return TextType;
      })();

      var ProfileSequenceIdentifierType = TagDefinition.ProfileSequenceIdentifierType = (function() {
        function ProfileSequenceIdentifierType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ProfileSequenceIdentifierType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfStructures = this._io.readU4be();
          this.positionsTable = new Array(this.numberOfStructures);
          for (var i = 0; i < this.numberOfStructures; i++) {
            this.positionsTable[i] = new PositionNumber(this._io, this, this._root);
          }
          this.profileIdentifiers = new Array(this.numberOfStructures);
          for (var i = 0; i < this.numberOfStructures; i++) {
            this.profileIdentifiers[i] = new ProfileIdentifier(this._io, this, this._root);
          }
        }

        var ProfileIdentifier = ProfileSequenceIdentifierType.ProfileIdentifier = (function() {
          function ProfileIdentifier(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          ProfileIdentifier.prototype._read = function() {
            this.profileId = this._io.readBytes(16);
            this.profileDescription = new MultiLocalizedUnicodeType(this._io, this, this._root);
          }

          return ProfileIdentifier;
        })();

        return ProfileSequenceIdentifierType;
      })();

      var ColorantTableType = TagDefinition.ColorantTableType = (function() {
        function ColorantTableType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ColorantTableType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.countOfColorants = this._io.readU4be();
          this.colorants = new Array(this.countOfColorants);
          for (var i = 0; i < this.countOfColorants; i++) {
            this.colorants[i] = new Colorant(this._io, this, this._root);
          }
        }

        var Colorant = ColorantTableType.Colorant = (function() {
          function Colorant(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          Colorant.prototype._read = function() {
            this.name = KaitaiStream.bytesToStr(this._io.readBytesTerm(0, false, true, true), "ASCII");
            this.padding = new Array((32 - this.name.length));
            for (var i = 0; i < (32 - this.name.length); i++) {
              this.padding = this._io.ensureFixedContents([0]);
            }
            this.pcsValues = this._io.readBytes(6);
          }

          return Colorant;
        })();

        return ColorantTableType;
      })();

      var SignatureType = TagDefinition.SignatureType = (function() {
        function SignatureType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        SignatureType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.signature = KaitaiStream.bytesToStr(this._io.readBytes(4), "ASCII");
        }

        return SignatureType;
      })();

      var CopyrightTag = TagDefinition.CopyrightTag = (function() {
        function CopyrightTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        CopyrightTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_LOCALIZED_UNICODE_TYPE:
            this.tagData = new MultiLocalizedUnicodeType(this._io, this, this._root);
            break;
          }
        }

        return CopyrightTag;
      })();

      var Preview0Tag = TagDefinition.Preview0Tag = (function() {
        function Preview0Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        Preview0Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
            this.tagData = new LutAToBType(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
            this.tagData = new LutBToAType(this._io, this, this._root);
            break;
          }
        }

        return Preview0Tag;
      })();

      var DateTimeType = TagDefinition.DateTimeType = (function() {
        function DateTimeType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DateTimeType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.dateAndTime = new DateTimeNumber(this._io, this, this._root);
        }

        return DateTimeType;
      })();

      var DToB3Tag = TagDefinition.DToB3Tag = (function() {
        function DToB3Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DToB3Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return DToB3Tag;
      })();

      var Preview2Tag = TagDefinition.Preview2Tag = (function() {
        function Preview2Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        Preview2Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
            this.tagData = new LutBToAType(this._io, this, this._root);
            break;
          }
        }

        return Preview2Tag;
      })();

      var DeviceModelDescTag = TagDefinition.DeviceModelDescTag = (function() {
        function DeviceModelDescTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DeviceModelDescTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_LOCALIZED_UNICODE_TYPE:
            this.tagData = new MultiLocalizedUnicodeType(this._io, this, this._root);
            break;
          }
        }

        return DeviceModelDescTag;
      })();

      var MultiProcessElementsType = TagDefinition.MultiProcessElementsType = (function() {
        function MultiProcessElementsType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        MultiProcessElementsType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfInputChannels = this._io.readU2be();
          this.numberOfOutputChannels = this._io.readU2be();
          this.numberOfProcessingElements = this._io.readU4be();
          this.processElementPositionsTable = new Array(this.numberOfProcessingElements);
          for (var i = 0; i < this.numberOfProcessingElements; i++) {
            this.processElementPositionsTable[i] = new PositionNumber(this._io, this, this._root);
          }
          this.data = this._io.readBytesFull();
        }

        return MultiProcessElementsType;
      })();

      var UInt16ArrayType = TagDefinition.UInt16ArrayType = (function() {
        function UInt16ArrayType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        UInt16ArrayType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.values = [];
          var i = 0;
          while (!this._io.isEof()) {
            this.values.push(this._io.readU2be());
            i++;
          }
        }

        return UInt16ArrayType;
      })();

      var ColorantOrderTag = TagDefinition.ColorantOrderTag = (function() {
        function ColorantOrderTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ColorantOrderTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.COLORANT_ORDER_TYPE:
            this.tagData = new ColorantOrderType(this._io, this, this._root);
            break;
          }
        }

        return ColorantOrderTag;
      })();

      var DataType = TagDefinition.DataType = (function() {
        DataType.DataTypes = Object.freeze({
          ASCII_DATA: 0,
          BINARY_DATA: 1,

          0: "ASCII_DATA",
          1: "BINARY_DATA",
        });

        function DataType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DataType.prototype._read = function() {
          this.dataFlag = this._io.readU4be();
        }

        return DataType;
      })();

      var ChromaticityType = TagDefinition.ChromaticityType = (function() {
        ChromaticityType.ColorantAndPhosphorEncodings = Object.freeze({
          UNKNOWN: 0,
          ITU_R_BT_709_2: 1,
          SMPTE_RP145: 2,
          EBU_TECH_3213_E: 3,
          P22: 4,

          0: "UNKNOWN",
          1: "ITU_R_BT_709_2",
          2: "SMPTE_RP145",
          3: "EBU_TECH_3213_E",
          4: "P22",
        });

        function ChromaticityType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ChromaticityType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfDeviceChannels = this._io.readU2be();
          this.colorantAndPhosphorEncoding = this._io.readU2be();
          this.ciexyCoordinatesPerChannel = new Array(this.numberOfDeviceChannels);
          for (var i = 0; i < this.numberOfDeviceChannels; i++) {
            this.ciexyCoordinatesPerChannel[i] = new CiexyCoordinateValues(this._io, this, this._root);
          }
        }

        var CiexyCoordinateValues = ChromaticityType.CiexyCoordinateValues = (function() {
          function CiexyCoordinateValues(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          CiexyCoordinateValues.prototype._read = function() {
            this.xCoordinate = this._io.readU2be();
            this.yCoordinate = this._io.readU2be();
          }

          return CiexyCoordinateValues;
        })();

        return ChromaticityType;
      })();

      var LuminanceTag = TagDefinition.LuminanceTag = (function() {
        function LuminanceTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        LuminanceTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.XYZ_TYPE:
            this.tagData = new XyzType(this._io, this, this._root);
            break;
          }
        }

        return LuminanceTag;
      })();

      var S15Fixed16ArrayType = TagDefinition.S15Fixed16ArrayType = (function() {
        function S15Fixed16ArrayType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        S15Fixed16ArrayType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.values = [];
          var i = 0;
          while (!this._io.isEof()) {
            this.values.push(new S15Fixed16Number(this._io, this, this._root));
            i++;
          }
        }

        return S15Fixed16ArrayType;
      })();

      var MultiLocalizedUnicodeType = TagDefinition.MultiLocalizedUnicodeType = (function() {
        function MultiLocalizedUnicodeType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        MultiLocalizedUnicodeType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfRecords = this._io.readU4be();
          this.recordSize = this._io.readU4be();
          this.records = new Array(this.numberOfRecords);
          for (var i = 0; i < this.numberOfRecords; i++) {
            this.records[i] = new Record(this._io, this, this._root);
          }
        }

        var Record = MultiLocalizedUnicodeType.Record = (function() {
          function Record(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          Record.prototype._read = function() {
            this.languageCode = this._io.readU2be();
            this.countryCode = this._io.readU2be();
            this.stringLength = this._io.readU4be();
            this.stringOffset = this._io.readU4be();
          }
          Object.defineProperty(Record.prototype, 'stringData', {
            get: function() {
              if (this._m_stringData !== undefined)
                return this._m_stringData;
              var _pos = this._io.pos;
              this._io.seek(this.stringOffset);
              this._m_stringData = KaitaiStream.bytesToStr(this._io.readBytes(this.stringLength), "UTF-16BE");
              this._io.seek(_pos);
              return this._m_stringData;
            }
          });

          return Record;
        })();

        return MultiLocalizedUnicodeType;
      })();

      var AToB2Tag = TagDefinition.AToB2Tag = (function() {
        function AToB2Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        AToB2Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
            this.tagData = new LutAToBType(this._io, this, this._root);
            break;
          }
        }

        return AToB2Tag;
      })();

      var AToB1Tag = TagDefinition.AToB1Tag = (function() {
        function AToB1Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        AToB1Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_A_TO_B_TABLE_TYPE:
            this.tagData = new LutAToBType(this._io, this, this._root);
            break;
          }
        }

        return AToB1Tag;
      })();

      var ColorimetricIntentImageStateTag = TagDefinition.ColorimetricIntentImageStateTag = (function() {
        function ColorimetricIntentImageStateTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ColorimetricIntentImageStateTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.SIGNATURE_TYPE:
            this.tagData = new SignatureType(this._io, this, this._root);
            break;
          }
        }

        return ColorimetricIntentImageStateTag;
      })();

      var CharTargetTag = TagDefinition.CharTargetTag = (function() {
        function CharTargetTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        CharTargetTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.TEXT_TYPE:
            this.tagData = new TextType(this._io, this, this._root);
            break;
          }
        }

        return CharTargetTag;
      })();

      var ColorantTableTag = TagDefinition.ColorantTableTag = (function() {
        function ColorantTableTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ColorantTableTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.COLORANT_TABLE_TYPE:
            this.tagData = new ColorantTableType(this._io, this, this._root);
            break;
          }
        }

        return ColorantTableTag;
      })();

      var CalibrationDateTimeTag = TagDefinition.CalibrationDateTimeTag = (function() {
        function CalibrationDateTimeTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        CalibrationDateTimeTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.DATE_TIME_TYPE:
            this.tagData = new DateTimeType(this._io, this, this._root);
            break;
          }
        }

        return CalibrationDateTimeTag;
      })();

      var NamedColor2Tag = TagDefinition.NamedColor2Tag = (function() {
        function NamedColor2Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        NamedColor2Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.NAMED_COLOR_2_TYPE:
            this.tagData = new NamedColor2Type(this._io, this, this._root);
            break;
          }
        }

        return NamedColor2Tag;
      })();

      var ViewingCondDescTag = TagDefinition.ViewingCondDescTag = (function() {
        function ViewingCondDescTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ViewingCondDescTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_LOCALIZED_UNICODE_TYPE:
            this.tagData = new MultiLocalizedUnicodeType(this._io, this, this._root);
            break;
          }
        }

        return ViewingCondDescTag;
      })();

      var BToD3Tag = TagDefinition.BToD3Tag = (function() {
        function BToD3Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BToD3Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return BToD3Tag;
      })();

      var ProfileSequenceDescType = TagDefinition.ProfileSequenceDescType = (function() {
        function ProfileSequenceDescType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ProfileSequenceDescType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfDescriptionStructures = this._io.readU4be();
          this.profileDescriptions = new Array(this.numberOfDescriptionStructures);
          for (var i = 0; i < this.numberOfDescriptionStructures; i++) {
            this.profileDescriptions[i] = new ProfileDescription(this._io, this, this._root);
          }
        }

        var ProfileDescription = ProfileSequenceDescType.ProfileDescription = (function() {
          function ProfileDescription(_io, _parent, _root) {
            this._io = _io;
            this._parent = _parent;
            this._root = _root || this;

            this._read();
          }
          ProfileDescription.prototype._read = function() {
            this.deviceManufacturer = new DeviceManufacturer(this._io, this, this._root);
            this.deviceModel = KaitaiStream.bytesToStr(this._io.readBytes(4), "ASCII");
            this.deviceAttributes = new DeviceAttributes(this._io, this, this._root);
            this.deviceTechnology = new TechnologyTag(this._io, this, this._root);
            this.descriptionOfDeviceManufacturer = new DeviceMfgDescTag(this._io, this, this._root);
            this.descriptionOfDeviceModel = new DeviceModelDescTag(this._io, this, this._root);
          }

          return ProfileDescription;
        })();

        return ProfileSequenceDescType;
      })();

      var ProfileSequenceIdentifierTag = TagDefinition.ProfileSequenceIdentifierTag = (function() {
        function ProfileSequenceIdentifierTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ProfileSequenceIdentifierTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.PROFILE_SEQUENCE_IDENTIFIER_TYPE:
            this.tagData = new ProfileSequenceIdentifierType(this._io, this, this._root);
            break;
          }
        }

        return ProfileSequenceIdentifierTag;
      })();

      var BToD1Tag = TagDefinition.BToD1Tag = (function() {
        function BToD1Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BToD1Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return BToD1Tag;
      })();

      var ColorantOrderType = TagDefinition.ColorantOrderType = (function() {
        function ColorantOrderType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ColorantOrderType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.countOfColorants = this._io.readU4be();
          this.numbersOfColorantsInOrderOfPrinting = new Array(this.countOfColorants);
          for (var i = 0; i < this.countOfColorants; i++) {
            this.numbersOfColorantsInOrderOfPrinting[i] = this._io.readU1();
          }
        }

        return ColorantOrderType;
      })();

      var DToB2Tag = TagDefinition.DToB2Tag = (function() {
        function DToB2Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        DToB2Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return DToB2Tag;
      })();

      var GrayTrcTag = TagDefinition.GrayTrcTag = (function() {
        function GrayTrcTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        GrayTrcTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.CURVE_TYPE:
            this.tagData = new CurveType(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.PARAMETRIC_CURVE_TYPE:
            this.tagData = new ParametricCurveType(this._io, this, this._root);
            break;
          }
        }

        return GrayTrcTag;
      })();

      var ViewingConditionsType = TagDefinition.ViewingConditionsType = (function() {
        function ViewingConditionsType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        ViewingConditionsType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.unNormalizedCiexyzValuesForIlluminant = new XyzNumber(this._io, this, this._root);
          this.unNormalizedCiexyzValuesForSurround = new XyzNumber(this._io, this, this._root);
          this.illuminantType = new StandardIlluminantEncoding(this._io, this, this._root);
        }

        return ViewingConditionsType;
      })();

      var LutBToAType = TagDefinition.LutBToAType = (function() {
        function LutBToAType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        LutBToAType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.numberOfInputChannels = this._io.readU1();
          this.numberOfOutputChannels = this._io.readU1();
          this.padding = this._io.ensureFixedContents([0, 0]);
          this.offsetToFirstBCurve = this._io.readU4be();
          this.offsetToMatrix = this._io.readU4be();
          this.offsetToFirstMCurve = this._io.readU4be();
          this.offsetToClut = this._io.readU4be();
          this.offsetToFirstACurve = this._io.readU4be();
          this.data = this._io.readBytesFull();
        }

        return LutBToAType;
      })();

      var GreenTrcTag = TagDefinition.GreenTrcTag = (function() {
        function GreenTrcTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        GreenTrcTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.CURVE_TYPE:
            this.tagData = new CurveType(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.PARAMETRIC_CURVE_TYPE:
            this.tagData = new ParametricCurveType(this._io, this, this._root);
            break;
          }
        }

        return GreenTrcTag;
      })();

      var UInt32ArrayType = TagDefinition.UInt32ArrayType = (function() {
        function UInt32ArrayType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        UInt32ArrayType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.values = [];
          var i = 0;
          while (!this._io.isEof()) {
            this.values.push(this._io.readU4be());
            i++;
          }
        }

        return UInt32ArrayType;
      })();

      var GamutTag = TagDefinition.GamutTag = (function() {
        function GamutTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        GamutTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_ONE_BYTE_PRECISION_TYPE:
            this.tagData = new Lut8Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_TABLE_WITH_TWO_BYTE_PRECISION_TYPE:
            this.tagData = new Lut16Type(this._io, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_FUNCTION_B_TO_A_TABLE_TYPE:
            this.tagData = new LutBToAType(this._io, this, this._root);
            break;
          }
        }

        return GamutTag;
      })();

      var UInt8ArrayType = TagDefinition.UInt8ArrayType = (function() {
        function UInt8ArrayType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        UInt8ArrayType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.values = [];
          var i = 0;
          while (!this._io.isEof()) {
            this.values.push(this._io.readU1());
            i++;
          }
        }

        return UInt8ArrayType;
      })();

      var RedMatrixColumnTag = TagDefinition.RedMatrixColumnTag = (function() {
        function RedMatrixColumnTag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        RedMatrixColumnTag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.XYZ_TYPE:
            this.tagData = new XyzType(this._io, this, this._root);
            break;
          }
        }

        return RedMatrixColumnTag;
      })();

      var UInt64ArrayType = TagDefinition.UInt64ArrayType = (function() {
        function UInt64ArrayType(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        UInt64ArrayType.prototype._read = function() {
          this.reserved = this._io.ensureFixedContents([0, 0, 0, 0]);
          this.values = [];
          var i = 0;
          while (!this._io.isEof()) {
            this.values.push(this._io.readU8be());
            i++;
          }
        }

        return UInt64ArrayType;
      })();

      var BToD2Tag = TagDefinition.BToD2Tag = (function() {
        function BToD2Tag(_io, _parent, _root) {
          this._io = _io;
          this._parent = _parent;
          this._root = _root || this;

          this._read();
        }
        BToD2Tag.prototype._read = function() {
          this.tagType = this._io.readU4be();
          switch (this.tagType) {
          case Icc4.TagTable.TagDefinition.TagTypeSignatures.MULTI_PROCESS_ELEMENTS_TYPE:
            this.tagData = new MultiProcessElementsType(this._io, this, this._root);
            break;
          }
        }

        return BToD2Tag;
      })();
      Object.defineProperty(TagDefinition.prototype, 'tagDataElement', {
        get: function() {
          if (this._m_tagDataElement !== undefined)
            return this._m_tagDataElement;
          var _pos = this._io.pos;
          this._io.seek(this.offsetToDataElement);
          switch (this.tagSignature) {
          case Icc4.TagTable.TagDefinition.TagSignatures.PROFILE_SEQUENCE_IDENTIFIER:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ProfileSequenceIdentifierTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.COLORIMETRIC_INTENT_IMAGE_STATE:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ColorimetricIntentImageStateTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.RED_TRC:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new RedTrcTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.PREVIEW_0:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new Preview0Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.GREEN_TRC:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new GreenTrcTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.B_TO_D_0:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BToD0Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.COLORANT_TABLE_OUT:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ColorantTableOutTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.B_TO_A_2:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BToA2Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.CALIBRATION_DATE_TIME:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new CalibrationDateTimeTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.CHROMATIC_ADAPTATION:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ChromaticAdaptationTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.COLORANT_TABLE:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ColorantTableTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.A_TO_B_2:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new AToB2Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.D_TO_B_1:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new DToB1Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.CHROMATICITY:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ChromaticityTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.BLUE_MATRIX_COLUMN:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BlueMatrixColumnTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.A_TO_B_0:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new AToB0Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.B_TO_D_2:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BToD2Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.B_TO_A_1:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BToA1Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.MEDIA_WHITE_POINT:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new MediaWhitePointTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.D_TO_B_0:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new DToB0Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.NAMED_COLOR_2:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new NamedColor2Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.D_TO_B_2:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new DToB2Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.RED_MATRIX_COLUMN:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new RedMatrixColumnTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.VIEWING_CONDITIONS:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ViewingConditionsTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.A_TO_B_1:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new AToB1Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.PREVIEW_1:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new Preview1Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.GRAY_TRC:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new GrayTrcTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.DEVICE_MFG_DESC:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new DeviceMfgDescTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.B_TO_D_1:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BToD1Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.COLORANT_ORDER:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ColorantOrderTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.COPYRIGHT:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new CopyrightTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.GAMUT:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new GamutTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.CHAR_TARGET:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new CharTargetTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.OUTPUT_RESPONSE:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new OutputResponseTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.TECHNOLOGY:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new TechnologyTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.VIEWING_COND_DESC:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ViewingCondDescTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.PROFILE_DESCRIPTION:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ProfileDescriptionTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.LUMINANCE:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new LuminanceTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.D_TO_B_3:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new DToB3Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.B_TO_D_3:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BToD3Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.B_TO_A_0:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BToA0Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.PREVIEW_2:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new Preview2Tag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.GREEN_MATRIX_COLUMN:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new GreenMatrixColumnTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.PROFILE_SEQUENCE:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new ProfileSequenceTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.SATURATION_RENDERING_INTENT_GAMUT:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new SaturationRenderingIntentGamutTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.PERCEPTUAL_RENDERING_INTENT_GAMUT:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new PerceptualRenderingIntentGamutTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.BLUE_TRC:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new BlueTrcTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.DEVICE_MODEL_DESC:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new DeviceModelDescTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          case Icc4.TagTable.TagDefinition.TagSignatures.MEASUREMENT:
            this._raw__m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            var _io__raw__m_tagDataElement = new KaitaiStream(this._raw__m_tagDataElement);
            this._m_tagDataElement = new MeasurementTag(_io__raw__m_tagDataElement, this, this._root);
            break;
          default:
            this._m_tagDataElement = this._io.readBytes(this.sizeOfDataElement);
            break;
          }
          this._io.seek(_pos);
          return this._m_tagDataElement;
        }
      });

      return TagDefinition;
    })();

    return TagTable;
  })();

  var DeviceAttributes = Icc4.DeviceAttributes = (function() {
    DeviceAttributes.DeviceAttributesReflectiveOrTransparency = Object.freeze({
      REFLECTIVE: 0,
      TRANSPARENCY: 1,

      0: "REFLECTIVE",
      1: "TRANSPARENCY",
    });

    DeviceAttributes.DeviceAttributesGlossyOrMatte = Object.freeze({
      GLOSSY: 0,
      MATTE: 1,

      0: "GLOSSY",
      1: "MATTE",
    });

    DeviceAttributes.DeviceAttributesPositiveOrNegativeMediaPolarity = Object.freeze({
      POSITIVE_MEDIA_POLARITY: 0,
      NEGATIVE_MEDIA_POLARITY: 1,

      0: "POSITIVE_MEDIA_POLARITY",
      1: "NEGATIVE_MEDIA_POLARITY",
    });

    DeviceAttributes.DeviceAttributesColourOrBlackAndWhiteMedia = Object.freeze({
      COLOUR_MEDIA: 0,
      BLACK_AND_WHITE_MEDIA: 1,

      0: "COLOUR_MEDIA",
      1: "BLACK_AND_WHITE_MEDIA",
    });

    function DeviceAttributes(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    DeviceAttributes.prototype._read = function() {
      this.reflectiveOrTransparency = this._io.readBitsInt(1);
      this.glossyOrMatte = this._io.readBitsInt(1);
      this.positiveOrNegativeMediaPolarity = this._io.readBitsInt(1);
      this.colourOrBlackAndWhiteMedia = this._io.readBitsInt(1);
      this.reserved = this._io.readBitsInt(28);
      this.vendorSpecific = this._io.readBitsInt(32);
    }

    return DeviceAttributes;
  })();

  var DeviceManufacturer = Icc4.DeviceManufacturer = (function() {
    DeviceManufacturer.DeviceManufacturers = Object.freeze({
      ERDT_SYSTEMS_GMBH_AND_CO_KG: 878981744,
      AAMAZING_TECHNOLOGIES_INC: 1094798657,
      ACER_PERIPHERALS: 1094927698,
      ACOLYTE_COLOR_RESEARCH: 1094929492,
      ACTIX_SYTEMS_INC: 1094931529,
      ADARA_TECHNOLOGY_INC: 1094992210,
      ADOBE_SYSTEMS_INCORPORATED: 1094992453,
      ADI_SYSTEMS_INC: 1094994208,
      AGFA_GRAPHICS_NV: 1095190081,
      ALPS_ELECTRIC_USA_INC: 1095519556,
      ALPS_ELECTRIC_USA_INC_2: 1095520339,
      ALWAN_COLOR_EXPERTISE: 1095522126,
      AMIABLE_TECHNOLOGIES_INC: 1095586889,
      AOC_INTERNATIONAL_USA_LTD: 1095713568,
      APAGO: 1095778631,
      APPLE_COMPUTER_INC: 1095782476,
      AST: 1095980064,
      ATANDT_COMPUTER_SYSTEMS: 1096033876,
      BARBIERI_ELECTRONIC: 1111573836,
      BARCO_NV: 1112687439,
      BREAKPOINT_PTY_LIMITED: 1112689488,
      BROTHER_INDUSTRIES_LTD: 1112690516,
      BULL: 1112886348,
      BUS_COMPUTER_SYSTEMS: 1112888096,
      C_ITOH: 1127041364,
      INTEL_CORPORATION: 1128353106,
      CANON_INC_CANON_DEVELOPMENT_AMERICAS_INC: 1128353359,
      CARROLL_TOUCH: 1128354386,
      CASIO_COMPUTER_CO_LTD: 1128354633,
      COLORBUS_PL: 1128420691,
      CROSSFIELD: 1128614944,
      CROSSFIELD_2: 1128615032,
      CGS_PUBLISHING_TECHNOLOGIES_INTERNATIONAL_GMBH: 1128747808,
      ROCHESTER_ROBOTICS: 1128811808,
      COLOUR_IMAGING_GROUP_LONDON: 1128875852,
      CITIZEN: 1128879177,
      CANDELA_LTD: 1129066544,
      COLOR_IQ: 1129072977,
      CHROMACO_INC: 1129136975,
      CHROMIX: 1129146712,
      COLORGRAPHIC_COMMUNICATIONS_CORPORATION: 1129270351,
      COMPAQ_COMPUTER_CORPORATION: 1129270608,
      COMPEQ_USA_FOCUS_TECHNOLOGY: 1129270640,
      CONRAC_DISPLAY_PRODUCTS: 1129270866,
      CORDATA_TECHNOLOGIES_INC: 1129271876,
      COMPAQ_COMPUTER_CORPORATION_2: 1129337120,
      COLORPRO: 1129337423,
      CORNERSTONE: 1129467424,
      CTX_INTERNATIONAL_INC: 1129601056,
      COLORVISION: 1129728339,
      FUJITSU_LABORATORIES_LTD: 1129792288,
      DARIUS_TECHNOLOGY_LTD: 1145131593,
      DATAPRODUCTS: 1145132097,
      DRY_CREEK_PHOTO: 1145262112,
      DIGITAL_CONTENTS_RESOURCE_CENTER_CHUNG_ANG_UNIVERSITY: 1145262659,
      DELL_COMPUTER_CORPORATION: 1145392204,
      DAINIPPON_INK_AND_CHEMICALS: 1145652000,
      DICONIX: 1145652047,
      DIGITAL: 1145653065,
      DIGITAL_LIGHT_AND_COLOR: 1145841219,
      DOPPELGANGER_LLC: 1146113095,
      DAINIPPON_SCREEN: 1146298400,
      DOOSOL: 1146310476,
      DUPONT: 1146441806,
      EPSON: 1162892111,
      ESKO_GRAPHICS: 1163086671,
      ELECTRONICS_AND_TELECOMMUNICATIONS_RESEARCH_INSTITUTE: 1163153993,
      EVEREX_SYSTEMS_INC: 1163281746,
      EXACTCODE_GMBH: 1163411779,
      EIZO_NANAO_CORPORATION: 1164540527,
      FALCO_DATA_PRODUCTS_INC: 1178684483,
      FUJI_PHOTO_FILM_COLTD: 1179000864,
      FUJIFILM_ELECTRONIC_IMAGING_LTD: 1179010377,
      FNORD_SOFTWARE: 1179537988,
      FORA_INC: 1179603521,
      FOREFRONT_TECHNOLOGY_CORPORATION: 1179603525,
      FUJITSU: 1179658794,
      WAYTECH_DEVELOPMENT_INC: 1179664672,
      FUJITSU_2: 1179994697,
      FUJI_XEROX_CO_LTD: 1180180512,
      GCC_TECHNOLOGIES_INC: 1195590432,
      GLOBAL_GRAPHICS_SOFTWARE_LIMITED: 1195856716,
      GRETAGMACBETH: 1196245536,
      GMG_GMBH_AND_CO_KG: 1196246816,
      GOLDSTAR_TECHNOLOGY_INC: 1196379204,
      GIANTPRINT_PTY_LTD: 1196446292,
      GRETAGMACBETH_2: 1196707138,
      WAYTECH_DEVELOPMENT_INC_2: 1196835616,
      SONY_CORPORATION: 1196896843,
      HCI: 1212369184,
      HEIDELBERGER_DRUCKMASCHINEN_AG: 1212435744,
      HERMES: 1212502605,
      HITACHI_AMERICA_LTD: 1212765249,
      HEWLETT_PACKARD: 1213210656,
      HITACHI_LTD: 1213481760,
      HITI_DIGITAL_INC: 1214862441,
      IBM_CORPORATION: 1229081888,
      SCITEX_CORPORATION_LTD: 1229213268,
      HEWLETT_PACKARD_2: 1229275936,
      IIYAMA_NORTH_AMERICA_INC: 1229543745,
      IKEGAMI_ELECTRONICS_INC: 1229669703,
      IMAGE_SYSTEMS_CORPORATION: 1229799751,
      INGRAM_MICRO_INC: 1229801760,
      INTEL_CORPORATION_2: 1229870147,
      INTL: 1229870156,
      INTRA_ELECTRONICS_USA_INC: 1229870162,
      IOCOMM_INTERNATIONAL_TECHNOLOGY_CORPORATION: 1229931343,
      INFOPRINT_SOLUTIONS_COMPANY: 1230000928,
      SCITEX_CORPORATION_LTD_3: 1230129491,
      ICHIKAWA_SOFT_LABORATORY: 1230195744,
      ITNL: 1230261836,
      IVM: 1230392608,
      IWATSU_ELECTRIC_CO_LTD: 1230455124,
      SCITEX_CORPORATION_LTD_2: 1231318644,
      INCA_DIGITAL_PRINTERS_LTD: 1231971169,
      SCITEX_CORPORATION_LTD_4: 1232234867,
      JETSOFT_DEVELOPMENT: 1246971476,
      JVC_INFORMATION_PRODUCTS_CO: 1247167264,
      SCITEX_CORPORATION_LTD_6: 1262572116,
      KFC_COMPUTEK_COMPONENTS_CORPORATION: 1262895904,
      KLH_COMPUTERS: 1263290400,
      KONICA_MINOLTA_HOLDINGS_INC: 1263355972,
      KONICA_CORPORATION: 1263420225,
      KODAK: 1263486017,
      KYOCERA: 1264144195,
      SCITEX_CORPORATION_LTD_7: 1264677492,
      LEICA_CAMERA_AG: 1279476039,
      LEEDS_COLOUR: 1279476548,
      LEFT_DAKOTA: 1279541579,
      LEADING_TECHNOLOGY_INC: 1279607108,
      LEXMARK_INTERNATIONAL_INC: 1279613005,
      LINK_COMPUTER_INC: 1279872587,
      LINOTRONIC: 1279872591,
      LITE_ON_INC: 1279874117,
      MAG_COMPUTRONIC_USA_INC: 1296123715,
      MAG_INNOVISION_INC: 1296123721,
      MANNESMANN: 1296125518,
      MICRON_TECHNOLOGY_INC: 1296646990,
      MICROTEK: 1296646994,
      MICROVITEC_INC: 1296646998,
      MINOLTA: 1296649807,
      MITSUBISHI_ELECTRONICS_AMERICA_INC: 1296651347,
      MITSUBA_CORPORATION: 1296651379,
      MINOLTA_2: 1296976980,
      MODGRAPH_INC: 1297040455,
      MONITRONIX_INC: 1297043017,
      MONACO_SYSTEMS_INC: 1297043027,
      MORSE_TECHNOLOGY_INC: 1297044051,
      MOTIVE_SYSTEMS: 1297044553,
      MICROSOFT_CORPORATION: 1297303124,
      MUTOH_INDUSTRIES_LTD: 1297437775,
      MITSUBISHI_ELECTRIC_CORPORATION_KYOTO_WORKS: 1298756723,
      NANAO_USA_CORPORATION: 1312902721,
      NEC_CORPORATION: 1313162016,
      NEXPRESS_SOLUTIONS_LLC: 1313167440,
      NISSEI_SANGYO_AMERICA_LTD: 1313428307,
      NIKON_CORPORATION: 1313558350,
      OCE_TECHNOLOGIES_BV: 1329808672,
      OCECOLOR: 1329808707,
      OKI: 1330333984,
      OKIDATA: 1330334020,
      OKIDATA_2: 1330334032,
      OLIVETTI: 1330399574,
      OLYMPUS_OPTICAL_CO_LTD: 1330403661,
      ONYX_GRAPHICS: 1330534744,
      OPTIQUEST: 1330664521,
      PACKARD_BELL: 1346454347,
      MATSUSHITA_ELECTRIC_INDUSTRIAL_CO_LTD: 1346457153,
      PANTONE_INC: 1346457172,
      PACKARD_BELL_2: 1346522656,
      PFU_LIMITED: 1346786592,
      PHILIPS_CONSUMER_ELECTRONICS_CO: 1346914636,
      HOYA_CORPORATION_PENTAX_IMAGING_SYSTEMS_DIVISION: 1347310680,
      PHASE_ONE_A_S: 1347382885,
      PREMIER_COMPUTER_INNOVATIONS: 1347568973,
      PRINCETON_GRAPHIC_SYSTEMS: 1347569998,
      PRINCETON_PUBLISHING_LABS: 1347570000,
      QLUX: 1363957080,
      QMS_INC: 1364022048,
      QPCARD_AB: 1364214596,
      QUADLASER: 1364541764,
      QUME_CORPORATION: 1364544837,
      RADIUS_INC: 1380009033,
      INTEGRATED_COLOR_SOLUTIONS_INC_2: 1380205688,
      ROLAND_DG_CORPORATION: 1380206368,
      REDMS_GROUP_INC: 1380271181,
      RELISYS: 1380273225,
      ROLF_GIERLING_MULTITOOLS: 1380404563,
      RICOH_CORPORATION: 1380533071,
      EDMUND_RONALD: 1380863044,
      ROYAL: 1380931905,
      RICOH_PRINTING_SYSTEMSLTD: 1380991776,
      ROYAL_INFORMATION_ELECTRONICS_CO_LTD: 1381256224,
      SAMPO_CORPORATION_OF_AMERICA: 1396788560,
      SAMSUNG_INC: 1396788563,
      JAIME_SANTANA_POMARES: 1396788820,
      SCITEX_CORPORATION_LTD_9: 1396918612,
      DAINIPPON_SCREEN_3: 1396920910,
      SCITEX_CORPORATION_LTD_12: 1396985888,
      SAMSUNG_ELECTRONICS_COLTD: 1397048096,
      SEIKO_INSTRUMENTS_USA_INC: 1397049675,
      SEIKOSHA: 1397049707,
      SCANGUYCOM: 1397183833,
      SHARP_LABORATORIES: 1397244242,
      INTERNATIONAL_COLOR_CONSORTIUM: 1397310275,
      SONY_CORPORATION_2: 1397706329,
      SPECTRACAL: 1397769036,
      STAR: 1398030674,
      SAMPO_TECHNOLOGY_CORPORATION: 1398031136,
      SCITEX_CORPORATION_LTD_10: 1399023988,
      SCITEX_CORPORATION_LTD_13: 1399091232,
      SONY_CORPORATION_3: 1399811705,
      TALON_TECHNOLOGY_CORPORATION: 1413565519,
      TANDY: 1413566020,
      TATUNG_CO_OF_AMERICA_INC: 1413567573,
      TAXAN_AMERICA_INC: 1413568577,
      TOKYO_DENSHI_SEKEI_KK: 1413763872,
      TECO_INFORMATION_SYSTEMS_INC: 1413825359,
      TEGRA: 1413826386,
      TEKTRONIX_INC: 1413827412,
      TEXAS_INSTRUMENTS: 1414078496,
      TYPEMAKER_LTD: 1414351698,
      TOSHIBA_CORP: 1414484802,
      TOSHIBA_INC: 1414484808,
      TOTOKU_ELECTRIC_CO_LTD: 1414485067,
      TRIUMPH: 1414678869,
      TOSHIBA_TEC_CORPORATION: 1414742612,
      TTX_COMPUTER_PRODUCTS_INC: 1414813728,
      TVM_PROFESSIONAL_MONITOR_CORPORATION: 1414941984,
      TW_CASPER_CORPORATION: 1414996000,
      ULEAD_SYSTEMS: 1431065432,
      UNISYS: 1431193939,
      UTZ_FEHLAU_AND_SOHN: 1431591494,
      VARITYPER: 1447121481,
      VIEWSONIC: 1447642455,
      VISUAL_COMMUNICATION: 1447646028,
      WANG: 1463897671,
      WILBUR_IMAGING: 1464615506,
      WARE_TO_GO: 1465141042,
      WYSE_TECHNOLOGY: 1465471813,
      XEROX_CORPORATION: 1480938072,
      X_RITE: 1481787732,
      LAVANYAS_TEST_COMPANY: 1513173555,
      ZORAN_CORPORATION: 1515340110,
      ZEBRA_TECHNOLOGIES_INC: 1516593778,
      BASICCOLOR_GMBH: 1648968515,
      BERGDESIGN_INCORPORATED: 1650815591,
      INTEGRATED_COLOR_SOLUTIONS_INC: 1667594596,
      MACDERMID_COLORSPAN_INC: 1668051824,
      DAINIPPON_SCREEN_2: 1685266464,
      DUPONT_2: 1685418094,
      FUJIFILM_ELECTRONIC_IMAGING_LTD_2: 1717986665,
      FLUXDATA_CORPORATION: 1718383992,
      SCITEX_CORPORATION_LTD_5: 1769105779,
      SCITEX_CORPORATION_LTD_8: 1801548404,
      ERDT_SYSTEMS_GMBH_AND_CO_KG_2: 1868706916,
      MEDIGRAPH_GMBH: 1868720483,
      QUBYX_SARL: 1903518329,
      SCITEX_CORPORATION_LTD_11: 1935894900,
      DAINIPPON_SCREEN_4: 1935897198,
      SCITEX_CORPORATION_LTD_14: 1935962144,
      SIWI_GRAFIKA_CORPORATION: 1936291689,
      YXYMASTER_GMBH: 2037938541,

      878981744: "ERDT_SYSTEMS_GMBH_AND_CO_KG",
      1094798657: "AAMAZING_TECHNOLOGIES_INC",
      1094927698: "ACER_PERIPHERALS",
      1094929492: "ACOLYTE_COLOR_RESEARCH",
      1094931529: "ACTIX_SYTEMS_INC",
      1094992210: "ADARA_TECHNOLOGY_INC",
      1094992453: "ADOBE_SYSTEMS_INCORPORATED",
      1094994208: "ADI_SYSTEMS_INC",
      1095190081: "AGFA_GRAPHICS_NV",
      1095519556: "ALPS_ELECTRIC_USA_INC",
      1095520339: "ALPS_ELECTRIC_USA_INC_2",
      1095522126: "ALWAN_COLOR_EXPERTISE",
      1095586889: "AMIABLE_TECHNOLOGIES_INC",
      1095713568: "AOC_INTERNATIONAL_USA_LTD",
      1095778631: "APAGO",
      1095782476: "APPLE_COMPUTER_INC",
      1095980064: "AST",
      1096033876: "ATANDT_COMPUTER_SYSTEMS",
      1111573836: "BARBIERI_ELECTRONIC",
      1112687439: "BARCO_NV",
      1112689488: "BREAKPOINT_PTY_LIMITED",
      1112690516: "BROTHER_INDUSTRIES_LTD",
      1112886348: "BULL",
      1112888096: "BUS_COMPUTER_SYSTEMS",
      1127041364: "C_ITOH",
      1128353106: "INTEL_CORPORATION",
      1128353359: "CANON_INC_CANON_DEVELOPMENT_AMERICAS_INC",
      1128354386: "CARROLL_TOUCH",
      1128354633: "CASIO_COMPUTER_CO_LTD",
      1128420691: "COLORBUS_PL",
      1128614944: "CROSSFIELD",
      1128615032: "CROSSFIELD_2",
      1128747808: "CGS_PUBLISHING_TECHNOLOGIES_INTERNATIONAL_GMBH",
      1128811808: "ROCHESTER_ROBOTICS",
      1128875852: "COLOUR_IMAGING_GROUP_LONDON",
      1128879177: "CITIZEN",
      1129066544: "CANDELA_LTD",
      1129072977: "COLOR_IQ",
      1129136975: "CHROMACO_INC",
      1129146712: "CHROMIX",
      1129270351: "COLORGRAPHIC_COMMUNICATIONS_CORPORATION",
      1129270608: "COMPAQ_COMPUTER_CORPORATION",
      1129270640: "COMPEQ_USA_FOCUS_TECHNOLOGY",
      1129270866: "CONRAC_DISPLAY_PRODUCTS",
      1129271876: "CORDATA_TECHNOLOGIES_INC",
      1129337120: "COMPAQ_COMPUTER_CORPORATION_2",
      1129337423: "COLORPRO",
      1129467424: "CORNERSTONE",
      1129601056: "CTX_INTERNATIONAL_INC",
      1129728339: "COLORVISION",
      1129792288: "FUJITSU_LABORATORIES_LTD",
      1145131593: "DARIUS_TECHNOLOGY_LTD",
      1145132097: "DATAPRODUCTS",
      1145262112: "DRY_CREEK_PHOTO",
      1145262659: "DIGITAL_CONTENTS_RESOURCE_CENTER_CHUNG_ANG_UNIVERSITY",
      1145392204: "DELL_COMPUTER_CORPORATION",
      1145652000: "DAINIPPON_INK_AND_CHEMICALS",
      1145652047: "DICONIX",
      1145653065: "DIGITAL",
      1145841219: "DIGITAL_LIGHT_AND_COLOR",
      1146113095: "DOPPELGANGER_LLC",
      1146298400: "DAINIPPON_SCREEN",
      1146310476: "DOOSOL",
      1146441806: "DUPONT",
      1162892111: "EPSON",
      1163086671: "ESKO_GRAPHICS",
      1163153993: "ELECTRONICS_AND_TELECOMMUNICATIONS_RESEARCH_INSTITUTE",
      1163281746: "EVEREX_SYSTEMS_INC",
      1163411779: "EXACTCODE_GMBH",
      1164540527: "EIZO_NANAO_CORPORATION",
      1178684483: "FALCO_DATA_PRODUCTS_INC",
      1179000864: "FUJI_PHOTO_FILM_COLTD",
      1179010377: "FUJIFILM_ELECTRONIC_IMAGING_LTD",
      1179537988: "FNORD_SOFTWARE",
      1179603521: "FORA_INC",
      1179603525: "FOREFRONT_TECHNOLOGY_CORPORATION",
      1179658794: "FUJITSU",
      1179664672: "WAYTECH_DEVELOPMENT_INC",
      1179994697: "FUJITSU_2",
      1180180512: "FUJI_XEROX_CO_LTD",
      1195590432: "GCC_TECHNOLOGIES_INC",
      1195856716: "GLOBAL_GRAPHICS_SOFTWARE_LIMITED",
      1196245536: "GRETAGMACBETH",
      1196246816: "GMG_GMBH_AND_CO_KG",
      1196379204: "GOLDSTAR_TECHNOLOGY_INC",
      1196446292: "GIANTPRINT_PTY_LTD",
      1196707138: "GRETAGMACBETH_2",
      1196835616: "WAYTECH_DEVELOPMENT_INC_2",
      1196896843: "SONY_CORPORATION",
      1212369184: "HCI",
      1212435744: "HEIDELBERGER_DRUCKMASCHINEN_AG",
      1212502605: "HERMES",
      1212765249: "HITACHI_AMERICA_LTD",
      1213210656: "HEWLETT_PACKARD",
      1213481760: "HITACHI_LTD",
      1214862441: "HITI_DIGITAL_INC",
      1229081888: "IBM_CORPORATION",
      1229213268: "SCITEX_CORPORATION_LTD",
      1229275936: "HEWLETT_PACKARD_2",
      1229543745: "IIYAMA_NORTH_AMERICA_INC",
      1229669703: "IKEGAMI_ELECTRONICS_INC",
      1229799751: "IMAGE_SYSTEMS_CORPORATION",
      1229801760: "INGRAM_MICRO_INC",
      1229870147: "INTEL_CORPORATION_2",
      1229870156: "INTL",
      1229870162: "INTRA_ELECTRONICS_USA_INC",
      1229931343: "IOCOMM_INTERNATIONAL_TECHNOLOGY_CORPORATION",
      1230000928: "INFOPRINT_SOLUTIONS_COMPANY",
      1230129491: "SCITEX_CORPORATION_LTD_3",
      1230195744: "ICHIKAWA_SOFT_LABORATORY",
      1230261836: "ITNL",
      1230392608: "IVM",
      1230455124: "IWATSU_ELECTRIC_CO_LTD",
      1231318644: "SCITEX_CORPORATION_LTD_2",
      1231971169: "INCA_DIGITAL_PRINTERS_LTD",
      1232234867: "SCITEX_CORPORATION_LTD_4",
      1246971476: "JETSOFT_DEVELOPMENT",
      1247167264: "JVC_INFORMATION_PRODUCTS_CO",
      1262572116: "SCITEX_CORPORATION_LTD_6",
      1262895904: "KFC_COMPUTEK_COMPONENTS_CORPORATION",
      1263290400: "KLH_COMPUTERS",
      1263355972: "KONICA_MINOLTA_HOLDINGS_INC",
      1263420225: "KONICA_CORPORATION",
      1263486017: "KODAK",
      1264144195: "KYOCERA",
      1264677492: "SCITEX_CORPORATION_LTD_7",
      1279476039: "LEICA_CAMERA_AG",
      1279476548: "LEEDS_COLOUR",
      1279541579: "LEFT_DAKOTA",
      1279607108: "LEADING_TECHNOLOGY_INC",
      1279613005: "LEXMARK_INTERNATIONAL_INC",
      1279872587: "LINK_COMPUTER_INC",
      1279872591: "LINOTRONIC",
      1279874117: "LITE_ON_INC",
      1296123715: "MAG_COMPUTRONIC_USA_INC",
      1296123721: "MAG_INNOVISION_INC",
      1296125518: "MANNESMANN",
      1296646990: "MICRON_TECHNOLOGY_INC",
      1296646994: "MICROTEK",
      1296646998: "MICROVITEC_INC",
      1296649807: "MINOLTA",
      1296651347: "MITSUBISHI_ELECTRONICS_AMERICA_INC",
      1296651379: "MITSUBA_CORPORATION",
      1296976980: "MINOLTA_2",
      1297040455: "MODGRAPH_INC",
      1297043017: "MONITRONIX_INC",
      1297043027: "MONACO_SYSTEMS_INC",
      1297044051: "MORSE_TECHNOLOGY_INC",
      1297044553: "MOTIVE_SYSTEMS",
      1297303124: "MICROSOFT_CORPORATION",
      1297437775: "MUTOH_INDUSTRIES_LTD",
      1298756723: "MITSUBISHI_ELECTRIC_CORPORATION_KYOTO_WORKS",
      1312902721: "NANAO_USA_CORPORATION",
      1313162016: "NEC_CORPORATION",
      1313167440: "NEXPRESS_SOLUTIONS_LLC",
      1313428307: "NISSEI_SANGYO_AMERICA_LTD",
      1313558350: "NIKON_CORPORATION",
      1329808672: "OCE_TECHNOLOGIES_BV",
      1329808707: "OCECOLOR",
      1330333984: "OKI",
      1330334020: "OKIDATA",
      1330334032: "OKIDATA_2",
      1330399574: "OLIVETTI",
      1330403661: "OLYMPUS_OPTICAL_CO_LTD",
      1330534744: "ONYX_GRAPHICS",
      1330664521: "OPTIQUEST",
      1346454347: "PACKARD_BELL",
      1346457153: "MATSUSHITA_ELECTRIC_INDUSTRIAL_CO_LTD",
      1346457172: "PANTONE_INC",
      1346522656: "PACKARD_BELL_2",
      1346786592: "PFU_LIMITED",
      1346914636: "PHILIPS_CONSUMER_ELECTRONICS_CO",
      1347310680: "HOYA_CORPORATION_PENTAX_IMAGING_SYSTEMS_DIVISION",
      1347382885: "PHASE_ONE_A_S",
      1347568973: "PREMIER_COMPUTER_INNOVATIONS",
      1347569998: "PRINCETON_GRAPHIC_SYSTEMS",
      1347570000: "PRINCETON_PUBLISHING_LABS",
      1363957080: "QLUX",
      1364022048: "QMS_INC",
      1364214596: "QPCARD_AB",
      1364541764: "QUADLASER",
      1364544837: "QUME_CORPORATION",
      1380009033: "RADIUS_INC",
      1380205688: "INTEGRATED_COLOR_SOLUTIONS_INC_2",
      1380206368: "ROLAND_DG_CORPORATION",
      1380271181: "REDMS_GROUP_INC",
      1380273225: "RELISYS",
      1380404563: "ROLF_GIERLING_MULTITOOLS",
      1380533071: "RICOH_CORPORATION",
      1380863044: "EDMUND_RONALD",
      1380931905: "ROYAL",
      1380991776: "RICOH_PRINTING_SYSTEMSLTD",
      1381256224: "ROYAL_INFORMATION_ELECTRONICS_CO_LTD",
      1396788560: "SAMPO_CORPORATION_OF_AMERICA",
      1396788563: "SAMSUNG_INC",
      1396788820: "JAIME_SANTANA_POMARES",
      1396918612: "SCITEX_CORPORATION_LTD_9",
      1396920910: "DAINIPPON_SCREEN_3",
      1396985888: "SCITEX_CORPORATION_LTD_12",
      1397048096: "SAMSUNG_ELECTRONICS_COLTD",
      1397049675: "SEIKO_INSTRUMENTS_USA_INC",
      1397049707: "SEIKOSHA",
      1397183833: "SCANGUYCOM",
      1397244242: "SHARP_LABORATORIES",
      1397310275: "INTERNATIONAL_COLOR_CONSORTIUM",
      1397706329: "SONY_CORPORATION_2",
      1397769036: "SPECTRACAL",
      1398030674: "STAR",
      1398031136: "SAMPO_TECHNOLOGY_CORPORATION",
      1399023988: "SCITEX_CORPORATION_LTD_10",
      1399091232: "SCITEX_CORPORATION_LTD_13",
      1399811705: "SONY_CORPORATION_3",
      1413565519: "TALON_TECHNOLOGY_CORPORATION",
      1413566020: "TANDY",
      1413567573: "TATUNG_CO_OF_AMERICA_INC",
      1413568577: "TAXAN_AMERICA_INC",
      1413763872: "TOKYO_DENSHI_SEKEI_KK",
      1413825359: "TECO_INFORMATION_SYSTEMS_INC",
      1413826386: "TEGRA",
      1413827412: "TEKTRONIX_INC",
      1414078496: "TEXAS_INSTRUMENTS",
      1414351698: "TYPEMAKER_LTD",
      1414484802: "TOSHIBA_CORP",
      1414484808: "TOSHIBA_INC",
      1414485067: "TOTOKU_ELECTRIC_CO_LTD",
      1414678869: "TRIUMPH",
      1414742612: "TOSHIBA_TEC_CORPORATION",
      1414813728: "TTX_COMPUTER_PRODUCTS_INC",
      1414941984: "TVM_PROFESSIONAL_MONITOR_CORPORATION",
      1414996000: "TW_CASPER_CORPORATION",
      1431065432: "ULEAD_SYSTEMS",
      1431193939: "UNISYS",
      1431591494: "UTZ_FEHLAU_AND_SOHN",
      1447121481: "VARITYPER",
      1447642455: "VIEWSONIC",
      1447646028: "VISUAL_COMMUNICATION",
      1463897671: "WANG",
      1464615506: "WILBUR_IMAGING",
      1465141042: "WARE_TO_GO",
      1465471813: "WYSE_TECHNOLOGY",
      1480938072: "XEROX_CORPORATION",
      1481787732: "X_RITE",
      1513173555: "LAVANYAS_TEST_COMPANY",
      1515340110: "ZORAN_CORPORATION",
      1516593778: "ZEBRA_TECHNOLOGIES_INC",
      1648968515: "BASICCOLOR_GMBH",
      1650815591: "BERGDESIGN_INCORPORATED",
      1667594596: "INTEGRATED_COLOR_SOLUTIONS_INC",
      1668051824: "MACDERMID_COLORSPAN_INC",
      1685266464: "DAINIPPON_SCREEN_2",
      1685418094: "DUPONT_2",
      1717986665: "FUJIFILM_ELECTRONIC_IMAGING_LTD_2",
      1718383992: "FLUXDATA_CORPORATION",
      1769105779: "SCITEX_CORPORATION_LTD_5",
      1801548404: "SCITEX_CORPORATION_LTD_8",
      1868706916: "ERDT_SYSTEMS_GMBH_AND_CO_KG_2",
      1868720483: "MEDIGRAPH_GMBH",
      1903518329: "QUBYX_SARL",
      1935894900: "SCITEX_CORPORATION_LTD_11",
      1935897198: "DAINIPPON_SCREEN_4",
      1935962144: "SCITEX_CORPORATION_LTD_14",
      1936291689: "SIWI_GRAFIKA_CORPORATION",
      2037938541: "YXYMASTER_GMBH",
    });

    function DeviceManufacturer(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    DeviceManufacturer.prototype._read = function() {
      this.deviceManufacturer = this._io.readU4be();
    }

    return DeviceManufacturer;
  })();

  var S15Fixed16Number = Icc4.S15Fixed16Number = (function() {
    function S15Fixed16Number(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    S15Fixed16Number.prototype._read = function() {
      this.number = this._io.readBytes(4);
    }

    return S15Fixed16Number;
  })();

  var PositionNumber = Icc4.PositionNumber = (function() {
    function PositionNumber(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    PositionNumber.prototype._read = function() {
      this.offsetToDataElement = this._io.readU4be();
      this.sizeOfDataElement = this._io.readU4be();
    }

    return PositionNumber;
  })();

  return Icc4;
})();
return Icc4;
}));
