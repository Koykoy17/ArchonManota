@extends('layouts.app')

@section('title', 'Archon  |  Moving Life Forward')

{{-- ── SEO meta ─────────────────────────────────────────────────── --}}
@section('meta_description', 'Archon — placeholder meta description. Phase 3 will populate this.')

{{-- ── Page content: assemble all sections in order ─────────────── --}}
@section('content')

    @include('sections.hero')

    @include('sections.about')

    @include('sections.quote')

    @include('sections.products')

    @include('sections.services')

    @include('sections.articles')

@endsection
