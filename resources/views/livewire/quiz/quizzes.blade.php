<div>
    <div class="row">
        @unless(empty($quizzes))
            @foreach($quizzes as $quiz)
            <div class="col-lg-12 col-xl-6 col-md-12 col-sm-12 p-2">
                <div class="card wow fadeInUp reveal revealleft" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="d-flex align-items-center">
                                    <div class="settings-main-icon me-4"><i class="fe fe-home"></i></div>
                                    <div>
                                        <p class="tx-20 font-weight-semibold d-flex mb-0">{{ $quiz->name}}</p>
                                        <p class="tx-13 text-muted mb-0">{{ $quiz->description}}</p>

                                        <p class="tx-13 text-muted mb-0">
                                        @unless(empty($quiz->questions))
                                            <strong> {{count($quiz->questions)}} Questions</strong>
                                        @endunless
                                        </p>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-right justify-content-between">
                                                   <a href="{{route('quiz-page',['id' => $quiz->id])}}" target="_blank"
                        class="btn ripple btn-min w-lg mb-3 me-2 btn-secondary"><i
                            class="fe fe-play me-2"></i> Start Quiz
                    </a>
        
                
                      
                    </div>
                </div>
            </div>
            @endforeach
        @endunless
        </div>
</div>
