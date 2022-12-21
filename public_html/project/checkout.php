<?php
require(__DIR__ . "/../../partials/nav.php"); 
?>
<script>
    
    function purchase(form, u_id, total) {
        //set each form element to variables
        const payment = form.elements[4].value;
        const first_name = form.elements[5].value
        const last_name = form.elements[6].value
        const address = form.elements[7].value;
        const apt = form.elements[8].value;
        const city = form.elements[9].value;
        const state = form.elements[10].value;
        const country = form.elements[11].value;
        const zip = form.elements[12].value;
        

        //check validity and return a message of validity fails. check if form elements are selected as well
        let isValid = true;
        let payment_method = "";
        if(!(form.elements[0].checked || form.elements[1].checked || form.elements[2].checked || form.elements[3].checked))
        {
            isValid = false;
            flash("Need to select a method of payment", "danger");
        }
        else
        {
            payment_method = document.querySelector("input[type=radio][name=payment_method]:checked").value;
        }
        if(payment.length > 0 && address.length > 0 && city.length > 0 && state.length > 0 && country.length > 0 && zip.length > 0)
        {
            //check validity of rest of form elements after making sure length>0
            if(!(/^(\d*\.)?\d+$/.test(payment)))
            {
                flash("Invalid payment amount entered","warning");
                isValid = false;
            }
            if(!(/\d+[ ](?:[A-Za-z0-9.-]+[ ]?)+/.test(address)))
            {
                flash("address is invalid","warning");
                isValid = false;
            }
            if(!(/^[A-Za-z]+$/.test(city)))
            {
                flash("city is invalid","warning");
                isValid = false;
            }
            if(state == 'Empty'){
                flash("State cannot be empty","warning");
                isValid = false;
            }
            if(country == 'Empty'){
                flash("Country cannot be empty","warning");
                isValid = false;
            }
            if(!(/\d{5}([ \-]\d{4})?/.test(zip)))
            {
                flash("zip/postal code is invalid","warning");
                isValid = false;
            }
            if(isValid)
            {
                let http = new XMLHttpRequest();
                    http.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        //grab the response from add_to_orders.php and check if the successful message matches.
                        
                        let data = JSON.parse(this.responseText);
                        if(data["message"] === "The Purchase was Successful and Your Cart Has Been Cleared!")
                        {
                            //if successful, flash success message and redirect to confirmation page
                            flash(data["message"], "success");
                            $id = data["prevOrderID"]
                            $_SESSION['pOrderID'] = data["prevOrderID"]
                            setTimeout(function(){ window.location.href = "order_confirmation.php?prevOrderID=" + $id; }, 3000);
                                              }
                        else
                        {
                            //if not successful, flash warning message and redirect back to shop so user can re-add items
                            flash(data["message"], "warning");
                            setTimeout(function(){ window.location.href = "shop.php"; }, 3000);

                        }
                    }
                };
                http.open("POST", "api/add_to_orders.php", true);
                let data = {
                        user_id : u_id,
                        money_recieved : payment, 
                        total_price : payment,
                        address : address + " " + apt + " " + city + " " + state + " " + country + " " + zip,
                        payment_method : payment_method,
                        first_name : first_name,
                        last_name : last_name,
                    }
                let q = Object.keys(data).map(key => key + '=' + data[key]).join('&');
                http.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                http.send(q);
            }
        }
        else{
            if(first_name.length <= 0){
                flash("First name cannot be empty","warning");
            }
            if(last_name.length <= 0){
                flash("Last name cannot be empty","warning");
            }
            if(payment.length <= 0){
                flash("Payment cannot be empty","warning");
            }
            if(address.length <= 0){
                flash("Street Address cannot be empty","warning");
            }
            if(city.length <= 0){
                flash("City cannot be empty","warning");
            }
            if(state == 'Empty'){
                flash("State cannot be empty","warning");
            }
            if(country == 'Empty'){
                flash("Country cannot be empty","warning");
            }
            if(zip.length <= 0){
                flash("Zip code cannot be empty","warning");
            }
        }
    }
</script>
<div class="container-fluid">
<h1>Payment Information</h1>
<form method="POST">
  <p>Please select your method of payment:</p>
  <input type="radio" id="Cash" name="payment_method" value="Cash">
  <label for="Cash">Cash</label>
  <input type="radio" id="Visa" name="payment_method" value="Visa">
  <label for="Visa">Visa</label>
  <input type="radio" id="Mastercard" name="payment_method" value="MasterCard">
  <label for="MasterCard">MasterCard</label>
  <input type="radio" id="Amex" name="payment_method" value="Amex">
  <label for="Amex">Amex</label>
    <div class="mb-3">
        <label for="money_recieved">Payment</label>
        <input type="text" class="form-control form-control-sm" name="money_recieved" value="<?php se($_SESSION, "total_cost", "", true); ?>"/>
    </div>
<h1>Shipping Information</h1>
    <div class="mb-3">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" class="form-control form-control-sm" name="first_name"/> 
    </div>
    <div class="mb-3">
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" class="form-control form-control-sm" name="last_name"/> 
    </div>
    <div class="mb-3">
        <label for="address">Street Address</label>
        <input type="text" id="address" class="form-control form-control-sm" name="address"/> 
    </div>
    <div class="mb-3">
        <label for="apt_num">Apartment, suite, etc.</label>
        <input type="text" id="apt_num" class="form-control form-control-sm" name="apt_num"/> 
    </div>
    <div class="mb-3">
        <label for="city">City</label>
        <input type="text" id="city" class="form-control form-control-sm" name="city"/> 
    </div>
    <div class="mb-3">
    <label for="states">State</label>
    <br>
    <select class="form-select form-select-sm" name="states" id="states">
        <option value="Empty"></option>
    </select>
    </div>
    <div class="mb-3">
    <label for="countries">Country</label>
    <br>
    <select class="form-select form-select-sm" name="countries" id="countries">
        <option value="Empty"></option>
        <option value="United States of America">United States of America</option>
    </select>
    </div>
    <div class="mb-3">
        <label for="zip">ZIP/Postal Code</label>
        <input type="text" id="zip" class="form-control form-control-sm" name="zip"/> 
    </div>
    <!-- A script to be able to have every state in the states select dropdown -->
    <script>
        const states = [
        "Alabama",
        "Alaska",
        "Arizona",
        "Arkansas",
        "California",
        "Colorado",
        "Connecticut",
        "Delaware",
        "Florida",
        "Georgia",
        "Hawaii",
        "Idaho",
        "Illinois",
        "Indiana",
        "Iowa",
        "Kansas",
        "Kentucky",
        "Louisiana",
        "Maine",
        "Maryland",
        "Massachusetts",
        "Michigan",
        "Minnesota",
        "Mississippi",
        "Missouri",
        "Montana",
        "Nebraska",
        "Nevada",
        "New Hampshire",
        "New Jersey",
        "New Mexico",
        "New York",
        "North Carolina",
        "North Dakota",
        "Ohio",
        "Oklahoma",
        "Oregon",
        "Pennsylvania",
        "Rhode Island",
        "South Carolina",
        "South Dakota",
        "Tennessee",
        "Texas",
        "Utah",
        "Vermont",
        "Virginia",
        "Washington",
        "West Virginia",
        "Wisconsin",
        "Wyoming"
        ];

        const selectElement = document.getElementById("states");

        for (const state of states) {
        const option = document.createElement("option");
        option.value = state;
        option.text = state;
        selectElement.add(option);
        }
    </script>
    <!-- A script to be able to have every state in the states select dropdown -->
    
    <button type="button" onclick="purchase(this.form, '<?php echo get_user_id(); ?>', '<?php se($_SESSION, 'total_cost', '', true); ?>')" class="btn btn-primary">Place Order</button>
</form>
</div>
<?php
require(__DIR__ . "/../../partials/footer.php");
?>