@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="About {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="A little bit about {{ $page->siteName }}" />
@endpush

@section('body')
    <h1>About</h1>

    <img src="/assets/img/about.png"
        alt="About Ben Wilson"
        class="flex rounded-lg w-64 mx-auto md:float-left my-6 md:my-2 md:mr-10">

    <p class="mb-6 font-semibold">Hey! Welcome to my little corner of the web.</p>

    <p class="mb-6">This is where you can give a little more information about yourself or site. If you'd like to change the structure of this page, you can find the file at <code>source/about.blade.php</code></p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam possimus earum harum itaque est!</p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam!</p>
@endsection
