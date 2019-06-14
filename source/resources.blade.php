@extends('_layouts.master')

@push('meta')
    <meta property="og:title" content="Resources {{ $page->siteName }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ $page->getUrl() }}"/>
    <meta property="og:description" content="The reading and resources that have influenced my work." />
@endpush

@section('body')
    <h1>Resources</h1>

    <p class="mb-6 font-semibold">The resources below have had a significant impact on how I approach my work.</p>
    <p class="mb-6 font-semibold">I find myself often revisiting them. So I distilled my own notes, that are also included here. <br> I encourage you to always check out the original sources. Your key takeaways could be very different than mine!</p>
    <p class="mb-6 font-semibold">Either way, I hope you find value in this collection of work.</p>

    <div class="flex flex-wrap md:-mx-12">
        <div class="w-full md:w-1/2 p-6">
            <h3>Marketing</h3>

            <div>
                <a href="https://smile.amazon.com/Built-Sell-Creating-Business-Without/dp/1591845823/" class="font-semibold">Built To Sell</a>
                <a href="/reviews/built_to_sell">Notes</a>
            </div>
            
            <hr>
        </div>

        <div class="w-full md:w-1/2 p-6">
            <h3>Business</h3>

            <a href="/reviews/built_to_sell">Built To Sell</a>
            <hr>
        </div>

        <div class="w-full md:w-1/2 p-6">
            <h3>Strategy</h3>

            <a href="/reviews/built_to_sell">Built To Sell</a>
            <hr>
        </div>

        <div class="w-full md:w-1/2 p-6">
            <h3>Code</h3>

            <a href="/reviews/built_to_sell">Built To Sell</a>
            <hr>
        </div>
    </div>



    <img src="/assets/img/about.png"
        alt="About Ben Wilson"
        class="flex rounded-lg w-64 mx-auto md:float-left my-6 md:my-2 md:mr-10">

    <p class="mb-6 font-semibold">Hey! Welcome to my little corner of the web.</p>

    <p class="mb-6">This is where you can give a little more information about yourself or site. If you'd like to change the structure of this page, you can find the file at <code>source/about.blade.php</code></p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam possimus earum harum itaque est!</p>

    <p class="mb-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum officia dolorem accusantium veniam quae, possimus, temporibus explicabo magni voluptas. fugit natus deserunt atque veniam!</p>

    <p class="mb-0">Cheers,</p>
    <p class="mb-6 mt-0 font-display font-semibold text-3xl">Benjamin A. Wilson</p>
@endsection
