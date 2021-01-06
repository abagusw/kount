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
                            <input type="number" min="0" max="100" name="weight" id="weight" class="form-control" placeholder="Value to Reach Goal">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="type" class="col-sm-3 col-form-label"><em>Type</em></label>
                        <div class="col-sm-4">
                            <select class="form-control" name="type" id="type">
                              @foreach ( $types as $key => $value)
                                  <option value="{{ $key }}">{{ $value }}</option>
                              @endforeach  
                            </select>
                        </div>
                    </div>
                    <div class="form-row form-zero form-goal-type">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="upper_zero_limit" class="col-sm-3 col-form-label">Highest Value</label>
                                <div class="col-sm-5">
                                    <input type="number" name="upper_zero_limit" id="upper_zero_limit" class="form-control" placeholder="upper amount" value="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                        <div class="form-group row">
                            <label for="lower_zero_limit" class="col-sm-3 col-form-label">Lowest Value</label>
                                <div class="col-sm-5">
                                    <input type="number" name="lower_zero_limit" id="lower_zero_limit" class="form-control" placeholder="lower amount" value="0" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="zero_val" class="col-sm-3 col-form-label">Value Now</label>
                                <div class="col-sm-5">
                                    <input type="number" name="zero_val" id="zero_val" class="form-control" placeholder="Value 0 to finish" min="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-percent form-goal-type" style="display: none">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="percent_val" class="col-sm-3 col-form-label">Value Now</label>
                                <div class="col-sm-6">
                                    <input type="number" name="percent_val" id="percent_val" class="form-control" placeholder="Value 100 to finish" min="0" max="100"> %
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-amount-plus form-goal-type" style="display: none">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="lower_plus_limit" class="col-sm-3 col-form-label">Lowest Value</label>
                                <div class="col-sm-5">
                                    <input type="number" name="lower_plus_limit" id="lower_plus_limit" class="form-control" placeholder="lower amount" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="upper_plus_limit" class="col-sm-3 col-form-label">Highest Value</label>
                                <div class="col-sm-5">
                                    <input type="number" name="upper_plus_limit" id="upper_plus_limit" class="form-control" placeholder="upper amount" value="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="amount_plus_val" class="col-sm-3 col-form-label">Value Now</label>
                                <div class="col-sm-5">
                                    <input type="number" name="amount_plus_val" id="amount_plus_val" class="form-control" placeholder="Value upper amount to finish" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row form-amount-min form-goal-type" style="display: none">
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="lower_minus_limit" class="col-sm-3 col-form-label">Lowest Value</label>
                                <div class="col-sm-5">
                                    <input type="number" name="lower_minus_limit" id="lower_minus_limit" class="form-control" placeholder="lower amount" value="100">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="upper_minus_limit" class="col-sm-3 col-form-label">Highest Value</label>
                                <div class="col-sm-5">
                                    <input type="number" name="upper_minus_limit" id="upper_minus_limit" class="form-control" placeholder="upper amount" value="0">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group row">
                                <label for="amount_minus_val" class="col-sm-3 col-form-label">Value Now</label>
                                <div class="col-sm-5">
                                    <input type="number" name="amount_minus_val" id="amount_minus_val" class="form-control" placeholder="Value upper amount to finish" value="100">
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
