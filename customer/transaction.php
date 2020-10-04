<form  style="margin:100px;margin-left:300px;">
    <div class="row"  style="margin:10px;" >

        <div class="col-md-10">
            <h2>Transaction</h2> 
        </div>
    </div>

    <div class="row form-group">

        <div class="col-md-3">
            <label for="firstName">Customer Sell Currency</label>
            <select class="form-control">
                <option>USD</option>
                <option>INR</option>
                <option>EUR</option>
                <option>ZMB</option>
            </select>
        </div>
        <div class="col-md-3">
            <label for="lastName">Customer Buy Currency</label>
            <select class="form-control">
                <option>USD</option>
                <option>INR</option>
                <option>EUR</option>
                <option>ZMB</option>
            </select>
        </div>

    </div>
    <div class="row form-group">

        <div class="col-md-3">
            <label for="dob">Customer Sell Account</label>
            <input type="text" />
        </div>

        <div class="col-md-3">
            <label for="street">Customer Buy Account</label>
            <input type="text" />
        </div>

    </div>
    <div class="row form-group">

        <div class="col-md-3">
            <label for="dob">Exchange Rate</label>
            <input type="text" />
        </div>

        <div class="col-md-3">
            <label for="street">Rate Adjustment</label>
            <input type="text" />
        </div>

    </div>
    <div class="row form-group">

        <div class="col-md-3">
            <label for="dob">Account Balance(当选择为 Cash payable/Non-cash payable时，显示余额)</label>
            <input type="text" />
        </div>

        <div class="col-md-3">
            <label for="street">Reverse</label>
            <input type="checkbox" />
        </div>

    </div>
    <div class="row form-group">

        <div class="col-md-3">
            <label for="dob">Customer Sell Amount</label>
            <input type="text" />
        </div>

        <div class="col-md-3">
            <label for="street">Customer Buy Amount</label>
            <input type="text" />
        </div>

    </div>



    <div class="row form-group">

        <div class="col-md-2">

        </div>
        <div class="col-md-6">
            <input type="submit" class="btn-lg btn-success" value="Confirm"/>

        </div>

    </div>
</form>

