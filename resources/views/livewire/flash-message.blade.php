<div>
    @if(flash()->message){
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong>{{flash('message')}}</strong>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                Success
            </span>
        </div>
    }
    @endif
</div>
