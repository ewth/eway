# eWay

When exploring eWay's [Rapid API](https://www.eway.com.au/api-v3/), I found some of its functionality to be not
particularly well documented or accessible.

Using their PHP SDK is great, but still there seemed to be some aspects missing.

This repository is me toying around with the API and SDK more than a genuine attempt at producing any original
functionality, but I figured it can go on Github in case somebody finds it useful. Due to PCI compliance requirements,
the credit card data (raw number and CVN) could never cross the server boundary, so encryption is done client side
using eWay's client-side encryption.

Note that since was being developed for backend use and the interest here was more in the API usage than the client-side
functionality, I've just hacked together a simple AJAX setup in `index.php` to interact with the class.