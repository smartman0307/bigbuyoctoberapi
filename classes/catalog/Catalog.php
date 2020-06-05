<?php
namespace PopovN\BigBuyAPI\Classes\Catalog;

use PopovN\BigBuyAPI\Classes\BigBuy;
use PopovN\BigBuyAPI\Classes\Request\GetRequest;
use PopovN\BigBuyAPI\Classes\Request\PostRequest;

class Catalog extends BigBuy
{
    public $urlPrefix = '/rest/catalog';
    private $requestUrl;

    /**
     * Catalog constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->requestUrl = $this->apiUrl . $this->urlPrefix;
    }

    /**
     * Get a single attribute.
     * @param int $id attribute id
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getAttribute(int $id, $filters = array())
    {
        $endPoint = $this->requestUrl . "/attribute/".$id.".".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single attribute.
     * @param int $id attribute id
     * @return mixed
     */
    public function getAttributeAllLanguages(int $id)
    {
        $endPoint = $this->requestUrl . "/attributealllanguages/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single attribute group.
     * @param int $id attribute id
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getAttributeGroup(int $id, $filters = array())
    {
        $endPoint = $this->requestUrl . "/attributegroup/".$id.".".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single attribute group.
     * @param int $id attribute id
     * @return mixed
     */
    public function getAttributeGroupAllLanguages(int $id)
    {
        $endPoint = $this->requestUrl . "/attributegroupalllanguages/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * List all attribute groups.
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getAttributeGroups($filters = array())
    {
        $endPoint = $this->requestUrl . "/attributegroups.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * List all attributes.
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getAttributes($filters = array())
    {
        $endPoint = $this->requestUrl . "/attributes.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * List all categories.
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getCategories($filters = array())
    {
        $endPoint = $this->requestUrl . "/categories.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Returns the selected category.
     * @param int $id Category id
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getCategory(int $id, $filters = array())
    {
        $endPoint = $this->requestUrl . "/category/".$id.".".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Returns the selected category.
     * @param int $id attribute id
     * @return mixed
     */
    public function getCategoryAllLanguages(int $id)
    {
        $endPoint = $this->requestUrl . "/categoryalllanguages/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Return all languages.
     * @return mixed
     */
    public function getLanguages()
    {
        $endPoint = $this->requestUrl . "/languages.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single manufacturer.
     * @param int $id Manufacturer id
     * @return mixed
     */
    public function getManufacturer(int $id)
    {
        $endPoint = $this->requestUrl . "/manufacturer/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Return all manufacturers.
     * @return mixed
     */
    public function getManufacturers()
    {
        $endPoint = $this->requestUrl . "/manufacturers.".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single product.
     * @param int $id Product id
     * @return mixed
     */
    public function getProduct(int $id)
    {
        $endPoint = $this->requestUrl . "/product/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get product categories.
     * @param int $id Product id
     * @return mixed
     */
    public function getProductCategories(int $id)
    {
        $endPoint = $this->requestUrl . "/productcategories/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single product image.
     * @param int $id Product id
     * @return mixed
     */
    public function getProductImage(int $id)
    {
        $endPoint = $this->requestUrl . "/productimages/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single product information.
     * @param int $id Product id
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getProductInfo(int $id, $filters = array())
    {
        $endPoint = $this->requestUrl . "/productinformation/".$id.".".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single product information.
     * @param int $id Product id
     * @return mixed
     */
    public function getProductInfoAllLanguages(int $id)
    {
        $endPoint = $this->requestUrl . "/productinformationalllanguages/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single product information by sku.
     * @param string $sku Product sku
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getProductInfoBySku(string $sku, $filters = array())
    {
        $endPoint = $this->requestUrl . "/productinformationbysku/".$sku.".".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products.
     * @param array $filters Filters list
     * Possible filters: pageSize (Page size) int,
     * page (Page) int
     * Default value: pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProducts($filters = array())
    {
        $endPoint = $this->requestUrl . "/products.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products categories.
     * @param array $filters Filters list
     * Possible filters: pageSize (Page size) int,
     * page (Page) int
     * Default value: pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsCategories($filters = array())
    {
        $endPoint = $this->requestUrl . "/productscategories.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products images.
     * @param array $filters Filters list
     * Possible filters:
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsImages($filters = array())
    {
        $endPoint = $this->requestUrl . "/productsimages.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products information.
     * @param array $filters Filters list
     * Possible filters:
     * isoCode (The language of the returned data),
     * pageSize (Page size) int,
     * page (Page) int
     * Default value:
     * isoCode = es
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsInfo($filters = array())
    {
        $endPoint = $this->requestUrl . "/productsinformation.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products stock.
     * @param array $filters Filters list
     * Possible filters:
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsStock($filters = array())
    {
        $endPoint = $this->requestUrl . "/productsstock.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products with available stock.
     * @param array $filters Filters list
     * Possible filters:
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsStockAvailable($filters = array())
    {
        $endPoint = $this->requestUrl . "/productsstockavailable.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }


    /**
     * Return all selected products stock.
     * @param array $data Products list
     * Structure:
     * {
     *   "product_stock_request":{      // required
     *      "products":[                // required
     *          {
     *              "sku":"F1505138"    // required
     *          },
     *          {
     *              "sku":"F1505151"
     *          }
     *       ]
     *   }
     * }
     * @return mixed
     */
    public function getProductsStockByReference($data = array())
    {
        $endPoint = $this->requestUrl . "/productsstockbyreference.".$this->format;
        return PostRequest::send($endPoint, $data);
    }

    /**
     * List all product tags.
     * @param array $filters Filters list
     * Possible filters:
     * isoCode (The language of the returned data),
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * isoCode = es
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsTags($filters = array())
    {
        $endPoint = $this->requestUrl . "/productstags.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single product stock.
     * @param int $id Product id
     * @return mixed
     */
    public function getProductStock(int $id)
    {
        $endPoint = $this->requestUrl . "/productstock/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Return all products variations.
     * @param array $filters Filters list
     * Possible filters:
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsVariations($filters = array())
    {
        $endPoint = $this->requestUrl . "/productsvariations.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products variations stock.
     * @param array $filters Filters list
     * Possible filters:
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsVariationsStock($filters = array())
    {
        $endPoint = $this->requestUrl . "/productsvariationsstock.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Return all products variations with available stock.
     * @param array $filters Filters list
     * Possible filters:
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getProductsVariationsStockAvailable($filters = array())
    {
        $endPoint = $this->requestUrl . "/productsvariationsstockavailable.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single productTag.
     * @param int $id ProductTag id
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getProductTag(int $id, $filters = array())
    {
        $endPoint = $this->requestUrl . "/producttags/".$id.".".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single product variations.
     * @param int $id Product id
     * @return mixed
     */
    public function getProductVariations(int $id)
    {
        $endPoint = $this->requestUrl . "/productvariations/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single product variation stock.
     * @param int $id Product id
     * @return mixed
     */
    public function getProductVariationsStock(int $id)
    {
        $endPoint = $this->requestUrl . "/productvariationsstock/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * Get a single Tag.
     * @param int $id Tag id
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getTag(int $id, $filters = array())
    {
        $endPoint = $this->requestUrl . "/tag/".$id.".".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single Tag.
     * @param int $id Tag id
     * @return mixed
     */
    public function getTagAllLanguages(int $id)
    {
        $endPoint = $this->requestUrl . "/tagalllanguages/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * List all tags.
     * @param array $filters Filters list
     * Possible filters: isoCode (The language of the returned data.)
     * Default value: isoCode = es
     * @return mixed
     */
    public function getTags($filters = array())
    {
        $endPoint = $this->requestUrl . "/tags.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }

    /**
     * Get a single variation.
     * @param int $id Variation id
     * @return mixed
     */
    public function getVariation(int $id)
    {
        $endPoint = $this->requestUrl . "/variation/".$id.".".$this->format;
        return GetRequest::send($endPoint);
    }

    /**
     * List all variations.
     * @param array $filters Filters list
     * Possible filters:
     * pageSize (Page size) int,
     * page (Page) int
     * Default values:
     * pageSize = 0
     * page = 0
     * @return mixed
     */
    public function getVariations($filters = array())
    {
        $endPoint = $this->requestUrl . "/variations.".$this->format;
        return GetRequest::send($endPoint, $filters);
    }
}
