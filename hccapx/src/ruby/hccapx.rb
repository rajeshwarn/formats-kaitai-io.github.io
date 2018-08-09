# This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

require 'kaitai/struct/struct'

unless Gem::Version.new(Kaitai::Struct::VERSION) >= Gem::Version.new('0.7')
  raise "Incompatible Kaitai Struct Ruby API: 0.7 or later is required, but you have #{Kaitai::Struct::VERSION}"
end


##
# Native format of Hashcat password "recovery" utility
# @see https://hashcat.net/wiki/doku.php?id=hccapx Source
class Hccapx < Kaitai::Struct::Struct
  def initialize(_io, _parent = nil, _root = self)
    super(_io, _parent, _root)
    _read
  end

  def _read
    @records = []
    i = 0
    while not @_io.eof?
      @records << HccapxRecord.new(@_io, self, @_root)
      i += 1
    end
    self
  end
  class HccapxRecord < Kaitai::Struct::Struct
    def initialize(_io, _parent = nil, _root = self)
      super(_io, _parent, _root)
      _read
    end

    def _read
      @magic = @_io.ensure_fixed_contents([72, 67, 80, 88].pack('C*'))
      @version = @_io.read_u4le
      @ignore_replay_counter = @_io.read_bits_int(1) != 0
      @message_pair = @_io.read_bits_int(7)
      @_io.align_to_byte
      @len_essid = @_io.read_u1
      @essid = @_io.read_bytes(len_essid)
      @padding1 = @_io.read_bytes((32 - len_essid))
      @keyver = @_io.read_u1
      @keymic = @_io.read_bytes(16)
      @mac_ap = @_io.read_bytes(6)
      @nonce_ap = @_io.read_bytes(32)
      @mac_station = @_io.read_bytes(6)
      @nonce_station = @_io.read_bytes(32)
      @len_eapol = @_io.read_u2le
      @eapol = @_io.read_bytes(len_eapol)
      @padding2 = @_io.read_bytes((256 - len_eapol))
      self
    end
    attr_reader :magic

    ##
    # The version number of the .hccapx file format.
    attr_reader :version

    ##
    # Indicates if the message pair matching was done based on
    # replay counter or not.
    # 
    # Whenever it was set to 1 it means that the replay counter
    # was ignored (i.e. it was not considered at all by the
    # matching algorithm).
    # 
    # Hashcat currently does not perform any particular action
    # based on this bit, but nonetheless this information could be
    # crucial for some 3th party tools and for
    # analysis/statistics. There could be some opportunity to
    # implement some further logic based on this particular
    # information also within hashcat (in the future).
    attr_reader :ignore_replay_counter

    ##
    # The message_pair value describes which messages of the 4-way
    # handshake were combined to form the .hccapx structure. It is
    # always a pair of 2 messages: 1 from the AP (access point)
    # and 1 from the STA (client).
    # 
    # Furthermore, the message_pair value also gives a hint from
    # which of the 2 messages the EAPOL origins. This is
    # interesting data, but not necessarily needed for hashcat to
    # be able to crack the hash.
    # 
    # On the other hand, it could be very important to know if
    # “only” message 1 and message 2 were captured or if for
    # instance message 3 and/or message 4 were captured too. If
    # message 3 and/or message 4 were captured it should be a hard
    # evidence that the connection was established and that the
    # password the client used was the correct one.
    attr_reader :message_pair
    attr_reader :len_essid
    attr_reader :essid
    attr_reader :padding1

    ##
    # The flag used to distinguish WPA from WPA2 ciphers. Value of
    # 1 means WPA, other - WPA2.
    attr_reader :keyver

    ##
    # The final hash value. MD5 for WPA and SHA-1 for WPA2
    # (truncated to 128 bit).
    attr_reader :keymic

    ##
    # The BSSID (MAC address) of the access point.
    attr_reader :mac_ap

    ##
    # Nonce (random salt) generated by the access point.
    attr_reader :nonce_ap

    ##
    # The MAC address of the client connecting to the access point.
    attr_reader :mac_station

    ##
    # Nonce (random salt) generated by the client connecting to the access point.
    attr_reader :nonce_station

    ##
    # The length of the EAPOL data.
    attr_reader :len_eapol
    attr_reader :eapol
    attr_reader :padding2
  end
  attr_reader :records
end
