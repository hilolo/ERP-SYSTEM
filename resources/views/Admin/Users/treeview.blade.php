@extends('layouts.admin')

@section('content')



<section id="tree-examples">

    <div class="row match-height">
        <!-- Default Treeview -->
          <div class="col-md-2 col-sm-2">
            
            </div>
        <div class="col-md-8 col-sm-8">
            <div class="card" style="height: 694px;">
                <div class="card-header">
                    <h4 class="card-title">Les droits d'accès </h4>
                </div>
                <div class="card-body">
                    <div class="card-body">
                        <div id="default-treeview" class="treeview">

                            <ul class="list-group">
                                @foreach ($art as $art)

                            <li class="list-group-item node-default-treeview node-selected text-center" data-nodeid="0" style="color:#FFFFFF;background-color:#428bca;"></span><span class="icon node-icon"></span>{{ $art->name }} {{ $art->email }}</li>

                            @if($art->Vente == "1")
                            <li class="list-group-item node-default-treeview badge badge-warning mb-1" data-nodeid="1" ><span class="indent"></span><span class="icon expand-icon ft-plus"></span><span class="icon node-icon"></span>Vente</li>
                            @endif 

                            @if($art->Achat == "1")

                             <li class="list-group-item node-default-treeview badge badge-success mb-1" data-nodeid="1" ><span class="indent"></span><span class="icon expand-icon ft-plus"></span><span class="icon node-icon"></span>Achat</li>
                             @endif 


                              @if($art->Comptable == "1")
                             <li class="list-group-item node-default-treeview badge badge-info mb-1" data-nodeid="1" ><span class="indent"></span><span class="icon expand-icon ft-plus"></span><span class="icon node-icon"></span>Comptable</li>
                             @endif 
                             <br> <br>
                             @endforeach



                        </ul>
                    </div>
                    </div>
                </div>
            </div>
        </div>

          <div class="col-md-2 col-sm-2">
           
            </div>
     
</section>




@endsection

