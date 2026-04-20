<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    die("Invalid Request");
}

/* 
  form_prefix se pata chalega kaun sa form submit hua:
  'm' = main/sidebar form, 'p' = popup form
*/
$prefix = $_POST['form_prefix'] ?? 'm';

/* Get fields using prefixed session keys */
$full_name = $_POST[$_SESSION[$prefix . '_f_name']      ?? '__'] ?? '';
$phone     = $_POST[$_SESSION[$prefix . '_f_phone']     ?? '__'] ?? '';
$email     = $_POST[$_SESSION[$prefix . '_f_email']     ?? '__'] ?? '';
$course    = $_POST[$_SESSION[$prefix . '_f_course']    ?? '__'] ?? '';
$state     = $_POST[$_SESSION[$prefix . '_f_state']     ?? '__'] ?? '';
$form_name = $_POST[$_SESSION[$prefix . '_f_form_name'] ?? '__'] ?? '';
$brochure  = $_POST[$_SESSION[$prefix . '_f_brochure']  ?? '__'] ?? '';

/* UTM from session */
$utm_source   = $_SESSION['utm_source']   ?? '';
$utm_medium   = $_SESSION['utm_medium']   ?? '';
$utm_campaign = $_SESSION['utm_campaign'] ?? '';
$utm_term     = $_SESSION['utm_term']     ?? '';
$utm_content  = $_SESSION['utm_content']  ?? '';
$page_url     = $_SESSION['page_url']     ?? '';

/* Source from backend */
$source = "1-Year MBA LP";

/* Validate */
if (empty($full_name) || empty($phone) || empty($email)) {
    die("Invalid Submission");
}

/* Organic fallback */
if (empty($utm_source)) $utm_source = "Organic";
if (empty($utm_medium)) $utm_medium = "MBA_Organic";

/* Prepare data */
$lead_data = [
    'full_name'    => $full_name,
    'name'         => $full_name,
    'email'        => $email,
    'phone'        => $phone,
    'course'       => $course,
    'state'        => $state,
    'source'       => $source,
    'utm_source'   => $utm_source,
    'utm_medium'   => $utm_medium,
    'utm_campaign' => $utm_campaign,
    'utm_term'     => $utm_term,
    'utm_content'  => $utm_content,
    'page_url'     => $page_url,
    'form_name'    => $form_name
];

/* Send to CRM */
$crm_url     = 'https://api.crm.mysode.com/api/lead/apicreated';
$crm_api_key = 'a04b4291461f8b060559dfc965864c2c2590e6edd2f5aa7a49388484a1953f22';

$ch = curl_init();
curl_setopt_array($ch, [
    CURLOPT_URL            => $crm_url,
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => json_encode($lead_data),
    CURLOPT_HTTPHEADER     => [
        "x-api-key: {$crm_api_key}",
        "Content-Type: application/json"
    ],
    CURLOPT_RETURNTRANSFER => true
]);
$response = curl_exec($ch);
curl_close($ch);

/* Redirect */
if ($form_name == "Brochure Form" && !empty($brochure)) {
    echo "<script>window.location.href='thank-you.php?brochure=" . urlencode($brochure) . "';</script>";
    exit;
} elseif ($form_name == "Compare University Form") {
    echo "<script>window.location.href='thank-you.php?compare=1';</script>";
    exit;
} else {
    echo "<script>window.location.href='thank-you.php';</script>";
    exit;
}
