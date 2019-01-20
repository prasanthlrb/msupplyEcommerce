@extends('admin.app')
@section('extra-css')
 
 
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/extensions/bootstrap-treeview.min.css">
  <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/forms/selects/select2.min.css">
@endsection
@section('section')
<div class="content-wrapper">

    <div class="content-body">
        <!--  Tree example section start -->
        <section id="tree-examples">
         
          <div class="row">
            <!-- Searchable Tree -->
            <div class="col-md-6 col-sm-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">Create Category</h4>
                </div>
                <div class="card-body">
                  <div class="card-body">
                    <div class="form-group">
                      <div class="seachbox mb-2">
                        <input type="text" class="form-control round" placeholder="Search" id="input-search"
                        name="input-search">
                      </div>
                    </div>
                 
                    <div class="form-group">
                        <label class="label-control text-bold-600 font-medium-2" for="projectinput6">Category Type</label>
                    
                            <select class="form-control block" id="group-product">
                                <option value="1">Main Category</option>
                                <option value="2">Sub Category</option>             
                                         
                            </select>
                     
                      </div>
                      <div class="form-group">
                        <div class="text-bold-600 font-medium-2">
                          Basic Select
                        </div>
                     
                        <select class="select2 form-control">
                          <optgroup label="Alaskan/Hawaiian Time Zone">
                            <option value="AK">Alaska</option>
                            <option value="HI">Hawaii</option>
                          </optgroup>
                          <optgroup label="Pacific Time Zone">
                            <option value="CA">California</option>
                            <option value="NV">Nevada</option>
                            <option value="OR">Oregon</option>
                            <option value="WA">Washington</option>
                          </optgroup>
                          <optgroup label="Mountain Time Zone">
                            <option value="AZ">Arizona</option>
                            <option value="CO">Colorado</option>
                            <option value="ID">Idaho</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NM">New Mexico</option>
                            <option value="ND">North Dakota</option>
                            <option value="UT">Utah</option>
                            <option value="WY">Wyoming</option>
                          </optgroup>
                          <optgroup label="Central Time Zone">
                            <option value="AL">Alabama</option>
                            <option value="AR">Arkansas</option>
                            <option value="IL">Illinois</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="OK">Oklahoma</option>
                            <option value="SD">South Dakota</option>
                            <option value="TX">Texas</option>
                            <option value="TN">Tennessee</option>
                            <option value="WI">Wisconsin</option>
                          </optgroup>
                          <optgroup label="Eastern Time Zone">
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="IN">Indiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="OH">Ohio</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WV">West Virginia</option>
                            <optgroup label="Eastern Time Zone">
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                          </optgroup>
                        </select>
                      </div>
                    <div class="row mb-1">
                   
                
                      <div class="col-md-12 col-sm-12">
                        <button type="button" class="btn btn-primary mr-2 mb-1 float-right" id="btn-search">Submit</button>
                       
                      </div>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Selectable Tree -->
            <div class="col-md-6 col-sm-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title">Category / Sub Category List</h4>
                  </div>
                  <div class="card-body">
                    <div class="card-body">
                     
                      <div id="expandible-tree"></div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
       
        </section>
        <!-- // Tree example section end -->
      </div>
    </div>
  </div>

@endsection
@section('extra-js')
<script src="../../../app-assets/vendors/js/extensions/bootstrap-treeview.min.js"
type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/extensions/tree-view.js" type="text/javascript"></script>
<script src="../../../app-assets/vendors/js/forms/select/select2.full.min.js" type="text/javascript"></script>
<script src="../../../app-assets/js/scripts/forms/select/form-select2.js" type="text/javascript"></script>
<script>
  var action_type;
  $('#open_model').click(function(){
    $('#category_model').modal('show');
    action_type = 1;
    $('#saveCat').text('Save');
    $('#myModalLabel8').text('Create Category');
  })
    function saveCategory(){
      var formData = new FormData($('#category_form')[0]);
      if(action_type == 1){

        $.ajax({
                url : '/category_data',
                type: "POST",
                data: formData,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(data)
                {                
                 
                    $("#category_form")[0].reset();
                     $('#category_model').modal('hide');
                     $('.zero-configuration').load(location.href+' .zero-configuration');
                     toastr.success('Category Store Successfully', 'Successfully Save');
                },error: function (data) {
                toastr.error('Category Name Required', 'Required!');
                //toastr.error(data.responseJSON.errors.cat_name);
              }
            });
      }else{
        $.ajax({
          url : '/update_cat',
          type: "POST",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "JSON",
          success: function(data)
          {
            console.log(data);
              $("#category_form")[0].reset();
               $('#category_model').modal('hide');
               $('.zero-configuration').load(location.href+' .zero-configuration');
               toastr.success('Category Update Successfully', 'Successfully Update');
          },error: function (data) {
            toastr.error('Category Name Required', 'Required!');
        }
      });
      }
      
    }

    function editCat(id){
      
      $.ajax({
        url : '/edit_cat/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          $('#myModalLabel8').text('Update Category');
          $('#saveCat').text('Save Change');
          $('input[name=cat_name]').val(data.cat_name);
          $('input[name=id]').val(id);
          $('select[name=status]').val(data.status);
          $('#category_model').modal('show');
          action_type = 2;
        }
      });
    }
     function deleteCat(id){
      var r = confirm("Are you sure");
      if (r == true) {
      $.ajax({
        url : '/delete_cat/'+id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
          toastr.success('Category Delete Successfully', 'Successfully Delete');
          $('.zero-configuration').load(location.href+' .zero-configuration');
        }
      });
    } 
     }
    
</script>
@endsection