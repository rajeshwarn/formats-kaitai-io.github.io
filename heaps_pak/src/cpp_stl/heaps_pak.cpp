// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

#include "heaps_pak.h"



heaps_pak_t::heaps_pak_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent, heaps_pak_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = this;
    _read();
}

void heaps_pak_t::_read() {
    m_header = new header_t(m__io, this, m__root);
}

heaps_pak_t::~heaps_pak_t() {
    delete m_header;
}

heaps_pak_t::header_t::header_t(kaitai::kstream* p__io, heaps_pak_t* p__parent, heaps_pak_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void heaps_pak_t::header_t::_read() {
    m_magic1 = m__io->ensure_fixed_contents(std::string("\x50\x41\x4B", 3));
    m_version = m__io->read_u1();
    m_len_header = m__io->read_u4le();
    m_len_data = m__io->read_u4le();
    m__raw_root_entry = m__io->read_bytes((len_header() - 16));
    m__io__raw_root_entry = new kaitai::kstream(m__raw_root_entry);
    m_root_entry = new entry_t(m__io__raw_root_entry, this, m__root);
    m_magic2 = m__io->ensure_fixed_contents(std::string("\x44\x41\x54\x41", 4));
}

heaps_pak_t::header_t::~header_t() {
    delete m__io__raw_root_entry;
    delete m_root_entry;
}

heaps_pak_t::header_t::entry_t::entry_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent, heaps_pak_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void heaps_pak_t::header_t::entry_t::_read() {
    m_len_name = m__io->read_u1();
    m_name = kaitai::kstream::bytes_to_str(m__io->read_bytes(len_name()), std::string("UTF-8"));
    m_flags = new flags_t(m__io, this, m__root);
    n_body = true;
    {
        bool on = flags()->is_dir();
        if (on == true) {
            n_body = false;
            m_body = new dir_t(m__io, this, m__root);
        }
        else if (on == false) {
            n_body = false;
            m_body = new file_t(m__io, this, m__root);
        }
    }
}

heaps_pak_t::header_t::entry_t::~entry_t() {
    delete m_flags;
    if (!n_body) {
        delete m_body;
    }
}

heaps_pak_t::header_t::entry_t::flags_t::flags_t(kaitai::kstream* p__io, heaps_pak_t::header_t::entry_t* p__parent, heaps_pak_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void heaps_pak_t::header_t::entry_t::flags_t::_read() {
    m_unused = m__io->read_bits_int(7);
    m_is_dir = m__io->read_bits_int(1);
}

heaps_pak_t::header_t::entry_t::flags_t::~flags_t() {
}

heaps_pak_t::header_t::file_t::file_t(kaitai::kstream* p__io, heaps_pak_t::header_t::entry_t* p__parent, heaps_pak_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    f_data = false;
    _read();
}

void heaps_pak_t::header_t::file_t::_read() {
    m_ofs_data = m__io->read_u4le();
    m_len_data = m__io->read_u4le();
    m_checksum = m__io->read_bytes(4);
}

heaps_pak_t::header_t::file_t::~file_t() {
    if (f_data) {
    }
}

std::string heaps_pak_t::header_t::file_t::data() {
    if (f_data)
        return m_data;
    kaitai::kstream *io = _root()->_io();
    std::streampos _pos = io->pos();
    io->seek((_root()->header()->len_header() + ofs_data()));
    m_data = io->read_bytes(len_data());
    io->seek(_pos);
    f_data = true;
    return m_data;
}

heaps_pak_t::header_t::dir_t::dir_t(kaitai::kstream* p__io, heaps_pak_t::header_t::entry_t* p__parent, heaps_pak_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void heaps_pak_t::header_t::dir_t::_read() {
    m_num_entries = m__io->read_u4le();
    int l_entries = num_entries();
    m_entries = new std::vector<entry_t*>();
    m_entries->reserve(l_entries);
    for (int i = 0; i < l_entries; i++) {
        m_entries->push_back(new entry_t(m__io, this, m__root));
    }
}

heaps_pak_t::header_t::dir_t::~dir_t() {
    for (std::vector<entry_t*>::iterator it = m_entries->begin(); it != m_entries->end(); ++it) {
        delete *it;
    }
    delete m_entries;
}
