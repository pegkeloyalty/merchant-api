# Pegke Loyalty Merchant API

## Obtaining  API Keys
You can obtain API keys by logging into the Pegke Loyalty Dashboard and navigating to [api-settings](https://dashboard.pegke.com/?q=api/apikeys) page. You will be provided with `Consumer Code` and `Consumer Secret` . With these details you can format by combining `Consumer Code` and `Consumer Secret` with a dot`.`  

We will be using `CONSUMERCODE` for `Consumer Code` and `CONSUMERSECRET` for `Consumer Secret` throughout this document and `APIBASE` for API Base URL

---

#### Header Format
Format your `Authorization` header
```
Authorization: Bearer CONSUMERCODE.CONSUMERSECRET
```
#### API Base URL
All the API calls should me made to `https://dashboard.pegke.com/apiv1/` and the end actual end point to get the request.

---
### Example Code
1. [php-http-v2](/php-http-v2)
2. [nodejs-request](/nodejs-request)


---
## 1. Give Loyalty Points
**URL:** `give_points`

**METHOD:** POST

**Description:** Give points to the customer by the vendor if mobile number exists.


| Parameters    | Type           | Description   |
| ------------- |-------------   | -----         |
| phone| string  | This is the mobile number of the existing customer         |
| points      | number       |   Points to the customer by the vendor         |

## 2. Check Points of Customer
**Description:** Returns the points of a customer with a specific vendor

**URL:** `check_points`

**METHOD:** GET

| Parameters    | Type           | Description   |
| ------------- |-------------   | -----         |
| phone| number  | This is the mobile number of the existing customer         |

## 3. Check history of the customer
**Description:** : Tracks points history and returns along with the basic details of the customer

**URL:** `check_history`

**METHOD:** POST


| Parameters    | Type           | Description   |
| ------------- |-------------   | -----         |
| phone| number  | This is the mobile number of the existing customer         |
| page| number  | Pagination variable       |

## 4. My offers
**Description:** Get offers and redeemable items of a particular vendor.

**URL:** `my_offers`

**METHOD:** GET

---
