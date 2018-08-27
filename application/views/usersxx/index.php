
<div class="container">
<p>{{ title_user }}</p>
    <div class="row">
        <button class="btn btn-primary pull-right" ng-click='openModal()'>Add New</button>
    </div>
    <table class="table">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <tr ng-repeat="user in users">
            <td>{{ user.username }}</td>
            <td>{{ user.email }}</td>
            <td><button ng-click='editUser(user)' class="btn btn-sm btn-success">Edit</button></td>
            <td><button ng-click='deleteUser(user.id, $index)' class="btn btn-sm btn-danger">Delete</button></td>
        </tr>
    </table>
</div>

<?php $this->load->view("users/form"); ?>
