function checkpass()
{
  if(document.signup.password.value!=document.signup.repeatpassword.value)
    {
      alert('Password and Repeat Password field does not match');
      document.signup.repeatpassword.focus();
      return false;
    }
    return true;
  }
