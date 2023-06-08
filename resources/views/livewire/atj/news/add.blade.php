<div>
    <div class="col-sm-12 text-right"> 
         <x-adminlte-button class="btn-xs" wire:click="$emitUp('cancelAddNews')" label="×" theme="danger"/>
    </div>
    <div class="col-sm-12"> 
        <div class="card">
            <div class="card-header">
                <b>News</b> | Add News
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 text-right">
                        Title
                    </div>
                   
                    <div class="col-sm-8">
                    <x-adminlte-input wire:model="newsTitle" name="iBasic" placeholder="Insert Title..."/>
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
                        <x-adminlte-button class="btn-sm" wire:click="saveNews" label="Save" theme="success" icon="fas fa-save"/>
                    </div>
                   
                    
            </div>
            <div class="card-footer text-muted">
                <i>@ArSys-2023</i>
            </div>
         </div>
    </div>
</div>
