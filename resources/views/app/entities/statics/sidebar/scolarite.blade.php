@extends('app')


@section('css')
@stop

@section('content')
    <div class="page-content">
        @include('app.partials.sidebar')
        <div class="content-page">
            <div class="home scolarite">
                <div class="container-fluid px-0 mx-0">
                    <div class="row">
                        <h1 class="w-100 text-center"><img src="{{ asset('images/icons/diploma.png') }}" alt="">  {!! getTexts("sidebar-scolarite-title") !!}</h1>
                        <div class="col-md-10 offset-md-1 text-center">
                            <p>
                                {!! getTexts("sidebar-scolarite-texte") !!}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @include('app.partials.content-page',[$articles])
        </div>
    </div>
@stop

@section('js')
@stop