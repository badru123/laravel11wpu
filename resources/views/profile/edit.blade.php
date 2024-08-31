@extends('layouts.app')

@section('content_body')

@include('profile.partials.update-profile-information-form')
@include('profile.partials.update-password-form')
@include('profile.partials.delete-user-form')

@stop