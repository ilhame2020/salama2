@extends('dashboard')
@section('content')
<header class=" bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
				<h2 class="font-semibold text-xl text-gray-800 leading-tight">
           		 {{ __('Accueil') }} 
           
       			 </h2>
                </div>
            </header>
<section  id="secGlobal">
				
            
             <div class="container">
                 <div class="row">
                     
                         <div class="section-title text-center">
                             <h1><b>Les Cours /Les Travaux Derigés  :</b></h1>
                             
                         </div>
                 
                 </div>
<br>
                <div class="row">
                     <div class="news-active">
					 @if($td->count()==0)
			
 							<div class="empty " >
 			
 									Désormais , vous n'avez aucun cours.
							</div>
						@endif
                     @foreach($td->cours as $data)
                        <div class="item">
 							<div class="col-md-4 col-sm-6 col-xs-12 content-border">
 								<div class="bgcolor latest-news-wrap">
 									<div class="news-img">
 										<img src="{{ URL::to('img/td.jpg')}}" class="img-responsive">
 										<div class="deat">
 											<span>{{$data->name}}</span>
 										</div>
 									</div>

									 <div class="secTd">
 										<p><b> Section :</b>@foreach ($data->sections as $t)		 
									
									 	{{$t->nom_section?? null}},
										 @endforeach</p>  <!-- automatiquement -->
										<p><b>Classe :</b>{{$data->classe}} </p>
										<p><b>Professeur :</b>{{ $data->professeur->name_p?? null }} {{$data->professeur->prenom?? null}}</p> 
										<!-- nom du professeur 
										s'attribut automatiquement -->
										<a href="{{ URL::to('/user/cours/'.$data->id) }}">Aller au cours</a>
 									</div>
 								</div>
 							</div>
							 
                        </div>
                        @endforeach
                   

                     </div>
                 </div>
            
                <div class="row">
                     <div class="col-xs-12">
                         <div class="section-title text-center">
                             <h1><b>Les Travaux Pratiques :</b></h1>
                             
                         </div>
                     </div>
                 </div>
                <div class="row">
                     <div class="news-active">
				
					 @if($tp->count()==0)
					<div class="empty " >

					
						Désormais , vous n'avez aucun cours.
		 			  </div>
					
	 				  @endif
                     @foreach($tp as $data)
				
                             <div class="item">
 							<div class="col-md-4 col-sm-6 col-xs-12 content-border" >
 								<div class="bgcolor latest-news-wrap " >
 									<div class="news-img">
 										<img src="{{ URL::to('img/tp.jpg')}}" class="img-responsive">
 										<div class="deat">
 											<span>{{$data->name}}</span>
 										</div>
 									</div>

									 <div class="secTp">
 										<p><b> Groupe :</b> {{$data->groupe->nom_groupe}}</p>  <!-- automatiquement -->
										<p><b> Classe :</b> {{$data->classe}}</p>
										<p><b> Professeur :</b>{{$data->professeur->name_p?? null}} {{$data->professeur->prenom?? null}}</p> 
										<!-- nom du professeur 
										s'attribut automatiquement -->
										<a href="{{ URL::to('/user/coursTp/'.$data->id) }}">Aller au cours</a>
 									</div>
 								</div>
 							</div>
                            </div> 
							@endforeach
                        
                 </div>
            </div>          
        </div> 
    </div>   

@endsection