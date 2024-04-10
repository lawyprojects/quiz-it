@extends('common.layouts.layout-main')
@section('css')
    @livewireStyles
@endsection
@section('content')
    <!-- BREADCRUMB -->
    <div class="breadcrumb-header justify-content-between">
        <div>
            <h4 class="content-title mb-2">{{ "Quizzes" }}</h4>
        </div>
       
    </div>
    <!-- END BREADCRUMB -->

    <!-- ROW OPENED -->
    <div class="row row-sm">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('create-quiz-page') }}" class="btn btn-secondary">{{ "Create Quiz" }}</a>
                </div>

            </div>
        </div>
    </div>
    <!-- ROW CLOSED -->
    <!-- ROW OPENED -->
    <div class="row row-sm">
        <div class="col-lg-12">
            @livewire('quizzes.quiz-list')
        </div>
    </div>
    <!-- ROW CLOSED -->

@endsection

@section('scripts')
    @livewireScripts
    @include('common.scripts-table')
@endsection
