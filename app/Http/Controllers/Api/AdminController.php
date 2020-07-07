<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

// use Datatables;
use Yajra\DataTables\DataTables;
use Yajra\DataTables\Html\Builder;
use Illuminate\Support\Facades\DB;

use App\Category;
use App\SubCategory;

class AdminController extends Controller
{

    protected $htmlBuilder;

    public function __construct(Builder $htmlBuilder) {
        $this->htmlBuilder = $htmlBuilder;
    }

    public function dashboardIndex()
    {
        $admin_dashboard_active = 'active';
        return view('admin.dashboard', compact('admin_dashboard_active'));
    }

    public function postsIndex($selected)
    {
        $admin_posts_active = 'active';
        $admin_posts_show = 'show';

        $cdata = DB::connection('mysql2')
        ->table('posting')
        ->join('user', 'posting.CreatedBy', '=', 'user.UserId')
        ->join('posting_template', 'posting.PostingTemplateId', '=', 'posting_template.PostingTemplateId')
        ->join('sub_categories', 'posting_template.SubCategoryId', '=' , 'sub_categories.SubCategoryId')
        ->join('cities', 'posting.CityId', '=', 'cities.CityId')
        ->join('posting_status', 'posting.StatusCode', '=', 'posting_status.StatusCode')
        ->select('Posting', 'posting.ShortDescription','user.FirstName', 'user.UserId', 'sub_categories.Description', 'cities.City', 'posting_status.PostingStatus', 'posting.DateCreated');

        switch ($selected) {
            case 'all':
                $all_posts_active = 'active';
                $where = 'All Posts';

                $cdata = $cdata
                    // ->where([
                    //     ['user.UserId', '=', 17],
                    // ])
                    ->get();
                break;
            case 'active':
                $active_posts_active = 'active';
                $where = 'Active Posts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'P'],
                    ])
                    ->get();
                break;
            case 'expired':
                $expired_posts_active = 'active';
                $where = 'Expired Posts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'E'],
                    ])
                    ->get();
                break;
            case 'pending':
                $pending_posts_active = 'active';
                $where = 'Pending Approval';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'G'],
                    ])
                    ->get();
                break;
            case 'reported':
                $reported_posts_active = 'active';
                $where = 'Reported Posts';

                $cdata = $cdata
                    ->join('posting_reports', 'posting.PostingId', '=', 'posting_reports.PostingId')
                    ->join('user as user2', 'posting_reports.ReportedBy', '=', 'user2.UserId')
                    ->join('report_reasons', 'posting_reports.ReportReasonId', '=', 'report_reasons.ReportReasonId')
                    ->select('Posting', 'posting.ShortDescription','user.FirstName', 'user.UserId', 'sub_categories.Description', 'cities.City', 'posting_status.PostingStatus', 'posting.DateCreated', 'report_reasons.Reason', 'user2.FirstName as Reporter')
                    // ->where([
                    //     ['posting_status.StatusCode', '=', 'E'],
                    // ])
                    ->get();
                break;
            case 'drafts':
                $drafts_posts_active = 'active';
                $where = 'Drafts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'D'],
                    ])
                    ->get();
                break;
            case 'deleted':
                $deleted_posts_active = 'active';
                $where = 'Deleted Posts';

                $cdata = $cdata
                    ->where([
                        ['posting_status.StatusCode', '=', 'T'],
                    ])
                    ->get();
                break;
            default:

                break;
        }

        return view('admin.posts', compact('admin_posts_active',
            'admin_posts_show',
            'where',
            'all_posts_active',
            'active_posts_active',
            'expired_posts_active',
            'pending_posts_active',
            'reported_posts_active',
            'drafts_posts_active',
            'deleted_posts_active',
            'cdata'
        ));
    }


    public function categIndex(Request $request)
    {
        $admin_posting_options_active = 'active';
        $admin_posting_options_categ_active = 'active';
        $admin_posting_options_show = 'show';
        $where = 'Categories';

        $cdata = DB::connection('mysql2')
        ->table('categories')
        ->join('user', 'user.UserId', '=', 'categories.CreatedBy')
        ->select('CategoryId', 'Category','CategoryCode', 'IsCategoryActive', 'FirstName')
        ->get();

        return view('admin.posting-options', compact('admin_posting_options_active', 'admin_posting_options_categ_active', 'admin_posting_options_show', 'where' ,'cdata'));
    }


    public function subCategIndex (Request $request)
    {
        $admin_posting_options_active = 'active';
        $admin_posting_options_subcateg_active = 'active';
        $admin_posting_options_show = 'show';
        $where = 'Sub-Categories';

        $cdata = DB::connection('mysql2')
        ->table('sub_categories')
        ->join('categories', 'categories.CategoryId', '=', 'sub_categories.CategoryId')
        ->join('user', 'user.UserId', '=', 'sub_categories.CreatedBy')
        ->select('SubCategoryId', 'Category', 'Description','CategoryCode', 'IsCategoryActive', 'FirstName')
        ->get();

        return view('admin.posting-options',
            compact('admin_posting_options_active', 'admin_posting_options_subcateg_active', 'admin_posting_options_show', 'where', 'cdata')
        );
    }

    public function getSubCategories (Request $request)
    {
        return DB::connection('mysql2')->table('categories')->select(['CategoryId', 'Category', 'CategoryCode']);
    }
}
