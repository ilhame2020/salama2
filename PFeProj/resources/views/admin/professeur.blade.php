@extends('components.admindashboard')
@section('content')
<script type="text/javascript"> 
  /*  function formulaire() 
    { 
        if (document.getElementById("form").style.visibility == "hidden")
                document.getElementById("form").style.visibility = "visible"; 
        else	document.getElementById("form").style.visibility = "hidden"; 
    } */
    </script>
@if(Session::has('success'))
    <div class="alert alert-success col-lg-12">
      <p>
      {{Session::get('success')}}
   </p>
  </div>
@endif
@if($errors->any())
<div class="alert-danger">
    <ul>
        @foreach($errors->all() as $error) 
        <li>
            {{$error}}
        </li>
        @endforeach
    </ul>
</div>
@endif
<form   id="frm" method="post"   action="{{route('admin.CreateProf') }} ">
   @csrf
   <div id="mymodal2" class="modal">
    <div class="modal-dialog p-3 col-md-12">
      <div class="modal-content border border-dark rounded p-3 col-md-10 col-lg-12">
        <div class="modal-header border-bottom border-dark">
           <h4 class="mt-1 mb-2 ml-3  text-dark h4 " ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="ml-2 mr-3 bi bi-pencil-square text-dark" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>Remplir le formulaire suivant</h4>
           <button class="close btn-dark" type="button" data-dismiss="modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
              <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
            </svg>
            
          </button>
          </div>    
       <div class="modal-body">
               
         <div class="form-group col-lg-12">
           
             <label ><span class="text-primary">*</span>CIN</label>
           <input type="text" class="form-control" name="cin">
         </div>
         <div class="form-group col-lg-12">
           <div class="row">
               <div class=" col-lg-6">
                   <label for="inputEmail4"><span class="text-primary">*</span>Nom</label>
                 <input type="text" class="form-control  col-lg-3" name="nom_prof">
               </div>
               <div class=" col-lg-6">
                   <label for="inputEmail4"><span class="text-primary">*</span>Prénom</label>
                 <input type="text" class="form-control  col-lg-3" name="prenom_prof">
               </div>
               <div class="col-lg-6">
                <label ><span class="text-primary">*</span>Email de connexion  </label>
                <input type="email"  class="form-control" name="email_connexion">
              </div>
              <div class="col-lg-6">
                <label ><span class="text-primary">*</span>Email personnel  </label>
                <input type="text"  class="form-control" name="email_personnel">
              </div>
              <div class="col-lg-6">
                <label for="inputAddress"><span class="text-primary">*</span>Téléphone</label>
                <input type="text" class="form-control col-lg-12" name="tel" >
              </div>
              <div class="col-lg-6">
                <label for="inputPassword4"><span class="text-dark">*</span>Filière  </label>
                        <select  name="filiere" class=" form-control js-example-basic-multiple form-select">
                        @foreach($filieres as $data)
                                      <option value="{{ $data->id}}">{{ $data->name }} </option>
                        @endforeach
                        </select>
                </div>    
                <div class="col-lg-6">
                   <label ><span class="text-primary">*</span>Département  </label>
                   <select  name="departement" class=" form-control js-example-basic-multiple form-select" >
                    <option value="Département Informatique">Département Informatique </option>
                    <option value="Département Electrique">Département Electrique </option>
                   <option value="Technique de communication et comercialisation">Technique de communication et comercialisation </option>
                    <option value="Technique de management">Technique de management </option>
                    </select>
                 </div>
           </div>
         </div>
      </div>
      <div class="modal-footer border-top border-dark">
        <button class="btn btn-dark text-center" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg> Ajouter  </button>
      </div>
      </div>

    </div>
   </div>
 
</form>
<div class="col-lg-12">
  <div class="row">
    <div class="col-lg-10"></div>
    <div class="col-lg-2">
        <button class=" btn btn-dark text-white mt-3 mb-3" data-target="#mymodal2" data-toggle="modal"   style="position: center;">Ajouter un professeur </button>
     </div>
     
</div>
</div>
   
<h2 class="mt-3 mb-3 text-primary text-center border  border-bottom border-light" >Liste des professeurs </h2>
      <div class="table-responsive  ">
        <table class="table table-striped table-sm">
          <thead class="table-primary">
            <tr>
              <th scope="col">CIN</th>
              <th scope="col">Nom Complet</th>
              <th scope="col">Email Connexion</th>
              <th scope="col">Email Personnel</th>
              <th scope="col">Département </th>
              <th scope="col">Téléphone</th>
              <th scope="col">Filieres</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($profs as $prof)
            <tr  class="element" class="p-2 ml-2 mt-2 mr-2 mb-2 " id="ligne">
             <th   scope="row"   >{{$prof->cin}} </th>
            <td >{{$prof->name_p}} {{$prof->prenom}}</td>
            
            <td >{{$prof->email}}</td>
            <td >{{$prof->email_personnel}}</td>
            <td>{{$prof->departement}} </td>
            <td > {{$prof->tel}}  </td> 
            <td >
            @foreach($prof->filieres as $p)
            {{ $p->name }}  
            @endforeach</td> 
            <td>
              <button  style="display: inline;" data-target="#mymodal" data-toggle="modal" class="btn btn-sm btn-warning "><i class="fa fa-edit"></i>Modifier</button>
              <form   id="frm" method="post"  style="display: inline;"  action="{{route('admin.updateProf',$prof->id) }} " >
                @csrf
                <div id="mymodal" class="modal">
                 <div class="modal-dialog p-3 col-md-12">
                   <div class="modal-content border border-dark rounded p-3 col-md-10 col-lg-12">
                     <div class="modal-header border-bottom border-dark">
                        <h4 class="mt-1 mb-3 ml-3  text-dark h4 " ><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="ml-2 mr-3 bi bi-pencil-square text-dark" viewBox="0 0 16 16">
                         <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                         <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                       </svg>Remplir le formulaire suivant</h4>
                        <button class="close btn-dark" type="button" data-dismiss="modal">
                         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                           <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                           <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                         </svg>
                         
                       </button>
                       </div>    
                    <div class="modal-body">
                      <div class="form-group col-lg-12">
                       
                        <label ><span class="text-primary">*</span>CIN</label>
                        <input type="text" class="form-control" value="{{$prof->cin}}" name="cin">
                      </div>
                      <div class="form-group col-lg-12">
                        <div class="row">
                            <div class=" col-lg-6">
                                <label for="inputEmail4"><span class="text-primary">*</span>Nom</label>
                              <input type="text"  value="{{$prof->name}}" class="form-control  col-lg-3" name="nom_prof">
                            </div>
                            <div class=" col-lg-6">
                                <label for="inputEmail4"><span class="text-primary">*</span>Prénom</label>
                              <input type="text" value="{{$prof->prenom}}" class="form-control  col-lg-3" name="prenom_prof">
                            </div>
                            <div class="col-lg-6">
                             <label ><span class="text-primary">*</span>Email de connexion  </label>
                             <input type="email" value="{{$prof->email}}" class="form-control" name="email_connexion">
                           </div>
                           <div class="col-lg-6">
                             <label ><span class="text-primary">*</span>Email personnel  </label>
                             <input type="email" value="{{$prof->email_personnel}}"  class="form-control" name="email_personnel">
                           </div>
                           <div class="col-lg-6">
                             <label for="inputAddress"><span class="text-primary">*</span>Téléphone</label>
                             <input type="text"  value="{{$prof->tel}}"class="form-control col-lg-12" name="tel" >
                           </div>
                              <div class="col-lg-6">
                                <label ><span class="text-primary">*</span>Département  </label>
                                <select  name="departement" class=" form-control js-example-basic-multiple form-select" value="{{$prof->departement}}" >
                                 <option value="Département Informatique">Département Informatique </option>
                                 <option value="Département Electrique">Département Electrique </option>
                                <option value="Technique de communication et comercialisation">Technique de communication et comercialisation </option>
                                 <option value="Technique de management">Technique de management </option>
                                   </select>
                              </div>
                        </div>
                      </div>
                   </div>
                   <div class="modal-footer border-top border-dark">
                     <button class="btn btn-dark text-center" ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                       <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                     </svg> Mettre à jour  </button>
                   </div>
                   </div>
                 </div>
                </div>
              
             </form>
                
              <form action="{{route('admin.SuppProf',$prof->id)}}" method="POST" style="display: inline;" >
                @method('DELETE')
                @csrf
                <button style="display: inline;" type="submit" class="btn btn-sm btn-danger ">
                  <i class="fa fa-trash"></i>
                  Supprimer
                </button>
            
              </form>
            </td>
            
        </tr>
        @endforeach
          </tbody>
        </table>
      </div>
@endsection