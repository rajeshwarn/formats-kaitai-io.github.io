# This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

from pkg_resources import parse_version
from kaitaistruct import __version__ as ks_version, KaitaiStruct, KaitaiStream, BytesIO
from enum import Enum


if parse_version(ks_version) < parse_version('0.7'):
    raise Exception("Incompatible Kaitai Struct Python API: 0.7 or later is required, but you have %s" % (ks_version))

class Icc4(KaitaiStruct):
    def __init__(self, _io, _parent=None, _root=None):
        self._io = _io
        self._parent = _parent
        self._root = _root if _root else self
        self._read()

    def _read(self):
        self.header = self._root.ProfileHeader(self._io, self, self._root)
        self.tag_table = self._root.TagTable(self._io, self, self._root)

    class U8Fixed8Number(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.number = self._io.read_bytes(2)


    class U16Fixed16Number(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.number = self._io.read_bytes(4)


    class StandardIlluminantEncoding(KaitaiStruct):

        class StandardIlluminantEncodings(Enum):
            unknown = 0
            d50 = 1
            d65 = 2
            d93 = 3
            f2 = 4
            d55 = 5
            a = 6
            equi_power = 7
            f8 = 8
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.standard_illuminant_encoding = self._root.StandardIlluminantEncoding.StandardIlluminantEncodings(self._io.read_u4be())


    class ProfileHeader(KaitaiStruct):

        class CmmSignatures(Enum):
            the_imaging_factory_cmm = 858931796
            agfa_cmm = 1094929747
            adobe_cmm = 1094992453
            color_gear_cmm = 1128484179
            logosync_cmm = 1147629395
            efi_cmm = 1162234144
            exact_scan_cmm = 1163411779
            fuji_film_cmm = 1179000864
            harlequin_rip_cmm = 1212370253
            heidelberg_cmm = 1212435744
            kodak_cmm = 1262701907
            konica_minolta_cmm = 1296256324
            device_link_cmm = 1380404563
            sample_icc_cmm = 1397310275
            mutoh_cmm = 1397311310
            toshiba_cmm = 1413696845
            color_gear_cmm_lite = 1430471501
            color_gear_cmm_c = 1430474067
            windows_color_system_cmm = 1464029984
            ware_to_go_cmm = 1465141024
            apple_cmm = 1634758764
            argyll_cms_cmm = 1634887532
            little_cms_cmm = 1818455411
            zoran_cmm = 2053320752

        class PrimaryPlatforms(Enum):
            apple_computer_inc = 1095782476
            microsoft_corporation = 1297303124
            silicon_graphics_inc = 1397180704
            sun_microsystems = 1398099543

        class ProfileClasses(Enum):
            abstract_profile = 1633842036
            device_link_profile = 1818848875
            display_device_profile = 1835955314
            named_color_profile = 1852662636
            output_device_profile = 1886549106
            input_device_profile = 1935896178
            color_space_profile = 1936744803

        class RenderingIntents(Enum):
            perceptual = 0
            media_relative_colorimetric = 1
            saturation = 2
            icc_absolute_colorimetric = 3

        class DataColourSpaces(Enum):
            two_colour = 843271250
            three_colour = 860048466
            four_colour = 876825682
            five_colour = 893602898
            six_colour = 910380114
            seven_colour = 927157330
            eight_colour = 943934546
            nine_colour = 960711762
            ten_colour = 1094929490
            eleven_colour = 1111706706
            twelve_colour = 1128483922
            cmy = 1129142560
            cmyk = 1129142603
            thirteen_colour = 1145261138
            fourteen_colour = 1162038354
            fifteen_colour = 1178815570
            gray = 1196573017
            hls = 1212961568
            hsv = 1213421088
            cielab_or_pcslab = 1281450528
            cieluv = 1282766368
            rgb = 1380401696
            nciexyz_or_pcsxyz = 1482250784
            ycbcr = 1497588338
            cieyxy = 1501067552
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.size = self._io.read_u4be()
            self.preferred_cmm_type = self._root.ProfileHeader.CmmSignatures(self._io.read_u4be())
            self.version = self._root.ProfileHeader.VersionField(self._io, self, self._root)
            self.device_class = self._root.ProfileHeader.ProfileClasses(self._io.read_u4be())
            self.color_space = self._root.ProfileHeader.DataColourSpaces(self._io.read_u4be())
            self.pcs = (self._io.read_bytes(4)).decode(u"ASCII")
            self.creation_date_time = self._root.DateTimeNumber(self._io, self, self._root)
            self.file_signature = self._io.ensure_fixed_contents(b"\x61\x63\x73\x70")
            self.primary_platform = self._root.ProfileHeader.PrimaryPlatforms(self._io.read_u4be())
            self.profile_flags = self._root.ProfileHeader.ProfileFlags(self._io, self, self._root)
            self.device_manufacturer = self._root.DeviceManufacturer(self._io, self, self._root)
            self.device_model = (self._io.read_bytes(4)).decode(u"ASCII")
            self.device_attributes = self._root.DeviceAttributes(self._io, self, self._root)
            self.rendering_intent = self._root.ProfileHeader.RenderingIntents(self._io.read_u4be())
            self.nciexyz_values_of_illuminant_of_pcs = self._root.XyzNumber(self._io, self, self._root)
            self.creator = self._root.DeviceManufacturer(self._io, self, self._root)
            self.identifier = self._io.read_bytes(16)
            self.reserved_data = self._io.read_bytes(28)

        class VersionField(KaitaiStruct):
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.major = self._io.ensure_fixed_contents(b"\x04")
                self.minor = self._io.read_bits_int(4)
                self.bug_fix_level = self._io.read_bits_int(4)
                self._io.align_to_byte()
                self.reserved = self._io.ensure_fixed_contents(b"\x00\x00")


        class ProfileFlags(KaitaiStruct):
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.embedded_profile = self._io.read_bits_int(1) != 0
                self.profile_can_be_used_independently_of_embedded_colour_data = self._io.read_bits_int(1) != 0
                self.other_flags = self._io.read_bits_int(30)



    class XyzNumber(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.x = self._io.read_bytes(4)
            self.y = self._io.read_bytes(4)
            self.z = self._io.read_bytes(4)


    class DateTimeNumber(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.year = self._io.read_u2be()
            self.month = self._io.read_u2be()
            self.day = self._io.read_u2be()
            self.hour = self._io.read_u2be()
            self.minute = self._io.read_u2be()
            self.second = self._io.read_u2be()


    class Response16Number(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.number = self._io.read_u4be()
            self.reserved = self._io.ensure_fixed_contents(b"\x00\x00")
            self.measurement_value = self._root.S15Fixed16Number(self._io, self, self._root)


    class U1Fixed15Number(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.number = self._io.read_bytes(2)


    class TagTable(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.tag_count = self._io.read_u4be()
            self.tags = [None] * (self.tag_count)
            for i in range(self.tag_count):
                self.tags[i] = self._root.TagTable.TagDefinition(self._io, self, self._root)


        class TagDefinition(KaitaiStruct):

            class TagSignatures(Enum):
                a_to_b_0 = 1093812784
                a_to_b_1 = 1093812785
                a_to_b_2 = 1093812786
                b_to_a_0 = 1110589744
                b_to_a_1 = 1110589745
                b_to_a_2 = 1110589746
                b_to_d_0 = 1110590512
                b_to_d_1 = 1110590513
                b_to_d_2 = 1110590514
                b_to_d_3 = 1110590515
                d_to_b_0 = 1144144432
                d_to_b_1 = 1144144433
                d_to_b_2 = 1144144434
                d_to_b_3 = 1144144435
                blue_trc = 1649693251
                blue_matrix_column = 1649957210
                calibration_date_time = 1667329140
                chromatic_adaptation = 1667785060
                chromaticity = 1667789421
                colorimetric_intent_image_state = 1667852659
                colorant_table_out = 1668050804
                colorant_order = 1668051567
                colorant_table = 1668051572
                copyright = 1668313716
                profile_description = 1684370275
                device_model_desc = 1684890724
                device_mfg_desc = 1684893284
                green_trc = 1733579331
                green_matrix_column = 1733843290
                gamut = 1734438260
                gray_trc = 1800688195
                luminance = 1819635049
                measurement = 1835360627
                named_color_2 = 1852009522
                preview_0 = 1886545200
                preview_1 = 1886545201
                preview_2 = 1886545202
                profile_sequence = 1886610801
                profile_sequence_identifier = 1886611812
                red_trc = 1918128707
                red_matrix_column = 1918392666
                output_response = 1919251312
                perceptual_rendering_intent_gamut = 1919510320
                saturation_rendering_intent_gamut = 1919510322
                char_target = 1952543335
                technology = 1952801640
                viewing_conditions = 1986618743
                viewing_cond_desc = 1987405156
                media_white_point = 2004119668

            class TagTypeSignatures(Enum):
                xyz_type = 1482250784
                colorant_table_type = 1668051572
                curve_type = 1668641398
                data_type = 1684108385
                date_time_type = 1685350765
                multi_function_a_to_b_table_type = 1832993312
                multi_function_b_to_a_table_type = 1833058592
                measurement_type = 1835360627
                multi_function_table_with_one_byte_precision_type = 1835430961
                multi_function_table_with_two_byte_precision_type = 1835430962
                multi_localized_unicode_type = 1835824483
                multi_process_elements_type = 1836082548
                named_color_2_type = 1852009522
                parametric_curve_type = 1885434465
                profile_sequence_desc_type = 1886610801
                profile_sequence_identifier_type = 1886611812
                response_curve_set_16_type = 1919120178
                s_15_fixed_16_array_type = 1936077618
                signature_type = 1936287520
                text_type = 1952807028
                u_16_fixed_16_array_type = 1969632050
                u_int_8_array_type = 1969827896
                u_int_16_array_type = 1969828150
                u_int_32_array_type = 1969828658
                u_int_64_array_type = 1969829428
                viewing_conditions_type = 1986618743

            class MultiProcessElementsTypes(Enum):
                bacs_element_type = 1648444243
                clut_element_type = 1668052340
                one_dimensional_curves_type = 1668641382
                eacs_element_type = 1698775891
                matrix_element_type = 1835103334
                curve_set_element_table_type = 1835428980
                formula_curve_segments_type = 1885434470
                sampled_curve_segment_type = 1935764838
            def __init__(self, _io, _parent=None, _root=None):
                self._io = _io
                self._parent = _parent
                self._root = _root if _root else self
                self._read()

            def _read(self):
                self.tag_signature = self._root.TagTable.TagDefinition.TagSignatures(self._io.read_u4be())
                self.offset_to_data_element = self._io.read_u4be()
                self.size_of_data_element = self._io.read_u4be()

            class BlueMatrixColumnTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.xyz_type:
                        self.tag_data = self._root.TagTable.TagDefinition.XyzType(self._io, self, self._root)


            class DeviceMfgDescTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_localized_unicode_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiLocalizedUnicodeType(self._io, self, self._root)


            class NamedColor2Type(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.vendor_specific_flag = self._io.read_u4be()
                    self.count_of_named_colours = self._io.read_u4be()
                    self.number_of_device_coordinates_for_each_named_colour = self._io.read_u4be()
                    self.prefix_for_each_colour_name = (self._io.read_bytes_term(0, False, True, True)).decode(u"ASCII")
                    self.prefix_for_each_colour_name_padding = [None] * ((32 - len(self.prefix_for_each_colour_name)))
                    for i in range((32 - len(self.prefix_for_each_colour_name))):
                        self.prefix_for_each_colour_name_padding = self._io.ensure_fixed_contents(b"\x00")

                    self.suffix_for_each_colour_name = (self._io.read_bytes_term(0, False, True, True)).decode(u"ASCII")
                    self.suffix_for_each_colour_name_padding = [None] * ((32 - len(self.suffix_for_each_colour_name)))
                    for i in range((32 - len(self.suffix_for_each_colour_name))):
                        self.suffix_for_each_colour_name_padding = self._io.ensure_fixed_contents(b"\x00")

                    self.named_colour_definitions = [None] * (self.count_of_named_colours)
                    for i in range(self.count_of_named_colours):
                        self.named_colour_definitions[i] = self._root.TagTable.TagDefinition.NamedColor2Type.NamedColourDefinition(self._io, self, self._root)


                class NamedColourDefinition(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.root_name = (self._io.read_bytes_term(0, False, True, True)).decode(u"ASCII")
                        self.root_name_padding = [None] * ((32 - len(self.root_name)))
                        for i in range((32 - len(self.root_name))):
                            self.root_name_padding = self._io.ensure_fixed_contents(b"\x00")

                        self.pcs_coordinates = self._io.read_bytes(6)
                        if self._parent.number_of_device_coordinates_for_each_named_colour > 0:
                            self.device_coordinates = [None] * (self._parent.count_of_named_colours)
                            for i in range(self._parent.count_of_named_colours):
                                self.device_coordinates[i] = self._io.read_u2be()





            class ViewingConditionsTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.viewing_conditions_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ViewingConditionsType(self._io, self, self._root)


            class BlueTrcTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.CurveType(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.parametric_curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ParametricCurveType(self._io, self, self._root)


            class ResponseCurveSet16Type(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_channels = self._io.read_u2be()
                    self.count_of_measurement_types = self._io.read_u2be()
                    self.response_curve_structure_offsets = [None] * (self.count_of_measurement_types)
                    for i in range(self.count_of_measurement_types):
                        self.response_curve_structure_offsets[i] = self._io.read_u4be()

                    self.response_curve_structures = self._io.read_bytes_full()


            class CurveType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_entries = self._io.read_u4be()
                    if self.number_of_entries > 1:
                        self.curve_values = [None] * (self.number_of_entries)
                        for i in range(self.number_of_entries):
                            self.curve_values[i] = self._io.read_u4be()


                    if self.number_of_entries == 1:
                        self.curve_value = self._io.read_u1()



            class SaturationRenderingIntentGamutTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.signature_type:
                        self.tag_data = self._root.TagTable.TagDefinition.SignatureType(self._io, self, self._root)


            class XyzType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.values = []
                    i = 0
                    while not self._io.is_eof():
                        self.values.append(self._root.XyzNumber(self._io, self, self._root))
                        i += 1



            class Lut8Type(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_input_channels = self._io.read_u1()
                    self.number_of_output_channels = self._io.read_u1()
                    self.number_of_clut_grid_points = self._io.read_u1()
                    self.padding = self._io.ensure_fixed_contents(b"\x00")
                    self.encoded_e_parameters = [None] * (9)
                    for i in range(9):
                        self.encoded_e_parameters[i] = self._io.read_s4be()

                    self.number_of_input_table_entries = self._io.read_u4be()
                    self.number_of_output_table_entries = self._io.read_u4be()
                    self.input_tables = self._io.read_bytes((256 * self.number_of_input_channels))
                    self.clut_values = self._io.read_bytes(((self.number_of_clut_grid_points ^ self.number_of_input_channels) * self.number_of_output_channels))
                    self.output_tables = self._io.read_bytes((256 * self.number_of_output_channels))


            class BToA2Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_b_to_a_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutBToAType(self._io, self, self._root)


            class LutAToBType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_input_channels = self._io.read_u1()
                    self.number_of_output_channels = self._io.read_u1()
                    self.padding = self._io.ensure_fixed_contents(b"\x00\x00")
                    self.offset_to_first_b_curve = self._io.read_u4be()
                    self.offset_to_matrix = self._io.read_u4be()
                    self.offset_to_first_m_curve = self._io.read_u4be()
                    self.offset_to_clut = self._io.read_u4be()
                    self.offset_to_first_a_curve = self._io.read_u4be()
                    self.data = self._io.read_bytes_full()


            class BToA0Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_b_to_a_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutBToAType(self._io, self, self._root)


            class MediaWhitePointTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.xyz_type:
                        self.tag_data = self._root.TagTable.TagDefinition.XyzType(self._io, self, self._root)


            class Lut16Type(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_input_channels = self._io.read_u1()
                    self.number_of_output_channels = self._io.read_u1()
                    self.number_of_clut_grid_points = self._io.read_u1()
                    self.padding = self._io.ensure_fixed_contents(b"\x00")
                    self.encoded_e_parameters = [None] * (9)
                    for i in range(9):
                        self.encoded_e_parameters[i] = self._io.read_s4be()

                    self.number_of_input_table_entries = self._io.read_u4be()
                    self.number_of_output_table_entries = self._io.read_u4be()
                    self.input_tables = self._io.read_bytes(((2 * self.number_of_input_channels) * self.number_of_input_table_entries))
                    self.clut_values = self._io.read_bytes(((2 * (self.number_of_clut_grid_points ^ self.number_of_input_channels)) * self.number_of_output_channels))
                    self.output_tables = self._io.read_bytes(((2 * self.number_of_output_channels) * self.number_of_output_table_entries))


            class PerceptualRenderingIntentGamutTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.signature_type:
                        self.tag_data = self._root.TagTable.TagDefinition.SignatureType(self._io, self, self._root)


            class U16Fixed16ArrayType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.values = []
                    i = 0
                    while not self._io.is_eof():
                        self.values.append(self._root.U16Fixed16Number(self._io, self, self._root))
                        i += 1



            class ColorantTableOutTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.colorant_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ColorantTableType(self._io, self, self._root)


            class MeasurementTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.measurement_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MeasurementType(self._io, self, self._root)


            class ProfileSequenceTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.profile_sequence_desc_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ProfileSequenceDescType(self._io, self, self._root)


            class TechnologyTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.signature_type:
                        self.tag_data = self._root.TagTable.TagDefinition.SignatureType(self._io, self, self._root)


            class AToB0Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_a_to_b_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutAToBType(self._io, self, self._root)


            class DToB0Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            class OutputResponseTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.response_curve_set_16_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ResponseCurveSet16Type(self._io, self, self._root)


            class GreenMatrixColumnTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.xyz_type:
                        self.tag_data = self._root.TagTable.TagDefinition.XyzType(self._io, self, self._root)


            class ProfileDescriptionTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_localized_unicode_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiLocalizedUnicodeType(self._io, self, self._root)


            class Preview1Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_b_to_a_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutBToAType(self._io, self, self._root)


            class RedTrcTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.CurveType(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.parametric_curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ParametricCurveType(self._io, self, self._root)


            class BToD0Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            class DToB1Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            class BToA1Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_b_to_a_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutBToAType(self._io, self, self._root)


            class ParametricCurveType(KaitaiStruct):

                class ParametricCurveTypeFunctions(Enum):
                    y_equals_x_to_power_of_g = 0
                    cie_122_1996 = 1
                    iec_61966_3 = 2
                    iec_61966_2_1 = 3
                    y_equals_ob_ax_plus_b_cb_to_power_of_g_plus_c = 4
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.function_type = self._root.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions(self._io.read_u2be())
                    self.reserved_2 = self._io.ensure_fixed_contents(b"\x00\x00")
                    _on = self.function_type
                    if _on == self._root.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.y_equals_x_to_power_of_g:
                        self.parameters = self._root.TagTable.TagDefinition.ParametricCurveType.ParamsYEqualsXToPowerOfG(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.cie_122_1996:
                        self.parameters = self._root.TagTable.TagDefinition.ParametricCurveType.ParamsCie1221996(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.iec_61966_2_1:
                        self.parameters = self._root.TagTable.TagDefinition.ParametricCurveType.ParamsIec6196621(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.y_equals_ob_ax_plus_b_cb_to_power_of_g_plus_c:
                        self.parameters = self._root.TagTable.TagDefinition.ParametricCurveType.ParamsYEqualsObAxPlusBCbToPowerOfGPlusC(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.ParametricCurveType.ParametricCurveTypeFunctions.iec_61966_3:
                        self.parameters = self._root.TagTable.TagDefinition.ParametricCurveType.ParamsIec619663(self._io, self, self._root)

                class ParamsIec619663(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.g = self._io.read_s4be()
                        self.a = self._io.read_s4be()
                        self.b = self._io.read_s4be()
                        self.c = self._io.read_s4be()


                class ParamsIec6196621(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.g = self._io.read_s4be()
                        self.a = self._io.read_s4be()
                        self.b = self._io.read_s4be()
                        self.c = self._io.read_s4be()
                        self.d = self._io.read_s4be()


                class ParamsYEqualsXToPowerOfG(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.g = self._io.read_s4be()


                class ParamsYEqualsObAxPlusBCbToPowerOfGPlusC(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.g = self._io.read_s4be()
                        self.a = self._io.read_s4be()
                        self.b = self._io.read_s4be()
                        self.c = self._io.read_s4be()
                        self.d = self._io.read_s4be()
                        self.e = self._io.read_s4be()
                        self.f = self._io.read_s4be()


                class ParamsCie1221996(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.g = self._io.read_s4be()
                        self.a = self._io.read_s4be()
                        self.b = self._io.read_s4be()



            class ChromaticityTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.chromaticity_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ChromaticityType(self._io, self, self._root)


            class ChromaticAdaptationTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.s_15_fixed_16_array_type:
                        self.tag_data = self._root.TagTable.TagDefinition.S15Fixed16ArrayType(self._io, self, self._root)


            class MeasurementType(KaitaiStruct):

                class StandardObserverEncodings(Enum):
                    unknown = 0
                    cie_1931_standard_colorimetric_observer = 1
                    cie_1964_standard_colorimetric_observer = 2

                class MeasurementGeometryEncodings(Enum):
                    unknown = 0
                    zero_degrees_to_45_degrees_or_45_degrees_to_zero_degrees = 1
                    zero_degrees_to_d_degrees_or_d_degrees_to_zero_degrees = 2

                class MeasurementFlareEncodings(Enum):
                    zero_percent = 0
                    one_hundred_percent = 65536
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.standard_observer_encoding = self._root.TagTable.TagDefinition.MeasurementType.StandardObserverEncodings(self._io.read_u4be())
                    self.nciexyz_tristimulus_values_for_measurement_backing = self._root.XyzNumber(self._io, self, self._root)
                    self.measurement_geometry_encoding = self._root.TagTable.TagDefinition.MeasurementType.MeasurementGeometryEncodings(self._io.read_u4be())
                    self.measurement_flare_encoding = self._root.TagTable.TagDefinition.MeasurementType.MeasurementFlareEncodings(self._io.read_u4be())
                    self.standard_illuminant_encoding = self._root.StandardIlluminantEncoding(self._io, self, self._root)


            class TextType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.value = (KaitaiStream.bytes_terminate(self._io.read_bytes_full(), 0, False)).decode(u"ASCII")


            class ProfileSequenceIdentifierType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_structures = self._io.read_u4be()
                    self.positions_table = [None] * (self.number_of_structures)
                    for i in range(self.number_of_structures):
                        self.positions_table[i] = self._root.PositionNumber(self._io, self, self._root)

                    self.profile_identifiers = [None] * (self.number_of_structures)
                    for i in range(self.number_of_structures):
                        self.profile_identifiers[i] = self._root.TagTable.TagDefinition.ProfileSequenceIdentifierType.ProfileIdentifier(self._io, self, self._root)


                class ProfileIdentifier(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.profile_id = self._io.read_bytes(16)
                        self.profile_description = self._root.TagTable.TagDefinition.MultiLocalizedUnicodeType(self._io, self, self._root)



            class ColorantTableType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.count_of_colorants = self._io.read_u4be()
                    self.colorants = [None] * (self.count_of_colorants)
                    for i in range(self.count_of_colorants):
                        self.colorants[i] = self._root.TagTable.TagDefinition.ColorantTableType.Colorant(self._io, self, self._root)


                class Colorant(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.name = (self._io.read_bytes_term(0, False, True, True)).decode(u"ASCII")
                        self.padding = [None] * ((32 - len(self.name)))
                        for i in range((32 - len(self.name))):
                            self.padding = self._io.ensure_fixed_contents(b"\x00")

                        self.pcs_values = self._io.read_bytes(6)



            class SignatureType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.signature = (self._io.read_bytes(4)).decode(u"ASCII")


            class CopyrightTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_localized_unicode_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiLocalizedUnicodeType(self._io, self, self._root)


            class Preview0Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_a_to_b_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutAToBType(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_b_to_a_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutBToAType(self._io, self, self._root)


            class DateTimeType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.date_and_time = self._root.DateTimeNumber(self._io, self, self._root)


            class DToB3Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            class Preview2Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_b_to_a_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutBToAType(self._io, self, self._root)


            class DeviceModelDescTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_localized_unicode_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiLocalizedUnicodeType(self._io, self, self._root)


            class MultiProcessElementsType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_input_channels = self._io.read_u2be()
                    self.number_of_output_channels = self._io.read_u2be()
                    self.number_of_processing_elements = self._io.read_u4be()
                    self.process_element_positions_table = [None] * (self.number_of_processing_elements)
                    for i in range(self.number_of_processing_elements):
                        self.process_element_positions_table[i] = self._root.PositionNumber(self._io, self, self._root)

                    self.data = self._io.read_bytes_full()


            class UInt16ArrayType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.values = []
                    i = 0
                    while not self._io.is_eof():
                        self.values.append(self._io.read_u2be())
                        i += 1



            class ColorantOrderTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.colorant_order_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ColorantOrderType(self._io, self, self._root)


            class DataType(KaitaiStruct):

                class DataTypes(Enum):
                    ascii_data = 0
                    binary_data = 1
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.data_flag = self._root.TagTable.TagDefinition.DataType.DataTypes(self._io.read_u4be())


            class ChromaticityType(KaitaiStruct):

                class ColorantAndPhosphorEncodings(Enum):
                    unknown = 0
                    itu_r_bt_709_2 = 1
                    smpte_rp145 = 2
                    ebu_tech_3213_e = 3
                    p22 = 4
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_device_channels = self._io.read_u2be()
                    self.colorant_and_phosphor_encoding = self._root.TagTable.TagDefinition.ChromaticityType.ColorantAndPhosphorEncodings(self._io.read_u2be())
                    self.ciexy_coordinates_per_channel = [None] * (self.number_of_device_channels)
                    for i in range(self.number_of_device_channels):
                        self.ciexy_coordinates_per_channel[i] = self._root.TagTable.TagDefinition.ChromaticityType.CiexyCoordinateValues(self._io, self, self._root)


                class CiexyCoordinateValues(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.x_coordinate = self._io.read_u2be()
                        self.y_coordinate = self._io.read_u2be()



            class LuminanceTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.xyz_type:
                        self.tag_data = self._root.TagTable.TagDefinition.XyzType(self._io, self, self._root)


            class S15Fixed16ArrayType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.values = []
                    i = 0
                    while not self._io.is_eof():
                        self.values.append(self._root.S15Fixed16Number(self._io, self, self._root))
                        i += 1



            class MultiLocalizedUnicodeType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_records = self._io.read_u4be()
                    self.record_size = self._io.read_u4be()
                    self.records = [None] * (self.number_of_records)
                    for i in range(self.number_of_records):
                        self.records[i] = self._root.TagTable.TagDefinition.MultiLocalizedUnicodeType.Record(self._io, self, self._root)


                class Record(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.language_code = self._io.read_u2be()
                        self.country_code = self._io.read_u2be()
                        self.string_length = self._io.read_u4be()
                        self.string_offset = self._io.read_u4be()

                    @property
                    def string_data(self):
                        if hasattr(self, '_m_string_data'):
                            return self._m_string_data if hasattr(self, '_m_string_data') else None

                        _pos = self._io.pos()
                        self._io.seek(self.string_offset)
                        self._m_string_data = (self._io.read_bytes(self.string_length)).decode(u"UTF-16BE")
                        self._io.seek(_pos)
                        return self._m_string_data if hasattr(self, '_m_string_data') else None



            class AToB2Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_a_to_b_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutAToBType(self._io, self, self._root)


            class AToB1Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_a_to_b_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutAToBType(self._io, self, self._root)


            class ColorimetricIntentImageStateTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.signature_type:
                        self.tag_data = self._root.TagTable.TagDefinition.SignatureType(self._io, self, self._root)


            class CharTargetTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.text_type:
                        self.tag_data = self._root.TagTable.TagDefinition.TextType(self._io, self, self._root)


            class ColorantTableTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.colorant_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ColorantTableType(self._io, self, self._root)


            class CalibrationDateTimeTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.date_time_type:
                        self.tag_data = self._root.TagTable.TagDefinition.DateTimeType(self._io, self, self._root)


            class NamedColor2Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.named_color_2_type:
                        self.tag_data = self._root.TagTable.TagDefinition.NamedColor2Type(self._io, self, self._root)


            class ViewingCondDescTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_localized_unicode_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiLocalizedUnicodeType(self._io, self, self._root)


            class BToD3Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            class ProfileSequenceDescType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_description_structures = self._io.read_u4be()
                    self.profile_descriptions = [None] * (self.number_of_description_structures)
                    for i in range(self.number_of_description_structures):
                        self.profile_descriptions[i] = self._root.TagTable.TagDefinition.ProfileSequenceDescType.ProfileDescription(self._io, self, self._root)


                class ProfileDescription(KaitaiStruct):
                    def __init__(self, _io, _parent=None, _root=None):
                        self._io = _io
                        self._parent = _parent
                        self._root = _root if _root else self
                        self._read()

                    def _read(self):
                        self.device_manufacturer = self._root.DeviceManufacturer(self._io, self, self._root)
                        self.device_model = (self._io.read_bytes(4)).decode(u"ASCII")
                        self.device_attributes = self._root.DeviceAttributes(self._io, self, self._root)
                        self.device_technology = self._root.TagTable.TagDefinition.TechnologyTag(self._io, self, self._root)
                        self.description_of_device_manufacturer = self._root.TagTable.TagDefinition.DeviceMfgDescTag(self._io, self, self._root)
                        self.description_of_device_model = self._root.TagTable.TagDefinition.DeviceModelDescTag(self._io, self, self._root)



            class ProfileSequenceIdentifierTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.profile_sequence_identifier_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ProfileSequenceIdentifierType(self._io, self, self._root)


            class BToD1Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            class ColorantOrderType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.count_of_colorants = self._io.read_u4be()
                    self.numbers_of_colorants_in_order_of_printing = [None] * (self.count_of_colorants)
                    for i in range(self.count_of_colorants):
                        self.numbers_of_colorants_in_order_of_printing[i] = self._io.read_u1()



            class DToB2Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            class GrayTrcTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.CurveType(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.parametric_curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ParametricCurveType(self._io, self, self._root)


            class ViewingConditionsType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.un_normalized_ciexyz_values_for_illuminant = self._root.XyzNumber(self._io, self, self._root)
                    self.un_normalized_ciexyz_values_for_surround = self._root.XyzNumber(self._io, self, self._root)
                    self.illuminant_type = self._root.StandardIlluminantEncoding(self._io, self, self._root)


            class LutBToAType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.number_of_input_channels = self._io.read_u1()
                    self.number_of_output_channels = self._io.read_u1()
                    self.padding = self._io.ensure_fixed_contents(b"\x00\x00")
                    self.offset_to_first_b_curve = self._io.read_u4be()
                    self.offset_to_matrix = self._io.read_u4be()
                    self.offset_to_first_m_curve = self._io.read_u4be()
                    self.offset_to_clut = self._io.read_u4be()
                    self.offset_to_first_a_curve = self._io.read_u4be()
                    self.data = self._io.read_bytes_full()


            class GreenTrcTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.CurveType(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.parametric_curve_type:
                        self.tag_data = self._root.TagTable.TagDefinition.ParametricCurveType(self._io, self, self._root)


            class UInt32ArrayType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.values = []
                    i = 0
                    while not self._io.is_eof():
                        self.values.append(self._io.read_u4be())
                        i += 1



            class GamutTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_one_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut8Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_table_with_two_byte_precision_type:
                        self.tag_data = self._root.TagTable.TagDefinition.Lut16Type(self._io, self, self._root)
                    elif _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_function_b_to_a_table_type:
                        self.tag_data = self._root.TagTable.TagDefinition.LutBToAType(self._io, self, self._root)


            class UInt8ArrayType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.values = []
                    i = 0
                    while not self._io.is_eof():
                        self.values.append(self._io.read_u1())
                        i += 1



            class RedMatrixColumnTag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.xyz_type:
                        self.tag_data = self._root.TagTable.TagDefinition.XyzType(self._io, self, self._root)


            class UInt64ArrayType(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.reserved = self._io.ensure_fixed_contents(b"\x00\x00\x00\x00")
                    self.values = []
                    i = 0
                    while not self._io.is_eof():
                        self.values.append(self._io.read_u8be())
                        i += 1



            class BToD2Tag(KaitaiStruct):
                def __init__(self, _io, _parent=None, _root=None):
                    self._io = _io
                    self._parent = _parent
                    self._root = _root if _root else self
                    self._read()

                def _read(self):
                    self.tag_type = self._root.TagTable.TagDefinition.TagTypeSignatures(self._io.read_u4be())
                    _on = self.tag_type
                    if _on == self._root.TagTable.TagDefinition.TagTypeSignatures.multi_process_elements_type:
                        self.tag_data = self._root.TagTable.TagDefinition.MultiProcessElementsType(self._io, self, self._root)


            @property
            def tag_data_element(self):
                if hasattr(self, '_m_tag_data_element'):
                    return self._m_tag_data_element if hasattr(self, '_m_tag_data_element') else None

                _pos = self._io.pos()
                self._io.seek(self.offset_to_data_element)
                _on = self.tag_signature
                if _on == self._root.TagTable.TagDefinition.TagSignatures.profile_sequence_identifier:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ProfileSequenceIdentifierTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.colorimetric_intent_image_state:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ColorimetricIntentImageStateTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.red_trc:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.RedTrcTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.preview_0:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.Preview0Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.green_trc:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.GreenTrcTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.b_to_d_0:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BToD0Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.colorant_table_out:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ColorantTableOutTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.b_to_a_2:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BToA2Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.calibration_date_time:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.CalibrationDateTimeTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.chromatic_adaptation:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ChromaticAdaptationTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.colorant_table:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ColorantTableTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.a_to_b_2:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.AToB2Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.d_to_b_1:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.DToB1Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.chromaticity:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ChromaticityTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.blue_matrix_column:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BlueMatrixColumnTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.a_to_b_0:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.AToB0Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.b_to_d_2:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BToD2Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.b_to_a_1:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BToA1Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.media_white_point:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.MediaWhitePointTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.d_to_b_0:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.DToB0Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.named_color_2:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.NamedColor2Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.d_to_b_2:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.DToB2Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.red_matrix_column:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.RedMatrixColumnTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.viewing_conditions:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ViewingConditionsTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.a_to_b_1:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.AToB1Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.preview_1:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.Preview1Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.gray_trc:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.GrayTrcTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.device_mfg_desc:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.DeviceMfgDescTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.b_to_d_1:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BToD1Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.colorant_order:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ColorantOrderTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.copyright:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.CopyrightTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.gamut:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.GamutTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.char_target:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.CharTargetTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.output_response:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.OutputResponseTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.technology:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.TechnologyTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.viewing_cond_desc:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ViewingCondDescTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.profile_description:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ProfileDescriptionTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.luminance:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.LuminanceTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.d_to_b_3:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.DToB3Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.b_to_d_3:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BToD3Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.b_to_a_0:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BToA0Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.preview_2:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.Preview2Tag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.green_matrix_column:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.GreenMatrixColumnTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.profile_sequence:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.ProfileSequenceTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.saturation_rendering_intent_gamut:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.SaturationRenderingIntentGamutTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.perceptual_rendering_intent_gamut:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.PerceptualRenderingIntentGamutTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.blue_trc:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.BlueTrcTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.device_model_desc:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.DeviceModelDescTag(io, self, self._root)
                elif _on == self._root.TagTable.TagDefinition.TagSignatures.measurement:
                    self._raw__m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                    io = KaitaiStream(BytesIO(self._raw__m_tag_data_element))
                    self._m_tag_data_element = self._root.TagTable.TagDefinition.MeasurementTag(io, self, self._root)
                else:
                    self._m_tag_data_element = self._io.read_bytes(self.size_of_data_element)
                self._io.seek(_pos)
                return self._m_tag_data_element if hasattr(self, '_m_tag_data_element') else None



    class DeviceAttributes(KaitaiStruct):

        class DeviceAttributesReflectiveOrTransparency(Enum):
            reflective = 0
            transparency = 1

        class DeviceAttributesGlossyOrMatte(Enum):
            glossy = 0
            matte = 1

        class DeviceAttributesPositiveOrNegativeMediaPolarity(Enum):
            positive_media_polarity = 0
            negative_media_polarity = 1

        class DeviceAttributesColourOrBlackAndWhiteMedia(Enum):
            colour_media = 0
            black_and_white_media = 1
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.reflective_or_transparency = self._root.DeviceAttributes.DeviceAttributesReflectiveOrTransparency(self._io.read_bits_int(1))
            self.glossy_or_matte = self._root.DeviceAttributes.DeviceAttributesGlossyOrMatte(self._io.read_bits_int(1))
            self.positive_or_negative_media_polarity = self._root.DeviceAttributes.DeviceAttributesPositiveOrNegativeMediaPolarity(self._io.read_bits_int(1))
            self.colour_or_black_and_white_media = self._root.DeviceAttributes.DeviceAttributesColourOrBlackAndWhiteMedia(self._io.read_bits_int(1))
            self.reserved = self._io.read_bits_int(28)
            self.vendor_specific = self._io.read_bits_int(32)


    class DeviceManufacturer(KaitaiStruct):

        class DeviceManufacturers(Enum):
            erdt_systems_gmbh_and_co_kg = 878981744
            aamazing_technologies_inc = 1094798657
            acer_peripherals = 1094927698
            acolyte_color_research = 1094929492
            actix_sytems_inc = 1094931529
            adara_technology_inc = 1094992210
            adobe_systems_incorporated = 1094992453
            adi_systems_inc = 1094994208
            agfa_graphics_nv = 1095190081
            alps_electric_usa_inc = 1095519556
            alps_electric_usa_inc_2 = 1095520339
            alwan_color_expertise = 1095522126
            amiable_technologies_inc = 1095586889
            aoc_international_usa_ltd = 1095713568
            apago = 1095778631
            apple_computer_inc = 1095782476
            ast = 1095980064
            atandt_computer_systems = 1096033876
            barbieri_electronic = 1111573836
            barco_nv = 1112687439
            breakpoint_pty_limited = 1112689488
            brother_industries_ltd = 1112690516
            bull = 1112886348
            bus_computer_systems = 1112888096
            c_itoh = 1127041364
            intel_corporation = 1128353106
            canon_inc_canon_development_americas_inc = 1128353359
            carroll_touch = 1128354386
            casio_computer_co_ltd = 1128354633
            colorbus_pl = 1128420691
            crossfield = 1128614944
            crossfield_2 = 1128615032
            cgs_publishing_technologies_international_gmbh = 1128747808
            rochester_robotics = 1128811808
            colour_imaging_group_london = 1128875852
            citizen = 1128879177
            candela_ltd = 1129066544
            color_iq = 1129072977
            chromaco_inc = 1129136975
            chromix = 1129146712
            colorgraphic_communications_corporation = 1129270351
            compaq_computer_corporation = 1129270608
            compeq_usa_focus_technology = 1129270640
            conrac_display_products = 1129270866
            cordata_technologies_inc = 1129271876
            compaq_computer_corporation_2 = 1129337120
            colorpro = 1129337423
            cornerstone = 1129467424
            ctx_international_inc = 1129601056
            colorvision = 1129728339
            fujitsu_laboratories_ltd = 1129792288
            darius_technology_ltd = 1145131593
            dataproducts = 1145132097
            dry_creek_photo = 1145262112
            digital_contents_resource_center_chung_ang_university = 1145262659
            dell_computer_corporation = 1145392204
            dainippon_ink_and_chemicals = 1145652000
            diconix = 1145652047
            digital = 1145653065
            digital_light_and_color = 1145841219
            doppelganger_llc = 1146113095
            dainippon_screen = 1146298400
            doosol = 1146310476
            dupont = 1146441806
            epson = 1162892111
            esko_graphics = 1163086671
            electronics_and_telecommunications_research_institute = 1163153993
            everex_systems_inc = 1163281746
            exactcode_gmbh = 1163411779
            eizo_nanao_corporation = 1164540527
            falco_data_products_inc = 1178684483
            fuji_photo_film_coltd = 1179000864
            fujifilm_electronic_imaging_ltd = 1179010377
            fnord_software = 1179537988
            fora_inc = 1179603521
            forefront_technology_corporation = 1179603525
            fujitsu = 1179658794
            waytech_development_inc = 1179664672
            fujitsu_2 = 1179994697
            fuji_xerox_co_ltd = 1180180512
            gcc_technologies_inc = 1195590432
            global_graphics_software_limited = 1195856716
            gretagmacbeth = 1196245536
            gmg_gmbh_and_co_kg = 1196246816
            goldstar_technology_inc = 1196379204
            giantprint_pty_ltd = 1196446292
            gretagmacbeth_2 = 1196707138
            waytech_development_inc_2 = 1196835616
            sony_corporation = 1196896843
            hci = 1212369184
            heidelberger_druckmaschinen_ag = 1212435744
            hermes = 1212502605
            hitachi_america_ltd = 1212765249
            hewlett_packard = 1213210656
            hitachi_ltd = 1213481760
            hiti_digital_inc = 1214862441
            ibm_corporation = 1229081888
            scitex_corporation_ltd = 1229213268
            hewlett_packard_2 = 1229275936
            iiyama_north_america_inc = 1229543745
            ikegami_electronics_inc = 1229669703
            image_systems_corporation = 1229799751
            ingram_micro_inc = 1229801760
            intel_corporation_2 = 1229870147
            intl = 1229870156
            intra_electronics_usa_inc = 1229870162
            iocomm_international_technology_corporation = 1229931343
            infoprint_solutions_company = 1230000928
            scitex_corporation_ltd_3 = 1230129491
            ichikawa_soft_laboratory = 1230195744
            itnl = 1230261836
            ivm = 1230392608
            iwatsu_electric_co_ltd = 1230455124
            scitex_corporation_ltd_2 = 1231318644
            inca_digital_printers_ltd = 1231971169
            scitex_corporation_ltd_4 = 1232234867
            jetsoft_development = 1246971476
            jvc_information_products_co = 1247167264
            scitex_corporation_ltd_6 = 1262572116
            kfc_computek_components_corporation = 1262895904
            klh_computers = 1263290400
            konica_minolta_holdings_inc = 1263355972
            konica_corporation = 1263420225
            kodak = 1263486017
            kyocera = 1264144195
            scitex_corporation_ltd_7 = 1264677492
            leica_camera_ag = 1279476039
            leeds_colour = 1279476548
            left_dakota = 1279541579
            leading_technology_inc = 1279607108
            lexmark_international_inc = 1279613005
            link_computer_inc = 1279872587
            linotronic = 1279872591
            lite_on_inc = 1279874117
            mag_computronic_usa_inc = 1296123715
            mag_innovision_inc = 1296123721
            mannesmann = 1296125518
            micron_technology_inc = 1296646990
            microtek = 1296646994
            microvitec_inc = 1296646998
            minolta = 1296649807
            mitsubishi_electronics_america_inc = 1296651347
            mitsuba_corporation = 1296651379
            minolta_2 = 1296976980
            modgraph_inc = 1297040455
            monitronix_inc = 1297043017
            monaco_systems_inc = 1297043027
            morse_technology_inc = 1297044051
            motive_systems = 1297044553
            microsoft_corporation = 1297303124
            mutoh_industries_ltd = 1297437775
            mitsubishi_electric_corporation_kyoto_works = 1298756723
            nanao_usa_corporation = 1312902721
            nec_corporation = 1313162016
            nexpress_solutions_llc = 1313167440
            nissei_sangyo_america_ltd = 1313428307
            nikon_corporation = 1313558350
            oce_technologies_bv = 1329808672
            ocecolor = 1329808707
            oki = 1330333984
            okidata = 1330334020
            okidata_2 = 1330334032
            olivetti = 1330399574
            olympus_optical_co_ltd = 1330403661
            onyx_graphics = 1330534744
            optiquest = 1330664521
            packard_bell = 1346454347
            matsushita_electric_industrial_co_ltd = 1346457153
            pantone_inc = 1346457172
            packard_bell_2 = 1346522656
            pfu_limited = 1346786592
            philips_consumer_electronics_co = 1346914636
            hoya_corporation_pentax_imaging_systems_division = 1347310680
            phase_one_a_s = 1347382885
            premier_computer_innovations = 1347568973
            princeton_graphic_systems = 1347569998
            princeton_publishing_labs = 1347570000
            qlux = 1363957080
            qms_inc = 1364022048
            qpcard_ab = 1364214596
            quadlaser = 1364541764
            qume_corporation = 1364544837
            radius_inc = 1380009033
            integrated_color_solutions_inc_2 = 1380205688
            roland_dg_corporation = 1380206368
            redms_group_inc = 1380271181
            relisys = 1380273225
            rolf_gierling_multitools = 1380404563
            ricoh_corporation = 1380533071
            edmund_ronald = 1380863044
            royal = 1380931905
            ricoh_printing_systemsltd = 1380991776
            royal_information_electronics_co_ltd = 1381256224
            sampo_corporation_of_america = 1396788560
            samsung_inc = 1396788563
            jaime_santana_pomares = 1396788820
            scitex_corporation_ltd_9 = 1396918612
            dainippon_screen_3 = 1396920910
            scitex_corporation_ltd_12 = 1396985888
            samsung_electronics_coltd = 1397048096
            seiko_instruments_usa_inc = 1397049675
            seikosha = 1397049707
            scanguycom = 1397183833
            sharp_laboratories = 1397244242
            international_color_consortium = 1397310275
            sony_corporation_2 = 1397706329
            spectracal = 1397769036
            star = 1398030674
            sampo_technology_corporation = 1398031136
            scitex_corporation_ltd_10 = 1399023988
            scitex_corporation_ltd_13 = 1399091232
            sony_corporation_3 = 1399811705
            talon_technology_corporation = 1413565519
            tandy = 1413566020
            tatung_co_of_america_inc = 1413567573
            taxan_america_inc = 1413568577
            tokyo_denshi_sekei_kk = 1413763872
            teco_information_systems_inc = 1413825359
            tegra = 1413826386
            tektronix_inc = 1413827412
            texas_instruments = 1414078496
            typemaker_ltd = 1414351698
            toshiba_corp = 1414484802
            toshiba_inc = 1414484808
            totoku_electric_co_ltd = 1414485067
            triumph = 1414678869
            toshiba_tec_corporation = 1414742612
            ttx_computer_products_inc = 1414813728
            tvm_professional_monitor_corporation = 1414941984
            tw_casper_corporation = 1414996000
            ulead_systems = 1431065432
            unisys = 1431193939
            utz_fehlau_and_sohn = 1431591494
            varityper = 1447121481
            viewsonic = 1447642455
            visual_communication = 1447646028
            wang = 1463897671
            wilbur_imaging = 1464615506
            ware_to_go = 1465141042
            wyse_technology = 1465471813
            xerox_corporation = 1480938072
            x_rite = 1481787732
            lavanyas_test_company = 1513173555
            zoran_corporation = 1515340110
            zebra_technologies_inc = 1516593778
            basiccolor_gmbh = 1648968515
            bergdesign_incorporated = 1650815591
            integrated_color_solutions_inc = 1667594596
            macdermid_colorspan_inc = 1668051824
            dainippon_screen_2 = 1685266464
            dupont_2 = 1685418094
            fujifilm_electronic_imaging_ltd_2 = 1717986665
            fluxdata_corporation = 1718383992
            scitex_corporation_ltd_5 = 1769105779
            scitex_corporation_ltd_8 = 1801548404
            erdt_systems_gmbh_and_co_kg_2 = 1868706916
            medigraph_gmbh = 1868720483
            qubyx_sarl = 1903518329
            scitex_corporation_ltd_11 = 1935894900
            dainippon_screen_4 = 1935897198
            scitex_corporation_ltd_14 = 1935962144
            siwi_grafika_corporation = 1936291689
            yxymaster_gmbh = 2037938541
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.device_manufacturer = self._root.DeviceManufacturer.DeviceManufacturers(self._io.read_u4be())


    class S15Fixed16Number(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.number = self._io.read_bytes(4)


    class PositionNumber(KaitaiStruct):
        def __init__(self, _io, _parent=None, _root=None):
            self._io = _io
            self._parent = _parent
            self._root = _root if _root else self
            self._read()

        def _read(self):
            self.offset_to_data_element = self._io.read_u4be()
            self.size_of_data_element = self._io.read_u4be()



