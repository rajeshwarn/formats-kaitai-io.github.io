# This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

from pkg_resources import parse_version
from kaitaistruct import __version__ as ks_version, KaitaiStruct, KaitaiStream, BytesIO
from enum import Enum


if parse_version(ks_version) < parse_version('0.7'):
    raise Exception("Incompatible Kaitai Struct Python API: 0.7 or later is required, but you have %s" % (ks_version))

class Gzip(KaitaiStruct):
    """Gzip is a popular and standard single-file archiving format. It
    essentially provides a container that stores original file name,
    timestamp and a few other things (like optional comment), basic
    CRCs, etc, and a file compressed by a chosen compression algorithm.
    
    As of 2019, there is actually only one working solution for
    compression algorithms, so it's typically raw DEFLATE stream
    (without zlib header) in all gzipped files.
    
    .. seealso::
       Source - https://tools.ietf.org/html/rfc1952
    """

    class CompressionMethods(Enum):
        deflate = 8

    class Oses(Enum):
        fat = 0
        amiga = 1
        vms = 2
        unix = 3
        vm_cms = 4
        atari_tos = 5
        hpfs = 6
        macintosh = 7
        z_system = 8
        cp_m = 9
        tops_20 = 10
        ntfs = 11
        qdos = 12
        acorn_riscos = 13
        unknown = 255
    def __init__(self, _io, _parent=None, _root=None):
        self._io = _io
        self._parent = _parent
        self._root = _root if _root else self
        self._read()

    def _read(self):
        self.magic = self._io.ensure_fixed_contents(b"\x1F\x8B")
        self.compression_method = self._root.CompressionMethods(self._io.read_u1())
        self.flags = self._root.Flags(self._io, self, self._root)
        self.mod_time = self._io.read_u4le()
        _on = self.compression_method
        if _on == self._root.CompressionMethods.deflate:
            self.extra_flags = self._root.ExtraFlagsDeflate(self._io, self, self._root)
        self.os = self._root.Oses(self._io.read_u1())
        if self.flags.has_extra:
            self.extras = self._root.Extras(self._io, self, self._root)

        if self.flags.has_name:
            self.name = self._io.read_bytes_term(0, False, True, True)

        if self.flags.has_comment:
            self.comment = self._io.read_bytes_term(0, False, True, True)

        if self.flags.has_header_crc:
            self.header_crc16 = self._io.read_u2le()

        self.body = self._io.read_bytes(((self._io.size() - self._io.pos()) - 8))
        self.body_crc32 = self._io.read_u4le()
        self.len_uncompressed = self._io.read_u4le()

    class Flags(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.reserved1 = self._io.read_bits_int(3)
            self.has_comment = self._io.read_bits_int(1) != 0
            self.has_name = self._io.read_bits_int(1) != 0
            self.has_extra = self._io.read_bits_int(1) != 0
            self.has_header_crc = self._io.read_bits_int(1) != 0
            self.is_text = self._io.read_bits_int(1) != 0


    class ExtraFlagsDeflate(KaitaiStruct):

        class CompressionStrengths(Enum):
            best = 2
            fast = 4
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.compression_strength = self._root.ExtraFlagsDeflate.CompressionStrengths(self._io.read_u1())


    class Subfields(KaitaiStruct):
        """Container for many subfields, constrained by size of stream.
        """
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.entries = []
            i = 0
            while not self._io.is_eof():
                self.entries.append(self._root.Subfield(self._io, self, self._root))
                i += 1



    class Subfield(KaitaiStruct):
        """Every subfield follows typical [TLV scheme](https://en.wikipedia.org/wiki/Type-length-value):
        
        * `id` serves role of "T"ype
        * `len_data` serves role of "L"ength
        * `data` serves role of "V"alue
        
        This way it's possible to for arbitrary parser to skip over
        subfields it does not support.
        """
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.id = self._io.read_u2le()
            self.len_data = self._io.read_u2le()
            self.data = self._io.read_bytes(self.len_data)


    class Extras(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.len_subfields = self._io.read_u2le()
            self._raw_subfields = self._io.read_bytes(self.len_subfields)
            io = KaitaiStream(BytesIO(self._raw_subfields))
            self.subfields = self._root.Subfields(io, self, self._root)



