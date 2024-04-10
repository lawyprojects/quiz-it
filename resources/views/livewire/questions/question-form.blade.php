<div>
    <form wire:submit="{{"create"}}">
        @csrf
        <div class="card">

            <div class="card-header">
                <div class="card-title">{{ "Add New Question"}}</div>
                <p class="mg-b-20 text-muted tx-13 mb-0">Please provide question details</p>
            </div>
            <div class="card-body">
                <div class="row row-sm">
                    <!-- Alerts -->
                    @if (session('success_message'))
                        <x-alerts.success-alert message="{{ session('success_message') }}" />
                    @elseif(session('error_message'))
                        <x-alerts.error-alert message="{{ session('error_message') }}" />
                    @endif

                </div>

                <div class="row row-sm">
                    <div class="col-lg">

                
                         <!-- Question -->
                         <div class="control-group form-group">
                            <label class="form-control-label">Question: <span class="tx-danger">*</span></label>
                               <textarea class="form-control" wire:model.lazy="question" rows="3">
                               </textarea>

                               @error('question')
                               <span class="tx-danger text-xs">{{ $message }}</span>
                                @enderror
                    
                        </div>

                         <!-- ANSWER TYPE -->
                         <div class="control-group form-group">
                            <label class="form-control-label">Answer Type: <span class="tx-danger">*</span></label>
                            <select class="form-control mg-b-20" wire:model.lazy="answerTypeSelected" wire:model.change="answerTypeChanged">
                                <option></option>
                                @foreach ($answerTypes as $answerType)
                                    <option value="{{ $answerType['code'] }}">
                                        {{ $answerType['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('answerTypeSelected')
                                <span class="tx-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>
                </div>
            </div>
           
        </div>

        <div class="card">

            <div class="card-header">
                <div class="card-title">{{ "Answers"}}</div>
            </div>
            <div class="card-body">
               
                 <!-- Multi Choice -->
                @if($answerTypeSelected == config('quizapp.ANSWERS_TYPES')[0]['code'] || $answerTypeSelected == config('quizapp.ANSWERS_TYPES')[1]['code'])

                <div class="row row-sm">
                    <div class="col-lg">
                        <div class="row row-sm">
                            <div class="col-lg-12">
                                <div class="control-group form-group">
                                    <label class="form-control-label">Answer: <span class="tx-danger">*</span></label>
                                       <textarea class="form-control" wire:model.lazy="choiceAnswer" rows="3">
                                       </textarea>
                            
                                </div>
                            </div>
    
                            <div class="col-lg-12">
                                <div class="control-group form-group">
                                    <label class="form-control-label">Answer Status: <span class="tx-danger">*</span></label>
                                    <select class="form-control mg-b-20" wire:model.lazy="answerStatus">
                                        <option value="1">Correct</option>
                                        <option value="0">In Correct</option>
                                    </select>
                            
                                </div>
                               
                            </div>

                            <div class="row row-sm">
                                <div class="col-lg">
                                <button type="button" class="btn btn-secondary pd-x-30"  wire:click="addQuestionAnswer">{{"Add Answer"}}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg">
                        @unless (empty($answers))
                            @foreach($answers as $key => $answer)

                            @if($answer['answerStatus'] == 1)
                            <!-- Correct -->
                            <div class="row row-sm">
                                <div class="col-lg">
                                    <div class="alert alert-success" role="alert">
                                        <span class="alert-inner--icon"><i class="fe fe-check-square  d-inline-flex"></i></span>
                                        <span class="alert-inner--text"><strong>Correct</strong> {{$answer['answer']}}</span>
                                       
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row row-sm">
                                        <div class="col-lg-2">
                                            <label class="ckbox d-inline-flex"><input type="checkbox" wire:model="{{$answer['answerStatus'] == 1 ? 'checked' : ''}}" {{$answer['answerStatus'] == 1 ? 'checked' : ''}} wire:change="updateAnswerStatus({{$key}},{{$answer['answerStatus'] == 1 ? 0 : 1 }})"><span></span></label>
                                        </div>
                                        <div class="col-lg-2">
                                            <button type="button" class="btn btn-icon btn-danger" wire:click="deleteAnswer({{$key}})"><i class="fe fe-trash"></i></button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                               
                            @else
                               <!-- In Correct -->
                               <div class="row row-sm">
                                    <div class="col-lg">
                                        <div class="alert alert-default" role="alert">
                                            <span class="alert-inner--icon"><i class="fe fe-check-square  d-inline-flex"></i></span>
                                            <span class="alert-inner--text"><strong>In Correct</strong> {{$answer['answer']}}</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="row row-sm">
                                            <div class="col-lg-2">
                                                <label class="ckbox d-inline-flex"><input type="checkbox" wire:model="{{$answer['answerStatus'] == 1 ? 'checked' : ''}}" {{$answer['answerStatus'] == 1 ? 'checked' : ''}} wire:change="updateAnswerStatus({{$key}},{{$answer['answerStatus'] == 1 ? 0 : 1 }})"><span></span></label>
                                            </div>
                                            <div class="col-lg-2">
                                                <button type="button" class="btn btn-icon btn-danger" wire:click="deleteAnswer({{$key}})"><i class="fe fe-trash"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                   
                               </div>
                           
                            @endif

                            @endforeach
                        @endunless
                    </div>
                </div>
                   

                @elseif($answerTypeSelected == config('quizapp.ANSWERS_TYPES')[2]['code'])

                <div class="row row-sm">
                    <div class="col-lg">

                         <!-- Answer -->
                         <div class="control-group form-group">
                            <label class="form-control-label">Answer: <span class="tx-danger">*</span></label>
                               
                                <textarea class="form-control" wire:model.lazy="answerOpen" rows="3">
                                </textarea>
 
                                @error('answerOpen')
                                <span class="tx-danger text-xs">{{ $message }}</span>
                                 @enderror

                    
                        </div>
                        
                    </div>
                </div>
                @endif
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="row row-sm">
                    <div class="col-lg">
                    <button class="btn btn-secondary pd-x-30">{{"Save Question"}}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
