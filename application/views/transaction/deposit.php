<div class="span10" id="content">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i> <a href="index.html">Transaction</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-plus"></i> <a href="#">Deposit</a>
        </li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon plus"></i><span class=
                "break"></span>Deposit</h2>
            </div>
            <div class="box-content">
                <form class="form-horizontal">
                    <fieldset>
                    	<div class="control-group">
								<label class="control-label" for="username">User Name(User ID) </label>
								<div class="controls">
								  <select name="username" id="username" data-rel="chosen">
									<option>broken1(12345)</option>
									<option>broken2(12346)</option>
								  </select>
								</div>
							  </div>
                        <div class="control-group">
                            <label class="control-label" for=
                            "game">Game</label>
                            <div class="controls">
                                <select  id="game" name="game">
                                    <option value="9">
                                        Game 1
                                    </option>
                                    <option value="3">
                                        Game 2
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for=
                            "bank">Bank</label>
                            <div class="controls">
                                <select  id="bank" name="bank">
                                    <option value="9">
                                        Bank 1
                                    </option>
                                    <option value="3">
                                        Bank 2
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for=
                            "amount">Amount</label>
                            <div class="controls">
                                <input class="input-xlarge" id="amount"
                                name="amount" type="text">
                            </div>
                        </div>
                        <div class="control-group">
						  	<label class="control-label" for="slip">Payment Slip</label>
						  	<div class="controls">
								<input class="input-file uniform_on" id="slip" name="slip" type="file">
						  	</div>
						</div> 
                        <div class="form-actions">
                        	<button class="btn btn-primary" type="submit">Submit</button>
                            <button class="btn">Reset</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>