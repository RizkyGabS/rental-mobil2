<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VexCar - with your journey</title>
    
    <link rel="stylesheet" href="ValidasiLogin/style.css">
</head>

<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="button"></div>
                <button type="button" class="toggle-button" style="color: white;" onclick="login()">Login</button>
                <button type="button" class="toggle-button" style="color: white;" onclick="register()">Register</button>
            </div>

            <form id="login" action="post" class="input-group">
                <div>
                    <label for="validationDefaultEmail" class="form-label"></label>
                    <input type="email" name="email" id="validationDefaultEmail" class="input-field" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div>
                    <label for="validationDefault01" class="form-label"></label>
                    <input type="password" class="input-field" id="validationDefault01" aria-describedby="pw-hint" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="" id="invalidCheck2" required>
                    <label for="invalidCheck2" class="form-check-label">Remember Me</label>
                </div>
                <br>
                <button type="submit" class="submit-button">Login</button>
            </form>
            
            <form id="register" action="post" class="input-group">
                <div>
                    <label for="validationDefault01" class="form-label"></label>
                    <input type="text" class="input-field" id="validationDefault01" placeholder="Full Name" required>
                </div>
                <div>
                    <label for="validationDefaultEmail" class="form-label"></label>
                    <input type="email" name="email" id="validationDefaultEmail" class="input-field" aria-describedby="emailHelp" placeholder="Email" required>
                </div>
                <div>
                    <label for="validationDefault02" class="form-label"></label>
                    <input type="password" class="input-field" id="validationDefault02" aria-describedby="pw-hint" placeholder="Password" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" value="" id="invalidCheck2" required>
                    <label for="invalidCheck2" class="form-check-label">I agree to the term & conditions</label>
                </div>
                <br>
                <button type="submit" class="submit-button">Register</button>
            </form>

            <div class="media-sosial">
                <h4>Follow me on :</h4>
                <a href="https://www.twitter.com/pledis_17" target="_blank"><img src="ValidasiLogin/facebook.svg" alt="facebook"></a>
                <a href="https://www.facebook.com/jokowi" target="_blank"><img src="ValidasiLogin/twitter.svg" alt="twitter"></a>
                <a href="https://www.instagram.com/saythename_17" target="_blank"><img src="ValidasiLogin/instagram.svg" alt="instagram"></a>
            </div>
        </div>
    </div>

    <!-- Java Script -->
    <script>
        var x = document.getElementById("login");
        var y = document.getElementById("register");
        var z = document.getElementById("button");

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
</body>

</html>