@extends('layouts.main')

@section('content')
<script type="text/javascript">

    function checkFirstName() {
        var btnSubmit = document.getElementById('btnSubmit');
        var firstname = document.getElementById('firstname');
        //if(firstname.validity.patternMismatch) {
        if(firstname.reportValidity() == true) {
        //if(firstname.checkValidity()==false){
        
            firstname.setCustomValidity("First Name should consist of alphabet between 2-20 characters.");
            btnSubmit.disabled = false;
            //return true;
        } else {
            firstname.setCustomValidity("");
            btnSubmit.disabled = true;
        }
    }

    /*email.addEventListener('keyup', function (event) {
        isValidEmail = email.checkValidity();

        if ( isValidEmail ) {
            btnSubmit.disabled = false;
        } else {
            btnSubmit.disabled = true;
        }
    });

    btnSubmit.addEventListener('click', function (event) {
        frmSignUp.submit();
    });*/
    
</script>
<form id="frmSignUp" name="frmSignUp" method="post" action="signUpAct">
    Sign Up form<br>
    <?php echo csrf_field(); ?>
    First Name : <input id="firstname" name="firstname" type="name" pattern="[A-Za-z ]{2,20}" autofocus required onkeyup="checkFirstName()"><br/>
    Last Name : <input id="lastname" name="lastname" type="name" required><br/>
    Suburb : 
    <select id="suburb" name="suburb" required>
        <option value="" style="font-color:grey;">Suburb</option>
        <option value="CBD">Auckland CBD</option>
        <option value="Parnell">Parnell</option>
        <option value="Grafton">Grafton</option>
            <option value="Ponsonby">Ponsonby</option>
        <option value="Epsom">Epsom</option>
        <option value="Remuera">Remuera</option>
        <option value="Newton">Newton</option>
        <option value="Newmarket">Newmarket</option>
        <option value="Balmoral">Balmoral</option>
    </select> <br/>
    Date of Birth : <input type="date" id="dob" name="dob" max="2020-02-05" required><br>
    EMAIL : <input placeholder="E-mail" id="email" name="email" type="email" required><br/>
    PW : <input type="password" id="password" name="password" required><br/>
    <input id="btnSubmit" type="submit" value="Sign Up">
</form>

@endsection