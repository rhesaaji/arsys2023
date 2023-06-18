@section('content')
<div class="liquid">
         <div class="col-md-14">
                         <div class="card-header">
                         <div class="card">
                             <b>Reviewer</b> | New research proposal 
                             </div>
                         <div class="col-sm-14 text-center">
                         <div class="card">
                         <div class="card-header">
                           <b>Research Database</b>  
<style>
    .research-titles {
        text-align: left;
    }
</style>
                       
   
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                @foreach ($studyPrograms as $studyProgram)
                <h6>{{ $studyProgram->code}}</h6>
                @endforeach
                    <h5 class="card-title">{{ $users[0]->first_name }} {{ $users[0]->last_name }}</h5>
                </div> 
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Research Titles:</h6>
                    <ul class="research-titles">
                        @foreach ($users[0]->arsysResearch as $research)
                            <u>{{ $research->title }}</u>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row mt-8">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <b class="card-title">Reviewer(s) of Student's Proposal</b>
                            <h6> The proposal reviewers should be assign </h6>
                            <div class="col-ms-6 text-left"> 
                            <x-adminlte-button class="btn-xs" wire:click="$emitUp('cancelAddNews')" label="assign" theme="success"/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Supervisor of Student's Research</h5>
                        </div>
                    </div>
                </div>
            <div class="col-md-8>
              <div class="card">
                <div class="card-body">
                <button class="btn btn-primary">Button 1</button>
                <button class="btn btn-secondary">Button 2</button>
                <button class="btn btn-success">Button 3</button>
                <button class="btn btn-danger">Button 4</button>
            
            </div>
</div>
</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $users[1]->first_name }} {{ $users[1]->last_name }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Research Titles:</h6>
                    <ul class="research-titles">
                        @foreach ($users[1]->arsysResearch as $research)
                            <u>{{ $research->title }}</u>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row mt-8">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $users[2]->first_name }} {{ $users[2]->last_name }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">Research Titles:</h6>
                    <ul class="research-titles">
                        @foreach ($users[2]->arsysResearch as $research)
                            <u>{{ $research->title }}</u>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row mt-8">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 1</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Card 2</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
