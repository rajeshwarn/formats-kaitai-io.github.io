# This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

from pkg_resources import parse_version
from kaitaistruct import __version__ as ks_version, KaitaiStruct, KaitaiStream, BytesIO
from enum import Enum


if parse_version(ks_version) < parse_version('0.7'):
    raise Exception("Incompatible Kaitai Struct Python API: 0.7 or later is required, but you have %s" % (ks_version))

class Vdi(KaitaiStruct):
    """A native VirtualBox file format
    Images for testing can be downloaded from
     * https://www.osboxes.org/virtualbox-images/
     * https://virtualboxes.org/images/
     * https://virtualboximages.com/
    or you can convert images of other formats.
    
    .. seealso::
       Source - https://github.com/qemu/qemu/blob/master/block/vdi.c
    """

    class ImageType(Enum):
        dynamic = 1
        static = 2
        undo = 3
        diff = 4
    def __init__(self, _io, _parent=None, _root=None):
        self._io = _io
        self._parent = _parent
        self._root = _root if _root else self
        self._read()

    def _read(self):
        self.header = self._root.Header(self._io, self, self._root)

    class Header(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.text = (self._io.read_bytes(64)).decode(u"utf-8")
            self.signature = self._io.ensure_fixed_contents(b"\x7F\x10\xDA\xBE")
            self.version = self._root.Header.Version(self._io, self, self._root)
            if self.subheader_size_is_dynamic:
                self.header_size_optional = self._io.read_u4le()

            self._raw_header_main = self._io.read_bytes(self.header_size)
            io = KaitaiStream(BytesIO(self._raw_header_main))
            self.header_main = self._root.Header.HeaderMain(io, self, self._root)

        class Uuid(KaitaiStruct):
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.uuid = self._io.read_bytes(16)


        class Version(KaitaiStruct):
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.major = self._io.read_u2le()
                self.minor = self._io.read_u2le()


        class HeaderMain(KaitaiStruct):
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.image_type = self._root.ImageType(self._io.read_u4le())
                self.image_flags = self._root.Header.HeaderMain.Flags(self._io, self, self._root)
                self.description = (self._io.read_bytes(256)).decode(u"utf-8")
                if self._parent.version.major >= 1:
                    self.blocks_map_offset = self._io.read_u4le()

                if self._parent.version.major >= 1:
                    self.offset_data = self._io.read_u4le()

                self.geometry = self._root.Header.HeaderMain.Geometry(self._io, self, self._root)
                if self._parent.version.major >= 1:
                    self.reserved1 = self._io.read_u4le()

                self.disk_size = self._io.read_u8le()
                self.block_data_size = self._io.read_u4le()
                if self._parent.version.major >= 1:
                    self.block_metadata_size = self._io.read_u4le()

                self.blocks_in_image = self._io.read_u4le()
                self.blocks_allocated = self._io.read_u4le()
                self.uuid_image = self._root.Header.Uuid(self._io, self, self._root)
                self.uuid_last_snap = self._root.Header.Uuid(self._io, self, self._root)
                self.uuid_link = self._root.Header.Uuid(self._io, self, self._root)
                if self._parent.version.major >= 1:
                    self.uuid_parent = self._root.Header.Uuid(self._io, self, self._root)

                if  ((self._parent.version.major >= 1) and ((self._io.pos() + 16) <= self._io.size())) :
                    self.lchc_geometry = self._root.Header.HeaderMain.Geometry(self._io, self, self._root)


            class Geometry(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.cylinders = self._io.read_u4le()
                    self.heads = self._io.read_u4le()
                    self.sectors = self._io.read_u4le()
                    self.sector_size = self._io.read_u4le()


            class Flags(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved0 = self._io.read_bits_int(15)
                    self.zero_expand = self._io.read_bits_int(1) != 0
                    self.reserved1 = self._io.read_bits_int(6)
                    self.diff = self._io.read_bits_int(1) != 0
                    self.fixed = self._io.read_bits_int(1) != 0
                    self.reserved2 = self._io.read_bits_int(8)



        @property
        def header_size(self):
            if hasattr(self, '_m_header_size'):
                return self._m_header_size if hasattr(self, '_m_header_size') else None

            self._m_header_size = (self.header_size_optional if self.subheader_size_is_dynamic else 336)
            return self._m_header_size if hasattr(self, '_m_header_size') else None

        @property
        def blocks_map_offset(self):
            if hasattr(self, '_m_blocks_map_offset'):
                return self._m_blocks_map_offset if hasattr(self, '_m_blocks_map_offset') else None

            self._m_blocks_map_offset = self.header_main.blocks_map_offset
            return self._m_blocks_map_offset if hasattr(self, '_m_blocks_map_offset') else None

        @property
        def subheader_size_is_dynamic(self):
            if hasattr(self, '_m_subheader_size_is_dynamic'):
                return self._m_subheader_size_is_dynamic if hasattr(self, '_m_subheader_size_is_dynamic') else None

            self._m_subheader_size_is_dynamic = self.version.major >= 1
            return self._m_subheader_size_is_dynamic if hasattr(self, '_m_subheader_size_is_dynamic') else None

        @property
        def blocks_offset(self):
            if hasattr(self, '_m_blocks_offset'):
                return self._m_blocks_offset if hasattr(self, '_m_blocks_offset') else None

            self._m_blocks_offset = self.header_main.offset_data
            return self._m_blocks_offset if hasattr(self, '_m_blocks_offset') else None

        @property
        def block_size(self):
            if hasattr(self, '_m_block_size'):
                return self._m_block_size if hasattr(self, '_m_block_size') else None

            self._m_block_size = (self.header_main.block_metadata_size + self.header_main.block_data_size)
            return self._m_block_size if hasattr(self, '_m_block_size') else None

        @property
        def blocks_map_size(self):
            if hasattr(self, '_m_blocks_map_size'):
                return self._m_blocks_map_size if hasattr(self, '_m_blocks_map_size') else None

            self._m_blocks_map_size = ((((self.header_main.blocks_in_image * 4) + self.header_main.geometry.sector_size) - 1) // self.header_main.geometry.sector_size * self.header_main.geometry.sector_size)
            return self._m_blocks_map_size if hasattr(self, '_m_blocks_map_size') else None


    class BlocksMap(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.index = [None] * (self._root.header.header_main.blocks_in_image)
            for i in range(self._root.header.header_main.blocks_in_image):
                self.index[i] = self._root.BlocksMap.BlockIndex(self._io, self, self._root)


        class BlockIndex(KaitaiStruct):
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.index = self._io.read_u4le()

            @property
            def is_allocated(self):
                if hasattr(self, '_m_is_allocated'):
                    return self._m_is_allocated if hasattr(self, '_m_is_allocated') else None

                self._m_is_allocated = self.index < self._root.block_discarded
                return self._m_is_allocated if hasattr(self, '_m_is_allocated') else None

            @property
            def block(self):
                if hasattr(self, '_m_block'):
                    return self._m_block if hasattr(self, '_m_block') else None

                if self.is_allocated:
                    self._m_block = self._root.disk.blocks[self.index]

                return self._m_block if hasattr(self, '_m_block') else None



    class Disk(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.blocks = [None] * (self._root.header.header_main.blocks_in_image)
            for i in range(self._root.header.header_main.blocks_in_image):
                self.blocks[i] = self._root.Disk.Block(self._io, self, self._root)


        class Block(KaitaiStruct):
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.metadata = self._io.read_bytes(self._root.header.header_main.block_metadata_size)
                self._raw_data = []
                self.data = []
                i = 0
                while not self._io.is_eof():
                    self._raw_data.append(self._io.read_bytes(self._root.header.header_main.block_data_size))
                    io = KaitaiStream(BytesIO(self._raw_data[-1]))
                    self.data.append(self._root.Disk.Block.Sector(io, self, self._root))
                    i += 1


            class Sector(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.data = self._io.read_bytes(self._root.header.header_main.geometry.sector_size)




    @property
    def block_discarded(self):
        if hasattr(self, '_m_block_discarded'):
            return self._m_block_discarded if hasattr(self, '_m_block_discarded') else None

        self._m_block_discarded = 4294967294
        return self._m_block_discarded if hasattr(self, '_m_block_discarded') else None

    @property
    def block_unallocated(self):
        if hasattr(self, '_m_block_unallocated'):
            return self._m_block_unallocated if hasattr(self, '_m_block_unallocated') else None

        self._m_block_unallocated = 4294967295
        return self._m_block_unallocated if hasattr(self, '_m_block_unallocated') else None

    @property
    def blocks_map(self):
        """block_index = offset_in_virtual_disk / block_size actual_data_offset = blocks_map[block_index]*block_size+metadata_size+offset_in_block
        The blocks_map will take up blocks_in_image_max * sizeof(uint32_t) bytes; since the blocks_map is read and written in a single operation, its size needs to be limited to INT_MAX; furthermore, when opening an image, the blocks_map size is rounded up to be aligned on BDRV_SECTOR_SIZE. Therefore this should satisfy the following: blocks_in_image_max * sizeof(uint32_t) + BDRV_SECTOR_SIZE == INT_MAX + 1 (INT_MAX + 1 is the first value not representable as an int) This guarantees that any value below or equal to the constant will, when multiplied by sizeof(uint32_t) and rounded up to a BDRV_SECTOR_SIZE boundary, still be below or equal to INT_MAX.
        """
        if hasattr(self, '_m_blocks_map'):
            return self._m_blocks_map if hasattr(self, '_m_blocks_map') else None

        _pos = self._io.pos()
        self._io.seek(self.header.blocks_map_offset)
        self._raw__m_blocks_map = self._io.read_bytes(self.header.blocks_map_size)
        io = KaitaiStream(BytesIO(self._raw__m_blocks_map))
        self._m_blocks_map = self._root.BlocksMap(io, self, self._root)
        self._io.seek(_pos)
        return self._m_blocks_map if hasattr(self, '_m_blocks_map') else None

    @property
    def disk(self):
        if hasattr(self, '_m_disk'):
            return self._m_disk if hasattr(self, '_m_disk') else None

        _pos = self._io.pos()
        self._io.seek(self.header.blocks_offset)
        self._m_disk = self._root.Disk(self._io, self, self._root)
        self._io.seek(_pos)
        return self._m_disk if hasattr(self, '_m_disk') else None


