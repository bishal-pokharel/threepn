<?php
namespace App\Resources;

use Illuminate\Http\Request;

class DataGrid 
{
    protected $model;
    protected $request;
    protected $query;
    protected $columns_list;

    public function __construct(Request $request,$model,$query,$columns_list)
    {
        $this->request=$request;
        $this->model=$model;
        $this->query=$query;
        $this->columns_list=$columns_list;
    }

    public function Change($query)
    {
        $this->query=$query;
    }

    public function call()
    {
        $query=$this->query;
        $filter_ables=$this->model::getFilter()??[];
        
        $totalFilteredRecord = $totalDataRecord = $draw_val = "";
        $totalDataRecord = $query->count();
        
        $totalFilteredRecord = $totalDataRecord;
        
        $limit_val = $this->request->input('length');
        $start_val = $this->request->input('start');
        $order_val = $this->columns_list[$this->request->input('order.0.column')];
        $dir_val = $this->request->input('order.0.dir');
        
        if(empty($this->request->input('search.value')))
        {
            $datas = $query->offset($start_val)
            ->limit($limit_val)
            ->orderBy($order_val,$dir_val)
            ->get();
        }
        else {
            $search_text = $this->request->input('search.value');
            $datas =  $query->where(function($query) use ($filter_ables,$search_text){
                    $query->where('id', 'tmp');
                    foreach ($filter_ables as $key => $value) {
                        $query->orWhere($value, 'like', "%{$search_text}%");
                    }
                })->offset($start_val)
                ->limit($limit_val)
                ->orderBy($order_val,$dir_val)
                ->get();
            
            $totalFilteredRecord = $query->where('id','LIKE',"%{$search_text}%")
            ->orWhere('name', 'LIKE',"%{$search_text}%")
            ->count();
        }
        
        $data_val = [];
        $data_val = $datas->toArray();
        $draw_val = $this->request->input('draw');
        $get_json_data =[
            "draw"            => intval($draw_val),
            "recordsTotal"    => intval($totalDataRecord),
            "recordsFiltered" => intval($totalFilteredRecord),
            "data"            => $data_val
        ];
        
        return($get_json_data);        
        
    }
    
}
?>