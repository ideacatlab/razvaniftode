@extends('layout.app')
@section('title')
Servicii Design Interior Bucuresti | Răzvan Iftode
@endsection

@section('content')
		<div id="ideacat-page">
	@include('partial.sidebar')
			<div id="ideacat-main">
				@include('project.projectpreviewfpf02')
@include('component.getintouch')
@endsection
