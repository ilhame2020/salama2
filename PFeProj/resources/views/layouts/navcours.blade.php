<section
        class="
          d-flex
          flex-column
          gap-2
       
          banner
          text-white
          bg-secondary
          px-3
          py-4
          rounded
        "
      >   @foreach($td as $td)
        <h1 class="banner__class">{{ $td->name }}</h1>
        <div class="fs-4">
   
          <span>Professeur: </span
          ><span class="banner__teacher">{{ $td->professeur->prenom }} {{ $td->professeur->name_p  }}</span>
    
        </div> @if($td->sections)
        <div class="fs-4">                              
          <span>Section: </span><span class="banner__room">
          @foreach ($td->sections as $a)
          {{ $a->nom_section?? null }}            
          @endforeach  

          </span>
        </div>
        <div class="fs-4">
          <span>Filiere: </span><span class="banner__room">
          @php
															$b=false;
															@endphp
												
															@for ($i = 0; $i < $td->sections->count(); $i++)
																@for ($j = $i+1; $j < $td->sections->count(); $j++)
																	@if (strcmp($td->sections[$i]->filiere->name , $td->sections[$j]->filiere->name)==0)
																		@php
																		$b=true;
																		@endphp
																		{{ $td->sections[$i]->filiere->name?? null}}
																	@else		
																		@php
																		$b=false;
																		@endphp
																	@endif	
																@endfor
																
															@if (!$b)
								
															{{ $td->sections[$i]->filiere->name?? null}}	
															@endif
															@endfor
														  

          </span>
        </div>
          @else
          <div class="fs-4">
          <span>Groupe: </span><span class="banner__room">{{ $td->groupe->nom_groupe?? null }}</span>
        </div>
        <div class="fs-4">
          <span>Filiere: </span><span class="banner__room">{{ $td->groupe->section->filiere->name?? null }}</span>
        </div>
          @endif
        @endforeach
      </section>
