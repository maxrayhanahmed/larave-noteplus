<div id="loading">
    @include('preview.partials._body_loader')
</div>
@include('preview.dashboards.rightSidebar')
@include('preview.partials._body_header')

@include('preview.partials._body_sidebar')


<div class="content-page">
    {{ $slot }}
</div>
@include('preview.dashboards.modal')
@include('preview.partials._body_footer')

@include('preview.partials._scripts')
