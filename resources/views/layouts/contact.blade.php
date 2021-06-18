<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('layouts.includes.meta')
    
    @include('layouts.includes.link')

    @include('layouts.includes.style')
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    @include('layouts.includes.header')
    <!-- Header End -->

    <!-- Normal Breadcrumb Begin -->
    <section class="normal-breadcrumb set-bg" data-setbg="img/normal-breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="normal__breadcrumb__text">
                        <h2>Contact Us</h2>
                        <p>You can post submission below</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Normal Breadcrumb End -->

    <!-- Contact Section Begin -->
    <section class="blog spad">
        <div class="contact-container">
        <form action="action_page.php">

            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your last name..">

            <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="australia">Cambodia</option>
                    <option value="canada">Vietnam</option>
                    <option value="usa">Thailand</option>
                    <option value="australia">Laos</option>
                    <option value="canada">Malaysia</option>
                    <option value="usa">Indonesia</option>
                    <option value="australia">Singapore</option>
                    <option value="canada">Myanmar</option>
                    <option value="usa">Brunei</option>
                </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write your message here." style="height:200px"></textarea>

            <input type="submit" value="Submit">

        </form>
        </div>
    </section>
    <!-- Contact Section End -->


<!-- Footer Section Begin -->
@include('layouts.includes.footer')
  <!-- Footer Section End -->

<!-- Js Plugins -->
@include('layouts.includes.script')


</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <H1>hi</H1>
</body>
</html>