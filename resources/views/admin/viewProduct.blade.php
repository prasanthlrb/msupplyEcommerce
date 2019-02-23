@extends('admin.app')
@section('extra-css')
<link rel="stylesheet" type="text/css" href="../../../app-assets/css/vendors.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/tables/datatable/datatables.min.css">
  
@endsection
@section('section')
<div class="content-wrapper">

    <div class="content-body">     
   
<section id="column-selectors">
    <div class="row">
      <div class="col-12">
        
        <div class="card">
        <div class="card-header">
            
                <button id="open_model" data-backdrop="false" class="btn btn-success round btn-glow px-2" data-toggle="modal">Add New Product</button>
         
            <div class="heading-elements">
               
              <ul class="list-inline mb-0">
                
                <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                
              </ul>
            </div>
          </div>
          <div class="card-content collapse show">
            <div class="card-body card-dashboard">
             
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Product Name</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                @php ($x = 0) @endphp
                @foreach($product as $row)
                @php $x++ @endphp
                  <tr>
                    <td>{{$x}}</td>
                    
                    
                    <td>{{$row->product_name}}</td>
                    <td><img src="/product_img/{{$row->product_image}}" alt="" style="width: 80px"></td>
                    <td class="text-center"><a href="/admin/editProduct/{{$row->id}}"><i class="ft-edit"></i></a></td>
                    <td class="text-center" onclick="Delete({{$row->id}})"><i class="ft-trash-2"></i></td>
                  </tr>
                @endforeach                  
                </tbody>
                <tfoot>
                  <tr>
                        <th>S.No</th>
                        <th>Product Name</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> 
</div>
    </div>
  </div>


@endsection
@section('extra-js')


<script src="../../../app-assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

 
  <script src="../../../app-assets/js/scripts/tables/datatables/datatable-basic.js"
  type="text/javascript"></script>

<script>
$('#open_model').click(function(){
  window.location.href="/admin/create-product/";
})
   
function Delete(id){
    var r = confirm("Are you sure");
    if (r == true) {
    $.ajax({
        url : '/admin/productDelete/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success('Product Delete Successfully', 'Successfully Delete');
          $('.table').load(location.href+' .table');
        }
      });
    } 
}
    
</script>


@endsection