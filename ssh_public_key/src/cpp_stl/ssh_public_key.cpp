// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

#include "ssh_public_key.h"



ssh_public_key_t::ssh_public_key_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = this;
    _read();
}

void ssh_public_key_t::_read() {
    m_key_name = new cstring_t(m__io, this, m__root);
    n_body = true;
    {
        std::string on = key_name()->value();
        if (on == std::string("ssh-rsa")) {
            n_body = false;
            m_body = new key_rsa_t(m__io, this, m__root);
        }
        else if (on == std::string("ecdsa-sha2-nistp256")) {
            n_body = false;
            m_body = new key_ecdsa_t(m__io, this, m__root);
        }
        else if (on == std::string("ssh-ed25519")) {
            n_body = false;
            m_body = new key_ed25519_t(m__io, this, m__root);
        }
        else if (on == std::string("ssh-dss")) {
            n_body = false;
            m_body = new key_dsa_t(m__io, this, m__root);
        }
    }
}

ssh_public_key_t::~ssh_public_key_t() {
    delete m_key_name;
    if (!n_body) {
        delete m_body;
    }
}

ssh_public_key_t::key_rsa_t::key_rsa_t(kaitai::kstream* p__io, ssh_public_key_t* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    f_key_length = false;
    _read();
}

void ssh_public_key_t::key_rsa_t::_read() {
    m_rsa_e = new bignum2_t(m__io, this, m__root);
    m_rsa_n = new bignum2_t(m__io, this, m__root);
}

ssh_public_key_t::key_rsa_t::~key_rsa_t() {
    delete m_rsa_e;
    delete m_rsa_n;
}

int32_t ssh_public_key_t::key_rsa_t::key_length() {
    if (f_key_length)
        return m_key_length;
    m_key_length = rsa_n()->length_in_bits();
    f_key_length = true;
    return m_key_length;
}

ssh_public_key_t::key_ed25519_t::key_ed25519_t(kaitai::kstream* p__io, ssh_public_key_t* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void ssh_public_key_t::key_ed25519_t::_read() {
    m_len_pk = m__io->read_u4be();
    m_pk = m__io->read_bytes(len_pk());
}

ssh_public_key_t::key_ed25519_t::~key_ed25519_t() {
}

ssh_public_key_t::key_ecdsa_t::key_ecdsa_t(kaitai::kstream* p__io, ssh_public_key_t* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void ssh_public_key_t::key_ecdsa_t::_read() {
    m_curve_name = new cstring_t(m__io, this, m__root);
    m_ec = new elliptic_curve_t(m__io, this, m__root);
}

ssh_public_key_t::key_ecdsa_t::~key_ecdsa_t() {
    delete m_curve_name;
    delete m_ec;
}

ssh_public_key_t::cstring_t::cstring_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void ssh_public_key_t::cstring_t::_read() {
    m_len = m__io->read_u4be();
    m_value = kaitai::kstream::bytes_to_str(m__io->read_bytes(len()), std::string("ASCII"));
}

ssh_public_key_t::cstring_t::~cstring_t() {
}

ssh_public_key_t::key_dsa_t::key_dsa_t(kaitai::kstream* p__io, ssh_public_key_t* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void ssh_public_key_t::key_dsa_t::_read() {
    m_dsa_p = new bignum2_t(m__io, this, m__root);
    m_dsa_q = new bignum2_t(m__io, this, m__root);
    m_dsa_g = new bignum2_t(m__io, this, m__root);
    m_dsa_pub_key = new bignum2_t(m__io, this, m__root);
}

ssh_public_key_t::key_dsa_t::~key_dsa_t() {
    delete m_dsa_p;
    delete m_dsa_q;
    delete m_dsa_g;
    delete m_dsa_pub_key;
}

ssh_public_key_t::elliptic_curve_t::elliptic_curve_t(kaitai::kstream* p__io, ssh_public_key_t::key_ecdsa_t* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void ssh_public_key_t::elliptic_curve_t::_read() {
    m_len = m__io->read_u4be();
    m_body = m__io->read_bytes(len());
}

ssh_public_key_t::elliptic_curve_t::~elliptic_curve_t() {
}

ssh_public_key_t::bignum2_t::bignum2_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent, ssh_public_key_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    f_length_in_bits = false;
    _read();
}

void ssh_public_key_t::bignum2_t::_read() {
    m_len = m__io->read_u4be();
    m_body = m__io->read_bytes(len());
}

ssh_public_key_t::bignum2_t::~bignum2_t() {
}

int32_t ssh_public_key_t::bignum2_t::length_in_bits() {
    if (f_length_in_bits)
        return m_length_in_bits;
    m_length_in_bits = ((len() - 1) * 8);
    f_length_in_bits = true;
    return m_length_in_bits;
}
