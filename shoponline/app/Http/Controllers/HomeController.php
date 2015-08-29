<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Color;

use App\Madein;
use App\Material;


use App\Size;
use App\Brand;

use App\Users;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Cache;
use App\Product;
use App\Category;
use Lang;
use View;
use Route;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $getViewTenProductForHome = Product::getViewTenProductForHome($dataProductByIdCategory);
        return view("pages.home")->with([
                   'getViewTenProductForHome' => $getViewTenProductForHome
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


    #show product


    public function showProductByCategory(Request $request, $stringid)
    {
        $allRequest = $request->all();

        //get Id category
        $arrayStringId = explode('-', $stringid);
        $idCategory    = intval(array_pop($arrayStringId));

        $objCategory = new Category();

        //check id isset in database
        $checkIdCategoryIssetInTable = $objCategory->find($idCategory);
        if (empty($checkIdCategoryIssetInTable)) {
            return redirect()->action('FrontendController@index')->withErrors(Lang::get('messages.no_id'));
        }

        //get any id category parent
        $allCategory = $objCategory->all()->toArray();

        $getAnyIdParentFromIdProduct[] = $idCategory;

        $objCategory->getAnyIdParentFromIdCategory($idCategory, $allCategory, $getAnyIdParentFromIdProduct);


        $objProduct              = new Product();
        $dataProductByIdCategory = $objProduct->where('category_id', $idCategory);
        //===========================================Filter=============================================================
        $arraySort = array();
        if (isset($allRequest['madein']) && $allRequest['madein'] != 0) {
            $filterMadein            = $allRequest['madein'];
            $dataProductByIdCategory = $dataProductByIdCategory->where('madein_id', $filterMadein);
            $arraySort['madein']     = $filterMadein;
        } else {
            $filterMadein = 0;
        }
        if (isset($allRequest['style']) && $allRequest['style'] != 0) {
            $filterStyle             = $allRequest['style'];
            $dataProductByIdCategory = $dataProductByIdCategory->where('style_id', $filterStyle);
            $arraySort['style']      = $filterStyle;
        } else {
            $filterStyle = 0;
        }
        if (isset($allRequest['material']) && $allRequest['material'] != 0) {
            $filterMaterial          = $allRequest['material'];
            $dataProductByIdCategory = $dataProductByIdCategory->where('material_id', $filterMaterial);
            $arraySort['material']   = $filterMaterial;
        } else {
            $filterMaterial = 0;
        }
        if (isset($allRequest['height']) && $allRequest['height'] != 0) {
            $filterHeight            = $allRequest['height'];
            $dataProductByIdCategory = $dataProductByIdCategory->where('height_id', $filterHeight);
            $arraySort['height']     = $filterHeight;
        } else {
            $filterHeight = 0;
        }
        if (isset($allRequest['cost']) && $allRequest['cost'] == 0) {
            $dataProductByIdCategory = $dataProductByIdCategory->orderBy('cost', 'desc');
            $arraySort['cost']       = 0;
        }
        if (isset($allRequest['cost']) && $allRequest['cost'] == 1) {
            $dataProductByIdCategory = $dataProductByIdCategory->orderBy('cost', 'asc');
            $arraySort['cost']       = 1;
        } else {
            $arraySort['cost'] = null;
        }
        $getViewAllMadeInForSelectTag   = Madein::getViewAllMadeInForSelectTag($filterMadein);
        $getViewAllStyleForSelectTag    = Style::getViewAllStyleForSelectTag($filterStyle);
        $getViewAllMaterialForSelectTag = Material::getViewAllMaterialForSelectTag($filterMaterial);
        $getViewAllHeightForSelectTag   = Height::getViewAllHeightForSelectTag($filterHeight);
        //===========================================END-Filter=============================================================

        //dd($dataProductByIdCategory);
        $dataProductByIdCategory = $dataProductByIdCategory->paginate(9);


        return view('frontend.category')->with([
            "dataProductByIdCategory"        => $dataProductByIdCategory,
            "getViewAllMadeInForSelectTag"   => $getViewAllMadeInForSelectTag,
            "getViewAllStyleForSelectTag"    => $getViewAllStyleForSelectTag,
            "getViewAllMaterialForSelectTag" => $getViewAllMaterialForSelectTag,
            "getViewAllHeightForSelectTag"   => $getViewAllHeightForSelectTag,
            'arraySort'                      => $arraySort,


        ]);
    }
}
