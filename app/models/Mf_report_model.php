<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mf_report_model extends CI_Model
{


	public function __construct()
	{
		parent::__construct();

	}

	public static function getMaterialData($brand = null,$factoryId = null){
		$ci =& get_instance();
		
		$materialData =

		$ci->db->select('mf_material.name as name , mf_brands.name as brand_name, stores.name as store_name, mf_material_store_qty.quantity as qty, mf_material_store_qty.cost as cost, mf_material_store_qty.store_id as factory_id, mf_unit.name as unit,mf_categories.name as cat_name ');

		$ci->db->from('mf_material_store_qty');

		$ci->db->join('mf_material', 'mf_material.id = mf_material_store_qty.material_id');

		$ci->db->join('mf_brands', 'mf_brands.id = mf_material_store_qty.brand_id');

		$ci->db->join('stores', 'stores.id = mf_material_store_qty.store_id');

		$ci->db->join('mf_unit', 'mf_unit.id = mf_material.uom_id','left');

		$ci->db->join('mf_categories', 'mf_categories.id = mf_material.category_id','left');

		if($brand):
			$ci->db->where('mf_material_store_qty.brand_id',$brand);
		endif;

		if($factoryId):
			$ci->db->where('mf_material_store_qty.store_id', intval($factoryId));
		endif;

		// return $ci->db->last_query();

		return $materialData->get()->result();
	}

    public static function getPurchaseData($startDate,$endDate,$factoryId){
        $ci =& get_instance();

        $purchaseData =
        
        $ci->db->select('mf_purchases.* , mf_suppliers.name as supplier_name, mf_suppliers.phone as supplier_phone, mf_suppliers.address as supplier_address,  stores.name as store_name');

        $ci->db->from('mf_purchases');

        $ci->db->join('mf_suppliers', 'mf_suppliers.id=mf_purchases.supplier_id','left');

        $ci->db->join('stores', 'stores.id=mf_purchases.store_id');

        if($startDate ||  $endDate){

            $ci->db->where('mf_purchases.created_at >=', $startDate." 00:00:00");

            $ci->db->where('mf_purchases.created_at <=', $endDate." 23:59:59");
        }

		if($factoryId){
			$ci->db->where('mf_purchases.store_id', $factoryId);
		}

       return $purchaseData->get()->result();
    }

	public static function getProductionData($stDate=null,$endDate=null,$factory){
		$ci =& get_instance();

		$itemQuery = 
        
        $ci->db->select('mf_production_mst.batch_no as batch_no, mf_production_mst.target_qty as target_qty,mf_production_mst.actual_output as actual_output, mf_production_mst.total_cost as total_cost, mf_production_mst.status as status,products.name as product_name,categories.name as cat_name, mf_recipe_mst.name as recipe_name, mf_unit.name as unit_name, stores.name as store_name');

        $ci->db->from('mf_production_mst'); 

        $ci->db->join('products','mf_production_mst.product_id=products.id'); 

        $ci->db->join('mf_recipe_mst','mf_production_mst.recipe_id=mf_recipe_mst.id'); 

        $ci->db->join('mf_unit','mf_unit.id=mf_production_mst.uom_id','left');
        
        $ci->db->join('categories','categories.id=products.category_id', 'left');

        $ci->db->join('stores','stores.id=mf_production_mst.store_id', 'left');

		if($stDate ||  $endDate){

            $ci->db->where('mf_production_mst.created_at >=', $stDate." 00:00:00");

            $ci->db->where('mf_production_mst.created_at <=', $endDate." 23:59:59");
        }

		if($factory){

			$ci->db->where('mf_production_mst.store_id',$factory);

		}

		return $itemQuery->get()->result();
	}

	public static function getAllExpense($start_date = null, $end_date = null, $factory_id = null){

		$ci =& get_instance();

		$getExpense = 
        $ci->db->select("expenses.date as date ,expenses.reference as ref, expenses.amount as amount,expenses.note as note ,expenses.paid_by as paid_by, expens_category.name as cat_name");
        $ci->db->from('expenses');
        $ci->db->join("expens_category", "expens_category.cat_id = expenses.c_id");

		if($factory_id){

			$ci->db->where('expenses.store_id',$factory_id);

		}

		// if ($start_date || $end_date) {

		// 	$ci->db->where('expenses.date >=', $start_date." 00:00:00");

        //     $ci->db->where('expenses.date <=', $end_date." 23:59:59");
		// }

		return $getExpense->get()->result();


	}
	
	
}

