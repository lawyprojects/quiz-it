<div>
    <form wire:submit="{{"create"}}">
        @csrf
        <div class="card">

            <div class="card-header">
                <div class="card-title">{{ "Add New Quiz"}}</div>
                <p class="mg-b-20 text-muted tx-13 mb-0">Please provide quiz details</p>
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

                        <!-- QUIZ NAME -->
                        <div class="control-group form-group">
                            <label class="form-control-label">Quiz Name: <span class="tx-danger">*</span></label>
                            <input class="form-control" type="text" placeholder="Enter Quiz Name" value="" wire:model="quizName">
                            @error('quizName')
                                <span class="tx-danger text-xs">{{ $message }}</span>
                            @enderror


                        </div>

                         <!-- DESCRIPTION -->
                         <div class="control-group form-group">
                            <label class="form-control-label">Description:</label>
                               <textarea class="form-control" wire:model.lazy="quizDesc" rows="3">
                               </textarea>
                    
                        </div>

                         {{-- <!-- ANSWER TYPE -->
                         <div class="control-group form-group">
                            <label class="form-control-label">Answer Type: <span class="tx-danger">*</span></label>
                            <select class="form-control mg-b-20 select2" wire:model="answerTypes">
                                <option></option>
                                @foreach ($answerTypes as $answerType)
                                    <option value="{{ $answerType['code'] }}">
                                        {{ $answerType['name'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('answerTypes')
                                <span class="tx-danger text-xs">{{ $message }}</span>
                            @enderror
                        </div> --}}
                        
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-secondary pd-x-30">{{"Save Quiz"}}</button>
            </div>
        </div>
    </form>

</div>
