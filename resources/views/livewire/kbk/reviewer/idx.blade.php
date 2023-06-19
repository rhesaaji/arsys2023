<div>
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav ml-auto">
            <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search student name" aria-label="Search Event Name">
                <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                </button>
                </div>
            </div>
            </form>
        </ul>
    </nav>
    <div class="card">
        <div class="card-header text-center">
            <b>Research Data</b>
        </div>
    </div>
@foreach ($data as $index => $item)
<div class="row">
    <div class="card" style="left:8px;width:30%;height:30%">
        <div class="card-body">
    @if (!is_null($item->research) && !is_null($item->research->student_id))
        <div>{{$item->research->student->program->code}}.{{$item->research->student->student_number}}</div> 
        <div>{{$item->research->student->specialization->description}} {{$item->research->student->program->abbrev}}</div>
        <div> <b>{{ $item->research->student->first_name}} {{ $item->research->student->last_name}}</b></div>
    @else
        Name Not Available
    @endif
    
      </div>
    </div>
    <br>
    <div style="width:2%"></div>
    <div class="card" style="left:8px;width:66.5%">
        <div class="card-header" style="background-color:rgba(18, 167, 167, 0.825); color:#ffff">
            @if (!is_null($item->research) && !is_null($item->research->researchtype) && !is_null($item->research->milestones))
            <div><b>{{$item->research->milestones->milestone}}</b> {{ $item->research->researchtype->description}} {{$item->research->student->program->description}}</div>
            <div>Status : <i style="font-style:italic">{{$item->research->milestones->description}}</i></div>
            @endif
            <div><b><u>
                @if (!is_null($item->research) && !is_null($item->research->title))
                    {{ $item->research->title }}
                @else
                    Title Not Available
                @endif
            </u></b></div>
            
            <div style="font-style:italic">File of proposal could be access</div>
            <br>
            <br>

            <div><b>Created at</b>
                @if (!is_null($item->research) && !is_null($item->research->title))
                {{ $item->research->created_at->format('l, d F Y ') }}



            </div>
            <div><b>Updated at</b> {{ $item->research->updated_at->format('l, d F Y ') }}</div>
            @endif
            
        </div>
        <div class="card-body">
            <div class="row">
            
                <div class="col-md-6" style="border-right:solid;border-right-width:1px">
                    <div><b>Reviewer(s) of Student's Proposal</b>
                        <div>(jika belum di add ada tulisan the research reviewer should be assigned, jika sudah di add tampilkan nama dosen dan code dosen)</div>
                    </div>
                    <br>
                    <div>
                        <button style="background-color: aqua" data-toggle="modal" data-target="#assignModal">
                            <i class="fas fa-user-plus"></i>Assign
                        </button>
                    </div>
                    
                    <div class="modal fade" id="assignModal" tabindex="-1" role="dialog" aria-labelledby="assignModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="assignModalLabel">Review Assignment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>@livewire('kbk.edit.name')</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                                    </div>
                <div class="col-md-6">
                    <div><b>Supervisor of Student's Proposal</b>
                        <div>(jika belum di add ada tulisan the research reviewer should be assigned, jika sudah di add tampilkan nama dosen dan code dosen)</div>
                    </div>
                    <br>
                    <div>
                        <button style="background-color: aqua" data-toggle="modal" data-target="#assignModal-1">
                            <i class="fas fa-user-plus"></i>Assign
                        </button>
                    </div>
                    
                    <div class="modal fade" id="assignModal-1" tabindex="-1" role="dialog" aria-labelledby="assignModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="assignModalLabel">Supervisor Assignment</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>@livewire('kbk.supervisor.name')</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                                    </div>
            </div>
            <br>
            <br>
            <div><b>Decision</b></div>
            <div class="row">
                <div><button style="background-color: rgba(205, 11, 11, 0.874);color:#ffff"><b>Reject</b></button></div>
                <div style="width:1%"></div>
                <div><button style="background-color: rgb(210, 159, 5);color:#080000"><b>Revise</b></button></div>
                <div style="width:1%"></div>
                <div><button wire:click='tambah'style="background-color: rgba(7, 131, 177, 0.874);color:#ffff"><b>Presentation</b></button></div>
                <div style="width:1%"></div><div><button style="background-color: rgba(6, 156, 48, 0.874);color:#ffff"><b>Approve</b></button></div>
                
            </div>
        </div>
    </div>
</div>
@endforeach
    
</div>