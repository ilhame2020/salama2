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


<form  action="{{route('admin.CreateGroupe') }} " method="post">
  @csrf
  <div class="modal " id="mymodal2">
    <div class="modal-dialog p-3">
      <div class="modal-content border border-dark rounded p-3 col-md-10 col-lg-12">
        <div class="modal-header border-bottom border-dark">

          <h2 class="text-center text-dark mb-2 mt-2 ml-2 "><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mr-3 bi bi-pencil-square text-dark" viewBox="0 0 16 16">
            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
          </svg>Ajouter un groupe</h2>
          <button class="close btn-dark" type="button" data-dismiss="modal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
              <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
            </svg>
            
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                  <div class=" col-lg-12">
                    <label ><span class="text-dark">*</span>Nom du groupe</label>
                  <input type="text" class="form-control" name="nom_groupe">
                </div>
                    <label for="inputPassword4"><span class="text-dark">*</span>Section  </label>
                    <select  name="section" class=" form-control js-example-basic-multiple ">
                        @foreach ($sections as $sect)
                        <option value="{{$sect->id}}">{{$sect->nom_section}}-{{ $sect->filiere->name}}</option>
                        @endforeach
                        </select>
                  </div>
                <div class=" col-lg-6">
                    <label for="inputEmail4"><span class="text-dark">*</span>Ann??e universitaire</label>
                    <select class="rounded form-control col-lg-3 form-select" required  name="annee_universitaire">
                      <?php
                      
                      for($i = 2020;$i <= 2028;$i++)
                      {
                         echo '<option value="'.$i.'/'.($i+1).'">'.$i."/".($i+1).'</option>';
                      }
                      ?>
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
          <button class=" btn btn-dark text-white mt-3 mb-3" data-target="#mymodal2" data-toggle="modal"   style="position: center;">Ajouter un groupe </button>
        </div>
         
    </div>
  </div>
   

      <div class="border border-light rounded ">
        <h2 class="mt-3 mb-3 text-primary text-center border-primary border-bottom  h2" >Liste des groupes </h2>
       
        <div class="table-responsive  ">
          <table class="table table-striped table-sm">
            <thead class="table-primary">
              <tr>
                <th scope="col">Nom du groupe</th>
                <th scope="col">Section </th>
                <th scope="col">Filiere </th>
                <th scope="col">Ann??e universitaire </th>
                <th scope="col">Date d'ajout </th>
                <th scope="col">Actions </th>
              </tr>
            </thead>
            <tbody> 
              
            @foreach ($groupes as $grp)
              <tr class="p-2 ml-2 mt-2 mr-2 mb-2 element" id="ligne">
                
               <th scope="row"   >{{$grp->nom_groupe}} </th>
              <td >{{$grp->section->nom_section}}</td>
              <td >{{$grp->section->filiere->name}}</td>
              <td >{{$grp->annee_universitaire}}</td>
              <td >{{$grp->created_at}}</td>
              <td>
                <button style="display: inline;" data-target="#mymodal" data-toggle="modal"  class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>Modifier</button>
                <form  style="display: inline;" action="{{route('admin.updateGroupe',$grp->id)}}" method="post">
                  @csrf
                  <div class="modal " id="mymodal">
                    <div class="modal-dialog p-3">
                      <div class="modal-content border border-dark rounded p-3 col-md-10 col-lg-12">
                        <div class="modal-header border-bottom border-dark">
  
                          <h2 class="text-center text-dark mb-2 mt-2 ml-2 "><svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor" class="mr-3 bi bi-pencil-square text-dark" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>Modifier la section</h2>
                          <button class="close btn-dark" type="button" data-dismiss="modal">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                              <path fill-rule="evenodd" d="M13.854 2.146a.5.5 0 0 1 0 .708l-11 11a.5.5 0 0 1-.708-.708l11-11a.5.5 0 0 1 .708 0Z"/>
                              <path fill-rule="evenodd" d="M2.146 2.146a.5.5 0 0 0 0 .708l11 11a.5.5 0 0 0 .708-.708l-11-11a.5.5 0 0 0-.708 0Z"/>
                            </svg>
                            
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="form-group col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                  <div class=" col-lg-12">
                                    <label ><span class="text-primary">*</span>Nom du groupe</label>
                                  <input type="text" class="form-control" value={{$grp->nom_groupe}} name="nom_groupe">
                                </div>
                                    <label for="inputPassword4"><span class="text-primary">*</span>Section  </label>
                                    <select  name="section" class=" form-control js-example-basic-multiple " value={{$grp->id_section}} >
                                        @foreach ($sections as $sect)
                                        <option value="{{$sect->id}}">{{$sect->nom_section}}-{{$sect->filiere->name}}</option>
                                        @endforeach
                                        </select>
                                  </div>
                                <div class=" col-lg-6">
                                    <label for="inputEmail4"><span class="text-primary">*</span>Ann??e universitaire</label>
                                  <select class="rounded form-control col-lg-3 form-select" required  name="annee_universitaire">
                        <?php
                        
                        for($i = 2020;$i <= 2028;$i++)
                        {
                           echo '<option value="'.$i.'/'.($i+1).'">'.$i."/".($i+1).'</option>';
                        }
                        ?>
                        </select>
                                  </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer border-top border-dark">
                          <button class="btn btn-dark text-center"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise mr-2" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"/>
                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z"/>
                          </svg> Mettre ?? jour </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                  
                <form action="{{route('admin.SuppGroupe',$grp->id)}}" method="POST" style="display: inline;" >
                  @method('DELETE')
                  @csrf
                  <button style="display: inline;" type="submit" class="btn btn-sm btn-danger">
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
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
 
 
@endsection

