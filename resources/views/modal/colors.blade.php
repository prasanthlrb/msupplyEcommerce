<!DOCTYPE html>
<html lang="en">
        <head>
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/app.css">
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/pages/search.css">
        <style>
        html body a.color-cat-menu{
            color: {{$category[0]->colors}};
        }
        html body a.color-cat-menu:hover{
            color: {{$category[0]->colors}};
        }
        html body .price{
            color: {{$category[0]->colors}};
        }
        .card-title{
            color: {{$category[0]->colors}};
        }
        html body a.color-cat-menu.active{
            border-bottom-color: {{$category[0]->colors}};
        }
        .form-control:focus{
            border-color: {{$category[0]->colors}} ;
        }
        .color-item:hover{
          box-shadow: 3px 6px 10px #555555 !important;
        }
        </style>
      </head>
      <body>
<div class="content-body">
        <section id="search-website" class="card overflow-hidden">
          <div class="card-header">
            <h4 class="card-title">Colors search results</h4>
            <a class="heading-elements-toggle" href="javascript:void(null)"><i class="la la-ellipsis-v font-medium-3"></i></a>
            <div class="heading-elements">
              <ul class="list-inline mb-0">
                <li onclick="closeModals()" ><a data-action="close"><i class="ft-x arcticmodal-close"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="card-content">
            <div class="card-body pb-0">
              <fieldset class="form-group position-relative mb-0">
                <input type="text" class="form-control form-control-xl input-xl" id="searchColor" onkeyup="searchResult()" placeholder="Explore Colors ...">
                <div class="form-control-position" onclick="refreshData()">
                  <i class="ft-refresh-ccw font-medium-4"></i>
                </div>
              </fieldset>
            </div>

            <div id="search-nav" class="card-body">
              <ul class="nav nav-inline">

              @foreach($category as $key => $row)

                   <li class="nav-item">
                    <a class="nav-link color-cat-menu <?php echo $key == 0 ? 'active':''?>" href="javascript:void(null)" onclick="getColorModule({{$row}})" id="cat{{$row->id}}"><i class="la la-link"></i> {{$row->title}}</a>
                  </li>
                  @endforeach

                </ul>
            </div>
            <div id="search-results" class="card-body">
                    <section id="backColor">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="card">
                                  <div class="card-content">
                                    <div class="card-body">
                                      <div class="row" id="placed_colors">

                                      @foreach($color as $data)
                                        <div class="col-md-3">
                                            <div class="card mb-1 color-item" id="color-item{{$data->id}}" onclick="getColors({{$data->id}})">
                                              <div class="card-content">
                                                <div class="bg-lighten-1 height-50" style="background-color:{{$data->color}}"></div>
                                                <div class="p-1">
                                                  <p class="mb-0">
                                                    <strong>{{$data->name}}</strong>
                                                    <p class="text-muted float-right price"><i class="icon-rupee"></i>{{$data->price}}</p>
                                                  </p>
                                                  <p class="mb-0">{{$data->code}}</p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                          @endforeach
                                    </div>
                                    <div class="row">
                                      <div class="col-md-12">
                                        <div class="table-responsive">
                                          <table class="table table-bordered">
                                          </table>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </section>
            </div>
          </div>
        </section>
      </div>
    </head>
</body>
<script>
    var refreshValue = 0;
function getColorModule(data){
$('.color-cat-menu').removeClass('active');
$("html body a.color-cat-menu").css({"color":data.colors});
$(".card-title").css({"color":data.colors});
$("html body a.color-cat-menu:hover").css({"color":data.colors});
$("html body a.color-cat-menu.active").css('border-bottom','2px solid '+data.colors);
$('#cat'+data.id).addClass('active')
this.refreshValue = data.id;
$.ajax({
    url:'/get-color/'+data.id,
    method:'GET',
    success:function(datas){
        $('#placed_colors').html(datas);

    }
})
}
function searchResult(){
     var data = $('#searchColor').val();
    if(data.length >= 3){
        $.ajax({
    url:'/get-search-color',
    method:'GET',
    data:{result:data},
    success:function(data){
        $('#placed_colors').html(data);
    }
})
    }

}

function refreshData(){
    $.ajax({
    url:'/get-color/'+this.refreshValue,
    method:'GET',
    success:function(data){
        $('#placed_colors').html(data);
    }
})
}

</script>
</html>
