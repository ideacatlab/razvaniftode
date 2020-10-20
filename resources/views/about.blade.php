@extends('layout.app')
@section('title')
Servicii Design Interior Bucuresti | Răzvan Iftode
@endsection

@section('content')
    <div id="ideacat-page">
@include('partial.sidebar')
		<div id="ideacat-main">
@include('component.whoamI')
@include('component.getintouch')
		</div>
	</div>
  @endsection
