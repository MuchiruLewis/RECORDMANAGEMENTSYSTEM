@extends('layouts.police')
@section('content')



  <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">STAFF  INFO</strong>
                    </div>
                    <div class="card-body">
              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Contacts</th>
                    <th>Badge No</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>Police corporal</td>
                    <td>0721418199</td>
                    <td>PO/32</td>
                  </tr>
                
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Police corporal</td>
                    <td>0791479369</td>
                    <td>P0/86</td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>patrol officer</td>
                    <td>0721217982</td>
                    <td>PO/43</td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Police sergeant</td>
                    <td>0788447189</td>
                    <td>PO/16</td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Police lieutenant</td>
                    <td>0773269938</td>
                    <td>PO/37</td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Deputy police chief</td>
                    <td>0767287419</td>
                    <td>P0/13</td>
                  </tr>
                 
                    <td>Gloria Little</td>
                    <td>Chief of police</td>
                    <td>07738269893</td>
                    <td>PO/23</td>
                  </tr>
                
                 
                <tr>
                  <td>Donna Snider</td>
                  <td>police detective</td>
                  <td>07372649236</td>
                  <td>PO/11</td>
                </tr>
              </tbody>
            </table>
                  </div>
              </div>
          </div>


          </div>
      </div><!-- .animated -->
  </div><!-- .content -->


</div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/data-table/datatables.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
<script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
<script src="assets/js/lib/data-table/jszip.min.js"></script>
<script src="assets/js/lib/data-table/pdfmake.min.js"></script>
<script src="assets/js/lib/data-table/vfs_fonts.js"></script>
<script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
<script src="assets/js/lib/data-table/buttons.print.min.js"></script>
<script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
<script src="assets/js/lib/data-table/datatables-init.js"></script>


<script type="text/javascript">
  $(document).ready(function() {
    $('#bootstrap-data-table-export').DataTable();
  } );
</script>


</body>
</html>

@endsection
