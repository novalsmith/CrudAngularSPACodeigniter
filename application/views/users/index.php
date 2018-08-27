
<div class="card">
    <div class="card-header">
        <h5 class="pull-left">DAFTAR USER</h5>
        <button class="btn btn-sm btn-primary pull-right" ng-click='openModal()'>Add New</button>
        <div class="clearfix"></div>
    </div>
        <div class="card-block">
        <div class="dt-responsive table-responsive">
            <table id="alt-pg-dt" class="table table-striped table-bordered nowrap">
            <tr>
                <th>No.</th>
                <th>Username</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
            <tr ng-repeat="user in users">
                <td>{{$index +1}}</td>
                <td>{{ user.username }}</td>
                <td>{{ user.email }}</td>
                <td><button ng-click='editUser(user)' class="btn btn-sm btn-success">Edit</button>
                <button ng-click='deleteUser(user.id, $index)' class="btn btn-sm btn-danger">Delete</button></td>
            </tr>
            </table>
        </div>
    </div>
</div>

<?php $this->load->view("users/form"); ?>

