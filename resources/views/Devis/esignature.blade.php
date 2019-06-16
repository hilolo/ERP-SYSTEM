@extends('layouts.none')

@section('content')

 <style type="text/css">
   #sig-canvas {
  border: 2px dotted #CCCCCC;
  border-radius: 15px;
  cursor: crosshair;
}

 </style>

<div class="row match-height">

<div class="col-xl-4 col-lg-12">
    <div class="card">
        <div class="card-content">
          <div class="text-center">
          <img class=" img-fluid" height="80" width="80" src="{{ Storage::url($entr->logo)}}"  alt="Card image cap">
        </div>
          <div class="card-body">
            <h4 class="card-title text-center">{{ $entr->name }}</h4>
            <p class="card-text">{{ $entr->rue }} {{ $art->ville }} </p>
            <p class="card-text">{{ $entr->postal }} </p>
            <p class="card-text">{{ $entr->Telephone }} </p>
            <p class="card-text">{{ $entr->email }} </p>
             <p class="card-text">{{ $entr->Site_web }} </p>
              <p class="card-text"> Numero TVA :{{ $entr-> NTVA }} </p>
          
          </div>
        </div>
      </div>

    </div>
       
<div class="col-xl-8 col-lg-12">
     
    

<section class="card">
  <div id="invoice-template" class="card-body">
    <!-- Invoice Company Details -->
    <div id="invoice-company-details" class="row">
      <div class="col-md-6 col-sm-12 text-center text-md-left">
        
      </div>
      <div class="col-md-6 col-sm-12 text-center text-md-right">
         <h2>Devis</h2>
         <p class="pb-3"># SO-0000{{ $art->id }}</p>
        <input type="text" class="hidden" name="">
      </div>
    </div>
    <!--/ Invoice Company Details -->

    <!-- Invoice Customer Details -->
     <div id="invoice-customer-details" class="row pt-2">
            
            <div class="col-md-6 col-sm-12 text-center text-md-left">
               <div class="col-md-6 col-sm-12 ">
                <h4 class="card-title"> Client : {{ $art->client->name }}</h4>
             
                  </div>
              
            </div>
            <div class="col-md-6 col-sm-12 text-center text-md-right">
              
             <div class="col-md-10 pull-right">
                            <div class="form-group">
                             <h4 class="card-title" style="    text-align: left;"> Conditions de paiement: {{ $art->condition_paiment }}</h4>
                            
                            </div>
                             
                          </div>
     


                          
                          
               
            </div>
        </div>

    <!--/ Invoice Customer Details -->

    <!-- Invoice Items Details -->
    <div id="invoices" class="pt-2">
      <div class="row">
        <div class="table-responsive col-sm-12">
          <table class="table">
            <thead>
              <tr>
               
                <th   class="text-left">Article</th> 
                          <th class="text-left">Quantité </th>
                          <th class="text-left">Prix </th>
                          <th class="text-left">TVA</th>
                <th class="text-left">Sous-total </th>
              </tr>
            </thead>
            <tbody>
                 @foreach($art->devisarticle as $ass)
            
 
              <tr>
                <th class="text-center" >{{ $ass -> article->name  }}</th>
                <td class="text-left" >

                    
                  {{ $ass ->qte }}


                </td>
                <td class="text-left">{{ $ass -> article ->prix  }} MAD</td>
                <td class="text-left">
            @if($ass->article->tva == 1)
                  Exonere de TVA VENTES
                  @endif
                  @if($ass->article->tva == 2)
                   TVA 7% VENTES
                  @endif
                  @if($ass->article->tva == 3)
                     TVA 10% VENTES
                  @endif
                  @if($ass->article->tva == 4)
                 TVA 17% VENTES
                  @endif
                  @if($ass->article->tva == 5)
                   TVA 20% VENTES 
                  @endif
                </td>
                <td class="text-left">{{ $ass ->soustotal  }} MAD</td>
              </tr>
                 @endforeach
             
              
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-7 col-sm-12 text-center text-md-left">
          
          <div class="row">
            <div class="col-md-8">
              
            </div>
          </div>
        </div>
        <div class="col-md-5 col-sm-12">
          <p class="lead">Total</p>
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td> Montant HT</td>
                  <td class="text-right"> {{ $art -> Montant  }} MAD </td>
                </tr>
                <tr>
                  <td>Taxes </td>
                  <td class="text-right pink">{{ $art -> Taxe  }} MAD</td>
                </tr>
                <tr>
                  <td class="text-bold-800">Total</td>
                  <td class="text-bold-800 text-right"> {{ $art -> Total  }} MAD</td>
                </tr>
             
              </tbody>
            </table>
          </div>
        
        </div>
      </div>
    </div>

    <!-- Invoice Footer -->
 
    <!--/ Invoice Footer -->

    
  


  </div>
</section>
</div>

      </div>



<div class="row h-100 justify-content-center align-items-center">

      <div class="col-xl-10 col-lg-12">
    <div class="card">
       
        

          <div class="container">
          
    <div class="row">
      <div class="col-md-12">
        <h1>Signature</h1>
        <p>Merci de signer Pour valider Votre Devis!</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <canvas id="sig-canvas"  width="888" height="160">
          Get a better browser, bro.
        </canvas>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button class="btn btn-default" id="sig-clearBtn">Clear Signature</button>
            <form  method="POST" action="/insertcomment/{{ $art->id }}">
               {{ csrf_field() }}

        <button class="btn btn-primary pull-right" type="Submit" id="sig-submitBtn">Validé Devis</button>
        
      </div>
    </div>
    <br/>
    <div class="row">
      <div class="col-md-12">
        <textarea id="sig-dataUrl" class="hidden" class="form-control " name="devode" rows="5">Data URL for your signature will go here!</textarea>
        <input type="text" class="hidden" name="qraar" value="{{ $art->client->name }}">
      </div>
    </div>
    <br/>
    </form>
    
  </div>



      </div>

    </div>  </div>


 <script type="text/javascript">
   
   (function() {
  window.requestAnimFrame = (function(callback) {
    return window.requestAnimationFrame ||
      window.webkitRequestAnimationFrame ||
      window.mozRequestAnimationFrame ||
      window.oRequestAnimationFrame ||
      window.msRequestAnimaitonFrame ||
      function(callback) {
        window.setTimeout(callback, 1000 / 60);
      };
  })();

  var canvas = document.getElementById("sig-canvas");
  var ctx = canvas.getContext("2d");
  ctx.strokeStyle = "#222222";
  ctx.lineWidth = 4;

  var drawing = false;
  var mousePos = {
    x: 0,
    y: 0
  };
  var lastPos = mousePos;

  canvas.addEventListener("mousedown", function(e) {
    drawing = true;
    lastPos = getMousePos(canvas, e);
  }, false);

  canvas.addEventListener("mouseup", function(e) {
    drawing = false;
  }, false);

  canvas.addEventListener("mousemove", function(e) {
    mousePos = getMousePos(canvas, e);
  }, false);

  // Add touch event support for mobile
  canvas.addEventListener("touchstart", function(e) {

  }, false);

  canvas.addEventListener("touchmove", function(e) {
    var touch = e.touches[0];
    var me = new MouseEvent("mousemove", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchstart", function(e) {
    mousePos = getTouchPos(canvas, e);
    var touch = e.touches[0];
    var me = new MouseEvent("mousedown", {
      clientX: touch.clientX,
      clientY: touch.clientY
    });
    canvas.dispatchEvent(me);
  }, false);

  canvas.addEventListener("touchend", function(e) {
    var me = new MouseEvent("mouseup", {});
    canvas.dispatchEvent(me);
  }, false);

  function getMousePos(canvasDom, mouseEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: mouseEvent.clientX - rect.left,
      y: mouseEvent.clientY - rect.top
    }
  }

  function getTouchPos(canvasDom, touchEvent) {
    var rect = canvasDom.getBoundingClientRect();
    return {
      x: touchEvent.touches[0].clientX - rect.left,
      y: touchEvent.touches[0].clientY - rect.top
    }
  }

  function renderCanvas() {
    if (drawing) {
      ctx.moveTo(lastPos.x, lastPos.y);
      ctx.lineTo(mousePos.x, mousePos.y);
      ctx.stroke();
      lastPos = mousePos;
    }
  }

  // Prevent scrolling when touching the canvas
  document.body.addEventListener("touchstart", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchend", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);
  document.body.addEventListener("touchmove", function(e) {
    if (e.target == canvas) {
      e.preventDefault();
    }
  }, false);

  (function drawLoop() {
    requestAnimFrame(drawLoop);
    renderCanvas();
  })();

  function clearCanvas() {
    canvas.width = canvas.width;
  }

  // Set up the UI
  var sigText = document.getElementById("sig-dataUrl");
  var sigImage = document.getElementById("sig-image");
  var clearBtn = document.getElementById("sig-clearBtn");
  var submitBtn = document.getElementById("sig-submitBtn");
  clearBtn.addEventListener("click", function(e) {
    clearCanvas();
    sigText.innerHTML = "Data URL for your signature will go here!";
    sigImage.setAttribute("src", "");
  }, false);
  submitBtn.addEventListener("click", function(e) {
    var dataUrl = canvas.toDataURL();
    sigText.innerHTML = dataUrl;
    sigImage.setAttribute("src", dataUrl);
  }, false);

})();


 </script>




@endsection