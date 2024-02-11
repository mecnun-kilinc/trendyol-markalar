Trendyol Brand List (getBrands)
Trendyol Brand List

The brandId information to be sent to the createProduct V2 service will be obtained using this service.

    Minumum 1000 brands information can be provided on a page.
    When searching for a brand, you need to create a query using the page parameter to the service.

GET getBrands
PROD
https://api.trendyol.com/sapigw/brands

Filter Parameters
Parameter	Description
page	Page number of the spesific page
size	The maximum number of results to show on a page.


Sample Service Request

{
  "brands": [
    {
      "id": 10,
      "name": "TrendyolMilla"
    },
    {
      "id": 19,
      "name": "Milla"
    },
    {
      "id": 20,
      "name": "Trendyol"
    }
    ]



Brand names are case sensitive.

More Info : https://developers.trendyol.com/en/docs/trendyol-marketplace/product-integration/trendyol-brand-list


    
}
