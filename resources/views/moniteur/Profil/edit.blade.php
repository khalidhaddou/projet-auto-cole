@extends('moniteur.layouts.Principale')
@section('title')
Profil
@endsection
@section('css')
@endsection
@section('script')
<script type="text/javascript" >
    // L'image img#image
    var image = document.getElementById("image");

    // La fonction previewPicture
    var previewPicture  = function (e) {

        // e.files contient un objet FileList
        const [picture] = e.files

        // "picture" est un objet File
        if (picture) {
            // On change l'URL de l'image
            image.src = URL.createObjectURL(picture)
        }
    }
</script>
@endsection
@section('content')

<div class="flex items-center justify-center mt-20 md:ml-64 ">
    <div class="w-full  max-w-xxl h-96  rounded-lg shadow-md  mx-10">
                <div class="p-6 bg-white border-b border-gray-200">
                    <section class="h-100 ">
                        <div class="container  my-2 h-100">
                          <div class="row d-flex justify-content-center align-items-center h-100">
                            <div class="col col-lg-9 ">
                                <form action="{{route('save.edit.profile.moniteur',Auth::user()->id)}}" method="post" enctype="multipart/form-data" >
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <div class="card">
                                <div class="rounded-top  bg-slate-400" >
                                    <div class=" flex justify-center  " >

                                        <div>
                                         <img id="image" src="{{asset(Auth::user()->image)}}"
                                         alt="Generic placeholder image " class="  img-fluid img-thumbnail mt-4 mb-2" width="150">
                                        </div>

                                       </div>
                                       <div class=" text-center">
                                      <label for="dropzone-file" class="flex flex-col items-center justify-center   ">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                     <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                                     </svg>
                                    <input id="dropzone-file"  name="image"onchange="previewPicture(this)" type="file" class="hidden" />
                                    </label>
                                       </div>
                                </div>


                                <div class="card-body p-4  text-center">

                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Nom de utilisateur: </label>
                                        <div >
                                            <input type="text" name="user_name" id="name"  value="{{$moniteur->user_name}}" class="form-control my-2 bg-white" placeholder="" required/>

                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Nom & Prenom : </label>
                                        <div >
                                            <input type="text" name="nom_prenom" id="nom_prenom"  value="{{$moniteur->nom_prenom}}" class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">CIN : </label>
                                        <div >
                                            <input type="text" name="cin" id="name"  value="{{$moniteur->cin}}" class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Adresse: </label>
                                        <div >
                                            <input type="text" name="adresse" id="name"  value="{{$moniteur->adresse}}" class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Date de naissance : </label>
                                        <div >
                                            <input type="text" name="date_naissance" id="name"  value="{{$moniteur->date_naissance}}" class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Email : </label>
                                        <div >
                                            <input type="text" name="email" id="name"  value="{{$moniteur->email}}" class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">N° télèphone : </label>
                                        <div >
                                            <input type="text" name="N_telephone" id="name"  value="{{$moniteur->N_telephone}}" class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>

                                    <div class="form-group  my-2 ">
                                        <label class="  text-gray-400 text-bold">Mot de passe: </label>
                                        <div >
                                            <input type="text" name="password" id="name"  value=".............." class="form-control my-2 bg-white" placeholder="" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class=" card-footer d-flex justify-center">
                                    <div>  <button  class="d-flex btn  bg-dark text-white mx-2 my-2">Modifier<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mx-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                      </svg>
                                      </button></div>
                                </div>
                                </form>

                              </div>
                            </div>
                          </div>
                        </div>

                      </section>
                </div>
                @endsection
