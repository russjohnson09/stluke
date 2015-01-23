@extends('layouts.master')

@section('content')

@include('layouts.sermons',array('sermons'=>$sermons));
@stop