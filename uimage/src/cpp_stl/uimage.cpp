// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

#include "uimage.h"



uimage_t::uimage_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent, uimage_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = this;
    _read();
}

void uimage_t::_read() {
    m_header = new uheader_t(m__io, this, m__root);
    m_data = m__io->read_bytes(header()->len_image());
}

uimage_t::~uimage_t() {
    delete m_header;
}

uimage_t::uheader_t::uheader_t(kaitai::kstream* p__io, uimage_t* p__parent, uimage_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void uimage_t::uheader_t::_read() {
    m_magic = m__io->ensure_fixed_contents(std::string("\x27\x05\x19\x56", 4));
    m_header_crc = m__io->read_u4be();
    m_timestamp = m__io->read_u4be();
    m_len_image = m__io->read_u4be();
    m_load_address = m__io->read_u4be();
    m_entry_address = m__io->read_u4be();
    m_data_crc = m__io->read_u4be();
    m_os_type = static_cast<uimage_t::uimage_os_t>(m__io->read_u1());
    m_architecture = static_cast<uimage_t::uimage_arch_t>(m__io->read_u1());
    m_image_type = static_cast<uimage_t::uimage_type_t>(m__io->read_u1());
    m_compression_type = static_cast<uimage_t::uimage_comp_t>(m__io->read_u1());
    m_name = kaitai::kstream::bytes_to_str(kaitai::kstream::bytes_terminate(m__io->read_bytes(32), 0, false), std::string("UTF-8"));
}

uimage_t::uheader_t::~uheader_t() {
}
