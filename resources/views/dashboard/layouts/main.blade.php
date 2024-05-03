<!DOCTYPE html>
<html lang="en">

@include('dashboard.layouts.head')

<body id="page-top" style="overflow-x: hidden">

    <div id="wrapper" >
        {{-- Sidebar --}}
        @include('dashboard.layouts.sidebar')
        {{-- End Sidebar --}}

        {{-- <div class="flex-column"> --}}
            {{-- Content --}}
            @yield('content')
            {{-- End Content --}}
        {{-- </div> --}}

    </div>

     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    @include('dashboard.layouts.logoutmodal')

    @include('dashboard.layouts.script')
</body>

</html>
