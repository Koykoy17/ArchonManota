@extends('layouts.app')

{{-- ── Page title ──────────────────────────────────────────────── --}}
@section('title', config('app.name', 'Archon'))

{{-- ── SEO meta ─────────────────────────────────────────────────── --}}
@section('meta_description', 'Archon — placeholder meta description. Phase 3 will populate this.')

{{-- ── Page content: assemble all sections in order ─────────────── --}}
@section('content')

    @include('sections.hero')

    @include('sections.about')

    @include('sections.products')

    @include('sections.services')

    @include('sections.articles')

    @include('sections.quote')

@endsection
