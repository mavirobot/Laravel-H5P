@extends( config('laravel-h5p.layout') )

@section( 'h5p' )
<div class="container-fluid">
    <div class="row">

        <div class="col-md-12">

            <h3>{{ $library->title }}</h3>

            <ul>
                <li class=''>버전 : {{ $settings['libraryInfo']['info']['version'] }}</li>
                <li class=''>풀스크린 : {{ $settings['libraryInfo']['info']['fullscreen'] }}</li>
                <li class=''>컨텐츠 라이브러리 : {{ $settings['libraryInfo']['info']['content_library'] }}</li>
                <li class=''>사용컨텐츠 갯수 : {{ $settings['libraryInfo']['info']['used'] }}</li>
            </ul>


            <a href="{{ route('h5p.library.index') }}" class="btn btn-default"><i class="fa fa-reply"></i> 돌아가기</a>


        </div>

    </div>

</div>

@endsection

@push( 'h5p-header-script' )
    @foreach($required_files['styles'] as $style)
    {{ Html::style($style) }}
    @endforeach
@endpush

@push( 'h5p-footer-script' )
    <script type="text/javascript">
        H5PAdminIntegration = {!! json_encode($settings) !!};
    </script>

    {{--    core script       --}}
    @foreach($required_files['scripts'] as $script)
    {{ Html::script($script) }}
    @endforeach

@endpush
