// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

(function (root, factory) {
  if (typeof define === 'function' && define.amd) {
    define(['kaitai-struct/KaitaiStream'], factory);
  } else if (typeof module === 'object' && module.exports) {
    module.exports = factory(require('kaitai-struct/KaitaiStream'));
  } else {
    root.Pcx = factory(root.KaitaiStream);
  }
}(this, function (KaitaiStream) {
var Pcx = (function() {
  Pcx.Versions = Object.freeze({
    V2_5: 0,
    V2_8_WITH_PALETTE: 2,
    V2_8_WITHOUT_PALETTE: 3,
    PAINTBRUSH_FOR_WINDOWS: 4,
    V3_0: 5,

    0: "V2_5",
    2: "V2_8_WITH_PALETTE",
    3: "V2_8_WITHOUT_PALETTE",
    4: "PAINTBRUSH_FOR_WINDOWS",
    5: "V3_0",
  });

  Pcx.Encodings = Object.freeze({
    RLE: 1,

    1: "RLE",
  });

  function Pcx(_io, _parent, _root) {
    this._io = _io;
    this._parent = _parent;
    this._root = _root || this;

    this._read();
  }
  Pcx.prototype._read = function() {
    this._raw_hdr = this._io.readBytes(128);
    var _io__raw_hdr = new KaitaiStream(this._raw_hdr);
    this.hdr = new Header(_io__raw_hdr, this, this._root);
  }

  /**
   * @see {@link http://web.archive.org/web/20100206055706/http://www.qzx.com/pc-gpe/pcx.txt|- "ZSoft .PCX FILE HEADER FORMAT"}
   */

  var Header = Pcx.Header = (function() {
    function Header(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    Header.prototype._read = function() {
      this.magic = this._io.ensureFixedContents([10]);
      this.version = this._io.readU1();
      this.encoding = this._io.readU1();
      this.bitsPerPixel = this._io.readU1();
      this.imgXMin = this._io.readU2le();
      this.imgYMin = this._io.readU2le();
      this.imgXMax = this._io.readU2le();
      this.imgYMax = this._io.readU2le();
      this.hdpi = this._io.readU2le();
      this.vdpi = this._io.readU2le();
      this.palette16 = this._io.readBytes(48);
      this.reserved = this._io.ensureFixedContents([0]);
      this.numPlanes = this._io.readU1();
      this.bytesPerLine = this._io.readU2le();
      this.paletteInfo = this._io.readU2le();
      this.hScreenSize = this._io.readU2le();
      this.vScreenSize = this._io.readU2le();
    }

    /**
     * Technically, this field was supposed to be "manufacturer"
     * mark to distinguish between various software vendors, and
     * 0x0a was supposed to mean "ZSoft", but everyone else ended
     * up writing a 0x0a into this field, so that's what majority
     * of modern software expects to have in this attribute.
     */

    return Header;
  })();

  var TPalette256 = Pcx.TPalette256 = (function() {
    function TPalette256(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    TPalette256.prototype._read = function() {
      this.magic = this._io.ensureFixedContents([12]);
      this.colors = new Array(256);
      for (var i = 0; i < 256; i++) {
        this.colors[i] = new Rgb(this._io, this, this._root);
      }
    }

    return TPalette256;
  })();

  var Rgb = Pcx.Rgb = (function() {
    function Rgb(_io, _parent, _root) {
      this._io = _io;
      this._parent = _parent;
      this._root = _root || this;

      this._read();
    }
    Rgb.prototype._read = function() {
      this.r = this._io.readU1();
      this.g = this._io.readU1();
      this.b = this._io.readU1();
    }

    return Rgb;
  })();

  /**
   * @see {@link http://web.archive.org/web/20100206055706/http://www.qzx.com/pc-gpe/pcx.txt|- "VGA 256 Color Palette Information"}
   */
  Object.defineProperty(Pcx.prototype, 'palette256', {
    get: function() {
      if (this._m_palette256 !== undefined)
        return this._m_palette256;
      if ( ((this.hdr.version == Pcx.Versions.V3_0) && (this.hdr.bitsPerPixel == 8) && (this.hdr.numPlanes == 1)) ) {
        var _pos = this._io.pos;
        this._io.seek((this._io.size - 769));
        this._m_palette256 = new TPalette256(this._io, this, this._root);
        this._io.seek(_pos);
      }
      return this._m_palette256;
    }
  });

  return Pcx;
})();
return Pcx;
}));
