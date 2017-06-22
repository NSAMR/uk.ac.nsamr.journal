{**
 * templates/frontend/components/registrationForm.tpl
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @brief Display the basic registration form fields
 *
 * @uses $locale string Locale key to use in the affiliate field
 * @uses $firstName string First name input entry if available
 * @uses $middleName string Middle name input entry if available
 * @uses $lastName string Last name input entry if available
 * @uses $countries array List of country options
 * @uses $country string The selected country if available
 * @uses $email string Email input entry if available
 * @uses $username string Username input entry if available
 *}
<div class="col-md-6"
	<fieldset class="identity">
		<legend>
			Set up your JSAMR profile
		</legend>
		<div class="fields">
			<div class="form-group first_name">
				<label>
					{translate key="user.firstName"} *
				</label>
				<input class="form-control" type="text" name="firstName" id="firstName" value="{$firstName|escape}" maxlength="40" required>
			</div>
			<div class="form-group middle_name">
				<label>
					{translate key="user.middleName"}
				</label>
				{translate key="user.middleName.annotation"}
				<input class="form-control" type="text" name="middleName" value="{$middleName|escape}" maxlength="40">
			</div>
			<div class="form-group last_name">
				<label>
					{translate key="user.lastName"} *
				</label>
				<input class="form-control" type="text" name="lastName" id="lastName" value="{$lastName|escape}" maxlength="40" required>
			</div>
			<div class="form-group affiliation">
				<label>
					{translate key="user.affiliation"} *
				</label>
				{translate key="user.affiliation.annotation"}
				<input class="form-control" type="text" name="affiliation[{$primaryLocale|escape}]" id="affiliation" value="{$affiliation.$primaryLocale|escape}" required>
			</div>
			<div class="form-group country">
				<label>
					{translate key="common.country"} *
				</label>
				<select class="form-control" name="country" id="country" required>
					<option></option>
					{html_options options=$countries selected=$country}
				</select>
			</div>
		</div>
	</fieldset>
</div>

<div class="col-md-6"
<fieldset class="login">
	<legend>
		Choose your login details
	</legend>
	<div class="fields">
		<div class="form-group email">
			<label>
				{translate key="user.email"} *
			</label>
			{translate key="user.email.annotation"}
			<input class="form-control" type="text" name="email" id="email" value="{$email|escape}" maxlength="90" required>
		</div>
		<div class="form-group username">
			<label>
				{translate key="user.username"} *
			</label>
			<input class="form-control" type="text" name="username" id="username" value="{$username|escape}" maxlength="32" required>
		</div>
		<div class="form-group password">
			<label>
				{translate key="user.password"} *
			</label>
			{translate key="user.password.annotation"}
			<input class="form-control" type="password" name="password" id="password" password="true" maxlength="32" required>
		</div>
		<div class="form-group password">
			<label>
				{translate key="user.repeatPassword"} *
			</label>
			<input class="form-control" type="password" name="password2" id="password2" password="true" maxlength="32" required>
		</div>
	</div>
</fieldset>
