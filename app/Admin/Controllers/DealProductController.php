<?php
#app/Http/Admin/Controllers/ShopBannerController.php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\DealProduct;
use Illuminate\Http\Request;
use Validator;

class DealProductController extends Controller
{
    protected $arrTarget;
    protected $dataType;

    public function __construct()
    {
        $this->arrTarget = ['_blank' => '_blank', '_self' => '_self'];
        $this->dataType = ['0' => 'Banner', '1' => 'Background'];
    }

    public function index()
    {

        $data = [
            'title' => 'Deal Product',
            'subTitle' => '',
            'icon' => 'fa fa-indent',
            'urlDeleteItem' => route('deal_product.delete'),
            'removeList' => 0, // 1 - Enable function delete list item
            'buttonRefresh' => 0, // 1 - Enable button refresh
            'buttonSort' => 1, // 1 - Enable button sort
            'css' => '', 
            'js' => '',
        ];
        //Process add content
        $data['menuRight'] = sc_config_group('menuRight', \Request::route()->getName());
        $data['menuLeft'] = sc_config_group('menuLeft', \Request::route()->getName());
        $data['topMenuRight'] = sc_config_group('topMenuRight', \Request::route()->getName());
        $data['topMenuLeft'] = sc_config_group('topMenuLeft', \Request::route()->getName());
        $data['blockBottom'] = sc_config_group('blockBottom', \Request::route()->getName());

        $listTh = [
            'image' => trans('banner.image'),
            'heading'=>'Type Deal',
            'title'=>trans('front.title'),
            'name_product' =>trans('product.product_name'),
            'time_deal' =>'Time Deal',
            'deal_price'=>trans('product.price'),
            'url' => trans('banner.url'),
            'sort' => trans('banner.sort'),
            'status' => trans('banner.status'),
            'target' => trans('banner.target'),
            'action' => trans('banner.admin.action'),
        ];

        $sort_order = request('sort_order') ?? 'id_desc';
        $keyword = request('keyword') ?? '';
        $arrSort = [
            'id__desc' => trans('banner.admin.sort_order.id_desc'),
            'id__asc' => trans('banner.admin.sort_order.id_asc'),
        ];
        $obj = new DealProduct;
        if ($keyword) {
            $obj = $obj->whereRaw('(email like "%' . $keyword . '%" OR name like "%' . $keyword . '%" )');
        }

        if ($sort_order && array_key_exists($sort_order, $arrSort)) {
            $field = explode('__', $sort_order)[0];
            $sort_field = explode('__', $sort_order)[1];
            $obj = $obj->orderBy($field, $sort_field);

        } else {
            $obj = $obj->orderBy('id', 'desc');
        }
        $dataTmp = $obj->paginate(20);

        $dataTr = [];
        foreach ($dataTmp as $key => $row) {
            $dataTr[] = [
                'image' => sc_image_render($row->getThumb(), '', '50px', 'Banner'),
                'heading'=>$row['heading'],
                'title'=>$row['title'],
                'name_product'=>$row['name_product'],
                'time_deal'=>$row['time_deal'],
                'deal_price'=>$row['deal_price'],
                'url' => $row['url'],
                'sort' => $row['sort'],
                'status' => $row['status'] ? '<span class="label label-success">ON</span>' : '<span class="label label-danger">OFF</span>',
                'target' => $row['target'],
                'action' => '
                    <a href="' . route('deal_product.edit', ['id' => $row['id']]) . '"><span title="' . trans('banner.admin.edit') . '" type="button" class="btn btn-flat btn-primary"><i class="fa fa-edit"></i></span></a>&nbsp;

                  <span onclick="deleteItem(' . $row['id'] . ');"  title="' . trans('banner.admin.delete') . '" class="btn btn-flat btn-danger"><i class="fa fa-trash"></i></span>
                  ',
            ];
        }

        $data['listTh'] = $listTh;
        $data['dataTr'] = $dataTr;
        $data['pagination'] = $dataTmp->appends(request()->except(['_token', '_pjax']))->links('admin.component.pagination');
        $data['resultItems'] = trans('banner.admin.result_item', ['item_from' => $dataTmp->firstItem(), 'item_to' => $dataTmp->lastItem(), 'item_total' => $dataTmp->total()]);

//menuRight
        $data['menuRight'][] = '<a href="' . route('deal_product.create') . '" class="btn  btn-success  btn-flat" title="New" id="button_create_new">
        <i class="fa fa-plus" title="'.trans('admin.add_new').'"></i>
                           </a>';
//=menuRight

//menuSearch        
        $optionSort = '';
        foreach ($arrSort as $key => $status) {
            $optionSort .= '<option  ' . (($sort_order == $key) ? "selected" : "") . ' value="' . $key . '">' . $status . '</option>';
        }

        $data['urlSort'] = route('deal_product.index');
        $data['optionSort'] = $optionSort;
//=menuSort

        return view('admin.screen.list')
            ->with($data);
    }

/**
 * Form create new order in admin
 * @return [type] [description]
 */
    public function create()
    {
        $data = [
            'title' =>'Deal Product',
            'subTitle' => '',
            'title_description' => trans('banner.admin.add_new_des'),
            'icon' => 'fa fa-plus',
            'banner' => [],
            'arrTarget' => $this->arrTarget,
            'dataType' => $this->dataType,
            'url_action' => route('deal_product.create'),
        ];
        return view('admin.screen.deal_product')
            ->with($data);
    }

/**
 * Post create new order in admin
 * @return [type] [description]
 */
    public function postCreate()
    {
        $data = request()->all();
        $dataOrigin = request()->all();
        $validator = Validator::make($dataOrigin, [
            'sort' => 'numeric|min:0',
            'email' => 'email|nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $dataInsert = [
            'image' => $data['image'],
            'heading' => $data['heading'],
            'title' => $data['title'],
            'name_product' => $data['name_product'],
            'time_deal' => $data['time_deal'],
            'deal_price'=>$data['deal_price'],
            'url' => $data['url'],
            'target' => $data['target'],
            'status' => empty($data['status']) ? 0 : 1,
            'sort' => (int) $data['sort'],
        ];
        DealProduct::create($dataInsert);

        return redirect()->route('deal_product.index')->with('success', trans('banner.admin.create_success'));

    }

/**
 * Form edit
 */
    public function edit($id)
    {
        $banner = DealProduct::find($id);
        if ($banner === null) {
            return 'no data';
        }
        $data = [
            'title' => trans('banner.admin.edit'),
            'subTitle' => '',
            'title_description' => '',
            'icon' => 'fa fa-pencil-square-o',
            'arrTarget' => $this->arrTarget,
            'dataType' => $this->dataType,
            'banner' => $banner,
            'url_action' => route('deal_product.edit', ['id' => $banner['id']]),
        ];
        return view('admin.screen.deal_product')
            ->with($data);
    }

/**
 * update status
 */
    public function postEdit($id)
    {
        $data = request()->all();
        $dataOrigin = request()->all();
        $validator = Validator::make($dataOrigin, [
            'sort' => 'numeric|min:0',
            'email' => 'email|nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
//Edit

        $dataUpdate = [

        	'image' => $data['image'],
            'heading' => $data['heading'],
            'title' => $data['title'],
            'name_product' => $data['name_product'],
            'time_deal' => $data['time_deal'],
            'deal_price'=>$data['deal_price'],
            'url' => $data['url'],
            'target' => $data['target'],
            'status' => empty($data['status']) ? 0 : 1,
            'sort' => (int) $data['sort'],

            // 'image' => $data['image'],
            // 'url' => $data['url'],
            // 'html' => $data['html'],
            // 'type' => $data['type'] ?? 0,
            // 'target' => $data['target'],
            // 'status' => empty($data['status']) ? 0 : 1,
            // 'sort' => (int) $data['sort'],

        ];
        $obj = DealProduct::find($id);
        $obj->update($dataUpdate);

//
        return redirect()->route('deal_product.index')->with('success', trans('banner.admin.edit_success'));

    }

/*
Delete list item
Need mothod destroy to boot deleting in model
 */
    public function deleteList()
    {
        if (!request()->ajax()) {
            return response()->json(['error' => 1, 'msg' => 'Method not allow!']);
        } else {
            $ids = request('ids');
            $arrID = explode(',', $ids);
            DealProduct::destroy($arrID);
            return response()->json(['error' => 0, 'msg' => '']);
        }
    }

}
