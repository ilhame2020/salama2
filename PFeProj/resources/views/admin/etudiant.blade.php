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
<form   id="frm" method="post"   action="{{route('admin.CreateEtudiant') }} ">
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
          <div class=" mt-3 mb-3 col-lg-12 text-warning border-bottom border-warning">Informations personnelles </div>
        
             <label ><span class="text-primary">*</span>CNE</label>
           <input type="text" class="form-control" name="cne">
         </div>
         <div class="form-group col-lg-12">
           <div class="row">
               <div class=" col-lg-6">
                   <label for="inputEmail4"><span class="text-primary">*</span>Nom</label>
                 <input type="text" class="form-control  col-lg-3" name="nom">
               </div>
               <div class=" col-lg-6">
                   <label for="inputEmail4"><span class="text-primary">*</span>Prénom</label>
                 <input type="text" class="form-control  col-lg-3" name="prenom">
               </div>
               <div class="col-lg-6">
                <label ><span class="text-primary">*</span>Email de contact  </label>
                <input type="email"  class="form-control" name="email">
              </div>
              <div class="col-lg-6">
                <label for="inputAddress"><span class="text-primary">*</span>Addresse</label>
                <input type="text" class="form-control col-lg-12" name="adresse" >
              </div>
               <div class=" col-lg-6">
                   <label for="inputEmail4"><span class="text-primary">*</span>Date de naissance</label>
                 <input type="date" value="01/01/2000" class="form-control  col-lg-3" name="date_de_naissance">
               </div>
               <div class=" mt-3 mb-3 col-lg-12 text-warning border-bottom border-warning">Informations d'inscription </div>
               <div class="col-lg-6">
                   <label ><span class="text-primary">*</span>Inscrit en </label>
                   <input type="date" value="01/09/2022" class="form-control" name="date_inscription">
                 </div>
              
                 <div class="col-lg-6">
                  <label ><span class="text-primary">*</span>Section du cours</label>
                  <select  name="section" class=" form-control js-example-basic-multiple form-select" >
                      @foreach ($sections as $sect)
                      <option value="{{$sect->id}}">{{$sect->nom_section}} - {{$sect->filiere->name}} </option>
                      @endforeach
                      </select>
                </div>
                <div class="col-lg-6">
                  <label ><span class="text-primary">*</span>Groupe Tp  </label>
                  <select  name="groupe" class=" form-control js-example-basic-multiple form-select " >
                      @foreach ($groupes as $grp)
                      <option value="{{$grp->id}}">{{$grp->nom_groupe}} - {{$grp->section->filiere->name}}</option>
                      @endforeach
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
        <button class=" btn btn-dark text-white mt-3 mb-3" data-target="#mymodal2" data-toggle="modal"   style="position: center;">Ajouter un étudiant </button>
     </div>
     
</div>
</div>
   
<h2 class="mt-3 mb-3 text-primary text-center border  border-bottom border-light" >Liste des étudiants </h2>
      <div class="table-responsive  ">
        <table class="table table-striped table-sm">
          <thead class="table-primary">
            <tr>
              <th scope="col">CNE</th>
              <th scope="col">Nom Complet</th>
              <th scope="col">Date naissance </th>
              <th scope="col">Email Académique</th>
              <th scope="col">Email Personnel</th>
              <th scope="col">Filiere </th>
              <th scope="col">Section  </th>
              <th scope="col"> Groupe </th>
              <th scope="col">Date d'inscription</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($etuds as $etud)
            <tr  class="element" class="p-2 ml-2 mt-2 mr-2 mb-2 " id="ligne">
             <th   scope="row"   >{{$etud->cne}} </th>
            <td >{{$etud->nom_etudiant}} {{$etud->prenom_etudiant}}</td>
            
            <td >{{$etud->date_naiss_etud}}</td>
            <td >{{$etud->compte_etud}}</td>
            <td >{{$etud->email_etud}}</td>
            <td>{{$etud->section->filiere->name?? null}} </td>
            <td > {{$etud->section->nom_section}}  </td>
            <td >  {{$etud->groupe->nom_groupe}}</td>
            <td >{{$etud->date_inscription_etud}}</td> 
            <td>
              <button  style="display: inline;" data-target="#mymodal" data-toggle="modal" class="btn btn-sm btn-warning col-lg-12"><i class="fa fa-edit"></i>Modifier</button>
              <form   id="frm" method="post"  style="display: inline;"  action="{{route('admin.updateEtudiant',$etud->id) }} " >
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
                        <div class=" mt-3 mb-3 col-lg-12 text-warning border-bottom border-warning">Informations d'inscription </div>
              
                          <label ><span class="text-primary">*</span>CNE</label>
                        <input type="text" class="form-control" value={{$etud->cne}} name="cne">
                      </div>
                      <div class="form-group col-lg-12">
                        <div class="row">
                            <div class=" col-lg-6">
                                <label for="inputEmail4"><span class="text-primary">*</span>Nom</label>
                              <input type="text" class="form-control  col-lg-3" value={{$etud->nom_etudiant}} name="nom">
                            </div>
                            <div class=" col-lg-6">
                                <label for="inputEmail4"><span class="text-primary">*</span>Prénom</label>
                              <input type="text" class="form-control  col-lg-3" value={{$etud->prenom_etudiant}} name="prenom">
                            </div>
                            <div class="col-lg-6">
                             <label ><span class="text-primary">*</span>Email de contact  </label>
                             <input type="email"  class="form-control" value={{$etud->email_etud}} name="email">
                           </div>
                           <div class="col-lg-6">
                             <label for="inputAddress"><span class="text-primary">*</span>Addresse</label>
                             <input type="text" class="form-control col-lg-12" value={{$etud->adresse_etud}} name="adresse" >
                           </div>
                            <div class=" col-lg-6">
                                <label for="inputEmail4"><span class="text-primary">*</span>Date de naissance</label>
                              <input type="date"  class="form-control  col-lg-3" value={{$etud->date_naiss_etud}} name="date_de_naissance">
                            </div>
                            <div class=" mt-3 mb-3 col-lg-12 text-warning border-bottom border-warning">Informations d'inscription </div>
              
                            <div class="col-lg-6">
                              
                                <label ><span class="text-primary">*</span>Inscrit en </label>
                                <input type="date" value={{$etud->date_inscription_etud}} class="form-control " name="date_inscription">
                              </div>
                            
                              <div class="col-lg-6">
                                <label ><span class="text-primary">*</span>Section du cours</label>
                                <select  name="section" class=" form-control js-example-basic-multiple form-select" >
                                @foreach ($sections as $sect)
                                <option value="{{$sect->id}}">{{$sect->nom_section}} - {{$sect->filiere->name}} </option>
                                @endforeach
                                </select>
                              </div>
                              <div class="col-lg-6">
                                <label ><span class="text-primary">*</span>Groupe Tp  </label>
                                <select  name="groupe" value={{$etud->id_groupe}} class=" form-control js-example-basic-multiple form-select" >
                                  @foreach ($groupes as $grp)
                                  <option value="{{$grp->id}}">{{$grp->nom_groupe}} - {{$grp->section->filiere->name}}</option>
                                  @endforeach
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
                
              <form action="{{route('admin.SuppEtudiant',$etud->id)}}" method="POST" style="display: inline;" >
                @method('DELETE')
                @csrf
                <button style="display: inline;" type="submit" class="btn btn-sm btn-danger col-lg-12">
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