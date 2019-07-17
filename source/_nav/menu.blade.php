<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Blog" href="/blog"
        class="ml-6 text-netural-1 hover:text-primary-3 {{ $page->isActive('/blog') ? 'active text-primary-3' : '' }}">
        Blog
    </a>

    <a title="{{ $page->siteName }} About" href="/about"
        class="ml-6 text-netural-1 hover:text-primary-3 {{ $page->isActive('/about') ? 'active text-primary-3' : '' }}">
        About
    </a>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-6 text-netural-1 hover:text-primary-3 {{ $page->isActive('/contact') ? 'active text-primary-3' : '' }}">
        Contact
    </a>
</nav>
