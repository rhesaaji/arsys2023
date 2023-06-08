<div>
 
    <hr>
    
    @if($modeNews != 'add')
        <div class="col-sm-12 text-right"> 
         <x-adminlte-button class="btn-sm" wire:click="addNews" label="Add News" theme="success" icon="fas fa-thumbs-up"/>
        </div>
    @else 
        @livewire('atj.news.add')
    @endif
   
    <!--Daftar Berita-->
    @if($editEnable)
        @livewire('atj.news.edit', ['newsId' => $newsId])
        
    @else
        @livewire('atj.news.lists')
    @endif
</div>
