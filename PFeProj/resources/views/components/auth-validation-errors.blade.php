@props(['errors'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="font-medium py-2 px-2 border-1 ">
            {{ __('Données incorrectes.') }}
       
        <br>
        
            @foreach ($errors->all() as $error)
              {{ $error }}
            @endforeach
        
        </div>
    </div>
@endif
