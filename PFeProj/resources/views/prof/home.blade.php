@extends('dashboard')
@section('content')

			<header class="bg-white shadow ">
			<div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 all-td">
				<h2 style="display:inline;"class=" mx-5 font-semibold  text-xl text-gray-800 leading-tight">           		 {{ __('Accueil') }} 
           
       			 </h2>
				
            </header>
					<section  id="secGlobal">

					<div class="modl-bg">
					
						<form action="/professeur/Travd/{{$id}}" method="Post" id="my-form">
								@csrf
							<div class="modl">
							<h1>Créer un Cours/Travail Derigé </h1>
							
								<div class="it-modl mxx-10">	<x-label class="font-lab" :value="__('Nom du cours :')" />
								<x-input  name="name" type="text"/>
								</div>
								<div class="it-modl mxx-10">
								<x-label  class="font-lab" :value="__('Section :')" />
				
						
									@foreach($profFil as $val)
										@foreach($val->filieres as $v)
											@foreach($v->sections as $n)
											<div>
											<input type="checkbox" name="sections[]" value="{{$n->id}}" required> <label>
												{{ $v->name }}|{{ $n->nom_section }}</label>
												</div>
											@endforeach	
										@endforeach
									@endforeach
								
								</div>
								
								<div class="it-modl mxx-10">
								<x-label class="font-lab" :value="__('Classe :')" />
								<x-input name="classe" type="text"/>
								</div>
							
								
							
								<span class="modl-close">X</span>
								 <x-button class="but_cours" >
                    					{{ __('Ajouter') }}
                						</x-button> 
								<!-- <input class=" buttonTD mt-6" type="submit" value="Ajouter" > -->
							</div>
						</form>	
					</div>
					

				
 				<div class="container">
 					<div class="row">
 						
 							<div id=Trav-D class="section-title text-center">
 								<h1><b> Cours / Travaux Derigés  :</b></h1>
 								
 							</div>
 					
 					</div>
<br>
                    <div class="row">
 						<div class="news-active">
							 @foreach($td as $data)
                             <div class="item">
 							<div class="col-md-4 col-sm-6 col-xs-12 content-border">
 								<div class="bgcolor latest-news-wrap">
 									<div class="news-img">
 										<img src="img/td.jpg" class="img-responsive">
 										<div class="deat">
 											<span>{{$data->name}}</span>
 										</div>
 									</div>
									
									 <div class="secTd">	

 										<p><b> Section :</b>@foreach ($data->sections as $d) 
										 			{{ $d->nom_section?? null}}, <!-- automatiquement -->
																						 
														 @endforeach</p> 
										<p><b>La filiere:</b>
															@php
															$b=false;
															@endphp
												
															@for ($i = 0; $i < $data->sections->count(); $i++)
																@for ($j = $i+1; $j < $data->sections->count(); $j++)
																	@if (strcmp($data->sections[$i]->filiere->name , $data->sections[$j]->filiere->name)==0)
																		@php
																		$b=true;
																		@endphp
																		{{ $data->sections[$i]->filiere->name?? null}}
																	@else		
																		@php
																		$b=false;
																		@endphp
																	@endif	
																@endfor
																
															@if (!$b)
								
															{{ $data->sections[$i]->filiere->name?? null}}	
															@endif
															@endfor
														
										  				</p>
										<p><b>Classe :</b>{{$data->classe}} </p>
										<p><b>Professeur :</b>{{$data->professeur->name_p}}</p> 
										<!-- nom du professeur 
										s'attribut automatiquement -->
										<a href="{{ URL::to('/professeur/cours/'.$data->id) }}">Aller au cours</a>
 									</div>
 								</div>
 							</div>
							 
                            </div>@endforeach
							 
						
							 <div class="item add-new modl-btn">
 								<div class="bgcolor latest-news-wrap">
								 <img src="{{ URL::to('add.png')}}">
 								</div>
 							</div>
 						</div>
 					</div>
                
                	<div class="row">
 						<div class="col-xs-12">
 							<div id=Trav-p class="section-title text-center">
 								<h1><b>Les Travaux Pratiques :</b></h1>
 								
 							</div>
 						</div>
 					</div>
                	<div class="row">
 						<div class="news-active">
						 @foreach($tp as $tp)
                             <div class="item">
 							<div class="col-md-4 col-sm-6 col-xs-12 content-border" >
 								<div class="bgcolor latest-news-wrap " >
 									<div class="news-img">
 										<img src="img/tp.jpg" class="img-responsive">
 										<div class="deat">
 											<span>{{$tp->name}}</span>
 										</div>
 									</div>

									 <div class="secTp">
										<p><b> Groupe :</b> {{$tp->groupe->nom_groupe}}</p>  <!-- automatiquement -->
										<p><b>La filiere:</b> {{$tp->groupe->filiere->name?? null}} </p>
										<p><b>Classe :</b> {{$tp->classe}}</p>
										<p><b>Professeur :</b>{{$tp->professeur->name_p}}</p> 
										<!-- nom du professeur 
										s'attribut automatiquement -->
										<a href="{{ URL::to('/professeur/coursTp/'.$tp->id) }}">Aller au cours</a>
 									</div>
 								</div>
 							</div>
                            </div> 
							@endforeach
                            
							<div class="item add-new modl-btnTP">
 								<div class="bgcolor latest-news-wrap">
								 <img src="{{ URL::to('add.png')}}">
 								</div>
 							</div>
							
							 <div class="modl-bgTP">
								<form action="/professeur/Travp/{{$id}}" method="post" id ="my-formTp">
								@csrf
								<div class="modl">
									<h1>Créer un Travail Pratique : </h1>
									<div class="it-modl">
										<x-label :value="__('Nom de Td :')" />
										<x-input  name="name" type="text"/>
									</div>
									<div class="it-modl">
									<x-label  :value="__('Groupe :')" />
					
									<select name="groupe" id="">
										@foreach($profFil as $val)
											@foreach($val->filieres as $v)
												@foreach($v->groupes as $n)
													<option value="{{ $n->id }}">{{ $v->name }}|{{ $n->nom_groupe }}</option>
												@endforeach	
											@endforeach
										@endforeach
									</select>
									</div>
								
									<div class="it-modl">
										<x-label  :value="__('Classe :')" />
										<x-input name="classe" type="text"/>
									</div>
							
								
									<span class="modl-closeTP">X</span>
									<x-button    class=" buttonTP mt-6" type="submit" value="SubmitTp">
											{{ __('Ajouter') }}
											</x-button>
								</div>
							
							</form>	
							</div>
							
 						</div>
 					</div>
                </div>          
            </div> 
        </div>   
@endsection