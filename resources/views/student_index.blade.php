@extends('layouts.police')
@section('content')


<!DOCTYPE html>

















<div class="main">



<br/>
<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>OB NUMBER</th>
    <th>CASE NUMBER</th>
    <th>INVESTIGATOR</th>
    <th>REPORT DATE</th>
    <th>REPORT TYPE</th>
    
    <th>Options</th>
    
    
</tr>
<?php 
$id=1;
foreach ($users as $key => $value)
{
?>
@if($value->cases == "YES" || $value ->role == "YES")

<tr>
    <td><?php echo $id++;?></td>
    <td><?php echo $value->title;?></td>
    <td><?php echo $value->CaseNo;?></td>
    <td><?php echo $value->Investigator;?></td>
    <td><?php echo $value->Reportingdate;?></td>
    <td><?php echo $value->Reporttype;?></td>
    
    <td>
        <a href="<?php echo route('student.edit' , $value->id);?>">Edit</a>
        &nbsp;|&nbsp;
        <form action="<?php echo route('student.destroy' , $value->id);?>" method="post" style="display: inline-block;" >
        <?php echo csrf_field(); echo  "\n";?>
        <?php echo method_field('DELETE'); echo  "\n";?>
            <a href="javascript:;" onclick="confirm_delete(this.parentNode)">Delete</a>
        </form>
    </td>
</tr>
@endif

<?php
}
?>
</table> 

<script type="text/javascript">
function confirm_delete(form){
    c = confirm('Delete Data?');
    if (c==true) {
        form.submit();
    } else {
        // do nothing
    }
}
</script>

</body>
</html> 

@endsection