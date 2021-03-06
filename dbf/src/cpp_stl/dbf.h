#ifndef DBF_H_
#define DBF_H_

// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

#include "kaitai/kaitaistruct.h"

#include <stdint.h>
#include <vector>

#if KAITAI_STRUCT_VERSION < 7000L
#error "Incompatible Kaitai Struct C++/STL API: version 0.7 or later is required"
#endif

class dbf_t : public kaitai::kstruct {

public:
    class header2_t;
    class field_t;
    class header1_t;
    class header_dbase_3_t;
    class header_dbase_7_t;

    dbf_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent = 0, dbf_t* p__root = 0);

private:
    void _read();

public:
    ~dbf_t();

    class header2_t : public kaitai::kstruct {

    public:

        header2_t(kaitai::kstream* p__io, dbf_t* p__parent = 0, dbf_t* p__root = 0);

    private:
        void _read();

    public:
        ~header2_t();

    private:
        header_dbase_3_t* m_header_dbase_3;
        bool n_header_dbase_3;

    public:
        bool _is_null_header_dbase_3() { header_dbase_3(); return n_header_dbase_3; };

    private:
        header_dbase_7_t* m_header_dbase_7;
        bool n_header_dbase_7;

    public:
        bool _is_null_header_dbase_7() { header_dbase_7(); return n_header_dbase_7; };

    private:
        std::vector<field_t*>* m_fields;
        dbf_t* m__root;
        dbf_t* m__parent;

    public:
        header_dbase_3_t* header_dbase_3() const { return m_header_dbase_3; }
        header_dbase_7_t* header_dbase_7() const { return m_header_dbase_7; }
        std::vector<field_t*>* fields() const { return m_fields; }
        dbf_t* _root() const { return m__root; }
        dbf_t* _parent() const { return m__parent; }
    };

    class field_t : public kaitai::kstruct {

    public:

        field_t(kaitai::kstream* p__io, dbf_t::header2_t* p__parent = 0, dbf_t* p__root = 0);

    private:
        void _read();

    public:
        ~field_t();

    private:
        std::string m_name;
        uint8_t m_datatype;
        uint32_t m_data_address;
        uint8_t m_length;
        uint8_t m_decimal_count;
        std::string m_reserved1;
        uint8_t m_work_area_id;
        std::string m_reserved2;
        uint8_t m_set_fields_flag;
        std::string m_reserved3;
        dbf_t* m__root;
        dbf_t::header2_t* m__parent;

    public:
        std::string name() const { return m_name; }
        uint8_t datatype() const { return m_datatype; }
        uint32_t data_address() const { return m_data_address; }
        uint8_t length() const { return m_length; }
        uint8_t decimal_count() const { return m_decimal_count; }
        std::string reserved1() const { return m_reserved1; }
        uint8_t work_area_id() const { return m_work_area_id; }
        std::string reserved2() const { return m_reserved2; }
        uint8_t set_fields_flag() const { return m_set_fields_flag; }
        std::string reserved3() const { return m_reserved3; }
        dbf_t* _root() const { return m__root; }
        dbf_t::header2_t* _parent() const { return m__parent; }
    };

    /**
     * \sa - section 1.1
     */

    class header1_t : public kaitai::kstruct {

    public:

        header1_t(kaitai::kstream* p__io, dbf_t* p__parent = 0, dbf_t* p__root = 0);

    private:
        void _read();

    public:
        ~header1_t();

    private:
        bool f_dbase_level;
        int32_t m_dbase_level;

    public:
        int32_t dbase_level();

    private:
        uint8_t m_version;
        uint8_t m_last_update_y;
        uint8_t m_last_update_m;
        uint8_t m_last_update_d;
        uint32_t m_num_records;
        uint16_t m_len_header;
        uint16_t m_len_record;
        dbf_t* m__root;
        dbf_t* m__parent;

    public:
        uint8_t version() const { return m_version; }
        uint8_t last_update_y() const { return m_last_update_y; }
        uint8_t last_update_m() const { return m_last_update_m; }
        uint8_t last_update_d() const { return m_last_update_d; }
        uint32_t num_records() const { return m_num_records; }
        uint16_t len_header() const { return m_len_header; }
        uint16_t len_record() const { return m_len_record; }
        dbf_t* _root() const { return m__root; }
        dbf_t* _parent() const { return m__parent; }
    };

    class header_dbase_3_t : public kaitai::kstruct {

    public:

        header_dbase_3_t(kaitai::kstream* p__io, dbf_t::header2_t* p__parent = 0, dbf_t* p__root = 0);

    private:
        void _read();

    public:
        ~header_dbase_3_t();

    private:
        std::string m_reserved1;
        std::string m_reserved2;
        std::string m_reserved3;
        dbf_t* m__root;
        dbf_t::header2_t* m__parent;

    public:
        std::string reserved1() const { return m_reserved1; }
        std::string reserved2() const { return m_reserved2; }
        std::string reserved3() const { return m_reserved3; }
        dbf_t* _root() const { return m__root; }
        dbf_t::header2_t* _parent() const { return m__parent; }
    };

    class header_dbase_7_t : public kaitai::kstruct {

    public:

        header_dbase_7_t(kaitai::kstream* p__io, dbf_t::header2_t* p__parent = 0, dbf_t* p__root = 0);

    private:
        void _read();

    public:
        ~header_dbase_7_t();

    private:
        std::string m_reserved1;
        uint8_t m_has_incomplete_transaction;
        uint8_t m_dbase_iv_encryption;
        std::string m_reserved2;
        uint8_t m_production_mdx;
        uint8_t m_language_driver_id;
        std::string m_reserved3;
        std::string m_language_driver_name;
        std::string m_reserved4;
        dbf_t* m__root;
        dbf_t::header2_t* m__parent;

    public:
        std::string reserved1() const { return m_reserved1; }
        uint8_t has_incomplete_transaction() const { return m_has_incomplete_transaction; }
        uint8_t dbase_iv_encryption() const { return m_dbase_iv_encryption; }
        std::string reserved2() const { return m_reserved2; }
        uint8_t production_mdx() const { return m_production_mdx; }
        uint8_t language_driver_id() const { return m_language_driver_id; }
        std::string reserved3() const { return m_reserved3; }
        std::string language_driver_name() const { return m_language_driver_name; }
        std::string reserved4() const { return m_reserved4; }
        dbf_t* _root() const { return m__root; }
        dbf_t::header2_t* _parent() const { return m__parent; }
    };

private:
    header1_t* m_header1;
    header2_t* m_header2;
    std::vector<std::string>* m_records;
    dbf_t* m__root;
    kaitai::kstruct* m__parent;
    std::string m__raw_header2;
    kaitai::kstream* m__io__raw_header2;

public:
    header1_t* header1() const { return m_header1; }
    header2_t* header2() const { return m_header2; }
    std::vector<std::string>* records() const { return m_records; }
    dbf_t* _root() const { return m__root; }
    kaitai::kstruct* _parent() const { return m__parent; }
    std::string _raw_header2() const { return m__raw_header2; }
    kaitai::kstream* _io__raw_header2() const { return m__io__raw_header2; }
};

#endif  // DBF_H_
