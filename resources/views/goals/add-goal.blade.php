<div class="modal fade" id="add-goal" tabindex="-1" role="dialog" aria-labelledby="edit-projectTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title">Add a New Goal</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="{{ route('goal.add') }}"  id="submitDataGoals">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="goal_name" class="col-sm-3 col-form-label"><em>Name</em></label>
                        <div class="col-sm-9">
                            <input type="text" name="goal_name" id="goal_name" class="form-control" placeholder="Name of the Goal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="weight" class="col-sm-3 col-form-label"><em>Weight Goal (%)</em></label>
                        <div class="col-sm-3">
                            <input type="number" min=0 max=100 name="weight" id="weight" class="form-control" placeholder="Value to Reach Goal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label"><em>Type</em></label>
                        <div class="col-sm-3">
                            <select class="form-control" name="type" id="type">
                              @foreach ( $types as $key => $value)
                                  <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach  
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="lower_limit" class="col-sm-6 col-form-label">Lowest Value</label>
                                <div class="col-sm-6">
                                    <input type="number" name="lower_limit" id="lower_limit" class="form-control" id="goal-lowest" placeholder="Value to be 0%">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="upper_limit" class="col-sm-6 col-form-label">Highest Value</label>
                                <div class="col-sm-6">
                                    <input type="number" name="upper_limit" id="upper_limit" class="form-control" id="goal-highest" placeholder="Value to be 100%">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div>
        <div class="modal-footer"> -->
                    <div class="row justify-content-center">
                        <button type="submit" name="submitButton" value="submit" class="btn btn-secondary">
                            Add Goal
                        </button>
                        <!-- <button type="button" class="btn btn-primary">Create Project</button> -->
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
