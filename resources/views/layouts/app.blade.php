<x-layouts.base>
    @auth
        @if (in_array(request()->route()->getName(), ['static-sign-up', 'sign-up']))
            @include('layouts.navbars.guest.sign-up')
            {{ $slot }}
            @include('layouts.footers.guest.with-socials')
        @elseif (in_array(request()->route()->getName(), ['sign-in', 'login']))
            @include('layouts.navbars.guest.login')
            {{ $slot }}
            @include('layouts.footers.guest.description')
        @elseif (in_array(request()->route()->getName(), ['profile', 'my-profile']))
            @include('layouts.navbars.auth.sidebar')
            <div class="main-content position-relative bg-gray-100">
                @include('layouts.navbars.auth.nav-profile')
                <div>
                    {{ $slot }}
                    @include('layouts.footers.auth.footer')
                </div>
            </div>
            @include('components.plugins.fixed-plugin')
        @else
            @include('layouts.navbars.auth.sidebar')
            @include('layouts.navbars.auth.nav')
            @include('components.plugins.fixed-plugin')
            {{ $slot }}
            <main>
                <div class="container-fluid">
                    <div class="row">
                        @include('layouts.footers.auth.footer')
                    </div>
                </div>
            </main>
        @endif
    @endauth

    {{-- If the user is not authenticated (if the user is a guest) --}}
    @guest
        @if (!auth()->check() && in_array(request()->route()->getName(), ['login']))
            @include('layouts.navbars.guest.login')
            {{ $slot }}
            <div class="mt-5">
                @include('layouts.footers.guest.with-socials')
            </div>
        @elseif (!auth()->check() && in_array(request()->route()->getName(), ['sign-up']))
            <div>
                @include('layouts.navbars.guest.sign-up')
                {{ $slot }}
                @include('layouts.footers.guest.with-socials')
            </div>
        @elseif (in_array(request()->route()->getName(), ['home']))
            @include('layouts.navbars.guest.navbar')
            <livewire:homepage />
            @include('layouts.footers.guest.with-socials')
        @elseif (in_array(request()->route()->getName(), ['about']))
            @include('layouts.navbars.guest.navbar')
            <livewire:about />
            @include('layouts.footers.guest.with-socials')
        @elseif (in_array(request()->route()->getName(), ['download']))
            @include('layouts.navbars.guest.navbar')
            <livewire:download />
            @include('layouts.footers.guest.with-socials')
        @elseif (in_array(request()->route()->getName(), ['cara-penggunaan']))
            @include('layouts.navbars.guest.navbar')
            <livewire:cara-penggunaan />
            @include('layouts.footers.guest.with-socials')
        @endif
    @endguest
</x-layouts.base>
