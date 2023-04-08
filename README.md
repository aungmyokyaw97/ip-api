
# Laravel IP-API Integration: Quick IP Geolocation Solution

The Laravel IP-API Package is a powerful and easy-to-use solution for integrating IP geolocation functionality into your Laravel applications. With this package, you can effortlessly retrieve detailed information about the location, timezone, ISP, and more for any IP address. It provides a simplified interface for making API requests to IP-API, a popular and reliable IP geolocation service. Save time and effort in implementing IP geolocation in your Laravel projects with this convenient package.


## Installation


```bash
composer require aungmyokyaw/ip-api
```
    
## Usage
#### Features

- Facade
- Request


## Facade

Retrieving geolocation data for a requested IP address.

```
  use IPAPI;


  $ipData = IPAPI::detect();
```

Retrieving geolocation data for a custom IP address.

```
  use IPAPI;


  $ipAddress = '192.168.1.1';

  $ipData = IPAPI::detect($ipAddress);
```

## Request

In your Laravel controller or middleware, you can use the $request->ipApi() method to retrieve geolocation data for the requested IP address. For example:

```
public function show(Request $request)
{

    $geoData = $request->ipApi(); // retrieve geolocation data 

}
```
#### Response
Available response data for this geo package includes:

| Name | Description | Type | 
| --- | --- | --- |
| status |success or fail | string |
| message | included only when status is fail Can be one of the following: private range, reserved range, invalid query | string | 
| continent |Continent name | string | 
| continentCode |Two-letter continent code | string | 
| country | Country name | string | 
| countryCode |Two-letter country code ISO 3166-1 alpha-2 | string | 
| region |Region/state short code (FIPS or ISO) | string | 
| regionName |Region/state | string | 
| city |City | string | 
| district |District (subdivision of city) | string | 
| zip | Zip Code | string | 
| lat | Latitude | float | 
| lon | Longitude | float | 
| timezone |Timezone (tz) | string | 
| offset |Timezone UTC DST offset in seconds | int | 
| currency |National currency | string | 
| isp |ISP name | string | 
| org |Organization name | string | 
| as |AS number and organization, separated by space (RIR). Empty for IP blocks not being announced in BGP tables. | string | 
| asname |AS name (RIR). Empty for IP blocks not being announced in BGP tables. | string | 
| reverse |Reverse DNS of the IP (can delay response) | string | 
| mobile |Mobile (cellular) connection | bool | 
| proxy |Proxy, VPN or Tor exit address | bool | 
| hosting |Hosting, colocated or data center | bool | 
| query |IP used for the query | bool |

## Credits

## [ip-api.com](https://ip-api.com)


### License

This package is open source and released under the [MIT License](LICENSE). Please review the [LICENSE](LICENSE) file for detailed licensing terms and conditions.
