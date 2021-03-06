# This is a generated file! Please edit source .ksy file and use kaitai-struct-compiler to rebuild

use strict;
use warnings;
use IO::KaitaiStruct 0.007_000;
use ProtocolBody;

########################################################################
package Ipv6Packet;

our @ISA = 'IO::KaitaiStruct::Struct';

sub from_file {
    my ($class, $filename) = @_;
    my $fd;

    open($fd, '<', $filename) or return undef;
    binmode($fd);
    return new($class, IO::KaitaiStruct::Stream->new($fd));
}

sub new {
    my ($class, $_io, $_parent, $_root) = @_;
    my $self = IO::KaitaiStruct::Struct->new($_io);

    bless $self, $class;
    $self->{_parent} = $_parent;
    $self->{_root} = $_root || $self;;

    $self->_read();

    return $self;
}

sub _read {
    my ($self) = @_;

    $self->{version} = $self->{_io}->read_bits_int(4);
    $self->{traffic_class} = $self->{_io}->read_bits_int(8);
    $self->{flow_label} = $self->{_io}->read_bits_int(20);
    $self->{_io}->align_to_byte();
    $self->{payload_length} = $self->{_io}->read_u2be();
    $self->{next_header_type} = $self->{_io}->read_u1();
    $self->{hop_limit} = $self->{_io}->read_u1();
    $self->{src_ipv6_addr} = $self->{_io}->read_bytes(16);
    $self->{dst_ipv6_addr} = $self->{_io}->read_bytes(16);
    $self->{next_header} = ProtocolBody->new($self->{_io});
    $self->{rest} = $self->{_io}->read_bytes_full();
}

sub version {
    my ($self) = @_;
    return $self->{version};
}

sub traffic_class {
    my ($self) = @_;
    return $self->{traffic_class};
}

sub flow_label {
    my ($self) = @_;
    return $self->{flow_label};
}

sub payload_length {
    my ($self) = @_;
    return $self->{payload_length};
}

sub next_header_type {
    my ($self) = @_;
    return $self->{next_header_type};
}

sub hop_limit {
    my ($self) = @_;
    return $self->{hop_limit};
}

sub src_ipv6_addr {
    my ($self) = @_;
    return $self->{src_ipv6_addr};
}

sub dst_ipv6_addr {
    my ($self) = @_;
    return $self->{dst_ipv6_addr};
}

sub next_header {
    my ($self) = @_;
    return $self->{next_header};
}

sub rest {
    my ($self) = @_;
    return $self->{rest};
}

1;
