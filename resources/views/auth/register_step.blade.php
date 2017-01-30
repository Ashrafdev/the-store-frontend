    <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
        <label for="name" class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="" required autofocus>
        </div>
    </div>

    <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
        <label for="email" class="col-md-4 control-label">E-Mail Address</label>
        <div class="col-md-6">
            <input id="email" type="email" class="form-control" name="email" value="" required>
        </div>
    </div>

    <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
        <label for="password" class="col-md-4 control-label">Birthday</label>
        <div class="col-md-6">
            <input id="dob" type="date" class="form-control" name="dob" required>
        </div>
    </div>

    <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
        <label for="password" class="col-md-4 control-label">Gender</label>
        <div class="col-md-6">
            <select name="gender" id="gender" class="form-control" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
    </div>

    <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
        <label for="country" class="col-md-4 control-label">Country</label>

        <div class="col-md-6">
            <select name="country" id="country" class="form-control" required>
                <option value="MY">Malaysia</option>
                <option value="TH">Thailand</option>
                <option value="VT">Vietnam</option>
                <option value="BRN">Brunei</option>
                <option value="ID">Indonesia</option>
            </select>
        </div>
    </div>

    <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
        <label for="password" class="col-md-4 control-label">Mobile</label>

        <div class="col-md-6">
            <input type="number" name="mobile" id="mobile" class="form-control" required>
        </div>
    </div>

    <div class="form-group" v-bind:class="{ 'has-error' : hasError}">
        <label for="password" class="col-md-4 control-label">Password</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control" name="password" required>
        </div>
    </div>

    <div class="form-group">
        <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-6">
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
    </div>