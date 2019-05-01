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
$clientSideAction = '';

$firstNames = ['Emma', 'Liam', 'Noah', 'Olivia', 'Ava', 'Isabella', 'Sophia', 'Elijah', 'Logan', 'Mason'];
$lastNames  = ['Smith', 'Johnson', 'Williams', 'Jones', 'Brown', 'Davis', 'Miller', 'Wilson', 'Moore', 'Taylor'];
$titles     = ['Dr', 'Prof', 'Mrs', 'Miss', 'Ms', 'Mr'];

if (!empty($_POST['action'])) {
    switch ($_POST['action']) {
        case 'createCustomer':

            shuffle($firstNames);
            shuffle($lastNames);
            shuffle($titles);

            $firstName = array_pop($firstNames);
            $lastName  = array_pop($lastNames);

            $name = $firstName . ' ' . $lastName;

            // Build a dummy customer
            $cardDetails = [
                'Name'        => $name,
                'Number'      => $_POST['cardNumber'] ?? '',
                'CVN'         => $_POST['cardCvn'] ?? '',
                'ExpiryMonth' => '12',
                'ExpiryYear'  => '34'
            ];

            $customerAttributes = [
                'Title'       => array_pop($titles),
                'FirstName'   => $firstName,
                'LastName'    => $lastName,
                'Street1'     => '123 St Georges Tce',
                'City'        => 'Perth',
                'State'       => 'WA',
                'PostalCode'  => '6000',
                'Country'     => 'au',
                'Phone'       => '08 9999 9999',
                'CardDetails' => $cardDetails
            ];

            $customer = $eway->createCustomer($customerAttributes);
            header('Content-Type: application/json');
            echo json_encode($customer);

            return;
            $clientSideAction = "NONE";

            break;
        case 'queryCustomer':
            header('Content-Type: application/json');
            $tokenCustomerID = $_POST['tokenCustomerID'] ?? '';
            $customer        = $eway->getCustomer($tokenCustomerID);
            echo json_encode($customer);

            return;
            break;
        case 'makePurchase':
            header('Content-Type: application/json');
            $tokenCustomerID = $_POST['tokenCustomerID'] ?? '';
            $customer        = $eway->makePurchase($tokenCustomerID, rand(1, 100));
            echo json_encode($customer);

            return;
            break;

        case 'queryTransactions':
            header('Content-Type: application/json');
            $tokenCustomerID = $_POST['tokenCustomerID'] ?? '';
            $transactions    = $eway->getTransactions($tokenCustomerID);
            echo json_encode($transactions);

            return;
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
    <style type="text/css">
        body, div {
            font-family: sans-serif;
            font-size: 12px;
        }

        div {
            margin-top: 10px;
            margin-bottom: 10px;
        }

        #controls {
            font-size: 11px;
        }
    </style>
</head>
<body>
<div>
    <div style="font-weight: bold;">Ewan\Eway</div>
    <div id="content">
        <div id="customer"></div>
        <div id="tokenCustomerID"></div>
        <div id="purchases"></div>
        <div id="controls">
            <div>
                <button id="createCustomer">Create New Customer</button>
            </div>
            <hr>
            <div>
                <label for="queryTokenCustomerId">
                    Token Customer ID:
                </label>
                <input type="text" name="queryTokenCustomerId" id="queryTokenCustomerId">
            </div>
            <div>
                <button id="queryCustomer">Query Customer</button>
            </div>
            <div>
                <button id="makePurchase">Make Purchase</button>
            </div>
            <div>
                <button id="queryTransactions">Query Transactions</button>
            </div>
        </div>
    </div>
</div>
<!-- This exists solely to do some client-side magic -->
<script src="https://secure.ewaypayments.com/scripts/eCrypt.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.min.js"
        integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.11/lodash.min.js"
        integrity="sha256-7/yoZS3548fXSRXqc/xYzjsmuW3sFKzuvOCHd06Pmps="
        crossorigin="anonymous"></script>
<script>
    /** @var $ jQuery **/
    $(document).ready(function () {

        // Setup data (some of this is now obsolete)
        let clientSideAction = "<?= $clientSideAction; ?>";
        let clientSideData   = <?= $clientSideData; ?>;
        let ewayClientKey    = "<?= getenv('EWAY_CLIENT_KEY'); ?>";
        let serverSideData   = {};


        // Disable all buttons during transactions
        function disableButtons() {
            $('button').each(function (index, item) {
                $(item).attr('disabled', 'disabled');
            });
        }

        // Enable all buttons after we're done
        function enableButtons() {
            $('button').each(function (index, item) {
                $(item).attr('disabled', false);
            });
        }

        // Create a new customer. Client handles the encryption for PCI compliance, server handles everything else.
        $('#createCustomer').click(function () {
            disableButtons();
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
                    if (_.has(response, 'Customer') && _.has(response.Customer, 'TokenCustomerID')) {
                        $('#customer').text(response.Customer.FirstName + ' ' + response.Customer.LastName);
                        $('#tokenCustomerID').text(response.Customer.TokenCustomerID);
                    }
                })
                .fail(function (response) {
                    console.log('ERROR', response);
                })
                .always(function () {
                    enableButtons();
                });
        });

        // Query a customer by token ID.
        $('#queryCustomer').click(function () {
            disableButtons();

            $.ajax({
                url: '',
                method: 'POST',
                data: {
                    action: 'queryCustomer',
                    tokenCustomerID: $('#queryTokenCustomerId').val()
                }
            })
                .done(function (response) {
                    console.log(response);
                })
                .fail(function (response) {
                    console.log('ERROR', response);
                })
                .always(function () {
                    enableButtons();
                });
        });

        // Make a purchase against a token ID.
        $('#makePurchase').click(function () {
            disableButtons();
            $.ajax({
                url: '',
                method: 'POST',
                data: {
                    action: 'makePurchase',
                    tokenCustomerID: $('#queryTokenCustomerId').val()
                }
            })
                .done(function (response) {
                    console.log(response);
                })
                .fail(function (response) {
                    console.log('ERROR', response);
                })
                .always(function () {
                    enableButtons();
                });
        });

        // Query transactions for a customer token ID.
        $('#queryTransactions').click(function () {
            disableButtons();
            $.ajax({
                url: '',
                method: 'POST',
                data: {
                    action: 'queryTransactions',
                    tokenCustomerID: $('#queryTokenCustomerId').val()
                }
            })
                .done(function (response) {
                    console.log(response);
                })
                .fail(function (response) {
                    console.log('ERROR', response);
                })
                .always(function () {
                    enableButtons();
                });
        });

    });
</script>
</body>
</html>
