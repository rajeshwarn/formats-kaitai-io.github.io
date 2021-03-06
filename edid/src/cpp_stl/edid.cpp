// This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

#include "edid.h"



edid_t::edid_t(kaitai::kstream* p__io, kaitai::kstruct* p__parent, edid_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = this;
    f_mfg_year = false;
    f_mfg_id_ch1 = false;
    f_mfg_id_ch3 = false;
    f_gamma = false;
    f_mfg_id_ch2 = false;
    _read();
}

void edid_t::_read() {
    m_magic = m__io->ensure_fixed_contents(std::string("\x00\xFF\xFF\xFF\xFF\xFF\xFF\x00", 8));
    m_mfg_bytes = m__io->read_u2le();
    m_product_code = m__io->read_u2le();
    m_serial = m__io->read_u4le();
    m_mfg_week = m__io->read_u1();
    m_mfg_year_mod = m__io->read_u1();
    m_edid_version_major = m__io->read_u1();
    m_edid_version_minor = m__io->read_u1();
    m_input_flags = m__io->read_u1();
    m_screen_size_h = m__io->read_u1();
    m_screen_size_v = m__io->read_u1();
    m_gamma_mod = m__io->read_u1();
    m_features_flags = m__io->read_u1();
    m_chromacity = new chromacity_info_t(m__io, this, m__root);
    m_est_timings = new est_timings_info_t(m__io, this, m__root);
    int l_std_timings = 8;
    m_std_timings = new std::vector<std_timing_t*>();
    m_std_timings->reserve(l_std_timings);
    for (int i = 0; i < l_std_timings; i++) {
        m_std_timings->push_back(new std_timing_t(m__io, this, m__root));
    }
}

edid_t::~edid_t() {
    delete m_chromacity;
    delete m_est_timings;
    for (std::vector<std_timing_t*>::iterator it = m_std_timings->begin(); it != m_std_timings->end(); ++it) {
        delete *it;
    }
    delete m_std_timings;
}

edid_t::chromacity_info_t::chromacity_info_t(kaitai::kstream* p__io, edid_t* p__parent, edid_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    f_green_x_int = false;
    f_red_y = false;
    f_green_y_int = false;
    f_white_y = false;
    f_red_x = false;
    f_white_x = false;
    f_blue_x = false;
    f_white_x_int = false;
    f_white_y_int = false;
    f_green_x = false;
    f_red_x_int = false;
    f_red_y_int = false;
    f_blue_x_int = false;
    f_blue_y = false;
    f_green_y = false;
    f_blue_y_int = false;
    _read();
}

void edid_t::chromacity_info_t::_read() {
    m_red_x_1_0 = m__io->read_bits_int(2);
    m_red_y_1_0 = m__io->read_bits_int(2);
    m_green_x_1_0 = m__io->read_bits_int(2);
    m_green_y_1_0 = m__io->read_bits_int(2);
    m_blue_x_1_0 = m__io->read_bits_int(2);
    m_blue_y_1_0 = m__io->read_bits_int(2);
    m_white_x_1_0 = m__io->read_bits_int(2);
    m_white_y_1_0 = m__io->read_bits_int(2);
    m__io->align_to_byte();
    m_red_x_9_2 = m__io->read_u1();
    m_red_y_9_2 = m__io->read_u1();
    m_green_x_9_2 = m__io->read_u1();
    m_green_y_9_2 = m__io->read_u1();
    m_blue_x_9_2 = m__io->read_u1();
    m_blue_y_9_2 = m__io->read_u1();
    m_white_x_9_2 = m__io->read_u1();
    m_white_y_9_2 = m__io->read_u1();
}

edid_t::chromacity_info_t::~chromacity_info_t() {
}

int32_t edid_t::chromacity_info_t::green_x_int() {
    if (f_green_x_int)
        return m_green_x_int;
    m_green_x_int = ((green_x_9_2() << 2) | green_x_1_0());
    f_green_x_int = true;
    return m_green_x_int;
}

double edid_t::chromacity_info_t::red_y() {
    if (f_red_y)
        return m_red_y;
    m_red_y = (red_y_int() / 1024.0);
    f_red_y = true;
    return m_red_y;
}

int32_t edid_t::chromacity_info_t::green_y_int() {
    if (f_green_y_int)
        return m_green_y_int;
    m_green_y_int = ((green_y_9_2() << 2) | green_y_1_0());
    f_green_y_int = true;
    return m_green_y_int;
}

double edid_t::chromacity_info_t::white_y() {
    if (f_white_y)
        return m_white_y;
    m_white_y = (white_y_int() / 1024.0);
    f_white_y = true;
    return m_white_y;
}

double edid_t::chromacity_info_t::red_x() {
    if (f_red_x)
        return m_red_x;
    m_red_x = (red_x_int() / 1024.0);
    f_red_x = true;
    return m_red_x;
}

double edid_t::chromacity_info_t::white_x() {
    if (f_white_x)
        return m_white_x;
    m_white_x = (white_x_int() / 1024.0);
    f_white_x = true;
    return m_white_x;
}

double edid_t::chromacity_info_t::blue_x() {
    if (f_blue_x)
        return m_blue_x;
    m_blue_x = (blue_x_int() / 1024.0);
    f_blue_x = true;
    return m_blue_x;
}

int32_t edid_t::chromacity_info_t::white_x_int() {
    if (f_white_x_int)
        return m_white_x_int;
    m_white_x_int = ((white_x_9_2() << 2) | white_x_1_0());
    f_white_x_int = true;
    return m_white_x_int;
}

int32_t edid_t::chromacity_info_t::white_y_int() {
    if (f_white_y_int)
        return m_white_y_int;
    m_white_y_int = ((white_y_9_2() << 2) | white_y_1_0());
    f_white_y_int = true;
    return m_white_y_int;
}

double edid_t::chromacity_info_t::green_x() {
    if (f_green_x)
        return m_green_x;
    m_green_x = (green_x_int() / 1024.0);
    f_green_x = true;
    return m_green_x;
}

int32_t edid_t::chromacity_info_t::red_x_int() {
    if (f_red_x_int)
        return m_red_x_int;
    m_red_x_int = ((red_x_9_2() << 2) | red_x_1_0());
    f_red_x_int = true;
    return m_red_x_int;
}

int32_t edid_t::chromacity_info_t::red_y_int() {
    if (f_red_y_int)
        return m_red_y_int;
    m_red_y_int = ((red_y_9_2() << 2) | red_y_1_0());
    f_red_y_int = true;
    return m_red_y_int;
}

int32_t edid_t::chromacity_info_t::blue_x_int() {
    if (f_blue_x_int)
        return m_blue_x_int;
    m_blue_x_int = ((blue_x_9_2() << 2) | blue_x_1_0());
    f_blue_x_int = true;
    return m_blue_x_int;
}

double edid_t::chromacity_info_t::blue_y() {
    if (f_blue_y)
        return m_blue_y;
    m_blue_y = (blue_y_int() / 1024.0);
    f_blue_y = true;
    return m_blue_y;
}

double edid_t::chromacity_info_t::green_y() {
    if (f_green_y)
        return m_green_y;
    m_green_y = (green_y_int() / 1024.0);
    f_green_y = true;
    return m_green_y;
}

int32_t edid_t::chromacity_info_t::blue_y_int() {
    if (f_blue_y_int)
        return m_blue_y_int;
    m_blue_y_int = ((blue_y_9_2() << 2) | blue_y_1_0());
    f_blue_y_int = true;
    return m_blue_y_int;
}

edid_t::est_timings_info_t::est_timings_info_t(kaitai::kstream* p__io, edid_t* p__parent, edid_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    _read();
}

void edid_t::est_timings_info_t::_read() {
    m_can_720_400_70 = m__io->read_bits_int(1);
    m_can_720_400_88 = m__io->read_bits_int(1);
    m_can_640_480_60 = m__io->read_bits_int(1);
    m_can_640_480_67 = m__io->read_bits_int(1);
    m_can_640_480_72 = m__io->read_bits_int(1);
    m_can_640_480_75 = m__io->read_bits_int(1);
    m_can_800_600_56 = m__io->read_bits_int(1);
    m_can_800_600_60 = m__io->read_bits_int(1);
    m_can_800_600_72 = m__io->read_bits_int(1);
    m_can_800_600_75 = m__io->read_bits_int(1);
    m_can_832_624_75 = m__io->read_bits_int(1);
    m_can_1024_768_87_i = m__io->read_bits_int(1);
    m_can_1024_768_60 = m__io->read_bits_int(1);
    m_can_1024_768_70 = m__io->read_bits_int(1);
    m_can_1024_768_75 = m__io->read_bits_int(1);
    m_can_1280_1024_75 = m__io->read_bits_int(1);
    m_can_1152_870_75 = m__io->read_bits_int(1);
    m_reserved = m__io->read_bits_int(7);
}

edid_t::est_timings_info_t::~est_timings_info_t() {
}

edid_t::std_timing_t::std_timing_t(kaitai::kstream* p__io, edid_t* p__parent, edid_t* p__root) : kaitai::kstruct(p__io) {
    m__parent = p__parent;
    m__root = p__root;
    f_horiz_active_pixels = false;
    f_refresh_rate = false;
    _read();
}

void edid_t::std_timing_t::_read() {
    m_horiz_active_pixels_mod = m__io->read_u1();
    m_aspect_ratio = static_cast<edid_t::std_timing_t::aspect_ratios_t>(m__io->read_bits_int(2));
    m_refresh_rate_mod = m__io->read_bits_int(5);
}

edid_t::std_timing_t::~std_timing_t() {
}

int32_t edid_t::std_timing_t::horiz_active_pixels() {
    if (f_horiz_active_pixels)
        return m_horiz_active_pixels;
    m_horiz_active_pixels = ((horiz_active_pixels_mod() + 31) * 8);
    f_horiz_active_pixels = true;
    return m_horiz_active_pixels;
}

int32_t edid_t::std_timing_t::refresh_rate() {
    if (f_refresh_rate)
        return m_refresh_rate;
    m_refresh_rate = (refresh_rate_mod() + 60);
    f_refresh_rate = true;
    return m_refresh_rate;
}

int32_t edid_t::mfg_year() {
    if (f_mfg_year)
        return m_mfg_year;
    m_mfg_year = (mfg_year_mod() + 1990);
    f_mfg_year = true;
    return m_mfg_year;
}

int32_t edid_t::mfg_id_ch1() {
    if (f_mfg_id_ch1)
        return m_mfg_id_ch1;
    m_mfg_id_ch1 = ((mfg_bytes() & 31744) >> 10);
    f_mfg_id_ch1 = true;
    return m_mfg_id_ch1;
}

int32_t edid_t::mfg_id_ch3() {
    if (f_mfg_id_ch3)
        return m_mfg_id_ch3;
    m_mfg_id_ch3 = (mfg_bytes() & 31);
    f_mfg_id_ch3 = true;
    return m_mfg_id_ch3;
}

double edid_t::gamma() {
    if (f_gamma)
        return m_gamma;
    n_gamma = true;
    if (gamma_mod() != 255) {
        n_gamma = false;
        m_gamma = ((gamma_mod() + 100) / 100.0);
    }
    f_gamma = true;
    return m_gamma;
}

int32_t edid_t::mfg_id_ch2() {
    if (f_mfg_id_ch2)
        return m_mfg_id_ch2;
    m_mfg_id_ch2 = ((mfg_bytes() & 992) >> 5);
    f_mfg_id_ch2 = true;
    return m_mfg_id_ch2;
}
