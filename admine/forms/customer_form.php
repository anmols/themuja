<fieldset>
    <div class="form-group col-md-6">
        <label for="f_name">Full Name *</label>
          <input type="text" name="name" value="<?php echo htmlspecialchars($edit ? $customer['name'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Full Name" class="form-control" required="required" id = "name">
    </div> 
    <div class="form-group col-md-6">
        <label>Gender *</label><br>
        <label class="radio-inline">
            <input type="radio" name="gender" value="male" <?php echo ($edit &&$customer['gender'] =='male') ? "checked": "" ; ?> required="required" id="male"/> Male
        </label>
        <label class="radio-inline">
            <input type="radio" name="gender" value="female" <?php echo ($edit && $customer['gender'] =='female')? "checked": "" ; ?> required="required" id="female"/> Female
        </label>
    </div>
    <div class="form-group col-md-6">
        <label>Date of birth</label>
        <input name="dob" value="<?php echo htmlspecialchars($edit ? $customer['dob'] : '', ENT_QUOTES, 'UTF-8'); ?>" placeholder="Birth date" class="form-control" type="date">
    </div>
    <div class="form-group col-md-6">
        <label for="occupation">Occupation *</label>
          <input type="text" name="occupation" 
                 value="<?php echo htmlspecialchars($edit ? $customer['occupation'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Occupation" 
                 class="form-control" 
                 required="required" 
                 id = "occupation">
    </div> 
    <div class="form-group col-md-6">
        <label for="referrer">Referrer *</label>
          <input type="text" name="referrer" 
                 value="<?php echo htmlspecialchars($edit ? $customer['referrer'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="referrer" 
                 class="form-control" 
                 required="required" 
                 id = "referrer">
    </div> 
    <div class="form-group col-md-6">
        <label for="email">Email *</label>
          <input type="text" name="email" 
                 value="<?php echo htmlspecialchars($edit ? $customer['email'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="email" 
                 class="form-control" 
                 required="required" 
                 id = "email">
    </div> 
    <div class="form-group col-md-6">
        <label for="email2">Email2 *</label>
          <input type="text" name="email2" 
                 value="<?php echo htmlspecialchars($edit ? $customer['email2'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="email" 
                 class="form-control" 
                 required="required" 
                 id = "email2">
    </div> 
    
    <div class="form-group col-md-6">
        <label for="mobile">Mobile *</label>
          <input type="text" name="mobile" 
                 value="<?php echo htmlspecialchars($edit ? $customer['mobile'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="mobile" 
                 class="form-control" 
                 required="required" 
                 id = "mobile">
    </div> 
    
    <div class="form-group col-md-6">
        <label for="phone">Phone *</label>
          <input type="text" name="phone" 
                 value="<?php echo htmlspecialchars($edit ? $customer['phone'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="phone" 
                 class="form-control" 
                 required="required" 
                 id = "phone">
    </div> 
    
   
   </fieldset> 

<fieldset>
    <legend>Address</legend>
      <div class="form-group col-md-6">
        <label for="address">Address</label>
          <textarea name="address[0][address]" placeholder="Address"
                    class="form-control"
                    id="address"><?php echo htmlspecialchars(($edit) ? $customer['address'][0]['address'] : '', ENT_QUOTES, 'UTF-8'); ?></textarea>
    </div>
     <div class="form-group col-md-6">
        <label for="country">Country *</label>
          <input type="text" name="address[0][country]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['address'][0]['country'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="country" 
                 class="form-control" 
                 required="required" 
                 id = "country">
    </div> 
    <div class="form-group col-md-6">
        <label>State</label>
         <input type="text" name="address[0][state]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['address'][0]['state'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="state" 
                 class="form-control" 
                 required="required" 
                 id = "state">
    </div>
     <div class="form-group col-md-6">
        <label for="city">City *</label>
          <input type="text" name="address[0][city]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['address'][0]['city'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="city" 
                 class="form-control" 
                 required="required" 
                 id = "city">
    </div> 
</fieldset>

<fieldset>
     <legend>Id 1</legend>
    <div class="form-group col-md-6">
        <label for="city">Id Type *</label>
          <input type="text" name="id[0][idType]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][0]['idType'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Id Type" 
                 class="form-control" 
                 required="required" 
                 id = "city">
    </div> 
<div class="form-group col-md-6">
        <label for="idNumber1">Id Number *</label>
          <input type="text" name="id[0][idNumber]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][0]['idNumber'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Id Number" 
                 class="form-control" 
                 required="required" 
                 id = "idNumber1">
    </div> 
<div class="form-group col-md-6">
        <label for="holderName1">Holder Name *</label>
          <input type="text" name="id[0][holderName]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][0]['holderName'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Holder Name" 
                 class="form-control" 
                 required="required" 
                 id = "holderName1">
    </div> 
<div class="form-group col-md-6">
        <label for="issuer1">Issuer *</label>
          <input type="text" name="id[0][issuer]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][0]['issuer'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Issuer" 
                 class="form-control" 
                 required="required" 
                 id = "issuer1">
    </div> 
<div class="form-group col-md-6">
        <label for="issuerDate1">Issue Date *</label>
          <input type="text" name="id[0][issueDate]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][0]['issueDate'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Issue Date" 
                 class="form-control" 
                 required="required" 
                 id = "issuerDate1">
    </div>
<div class="form-group col-md-6">
        <label for="expiryDate1">Expiry Date *</label>
          <input type="text" name="id[0][expiryDate]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][0]['expiryDate'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Expiry Date" 
                 class="form-control" 
                 required="required" 
                 id = "expiryDate1">
    </div>    
</fieldset>
<fieldset>
    <legend>Id 2</legend>
    <div class="form-group col-md-6">
        <label for="city">Id Type *</label>
          <input type="text" name="id[1][idType]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][1]['idType'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Id Type" 
                 class="form-control" 
                 required="required" 
                 id = "city">
    </div> 
<div class="form-group col-md-6">
        <label for="idNumber1">Id Number *</label>
          <input type="text" name="id[1][idNumber]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][1]['idNumber'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Id Number" 
                 class="form-control" 
                 required="required" 
                 id = "idNumber1">
    </div> 
<div class="form-group col-md-6">
        <label for="holderName1">Holder Name *</label>
          <input type="text" name="id[1][holderName]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][1]['holderName'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Holder Name" 
                 class="form-control" 
                 required="required" 
                 id = "holderName1">
    </div> 
<div class="form-group col-md-6">
        <label for="issuer1">Issuer *</label>
          <input type="text" name="id[1][issuer]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][1]['issuer'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Issuer" 
                 class="form-control" 
                 required="required" 
                 id = "issuer1">
    </div> 
<div class="form-group col-md-6">
        <label for="issuerDate1">Issue Date *</label>
          <input type="text" name="id[1][issueDate]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][1]['issueDate'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Issue Date" 
                 class="form-control" 
                 required="required" 
                 id = "issuerDate1">
    </div>
<div class="form-group col-md-6">
        <label for="expiryDate1">Expiry Date *</label>
          <input type="text" name="id[1][expiryDate]" 
                 value="<?php echo htmlspecialchars($edit ? $customer['id'][1]['expiryDate'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Expiry Date" 
                 class="form-control" 
                 required="required" 
                 id = "expiryDate1">
    </div>    
    
</fieldset>

<fieldset>
      <legend></legend>
<div class="form-group col-md-6">
        <label for="message">Message *</label>
          <input type="text" name="message" 
                 value="<?php echo htmlspecialchars($edit ? $customer['message'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="Message" 
                 class="form-control" 
                 required="required" 
                 id = "message">
    </div>  
<div class="form-group col-md-6">
        <label for="notes">Notes *</label>
          <input type="text" name="notes" 
                 value="<?php echo htmlspecialchars($edit ? $customer['notes'] : '', ENT_QUOTES, 'UTF-8'); ?>" 
                 placeholder="notes" 
                 class="form-control" 
                 required="required" 
                 id = "notes">
    </div>  
<div class="col-md-10 groupedMe">

    <label >Document Upload </label>
    <input     onchange="fileUpload(this, 'doc','pdf')"  type="file" class="form-control"  />
    <span  style="font-size: 11px;">Max size:2MB</span>                                          
    &nbsp;&nbsp;<a  href="jobs/" download>Download File</a>
     &nbsp;&nbsp;<a href="javascript:void(0)" >Remove file</a>
</div> 
       <div class="form-group col-md-12">
        <p></p>
    </div> 
    <div class="form-group col-md-6 text-center">
        <label></label>
        <input type="hidden" name="customerType" 
                 value="<?php echo htmlspecialchars($edit ? $customer['customerType'] : 'INDIVIDUAL', ENT_QUOTES, 'UTF-8'); ?>" 
                class="form-control" 
                 >
        <button type="submit" class="btn btn-warning" >Save <i class="glyphicon glyphicon-send"></i></button>
    </div>
</fieldset>