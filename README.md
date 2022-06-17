## List of REST APIs in PHP - Izipay

```sh
Install XAMPP https://www.apachefriends.org/
``` 

Payment REST Web Services use HTTP Basic authentication to protect calls between the merchant's server and the payment platform's servers. To authenticate, you need a user account and password.

This information can be retrieved in the REST API Keys tab from the Vendor Back Office

#### Transaction

| Métodos | Endpoints |
| ------ | ------ |
| sdkTest | https://api.micuentaweb.pe/api-payment/V4/Charge/SDKTest |
| createPayment | https://api.micuentaweb.pe/api-payment/V4/Charge/Createpayment |
| createPaymentOrder | https://api.micuentaweb.pe/api-payment/V4/Charge/CreatePaymentOrder |
| getPaymentOrder | https://api.micuentaweb.pe/api-payment/V4/Charge/PaymentOrder/Get |
| OrderGet | https://api.micuentaweb.pe/api-payment/V4/Order/Get |
| updatePaymentOrder | https://api.micuentaweb.pe/api-payment/V4/Charge/PaymentOrder/Update |
| TransactionGet | https://api.micuentaweb.pe/api-payment/V4/Transaction/Get |
| TransactionUpdate | https://api.micuentaweb.pe/api-payment/V4/Transaction/Update |
| TransactionCapture | https://api.micuentaweb.pe/api-payment/V4/Transaction/Capture |
| TransactionValidate | https://api.micuentaweb.pe/api-payment/V4/Transaction/Validate |
| TransactionDuplicate | https://api.micuentaweb.pe/api-payment/V4/Transaction/Duplicate |
| TransactionCancel | https://api.micuentaweb.pe/api-payment/V4/Transaction/CancelOrRefund |

#### Token y Suscription

| Métodos | Endpoints |
| ------ | ------ |
| createToken | https://api.micuentaweb.pe/api-payment/V4/Charge/CreateToken |
| createTokenFromTransaction | https://api.micuentaweb.pe/api-payment/V4/Charge/CreateTokenFromTransaction |
| updateToken | https://api.micuentaweb.pe/api-payment/V4/Token/Update |
| getToken | https://api.micuentaweb.pe/api-payment/V4/Token/Get |
| reactivateToken | https://api.micuentaweb.pe/api-payment/V4/Token/Reactivate |
| cancelToken | https://api.micuentaweb.pe/api-payment/V4/Token/Cancel |
| createSuscription | https://api.micuentaweb.pe/api-payment/V4/Charge/CreateSubscription |
| getSuscription | https://api.micuentaweb.pe/api-payment/V4/Suscription/Get |
| updateSuscription | https://api.micuentaweb.pe/api-payment/V4/Subscription/Update |
| cancelSuscription | https://api.micuentaweb.pe/api-payment/V4/Subscription/Cancel |


