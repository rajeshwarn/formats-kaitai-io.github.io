#ifndef ETHERNET_FRAME_H_
#define ETHERNET_FRAME_H_

// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

#include "kaitai/kaitaistruct.h"

#include <stdint.h>

#if KAITAI_STRUCT_VERSION < 7000L
#error "Incompatible Kaitai Struct C++/STL API: version 0.7 or later is required"
#endif
class ipv4_packet_t;
class ipv6_packet_t;

/**
 * Ethernet frame is a OSI data link layer (layer 2) protocol data unit
 * for Ethernet networks. In practice, many other networks and/or
 * in-file dumps adopted the same format for encapsulation purposes.
 * \sa Source
 */

class ethernet_frame_t : public kaitai::kstruct {

public:

    enum ether_type_enum_t {
        ETHER_TYPE_ENUM_IPV4 = 2048,
        ETHER_TYPE_ENUM_X_75_INTERNET = 2049,
        ETHER_TYPE_ENUM_NBS_INTERNET = 2050,
        ETHER_TYPE_ENUM_ECMA_INTERNET = 2051,
        ETHER_TYPE_ENUM_CHAOSNET = 2052,
        ETHER_TYPE_ENUM_X_25_LEVEL_3 = 2053,
        ETHER_TYPE_ENUM_ARP = 2054,
        ETHER_TYPE_ENUM_IPV6 = 34525
    };

    ethernet_frame_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent = 0, ethernet_frame_t* p__root = 0);

private:
    void _read();

public:
    ~ethernet_frame_t();

private:
    std::string m_dst_mac;
    std::string m_src_mac;
    ether_type_enum_t m_ether_type;
    kaitai::kstruct* m_body;
    bool n_body;

public:
    bool _is_null_body() { body(); return n_body; };

private:
    ethernet_frame_t* m__root;
    kaitai::kstruct* m__parent;
    std::string m__raw_body;
    kaitai::kstream* m__io__raw_body;

public:

    /**
     * Destination MAC address.
     */
    std::string dst_mac() const { return m_dst_mac; }

    /**
     * Source MAC address.
     */
    std::string src_mac() const { return m_src_mac; }
    ether_type_enum_t ether_type() const { return m_ether_type; }
    kaitai::kstruct* body() const { return m_body; }
    ethernet_frame_t* _root() const { return m__root; }
    kaitai::kstruct* _parent() const { return m__parent; }
    std::string _raw_body() const { return m__raw_body; }
    kaitai::kstream* _io__raw_body() const { return m__io__raw_body; }
};

#endif  // ETHERNET_FRAME_H_
