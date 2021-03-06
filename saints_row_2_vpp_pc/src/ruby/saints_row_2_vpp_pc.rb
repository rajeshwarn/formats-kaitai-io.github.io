# This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

require 'kaitai/struct/struct'

unless Gem::Version.new(Kaitai::Struct::VERSION) >= Gem::Version.new('0.7')
  raise "Incompatible Kaitai Struct Ruby API: 0.7 or later is required, but you have #{Kaitai::Struct::VERSION}"
end

class SaintsRow2VppPc < Kaitai::Struct::Struct
  def initialize(_io, _parent = nil, _root = self)
    super(_io, _parent, _root)
    _read
  end

  def _read
    @magic = @_io.ensure_fixed_contents([206, 10, 137, 81, 4].pack('C*'))
    @pad1 = @_io.read_bytes(335)
    @num_files = @_io.read_s4le
    @container_size = @_io.read_s4le
    @len_offsets = @_io.read_s4le
    @len_filenames = @_io.read_s4le
    @len_extensions = @_io.read_s4le
    @smth5 = @_io.read_s4le
    @smth6 = @_io.read_s4le
    @smth7 = @_io.read_s4le
    @smth8 = @_io.read_s4le
    @smth9 = @_io.read_s4le
    self
  end
  class Offsets < Kaitai::Struct::Struct
    def initialize(_io, _parent = nil, _root = self)
      super(_io, _parent, _root)
      _read
    end

    def _read
      @entries = []
      i = 0
      while not @_io.eof?
        @entries << Offset.new(@_io, self, @_root)
        i += 1
      end
      self
    end
    class Offset < Kaitai::Struct::Struct
      def initialize(_io, _parent = nil, _root = self)
        super(_io, _parent, _root)
        _read
      end

      def _read
        @name_ofs = @_io.read_u4le
        @ext_ofs = @_io.read_u4le
        @smth2 = @_io.read_s4le
        @ofs_body = @_io.read_s4le
        @len_body = @_io.read_s4le
        @always_minus_1 = @_io.read_s4le
        @always_zero = @_io.read_s4le
        self
      end
      def filename
        return @filename unless @filename.nil?
        io = _root.filenames._io
        _pos = io.pos
        io.seek(name_ofs)
        @filename = (io.read_bytes_term(0, false, true, true)).force_encoding("UTF-8")
        io.seek(_pos)
        @filename
      end
      def ext
        return @ext unless @ext.nil?
        io = _root.extensions._io
        _pos = io.pos
        io.seek(ext_ofs)
        @ext = (io.read_bytes_term(0, false, true, true)).force_encoding("UTF-8")
        io.seek(_pos)
        @ext
      end
      def body
        return @body unless @body.nil?
        io = _root._io
        _pos = io.pos
        io.seek((_root.data_start + ofs_body))
        @body = io.read_bytes(len_body)
        io.seek(_pos)
        @body
      end
      attr_reader :name_ofs
      attr_reader :ext_ofs
      attr_reader :smth2
      attr_reader :ofs_body
      attr_reader :len_body
      attr_reader :always_minus_1
      attr_reader :always_zero
    end
    attr_reader :entries
  end
  class Strings < Kaitai::Struct::Struct
    def initialize(_io, _parent = nil, _root = self)
      super(_io, _parent, _root)
      _read
    end

    def _read
      @entries = []
      i = 0
      while not @_io.eof?
        @entries << (@_io.read_bytes_term(0, false, true, true)).force_encoding("UTF-8")
        i += 1
      end
      self
    end
    attr_reader :entries
  end
  def filenames
    return @filenames unless @filenames.nil?
    _pos = @_io.pos
    @_io.seek(ofs_filenames)
    @_raw_filenames = @_io.read_bytes(len_filenames)
    io = Kaitai::Struct::Stream.new(@_raw_filenames)
    @filenames = Strings.new(io, self, @_root)
    @_io.seek(_pos)
    @filenames
  end
  def ofs_extensions
    return @ofs_extensions unless @ofs_extensions.nil?
    @ofs_extensions = (((ofs_filenames + len_filenames) & 4294965248) + 2048)
    @ofs_extensions
  end
  def files
    return @files unless @files.nil?
    _pos = @_io.pos
    @_io.seek(2048)
    @_raw_files = @_io.read_bytes(len_offsets)
    io = Kaitai::Struct::Stream.new(@_raw_files)
    @files = Offsets.new(io, self, @_root)
    @_io.seek(_pos)
    @files
  end
  def data_start
    return @data_start unless @data_start.nil?
    @data_start = (((ofs_extensions + len_extensions) & 4294965248) + 2048)
    @data_start
  end
  def extensions
    return @extensions unless @extensions.nil?
    _pos = @_io.pos
    @_io.seek(ofs_extensions)
    @_raw_extensions = @_io.read_bytes(len_extensions)
    io = Kaitai::Struct::Stream.new(@_raw_extensions)
    @extensions = Strings.new(io, self, @_root)
    @_io.seek(_pos)
    @extensions
  end
  def ofs_filenames
    return @ofs_filenames unless @ofs_filenames.nil?
    @ofs_filenames = (((2048 + len_offsets) & 4294965248) + 2048)
    @ofs_filenames
  end
  attr_reader :magic
  attr_reader :pad1
  attr_reader :num_files
  attr_reader :container_size
  attr_reader :len_offsets
  attr_reader :len_filenames
  attr_reader :len_extensions
  attr_reader :smth5
  attr_reader :smth6
  attr_reader :smth7
  attr_reader :smth8
  attr_reader :smth9
  attr_reader :_raw_filenames
  attr_reader :_raw_files
  attr_reader :_raw_extensions
end
