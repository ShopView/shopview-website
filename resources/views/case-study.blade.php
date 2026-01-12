@extends('layouts.app')

@section('content')
    <x-navigation />

    <main>
        <x-case-study.hero :study="$study" />

        <x-case-study.video-section :videoId="$study['videoId']" />

        <x-case-study.challenges :challenges="$study['challenges']" />

        <x-case-study.solutions :solutions="$study['solutions']" />

        <x-case-study.results :results="$study['results']" />

        <x-case-study.quote :quote="$study['quote']" />

        <x-cta-section />
    </main>

    <x-footer />
@endsection
