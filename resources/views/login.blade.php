@extends('layouts.app2')

@include('layouts.nav')
<div class="main">
    <div class="container">
        <div class="sign-up-content">
            <form method="POST" class="signup-form">
                <h1 class="form-title">W E L C O M E</h1>
                <div class="form-textbox">
                    <label for="username"> Username</label>
                    <input type="text" name="username" id="username" />
                </div>
                <div class="form-textbox">
                    <label for="pass">Password</label>
                    <input type="password" name="pass" id="pass" />
                </div>

                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all
                        statements in Terms of service</label>
                </div>

                <div class="form-textbox">
                    <input type="submit" name="submit" id="submit" class="submit" value="LOGIN" />
                </div>
            </form>

            <p class="loginhere">
                Not registed ?<a href="#" class="loginhere-link"> Create an account</a>
            </p>
        </div>
    </div>

</div>