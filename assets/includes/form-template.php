
<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* dynamic fields */

$_SESSION['f_name']   = "f_" . bin2hex(random_bytes(4));
$_SESSION['f_phone']  = "f_" . bin2hex(random_bytes(4));
$_SESSION['f_email']  = "f_" . bin2hex(random_bytes(4));
$_SESSION['f_course'] = "f_" . bin2hex(random_bytes(4));
$_SESSION['f_state']  = "f_" . bin2hex(random_bytes(4));
$_SESSION['f_form_name'] = "f_" . bin2hex(random_bytes(4));
$_SESSION['f_brochure'] = "f_" . bin2hex(random_bytes(4));
?>

<form action="mail.php" method="post" class="space-y-3">

<!-- NAME -->
<input type="text"
name="<?php echo $_SESSION['f_name']; ?>"
placeholder="Enter Your Name"
required
class="w-full text-sm px-4 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">

<!-- EMAIL -->
<input type="email"
name="<?php echo $_SESSION['f_email']; ?>"
placeholder="Enter Your Email"
required
class="w-full text-sm px-4 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">

<!-- PHONE -->
<div class="w-full">
  <input 
    type="tel" 
    id="phone"
    name="<?php echo $_SESSION['f_phone']; ?>"
    placeholder="Enter Mobile Number"
    required
    class="w-full text-sm px-4 py-2 bg-gray-100 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600"
  >
</div>

<!-- COURSE -->
<select name="<?php echo $_SESSION['f_course']; ?>" required
class="w-full text-sm px-4 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">

<option value="" hidden>Select Specialization</option>
<option value="MBA">MBA – AI for Business</option>
<option value="MBA">MBA – Digital Finance</option>
<option value="MBA">MBA – Strategy & Leadership</option>
<option value="MBA">MBA – Finance Management</option>
<option value="MBA">MBA – Marketing Management</option>
<option value="MBA">MBA – Human Resource Management</option>
<option value="MBA">MBA – Operations Management</option>
<option value="MBA">MBA – Information Technology</option>
<option value="MBA">MBA – Healthcare and Hospital Management</option>
<option value="MBA">MBA – Data Analytics</option>
<option value="MBA">MBA – Business Analytics</option>
<option value="MBA">MBA – International Business</option>
<option value="MBA">MBA – Project Management</option>
<option value="MBA">MBA – Hospitality Management</option>
<option value="MBA">MBA – International Finance</option>
<option value="MBA">MBA – Retail Management</option>
<option value="MBA">MBA – Logistics and Supply Chain Management</option>
<option value="MBA">MBA – Fintech Management</option>
<option value="MBA">MBA – Banking and Finance</option>
<option value="MBA">MBA – General Management</option>
</select>

<!-- STATE -->
<select name="<?php echo $_SESSION['f_state']; ?>" required
class="w-full text-sm px-4 py-2 rounded-md bg-gray-100 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">

<option value="" hidden>Select Your State</option>
<option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar </option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Delhi">Delhi</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat </option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jharkhand">Jharkhand </option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh </option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya </option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha </option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim </option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura </option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand </option>
<option value="West Bengal">West Bengal </option>
</select>

<!-- FORM NAME -->
<input type="hidden"
name="<?php echo $_SESSION['f_form_name']; ?>"
value="<?php echo $form_name; ?>">

<?php if(isset($brochure) && !empty($brochure)){ ?>

<input type="hidden"
name="<?php echo $_SESSION['f_brochure']; ?>"
value="<?php echo $brochure; ?>">

<?php } ?>

<!-- CONSENT -->
<!-- <div class="flex items-start gap-2 text-xs">
    <input type="checkbox" required class="mt-1">
    <p class="text-gray-600">
        I consent to receive university updates via email and mobile number.
        <span onclick="window.parent.openModal('disclaimer')" class="underline cursor-pointer text-[#0056b3]">Disclaimer</span>
    </p>
</div> -->

<!-- BUTTON -->
<button type="submit"
class="w-full bg-[#1c3569] text-white font-semibold py-2 rounded-md transition duration-300">

Submit

</button>

</form>

<style>
.iti {
  width: 100%;
}
</style>