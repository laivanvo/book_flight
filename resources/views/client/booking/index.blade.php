@extends('Layouts.client')

@section('content')

    {{-- =================== Checkout =================== --}}

    


    {{-- @include('shared.header_content') --}}

    <!-- ======================== Booking ======================== -->

    @include('Layouts.BookForm')
    {{--@include('shared.booking')

    <!-- ========================  Rooms ======================== -->

    {{-- @include('shared.rooms') --}}

    <!-- ========================  Stretcher widget ======================== -->

    @include('shared.stretcher_widget')

    <!-- ========================  Blog ======================== -->

    @include('shared.blog')

    <!-- ========================  Cards ======================== -->

    @include('shared.cards')

    <!-- ======================== Image blocks ======================== -->

    @include('shared.image_blocks')

    <!-- ======================== Quotes ======================== -->

    @include('shared.quotes')

    <!-- ========================  Subscribe ======================== -->

    @include('shared.subscribe')

    <!-- ================== Footer  ================== -->

    {{-- =================== Subscribe =================== --}}

    {{-- @include('shared.subscribe') --}}
    
@endsection