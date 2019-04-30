<?php

include('vendor/autoload.php');

use Dotenv\Dotenv;
use Ewan\Eway\EwayClient;

$dotenv = Dotenv::create(dirname(__FILE__));
$dotenv->load();

$eway = new EwayClient(
    getenv('EWAY_API_KEY'),
    getenv('EWAY_API_PASSWORD'),
    getenv('EWAY_CLIENT_KEY'),
    getenv('EWAY_ENV')
);

$clientSideData   = [
    'cardNumber' => '4444333322221111',
    'cardCvn'    => rand(100, 999)
];
$clientSideAction = 'createCustomer';

if (!empty($_POST['action'])) {
    switch ($_POST['action']) {
        case 'createCustomer':

            // Build a dummy customer
            $cardDetails = [
                'Name'   => 'Jane Doe',
                'Number' => $_POST['cardNumber'] ?? '',
                'CVN'    => $_POST['cardCvn'] ?? ''
            ];

            $customerAttributes = [
                'Title'      => 'Ms',
                'FirstName'  => 'Jane',
                'LastName'   => 'Smith',
                'Street1'    => '123 St Georges Tce',
                'City'       => 'Perth',
                'State'      => 'WA',
                'PostalCode' => '6000',
                'Country'    => 'au',
                'Phone'      => '08 9999 9999',
                'CardDetails' => $cardDetails
            ];
            echo "<pre>";
            $customer = $eway->createCustomer($customerAttributes);
            print_R($customer);
            echo "</pre>";
            $clientSideAction = "NONE";

            break;
    }

}

// The env value below shouldn't really exist, just using it in case I accidentally commit secrets
// $customer = $eway->readCustomer(getenv('EXAMPLE_CUSTOMER'));

//$eway->createCustomer($customerAttributes);

$clientSideData = json_encode($clientSideData);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ewan\Eway</title>
</head>
<body>
<!-- This exists solely to do some client-side magic -->
<script src="https://secure.ewaypayments.com/scripts/eCrypt.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
        crossorigin="anonymous"></script>
<script>
    /** @var $ jQuery **/
    $(document).ready(function () {
        let clientSideAction = "<?= $clientSideAction; ?>";
        let clientSideData   = <?= $clientSideData; ?>;
        let ewayClientKey    = "<?= getenv('EWAY_CLIENT_KEY'); ?>";
        let serverSideData   = {};
        switch (clientSideAction) {
            case 'createCustomer':
                serverSideData = {
                    action: 'createCustomer',
                    cardNumber: eCrypt.encryptValue(clientSideData.cardNumber, ewayClientKey),
                    cardCvn: eCrypt.encryptValue(clientSideData.cardCvn, ewayClientKey)
                };
                $.ajax({
                    url: '',
                    method: 'POST',
                    data: serverSideData
                })
                    .done(function (response) {
                        console.log(response);
                    });
                break;
            case 'loadCustomer':
                break;
        }
    });
</script>
</body>
</html>
