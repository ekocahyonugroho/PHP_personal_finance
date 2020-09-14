@include('dashboard_header')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"> Set Transaction Category</h1>
    <h1 data-ng-bind="caption"></h1>
</div>

<!-- Content Row -->
<div class="row">
    <div class="col-lg-8">
        <!-- Default Card Example -->
        <div class="card shadow-lg mb-4">
            <div class="card-header">
                Registered Transaction Category Table
            </div>
            <div class="card-body">
                <table id="tableTransactionCategory" class="table table-striped table-bordered" >
                    <thead>
                    <tr class="table-success">
                        <td>No</td>
                        <td>Category Name</td>
                        <td>Transaction Type</td>
                        <td>Routine</td>
                        <td>Actions</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no = 1;
                    ?>
                    @foreach($dataCategory as $data)
                        <tr>
                            <td>{!! $no !!}</td>
                            <td>{!! $data->category_name !!}</td>
                            <td>
                                <?php
                                if($data->type === 'in'){
                                    echo "CASH IN";
                                }else{
                                    echo "CASH OUT";
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($data->is_routine === '0'){
                                    echo 'NO';
                                }else{

                                }
                                ?>
                            </td>
                            <td>
                                <a href="/setCategory/deleteSetCategory/{!! $data->id !!}"><i class="fa fa-trash-alt"></i></a>
                                <a href="/setCategory/ediSetCategory/{!! $data->id !!}"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card shadow-lg mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add New Category Form</h6>
            </div>
            <div class="card-body">
                @if(\Session::has('alert-success'))
                    <div class="alert alert-success">
                        <div>{{Session::get('alert-success')}}</div>
                    </div>
                @endif
                    @if(\Session::has('alert'))
                        <div class="alert alert-danger">
                            <div>{{Session::get('alert')}}</div>
                        </div>
                    @endif
                <form role="form" action="/addSetCategory" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label>Category Name</label>
                        <input class="form-control" id="name" name="name">
                        <p class="help-block">Please type the new category name.</p>
                    </div>
                    <div class="form-group">
                        <label>Transaction Type</label>
                        <select name="type" class="form-control">
                            <option value="in">Cash In</option>
                            <option value="out">Cash Out</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Routine ?</label>
                        <div class="checkbox">
                            <label>
                                <input id="isRoutine" name="isRoutine" type="checkbox" value="1">Yes
                            </label>
                        </div>
                    </div>
                    <div id="routineFields" hidden class="form-group">
                        <label>Routine</label>
                        <select name="idRoutine" class="form-control">
                            @foreach($dataRoutine as $data)
                                <option value="{!! $data['id'] !!}">{!! $data['routine_name'] !!} - {!! $data['frequency_days'] !!} Days - {!! $data['default_value'] !!}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script language="JavaScript">
    $(document).ready(function() {
        $('#tableTransactionCategory').DataTable({
            lengthChange: false
        });
    } );

    $('#isRoutine').change(function(){
        if ($(this).is(':checked')) {
            $('#routineFields').removeAttr('hidden')
        }else{
            $('#routineFields').attr('hidden','hidden');
        }
    });
</script>
@include('dashboard_footer')
