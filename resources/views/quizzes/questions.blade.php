@extends('common.layouts.layout-main')
@section('css')
    @livewireStyles
@endsection
@section('content')
 <!-- BREADCRUMB -->
 <div class="breadcrumb-header justify-content-between">
    <div>
        <h4 class="content-title mb-2">Quiz</h4>
    </div>
</div>
<!-- END BREADCRUMB -->

<!-- ROW OPENED -->
<div class="row">
    <div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
        <!--div-->
        @livewire('quizzes.quiz-questions',['quizId' => $quizId])
    </div>
    <!--/div-->
</div>
<!-- ROW CLOSED -->
@endsection

@section('scripts')
    @livewireScripts
    @include('common.scripts-table')
@endsection
