<div id="userModal" modal="userModal"  class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" ng-click='closeModal();' data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Username : </label>
                    <input type="text" class="form-control"  ng-model='username' />
                </div>
                <div class="form-group">
                    <label>Email : </label>
                    <input type="text" class="form-control" ng-model='email' />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" ng-click='closeModal();'>Close</button>
                <input type="button" ng-click='save()' name="submit" class="btn btn-primary" value="{{ operation }}" />
            </div>
        </div>

    </div>



</div>