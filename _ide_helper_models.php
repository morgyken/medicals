<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryDispensing
 *
 * @property int $id
 * @property int $batch
 * @property int $product
 * @property float $price
 * @property float $discount
 * @property int $quantity
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $customers
 * @property-read mixed $original_price
 * @property-read mixed $total
 * @property-read mixed $unit_cost
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @property-read \Ignite\Inventory\Entities\InventoryBatchProductSales $sale
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensing whereUpdatedAt($value)
 */
	class InventoryDispensing extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventorySalesReturn
 *
 * @property int $id
 * @property int $product
 * @property string $receipt_no
 * @property int $quantity
 * @property string $reason
 * @property int $stocked
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereReceiptNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereStocked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySalesReturn whereUpdatedAt($value)
 */
	class InventorySalesReturn extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryUnits
 *
 * @property int $id
 * @property string $name
 * @property string|null $symbol
 * @property string|null $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryUnits whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryUnits whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryUnits whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryUnits whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryUnits whereSymbol($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryUnits whereUpdatedAt($value)
 */
	class InventoryUnits extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryPurchaseOrderDetails
 *
 * @property int $id
 * @property int $order
 * @property int $product
 * @property int $quantity
 * @property float $price
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $total
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails withoutTrashed()
 */
	class InventoryPurchaseOrderDetails extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryProductDiscount
 *
 * @property int $id
 * @property int $product
 * @property float $discount
 * @property int $active
 * @property string|null $end_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductDiscount whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductDiscount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductDiscount whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductDiscount whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductDiscount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductDiscount whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductDiscount whereUpdatedAt($value)
 */
	class InventoryProductDiscount extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryInsuranceDetails
 *
 * @property int $id
 * @property int $customer
 * @property int $insurance_company
 * @property int $credit_scheme
 * @property string $policy_no
 * @property string $principal
 * @property string $date_of_birth
 * @property string $relation
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\Customer $clients
 * @property-read \Ignite\Settings\Entities\Insurance $companies
 * @property-read \Ignite\Settings\Entities\Schemes $schemes
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereCreditScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereInsuranceCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails wherePolicyNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails wherePrincipal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereRelation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInsuranceDetails whereUpdatedAt($value)
 */
	class InventoryInsuranceDetails extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryCategories
 *
 * @property int $id
 * @property string $name
 * @property int|null $parent
 * @property float $cash_markup
 * @property float $credit_markup
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryProducts[] $products
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereCashMarkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereCreditMarkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryCategories whereUpdatedAt($value)
 */
	class InventoryCategories extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\Requisition
 *
 * @property int $id
 * @property int $user
 * @property string|null $reason
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\RequisitionDetails[] $details
 * @property-read mixed $item_count
 * @property-read \Illuminate\Foundation\Auth\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Requisition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Requisition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Requisition whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Requisition whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Requisition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Requisition whereUser($value)
 */
	class Requisition extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryProducts
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $category
 * @property int $unit
 * @property int|null $tax_category
 * @property int|null $reorder_level
 * @property string|null $strength
 * @property string|null $label_type
 * @property string|null $formulation
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $consumable
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryBatchPurchases[] $batches
 * @property-read \Ignite\Inventory\Entities\InventoryCategories $categories
 * @property-read \Ignite\Inventory\Entities\InventoryProductDiscount $discounts
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryProductExclusion[] $exclusions
 * @property-read mixed $cash_price
 * @property-read mixed $count_active_batch
 * @property-read mixed $credit_price
 * @property-read mixed $desc
 * @property-read mixed $insurance_p
 * @property-read mixed $product_code
 * @property-read mixed $selling_p
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryProductPrice[] $prices
 * @property-read \Ignite\Inventory\Entities\InventoryStock $stocks
 * @property-read \Ignite\Inventory\Entities\InventoryTaxCategory|null $taxgroups
 * @property-read \Ignite\Inventory\Entities\InventoryUnits $units
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereConsumable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereFormulation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereLabelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereReorderLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereStrength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereTaxCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProducts whereUpdatedAt($value)
 */
	class InventoryProducts extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\CollabmedOrderQuotationDetails
 *
 * @property int $id
 * @property int $quotation
 * @property int $item
 * @property int $units_required
 * @property int|null $units_to_supply
 * @property float|null $unit_price
 * @property string|null $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $items
 * @property-read \Ignite\Inventory\Entities\CollabmedOrderQuotation $quatations
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereQuotation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereUnitsRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereUnitsToSupply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails whereUpdatedAt($value)
 */
	class CollabmedOrderQuotationDetails extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\CollabmedOrderQuotation
 *
 * @property int $id
 * @property int $supplier
 * @property int $order
 * @property string|null $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\CollabmedOrderQuotationDetails[] $details
 * @property-read mixed $totals
 * @property-read \Ignite\Inventory\Entities\OrderToCollabmed $orders
 * @property-read \Ignite\Inventory\Entities\InventorySupplier $suppliers
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotation whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotation whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotation whereSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\CollabmedOrderQuotation whereUpdatedAt($value)
 */
	class CollabmedOrderQuotation extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryProductExclusion
 *
 * @property int $id
 * @property int $product
 * @property int $scheme
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductExclusion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductExclusion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductExclusion whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductExclusion whereScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductExclusion whereUpdatedAt($value)
 */
	class InventoryProductExclusion extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\Store
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int|null $clinic
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $desc
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Store whereClinic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Store whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Store whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Store whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Store whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Store whereUpdatedAt($value)
 */
	class Store extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryProductMarkup
 *
 * @property int $id
 * @property int $product
 * @property float $markup
 * @property int $active
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductMarkup whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductMarkup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductMarkup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductMarkup whereMarkup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductMarkup whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductMarkup whereUpdatedAt($value)
 */
	class InventoryProductMarkup extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryPurchaseOrders
 *
 * @property int $id
 * @property int $supplier
 * @property int $payment_terms
 * @property string $payment_mode
 * @property string|null $deliver_date
 * @property int $status
 * @property int $user
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryPurchaseOrderDetails[] $details
 * @property-read mixed $status_label
 * @property-read mixed $totals
 * @property-read \Ignite\Inventory\Entities\InventoryPaymentTerms $payment_options
 * @property-read \Ignite\Inventory\Entities\InventorySupplier $suppliers
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders approved()
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereDeliverDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders wherePaymentTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders whereUser($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inventory\Entities\InventoryPurchaseOrders withoutTrashed()
 */
	class InventoryPurchaseOrders extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InternalOrderDetails
 *
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $items
 */
	class InternalOrderDetails extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryPayments
 *
 * @property int $id
 * @property string $receipt
 * @property int|null $scheme
 * @property mixed|null $InsuranceAmount
 * @property mixed|null $CashAmount
 * @property mixed|null $MpesaReference
 * @property mixed|null $MpesaAmount
 * @property mixed|null $MpesaNumber
 * @property mixed|null $paybil
 * @property mixed|null $account
 * @property mixed|null $ChequeName
 * @property mixed|null $ChequeAmount
 * @property mixed|null $ChequeNumber
 * @property mixed|null $ChequeDate
 * @property mixed|null $ChequeBank
 * @property mixed|null $ChequeBankBranch
 * @property mixed|null $CardType
 * @property mixed|null $CardName
 * @property mixed|null $CardNumber
 * @property mixed|null $CardExpiry
 * @property mixed|null $CardSecurity
 * @property mixed|null $CardAmount
 * @property string|null $description
 * @property int $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $modes
 * @property-read mixed $total
 * @property-read \Ignite\Settings\Entities\Schemes|null $schemes
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCardAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCardExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCardNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCardSecurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCardType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCashAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereChequeAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereChequeBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereChequeBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereChequeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereChequeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereChequeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereInsuranceAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereMpesaAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereMpesaNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereMpesaReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments wherePaybil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPayments whereUser($value)
 */
	class InventoryPayments extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryBatchPurchases
 *
 * @property int $id
 * @property int $batch
 * @property int $product
 * @property int $quantity
 * @property int|null $qty_sold
 * @property int $active
 * @property int $bonus
 * @property float $discount
 * @property float $tax
 * @property float $unit_cost
 * @property string|null $expiry_date
 * @property int $package_size
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventorySupplier $creitors
 * @property-read mixed $remaining
 * @property-read mixed $total
 * @property-read \Ignite\Inventory\Entities\InventoryPurchaseOrders $lpo
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @property-read \Ignite\Inventory\Entities\InventorySupplier $suppliers
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereBonus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases wherePackageSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereQtySold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereTax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereUnitCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchPurchases whereUpdatedAt($value)
 */
	class InventoryBatchPurchases extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\ShopItems
 *
 */
	class ShopItems extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryProductPrice
 *
 * @property int $id
 * @property int $product
 * @property int|null $batch
 * @property float|null $price
 * @property float|null $selling
 * @property float|null $ins_price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $cash_price
 * @property-read mixed $credit_price
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice whereInsPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice whereSelling($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryProductPrice whereUpdatedAt($value)
 */
	class InventoryProductPrice extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryPaymentTerms
 *
 * @property int $id
 * @property string $terms
 * @property string|null $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPaymentTerms whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPaymentTerms whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPaymentTerms whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPaymentTerms whereTerms($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryPaymentTerms whereUpdatedAt($value)
 */
	class InventoryPaymentTerms extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryDispensingQueue
 *
 * @property int $id
 * @property int $product
 * @property int $quanity
 * @property int $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensingQueue whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensingQueue whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensingQueue whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensingQueue whereQuanity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensingQueue whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryDispensingQueue whereUser($value)
 */
	class InventoryDispensingQueue extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryBatchProductSales
 *
 * @property int $id
 * @property string $receipt
 * @property string|null $payment_mode
 * @property int $paid
 * @property int $user
 * @property int|null $insurance
 * @property int|null $customer
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $patient
 * @property int|null $visit
 * @property int $shop
 * @property-read \Ignite\Inventory\Entities\InventoryPayments $amountpaid
 * @property-read \Ignite\Inventory\Entities\Customer|null $customers
 * @property-read mixed $amount
 * @property-read mixed $desc
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryDispensing[] $goodies
 * @property-read \Ignite\Reception\Entities\PatientInsurance|null $insuranceses
 * @property-read \Ignite\Reception\Entities\Patients|null $patients
 * @property-read \Ignite\Finance\Entities\EvaluationPayments $payment
 * @property-read \Ignite\Finance\Entities\RemovedBills $removed_bills
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereCustomer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereShop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatchProductSales whereVisit($value)
 */
	class InventoryBatchProductSales extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventorySupplier
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string|null $post_code
 * @property string $town
 * @property string $street
 * @property string $building
 * @property string|null $telephone
 * @property string $mobile
 * @property string|null $fax
 * @property string $email
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier wherePostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventorySupplier whereUpdatedAt($value)
 */
	class InventorySupplier extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\Customer
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $date_of_birth
 * @property string $email
 * @property string $phone
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer whereDateOfBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\Customer whereUpdatedAt($value)
 */
	class Customer extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryTaxCategory
 *
 * @property int $id
 * @property string $name
 * @property float $rate
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $rates
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryTaxCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryTaxCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryTaxCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryTaxCategory whereRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryTaxCategory whereUpdatedAt($value)
 */
	class InventoryTaxCategory extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryInvoice
 *
 * @property int $id
 * @property string $number
 * @property int $creditor
 * @property int|null $gl_account
 * @property int|null $grn
 * @property float $amount
 * @property string $date
 * @property string $due_date
 * @property string|null $description
 * @property string|null $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventorySupplier $creditors
 * @property-read \Ignite\Finance\Entities\FinanceGlAccounts|null $gls
 * @property-read \Ignite\Inventory\Entities\InventoryBatch|null $grns
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereCreditor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereGlAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereGrn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryInvoice whereUpdatedAt($value)
 */
	class InventoryInvoice extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InternalOrder
 *
 * @property int $id
 * @property int $author
 * @property int $dispatching_store
 * @property int $requesting_store
 * @property string|null $deliver_date
 * @property int $status
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InternalOrderDetails[] $details
 * @property-read \Ignite\Inventory\Entities\Store $disp_store
 * @property-read \Ignite\Inventory\Entities\Store $rq_store
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereDeliverDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereDispatchingStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereRequestingStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InternalOrder whereUpdatedAt($value)
 */
	class InternalOrder extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryStock
 *
 * @property int $id
 * @property int $product
 * @property int $quantity
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStock whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStock whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStock whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStock whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStock whereUpdatedAt($value)
 */
	class InventoryStock extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryStockAdjustment
 *
 * @property int $id
 * @property int $product
 * @property int $opening_qty
 * @property int $quantity
 * @property int $new_stock
 * @property string $method
 * @property string $type
 * @property string $reason
 * @property string|null $approved
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $closing
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $products
 * @property-read \Ignite\Users\Entities\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereNewStock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereOpeningQty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryStockAdjustment whereUser($value)
 */
	class InventoryStockAdjustment extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryBatch
 *
 * @property int $id
 * @property int|null $supplier
 * @property int $amount
 * @property int $user
 * @property int|null $store
 * @property int|null $order
 * @property int|null $in_order
 * @property int $payment_status
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryPurchaseOrders|null $lpo
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryBatchPurchases[] $products
 * @property-read \Ignite\Inventory\Entities\InventorySupplier $suppliers
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereInOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereStore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereSupplier($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryBatch whereUser($value)
 */
	class InventoryBatch extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\InventoryRequisition
 *
 * @property int $id
 * @property string $req_no
 * @property int $product
 * @property int $quantity
 * @property string $status
 * @property int $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereReqNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\InventoryRequisition whereUser($value)
 */
	class InventoryRequisition extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\OrderToCollabmed
 *
 * @property int $id
 * @property int $order
 * @property string $client
 * @property string|null $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryPurchaseOrders $orders
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\OrderToCollabmed whereClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\OrderToCollabmed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\OrderToCollabmed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\OrderToCollabmed whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\OrderToCollabmed whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\OrderToCollabmed whereUpdatedAt($value)
 */
	class OrderToCollabmed extends \Eloquent {}
}

namespace Ignite\Inventory\Entities{
/**
 * Ignite\Inventory\Entities\RequisitionDetails
 *
 * @property int $id
 * @property int $requisition
 * @property int $item
 * @property int $quantity
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $items
 * @property-read \Ignite\Inventory\Entities\Requisition $requisitions
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\RequisitionDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\RequisitionDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\RequisitionDetails whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\RequisitionDetails whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\RequisitionDetails whereRequisition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inventory\Entities\RequisitionDetails whereUpdatedAt($value)
 */
	class RequisitionDetails extends \Eloquent {}
}

namespace Ignite\Users\Entities{
/**
 * Ignite\Users\Entities\UserRoles
 *
 * @property int $user_id
 * @property int $role_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\Roles $Roles
 * @property-read \Ignite\Users\Entities\User $Users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserRoles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserRoles whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserRoles whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserRoles whereUserId($value)
 */
	class UserRoles extends \Eloquent {}
}

namespace Ignite\Users\Entities{
/**
 * Ignite\Users\Entities\Sentinel
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property array $permissions
 * @property int $active
 * @property string|null $last_login
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $employee_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Sentinel\Activations\EloquentActivation[] $activations
 * @property-read mixed $gravatar
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Sentinel\Persistences\EloquentPersistence[] $persistences
 * @property-read \Ignite\Users\Entities\UserProfile $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Sentinel\Reminders\EloquentReminder[] $reminders
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Sentinel\Roles\EloquentRole[] $roles
 * @property-read \Illuminate\Database\Eloquent\Collection|\Cartalyst\Sentinel\Throttling\EloquentThrottle[] $throttle
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Sentinel whereUsername($value)
 */
	class Sentinel extends \Eloquent {}
}

namespace Ignite\Users\Entities{
/**
 * Ignite\Users\Entities\Activation
 *
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property int $completed
 * @property string|null $completed_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Activation whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Activation whereCompleted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Activation whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Activation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Activation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Activation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Activation whereUserId($value)
 */
	class Activation extends \Eloquent {}
}

namespace Ignite\Users\Entities{
/**
 * Ignite\Users\Entities\Roles
 *
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string|null $permissions
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Users\Entities\UserRoles[] $assignees
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Roles whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Roles whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Roles whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Roles wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Roles whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\Roles whereUpdatedAt($value)
 */
	class Roles extends \Eloquent {}
}

namespace Ignite\Users\Entities{
/**
 * Ignite\Users\Entities\UserProfile
 *
 * @property int $user_id
 * @property int $title
 * @property string $first_name
 * @property string|null $middle_name
 * @property string $last_name
 * @property string|null $job_description
 * @property string|null $phone
 * @property mixed|null $photo
 * @property string|null $mpdb
 * @property string|null $pin
 * @property string|null $clinics
 * @property int|null $partner_institution
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @property-read mixed $name
 * @property-read \Ignite\Evaluation\Entities\PartnerInstitution|null $partnerInstitution
 * @property-read \Ignite\Users\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereClinics($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereJobDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereMpdb($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile wherePartnerInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\UserProfile whereUserId($value)
 */
	class UserProfile extends \Eloquent {}
}

namespace Ignite\Users\Entities{
/**
 * Ignite\Users\Entities\User
 *
 * @property int $id
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string|null $permissions
 * @property int $active
 * @property string|null $last_login
 * @property string|null $remember_token
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $employee_id
 * @property-read mixed $admin
 * @property-read mixed $ex
 * @property-read mixed $gravator
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Ignite\Users\Entities\UserProfile $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Users\Entities\UserRoles[] $roles
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereEmployeeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User wherePermissions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Users\Entities\User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\ChargeSheet
 *
 * @property int $id
 * @property int $visit_id
 * @property int|null $dispensing_id rel:inventory_evaluation_dispensing
 * @property int|null $consumable_id rel:inpatient_consumables
 * @property int|null $investigation_id rel:evaluation_investigations
 * @property int|null $charge_id rel:inpatient_charges
 * @property int|null $ward_id rel:inpatient_wards
 * @property int $paid
 * @property float $price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Charge|null $charge
 * @property-read \Ignite\Inpatient\Entities\InpatientConsumable|null $consumable
 * @property-read \Ignite\Evaluation\Entities\Dispensing|null $dispense
 * @property-read \Ignite\Inpatient\Entities\Ward|null $ward
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereChargeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereConsumableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereDispensingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereInvestigationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereVisitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ChargeSheet whereWardId($value)
 */
	class ChargeSheet extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\AnaestheticChart
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AnaestheticChart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AnaestheticChart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AnaestheticChart whereUpdatedAt($value)
 */
	class AnaestheticChart extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\HeadInjury
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property int $user_id
 * @property string|null $bp_systolic
 * @property string|null $bp_diastolic
 * @property string|null $pulse
 * @property string|null $respiration
 * @property string|null $temperature
 * @property array $conscious_status
 * @property array $pupil_status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Users\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereBpDiastolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereBpSystolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereConsciousStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury wherePulse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury wherePupilStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereRespiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\HeadInjury whereVisitId($value)
 */
	class HeadInjury extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\CanceledPrescriptions
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property string $drug
 * @property int $take
 * @property int $whereto
 * @property int $method
 * @property int $duration
 * @property bool $allow_substitution
 * @property int $time_measure
 * @property string $reason
 * @property int $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $drugs
 * @property-read string $dose
 * @property-read string $sub
 * @property-read \Ignite\Users\Entities\User $user
 * @property-read \Ignite\Inpatient\Entities\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereAllowSubstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereDrug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereTake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereTimeMeasure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereVisitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\CanceledPrescriptions whereWhereto($value)
 */
	class CanceledPrescriptions extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Bed
 *
 * @property int $id
 * @property string $number
 * @property int $ward_id
 * @property int $bed_type_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Inpatient\Entities\BedType $type
 * @property-read \Ignite\Inpatient\Entities\Ward $ward
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Bed whereBedTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Bed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Bed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Bed whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Bed whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Bed whereWardId($value)
 */
	class Bed extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\DischargeType
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeType whereUpdatedAt($value)
 */
	class DischargeType extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\DischargeNote
 *
 * @property int $id
 * @property int $admission_id
 * @property int|null $doctor_id
 * @property int|null $visit_id
 * @property string|null $case_note
 * @property string|null $principal_diagnosis
 * @property string|null $other_diagnosis
 * @property string|null $admission_complaints
 * @property string|null $investigations_courses
 * @property string|null $discharge_condition
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $to_come_again
 * @property string|null $dateofdeath
 * @property string|null $timeofdeath
 * @property string $type
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Users\Entities\User|null $doctor
 * @property-read \Ignite\Inpatient\Entities\Visit|null $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereAdmissionComplaints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereCaseNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereDateofdeath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereDischargeCondition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereInvestigationsCourses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereOtherDiagnosis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote wherePrincipalDiagnosis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereTimeofdeath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereToComeAgain($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\DischargeNote whereVisitId($value)
 */
	class DischargeNote extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\BedType
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BedType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BedType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BedType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BedType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BedType whereUpdatedAt($value)
 */
	class BedType extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\BloodTransfusion
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property int $user_id
 * @property int|null $bp_systolic
 * @property int|null $bp_diastolic
 * @property int|null $temperature
 * @property int|null $respiration
 * @property string|null $remarks
 * @property string $date_recorded
 * @property string $time_recorded
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Users\Entities\User $user
 * @property-read \Ignite\Inpatient\Entities\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereBpDiastolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereBpSystolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereDateRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereRespiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereTimeRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodTransfusion whereVisitId($value)
 */
	class BloodTransfusion extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Notes
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property string $notes
 * @property mixed|null $note_pic
 * @property int $user
 * @property int $type
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Users\Entities\User $users
 * @property-read \Ignite\Inpatient\Entities\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereNotePic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Notes whereVisitId($value)
 */
	class Notes extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\AdmissionType
 *
 * @property int $id
 * @property string $name
 * @property float $deposit
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionType whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionType whereUpdatedAt($value)
 */
	class AdmissionType extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\WardAssigned
 *
 * @property int $id
 * @property int $admission_id
 * @property int|null $visit_id
 * @property int $ward_id
 * @property string|null $admitted_at
 * @property string|null $discharged_at
 * @property float $price
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $invoiced
 * @property-read \Ignite\Finance\Entities\RemovedBills $removed_bills
 * @property-read \Ignite\Inpatient\Entities\Visit|null $visit
 * @property-read \Ignite\Inpatient\Entities\Ward $ward
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereAdmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereDischargedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereVisitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\WardAssigned whereWardId($value)
 */
	class WardAssigned extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Preoperative
 *
 * @property int $id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Preoperative whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Preoperative whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Preoperative whereUpdatedAt($value)
 */
	class Preoperative extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Temperature
 *
 * @property int $id
 * @property int|null $respiration
 * @property int|null $pulse
 * @property int|null $temperature
 * @property int|null $bowels
 * @property int|null $urine
 * @property int $admission_id
 * @property int $patient_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $date
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereBowels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature wherePulse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereRespiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Temperature whereUrine($value)
 */
	class Temperature extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\InvestigationResults
 *
 */
	class InvestigationResults extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\AdmissionRequest
 *
 * @property int $id
 * @property int $patient_id
 * @property int $visit_id
 * @property int $admission_type_id
 * @property string $reason
 * @property float $authorized
 * @property int $authorized_by
 * @property int $cancelled
 * @property \Carbon\Carbon|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\AdmissionType $admissionType
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\InsuranceMaximumAmount[] $insuranceMaximumAmount
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @property-read \Ignite\Inpatient\Entities\Visit $visits
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\AdmissionRequest onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereAdmissionTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereAuthorized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereAuthorizedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereCancelled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdmissionRequest whereVisitId($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\AdmissionRequest withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\AdmissionRequest withoutTrashed()
 */
	class AdmissionRequest extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Preliminary
 *
 */
	class Preliminary extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Administration
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property int $prescription_id
 * @property string $time
 * @property int $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Evaluation\Entities\Prescriptions $prescription
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration wherePrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Administration whereVisitId($value)
 */
	class Administration extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\PatientAccount
 *
 * @property int $id
 * @property float $balance
 * @property int $patient_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\PatientAccount whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\PatientAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\PatientAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\PatientAccount wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\PatientAccount whereUpdatedAt($value)
 */
	class PatientAccount extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\AdministerDrug
 *
 * @property int $id
 * @property int $prescription_id
 * @property int $administered
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdministerDrug whereAdministered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdministerDrug whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdministerDrug whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdministerDrug wherePrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\AdministerDrug whereUpdatedAt($value)
 */
	class AdministerDrug extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\BloodPressure
 *
 * @property int $id
 * @property int $value
 * @property int $admission_id
 * @property int $patient_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $date
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodPressure whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodPressure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodPressure whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodPressure wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodPressure whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BloodPressure whereValue($value)
 */
	class BloodPressure extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\ProcedureCategory
 *
 * @property int $id
 * @property string $name
 * @property string $applies_to
 * @property string|null $deleted_at
 * @property-read mixed $applied_to
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Procedures[] $procedures
 * @property-read \Ignite\Evaluation\Entities\ProcedureCategoryTemplates $templates
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\ProcedureCategory onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ProcedureCategory whereAppliesTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ProcedureCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ProcedureCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\ProcedureCategory whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\ProcedureCategory withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\ProcedureCategory withoutTrashed()
 */
	class ProcedureCategory extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Admission
 *
 * @property int $id
 * @property int $patient_id
 * @property int|null $doctor_id
 * @property int $ward_id
 * @property int $bed_id
 * @property float|null $cost
 * @property string|null $reason
 * @property string|null $external_doctor
 * @property int $visit_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Bed $bed
 * @property-read \Ignite\Users\Entities\User $doctor
 * @property-read mixed $discharged
 * @property-read mixed $has_discharge_request
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Prescriptions[] $prescriptions
 * @property-read \Ignite\Inpatient\Entities\Visit $visit
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\Vitals[] $vitals
 * @property-read \Ignite\Inpatient\Entities\Ward $ward
 * @property-read \Ignite\Inpatient\Entities\WardAssigned $wardAssigned
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereBedId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereExternalDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereVisitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Admission whereWardId($value)
 */
	class Admission extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Procedure
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $category
 * @property string|null $gender
 * @property int|null $template
 * @property float $cash_charge
 * @property float|null $insurance_charge
 * @property int $charge_insurance
 * @property int $precharge
 * @property string|null $description
 * @property int $status
 * @property int $sensitivity
 * @property-read \Ignite\Evaluation\Entities\ProcedureCategories $categories
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\SubProcedures[] $children
 * @property-read int $price
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Settings\Entities\CompanyPrice[] $inclusions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\ProcedureInventoryItem[] $items
 * @property-read \Ignite\Evaluation\Entities\ProcedureTemplates $templates
 * @property-read \Ignite\Evaluation\Entities\SubProcedures $this_test
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereCashCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereChargeInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereInsuranceCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure wherePrecharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereSensitivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Procedure whereTemplate($value)
 */
	class Procedure extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Rebate
 *
 * @property int $id
 * @property int $scheme_id
 * @property float $amount
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Schemes $scheme
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Rebate whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Rebate whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Rebate whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Rebate whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Rebate whereSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Rebate whereUpdatedAt($value)
 */
	class Rebate extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Discharge
 *
 * @property int $id
 * @property int $admission_id
 * @property int|null $visit_id
 * @property int|null $doctor_id
 * @property int $discharge_notes_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\User|null $doctor
 * @property-read \Ignite\Inpatient\Entities\DischargeNote $notes
 * @property-read \Ignite\Inpatient\Entities\Visit|null $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Discharge whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Discharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Discharge whereDischargeNotesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Discharge whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Discharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Discharge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Discharge whereVisitId($value)
 */
	class Discharge extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\InsuranceMaximumAmount
 *
 * @property int $id
 * @property int $admission_request_id
 * @property int $scheme_id
 * @property float $maximum_amount
 * @property string $authorization_letter_url
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InsuranceMaximumAmount whereAdmissionRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InsuranceMaximumAmount whereAuthorizationLetterUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InsuranceMaximumAmount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InsuranceMaximumAmount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InsuranceMaximumAmount whereMaximumAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InsuranceMaximumAmount whereSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InsuranceMaximumAmount whereUpdatedAt($value)
 */
	class InsuranceMaximumAmount extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\ChargeSheetType
 *
 */
	class ChargeSheetType extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\InpatientDoctorNotes
 *
 * @property int $id
 * @property int $visit_id
 * @property int $title
 * @property string $notes
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientDoctorNotes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientDoctorNotes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientDoctorNotes whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientDoctorNotes whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientDoctorNotes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientDoctorNotes whereVisitId($value)
 */
	class InpatientDoctorNotes extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Ward
 *
 * @property int $id
 * @property string $number
 * @property string $name
 * @property string $gender
 * @property string $age_group
 * @property float $insurance_cost
 * @property float $cash_cost
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\WardAssigned[] $assigned
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\Bed[] $beds
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\Charge[] $charges
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Reception\Entities\Patients[] $patients
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereAgeGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereCashCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereInsuranceCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Ward whereUpdatedAt($value)
 */
	class Ward extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\RequestDischarge
 *
 * @property int $id
 * @property int $admission_id
 * @property int|null $visit_id
 * @property int|null $doctor_id
 * @property string|null $reason
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Users\Entities\User|null $doctor
 * @property-read \Ignite\Inpatient\Entities\Visit|null $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\RequestDischarge whereVisitId($value)
 */
	class RequestDischarge extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\FluidBalance
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property int $user_id
 * @property string|null $intravenous_infusion
 * @property string|null $other_instructions
 * @property array $intake_intraveneous
 * @property array $intake_alimentary
 * @property array $output
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string $time_recorded
 * @property string $date_recorded
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Users\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereDateRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereIntakeAlimentary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereIntakeIntraveneous($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereIntravenousInfusion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereOtherInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereOutput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereTimeRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\FluidBalance whereVisitId($value)
 */
	class FluidBalance extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\NursingCarePlan
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property int $user_id
 * @property string $diagnosis
 * @property string $expected_outcome
 * @property string $intervention
 * @property string $reasons
 * @property string $evaluation
 * @property string $date_recorded
 * @property string $time_recorded
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Users\Entities\User $user
 * @property-read \Ignite\Inpatient\Entities\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereDateRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereDiagnosis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereEvaluation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereExpectedOutcome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereIntervention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereReasons($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereTimeRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\NursingCarePlan whereVisitId($value)
 */
	class NursingCarePlan extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Investigations
 *
 * @property int $id
 * @property int $visit
 * @property string $type
 * @property int $procedure
 * @property float $price
 * @property int|null $user
 * @property string|null $instructions
 * @property int $ordered
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereOrdered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Investigations whereVisit($value)
 */
	class Investigations extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\InpatientConsumable
 *
 * @property int $id
 * @property int $visit
 * @property string $type
 * @property int $product_id
 * @property int $quantity
 * @property float $discount
 * @property float $amount
 * @property float $price
 * @property int|null $user
 * @property string|null $instructions
 * @property int $ordered
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $product
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereOrdered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\InpatientConsumable whereVisit($value)
 */
	class InpatientConsumable extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\VisitMeta
 *
 */
	class VisitMeta extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Charge
 *
 * @property int $id
 * @property string $name
 * @property float $cost
 * @property string $type
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\Ward[] $wards
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Charge whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Charge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Charge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Charge whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Charge whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Charge whereUpdatedAt($value)
 */
	class Charge extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Vitals
 *
 * @property int $id
 * @property int $visit_id
 * @property int $admission_id
 * @property float|null $weight
 * @property float|null $height
 * @property string $bp_systolic
 * @property string $bp_diastolic
 * @property string $pulse
 * @property string $respiration
 * @property string $temperature
 * @property string $temperature_location
 * @property float $oxygen
 * @property float|null $waist
 * @property float|null $hip
 * @property string|null $blood_sugar
 * @property string $blood_sugar_units
 * @property string|null $allergies
 * @property string|null $chronic_illnesses
 * @property int $user_id
 * @property string $date_recorded
 * @property string $time_recorded
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inpatient\Entities\Admission $admissions
 * @property-read \Ignite\Users\Entities\User $user
 * @property-read \Ignite\Inpatient\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereAllergies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereBloodSugar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereBloodSugarUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereBpDiastolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereBpSystolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereChronicIllnesses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereDateRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereHip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereOxygen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals wherePulse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereRespiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereTemperatureLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereTimeRecorded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereVisitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereWaist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Vitals whereWeight($value)
 */
	class Vitals extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Visit
 *
 * @property int $id
 * @property int $clinic
 * @property int $patient
 * @property int|null $purpose
 * @property int|null $external_doctor
 * @property int $user
 * @property string $payment_mode
 * @property int|null $scheme
 * @property int|null $next_appointment
 * @property string|null $status
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $external_order
 * @property int $admission_request_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\Admission[] $admissions
 * @property-read \Ignite\Reception\Entities\Appointments $appointments
 * @property-read \Ignite\Settings\Entities\Clinics $clinics
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\VisitDestinations[] $destinations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Dispensing[] $dispensing
 * @property-read \Ignite\Users\Entities\User $doctors
 * @property-read \Ignite\Evaluation\Entities\Drawings $drawings
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryBatchProductSales[] $drug_purchases
 * @property-read \Ignite\Users\Entities\User|null $external_doctors
 * @property-read string $doctor
 * @property-read string $doctor_i_d
 * @property-read mixed|string $mode
 * @property-read mixed $signed_out
 * @property-read mixed $total_bill
 * @property-read int $unpaid_amount
 * @property-read mixed $visit_destination
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Investigations[] $investigations
 * @property-read \Ignite\Inpatient\Entities\VisitMeta $metas
 * @property-read \Ignite\Evaluation\Entities\DoctorNotes $notes
 * @property-read \Ignite\Evaluation\Entities\OpNotes $opnotes
 * @property-read \Ignite\Reception\Entities\PatientInsurance|null $patient_scheme
 * @property-read \Ignite\Reception\Entities\Patients $patients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Prescriptions[] $prescriptions
 * @property-read \Ignite\Evaluation\Entities\PartnerInstitution $requesting_institutions
 * @property-read \Ignite\Evaluation\Entities\Vitals $vitals
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\WardAssigned[] $wardsAssigned
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit checkedAt($destination)
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\Visit onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereAdmissionRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereClinic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereExternalDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereExternalOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereNextAppointment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Visit whereUser($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\Visit withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\Visit withoutTrashed()
 */
	class Visit extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\Deposit
 *
 * @property int $id
 * @property string $name
 * @property float $cost
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Deposit whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Deposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Deposit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Deposit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\Deposit whereUpdatedAt($value)
 */
	class Deposit extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\BedPosition
 *
 * @property-read \Ignite\Inpatient\Entities\Ward $ward
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\BedPosition isTaken()
 */
	class BedPosition extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\VisitDestinations
 *
 * @property int $id
 * @property int $visit
 * @property int $user
 * @property int|null $destination
 * @property int|null $room_id
 * @property string $department
 * @property int $checkout
 * @property string|null $begin_at
 * @property string|null $finish_at
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\User|null $medics
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\Visit[] $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereBeginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereCheckout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereFinishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Inpatient\Entities\VisitDestinations whereVisit($value)
 */
	class VisitDestinations extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\DischargeRequest
 *
 * @property-read \Ignite\Inpatient\Entities\DischargeType $type
 * @property-read \Ignite\Evaluation\Entities\Visit $visit
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\DischargeRequest onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\DischargeRequest withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Inpatient\Entities\DischargeRequest withoutTrashed()
 */
	class DischargeRequest extends \Eloquent {}
}

namespace Ignite\Inpatient\Entities{
/**
 * Ignite\Inpatient\Entities\InventoryConsumable
 *
 */
	class InventoryConsumable extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\Schemes
 *
 * @property int $id
 * @property int $company
 * @property string $name
 * @property int $type
 * @property string|null $attention
 * @property int $smart
 * @property float|null $amount
 * @property \Carbon\Carbon $effective_date
 * @property string|null $deleted_at
 * @property string $expiry_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Insurance $companies
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereAttention($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereEffectiveDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereExpiryDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereSmart($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Schemes whereUpdatedAt($value)
 */
	class Schemes extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\CompanyPrice
 *
 * @property int $id
 * @property int $procedure
 * @property int $company
 * @property float|null $price
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Insurance $firm
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\CompanyPrice whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\CompanyPrice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\CompanyPrice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\CompanyPrice wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\CompanyPrice whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\CompanyPrice whereUpdatedAt($value)
 */
	class CompanyPrice extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\Insurance
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string|null $post_code
 * @property string $town
 * @property string $street
 * @property string $building
 * @property string|null $telephone
 * @property string $mobile
 * @property string|null $fax
 * @property string $email
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Settings\Entities\Schemes[] $schemes
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance wherePostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Insurance whereUpdatedAt($value)
 */
	class Insurance extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\Rooms
 *
 * @property int $id
 * @property int $facility_id
 * @property string $name
 * @property int|null $category_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Clinics $facility
 * @property-read mixed $desc
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Rooms whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Rooms whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Rooms whereFacilityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Rooms whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Rooms whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Rooms whereUpdatedAt($value)
 */
	class Rooms extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\Practice
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $telephone
 * @property string|null $fax
 * @property string|null $mobile
 * @property string|null $email
 * @property string $country
 * @property string $town
 * @property string|null $street
 * @property string|null $building
 * @property string|null $office
 * @property string|null $pin
 * @property string|null $logo
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Settings\Entities\Clinics[] $clinics
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice wherePin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Practice whereTown($value)
 */
	class Practice extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\Settings
 *
 * @property int $id
 * @property string $name
 * @property string|null $value
 * @property string|null $payload
 * @property int $autoload
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Settings whereAutoload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Settings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Settings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Settings whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Settings wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Settings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Settings whereValue($value)
 */
	class Settings extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\InsuranceSchemePricing
 *
 * @property int $id
 * @property int $scheme_id
 * @property int|null $product_id
 * @property int|null $procedure_id
 * @property float|null $amount
 * @property int $excluded
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereExcluded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereProcedureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\InsuranceSchemePricing whereUpdatedAt($value)
 */
	class InsuranceSchemePricing extends \Eloquent {}
}

namespace Ignite\Settings\Entities{
/**
 * Ignite\Settings\Entities\Clinics
 *
 * @property int $id
 * @property int $practice
 * @property string $name
 * @property string $address
 * @property string $telephone
 * @property string|null $fax
 * @property string|null $mobile
 * @property string $email
 * @property string $town
 * @property string|null $location
 * @property string $street
 * @property string $building
 * @property string $office
 * @property string $status
 * @property string $type
 * @property string|null $logo
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Practice $practices
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Settings\Entities\Rooms[] $rooms
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereOffice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics wherePractice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Settings\Entities\Clinics whereUpdatedAt($value)
 */
	class Clinics extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\FinanceEvaluationInsurancePayments
 *
 * @property int $id
 * @property int $company
 * @property float $amount
 * @property int $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Insurance $companies
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\InsuranceInvoicePayment[] $details
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceEvaluationInsurancePayments whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceEvaluationInsurancePayments whereCompany($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceEvaluationInsurancePayments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceEvaluationInsurancePayments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceEvaluationInsurancePayments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceEvaluationInsurancePayments whereUser($value)
 */
	class FinanceEvaluationInsurancePayments extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\BankingTransactions
 *
 */
	class BankingTransactions extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PaymentManifest
 *
 * @property int $id
 * @property string $type
 * @property int $visit_id
 * @property int $patient_id
 * @property int|null $company_id
 * @property int|null $scheme_id
 * @property int $has_meds
 * @property float $amount
 * @property string $date
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @property-read \Ignite\Evaluation\Entities\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereHasMeds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentManifest whereVisitId($value)
 */
	class PaymentManifest extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\EvaluationPaymentsDetails
 *
 * @property int $id
 * @property int $payment
 * @property int|null $investigation
 * @property int|null $prescription_id
 * @property int|null $visit
 * @property int|null $patient_invoice
 * @property float|null $patient_invoice_amount
 * @property float|null $cost
 * @property float|null $price
 * @property string|null $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\EvaluationPayments $batch
 * @property-read mixed $item_desc
 * @property-read \Ignite\Evaluation\Entities\Investigations|null $investigations
 * @property-read \Ignite\Finance\Entities\PatientInvoice|null $patient_invoices
 * @property-read \Ignite\Evaluation\Entities\Prescriptions|null $pharmacy
 * @property-read \Ignite\Evaluation\Entities\Visit|null $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails whereInvestigation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails wherePatientInvoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails wherePatientInvoiceAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails wherePrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPaymentsDetails whereVisit($value)
 */
	class EvaluationPaymentsDetails extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\RemovedBills
 *
 * @property int $id
 * @property int|null $visit
 * @property int|null $investigation
 * @property int|null $dispensing
 * @property int|null $sale
 * @property string|null $reason
 * @property int $user
 * @property int|null $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $recurrent
 * @property int|null $ward
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereDispensing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereInvestigation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereRecurrent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereVisit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\RemovedBills whereWard($value)
 */
	class RemovedBills extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\Bank
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Bank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Bank whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Bank whereUpdatedAt($value)
 */
	class Bank extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\FinanceInvoicePayment
 *
 * @property int $id
 * @property int|null $account
 * @property int|null $user
 * @property string $mode
 * @property float $amount
 * @property int|null $grn
 * @property int|null $invoice
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\BankAccount|null $accounts
 * @property-read \Ignite\Inventory\Entities\InventoryBatch|null $grns
 * @property-read \Ignite\Inventory\Entities\InventoryInvoice|null $invoices
 * @property-read \Ignite\Users\Entities\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereGrn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereInvoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceInvoicePayment whereUser($value)
 */
	class FinanceInvoicePayment extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PatientInvoice
 *
 * @property int $id
 * @property int $patient_id
 * @property int|null $user_id
 * @property float|null $amount
 * @property string|null $description
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\PatientInvoiceDetails[] $details
 * @property-read mixed $total
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @property-read \Ignite\Users\Entities\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoice whereUserId($value)
 */
	class PatientInvoice extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PaymentsCash
 *
 * @property int $id
 * @property int $payment
 * @property float $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\EvaluationPayments $_payment
 * @property-read \Ignite\Finance\Entities\EvaluationPayments $payments
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCash whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCash whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCash whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCash wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCash whereUpdatedAt($value)
 */
	class PaymentsCash extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\ChangeInsurance
 *
 * @property int $id
 * @property int $visit_id
 * @property int|null $prescription_id
 * @property int|null $procedure_id
 * @property string $mode
 * @property int|null $scheme_id
 * @property int $user_id
 * @property float $amount
 * @property int $paid
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance wherePrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereProcedureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\ChangeInsurance whereVisitId($value)
 */
	class ChangeInsurance extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\DispatchDetails
 *
 * @property int $id
 * @property int $insurance_invoice
 * @property int $dispatch
 * @property float $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\Dispatch $dispatchs
 * @property-read \Ignite\Finance\Entities\InsuranceInvoice $invoice
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\DispatchDetails whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\DispatchDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\DispatchDetails whereDispatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\DispatchDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\DispatchDetails whereInsuranceInvoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\DispatchDetails whereUpdatedAt($value)
 */
	class DispatchDetails extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\FinanceAccountType
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountType whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountType whereUpdatedAt($value)
 */
	class FinanceAccountType extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PettyCash
 *
 * @property int $id
 * @property float|null $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCash whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCash whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCash whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCash whereUpdatedAt($value)
 */
	class PettyCash extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\FinanceTransactions
 *
 * @property int $id
 * @property int $account
 * @property string $type
 * @property float $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceTransactions whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceTransactions whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceTransactions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceTransactions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceTransactions whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceTransactions whereUpdatedAt($value)
 */
	class FinanceTransactions extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\Transactions
 *
 * @property int $id
 * @property int $user
 * @property string $gateway
 * @property string $account
 * @property string|null $gateway_ref
 * @property float $amount
 * @property int $reference
 * @property string $transaction
 * @property string|null $extra
 * @property string $timestamp
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereExtra($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereGateway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereGatewayRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereTimestamp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereTransaction($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Transactions whereUser($value)
 */
	class Transactions extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\SplitInsuranceItems
 *
 * @property int $id
 * @property int $parent_id
 * @property int $visit_id
 * @property int|null $prescription_id
 * @property int|null $investigation_id
 * @property string|null $mode
 * @property int|null $user_id
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Investigations|null $investigations
 * @property-read \Ignite\Evaluation\Entities\Prescriptions|null $prescriptions
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereInvestigationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems wherePrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsuranceItems whereVisitId($value)
 */
	class SplitInsuranceItems extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PettyCashUpdates
 *
 * @property int $id
 * @property int $user
 * @property float|null $amount
 * @property string $type
 * @property string|null $reason
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCashUpdates whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCashUpdates whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCashUpdates whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCashUpdates whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCashUpdates whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCashUpdates whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PettyCashUpdates whereUser($value)
 */
	class PettyCashUpdates extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PatientAccount
 *
 * @property int $id
 * @property string|null $reference
 * @property string|null $details
 * @property float $credit
 * @property float $debit
 * @property float $balance
 * @property int $patient
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\Patients $patients
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientAccount whereUpdatedAt($value)
 */
	class PatientAccount extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\FinanceAccountGroup
 *
 * @property int $id
 * @property int $type
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\FinanceAccountType $types
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountGroup whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountGroup whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountGroup whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountGroup whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountGroup whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceAccountGroup whereUpdatedAt($value)
 */
	class FinanceAccountGroup extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\EvaluationPayments
 *
 * @property int $id
 * @property string $receipt
 * @property int|null $patient
 * @property int $user
 * @property float|null $amount
 * @property int|null $visit
 * @property int|null $sale
 * @property \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Dispensing[] $dispensing
 * @property int $deposit
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\PaymentsCard $card
 * @property-read \Ignite\Finance\Entities\PaymentsCash $cash
 * @property-read \Ignite\Finance\Entities\PaymentsCheque $cheque
 * @property-read \Ignite\Finance\Entities\Copay $copay
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\EvaluationPaymentsDetails[] $details
 * @property-read mixed $cash_amount
 * @property-read mixed $modes
 * @property-read mixed $total
 * @property-read \Ignite\Finance\Entities\JambopayPayment $jambopay
 * @property-read \Ignite\Finance\Entities\PaymentsMpesa $mpesa
 * @property-read \Ignite\Reception\Entities\Patients|null $patients
 * @property-read \Ignite\Inventory\Entities\InventoryBatchProductSales|null $sales
 * @property-read \Ignite\Users\Entities\User $users
 * @property-read \Ignite\Evaluation\Entities\Visit|null $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereDeposit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereDispensing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereSale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\EvaluationPayments whereVisit($value)
 */
	class EvaluationPayments extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PatientInvoiceDetails
 *
 * @property int $id
 * @property int $invoice_id
 * @property int|null $investigation_id
 * @property int|null $dispensing_id
 * @property int $item_id
 * @property string $item_name
 * @property string|null $item_type
 * @property float $amount
 * @property string|null $service_date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereDispensingId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereInvestigationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereItemType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereServiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientInvoiceDetails whereUpdatedAt($value)
 */
	class PatientInvoiceDetails extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\Dispatch
 *
 * @property int $id
 * @property int $user
 * @property int|null $firm
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Insurance|null $company
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\DispatchDetails[] $details
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Dispatch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Dispatch whereFirm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Dispatch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Dispatch whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Dispatch whereUser($value)
 */
	class Dispatch extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\JambopayPayment
 *
 * @property int $id
 * @property int|null $payment_id
 * @property int|null $patient_id
 * @property string $Code
 * @property string $RevenueStreamID
 * @property string $BillNumber
 * @property string|null $CustomerNames
 * @property string $PhoneNumber
 * @property int $PaymentStatus
 * @property string|null $PaymentStatusName
 * @property float $Amount
 * @property string|null $Narration
 * @property string|null $selected_items
 * @property int $processed
 * @property int $complete
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\Patients|null $patient
 * @property-read \Ignite\Finance\Entities\EvaluationPayments|null $payments
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereBillNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereCustomerNames($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereNarration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment wherePaymentStatusName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment wherePhoneNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereProcessed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereRevenueStreamID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereSelectedItems($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\JambopayPayment whereUpdatedAt($value)
 */
	class JambopayPayment extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\Copay
 *
 * @property int $id
 * @property int $visit_id
 * @property int $patient_id
 * @property int $company_id
 * @property int $scheme_id
 * @property float $amount
 * @property int|null $payment_id
 * @property int|null $invoice_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Settings\Entities\Insurance $company
 * @property-read mixed $desc
 * @property-read \Ignite\Settings\Entities\Schemes $scheme
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereInvoiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Copay whereVisitId($value)
 */
	class Copay extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\Banking
 *
 * @property int $id
 * @property int $bank
 * @property int $account
 * @property int $user
 * @property float $amount
 * @property string $type
 * @property string $mode
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\BankAccount $accounts
 * @property-read \Ignite\Finance\Entities\Bank $banks
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\Banking whereUser($value)
 */
	class Banking extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\BankingCheque
 *
 * @property int $id
 * @property int $banking
 * @property string $holder_name
 * @property string $cheque_number
 * @property string $cheque_date
 * @property string $bank
 * @property string $branch
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereBanking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereChequeDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereChequeNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereHolderName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankingCheque whereUpdatedAt($value)
 */
	class BankingCheque extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\SplitInsurance
 *
 * @property int $id
 * @property int $visit_id
 * @property int|null $scheme
 * @property int $status
 * @property int|null $user_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\PatientInsurance|null $_scheme
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\SplitInsuranceItems[] $children
 * @property-read \Ignite\Evaluation\Entities\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsurance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsurance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsurance whereScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsurance whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsurance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsurance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\SplitInsurance whereVisitId($value)
 */
	class SplitInsurance extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PaymentsMpesa
 *
 * @property int $id
 * @property int $payment
 * @property string|null $reference
 * @property string|null $number
 * @property string|null $paybil
 * @property string|null $account
 * @property float $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\EvaluationPayments $payments
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa whereAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa wherePaybil($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsMpesa whereUpdatedAt($value)
 */
	class PaymentsMpesa extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\InsuranceInvoicePayment
 *
 * @property int $id
 * @property int $insurance_invoice
 * @property int $user
 * @property float $amount
 * @property int|null $batch
 * @property string|null $mode
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\InsuranceInvoice $invoice
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereInsuranceInvoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoicePayment whereUser($value)
 */
	class InsuranceInvoicePayment extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PatientTransaction
 *
 * @property int $id
 * @property string $type
 * @property float $amount
 * @property int|null $payment_id
 * @property int $patient_id
 * @property string|null $details
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction wherePaymentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PatientTransaction whereUpdatedAt($value)
 */
	class PatientTransaction extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\InsuranceInvoice
 *
 * @property int $id
 * @property string $invoice_no
 * @property int|null $visit
 * @property int|null $company_id
 * @property int|null $scheme_id
 * @property int|null $receipt
 * @property int|null $payment
 * @property string|null $invoice_date
 * @property string|null $dispatch
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $split_id
 * @property-read \Ignite\Finance\Entities\Copay $copaid
 * @property-read mixed $nice_status
 * @property-read mixed $paid
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Investigations[] $investigations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\InsuranceInvoicePayment[] $payments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\PrescriptionPayment[] $prescriptions
 * @property-read \Ignite\Inventory\Entities\InventoryBatchProductSales|null $sales
 * @property-read \Ignite\Settings\Entities\Schemes|null $scheme
 * @property-read \Ignite\Evaluation\Entities\Visit|null $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereDispatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereInvoiceDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereInvoiceNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereReceipt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereSchemeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereSplitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\InsuranceInvoice whereVisit($value)
 */
	class InsuranceInvoice extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\MpesaCallback
 *
 * @property int $id
 * @property string $msisdn
 * @property float $amount
 * @property string $mpesa_trx_date
 * @property string $mpesa_trx_id
 * @property string $trx_status
 * @property string $return_code
 * @property string $description
 * @property string $merchant_transaction_id
 * @property int $added
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereAdded($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereMerchantTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereMpesaTrxDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereMpesaTrxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereMsisdn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereReturnCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereTrxStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\MpesaCallback whereUpdatedAt($value)
 */
	class MpesaCallback extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PaymentsCheque
 *
 * @property int $id
 * @property int|null $payment
 * @property int|null $insurance_payment
 * @property string|null $name
 * @property string|null $number
 * @property string|null $date
 * @property string|null $bank
 * @property string|null $bank_branch
 * @property float $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\FinanceEvaluationInsurancePayments|null $insurance_payments
 * @property-read \Ignite\Finance\Entities\EvaluationPayments|null $payments
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereInsurancePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCheque whereUpdatedAt($value)
 */
	class PaymentsCheque extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\BankAccount
 *
 * @property int $id
 * @property int $bank
 * @property string|null $name
 * @property string $number
 * @property float $balance
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\Bank $banks
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankAccount whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankAccount whereBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankAccount whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankAccount whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\BankAccount whereUpdatedAt($value)
 */
	class BankAccount extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\PaymentsCard
 *
 * @property int $id
 * @property int $payment
 * @property string|null $type
 * @property string|null $name
 * @property string|null $number
 * @property string|null $expiry
 * @property string|null $security
 * @property float $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\EvaluationPayments $payments
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereExpiry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereSecurity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\PaymentsCard whereUpdatedAt($value)
 */
	class PaymentsCard extends \Eloquent {}
}

namespace Ignite\Finance\Entities{
/**
 * Ignite\Finance\Entities\FinanceGlAccounts
 *
 * @property int $id
 * @property int $group
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Finance\Entities\FinanceAccountGroup $groups
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceGlAccounts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceGlAccounts whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceGlAccounts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceGlAccounts whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Finance\Entities\FinanceGlAccounts whereUpdatedAt($value)
 */
	class FinanceGlAccounts extends \Eloquent {}
}

namespace Ignite\Sms\Entities{
/**
 * Ignite\Sms\Entities\SmsWallet
 *
 * @property int $id
 * @property mixed|null $float
 * @property mixed|null $available
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsWallet whereAvailable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsWallet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsWallet whereFloat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsWallet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsWallet whereUpdatedAt($value)
 */
	class SmsWallet extends \Eloquent {}
}

namespace Ignite\Sms\Entities{
/**
 * Ignite\Sms\Entities\Sms
 *
 * @property int $id
 * @property string $number
 * @property string $message
 * @property int|null $sender
 * @property string|null $name
 * @property string|null $type
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Sms\Entities\MessageResponse $responses
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereSender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Sms whereUpdatedAt($value)
 */
	class Sms extends \Eloquent {}
}

namespace Ignite\Sms\Entities{
/**
 * Ignite\Sms\Entities\SmsJournal
 *
 * @property int $id
 * @property string $reference
 * @property string $type
 * @property string $gateway
 * @property string|null $description
 * @property float $amount
 * @property float|null $last_balance
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereGateway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereLastBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsJournal whereUpdatedAt($value)
 */
	class SmsJournal extends \Eloquent {}
}

namespace Ignite\Sms\Entities{
/**
 * Ignite\Sms\Entities\MessageResponse
 *
 * @property int $id
 * @property int $message
 * @property string $number
 * @property string $cost
 * @property string $status
 * @property string $messageId
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereMessageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\MessageResponse whereUpdatedAt($value)
 */
	class MessageResponse extends \Eloquent {}
}

namespace Ignite\Sms\Entities{
/**
 * Ignite\Sms\Entities\Contacts
 *
 * @property int $id
 * @property string $fullname
 * @property string $mobile
 * @property string|null $group
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Contacts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Contacts whereFullname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Contacts whereGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Contacts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Contacts whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\Contacts whereUpdatedAt($value)
 */
	class Contacts extends \Eloquent {}
}

namespace Ignite\Sms\Entities{
/**
 * Ignite\Sms\Entities\SmsPref
 *
 * @property int $id
 * @property int $sms_enabled
 * @property int $daily
 * @property int $one_day
 * @property int $two_day
 * @property int $weekly
 * @property int $created
 * @property int $rescheduled
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereDaily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereOneDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereRescheduled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereSmsEnabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereTwoDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Sms\Entities\SmsPref whereWeekly($value)
 */
	class SmsPref extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\NextOfKin
 *
 * @property int $patient
 * @property mixed $first_name
 * @property mixed|null $middle_name
 * @property mixed $last_name
 * @property string|null $relationship
 * @property mixed $mobile
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $full_name
 * @property-read \Ignite\Reception\Entities\Patients $patients
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin whereRelationship($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\NextOfKin whereUpdatedAt($value)
 */
	class NextOfKin extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\PatientDocuments
 *
 * @property int $id
 * @property int $patient
 * @property string $document_type
 * @property string $filename
 * @property string $mime
 * @property string $description
 * @property int $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property mixed|null $document
 * @property-read \Ignite\Reception\Entities\Patients $patients
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereDocument($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereDocumentType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereMime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientDocuments whereUser($value)
 */
	class PatientDocuments extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\PatientInsurance
 *
 * @property int $id
 * @property int $patient
 * @property int $scheme
 * @property string|null $policy_number
 * @property string|null $principal
 * @property string|null $dob
 * @property int|null $relationship
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $desc
 * @property-read mixed $is_copay
 * @property-read \Ignite\Reception\Entities\Patients $patients
 * @property-read \Ignite\Settings\Entities\Schemes $schemes
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance wherePolicyNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance wherePrincipal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance whereRelationship($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance whereScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\PatientInsurance whereUpdatedAt($value)
 */
	class PatientInsurance extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\Patients
 *
 * @property int $id
 * @property string|null $patient_no
 * @property mixed $first_name
 * @property mixed|null $middle_name
 * @property mixed $last_name
 * @property \Carbon\Carbon|null $dob
 * @property string|null $age
 * @property string|null $age_in
 * @property string|null $sex
 * @property mixed $mobile
 * @property mixed $id_no
 * @property mixed|null $email
 * @property mixed|null $telephone
 * @property mixed|null $alt_number
 * @property mixed|null $address
 * @property string|null $post_code
 * @property string|null $town
 * @property int $status
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property mixed|null $image
 * @property int|null $external_institution
 * @property-read \Ignite\Finance\Entities\PatientAccount $account
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\AdmissionRequest[] $admissionRequest
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Reception\Entities\Appointments[] $appointments
 * @property-read \Ignite\Inpatient\Entities\Bed $bed
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Reception\Entities\PatientDocuments[] $documents
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryBatchProductSales[] $drug_purchases
 * @property-read mixed $checked_in_status
 * @property-read mixed $full_name
 * @property-read mixed $insured
 * @property-read mixed $is_insured
 * @property-read mixed $number
 * @property-read mixed $registered
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\PatientInvoice[] $invoices
 * @property-read \Ignite\Reception\Entities\NextOfKin $nok
 * @property-read \Ignite\Users\Entities\UserProfile $profile
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Reception\Entities\PatientInsurance[] $schemes
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Visit[] $visits
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Reception\Entities\Patients onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereAgeIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereAltNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereDob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereExternalInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereIdNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereMiddleName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients wherePatientNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients wherePostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereSex($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Patients whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Reception\Entities\Patients withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Reception\Entities\Patients withoutTrashed()
 */
	class Patients extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\Spine
 *
 */
	class Spine extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\Appointments
 *
 * @property int $id
 * @property int|null $patient
 * @property string|null $guest
 * @property string|null $phone
 * @property \Carbon\Carbon $time
 * @property int $category
 * @property int $doctor
 * @property string|null $instructions
 * @property int $status
 * @property int|null $clinic
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\AppointmentCategory $categories
 * @property-read \Ignite\Settings\Entities\Clinics|null $clinics
 * @property-read \Ignite\Users\Entities\UserProfile $doctors
 * @property-read mixed $is_future
 * @property-read mixed $is_guest
 * @property-read mixed $mobile
 * @property-read \Ignite\Reception\Entities\Patients|null $patients
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereClinic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereGuest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\Appointments whereUpdatedAt($value)
 */
	class Appointments extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\Consultation
 *
 */
	class Consultation extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\AppointmentCategory
 *
 * @property int $id
 * @property string $name
 * @property string|null $payload
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Reception\Entities\Appointments[] $appointments
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\AppointmentCategory whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\AppointmentCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\AppointmentCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Reception\Entities\AppointmentCategory wherePayload($value)
 */
	class AppointmentCategory extends \Eloquent {}
}

namespace Ignite\Reception\Entities{
/**
 * Ignite\Reception\Entities\Temp
 *
 */
	class Temp extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\V1InvestigationNotes
 *
 */
	class V1InvestigationNotes extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\ExternalOrderDetails
 *
 * @property int $id
 * @property int $order_id
 * @property int $procedure_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $type
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrderDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrderDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrderDetails whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrderDetails whereProcedureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrderDetails whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrderDetails whereUpdatedAt($value)
 */
	class ExternalOrderDetails extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Bedposition
 *
 * @property-read \Ignite\Inpatient\Entities\Ward $ward
 */
	class Bedposition extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\V1Diagnosis
 *
 * @property-read \Ignite\Evaluation\Entities\DiagnosisCodes $diagnosis
 */
	class V1Diagnosis extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\V1GeneralExam
 *
 */
	class V1GeneralExam extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\ProcedureCategoryTemplates
 *
 * @property int $id
 * @property int $category
 * @property string $template
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategoryTemplates whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategoryTemplates whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategoryTemplates whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategoryTemplates whereTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategoryTemplates whereUpdatedAt($value)
 */
	class ProcedureCategoryTemplates extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\DischargeNote
 *
 */
	class DischargeNote extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\PrescriptionPayment
 *
 * @property int $id
 * @property int|null $prescription_id
 * @property float $price
 * @property float $discount
 * @property float $cost
 * @property int $quantity
 * @property int $paid
 * @property int $invoiced
 * @property int $complete
 * @property string|null $transfer
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $total
 * @property-read \Ignite\Evaluation\Entities\Prescriptions|null $prescription
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment wherePaid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment wherePrescriptionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereTransfer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PrescriptionPayment whereUpdatedAt($value)
 */
	class PrescriptionPayment extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Sensitivity
 *
 * @property int $id
 * @property int $visit_id
 * @property int $drug_id
 * @property int|null $test_id
 * @property int|null $result_id
 * @property int|null $procedure_id
 * @property string $sensitivity
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $drug
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereDrugId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereProcedureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereResultId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereSensitivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sensitivity whereVisitId($value)
 */
	class Sensitivity extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\HaemogramTitle
 *
 * @property int $id
 * @property string $name
 * @property int|null $procedure
 * @property string|null $description
 * @property int|null $sort_order
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures|null $procedures
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\SubProcedures[] $tests
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\HaemogramTitle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\HaemogramTitle whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\HaemogramTitle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\HaemogramTitle whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\HaemogramTitle whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\HaemogramTitle whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\HaemogramTitle whereUpdatedAt($value)
 */
	class HaemogramTitle extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\DoctorNotes
 *
 * @property int $id
 * @property int $visit
 * @property string|null $presenting_complaints
 * @property string|null $past_medical_history
 * @property string|null $examination
 * @property string|null $diagnosis
 * @property string|null $investigations
 * @property string|null $treatment_plan
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\Sentinel|null $doctor
 * @property-read mixed $codes
 * @property-read mixed $visit_type
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereDiagnosis($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereExamination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereInvestigations($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes wherePastMedicalHistory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes wherePresentingComplaints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereTreatmentPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DoctorNotes whereVisit($value)
 */
	class DoctorNotes extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Unit
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Unit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Unit whereUpdatedAt($value)
 */
	class Unit extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\ExternalOrders
 *
 * @property int $id
 * @property int $patient_id
 * @property int $institution
 * @property int $user
 * @property string|null $description
 * @property string|null $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\ExternalOrderDetails[] $details
 * @property-read \Ignite\Evaluation\Entities\PartnerInstitution $from
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @property-read \Ignite\Users\Entities\User $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders whereInstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ExternalOrders whereUser($value)
 */
	class ExternalOrders extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Drawings
 *
 * @property int $id
 * @property int $visit
 * @property string|null $object
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Drawings whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Drawings whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Drawings whereObject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Drawings whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Drawings whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Drawings whereVisit($value)
 */
	class Drawings extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\WardAssigned
 *
 * @property int $id
 * @property int $admission_id
 * @property int|null $visit_id
 * @property int $ward_id
 * @property string|null $admitted_at
 * @property string|null $discharged_at
 * @property float $price
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $invoiced
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereAdmittedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereDischargedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereVisitId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\WardAssigned whereWardId($value)
 */
	class WardAssigned extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Additives
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Additives whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Additives whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Additives whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Additives whereUpdatedAt($value)
 */
	class Additives extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\ProcedureTemplates
 *
 * @property int $id
 * @property int $procedure
 * @property string $template
 * @property string|null $payload
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureTemplates whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureTemplates whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureTemplates wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureTemplates whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureTemplates whereTemplate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureTemplates whereUpdatedAt($value)
 */
	class ProcedureTemplates extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\V1Treatment
 *
 */
	class V1Treatment extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\ProcedureInventoryItem
 *
 * @property int $id
 * @property int $procedure
 * @property int $item
 * @property float|null $units
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $inventory
 * @property-read \Ignite\Evaluation\Entities\Procedures $the_procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureInventoryItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureInventoryItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureInventoryItem whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureInventoryItem whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureInventoryItem whereUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureInventoryItem whereUpdatedAt($value)
 */
	class ProcedureInventoryItem extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\PageCount
 *
 * @property int $id
 * @property int $visit_id
 * @property int|null $test_id
 * @property int $pages
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PageCount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PageCount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PageCount wherePages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PageCount whereTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PageCount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PageCount whereVisitId($value)
 */
	class PageCount extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\EyeExam
 *
 * @property int $id
 * @property int $visit
 * @property string $option
 * @property string $od
 * @property string $os
 * @property string $comments
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereOd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereOption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\EyeExam whereVisit($value)
 */
	class EyeExam extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Preliminary
 *
 * @property int $id
 * @property int $visit
 * @property string $entity
 * @property string $left
 * @property string $right
 * @property string $remarks
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereEntity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereLeft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereRight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Preliminary whereVisit($value)
 */
	class Preliminary extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\RecurrentCharge
 *
 * @property int $id
 * @property int $admission_id
 * @property int $visit_id
 * @property int $recurrent_charge_id
 * @property string $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $invoiced
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Ignite\Finance\Entities\RemovedBills $removed_bills
 * @property-read \Ignite\Inpatient\Entities\Visit $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereRecurrentChargeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\RecurrentCharge whereVisitId($value)
 */
	class RecurrentCharge extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\PatientAccount
 *
 * @property int $id
 * @property float $balance
 * @property int $patient_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PatientAccount whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PatientAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PatientAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PatientAccount wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PatientAccount whereUpdatedAt($value)
 */
	class PatientAccount extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\SampleCollectionMethods
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleCollectionMethods whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleCollectionMethods whereName($value)
 */
	class SampleCollectionMethods extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Dispensing
 *
 * @property int $id
 * @property int $visit
 * @property int|null $prescription
 * @property int|null $user
 * @property int|null $payment_status
 * @property float|null $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\DispensingDetails[] $details
 * @property-read \Ignite\Evaluation\Entities\Prescriptions|null $prescriptions
 * @property-read \Ignite\Finance\Entities\RemovedBills $removed_bills
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing wherePrescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Dispensing whereVisit($value)
 */
	class Dispensing extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Admission
 *
 * @property-read \Ignite\Reception\Entities\Patients $patient
 */
	class Admission extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Procedures
 *
 * @property int $id
 * @property string $name
 * @property string $code
 * @property int $category
 * @property string|null $gender
 * @property int|null $template
 * @property float $cash_charge
 * @property float|null $insurance_charge
 * @property int $charge_insurance
 * @property int $precharge
 * @property string|null $description
 * @property int $status
 * @property int $sensitivity
 * @property-read \Ignite\Evaluation\Entities\ProcedureCategories $categories
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\SubProcedures[] $children
 * @property-read \Ignite\Evaluation\Entities\CriticalValues $critical_values
 * @property-read \Ignite\Evaluation\Entities\Formula $formula
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Formula[] $formulae
 * @property-read mixed $price
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Settings\Entities\CompanyPrice[] $inclusions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\ProcedureInventoryItem[] $items
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\ReferenceRange[] $ref_ranges
 * @property-read \Ignite\Evaluation\Entities\Remarks $remarks
 * @property-read \Ignite\Evaluation\Entities\ProcedureTemplates $templates
 * @property-read \Ignite\Evaluation\Entities\TemplateLab $templates_lab
 * @property-read \Ignite\Evaluation\Entities\SubProcedures $this_test
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\HaemogramTitle[] $titles
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereCashCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereChargeInsurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereInsuranceCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures wherePrecharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereSensitivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Procedures whereTemplate($value)
 */
	class Procedures extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\V1Complaint
 *
 */
	class V1Complaint extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\LabtestCategories
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabtestCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabtestCategories whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabtestCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabtestCategories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabtestCategories whereUpdatedAt($value)
 */
	class LabtestCategories extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\FinancePatientAccounts
 *
 * @property int $id
 * @property string|null $reference
 * @property string|null $details
 * @property float $credit
 * @property float $debit
 * @property float $balance
 * @property int $patient
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\Patients $patients
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereBalance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereCredit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereDebit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\FinancePatientAccounts whereUpdatedAt($value)
 */
	class FinancePatientAccounts extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Sample
 *
 * @property int $id
 * @property int $patient_id
 * @property int|null $visit_id
 * @property int|null $type_id
 * @property string|null $details
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $collection_method_id
 * @property-read \Ignite\Evaluation\Entities\SampleCollectionMethods|null $method
 * @property-read \Ignite\Reception\Entities\Patients $patient
 * @property-read \Ignite\Evaluation\Entities\SampleType|null $type
 * @property-read \Ignite\Evaluation\Entities\Visit|null $visit
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample whereCollectionMethodId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Sample whereVisitId($value)
 */
	class Sample extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Discharge
 *
 * @property int $id
 * @property int $admission_id
 * @property int|null $visit_id
 * @property int|null $doctor_id
 * @property int $discharge_notes_id
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Discharge whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Discharge whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Discharge whereDischargeNotesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Discharge whereDoctorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Discharge whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Discharge whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Discharge whereVisitId($value)
 */
	class Discharge extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Prescriptions
 *
 * @property int $id
 * @property int $visit
 * @property int $user
 * @property string $drug
 * @property int $take
 * @property int $whereto
 * @property int $method
 * @property int $duration
 * @property string|null $stop_reason
 * @property int $stopped
 * @property int $status
 * @property bool $allow_substitution
 * @property int $time_measure
 * @property int $quantity
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int $type
 * @property string|null $notes
 * @property int $canceled
 * @property int|null $admission_id
 * @property int $for_discharge
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\AdministerDrug[] $administered
 * @property-read \Ignite\Inpatient\Entities\Admission|null $admission
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Dispensing[] $dispensing
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $drugs
 * @property-read mixed $dose
 * @property-read mixed $is_paid
 * @property-read mixed $priced_amount
 * @property-read mixed $sub
 * @property-read \Ignite\Evaluation\Entities\PrescriptionPayment $payment
 * @property-read \Ignite\Users\Entities\User $users
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereAdmissionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereAllowSubstitution($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereCanceled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereDrug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereForDischarge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereStopReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereStopped($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereTake($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereTimeMeasure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereVisit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Prescriptions whereWhereto($value)
 */
	class Prescriptions extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\RequestDischarge
 *
 */
	class RequestDischarge extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\DiagnosisCodes
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $level
 * @property string $diagnosis_type
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DiagnosisCodes whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DiagnosisCodes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DiagnosisCodes whereDiagnosisType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DiagnosisCodes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DiagnosisCodes whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DiagnosisCodes whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DiagnosisCodes whereUpdatedAt($value)
 */
	class DiagnosisCodes extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\CriticalValues
 *
 * @property int $id
 * @property int $procedure
 * @property float|null $critical_value
 * @property string $type
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\CriticalValues whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\CriticalValues whereCriticalValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\CriticalValues whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\CriticalValues whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\CriticalValues whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\CriticalValues whereUpdatedAt($value)
 */
	class CriticalValues extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Investigations
 *
 * @property int $id
 * @property int $visit
 * @property string $type
 * @property int $procedure
 * @property int|null $quantity
 * @property float $price
 * @property float|null $discount
 * @property float|null $amount
 * @property int|null $user
 * @property string|null $instructions
 * @property int $ordered
 * @property int $invoiced
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\User|null $doctors
 * @property-read mixed $cash
 * @property-read mixed $has_result
 * @property-read mixed $is_paid
 * @property-read mixed $nice_type
 * @property-read mixed $pesa
 * @property-read \Ignite\Evaluation\Entities\Procedures $p
 * @property-read \Ignite\Finance\Entities\EvaluationPaymentsDetails $payments
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @property-read \Ignite\Finance\Entities\RemovedBills $removed_bills
 * @property-read \Ignite\Evaluation\Entities\InvestigationResult $results
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations diagnosis()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations laboratory()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations treatment()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereOrdered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Investigations whereVisit($value)
 */
	class Investigations extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\PatientFacility
 *
 */
	class PatientFacility extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\V1GeneralHistory
 *
 */
	class V1GeneralHistory extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\TemplateLab
 *
 * @property int $id
 * @property int $procedure
 * @property int|null $title
 * @property int $subtest
 * @property int|null $sort_order
 * @property string|null $alias
 * @property float|null $lab_min_range
 * @property float|null $lab_max_range
 * @property float|null $_0_3d_minrange
 * @property float|null $_0_3d_maxrange
 * @property float|null $_4_30d_minrange
 * @property float|null $_4_30d_maxrange
 * @property float|null $_1_24m_minrange
 * @property float|null $_1_24m_maxrange
 * @property float|null $_25_60m_minrange
 * @property float|null $_25_60m_maxrange
 * @property float|null $_5_19y_minrange
 * @property float|null $_5_19y_maxrange
 * @property float|null $adult_minrange
 * @property float|null $adult_maxrange
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\HaemogramTitle|null $header
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @property-read \Ignite\Evaluation\Entities\Procedures $subtests
 * @property-read \Ignite\Evaluation\Entities\HaemogramTitle|null $titles
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where03dMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where03dMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where124mMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where124mMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where2560mMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where2560mMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where430dMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where430dMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where519yMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab where519yMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereAdultMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereAdultMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereAlias($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereLabMaxRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereLabMinRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereSortOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereSubtest($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\TemplateLab whereUpdatedAt($value)
 */
	class TemplateLab extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\VisitMeta
 *
 * @property int $visit
 * @property string|null $sick_off
 * @property string|null $sick_off_review
 * @property string|null $next_appointment
 * @property int $call
 * @property int $pre_authorization
 * @property int $book_theatre
 * @property int $refer_specialist
 * @property int $book_for_doctor
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\User|null $users
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereBookForDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereBookTheatre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereCall($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereNextAppointment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta wherePreAuthorization($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereReferSpecialist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereSickOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereSickOffReview($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitMeta whereVisit($value)
 */
	class VisitMeta extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\ProcedureCategories
 *
 * @property int $id
 * @property string $name
 * @property string $applies_to
 * @property string|null $deleted_at
 * @property-read mixed $applied_to
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Procedures[] $procedures
 * @property-read \Ignite\Evaluation\Entities\ProcedureCategoryTemplates $templates
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Evaluation\Entities\ProcedureCategories onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategories whereAppliesTo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategories whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ProcedureCategories whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Evaluation\Entities\ProcedureCategories withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Evaluation\Entities\ProcedureCategories withoutTrashed()
 */
	class ProcedureCategories extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\LabResultStatusChange
 *
 * @property int $id
 * @property int $result
 * @property string|null $type
 * @property string|null $reason
 * @property int $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabResultStatusChange whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabResultStatusChange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabResultStatusChange whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabResultStatusChange whereResult($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabResultStatusChange whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabResultStatusChange whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\LabResultStatusChange whereUser($value)
 */
	class LabResultStatusChange extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\ReferenceRange
 *
 * @property int $id
 * @property int $procedure
 * @property string $type
 * @property string|null $gender
 * @property string|null $age
 * @property string|null $lg_type
 * @property float|null $lower
 * @property float|null $upper
 * @property float|null $lg_value
 * @property string|null $flag
 * @property string|null $other_type
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereAge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereFlag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereLgType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereLgValue($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereLower($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereOtherType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\ReferenceRange whereUpper($value)
 */
	class ReferenceRange extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\PartnerInstitution
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string|null $post_code
 * @property string $town
 * @property string $street
 * @property string $building
 * @property string|null $telephone
 * @property string $mobile
 * @property string|null $fax
 * @property string $email
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereBuilding($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereFax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution wherePostCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereStreet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereTown($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\PartnerInstitution whereUpdatedAt($value)
 */
	class PartnerInstitution extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Vitals
 *
 * @property int $id
 * @property int $visit
 * @property float|null $weight
 * @property float|null $height
 * @property string|null $bp_systolic
 * @property string|null $bp_diastolic
 * @property string|null $pulse
 * @property string|null $respiration
 * @property string|null $temperature
 * @property string|null $temperature_location
 * @property float|null $oxygen
 * @property float|null $waist
 * @property float|null $hip
 * @property string|null $blood_sugar
 * @property string $blood_sugar_units
 * @property string|null $allergies
 * @property string|null $chronic_illnesses
 * @property string|null $nurse_notes
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\User $nurse
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereAllergies($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereBloodSugar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereBloodSugarUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereBpDiastolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereBpSystolic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereChronicIllnesses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereHeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereHip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereNurseNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereOxygen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals wherePulse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereRespiration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereTemperatureLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereVisit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereWaist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Vitals whereWeight($value)
 */
	class Vitals extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Visit
 *
 * @property int $id
 * @property int $clinic
 * @property int $patient
 * @property int|null $purpose
 * @property int|null $external_doctor
 * @property int $user
 * @property string $payment_mode
 * @property int|null $scheme
 * @property int|null $next_appointment
 * @property string|null $status
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property int|null $external_order
 * @property int $admission_request_id
 * @property-read \Ignite\Inpatient\Entities\Admission $admission
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\AdmissionRequest[] $admissionRequest
 * @property-read \Ignite\Reception\Entities\Appointments $appointments
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inpatient\Entities\ChargeSheet[] $chargeSheet
 * @property-read \Ignite\Settings\Entities\Clinics $clinics
 * @property-read \Ignite\Finance\Entities\Copay $copay
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\VisitDestinations[] $destinations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Dispensing[] $dispensing
 * @property-read \Ignite\Users\Entities\User $doctors
 * @property-read \Ignite\Evaluation\Entities\Drawings $drawings
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Inventory\Entities\InventoryBatchProductSales[] $drug_purchases
 * @property-read \Ignite\Users\Entities\User|null $external_doctors
 * @property-read mixed $doctor
 * @property-read mixed $doctor_i_d
 * @property-read mixed $mode
 * @property-read mixed $place
 * @property-read mixed $signed_out
 * @property-read mixed $total_bill
 * @property-read mixed $unpaid_amount
 * @property-read mixed $unpaid_cash
 * @property-read mixed $unpaid_insurance
 * @property-read mixed $visit_destination
 * @property-read \Ignite\Finance\Entities\InsuranceInvoice $insurance_invoices
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Investigations[] $investigations
 * @property-read \Ignite\Evaluation\Entities\VisitMeta $metas
 * @property-read \Ignite\Evaluation\Entities\DoctorNotes $notes
 * @property-read \Ignite\Evaluation\Entities\OpNotes $opnotes
 * @property-read \Ignite\Reception\Entities\PatientInsurance|null $patient_scheme
 * @property-read \Ignite\Reception\Entities\Patients $patients
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Prescriptions[] $prescriptions
 * @property-read \Ignite\Evaluation\Entities\PartnerInstitution $requesting_institutions
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Finance\Entities\ChangeInsurance[] $to_cash
 * @property-read \Ignite\Evaluation\Entities\Vitals $vitals
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit checkedAt($destination)
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Evaluation\Entities\Visit onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereAdmissionRequestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereClinic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereExternalDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereExternalOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereNextAppointment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit wherePatient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit wherePaymentMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit wherePurpose($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereScheme($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Visit whereUser($value)
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Evaluation\Entities\Visit withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\Ignite\Evaluation\Entities\Visit withoutTrashed()
 */
	class Visit extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Temp
 *
 */
	class Temp extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Deposit
 *
 * @property int $id
 * @property string $name
 * @property float $cost
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Deposit whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Deposit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Deposit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Deposit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Deposit whereUpdatedAt($value)
 */
	class Deposit extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\InvestigationResult
 *
 * @property int $id
 * @property int $investigation
 * @property int|null $user
 * @property string|null $instructions
 * @property string|null $results
 * @property string|null $comments
 * @property int|null $file
 * @property int $status
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Reception\Entities\PatientDocuments|null $documents
 * @property-read \Ignite\Evaluation\Entities\Investigations $investigations
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Evaluation\Entities\Sensitivity[] $sensitivity_results
 * @property-read \Ignite\Users\Entities\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereInvestigation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereResults($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationResult whereUser($value)
 */
	class InvestigationResult extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\InvestigationItemsConsumed
 *
 * @property int $id
 * @property int $investigation
 * @property int $item
 * @property float $units_consumed
 * @property float|null $amount
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Investigations $investigations
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $items
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationItemsConsumed whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationItemsConsumed whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationItemsConsumed whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationItemsConsumed whereInvestigation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationItemsConsumed whereItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationItemsConsumed whereUnitsConsumed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\InvestigationItemsConsumed whereUpdatedAt($value)
 */
	class InvestigationItemsConsumed extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\VisitDestinations
 *
 * @property int $id
 * @property int $visit
 * @property int $user
 * @property int|null $destination
 * @property int|null $room_id
 * @property string $department
 * @property int $checkout
 * @property string|null $begin_at
 * @property string|null $finish_at
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Users\Entities\User|null $medics
 * @property-read \Ignite\Settings\Entities\Rooms|null $room
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereBeginAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereCheckout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereDepartment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereFinishAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereRoomId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\VisitDestinations whereVisit($value)
 */
	class VisitDestinations extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\DispensingDetails
 *
 * @property int $id
 * @property int $batch
 * @property int $product
 * @property int $quantity
 * @property float $price
 * @property float $discount
 * @property int|null $status
 * @property int $invoiced
 * @property string|null $deleted_at
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Inventory\Entities\InventoryProducts $drug
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereInvoiced($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereProduct($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\DispensingDetails whereUpdatedAt($value)
 */
	class DispensingDetails extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Remarks
 *
 * @property int $id
 * @property int $procedure
 * @property string $remarks
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property string|null $title
 * @property-read \Ignite\Evaluation\Entities\Procedures $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Remarks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Remarks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Remarks whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Remarks whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Remarks whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Remarks whereUpdatedAt($value)
 */
	class Remarks extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\SampleType
 *
 * @property int $id
 * @property string $name
 * @property int|null $procedure
 * @property string|null $details
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures|null $procedures
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleType whereDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleType whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SampleType whereUpdatedAt($value)
 */
	class SampleType extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\SubProcedures
 *
 * @property int $id
 * @property int $procedure
 * @property int|null $parent
 * @property int|null $category
 * @property string|null $titles
 * @property string|null $title
 * @property string|null $lab_sample_type
 * @property string|null $method
 * @property string|null $turn_around_time
 * @property string|null $lab_result_type
 * @property string|null $result_type_details
 * @property string|null $lab_result_options
 * @property string|null $units
 * @property string|null $gender
 * @property float|null $lab_min_range
 * @property float|null $lab_max_range
 * @property float|null $_0_3d_minrange
 * @property float|null $_0_3d_maxrange
 * @property float|null $_4_30d_minrange
 * @property float|null $_4_30d_maxrange
 * @property float|null $_1_24m_minrange
 * @property float|null $_1_24m_maxrange
 * @property float|null $_25_60m_minrange
 * @property float|null $_25_60m_maxrange
 * @property float|null $_5_19y_minrange
 * @property float|null $_5_19y_maxrange
 * @property float|null $adult_minrange
 * @property float|null $adult_maxrange
 * @property int|null $lab_default
 * @property int|null $lab_ordered_independently
 * @property int|null $lab_multiple_orders_allowed
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures|null $_parent
 * @property-read \Ignite\Evaluation\Entities\Procedures $_procedure
 * @property-read \Ignite\Evaluation\Entities\LabtestCategories|null $subProcedureCategories
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where03dMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where03dMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where124mMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where124mMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where2560mMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where2560mMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where430dMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where430dMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where519yMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures where519yMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereAdultMaxrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereAdultMinrange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabDefault($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabMaxRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabMinRange($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabMultipleOrdersAllowed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabOrderedIndependently($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabResultOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabResultType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereLabSampleType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereProcedure($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereResultTypeDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereTitles($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereTurnAroundTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereUnits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\SubProcedures whereUpdatedAt($value)
 */
	class SubProcedures extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\OpNotes
 *
 * @property int $id
 * @property int $visit
 * @property string|null $surgery_indication
 * @property string|null $implants
 * @property string|null $postop
 * @property string|null $date
 * @property int|null $doctor
 * @property string|null $indication
 * @property int|null $user
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Visit $visits
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereDoctor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereImplants($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereIndication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes wherePostop($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereSurgeryIndication($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\OpNotes whereVisit($value)
 */
	class OpNotes extends \Eloquent {}
}

namespace Ignite\Evaluation\Entities{
/**
 * Ignite\Evaluation\Entities\Formula
 *
 * @property int $id
 * @property int|null $procedure_id
 * @property int|null $test_id
 * @property int|null $template_id
 * @property string $formula
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Evaluation\Entities\Procedures|null $procedure
 * @property-read \Ignite\Evaluation\Entities\Procedures|null $test
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Formula whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Formula whereFormula($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Formula whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Formula whereProcedureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Formula whereTemplateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Formula whereTestId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Evaluation\Entities\Formula whereUpdatedAt($value)
 */
	class Formula extends \Eloquent {}
}

namespace Ignite\Core\Entities{
/**
 * Ignite\Core\Entities\Notification
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $type
 * @property string $icon_class
 * @property string|null $link
 * @property string $title
 * @property string $message
 * @property int $is_read
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read string $time_ago
 * @property-read \Ignite\Users\Entities\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereIconClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereIsRead($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\Notification whereUserId($value)
 */
	class Notification extends \Eloquent {}
}

namespace Ignite\Core\Entities{
/**
 * Ignite\Core\Entities\DashboardWidgets
 *
 * @property int $id
 * @property int $user_id
 * @property string $widgets
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\DashboardWidgets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\DashboardWidgets whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\DashboardWidgets whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\DashboardWidgets whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Core\Entities\DashboardWidgets whereWidgets($value)
 */
	class DashboardWidgets extends \Eloquent {}
}

namespace Ignite\Cafeteria\Entities{
/**
 * Ignite\Cafeteria\Entities\ProductsCategories
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\ProductsCategories whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\ProductsCategories whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\ProductsCategories whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\ProductsCategories whereUpdatedAt($value)
 */
	class ProductsCategories extends \Eloquent {}
}

namespace Ignite\Cafeteria\Entities{
/**
 * Ignite\Cafeteria\Entities\FoodDispatchItems
 *
 * @property int $id
 * @property int $product_id
 * @property int $dispatch_id
 * @property int $quantity
 * @property float $price
 * @property float $total
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Cafeteria\Entities\Products $product
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems whereDispatchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems whereProductId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems whereTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatchItems whereUpdatedAt($value)
 */
	class FoodDispatchItems extends \Eloquent {}
}

namespace Ignite\Cafeteria\Entities{
/**
 * Ignite\Cafeteria\Entities\Products
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property float $cost
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read \Ignite\Cafeteria\Entities\ProductsCategories $category
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\Products whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\Products whereCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\Products whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\Products whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\Products whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\Products whereUpdatedAt($value)
 */
	class Products extends \Eloquent {}
}

namespace Ignite\Cafeteria\Entities{
/**
 * Ignite\Cafeteria\Entities\FoodDispatch
 *
 * @property int $id
 * @property string $desc
 * @property int $user_id
 * @property int $staff
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property-read mixed $total
 * @property-read \Illuminate\Database\Eloquent\Collection|\Ignite\Cafeteria\Entities\FoodDispatchItems[] $items
 * @property-read \Ignite\Users\Entities\Sentinel $user
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatch whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatch whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatch whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatch whereStaff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatch whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\Ignite\Cafeteria\Entities\FoodDispatch whereUserId($value)
 */
	class FoodDispatch extends \Eloquent {}
}

