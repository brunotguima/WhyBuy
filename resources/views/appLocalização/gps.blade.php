@extends('layouts.app')

@section('content')
<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=[AIzaSyCwxZlIptwbDz1cHZHS4-0Wg0Wi0zx7JhI]&amp;sensor=false&amp;signed_in=true&amp;libraries=geometry,places"></script>
<script src="https://google-maps-utility-library-v3.googlecode.com/svn-history/r287/trunk/markerclusterer/src/markerclusterer.js"></script>
<script src="{{asset('js/maperizer/List.js')}}"></script>
<script src="{{asset('js/maperizer/Maperizer.js')}}"></script>
<script src="{{asset('js/maperizer/map-options.js')}}"></script>
<script src="{{asset('js/maperizer/jqueryui.maperizer.js')}}"></script>
@endsection