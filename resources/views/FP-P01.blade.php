@extends('layout.app')
@section('title')
Servicii Design Interior Bucuresti | Răzvan Iftode
@endsection

@section('content')
		<div id="ideacat-page">
	@include('partial.sidebar')
			<div id="ideacat-main">
				@include('project.projectpreviewfpp01')
@include('component.getintouch')
@endsection
