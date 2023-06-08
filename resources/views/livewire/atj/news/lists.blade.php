<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    
    <b>
        <h1>News Lists</h1>

    </b>
    <hr>
@foreach ($allNews as $index => $news)
    {{$index+1}}.{{$title}}. <i wire:click="$emitUp('editNews', {{$news->id}})" class="fa fa-edit fa-xs" style="cursor: pointer; color: green"></i>
    <i wire:click="$emitUp('deleteNews', {{$news->id}})" class="fa fa-trash fa-xs" style="cursor: pointer; color: red"></i>
    <br>

@endforeach
</div>
