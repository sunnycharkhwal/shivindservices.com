<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
</head>

<body>
    <form class="mt-3" id="contact_form">
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label for=" exampleInputEmail1" class="form-label">your name*</label>
            <input type="text" class="form-control" name="name" value="kamal">
        </div>
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label for=" exampleInputEmail1" class="form-label">Email address*</label>
            <input type="email" class="form-control" name="email" value="kamal@dixit.com">
        </div>
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label class="form-label">Phone number*</label>
            <input type="number" class="form-control" name="phone" value="8882955521">
        </div>
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label class=" form-label">State*</label>
            <select required class="form-select" aria-label="Default select example" name="state">
                <option value="">----- State -----</option>
                <option value="Andaman and Nicobar">Andaman and Nicobar</option>
                <option value="Andhra Pradesh">Andhra Pradesh</option>
                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                <option value="Assam">Assam</option>
                <option value="Bihar">Bihar</option>
                <option value="Chandigarh">Chandigarh</option>
                <option value="Chhattisgarh">Chhattisgarh</option>
                <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                <option value="Daman and Diu">Daman and Diu</option>
                <option value="Delhi">Delhi</option>
                <option value="Goa">Goa</option>
                <option value="Gujrat">Gujrat</option>
                <option value="Haryana" selected>Haryana</option>
                <option value="Himachal Pradesh">Himachal Pradesh</option>
                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                <option value="Jharkhand">Jharkhand</option>
                <option value="Karnataka">Karnataka</option>
                <option value="Kerala">Kerala</option>
                <option value="Lakshadweep">Lakshadweep</option>
                <option value="Madhya Pradesh">Madhya Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Manipur">Manipur</option>
                <option value="Meghalaya">Meghalaya</option>
                <option value="Mizoram">Mizoram</option>
                <option value="Nagaland">Nagaland</option>
                <option value="Orissa">Orissa</option>
                <option value="Panjab">Panjab</option>
                <option value="Rajasthan">Rajasthan</option>
                <option value="Sikkim">Sikkim</option>
                <option value="Tamil Nadu">Tamil Nadu</option>
                <option value="Telangana">Telangana</option>
                <option value="Tripura">Tripura</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Uttarakhand">Uttarakhand</option>
                <option value="West Bengal">West Bengal</option>
            </select>
        </div>
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label class="form-label">City*</label>
            <input type="text" class="form-control" name="city" value="Gurgaon">
        </div>
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label class=" form-label">Interested In</label>
            <select class="form-select" aria-label="Default select example" name="interested_in">
                <option value="">----- Select -----</option>
                <option value="EV Charger Franchise" selected>EV Charger Franchise</option>
                <option value="EV Charging Station">EV Charging Station</option>
            </select>
        </div>
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label class=" form-label">Investment Options</label>
            <select required class="form-select" aria-label="Default select example" name="investment">
                <option value="">----- Select -----</option>
                <option value="<3 lacs">&lt;3 lacs</option>
                <option value="3 lacs - 5 lacs">3 lacs - 5 lacs</option>
                <option value="5 lacs - 10 lacs">5 lacs - 10 lacs</option>
                <option value="10 lacs - 25 lacs">10 lacs - 25 lacs</option>
                <option selected value=">25 lacs">&gt;25 lacs</option>
            </select>
        </div>
        <div class="mb-3 aos-init aos-animate" data-aos="flip-up" data-aos-easing="linear" data-aos-duration="1500">
            <label class=" form-label">Message</label>
            <textarea class="form-control" rows="3" data-gramm="false" wt-ignore-input="true" name="message">Hello sir</textarea>
        </div>

        <div class="text-center aos-init aos-animate" data-aos="zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-offset="0">
            <button type="submit" class="btn let_talk_btn w-50" data-bs-toggle="modal" data-bs-target="#exampleModal">Submit</button>
        </div>
    </form>

    <script src="form.js"></script>
</body>

</html>