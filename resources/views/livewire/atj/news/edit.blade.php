<div>
<div class="col-sm-12 text-right"> 
         <x-adminlte-button class="btn-xs" wire:click="$emitUp('cancelEditNews')" label="X" theme="danger"/>
    </div>
    <div class="col-sm-12"> 
        <div class="card">
            <div class="card-header">
                <b>News</b> | Edit News
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 text-right">
                        Title
                    </div>
                   
                    <div class="col-sm-8">
                    <x-adminlte-input wire:model="title" name="iBasic" placeholder="Insert Title..."/>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm-4 text-right">
                        Full Text
                    </div>
                   
                    <div class="col-sm-8">
                    <x-adminlte-textarea wire:model="fullText" name="taDesc" rows=5 label-class="text-blue" igroup-size="sm" placeholder="Insert description...">
                    <x-slot name="prependSlot">
                    <div class="input-group-text bg-light">
                    <i class="fas fa-lg fa-file-alt text-blue"></i>
                </div>
                </x-slot>
                </x-adminlte-textarea>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm-12 text-right">
                        <x-adminlte-button class="btn-sm" wire:click="updateNews" label="Update" theme="warning" icon="fas fa-save"/>
                    </div>
                   
                    
            </div>
            <div class="card-footer text-muted">
                <i>@ArSys-2023</i>
            </div>
         </div>
    </div>
</div>
