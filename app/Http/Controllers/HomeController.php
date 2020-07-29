<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use App\User;
use Carbon;

// use Datatables;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\SubCategory;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //temporary connection call to 2nd DB
        $adata = DB::connection('mysql2');

        $latestPosts = $adata
            ->table('user')
            ->join('posting', 'posting.CreatedBy', '=', 'user.UserId')
            // ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
            // ->join('posting_images', 'posting.PostingId', '=', 'posting_images.PostingId')
            // ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
            ->join('cities', 'posting.CityId', '=', 'cities.CityId')
            ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
            ->select('Posting', 'posting.PostingId', 'posting.ShortDescription', 'posting.Description as Desc',
                    'user.FirstName', 'user.UserId', 'user.AccountType', 'user.ImageUrl as ProfPhoto',
                    'posting.FeaturedPhoto', 'cities.City',
                    'posting_status.PostingStatus', 'posting.DateCreated', 'posting.UnitPrice',
                    DB::raw(
                        '(SELECT ImageUrl FROM posting_images
                            WHERE posting.PostingId = posting_images.PostingId
                            LIMIT 1
                            ) as ImageUrl'
                        )
                    )
            ->where([
                ['posting.StatusCode', '=', 'P'],
                ['posting.DateCreated', '>=', Carbon::now()->subMonth(12)]
            ])
            ->orderBy('DateCreated', 'desc')
            ->distinct('posting.PostingId')
            ->simplePaginate(16);

        return view('home')
        ->with(
            compact('cdata', 'latestPosts')
        );
    }
}
