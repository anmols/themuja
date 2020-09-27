  <?php
include "header.php";
?><div class="container-fluid">
            <form>
                
                <div class="row"  style="margin:10px;" >
                    <div class="col-md-2"></div>
                    <div class="col-md-10">
                        <h2>Coustmer Deposit</h2> 
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <label for="firstName">Date:</label>
                        <strong>11/11/2020</strong>
                    </div>
                    <div class="col-md-3">
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-3">
                        <label for="firstName">Currency</label>
                        <select class="form-control">
                            <option>USD</option>
                            <option>INR</option>
                            <option>EUR</option>
                            <option>ZMB</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label for="lastName">Deposit Type</label>
                        <select class="form-control">
                            <option>Cash</option>
                            <option>E-Payment</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <label for="dob">Customer Account</label>
                        <select class="form-control">
                            <option>Cash Payable Account</option>
                            <option>Non - Cash Payable Account</option>
                        </select>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-6">
                        <label for="dob">Company Account</label>
                        <select class="form-control">
                            <option>RIL HDFC Bank (HDFC0001110021)</option>
                            <option>HUL ICICI Bank (ICICI4353535343)</option>
                        </select>
                    </div>
                    <div class="col-md-4"></div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="state">Customer Deposit Details</label>
                    </div>
                    <div class="col-md-4">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="state">Customer Source of Fund</label>
                    </div>
                    <div class="col-md-4">
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">
                        <label for="state">Upload customer deposit</label>
                    </div>
                    <div class="col-md-4">
                        <input type="file" class="form-control" id="deposit" />
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>

                <div class="row form-group">
                    <div class="col-md-2"></div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-6">
                        <input type="submit" class="btn-lg btn-success" value="Deposit"/>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form>
        </div>
            <?php
include "footer.php";
