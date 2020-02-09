@extends('layouts.main')

@section('content')
<script type="text/javascript">
    
    function checkvalidation() {
        var firstname = document.frmSignUp.firstname.value;
        var lastname = document.frmSignUp.lastname.value;
        var suburb = document.frmSignUp.suburb.value;
        var dob = document.frmSignUp.dob.value;
        var email = document.frmSignUp.email.value;
        var password = document.frmSignUp.password.value;

        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

       if(!email.match(mailformat)) {
            alert("Please check email address again.");
            return false;
        } else if (password.length<6 || password.length>20 ) {
            alert("Please enter the password longer than 6 charaters or shorter than 20 charaters");
            return false;
        }else {
            return true;
        }
    }

    function InvalidMsg(textbox) { 
        if (textbox.value == '') { 
            textbox.setCustomValidity('Entering an email-id is necessary!'); 
        } else if (textbox.validity.typeMismatch) { 
            textbox.setCustomValidity('Please enter an email address which is valid!'); 
        } else { 
            textbox.setCustomValidity(''); 
        } 
        return true; 
    } 
</script>
<form name="frmSignUp" method="post" action="signUpAct" onsubmit="return checkvalidation();">
    sign up form<br>
    <?php echo csrf_field(); ?>
    First Name : <input placeholder="First Name" name="firstname" type="name" minlength="2" maxlength="20" autofocus required><br/>
    Last Name : <input placeholder="Last Name" name="lastname" type="name" required><br/>
    Suburb : 
    <select name="suburb" required>
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
    Date of Birth : <input type="date" name="dob" max="2020-02-05" required><br>
    EMAIL : <input placeholder="E-mail" name="email" type="email" required oninvalid="InvalidMsg(this);" oninput="InvalidMsg(this);"><br/>
    PW : <input type="password" name="password" required><br/>
    <input type="submit" value="Sign Up">
</form>

@endsection