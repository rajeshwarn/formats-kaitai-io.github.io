// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

if (typeof require === 'function')
  var WindowsShellItems = require('./WindowsShellItems.js');

/**
 * Windows .lnk files (AKA "shell link" file) are most frequently used
 * in Windows shell to create "shortcuts" to another files, usually for
 * purposes of running a program from some other directory, sometimes
 * with certain preconfigured arguments and some other options.
 * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Source}
 */

var WindowsLnkFile = (function() {
  WindowsLnkFile.WindowState = Object.freeze({
    NORMAL: 1,
    MAXIMIZED: 3,
    MIN_NO_ACTIVE: 7,

    1: "NORMAL",
    3: "MAXIMIZED",
    7: "MIN_NO_ACTIVE",
  });

  WindowsLnkFile.DriveTypes = Object.freeze({
    UNKNOWN: 0,
    NO_ROOT_DIR: 1,
    REMOVABLE: 2,
    FIXED: 3,
    REMOTE: 4,
    CDROM: 5,
    RAMDISK: 6,

    0: "UNKNOWN",
    1: "NO_ROOT_DIR",
    2: "REMOVABLE",
    3: "FIXED",
    4: "REMOTE",
    5: "CDROM",
    6: "RAMDISK",
  });

  function WindowsLnkFile(_io, _parent, _root) {
    this._io = _io;
    this._parent = _parent;
    this._root = _root || this;

    this._read();
  }
  WindowsLnkFile.prototype._read = function() {
    this.header = new FileHeader(this._io, this, this._root);
    if (this.header.flags.hasLinkTargetIdList) {
      this.targetIdList = new LinkTargetIdList(this._io, this, this._root);
    }
    if (this.header.flags.hasLinkInfo) {
      this.info = new LinkInfo(this._io, this, this._root);
    }
    if (this.header.flags.hasName) {
      this.name = new StringData(this._io, this, this._root);
    }
    if (this.header.flags.hasRelPath) {
      this.relPath = new StringData(this._io, this, this._root);
    }
    if (this.header.flags.hasWorkDir) {
      this.workDir = new StringData(this._io, this, this._root);
    }
    if (this.header.flags.hasArguments) {
      this.arguments = new StringData(this._io, this, this._root);
    }
    if (this.header.flags.hasIconLocation) {
      this.iconLocation = new StringData(this._io, this, this._root);
    }
  }

  /**
   * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.2}
   */

  var LinkTargetIdList = WindowsLnkFile.LinkTargetIdList = (function() {
    function LinkTargetIdList(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    LinkTargetIdList.prototype._read = function() {
      this.lenIdList = this._io.readU2le();
      this._raw_idList = this._io.readBytes(this.lenIdList);
      var _io__raw_idList = new KaitaiStream(this._raw_idList);
      this.idList = new WindowsShellItems(_io__raw_idList, this, null);
    }

    return LinkTargetIdList;
  })();

  var StringData = WindowsLnkFile.StringData = (function() {
    function StringData(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    StringData.prototype._read = function() {
      this.charsStr = this._io.readU2le();
      this.str = KaitaiStream.bytesToStr(this._io.readBytes((this.charsStr * 2)), "UTF-16LE");
    }

    return StringData;
  })();

  /**
   * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.3}
   */

  var LinkInfo = WindowsLnkFile.LinkInfo = (function() {
    function LinkInfo(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    LinkInfo.prototype._read = function() {
      this.lenAll = this._io.readU4le();
      this._raw_all = this._io.readBytes((this.lenAll - 4));
      var _io__raw_all = new KaitaiStream(this._raw_all);
      this.all = new All(_io__raw_all, this, this._root);
    }

    /**
     * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.3.1}
     */

    var VolumeIdBody = LinkInfo.VolumeIdBody = (function() {
      function VolumeIdBody(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      VolumeIdBody.prototype._read = function() {
        this.driveType = this._io.readU4le();
        this.driveSerialNumber = this._io.readU4le();
        this.ofsVolumeLabel = this._io.readU4le();
        if (this.isUnicode) {
          this.ofsVolumeLabelUnicode = this._io.readU4le();
        }
      }
      Object.defineProperty(VolumeIdBody.prototype, 'isUnicode', {
        get: function() {
          if (this._m_isUnicode !== undefined)
            return this._m_isUnicode;
          this._m_isUnicode = this.ofsVolumeLabel == 20;
          return this._m_isUnicode;
        }
      });
      Object.defineProperty(VolumeIdBody.prototype, 'volumeLabelAnsi', {
        get: function() {
          if (this._m_volumeLabelAnsi !== undefined)
            return this._m_volumeLabelAnsi;
          if (!(this.isUnicode)) {
            var _pos = this._io.pos;
            this._io.seek((this.ofsVolumeLabel - 4));
            this._m_volumeLabelAnsi = KaitaiStream.bytesToStr(this._io.readBytesTerm(0, false, true, true), "cp437");
            this._io.seek(_pos);
          }
          return this._m_volumeLabelAnsi;
        }
      });

      return VolumeIdBody;
    })();

    /**
     * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.3}
     */

    var All = LinkInfo.All = (function() {
      function All(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      All.prototype._read = function() {
        this.lenHeader = this._io.readU4le();
        this._raw_header = this._io.readBytes((this.lenHeader - 8));
        var _io__raw_header = new KaitaiStream(this._raw_header);
        this.header = new Header(_io__raw_header, this, this._root);
      }
      Object.defineProperty(All.prototype, 'volumeId', {
        get: function() {
          if (this._m_volumeId !== undefined)
            return this._m_volumeId;
          if (this.header.flags.hasVolumeIdAndLocalBasePath) {
            var _pos = this._io.pos;
            this._io.seek((this.header.ofsVolumeId - 4));
            this._m_volumeId = new VolumeIdSpec(this._io, this, this._root);
            this._io.seek(_pos);
          }
          return this._m_volumeId;
        }
      });
      Object.defineProperty(All.prototype, 'localBasePath', {
        get: function() {
          if (this._m_localBasePath !== undefined)
            return this._m_localBasePath;
          if (this.header.flags.hasVolumeIdAndLocalBasePath) {
            var _pos = this._io.pos;
            this._io.seek((this.header.ofsLocalBasePath - 4));
            this._m_localBasePath = this._io.readBytesTerm(0, false, true, true);
            this._io.seek(_pos);
          }
          return this._m_localBasePath;
        }
      });

      return All;
    })();

    /**
     * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.3.1}
     */

    var VolumeIdSpec = LinkInfo.VolumeIdSpec = (function() {
      function VolumeIdSpec(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      VolumeIdSpec.prototype._read = function() {
        this.lenAll = this._io.readU4le();
        this._raw_body = this._io.readBytes((this.lenAll - 4));
        var _io__raw_body = new KaitaiStream(this._raw_body);
        this.body = new VolumeIdBody(_io__raw_body, this, this._root);
      }

      return VolumeIdSpec;
    })();

    /**
     * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.3}
     */

    var LinkInfoFlags = LinkInfo.LinkInfoFlags = (function() {
      function LinkInfoFlags(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      LinkInfoFlags.prototype._read = function() {
        this.reserved1 = this._io.readBitsInt(6);
        this.hasCommonNetRelLink = this._io.readBitsInt(1) != 0;
        this.hasVolumeIdAndLocalBasePath = this._io.readBitsInt(1) != 0;
        this.reserved2 = this._io.readBitsInt(24);
      }

      return LinkInfoFlags;
    })();

    /**
     * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.3}
     */

    var Header = LinkInfo.Header = (function() {
      function Header(_io, _parent, _root) {
        this._io = _io;
        this._parent = _parent;
        this._root = _root || this;

        this._read();
      }
      Header.prototype._read = function() {
        this.flags = new LinkInfoFlags(this._io, this, this._root);
        this.ofsVolumeId = this._io.readU4le();
        this.ofsLocalBasePath = this._io.readU4le();
        this.ofsCommonNetRelLink = this._io.readU4le();
        this.ofsCommonPathSuffix = this._io.readU4le();
        if (!(this._io.isEof())) {
          this.ofsLocalBasePathUnicode = this._io.readU4le();
        }
        if (!(this._io.isEof())) {
          this.ofsCommonPathSuffixUnicode = this._io.readU4le();
        }
      }

      return Header;
    })();

    return LinkInfo;
  })();

  /**
   * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.1.1}
   */

  var LinkFlags = WindowsLnkFile.LinkFlags = (function() {
    function LinkFlags(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    LinkFlags.prototype._read = function() {
      this.isUnicode = this._io.readBitsInt(1) != 0;
      this.hasIconLocation = this._io.readBitsInt(1) != 0;
      this.hasArguments = this._io.readBitsInt(1) != 0;
      this.hasWorkDir = this._io.readBitsInt(1) != 0;
      this.hasRelPath = this._io.readBitsInt(1) != 0;
      this.hasName = this._io.readBitsInt(1) != 0;
      this.hasLinkInfo = this._io.readBitsInt(1) != 0;
      this.hasLinkTargetIdList = this._io.readBitsInt(1) != 0;
      this._unnamed8 = this._io.readBitsInt(16);
      this.reserved = this._io.readBitsInt(5);
      this.keepLocalIdListForUncTarget = this._io.readBitsInt(1) != 0;
      this._unnamed11 = this._io.readBitsInt(2);
    }

    return LinkFlags;
  })();

  /**
   * @see {@link https://winprotocoldoc.blob.core.windows.net/productionwindowsarchives/MS-SHLLINK/[MS-SHLLINK].pdf|Section 2.1}
   */

  var FileHeader = WindowsLnkFile.FileHeader = (function() {
    function FileHeader(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    FileHeader.prototype._read = function() {
      this.lenHeader = this._io.ensureFixedContents([76, 0, 0, 0]);
      this.linkClsid = this._io.ensureFixedContents([1, 20, 2, 0, 0, 0, 0, 0, 192, 0, 0, 0, 0, 0, 0, 70]);
      this._raw_flags = this._io.readBytes(4);
      var _io__raw_flags = new KaitaiStream(this._raw_flags);
      this.flags = new LinkFlags(_io__raw_flags, this, this._root);
      this.fileAttrs = this._io.readU4le();
      this.timeCreation = this._io.readU8le();
      this.timeAccess = this._io.readU8le();
      this.timeWrite = this._io.readU8le();
      this.targetFileSize = this._io.readU4le();
      this.iconIndex = this._io.readS4le();
      this.showCommand = this._io.readU4le();
      this.hotkey = this._io.readU2le();
      this.reserved = this._io.ensureFixedContents([0, 0, 0, 0, 0, 0, 0, 0, 0, 0]);
    }

    /**
     * Technically, a size of the header, but in reality, it's
     * fixed by standard.
     */

    /**
     * 16-byte class identified (CLSID), reserved for Windows shell
     * link files.
     */

    /**
     * Lower 32 bits of the size of the file that this link targets
     */

    /**
     * Index of an icon to use from target file
     */

    /**
     * Window state to set after the launch of target executable
     */

    return FileHeader;
  })();

  return WindowsLnkFile;
})();

// Export for amd environments
if (typeof define === 'function' && define.amd) {
  define('WindowsLnkFile', [], function() {
    return WindowsLnkFile;
  });
}

// Export for CommonJS
if (typeof module === 'object' && module && module.exports) {
  module.exports = WindowsLnkFile;
}