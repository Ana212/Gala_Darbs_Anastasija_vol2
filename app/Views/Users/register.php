<!-- BREADCRUMBS -->
<div>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
    </nav>
</div>
<!-- ... -->

<div class="container">

    <h2>Register</h2>
   

    <?php
    if ($errors) {
        echo '<div class="row">';
        echo '  <div class="col">';
        echo '      <div class="alert alert-danger">';
        echo '          <ul>';
        foreach ($errors as $error) {
            echo '<li>' . $error . '</li>';
        }
        echo '          </ul>';
        echo '      </div>';
        echo '  </div>';
        echo '</div>';
    }
    ?>

    <form action="?page=users" method="POST">
        <div class="row">
            <div class="col-4">
                <label for="email-input">Email</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="email-input" placeholder="E-mail" name="email" required>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="first-name-input">First name</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="first-name-input" placeholder="First name" name="first-name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="last-name-input">Last name</label>
            </div>
            <div class="col-8">
                <input type="text" class="form-control" id="last-name-input" placeholder="Last name" name="last-name" required>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="password-input">Password</label>
            </div>
            <div class="col-8">
                <input type="password" class="form-control" id="password-input" placeholder="Password" name="password" required>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <label for="password2-input">Re-type password</label>
            </div>
            <div class="col-8">
                <input type="password" class="form-control" placeholder="Password" id="password2-input" name="password2">
            </div>
        </div>

        <div>
            <select name="" id="country">
                <option> Latvia </option>
                <option> Japan </option>
                <option> Australia</option>
                <option> Germany</option>
                <option> Canada </option>
            </select>
        </div>
        <br>
        <div>
            <input type="checkbox" name="boxname" value="1">

            <label for="Is Completed">Agree with terms and conditions*</label>
        </div>


        <div class="row">
            <div class="col">
                <input type="submit" value="Register" class="btn-primary">
            </div>
        </div>
    </form>

    <br>
    <br>
</div>