#ifndef VLQ_BASE128_BE_H_
#define VLQ_BASE128_BE_H_

// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

#include "kaitai/kaitaistruct.h"

#include <stdint.h>
#include <vector>

#if KAITAI_STRUCT_VERSION < 7000L
#error "Incompatible Kaitai Struct C++/STL API: version 0.7 or later is required"
#endif

/**
 * A variable-length unsigned integer using base128 encoding. 1-byte groups
 * consist of 1-bit flag of continuation and 7-bit value chunk, and are ordered
 * "most significant group first", i.e. in "big-endian" manner.
 * 
 * This particular encoding is specified and used in:
 * 
 * * Standard MIDI file format
 * * ASN.1 BER encoding
 * 
 * More information on this encoding is available at
 * https://en.wikipedia.org/wiki/Variable-length_quantity
 * 
 * This particular implementation supports serialized values to up 8 bytes long.
 */

class vlq_base128_be_t : public kaitai::kstruct {

public:
    class group_t;

    vlq_base128_be_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent = 0, vlq_base128_be_t* p__root = 0);

private:
    void _read();

public:
    ~vlq_base128_be_t();

    /**
     * One byte group, clearly divided into 7-bit "value" chunk and 1-bit "continuation" flag.
     */

    class group_t : public kaitai::kstruct {

    public:

        group_t(kaitai::kstream* p__io, vlq_base128_be_t* p__parent = 0, vlq_base128_be_t* p__root = 0);

    private:
        void _read();

    public:
        ~group_t();

    private:
        bool f_has_next;
        bool m_has_next;

    public:

        /**
         * If true, then we have more bytes to read
         */
        bool has_next();

    private:
        bool f_value;
        int32_t m_value;

    public:

        /**
         * The 7-bit (base128) numeric value chunk of this group
         */
        int32_t value();

    private:
        uint8_t m_b;
        vlq_base128_be_t* m__root;
        vlq_base128_be_t* m__parent;

    public:
        uint8_t b() const { return m_b; }
        vlq_base128_be_t* _root() const { return m__root; }
        vlq_base128_be_t* _parent() const { return m__parent; }
    };

private:
    bool f_last;
    int32_t m_last;

public:
    int32_t last();

private:
    bool f_value;
    int32_t m_value;

public:

    /**
     * Resulting value as normal integer
     */
    int32_t value();

private:
    std::vector<group_t*>* m_groups;
    vlq_base128_be_t* m__root;
    kaitai::kstruct* m__parent;

public:
    std::vector<group_t*>* groups() const { return m_groups; }
    vlq_base128_be_t* _root() const { return m__root; }
    kaitai::kstruct* _parent() const { return m__parent; }
};

#endif  // VLQ_BASE128_BE_H_
